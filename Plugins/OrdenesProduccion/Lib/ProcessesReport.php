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
use DateTime;

/**
 * Description of ProcessesReport
 *
 * @author Daniel Fernández Giménez <daniel.fernandez@athosonline.com>
 */
class ProcessesReport extends ProduccionReport
{        
    private $processes;
    
    public function __construct()
    {
        parent::__construct();
    }
    
    public function getReport()
    {
        $fechainicio = isset($_GET['fechainicio'])?$_GET['fechainicio']:null;
        $fechafin = isset($_GET['fechafin'])?$_GET['fechafin']:null;
        
        if ($fechainicio != '' && $fechafin != '') {
            $this->getProcesses();
            $this->getWorkOrders($fechainicio, $fechafin);
            $this->calculateWorkOrders();
                        
            $this->mpdf->WriteHTML($this->pdfProcesses());
            $this->mpdf->Output();
        }
    }
    
    private function getProcesses()
    {
        $processes = new Proceso();
        $this->processes = $processes->all([], [], 0, $processes->count());
    }
    
    private function getWorkOrders($fechainicio, $fechafin)
    {
        $model = new Orden();
        foreach ($this->processes as $process) {
            $model->clear();
            $where = [
                new DataBaseWhere('idproceso', $process->idproceso),
                new DataBaseWhere('fechafinalizacion', $fechainicio, '>='),
                new DataBaseWhere('fechafinalizacion', $fechafin, '<='),
            ];
            $workOrders = $model->all($where, [], 0, $model->count());
            $workOrders = $this->getCompleteWorkOrders($workOrders);
            $process->workOrders = $workOrders;
        }
    }
    
    private function getCompleteWorkOrders($workOrders)
    {
        foreach ($workOrders as $workOrder) {
            $task = new TareaProyecto();
            $task->loadFromCode($workOrder->idtarea);
            $workOrder->task = $task;
            
            $project = new Proyecto();
            $project->loadFromCode($workOrder->task->idproyecto);
            $workOrder->project = $project;
            
            $company = new Empresa();
            $company->loadFromCode($workOrder->project->idempresa);
            $workOrder->company = $company;
            
            $model = new OrdenCompletada();
            $where = [new DataBaseWhere('idorden', $workOrder->idorden)];
            $workOrder->completeWorkOrders = $model->all($where, [], 0, $model->count());
        }
        
        return $workOrders;
    }
    
    private function calculateWorkOrders()
    {
        foreach ($this->processes as $process) {
            
            $process->horas = 0;
            $process->precio = 0;
            
            foreach ($process->workOrders as $workOrder) {
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
                
                $process->horas = $process->horas + $workHoras;
                $process->precio = $process->precio + $workPrecio;
            }
            
            $process->strhoras = $this->getFormatHours($process->horas);
        }
    }
    
    private function pdfWorkOrders($process)
    {
        $table = '<h2>'.$this->toolBox()->i18n()->trans('orders-work').' ('.count($process->workOrders).')</h2>';
        
        $table = $table.'<table>'
                    . '<thead>'
                        . '<tr>'
                            . '<td>'.$this->toolBox()->i18n()->trans('company').'</td>'
                            . '<td>'.$this->toolBox()->i18n()->trans('project').'</td>'
                            . '<td>'.$this->toolBox()->i18n()->trans('task').'</td>'
                            . '<td>'.$this->toolBox()->i18n()->trans('end-date').'</td>'
                            . '<td>'.$this->toolBox()->i18n()->trans('hours').'</td>'
                            . '<td>'.$this->toolBox()->i18n()->trans('price').'</td>'
                        . '</tr>'
                    . '</thead>'
                    . '<tbody>';
        
        $cont = 1; 
        
        foreach ($process->workOrders as $workOrder) {
            $css = ($cont%2==0)?'greybg':'';
            
            $table = $table.''
                    . '<tr class="'.$css.'">'
                        . '<td>'.$workOrder->company->nombre.'</td>'
                        . '<td>'.$workOrder->project->nombre.'</td>'
                        . '<td>'.$workOrder->task->nombre.'</td>'
                        . '<td>'.$workOrder->fechafinalizacion.'</td>'
                        . '<td>'.$workOrder->strhoras.'</td>'
                        . '<td>'.$workOrder->precio.'</td>'
                    . '</tr>';
            
            $cont++;
        }
        
        $table = $table.'</tbody>'
                . '</table>';
        
        return $table;
    }
    
    private function pdfProcesses()
    {
        $table = '';
        $cont = 1;
        
        foreach ($this->processes as $process) {
            
            $table = $table.'<h2>'.$this->toolBox()->i18n()->trans('process').' ('.$cont.'/'.count($this->processes).'): '.$process->nombre.'</h2>';
            
            $table = $table.'<table>'
                    . '<thead>'
                        . '<tr>'
                            . '<td>'.$this->toolBox()->i18n()->trans('hours').'</td>'
                            . '<td>'.$this->toolBox()->i18n()->trans('price').'</td>'
                        . '</tr>'
                    . '</thead>'
                    . '<tbody>';
            
            $table = $table.''
                    . '<tr>'
                        . '<td>'.$process->strhoras.'</td>'
                        . '<td>'.$process->precio.'</td>'
                    . '</tr>';
            
            $table = $table.'</tbody>'
                . '</table>';
            
            $table = $table.$this->pdfWorkOrders($process);
            $cont++;
        }
        
        return $table;
    }
}