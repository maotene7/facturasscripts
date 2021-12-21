<?php
/*
 * *
 *  * Copyright (C) 2020 Carlos Yanez Correa <cyanez@bitmedia.technology>
 *
 */

namespace FacturaScripts\Plugins\EbillingEc\Controller;

use FacturaScripts\Core\Lib\ExtendedController\EditController;


class EditLogEbilling extends EditController
{

    public function getModelClassName()
    {
        return "LogEbilling";
    }

}