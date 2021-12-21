<?php


namespace FacturaScripts\Plugins\EbillingEc\Extension\Controller;


use FacturaScripts\Core\App\AppSettings;
use FacturaScripts\Core\Base\ToolBox;
use FacturaScripts\Dinamic\Lib\APIConsumer;

class EditSettings
{

    public function execAfterAction()
    {
        return function ($action){
            switch ($action) {
                case 'testebilling-ec':
                    $apiConsumer = new APIConsumer(AppSettings::get("ebillingec", "api_domain"),
                        AppSettings::get("ebillingec", "apikey"));
                    $result = $apiConsumer->validateToken();
                    if(!$result->success){
                        ToolBox::log()->error("token-no-validate");
                    }else{
                        ToolBox::log()->notice("success-token");
                    }
                    break;
            }
        };
    }
}