<?php
/**
 * This file is part of Produccion plugin for FacturaScripts.
 * FacturaScripts  Copyright (C) 2015-2021 Carlos Garcia Gomez <carlos@facturascripts.com>
 * Produccion      Copyright (C) 2020-2021 Jose Antonio Cuello Principal <yopli2000@gmail.com>
 *
 * This program and its files are under the terms of the license specified in the LICENSE file.
 * All Rights Reserved.
 */
namespace FacturaScripts\Plugins\Produccion\Lib\Produccion;

use Exception;
use FacturaScripts\Core\Base\DataBase;
use FacturaScripts\Core\Base\DataBase\DataBaseWhere;
use FacturaScripts\Core\Base\ToolBox;
use FacturaScripts\Dinamic\Model\Join\RecipeLine;
use FacturaScripts\Dinamic\Model\MovimientoStock;
use FacturaScripts\Dinamic\Model\Receta;
use FacturaScripts\Dinamic\Model\Stock;

/**
 * Class to manage recipe production
 *
 * @author Carlos Garcia Gomez  <carlos@facturascripts.com>
 * @author Jose Antonio Cuello  <yopli2000@gmail.com>
 */
class RecipeManager
{

    /**
     * Detail or lines of the Recipe to be made.
     *
     * @var RecipeLine[]
     */
    protected $lines = [];

    /**
     * Recipe to be made.
     *
     * @var Receta
     */
    protected $recipe;

    /**
     * Constructor and class initializer.
     */
    public function __construct()
    {
        $this->recipe = new Receta();
    }

    /**
     * Main procedure for making a recipe.
     *
     * @param string $code
     * @param int    $quantity
     *
     * @return bool
     */
    public function produce($code, $quantity): bool
    {
        if (false === $this->prepareData($code) || false === $this->checkStock($quantity)) {
            return false;
        }

        $dataBase = new DataBase();
        $dataBase->beginTransaction();
        try {
            if ($this->removeStock($quantity) && $this->addStock($quantity) && $this->updateRecipe()) {
                $dataBase->commit();
                return true;
            }
        } catch (Exception $exc) {
            $this->toolBox()->log()->error($exc->getMessage());
        } finally {
            if ($dataBase->inTransaction()) {
                $dataBase->rollback();
            }
        }

        return false;
    }

    /**
     * Add the manufactured product to stock.
     *
     * @param int $quantity
     *
     * @return bool
     */
    protected function addStock($quantity): bool
    {
        if ($this->addRecipeStock($quantity) && $this->addRecipeMovement($quantity)) {
            return true;
        }

        $this->toolBox()->i18nLog()->warning('error-saving-stock');
        return false;
    }

    /**
     * Remove the raw products from stock.
     *
     * @param int $quantity
     *
     * @return bool
     */
    protected function removeStock($quantity): bool
    {
        if ($this->removeRawMaterialStock($quantity) && $this->addRawMaterialMovement($quantity)) {
            return true;
        }

        $this->toolBox()->i18nLog()->warning('error-saving-stock');
        return false;
    }

    /**
     *
     * @return ToolBox
     */
    protected function toolBox()
    {
        return new ToolBox();
    }

    /**
     * Updates the cost price and manufacturing date.
     *
     * @return bool
     */
    protected function updateRecipe(): bool
    {
        $variant = $this->recipe->getVariant();
        $variant->coste = $this->getProductCost();
        $this->recipe->ultimaproduccion = \date(Stock::DATETIME_STYLE);
        if ($variant->save() && $this->recipe->save()) {
            return true;
        }

        $this->toolBox()->i18nLog()->warning('record-save-error');
        return false;
    }

    /**
     * Register the movement for the exit of the raw material stock.
     *
     * @param int $quantity
     *
     * @return bool
     */
    private function addRawMaterialMovement($quantity)
    {
        foreach ($this->lines as $recipeLine) {
            if ($recipeLine->nostock) {
                continue;
            }

            $movement = new MovimientoStock();
            $movement->cantidad = $recipeLine->cantidad * $quantity * -1;
            $movement->codalmacen = $recipeLine->codalmacen;
            $movement->docid = $recipeLine->idreceta;
            $movement->documento = $recipeLine->codreceta;
            $movement->referencia = $recipeLine->referencia;
            $movement->idproducto = $recipeLine->idproducto;
            $movement->docmodel = $this->recipe->modelClassName();
            if (false === $movement->save()) {
                return false;
            }
        }
        return true;
    }

    /**
     * Records the movement for the put into stock of the manufactured material.
     *
     * @param int $quantity
     *
     * @return bool
     */
    private function addRecipeMovement($quantity): bool
    {
        $movement = new MovimientoStock();
        $movement->cantidad = ($this->recipe->cantidad * $quantity);
        $movement->codalmacen = $this->recipe->codalmacen2;
        $movement->docid = $this->recipe->idreceta;
        $movement->docmodel = $this->recipe->modelClassName();
        $movement->documento = $this->recipe->codreceta;
        $movement->referencia = $this->recipe->referencia;
        $movement->idproducto = $this->recipe->getVariant()->idproducto;
        return $movement->save();
    }

    /**
     * Add the manufactured material to the stock.
     *
     * @param int $quantity
     *
     * @return bool
     */
    private function addRecipeStock($quantity): bool
    {
        $stock = new Stock();
        $where = [
            new DataBaseWhere('codalmacen', $this->recipe->codalmacen2),
            new DataBaseWhere('referencia', $this->recipe->referencia)
        ];
        if (false === $stock->loadFromCode('', $where)) {
            $stock->codalmacen = $this->recipe->codalmacen2;
            $stock->idproducto = $this->recipe->getVariant()->idproducto;
            $stock->referencia = $this->recipe->referencia;
        }

        $stock->cantidad += $this->recipe->cantidad * $quantity;
        return $stock->save();
    }

    /**
     * Check if there is enough stock to make the recipe.
     *
     * @param int $quantity
     *
     * @return bool
     */
    private function checkStock($quantity): bool
    {
        $result = true;
        foreach ($this->lines as $recipeLine) {
            if ($recipeLine->nostock) {
                continue;
            }

            if ($recipeLine->disponible < ($recipeLine->cantidad * $quantity)) {
                $this->toolBox()->i18nLog()->notice('not-enough-stock', ['%reference%' => $recipeLine->referencia]);
                $result = false;
            }
        }
        return $result;
    }

    /**
     * Obtains the unit cost of the product to be manufactured.
     *
     * @return float
     */
    private function getProductCost(): float
    {
        $result = 0.00;
        foreach ($this->lines as $recipeLine) {
            $result += $recipeLine->getCost();
        }
        return $result / $this->recipe->cantidad;
    }

    /**
     *
     * @param int $code
     *
     * @return bool
     */
    private function prepareData($code): bool
    {
        if (false === $this->recipe->loadFromCode($code)) {
            return false;
        }

        $this->lines = $this->recipe->getLines();
        return \count($this->lines) > 0;
    }

    /**
     * Subtract raw material from stock.
     *
     * @param int $quantity
     *
     * @return bool
     */
    private function removeRawMaterialStock($quantity)
    {
        foreach ($this->lines as $recipeLine) {
            if ($recipeLine->nostock) {
                continue;
            }

            $stock = new Stock();
            $where = [
                new DataBaseWhere('codalmacen', $recipeLine->codalmacen),
                new DataBaseWhere('referencia', $recipeLine->referencia)
            ];
            $stock->loadFromCode('', $where);
            $stock->cantidad -= $recipeLine->cantidad * $quantity;
            if (false === $stock->save()) {
                return false;
            }
        }
        return true;
    }
}
