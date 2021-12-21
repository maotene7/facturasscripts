<?php
/**
 * Copyright (C) ATHOS TRADER SL <info@athosonline.com>
 */
namespace FacturaScripts\Plugins\OrdenesProduccion\Extension\Controller;

use FacturaScripts\Core\Base\DataBase\DataBaseWhere;
use FacturaScripts\Core\Model\Variante;

/**
 * Description of EditProducto
 *
 * @author Daniel Fernández Giménez <daniel.fernandez@athosonline.com>
 */
class EditProducto
{
    public function createViews()
    {
        return function() {
            $this->addEditListView('ListProductoProceso', 'ProductoProceso', 'processes', 'fas fa-list');
        };
    }
    
    public function loadData()
    {
        return function($viewName, $view) {
            if ($viewName == 'ListProductoProceso') {
                $mainViewName = $this->getMainViewName();
                $idproducto = $this->getViewModelValue($mainViewName, 'idproducto');
                $where = [new DataBaseWhere('idproducto', $idproducto)];
                $order = ['idvariante' => 'ASC', 'orden' => 'ASC'];
                $view->loadData('', $where, $order);
                
                $varianteModel = new Variante();                
                $customValues = array();
                foreach ($varianteModel->all([new DataBaseWhere('idproducto', $idproducto)], [], 0, $varianteModel->count()) as $variante) {
                    $aux = array('value' => $variante->idvariante, 'title' => $variante->referencia);
                    array_push($customValues, $aux);
                }
                
                $columnToModify = $this->views['ListProductoProceso']->columnForName('variant');
                if($columnToModify) {
                    $columnToModify->widget->setValuesFromArray($customValues);
                }
            }
        };
    }
}