<?php
/**
 * Copyright (C) ATHOS TRADER SL <info@athosonline.com>
 */
namespace FacturaScripts\Plugins\OrdenesProduccion\Controller;

use FacturaScripts\Core\Base\Controller;
use FacturaScripts\Core\Base\DataBase\DataBaseWhere;
use FacturaScripts\Plugins\Proyectos\Model\Proyecto;
use FacturaScripts\Plugins\OrdenesProduccion\Lib\ProjectReport;
use FacturaScripts\Plugins\OrdenesProduccion\Lib\ProcessesReport;
use FacturaScripts\Plugins\OrdenesProduccion\Lib\UsersReport;
use FacturaScripts\Plugins\OrdenesProduccion\Lib\IncidencesReport;
use FacturaScripts\Core\Model\User;

/**
 * Description of InformesOrdenes
 *
 * @author Daniel Fernández Giménez <daniel.fernandez@athosonline.com>
 */
class InformesOrdenes extends Controller
{
    /**
     * Returns basic page attributes
     *
     * @return array
     */
    public function getPageData()
    {
        $data = parent::getPageData();
        $data['menu'] = 'reports';
        $data['title'] = 'orders-work';
        $data['icon'] = 'fas fa-bars';
        return $data;
    }
    
    public function privateCore(&$response, $user, $permissions)
    {
        parent::privateCore($response, $user, $permissions);
        $this->execPreviousAction();
    }
    
    private function execPreviousAction()
    {
        $action = (isset($_GET['action']))?$_GET['action']:$this->request->request->get('action');
        
        switch ($action) {
            case 'proyectos':
                $this->setTemplate(false);
                $this->searchProyectos();
                return false;
                
            case 'usuarios':
                $this->setTemplate(false);
                $this->searchUsuarios();
                return false;
                
            case 'informe-proyecto':
                $this->setTemplate(false);
                $report = new ProjectReport();
                $report->getReport();
                return false;
             
            case 'informe-procesos':
                $this->setTemplate(false);
                $report = new ProcessesReport();
                $report->getReport();
                return false;
                
            case 'informe-usuarios':
                $this->setTemplate(false);
                $report = new UsersReport();
                $report->getReport();
                return false;
                
            case 'informe-incidencia-proyecto':
                $this->setTemplate(false);
                $report = new IncidencesReport();
                $report->getReportProject();
                return false;
                
            case 'informe-incidencia-usuario':
                $this->setTemplate(false);
                $report = new IncidencesReport();
                $report->getReportUser();
                return false;
                
            case 'informe-incidencias':
                $this->setTemplate(false);
                $report = new IncidencesReport();
                $report->getReportIncidences();
                return false;
        }
    }
    
    private function searchUsuarios()
    {
        if (isset($_GET['term'])) {
            $model = new User();
            $where = [new DataBaseWhere('nick', $_GET['term'], 'LIKE')];
            $usuarios = $model->all($where, [], 0, $model->count());

            $results = [];

            foreach ($usuarios as $user) {
                $results[] = array(
                    'id' => $user->nick,
                    'value' => $user->nick
                );
            }
            
            $this->response->setContent(json_encode($results));
            return false;
        }
    }
    
    private function searchProyectos()
    {
        if (isset($_GET['term'])) {
            $model = new Proyecto();
            $where = [new DataBaseWhere('nombre', $_GET['term'], 'LIKE')];
            $proyectos = $model->all($where, [], 0, $model->count());

            $results = [];

            foreach ($proyectos as $proyecto) {
                $results[] = array(
                    'id' => $proyecto->idproyecto,
                    'value' => $proyecto->idproyecto.' | '.$proyecto->nombre
                );
            }
            
            $this->response->setContent(json_encode($results));
            return false;
        }
    }
}