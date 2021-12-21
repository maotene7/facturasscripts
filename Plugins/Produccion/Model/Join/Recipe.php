<?php
/**
 * This file is part of Produccion plugin for FacturaScripts.
 * FacturaScripts  Copyright (C) 2015-2021 Carlos Garcia Gomez <carlos@facturascripts.com>
 * Produccion      Copyright (C) 2020-2021 Jose Antonio Cuello Principal <yopli2000@gmail.com>
 *
 * This program and its files are under the terms of the license specified in the LICENSE file.
 * All Rights Reserved.
 */
namespace FacturaScripts\Plugins\Produccion\Model\Join;

use FacturaScripts\Dinamic\Model\Base\JoinModel;
use FacturaScripts\Dinamic\Model\Receta;

/**
 * List of recipes.
 *
 * @author Jose Antonio Cuello Principal <yopli2000@gmail.com>
 */
class Recipe extends JoinModel
{

    /**
     * Constructor and class initializer.
     *
     * @param array $data
     */
    public function __construct($data = array())
    {
        parent::__construct($data);

        $this->setMasterModel(new Receta());
    }

    /**
     * List of tables required for the execution of the view.
     */
    protected function getTables(): array
    {
        return [
            'produccion_recetas',
            'variantes',
        ];
    }

    /**
     * List of fields or columns to select clausule
     */
    protected function getFields(): array
    {
        return [
            'cantidad' => 'produccion_recetas.cantidad',
            'codalmacen' => 'produccion_recetas.codalmacen',
            'codalmacen2' => 'produccion_recetas.codalmacen2',
            'codreceta' => 'produccion_recetas.codreceta',
            'descripcion' => 'produccion_recetas.descripcion',
            'idreceta' => 'produccion_recetas.idreceta',
            'observaciones' => 'produccion_recetas.observaciones',
            'idreceta' => 'produccion_recetas.idreceta',
            'referencia' => 'produccion_recetas.referencia',
            'ultimaproduccion' => 'produccion_recetas.ultimaproduccion',
            'idproducto' => 'variantes.idproducto',
            'producto' => 'productos.descripcion',
            'items' => 'COALESCE((' . $this->getItemsSelect() . '), 0)',
            'priceitems' => 'COALESCE((' . $this->getPriceItems() . '), 0.00)'
        ];
    }

    /**
     * List of tables related to from clausule
     */
    protected function getSQLFrom(): string {
        return 'produccion_recetas'
            . ' LEFT JOIN variantes ON variantes.referencia = produccion_recetas.referencia'
            . ' LEFT JOIN productos ON productos.idproducto = variantes.idproducto';
    }

    /**
     * Return SQL for get number of lines into a recipe
     *
     * @return string
     */
    private function getItemsSelect()
    {
        return 'SELECT COUNT(1)'
             .  ' FROM produccion_lineasrecetas t1'
             . ' WHERE t1.idreceta = produccion_recetas.idreceta';
    }

    /**
     * Return SQL for get total price of lines into a recipe
     *
     * @return string
     */
    private function getPriceItems()
    {
        return 'SELECT SUM(t2.precio * t1.cantidad)'
             .  ' FROM produccion_lineasrecetas t1'
             . ' INNER JOIN variantes t2 ON t2.referencia = t1.referencia'
             . ' WHERE t1.idreceta = produccion_recetas.idreceta';
    }
}
