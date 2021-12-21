<?php
/*
 * *
 *  * Copyright (C)  Carlos Yanez Correa <cyanez@bitmedia.technology>
 *
 */

namespace FacturaScripts\Plugins\EbillingEc\Lib\Traits;


use FacturaScripts\Core\App\AppSettings;
use FacturaScripts\Dinamic\Model\Serie;
use FacturaScripts\Plugins\EbillingEc\Lib\VoucherManager;

trait HanlderOperationEbillingTrait
{

    public function saveInsert(){
        return function(){
            //Check if codserie is ebilling.
            $serie = (new Serie())->get($this->codserie);
            $setting = AppSettings::get('ebillingec','documents_automatic');
            if($serie->ebilling and $setting){
                $voucherManager = new VoucherManager();
                $voucherManager->loadDataVoucher($this->primaryColumnValue(),$this->modelClassName());
                $voucherManager->loadOrGetOperation();
            }
        };
    }

}