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
use FacturaScripts\Core\Base\ToolBox;
use FacturaScripts\Dinamic\Model\Receta;
use FacturaScripts\Dinamic\Model\LineaReceta;

/**
 * Manages the transfer of data from version FS2017 to the new version.
 *
 * @author Carlos Garcia Gomez  <carlos@facturascripts.com>
 * @author Jose Antonio Cuello  <yopli2000@gmail.com>
 */
class MigrateData
{

    /**
     * Link to active database
     *
     * @var DataBase
     */
    private $database;

    /**
     * Class constructor
     */
    public function __construct()
    {
        $this->database = new DataBase();
    }

    /**
     * Remove old version tables
     */
    public function deleteOldTables()
    {
        $this->database->exec('DROP TABLE lineasrecetas;');
        $this->database->exec('DROP TABLE recetas;');
    }

    /**
     * Performs the transfer of data between the old tables
     * and those of the new version.
     *
     * @return bool
     */
    public function run(): bool
    {
        if (false === $this->needTransferData()) {
            return false;
        }

        $this->database->beginTransaction();
        try {
            $sql = 'SELECT * FROM recetas WHERE referencia IN (SELECT referencia FROM variantes)';
            foreach ($this->database->select($sql) as $row) {
                if (false === $this->processRecipe($row)) {
                    return false;
                }
            }

            $this->database->commit();
            return true;
        } catch (Exception $exc) {
            $this->database->rollback();
            $this->toolBox()->log()->error($exc->getMessage());
        }
        return false;
    }

    /**
     *
     * @return bool
     */
    private function needTransferData(): bool
    {
        if (false === $this->database->tableExists('recetas')) {
            return false;
        }

        $recipe = new Receta();
        return ($recipe->count() == 0);
    }

    /**
     *
     * @param Array $data
     * @return bool
     */
    private function processRecipe($data): bool
    {
        $recipe = new Receta($data);
        $recipe->ultimaproduccion = $data['ultima_produccion'];
        if (false === $recipe->save()) {
            $this->toolBox()->i18nlog()->error('recipe-save-error', ['%recipe%' => $data['codreceta']]);
            return false;
        }

        $sql = "SELECT * FROM lineasrecetas WHERE codreceta = '" . $recipe->codreceta
            . "' AND referencia IN (SELECT referencia FROM variantes);";

        foreach ($this->database->select($sql) as $row) {
            $recipeLine = new LineaReceta($row);
            $recipeLine->idreceta = $recipe->idreceta;
            $recipeLine->idlinea = null;
            if (false === $recipeLine->save()) {
                $this->toolBox()->i18nlog()->error(
                    'recipeline-save-error',
                    ['%recipe%' => $data['codreceta'], '%line%' => $data['idlinea']]
                );
                return false;
            }
        }
        return true;
    }

    /**
     *
     * @return ToolBox
     */
    private function toolBox()
    {
        return new ToolBox();
    }
}
