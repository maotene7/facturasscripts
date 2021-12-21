<?php
/**
 * Copyright (C) ATHOS TRADER SL <info@athosonline.com>
 */
namespace FacturaScripts\Plugins\OrdenesProduccion\Controller;

use FacturaScripts\Core\Lib\ExtendedController;

/**
 * Description of EditProceso
 *
 * @author Daniel Fernández Giménez <daniel.fernandez@athosonline.com>
 */
class EditProceso extends ExtendedController\EditController
{
    /**
     * 
     * @return string
     */
    public function getModelClassName()
    {
        return 'Proceso';
    }
    
    /**
     * Returns basic page attributes
     *
     * @return array
     */
    public function getPageData()
    {
        $data = parent::getPageData();
        $data['menu'] = 'projects';
        $data['title'] = 'process';
        $data['icon'] = 'fas fa-list';
        $data['showonmenu'] = false;
        return $data;
    }
}