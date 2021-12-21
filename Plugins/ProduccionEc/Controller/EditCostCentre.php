<?php

namespace FacturaScripts\Plugins\ProduccionEc\Controller;

use FacturaScripts\Core\Base\DataBase\DataBaseWhere;
use FacturaScripts\Core\Lib\ExtendedController\BaseView;
use FacturaScripts\Core\Lib\ExtendedController\EditController;

/**
 * Controller to edit a single item from the CENTER COST model
 *
 * @author Mauricio Tene Guamán      <mtene@skillsoft.ec>
 
 
 */
class EditCostCentre extends EditController
{

    /**
     * Returns the model name.
     * 
     * @return string
     */
    public function getModelClassName()
    {
        return 'CostCentre';
    }

    /**
     * Returns basic page attributes.
     *
     * @return array
     */
    public function getPageData()
    {
        $data = parent::getPageData();
        $data['menu'] = 'Producción';
        $data['title'] = 'EditarCC';
        $data['icon'] = 'fas fa-warehouse';
        return $data;
    }

    /**
     * 
     * @param string $viewName
     */

    protected function createViews()
    {
        parent::createViews();
       
    }

    /**
     * Load data view procedure
     *
     * @param string   $viewName
     * @param BaseView $view
     */
    protected function loadData($viewName, $view)
    {
        switch ($viewName) {
            case 'ListCostCentre':
                $codcenter = $this->getViewModelValue($this->getMainViewName(), 'codcenter');
                $where = [new DataBaseWhere('codcenter', $codcenter)];
                $view->loadData('', $where);
                break;

            default:
                parent::loadData($viewName, $view);
                break;
        }
    }
}
