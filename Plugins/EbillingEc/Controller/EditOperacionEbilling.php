<?php


namespace FacturaScripts\Plugins\EbillingEc\Controller;

use FacturaScripts\Core\Lib\ExtendedController\EditController;
use FacturaScripts\Core\Base\DataBase\DataBaseWhere;

class EditOperacionEbilling extends EditController
{

    public function getModelClassName()
    {
       return "OperacionEbilling";
    }

    protected function createViews()
    {
        parent::createViews();
        $this->addListView('ListLogEbilling', 'LogEbilling', 'logs', 'fas fa-cubes');
    }

    protected function loadData($viewName, $view)
    {
        switch ($viewName) {
            case 'ListLogEbilling':
                $idop = $this->getViewModelValue('EditOperacionEbilling', 'idoperacion');
                $where = [new DataBaseWhere('idoperacion', $idop)];
                $view->loadData('', $where);
                break;

            default:
                parent::loadData($viewName, $view);
                break;
        }
    }

}