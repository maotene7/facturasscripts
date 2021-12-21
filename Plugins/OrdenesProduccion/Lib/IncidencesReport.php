<?php
/**
 * Copyright (C) ATHOS TRADER SL <info@athosonline.com>
 */
namespace FacturaScripts\Plugins\OrdenesProduccion\Lib;

use FacturaScripts\Plugins\OrdenesProduccion\Lib\ProduccionReport;

use FacturaScripts\Core\Base\DataBase\DataBaseWhere;
use FacturaScripts\Plugins\Proyectos\Model\Proyecto;
use FacturaScripts\Plugins\Proyectos\Model\EstadoProyecto;
use FacturaScripts\Plugins\OrdenesProduccion\Model\Proceso;
use FacturaScripts\Plugins\OrdenesProduccion\Model\ModelView\Incidencia as viewIncidencia;
use FacturaScripts\Core\Model\Empresa;
use FacturaScripts\Core\Model\User;
use FacturaScripts\Core\Model\Cliente;

/**
 * Description of IncidencesReport
 *
 * @author Daniel Fernández Giménez <daniel.fernandez@athosonline.com>
 */
class IncidencesReport extends ProduccionReport
{        
    public function __construct()
    {
        parent::__construct();
    }
    
    public function getReportProject()
    {
        $idproyecto = isset($_GET['idproyecto'])?$_GET['idproyecto']:null;
        
        if ($idproyecto) {
            $project = new Proyecto();
            $project->loadFromCode($idproyecto);
            
            $modelIncidence = new viewIncidencia();
            $whereIn = [new DataBaseWhere('proyectos.idproyecto', $idproyecto)];
            $incidences = $modelIncidence->all($whereIn, [], 0, $modelIncidence->count());
            
            $this->mpdf->WriteHTML('<h2>'.$this->toolBox()->i18n()->trans('project').'</h2>');
            $this->mpdf->WriteHTML($this->pdfProject($project));
            $this->mpdf->WriteHTML($this->pdfIncidences($incidences));
            $this->mpdf->Output();
        }
    }
    
    public function getReportUser()
    {
        $nick = isset($_GET['nick'])?$_GET['nick']:null;
        
        if ($nick) {
            $user = new User();
            $user->loadFromCode($nick);
            
            $modelIncidence = new viewIncidencia();
            $incidences = $modelIncidence->all([new DataBaseWhere('incidencias.nick', $nick)], [], 0, $modelIncidence->count());
            
            $this->mpdf->WriteHTML('<h2>'.$this->toolBox()->i18n()->trans('user').'</h2>');
            $this->mpdf->WriteHTML($this->pdfUser($user));
            $this->mpdf->WriteHTML($this->pdfIncidences($incidences));
            $this->mpdf->Output();
        }
    }
    
    public function getReportIncidences()
    {
        $fechainicio = isset($_GET['fechainicio'])?$_GET['fechainicio']:null;
        $fechafin = isset($_GET['fechafin'])?$_GET['fechafin']:null;
        
        if ($fechainicio != '' && $fechafin != '') {            
            $modelIncidence = new viewIncidencia();
            $whereIn = [
                new DataBaseWhere('incidencias.fecha', $fechainicio, '>='),
                new DataBaseWhere('incidencias.fecha', $fechafin, '<=')
            ];
            $incidences = $modelIncidence->all($whereIn, [], 0, $modelIncidence->count());
            
            $this->mpdf->WriteHTML($this->pdfIncidences($incidences, $fechainicio, $fechafin));
            $this->mpdf->Output();
        }
    }
    
    private function pdfUser($user)
    {
        $company = new Empresa();
        $company->loadFromCode($user->idempresa);
        
        $table = '<table>'
                    . '<thead>'
                        . '<tr>'
                            . '<td>'.$this->toolBox()->i18n()->trans('nick').'</td>'
                            . '<td>'.$this->toolBox()->i18n()->trans('email').'</td>'
                            . '<td>'.$this->toolBox()->i18n()->trans('company').'</td>'
                        . '</tr>'
                    . '</thead>'
                    . '<tbody>'
                        . '<tr>'
                            . '<td>'.$user->nick.'</td>'
                            . '<td>'.$user->email.'</td>'
                            . '<td>'.$company->nombre.'</td>'
                        . '</tr>'
                    . '</tbody>'
                . '</table>';
        
        return $table;
    }
    
    private function pdfIncidences($incidences, $fechainicio = null, $fechafin = null)
    {
        $table = '<h2>'.$this->toolBox()->i18n()->trans('incidences').' ('.count($incidences).')</h2>';
        
        if (!is_null($fechainicio) && !is_null($fechafin)) {
            $table = $table.'<h4>'.$fechainicio.' - '.$fechafin.'</h4>';
        }
        
        $table = $table.'<table>'
                    . '<thead>'
                        . '<tr>'
                            . '<td>'.$this->toolBox()->i18n()->trans('project').'</td>'
                            . '<td>'.$this->toolBox()->i18n()->trans('task').'</td>'
                            . '<td>'.$this->toolBox()->i18n()->trans('process').'</td>'
                            . '<td>'.$this->toolBox()->i18n()->trans('date').'</td>'
                            . '<td>'.$this->toolBox()->i18n()->trans('quantity').'</td>'
                            . '<td>'.$this->toolBox()->i18n()->trans('nick').'</td>'
                            . '<td>'.$this->toolBox()->i18n()->trans('observations').'</td>'
                        . '</tr>'
                    . '</thead>'
                    . '<tbody>';
        
        foreach ($incidences as $incidence) {
            $process = new Proceso();
            $process->loadFromCode($incidence->idproceso);
            
            $table = $table.''
                    . '<tr>'
                        . '<td>'.$incidence->nombreproyecto.'</td>'
                        . '<td>'.$incidence->nombretarea.'</td>'
                        . '<td>'.$process->nombre.'</td>'
                        . '<td>'.$incidence->fecha.'</td>'
                        . '<td>'.$incidence->cantidadincidencia.'</td>'
                        . '<td>'.$incidence->nick.'</td>'
                        . '<td>'.$incidence->observaciones.'</td>'
                    . '</tr>';
        }
        
        $table = $table.'</tbody>'
                . '</table>';
        
        return $table;
    }
    
    private function pdfProject($project)
    {
        $company = new Empresa();
        $company->loadFromCode($project->idempresa);
        
        $cliente = new Cliente();
        $cliente->loadFromCode($project->codcliente);
        $nameCliente = isset($cliente->nombre)?$cliente->nombre:'';
        
        $statusProject = New EstadoProyecto();
        $statusProject->loadFromCode($project->idestado);
        
        $table = '<table>'
                    . '<thead>'
                        . '<tr>'
                            . '<td>'.$this->toolBox()->i18n()->trans('company').'</td>'
                            . '<td>'.$this->toolBox()->i18n()->trans('name').'</td>'
                            . '<td>'.$this->toolBox()->i18n()->trans('description').'</td>'
                            . '<td>'.$this->toolBox()->i18n()->trans('customer').'</td>'
                            . '<td>'.$this->toolBox()->i18n()->trans('administrator').'</td>'
                            . '<td>'.$this->toolBox()->i18n()->trans('start-date').'</td>'
                            . '<td>'.$this->toolBox()->i18n()->trans('end-date').'</td>'
                            . '<td>'.$this->toolBox()->i18n()->trans('status').'</td>'
                            . '<td>'.$this->toolBox()->i18n()->trans('date').'</td>'
                        . '</tr>'
                    . '</thead>'
                    . '<tbody>'
                        . '<tr>'
                            . '<td>'.$company->nombre.'</td>'
                            . '<td>'.$project->nombre.'</td>'
                            . '<td>'.$project->descripcion.'</td>'
                            . '<td>'.$nameCliente.'</td>'
                            . '<td>'.$project->nick.'</td>'
                            . '<td>'.$project->fechainicio.'</td>'
                            . '<td>'.$project->fechafin.'</td>'
                            . '<td>'.$statusProject->nombre.'</td>'
                            . '<td>'.$project->fecha.'</td>'
                        . '</tr>'
                    . '</tbody>'
                . '</table>';
        
        return $table;
    }
}