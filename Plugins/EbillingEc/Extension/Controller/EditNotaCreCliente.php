<?php


namespace FacturaScripts\Plugins\EbillingEc\Extension\Controller;


use FacturaScripts\Dinamic\Lib\EbillingDocumentHtmlView;

class EditNotaCreCliente
{

    public function createViews()
    {
        return function(){
            $viewEbilling = new EbillingDocumentHtmlView();
            $this->addCustomView(cls_name(EbillingDocumentHtmlView::class),$viewEbilling);
        };
    }

    public function loadData()
    {
        return function ($viewName, $view) {
            switch ($viewName) {
                case 'EbillingDocumentHtmlView':
                    $code = input('code', 'get', 'int');
                    $view->loadData($this->getModelClassName(), $code);
                    break;
            }
        };
    }
}