<?php
namespace FacturaScripts\Plugins\ProduccionEc\Controller;

use FacturaScripts\Core\Lib\ExtendedController\ListController;

class ListCostCentre extends ListController
{
    public function getPageData() {
        $pageData = parent::getPageData();
        $pageData['menu'] = 'Producción';
        $pageData['title'] = 'Centros de costos';
        $pageData['icon'] = 'fas fa-dollar-sign';
        return $pageData;
    }

    protected function createViews() {
        $this->addView('ListCostCentre', 'CostCentre');
        $this->addSearchFields('ListCostCentre', ['descripcion']);
        $this->addOrderBy('ListCostCentre', ['descripcion'], 'descripcion');
    }
}