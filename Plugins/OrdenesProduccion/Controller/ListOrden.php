<?php
/**
 * Copyright (C) ATHOS TRADER SL <info@athosonline.com>
 */
namespace FacturaScripts\Plugins\OrdenesProduccion\Controller;

use FacturaScripts\Core\Lib\ExtendedController;
use FacturaScripts\Core\Base\DataBase\DataBaseWhere;

/**
 * Description of ListOrden
 *
 * @author Daniel Fernández Giménez <daniel.fernandez@athosonline.com>
 */
class ListOrden extends ExtendedController\ListController
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
        $data['title'] = 'orders-work';
        $data['icon'] = 'fas fa-bars';
        return $data;
    }
    
    protected function createViews() {
        $this->createViewsOrders();
        $this->createViewsOrdersPrivate();
        $this->createViewsOrdersComplete();
    }
    
    /**
     * 
     * @param string $viewName
     */
    protected function createViewsOrders(string $viewName = 'ListOrden')
    {
        $this->addView($viewName, 'ModelView\Orden', 'orders-work', 'fas fa-bars');
        $this->addOrderBy($viewName, ['fechafinalizacion', 'idorden'], 'end-date', 1);
        $this->addFilterAutocomplete($viewName, 'idempresa', 'company', 'proyectos.idempresa', 'empresas', 'idempresa', 'nombre');
        $this->addFilterAutocomplete($viewName, 'idproyecto', 'project', 'proyectos.idproyecto', 'proyectos', 'idproyecto', 'nombre');
        $this->addFilterAutocomplete($viewName, 'idtarea', 'task', 'tareas.idtarea', 'tareas', 'idtarea', 'nombre');
        $this->addFilterPeriod($viewName, 'fechafinalizacion', 'end-date', 'ordenes.fechafinalizacion');
        $procesos = $this->codeModel->all('procesos', 'idproceso', 'nombre');
        $this->addFilterSelect($viewName, 'idproceso', 'process', 'ordenes.idproceso', $procesos);
        $this->addFilterCheckbox($viewName, 'cronometro', 'timing', 'ordenes.cronometro');
    }
    
    /**
     * 
     * @param string $viewName
     */
    protected function createViewsOrdersPrivate(string $viewName = 'ListOrden-private')
    {
        $this->addView($viewName, 'ModelView\Orden', 'private', 'fas fa-unlock-alt');
        $this->addOrderBy($viewName, ['fechafinalizacion', 'idorden'], 'end-date', 1);
        $this->addFilterAutocomplete($viewName, 'idempresa', 'company', 'proyectos.idempresa', 'empresas', 'idempresa', 'nombre');
        $this->addFilterAutocomplete($viewName, 'idproyecto', 'project', 'proyectos.idproyecto', 'proyectos', 'idproyecto', 'nombre');
        $this->addFilterAutocomplete($viewName, 'idtarea', 'task', 'tareas.idtarea', 'tareas', 'idtarea', 'nombre');
        $this->addFilterPeriod($viewName, 'fechafinalizacion', 'end-date', 'ordenes.fechafinalizacion');
        $procesos = $this->codeModel->all('procesos', 'idproceso', 'nombre');
        $this->addFilterSelect($viewName, 'idproceso', 'process', 'ordenes.idproceso', $procesos);
        $this->addFilterCheckbox($viewName, 'cronometro', 'timing', 'ordenes.cronometro');
    }
    
    /**
     * 
     * @param string $viewName
     */
    protected function createViewsOrdersComplete(string $viewName = 'ListOrdenCompletada')
    {
        $this->addView($viewName, 'ModelView\OrdenCompletada', 'orders-work-completed', 'fas fa-tasks');
        $this->setSettings($viewName, 'btnDelete', false);
        $this->setSettings($viewName, 'btnNew', false);
        $this->addOrderBy($viewName, ['fechaprocesada', 'idorden'], 'processed-date', 1);
        $this->addFilterAutocomplete($viewName, 'idempresa', 'company', 'proyectos.idempresa', 'empresas', 'idempresa', 'nombre');
        $this->addFilterAutocomplete($viewName, 'idproyecto', 'project', 'proyectos.idproyecto', 'proyectos', 'idproyecto', 'nombre');
        $this->addFilterAutocomplete($viewName, 'idtarea', 'task', 'tareas.idtarea', 'tareas', 'idtarea', 'nombre');
        $this->addFilterPeriod($viewName, 'fechaprocesada', 'processed-date', 'ordenes_completadas.fechaprocesada');
        $procesos = $this->codeModel->all('procesos', 'idproceso', 'nombre');
        $this->addFilterSelect($viewName, 'idproceso', 'process', 'ordenes.idproceso', $procesos);
        $users = $this->codeModel->all('users', 'nick', 'nick');
        $this->addFilterSelect($viewName, 'nick', 'user', 'ordenes_completadas.nick', $users);
        $this->setSettings($viewName, 'checkBoxes', false);
    }
    
    /**
     * 
     * @param string   $viewName
     * @param ListView $view
     */
    protected function loadData($viewName, $view)
    {
        switch ($viewName) {
            case 'ListOrden':
                if ($this->user->admin) {
                    $view->loadData();
                    break;
                }
                $where = [
                    new DataBaseWhere('proyectos.idempresa', $this->user->idempresa),
                    new DataBaseWhere('proyectos.privado', false)
                ];
                $view->loadData('', $where);
                break;

            case 'ListOrden-private':
                $sql = 'SELECT idproyecto FROM proyectos WHERE nick = ' . $this->dataBase->var2str($this->user->nick)
                    . ' UNION SELECT idproyecto FROM proyectos_users WHERE nick = ' . $this->dataBase->var2str($this->user->nick);
                $where = [
                    new DataBaseWhere('proyectos.privado', true),
                    new DataBaseWhere('tareas.idproyecto', $sql, 'IN')
                ];
                $view->loadData('', $where);
                break;

            default:
                $view->loadData();
        }
    }
}