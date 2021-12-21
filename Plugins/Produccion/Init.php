<?php
/**
 * This file is part of Produccion plugin for FacturaScripts.
 * FacturaScripts  Copyright (C) 2015-2021 Carlos Garcia Gomez <carlos@facturascripts.com>
 * Produccion      Copyright (C) 2020-2021 Jose Antonio Cuello Principal <yopli2000@gmail.com>
 *
 * This program and its files are under the terms of the license specified in the LICENSE file.
 * All Rights Reserved.
 */
namespace FacturaScripts\Plugins\Produccion;

use FacturaScripts\Core\Base\InitClass;
use FacturaScripts\Plugins\Produccion\Lib\Produccion\MigrateData;

/**
 * Description of Init
 *
 * @author Carlos Garcia Gomez <carlos@facturascripts.com>
 * @author Jose Antonio Cuello <yopli2000@gmail.com>
 */
class Init extends InitClass
{

    public function init()
    {
        $this->loadExtension(new Extension\Controller\EditProducto());
    }

    public function update()
    {
        $migrateData = new MigrateData();
        if ($migrateData->run()) {
            $migrateData->deleteOldTables();
        }
    }
}