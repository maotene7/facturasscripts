<?php
/**
 * Copyright (C) ATHOS TRADER SL <info@athosonline.com>
 */
namespace FacturaScripts\Plugins\OrdenesProduccion\Controller;

use FacturaScripts\Core\Lib\ExtendedController;
use FacturaScripts\Plugins\Proyectos\Model\TareaProyecto;
use FacturaScripts\Plugins\Proyectos\Model\Proyecto;
use FacturaScripts\Plugins\OrdenesProduccion\Model\Orden;
use FacturaScripts\Core\Base\DataBase\DataBaseWhere;

/**
 * Description of EditOrden
 *
 * @author Daniel Fernández Giménez <daniel.fernandez@athosonline.com>
 */
class EditOrden extends ExtendedController\EditController
{
    /**
     * 
     * @return string
     */
    public function getModelClassName()
    {
        return 'Orden';
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
        $data['title'] = 'order-work';
        $data['icon'] = 'fas fa-bars';
        $data['showonmenu'] = false;
        return $data;
    }
    
    protected function createViews()
    {
        parent::createViews();
        
        $tabEditOrden = 'EditOrden';
        if (!$this->request->get('code')) {
            $this->views[$tabEditOrden]->disableColumn('amount-pending', true);
            $this->views[$tabEditOrden]->disableColumn('amount-incidence', true);
        }
        
        if ($this->request->get('idtarea') || $this->request->get('code')) {
            $this->views[$tabEditOrden]->disableColumn('project', true);
            
            $orden = new Orden();
            $orden->loadFromCode($this->request->get('code'));
            
            if ($orden->cantidadincidencia > 0) {
                $this->setSettings($tabEditOrden, 'btnSave', false);
                $this->setSettings($tabEditOrden, 'btnUndo', false);
                $this->setSettings($tabEditOrden, 'btnDelete', false);
            }
        }
        
        $this->createViewOrdenesCompletas();
        $this->createViewIncidencias();
    }
    
    private function createViewOrdenesCompletas()
    {
        $tabOrdenComp = 'ListOrdenCompletada';
        $this->addListView($tabOrdenComp, 'ModelView\OrdenCompletada', 'orders-work-completed', 'fas fa-tasks');
        $this->setSettings($tabOrdenComp, 'btnDelete', false);
        $this->setSettings($tabOrdenComp, 'btnNew', false);
    }
    
    private function createViewIncidencias()
    {
        $tabIncidencias = 'ListOrden';
        $this->addListView($tabIncidencias, 'ModelView\Orden', 'incidences', 'fas fa-exclamation');
        $this->setSettings($tabIncidencias, 'btnDelete', false);
        $this->setSettings($tabIncidencias, 'btnNew', false);
    }
    
    /**
     * 
     * @param string   $viewName
     * @param EditView $view
     */
    protected function loadData($viewName, $view)
    {
        $mainViewName = $this->getMainViewName();
        
        switch ($viewName) {
            case $mainViewName:                
                parent::loadData($viewName, $view);
                
                $task = new TareaProyecto();
                $task->loadFromCode($view->model->idtarea);
                
                $project = new Proyecto();
                $where = [new DataBaseWhere('idproyecto', $task->idproyecto)];
                $project->loadFromCode('', $where);
                
                if (false === $project->userCanSee($this->user)) {
                    $this->setTemplate('Error/AccessDenied');
                }
                break;
            
            case 'ListOrden':
                $where = [
                    new DataBaseWhere('parentidorden', $this->request->get('code'))
                ];
                $view->loadData('', $where);
                break;
            
            case 'ListOrdenCompletada':
                $where = [
                    new DataBaseWhere('ordenes.idorden', $this->request->get('code'))
                ];
                $view->loadData('', $where);
                break;
        }
    }
}