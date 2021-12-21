<?php
/**
 * Copyright (C) ATHOS TRADER SL <info@athosonline.com>
 */
namespace FacturaScripts\Plugins\OrdenesProduccion\Controller;

use FacturaScripts\Core\Lib\ExtendedController;

/**
 * Description of ListProceso
 *
 * @author Daniel Fernández Giménez <daniel.fernandez@athosonline.com>
 */
class ListProceso extends ExtendedController\ListController
{
    /**
     * Returns basic page attributes
     *
     * @return array
     */
    public function getPageData()
    {
        $data = parent::getPageData();
        $data['menu'] = 'projects';
        $data['title'] = 'processes';
        $data['icon'] = 'fas fa-list';
        return $data;
    }
    
    protected function createViews()
    {
        $ListProceso = 'ListProceso';
        $this->addView($ListProceso, 'Proceso', 'processes', 'fas fa-list');
        $this->addSearchFields($ListProceso, ['nombre']);
        $this->addOrderBy($ListProceso, ['nombre'], 'name', 2);
        $this->addOrderBy($ListProceso, ['precio'], 'price');
    }
}