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

use FacturaScripts\Core\Base\DataBase\DataBaseWhere;
use FacturaScripts\Dinamic\Model\Base\JoinModel;

/**
 * It contains the main data of the products and their variants.
 *
 * @author Jose Antonio Cuello  <yopli2000@gmail.com>
 */
class VariantAutocomplete extends JoinModel
{

    /**
     * Return an array for autocomplete action.
     *
     * @param string $fieldCode
     * @param string $fieldTitle
     * @param string $term
     * @param int $strict
     * @return array
     */
    public static function autocomplete($fieldCode, $fieldTitle, $term, $strict = '0')
    {
        $variant = new self();
        $fields = $variant->getFields();

        $order = [ $fields[$fieldTitle] => 'ASC' ];
        $where[] = new DataBaseWhere(
            $fields[$fieldCode] . '|' . $fields[$fieldTitle],
            \mb_strtolower($term, 'UTF8'),
            'LIKE'
        );

        $results = [];
        foreach ($variant->all($where, $order) as $value) {
            $results[] = [
                'key' => $variant->toolBox()->utils()->fixHtml($value->{$fieldCode}),
                'value' => $variant->toolBox()->utils()->fixHtml($value->{$fieldTitle}),
            ];
        }

        if (empty($results)) {
            $results[] = ('0' == $strict)
                ? ['key' => $term, 'value' => $term]
                : ['key' => null, 'value' => $variant->toolBox()->i18n()->trans('no-data')];
        }

        return $results;
    }

    /**
     * List of fields or columns to select clausule
     *
     * @return array
     */
    protected function getFields(): array
    {
        return [
            'referencia' => 'variantes.referencia',
            'idvariante' => 'variantes.idvariante',
            'idproducto' => 'variantes.idproducto',
            'descripcion' => 'productos.descripcion',
        ];
    }

    /**
     * List of tables related to from clausule
     *
     * @return string
     */
    protected function getSQLFrom(): string
    {
        return 'variantes'
            . ' LEFT JOIN productos ON productos.idproducto = variantes.idproducto';
    }

    /**
     * List of tables required for the execution of the view.
     *
     * @return array
     */
    protected function getTables(): array
    {
        return [
            'variantes',
            'productos',
        ];
    }
}
