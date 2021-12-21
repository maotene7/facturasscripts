<?php


namespace FacturaScripts\Plugins\EbillingEc\Controller;

use FacturaScripts\Core\Lib\ExtendedController\ListController;

class ListOperacionEbilling extends ListController
{
    public function getPageData()
    {
        $pageData = parent::getPageData();
        $pageData['title'] = 'list-documents-ebilling';
        $pageData['menu'] = 'electronic-billing';
        $pageData['icon'] = 'fas fa-file';

        return $pageData;
    }


    protected function createViews()
    {
        $this->addView('ListOperacionEbilling', 'OperacionEbilling');
        $this->addSearchFields('ListOperacionEbilling', ['iddocumento','claveacceso']);
        $this->addOrderBy('ListOperacionEbilling', ['idoperacion'], 'code',2);
        $this->addFilterCheckbox('ListOperacionEbilling', 'fechaautorizacion', 'whitout-aut', 'fechaautorizacion','IS',NULL);
        $this->addFilterPeriod('ListOperacionEbilling', 'fechageneracion', 'period-generation', 'fechageneracion');
    }
}