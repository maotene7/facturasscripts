<?php
/**
 * This file is part of Produccion plugin for FacturaScripts.
 * FacturaScripts  Copyright (C) 2015-2021 Carlos Garcia Gomez <carlos@facturascripts.com>
 * Produccion      Copyright (C) 2020-2021 Jose Antonio Cuello Principal <yopli2000@gmail.com>
 *
 * This program and its files are under the terms of the license specified in the LICENSE file.
 * All Rights Reserved.
 */
namespace FacturaScripts\Plugins\Produccion\Model;

use FacturaScripts\Core\Base\DataBase\DataBaseWhere;
use FacturaScripts\Core\Model\Base\ModelClass;
use FacturaScripts\Core\Model\Base\ModelTrait;
use FacturaScripts\Dinamic\Model\Join\RecipeLine;
use FacturaScripts\Dinamic\Model\Variante;

/**
 * Class that manages the data model of the product that is manufactured
 * based on a raw material.
 *
 * @author Carlos Garcia Gomez  <carlos@facturascripts.com>
 * @author Jose Antonio Cuello  <yopli2000@gmail.com>
 */
class Receta extends ModelClass
{

    use ModelTrait;

    /**
     * Quantity of the manufactured article that is produced
     * with the raw material.
     *
     * @var int|float
     */
    public $cantidad;

    /**
     * Link with the warehouse where the raw material is taken.
     *
     * @var string
     */
    public $codalmacen;

    /**
     * Link with the warehouse where the manufactured product
     * will be stored.
     *
     * @var string
     */
    public $codalmacen2;

    /**
     * Added for compatibility. (deprecated)
     *
     * @var string
     */
    public $codreceta;

    /**
     * Human description of the recipe.
     *
     * @var string
     */
    public $descripcion;

    /**
     * Primary Key.
     *
     * @var int
     */
    public $idreceta;

    /**
     * Remarks on the recipe.
     *
     * @var text
     */
    public $observaciones;

    /**
     * Link to the variant of the product being manufactured.
     *
     * @var string
     */
    public $referencia;

    /**
     * Date and Time of the last manufacture.
     *
     * @var string
     */
    public $ultimaproduccion;

    /**
     * Reset the values of all model properties.
     */
    public function clear()
    {
        parent::clear();
        $this->cantidad = 1;
    }

    /**
     * Obtains all the lines that make up the recipe
     * with all the complementary data: Variant, Product and Stock.
     *
     * @return RecipeLine[]
     */
    public function getLines()
    {
        $order = ['lineasrecetas.idlinea' => 'ASC'];
        $where = [new DataBaseWhere('lineasrecetas.idreceta', $this->idreceta)];

        $recipeLine = new RecipeLine();
        return $recipeLine->all($where, $order, 0, 0);
    }

    /**
     *
     * @return Variante
     */
    public function getVariant()
    {
        $variant = new Variante();
        $where = [new DataBaseWhere('referencia', $this->referencia)];
        $variant->loadFromCode('', $where);
        return $variant;
    }

    /**
     * Returns the name of the column that is the model's primary key.
     *
     * @return string
     */
    public static function primaryColumn(): string
    {
        return 'idreceta';
    }

    /**
     * Returns the name of the table that uses this model.
     *
     * @return string
     */
    public static function tableName(): string
    {
        return 'produccion_recetas';
    }

    /**
     * Returns true if there are no errors in the values of the model properties.
     * It runs inside the save method.
     *
     * @return bool
     */
    public function test()
    {
        foreach (['descripcion', 'observaciones', 'referencia'] as $field) {
            $this->{$field} = $this->toolBox()->utils()->noHtml($this->{$field});
        }

        return parent::test();
    }
}
