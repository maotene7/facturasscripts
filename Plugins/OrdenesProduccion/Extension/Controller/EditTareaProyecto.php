<?php
/**
 * Copyright (C) ATHOS TRADER SL <info@athosonline.com>
 */
namespace FacturaScripts\Plugins\OrdenesProduccion\Extension\Controller;

use FacturaScripts\Core\Base\DataBase\DataBaseWhere;

/**
 * Description of EditTareaProyecto
 *
 * @author Daniel Fernández Giménez <daniel.fernandez@athosonline.com>
 */
class EditTareaProyecto
{
    public function createViews()
    {
        return function() {
            $tabOrden = 'ListOrden';
            $this->addListView($tabOrden, 'Orden', 'orders-work', 'fas fa-list');
            $this->views[$tabOrden]->addOrderBy(['fechafinalizacion', 'idorden'], 'end-date', 1);
            $this->views[$tabOrden]->addFilterPeriod('fechafinalizacion', 'end-date', 'fechafinalizacion');
            $procesos = $this->codeModel->all('procesos', 'idproceso', 'nombre');
            $this->views[$tabOrden]->addFilterSelect('idproceso', 'process', 'ordenes.idproceso', $procesos);
            $this->views[$tabOrden]->addFilterCheckbox('cronometro', 'timing', 'cronometro');
            
            
            $tabOrdenCompletada = 'ListOrdenCompletada';
            $this->addListView($tabOrdenCompletada, 'ModelView\OrdenCompletada', 'orders-work-completed', 'fas fa-tasks');
            $this->views[$tabOrdenCompletada]->addOrderBy(['fechaprocesada', 'idorden'], 'end-date', 1);
            $this->views[$tabOrdenCompletada]->addFilterPeriod('fechaprocesada', 'processed-date', 'fechaprocesada');
            $this->views[$tabOrdenCompletada]->addFilterSelect('idproceso', 'process', 'ordenes.idproceso', $procesos);
            $users = $this->codeModel->all('users', 'nick', 'nick');
            $this->views[$tabOrdenCompletada]->addFilterSelect('nick', 'user', 'ordenes_completadas.nick', $users);
            $this->setSettings($tabOrdenCompletada, 'btnDelete', false);
            $this->setSettings($tabOrdenCompletada, 'btnNew', false);
        };
    }
    
    public function loadData()
    {
        return function($viewName, $view) {
            $code = $this->request->get('code');
            
            switch ($viewName) {
                case 'ListOrden':
                    $this->views[$viewName]->disableColumn('company', true);
                    $this->views[$viewName]->disableColumn('project', true);
                    $this->views[$viewName]->disableColumn('task', true);
                    $order = [
                        'fechafinalizacion' => 'ASC',
                        'idorden' => 'ASC'
                    ];
                    $view->loadData('', [new DataBaseWhere('idtarea', $code)], $order);
                    break;

                case 'ListOrdenCompletada':
                    $order = [
                        'ordenes_completadas.fechaprocesada' => 'ASC',
                        'ordenes.idorden' => 'ASC'
                    ];
                    $view->loadData('', [new DataBaseWhere('ordenes.idtarea', $code)], $order);
                    $this->views[$viewName]->disableColumn('company', true);
                    $this->views[$viewName]->disableColumn('project', true);
                    $this->views[$viewName]->disableColumn('task', true);
                    break;

                default:
                    parent::loadData($viewName, $view);
            }
        };
    }
}