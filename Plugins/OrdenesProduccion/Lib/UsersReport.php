<?php
/**
 * Copyright (C) ATHOS TRADER SL <info@athosonline.com>
 */
namespace FacturaScripts\Plugins\OrdenesProduccion\Lib;

use FacturaScripts\Plugins\OrdenesProduccion\Lib\ProduccionReport;

use FacturaScripts\Core\Base\DataBase\DataBaseWhere;
use FacturaScripts\Plugins\Proyectos\Model\Proyecto;
use FacturaScripts\Plugins\Proyectos\Model\TareaProyecto;
use FacturaScripts\Plugins\OrdenesProduccion\Model\Orden;
use FacturaScripts\Plugins\OrdenesProduccion\Model\OrdenCompletada;
use FacturaScripts\Plugins\OrdenesProduccion\Model\Proceso;
use FacturaScripts\Core\Model\Empresa;
use FacturaScripts\Core\Model\User;
use DateTime;

/**
 * Description of UsersReport
 *
 * @author Daniel Fernández Giménez <daniel.fernandez@athosonline.com>
 */
class UsersReport extends ProduccionReport
{        
    private $users;
    
    public function __construct()
    {
        parent::__construct();
    }
    
    public function getReport()
    {
        $fechainicio = isset($_GET['fechainicio'])?$_GET['fechainicio']:null;
        $fechafin = isset($_GET['fechafin'])?$_GET['fechafin']:null;
        $nick = isset($_GET['nick'])?$_GET['nick']:null;
        
        if ($fechainicio != '' && $fechafin != '') {
            $this->getUsers($nick);
            $this->getWorkOrders($fechainicio, $fechafin);
            $this->calculateWorkOrders();
            
            $this->mpdf->WriteHTML($this->pdfUsers($fechainicio, $fechafin, $nick));
            $this->mpdf->Output();
        }
    }
    
    private function getUsers($nick)
    {
        $users = new User();
        $where = [];
        
        if ($nick != '') {
            $where = [new DataBaseWhere('nick', $nick)];
        }
        
        $this->users = $users->all($where, [], 0, $users->count());
    }
    
    private function getWorkOrders($fechainicio, $fechafin)
    {
        $model = new OrdenCompletada();
                
        foreach ($this->users as $user) {
            $model->clear();
            $user->workOrders = [];

            $where = [
                new DataBaseWhere('fechaprocesada', $fechainicio, '>='),
                new DataBaseWhere('fechaprocesada', $fechafin, '<='),
                new DataBaseWhere('nick', $user->nick)
            ];
            
            $completeWorkOrders = $model->all($where, [], 0, $model->count());
            
            $idsorden = [];
            foreach ($completeWorkOrders as $completeWorkOrder) {
                if (!in_array($completeWorkOrder->idorden, $idsorden)) {
                    $idsorden[] = $completeWorkOrder->idorden;
                }
            }
            
            foreach ($idsorden as $idorden) {
                $orden = new Orden();
                $orden->loadFromCode($idorden);
                $completeWorkOrders = $this->getCompleteWorkOrders($fechainicio, $fechafin, $orden);
                $orden->completeWorkOrders = $completeWorkOrders;
                $user->workOrders[] = $orden;
            }
            
            $this->getOrder($user); 
        }
    }
    
    private function getCompleteWorkOrders($fechainicio, $fechafin, $orden)
    {
        $model = new OrdenCompletada();
        $where = [
                new DataBaseWhere('fechaprocesada', $fechainicio, '>='),
                new DataBaseWhere('fechaprocesada', $fechafin, '<='),
                new DataBaseWhere('idorden', $orden->idorden)
            ];
            
        $completeWorkOrders = $model->all($where, [], 0, $model->count());
        return $completeWorkOrders;
    }
    
    private function getOrder($user)
    {
        foreach ($user->workOrders as $WorkOrder) {            
            $process = new Proceso();
            $process->loadFromCode($WorkOrder->idproceso);
            $WorkOrder->process = $process;
            
            $task = new TareaProyecto();
            $task->loadFromCode($WorkOrder->idtarea);
            $WorkOrder->task = $task;
            
            $project = new Proyecto();
            $project->loadFromCode($WorkOrder->task->idproyecto);
            $WorkOrder->project = $project;
            
            $company = new Empresa();
            $company->loadFromCode($WorkOrder->project->idempresa);
            $WorkOrder->company = $company;
        }
        
        return $user;
    }
    
    private function calculateWorkOrders()
    {
        foreach ($this->users as $user) {
            
            $user->horas = 0;
            $user->precio = 0;
            
            foreach ($user->workOrders as $workOrder) {
                $workOrder->horas = 0;
                $workOrder->precio = 0;
                
                $start = true;
                $workHoras = 0;
                $workPrecio = 0;
                $orderHoras = 0;
                $fechainicio = '';
                $fechaparada = '';
                
                foreach ($workOrder->completeWorkOrders as $completeWorksOrder) {
                    if ($start && $completeWorksOrder->cantidadprocesada == 0) {
                        $start = false;
                        $fechainicio = $completeWorksOrder->fechaprocesada.' '.$completeWorksOrder->horaprocesada;
                    } else if (!$start && $completeWorksOrder->cantidadprocesada == 0) {
                        $start = true;
                        $fechaparada = $completeWorksOrder->fechaprocesada.' '.$completeWorksOrder->horaprocesada;
                    } else if ($completeWorksOrder->cantidadprocesada > 0) {
                        $start = true;
                        
                        if ($orderHoras > 0 && $completeWorksOrder->precio) {
                            $workPrecio = $workHoras * $completeWorksOrder->precio;
                            $orderHoras = 0;
                        }
                    }
                    
                    if ($fechainicio != '' && $fechaparada != '') {
                        $date1 = new DateTime($fechaparada);
                        $date2 = new DateTime($fechainicio);
                        $diff = $date1->diff($date2);
                        $orderHoras = $this->getWorkHours($diff);
                        $workHoras = $workHoras + $orderHoras;
                        $fechainicio = '';
                        $fechaparada = '';
                    }
                }
                
                $workOrder->horas = $workHoras;
                $workOrder->strhoras = $this->getFormatHours($workOrder->horas);
                $workOrder->precio = $workPrecio;
                
                $user->horas = $user->horas + $workHoras;
                $user->precio = $user->precio + $workPrecio;
            }
            
            $user->strhoras = $this->getFormatHours($user->horas);
        }
    }
    
    private function pdfWorkOrders($user)
    {
        
        $table = '<h2>'.$this->toolBox()->i18n()->trans('orders-work').' ('.count($user->workOrders).')</h2>';
        
        $table = $table.'<table>'
                    . '<thead>'
                        . '<tr>'
                            . '<td>'.$this->toolBox()->i18n()->trans('company').'</td>'
                            . '<td>'.$this->toolBox()->i18n()->trans('project').'</td>'
                            . '<td>'.$this->toolBox()->i18n()->trans('task').'</td>'
                            . '<td>'.$this->toolBox()->i18n()->trans('process').'</td>'
                            . '<td>'.$this->toolBox()->i18n()->trans('hours').'</td>'
                            . '<td>'.$this->toolBox()->i18n()->trans('price').'</td>'
                        . '</tr>'
                    . '</thead>'
                    . '<tbody>';
        
        $cont = 1; 
        
        foreach ($user->workOrders as $workOrder) {
            $css = ($cont%2==0)?'greybg':'';
            
            $table = $table.''
                    . '<tr class="'.$css.'">'
                        . '<td>'.$workOrder->company->nombre.'</td>'
                        . '<td>'.$workOrder->project->nombre.'</td>'
                        . '<td>'.$workOrder->task->nombre.'</td>'
                        . '<td>'.$workOrder->process->nombre.'</td>'
                        . '<td>'.$workOrder->strhoras.'</td>'
                        . '<td>'.$workOrder->precio.'</td>'
                    . '</tr>';
            
            $cont++;
        }
        
        $table = $table.'</tbody>'
                . '</table>';
        
        return $table;
    }
    
    private function pdfUsers($fechainicio, $fechafin, $nick)
    {
        $table = '<h2>'.$this->toolBox()->i18n()->trans('users').'</h2>';
        $table = $table.'<h4>'.$fechainicio.' - '.$fechafin.'</h4>';
        
        $table = $table.'<table>'
                    . '<thead>'
                        . '<tr>'
                            . '<td>'.$this->toolBox()->i18n()->trans('nick').'</td>'
                            . '<td>'.$this->toolBox()->i18n()->trans('hours').'</td>'
                            . '<td>'.$this->toolBox()->i18n()->trans('price').'</td>'
                        . '</tr>'
                    . '</thead>'
                    . '<tbody>';
        
        foreach ($this->users as $user) {
            $table = $table.''
                    . '<tr>'
                        . '<td>'.$user->nick.'</td>'
                        . '<td>'.$user->strhoras.'</td>'
                        . '<td>'.$user->precio.'</td>'
                    . '</tr>';
        }
        
        $table = $table.'</tbody>'
                . '</table>';
        
        if ($nick != '') {
            $table = $table . $this->pdfWorkOrders($this->users[0]);
        }
        
        return $table;
    }
}