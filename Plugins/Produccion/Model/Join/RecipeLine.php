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
use FacturaScripts\Plugins\Produccion\Model\LineaReceta;

/**
 * It contains the main data of the raw material product
 * and its auxiliary data.
 *
 * @author Carlos Garcia Gomez  <carlos@facturascripts.com>
 * @author Jose Antonio Cuello  <yopli2000@gmail.com>
 */
class RecipeLine extends JoinModel
{

    /**
     * Get the cost of the line (raw material used).
     *
     * @return double
     */
    public function getCost()
    {
        return $this->coste * $this->cantidad;
    }

    /**
     * List of fields or columns to select clausule
     *
     * @return array
     */
    protected function getFields(): array
    {
        return [
            'cantidad' => 'lineasrecetas.cantidad',
            'idlinea' => 'lineasrecetas.idlinea',
            'idreceta' => 'lineasrecetas.idreceta',
            'referencia' => 'lineasrecetas.referencia',
            'codalmacen' => 'recetas.codalmacen',
            'codreceta' => 'recetas.codreceta',
            'coste' => 'variantes.coste',
            'idvariante' => 'variantes.idvariante',
            'idproducto' => 'variantes.idproducto',
            'bloqueado' => 'productos.bloqueado',
            'descripcion' => 'productos.descripcion',
            'nostock' => 'productos.nostock',
            'stock' => 'stocks.cantidad',
            'disponible' => 'stocks.disponible'
        ];
    }

    /**
     * List of tables related to from clausule
     *
     * @return string
     */
    protected function getSQLFrom(): string
    {
        return 'produccion_lineasrecetas lineasrecetas'
            . ' INNER JOIN produccion_recetas recetas ON recetas.idreceta = lineasrecetas.idreceta'
            . ' LEFT JOIN variantes ON variantes.referencia = lineasrecetas.referencia'
            . ' LEFT JOIN productos ON productos.idproducto = variantes.idproducto'
            . ' LEFT JOIN stocks ON stocks.codalmacen = recetas.codalmacen AND stocks.referencia = lineasrecetas.referencia';
    }

    /**
     * List of tables required for the execution of the view.
     *
     * @return array
     */
    protected function getTables(): array
    {
        return [
            'produccion_lineasrecetas',
            'produccion_recetas',
            'variantes',
            'productos',
            'stocks'
        ];
    }
}
