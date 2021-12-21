<?php
/**
 * Copyright (C) ATHOS TRADER SL <info@athosonline.com>
 */
namespace FacturaScripts\Plugins\OrdenesProduccion\Extension\Controller;

use FacturaScripts\Core\Base\DataBase\DataBaseWhere;

/**
 * Description of EditUser
 *
 * @author Daniel Fernández Giménez <daniel.fernandez@athosonline.com>
 */
class EditUser
{
    public function createViews()
    {
        return function() {
            if ($this->user->admin) {
                $this->addEditListView('ListUsuarioProcesos', 'UsuarioProceso', 'processes', 'fas fa-bars');
            }
        };
    }
    
    public function loadData()
    {
        return function($viewName, $view) {
            if ($viewName == 'ListUsuarioProcesos') {
                $where = [new DataBaseWhere('nick', $this->request->query->get('code'))];
                $view->loadData('', $where);
            }
        };
    }
}