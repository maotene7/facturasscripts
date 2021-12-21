<?php
/**
 * Copyright (C) ATHOS TRADER SL <info@athosonline.com>
 */
namespace FacturaScripts\Plugins\OrdenesProduccion\Lib;

use FacturaScripts\Plugins\OrdenesProduccion\Lib\ProduccionReport;

use FacturaScripts\Core\Base\DataBase\DataBaseWhere;
use FacturaScripts\Plugins\Proyectos\Model\Proyecto;
use FacturaScripts\Plugins\Proyectos\Model\EstadoProyecto;
use FacturaScripts\Plugins\Proyectos\Model\TareaProyecto;
use FacturaScripts\Plugins\Proyectos\Model\FaseTarea;
use FacturaScripts\Plugins\OrdenesProduccion\Model\Orden;
use FacturaScripts\Plugins\OrdenesProduccion\Model\OrdenCompletada;
use FacturaScripts\Plugins\OrdenesProduccion\Model\Proceso;
use FacturaScripts\Core\Model\Empresa;
use FacturaScripts\Core\Model\Pais;
use FacturaScripts\Core\Model\Cliente;
use DateTime;

/**
 * Description of ProjectReport
 *
 * @author Daniel Fernández Giménez <daniel.fernandez@athosonline.com>
 */
class ProjectReport extends ProduccionReport
{    
    private $project;
    
    private $tasks;
    
    public function __construct() {
        parent::__construct();
    }
    
    public function getReport()
    {
        $idproyecto = isset($_GET['idproyecto'])?$_GET['idproyecto']:null;
        
        if ($idproyecto) {
            $this->getProject($idproyecto);
            $this->getTasksProject();
            $this->getWorkOrders();
            $this->calculateWorkOrders();
            
            $this->mpdf->WriteHTML($this->pdfHeaderFooter());
            $this->mpdf->WriteHTML('<h2>'.$this->toolBox()->i18n()->trans('project').'</h2>');
            $this->mpdf->WriteHTML($this->pdfProject());
            $this->mpdf->WriteHTML($this->pdfTasksProject());
            $this->mpdf->Output();
        }
    }
    
    private function getProject($idproyecto)
    {
        $this->project = new Proyecto();
        $this->project->loadFromCode($idproyecto);
    }
    
    private function getTasksProject()
    {
        $tasks = new TareaProyecto();
        $this->tasks = $tasks->all([new DataBaseWhere('idproyecto', $this->project->idproyecto)], [], 0, $tasks->count());
    }
    
    private function getWorkOrders()
    {
        $model = new Orden();
        foreach ($this->tasks as $task) {
            $model->clear();
            $workOrders = $model->all([new DataBaseWhere('idtarea', $task->idtarea)], [], 0, $model->count());
            $workOrders = $this->getCompleteWorkOrders($workOrders);
            $task->workOrders = $workOrders;
        }
    }
    
    private function getCompleteWorkOrders($workOrders)
    {
        $model = new OrdenCompletada();
        
        foreach ($workOrders as $workOrder) {
            $model->clear();
            $where = [new DataBaseWhere('idorden', $workOrder->idorden)];
            $workOrder->completeWorkOrders = $model->all($where, [], 0, $model->count());
        }
        
        return $workOrders;
    }
    
    private function calculateWorkOrders()
    {
        $this->project->horas = 0;
        $this->project->precio = 0;
        
        foreach ($this->tasks as $task) {
            
            $task->horas = 0;
            $task->precio = 0;
            
            foreach ($task->workOrders as $workOrder) {
                $start = true;
                $workHoras = 0;
                $workPrecio = 0;
                $orderHoras = 0;
                $fechainicio = '';
                $fechaparada = '';
                
                foreach ($workOrder->completeWorkOrders as $completeWorksOrder) {
                    if ($start && $completeWorksOrder->cantidadprocesada == 0) {
                        $completeWorksOrder->estado = $this->toolBox()->i18n()->trans('start');
                        $start = false;
                        $fechainicio = $completeWorksOrder->fechaprocesada.' '.$completeWorksOrder->horaprocesada;
                    } else if (!$start && $completeWorksOrder->cantidadprocesada == 0) {
                        $completeWorksOrder->estado = $this->toolBox()->i18n()->trans('stop');
                        $start = true;
                        $fechaparada = $completeWorksOrder->fechaprocesada.' '.$completeWorksOrder->horaprocesada;
                    } else if ($completeWorksOrder->cantidadprocesada > 0) {
                        $completeWorksOrder->estado = $this->toolBox()->i18n()->trans('prosecute');
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
                
                $task->horas = $task->horas + $workHoras;
                $task->precio = $task->precio + $workPrecio; 
            }
            
            $task->strhoras = $this->getFormatHours($task->horas);
            
            $this->project->horas = $this->project->horas + $task->horas;
            $this->project->precio = $this->project->precio + $task->precio;
        }
        
        $this->project->strhoras = $this->getFormatHours($this->project->horas);
    }
    
    private function pdfCompleteWorkOrder($task)
    {
        $orden = New Orden();
        $process = New Proceso();
        
        $table = '<table>'
                    . '<thead>'
                        . '<tr>'
                            . '<td>'.$this->toolBox()->i18n()->trans('process').'</td>'
                            . '<td>'.$this->toolBox()->i18n()->trans('amount-processed').'</td>'
                            . '<td>'.$this->toolBox()->i18n()->trans('processed-date').'</td>'
                            . '<td>'.$this->toolBox()->i18n()->trans('processed-hour').'</td>'
                            . '<td>'.$this->toolBox()->i18n()->trans('user').'</td>'
                            . '<td>'.$this->toolBox()->i18n()->trans('price').'/h</td>'
                            . '<td>'.$this->toolBox()->i18n()->trans('status').'</td>'
                        . '</tr>'
                    . '</thead>'
                    . '<tbody>';
        
        $cont = 1;
        
        foreach ($task->workOrders as $workOrder) {            
            foreach ($workOrder->completeWorkOrders as $completeWorksOrder) {
                $orden->clear();
                $process->clear();

                $orden->loadFromCode($completeWorksOrder->idorden);
                $process->loadFromCode($orden->idproceso);
                $css = ($cont%2==0)?'greybg':'';
                
                $table = $table.''
                        . '<tr class="'.$css.'">'
                            . '<td>'.$process->nombre.'</td>'
                            . '<td>'.$completeWorksOrder->cantidadprocesada.'</td>'
                            . '<td>'.$completeWorksOrder->fechaprocesada.'</td>'
                            . '<td>'.$completeWorksOrder->horaprocesada.'</td>'
                            . '<td>'.$completeWorksOrder->nick.'</td>'
                            . '<td>'.$completeWorksOrder->precio.'</td>'
                            . '<td>'.$completeWorksOrder->estado.'</td>'
                        . '</tr>';

                $cont++;
            }
        }
        
        $table = $table.'</tbody>'
                . '</table>';
        
        $table = '<h2>'.$this->toolBox()->i18n()->trans('orders-work-completed').' ('.$cont.')</h2>'.$table;
        
        return $table;
    }
    
    private function pdfWorkOrder($task)
    {
        $process = New Proceso();
        $table = '<h2>'.$this->toolBox()->i18n()->trans('orders-work').' ('.count($task->workOrders).')</h2>';
        
        $table = $table.'<table>'
                    . '<thead>'
                        . '<tr>'
                            . '<td>'.$this->toolBox()->i18n()->trans('process').'</td>'
                            . '<td>'.$this->toolBox()->i18n()->trans('amount-requested').'</td>'
                            . '<td>'.$this->toolBox()->i18n()->trans('amount-pending').'</td>'
                            . '<td>'.$this->toolBox()->i18n()->trans('amount-incidence').'</td>'
                            . '<td>'.$this->toolBox()->i18n()->trans('end-date').'</td>'
                            . '<td>'.$this->toolBox()->i18n()->trans('timing').'</td>'
                            . '<td>'.$this->toolBox()->i18n()->trans('hours').'</td>'
                            . '<td>'.$this->toolBox()->i18n()->trans('price').'</td>'
                            . '<td>'.$this->toolBox()->i18n()->trans('description').'</td>'
                        . '</tr>'
                    . '</thead>'
                    . '<tbody>';
        
        $cont = 1; 
        
        foreach ($task->workOrders as $workOrder) {
            $process->clear();
            $process->loadFromCode($workOrder->idproceso);
            $css = ($cont%2==0)?'greybg':'';
            $cronometro = ($workOrder->cronometro)?$this->toolBox()->i18n()->trans('yes'):$this->toolBox()->i18n()->trans('no');
            
            $table = $table.''
                    . '<tr class="'.$css.'">'
                        . '<td>'.$process->nombre.'</td>'
                        . '<td>'.$workOrder->cantidadpedida.'</td>'
                        . '<td>'.$workOrder->cantidadpendiente.'</td>'
                        . '<td>'.$workOrder->cantidadincidencia.'</td>'
                        . '<td>'.$workOrder->fechafinalizacion.'</td>'
                        . '<td>'.$cronometro.'</td>'
                        . '<td>'.$workOrder->strhoras.'</td>'
                        . '<td>'.$workOrder->precio.'</td>'
                        . '<td>'.$workOrder->descripcion.'</td>'
                    . '</tr>';
            
            $cont++;
        }
        
        $table = $table.'</tbody>'
                . '</table>';
        
        return $table;
    }
    
    private function pdfTasksProject()
    {
        $phaseTask = New FaseTarea();
        $table = '';
        $cont = 1;
        
        foreach ($this->tasks as $task) {
            $phaseTask->clear();
            
            $table = $table.'<h2>'.$this->toolBox()->i18n()->trans('task').' ('.$cont.'/'.count($this->tasks).'): '.$task->nombre.'</h2>';
            
            $table = $table.'<table>'
                    . '<thead>'
                        . '<tr>'
                            . '<td>'.$this->toolBox()->i18n()->trans('description').'</td>'
                            . '<td>'.$this->toolBox()->i18n()->trans('quantity').'</td>'
                            . '<td>'.$this->toolBox()->i18n()->trans('start-date').'</td>'
                            . '<td>'.$this->toolBox()->i18n()->trans('end-date').'</td>'
                            . '<td>'.$this->toolBox()->i18n()->trans('phase').'</td>'
                            . '<td>'.$this->toolBox()->i18n()->trans('date').'</td>'
                            . '<td>'.$this->toolBox()->i18n()->trans('hours').'</td>'
                            . '<td>'.$this->toolBox()->i18n()->trans('price').'</td>'
                        . '</tr>'
                    . '</thead>'
                    . '<tbody>';
            
            $phaseTask->loadFromCode($task->idfase);
            
            $table = $table.''
                    . '<tr>'
                        . '<td>'.$task->descripcion.'</td>'
                        . '<td>'.$task->cantidad.'</td>'
                        . '<td>'.$task->fechainicio.'</td>'
                        . '<td>'.$task->fechafin.'</td>'
                        . '<td>'.$phaseTask->nombre.'</td>'
                        . '<td>'.$task->fecha.'</td>'
                        . '<td>'.$task->strhoras.'</td>'
                        . '<td>'.$task->precio.'</td>'
                    . '</tr>';
            
            $table = $table.'</tbody>'
                . '</table>';
            
            $table = $table.$this->pdfWorkOrder($task);
            $table = $table.$this->pdfCompleteWorkOrder($task);
            $cont++;
        }
        
        return $table;
    }
    
    private function pdfProject()
    {
        $cliente = new Cliente();
        $cliente->loadFromCode($this->project->codcliente);
        $nameCliente = isset($cliente->nombre)?$cliente->nombre:'';
        
        $statusProject = New EstadoProyecto();
        $statusProject->loadFromCode($this->project->idestado);
        
        $table = '<table>'
                    . '<thead>'
                        . '<tr>'
                            . '<td>'.$this->toolBox()->i18n()->trans('name').'</td>'
                            . '<td>'.$this->toolBox()->i18n()->trans('description').'</td>'
                            . '<td>'.$this->toolBox()->i18n()->trans('customer').'</td>'
                            . '<td>'.$this->toolBox()->i18n()->trans('administrator').'</td>'
                            . '<td>'.$this->toolBox()->i18n()->trans('start-date').'</td>'
                            . '<td>'.$this->toolBox()->i18n()->trans('end-date').'</td>'
                            . '<td>'.$this->toolBox()->i18n()->trans('status').'</td>'
                            . '<td>'.$this->toolBox()->i18n()->trans('date').'</td>'
                            . '<td>'.$this->toolBox()->i18n()->trans('hours').'</td>'
                            . '<td>'.$this->toolBox()->i18n()->trans('price').'</td>'
                        . '</tr>'
                    . '</thead>'
                    . '<tbody>'
                        . '<tr>'
                            . '<td>'.$this->project->nombre.'</td>'
                            . '<td>'.$this->project->descripcion.'</td>'
                            . '<td>'.$nameCliente.'</td>'
                            . '<td>'.$this->project->nick.'</td>'
                            . '<td>'.$this->project->fechainicio.'</td>'
                            . '<td>'.$this->project->fechafin.'</td>'
                            . '<td>'.$statusProject->nombre.'</td>'
                            . '<td>'.$this->project->fecha.'</td>'
                            . '<td>'.$this->project->strhoras.'</td>'
                            . '<td>'.$this->project->precio.'</td>'
                        . '</tr>'
                    . '</tbody>'
                . '</table>';
        
        return $table;
    }
    
    private function pdfHeaderFooter()
    {
        $empresa = new Empresa();
        $empresa->loadFromCode($this->project->idempresa);
        
        $pais = new Pais();
        $pais->loadFromCode($empresa->codpais);
        
        $html = '
            <htmlpageheader name="MyHeader1">
                <div style="text-align: right"><h3>'.$empresa->nombre.'</h3></div>
                <div style="text-align: right">'.$empresa->cifnif.' - '.$empresa->direccion.'</div>
                <div style="text-align: right">'.$empresa->codpostal.', '.$empresa->ciudad.' ('.$empresa->provincia.') '.$pais->nombre.'</div>
                <div style="text-align: right">'.$empresa->telefono1.' - '.$empresa->email.'</div>
            </htmlpageheader>

            <htmlpagefooter name="MyFooter1">
                <table id="footer" width="100%">
                    <tr>
                        <td width="33%"><span style="font-size: 12px;">{PAGENO}/{nbpg}</span></td>
                        <td width="33%" align="center" style="font-weight: bold; font-style: italic;"></td>
                        <td width="33%" style="text-align: right; font-size: 12px;">{DATE j-m-Y}</td>
                    </tr>
                </table>
            </htmlpagefooter>

            <sethtmlpageheader name="MyHeader1" value="on" show-this-page="1" />
            <sethtmlpagefooter name="MyFooter1" value="on" />';
        
        return $html;
    }
}