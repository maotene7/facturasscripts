<?php


namespace FacturaScripts\Plugins\EbillingEc\Extension\Controller;


use FacturaScripts\Plugins\EbillingEc\Lib\EbillingDocumentHtmlView;

class EditFacturaCliente
{

    public function createViews(){

        return function(){
            $this->createEbillingView();
        };
    }

    public function createEbillingView(){

        return function(){
        $viewEbilling = new EbillingDocumentHtmlView();
        $this->addCustomView(cls_name(EbillingDocumentHtmlView::class),$viewEbilling);
        };
    }

    public function loadData(){
        return function ($viewName,$view){
            switch ($viewName){
                case 'EbillingDocumentHtmlView':
                  $code = $this->getViewModelValue($this->getLineXMLView(), 'idfactura');
                 $view->loadData($this->getModelClassName(),$code);
                break;
            }

        };
    }

}