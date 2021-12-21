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

use FacturaScripts\Core\Model\Base;

/**
 * Class to indicate raw material products.
 *
 * @author Carlos Garcia Gomez  <carlos@facturascripts.com>
 * @author Jose Antonio Cuello  <yopli2000@gmail.com>
 */
class LineaReceta extends Base\ModelClass
{

    use Base\ModelTrait;

    /**
     * Amount of raw material required.
     *
     * @var int|float
     */
    public $cantidad;

    /**
     * Primary key.
     *
     * @var int
     */
    public $idlinea;

    /**
     * Link to recipe model.
     *
     * @var int
     */
    public $idreceta;

    /**
     * Link to the raw material variant.
     *
     * @var string
     */
    public $referencia;

    /**
     * Reset the values of all model properties.
     */
    public function clear()
    {
        parent::clear();
        $this->cantidad = 1;
    }

    /**
     * This function is called when creating the model table. Returns the SQL
     * that will be executed after the creation of the table. Useful to insert values
     * default.
     *
     * @return string
     */
    public function install()
    {
        new Receta();
        return parent::install();
    }

    /**
     * Returns the name of the column that is the model's primary key.
     *
     * @return string
     */
    public static function primaryColumn(): string
    {
        return 'idlinea';
    }

    /**
     * Returns the name of the table that uses this model.
     *
     * @return string
     */
    public static function tableName(): string
    {
        return 'produccion_lineasrecetas';
    }

    /**
     * Returns true if there are no errors in the values of the model properties.
     * It runs inside the save method.
     *
     * @return bool
     */
    public function test()
    {
        $this->referencia = $this->toolBox()->utils()->noHtml($this->referencia);
        return parent::test();
    }
}
