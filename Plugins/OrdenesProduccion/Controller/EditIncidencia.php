<?php
/**
 * Copyright (C) ATHOS TRADER SL <info@athosonline.com>
 */
namespace FacturaScripts\Plugins\OrdenesProduccion\Controller;

use FacturaScripts\Core\Base\Controller;
use FacturaScripts\Plugins\OrdenesProduccion\Model\Incidencia;
use FacturaScripts\Plugins\OrdenesProduccion\Model\IncidenciaOrden;
use FacturaScripts\Plugins\OrdenesProduccion\Model\ModelView\Incidencia as ModelViewIncidencia;
use FacturaScripts\Plugins\OrdenesProduccion\Model\Orden;
use FacturaScripts\Plugins\OrdenesProduccion\Model\Proceso;
use FacturaScripts\Plugins\Proyectos\Model\TareaProyecto;
use FacturaScripts\Plugins\Proyectos\Model\Proyecto;
use FacturaScripts\Core\Base\DataBase\DataBaseWhere;

/**
 * Description of EditIncidencia
 *
 * @author Daniel Fernández Giménez <daniel.fernandez@athosonline.com>
 */
class EditIncidencia extends Controller
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
        $data['title'] = 'incidence';
        $data['icon'] = 'fas fa-exclamation';
        $data['showonmenu'] = false;
        return $data;
    }
    
    /**
     * 
     * @param type $response
     * @param type $user
     * @param type $permissions
     */
    public function privateCore(&$response, $user, $permissions)
    {
        parent::privateCore($response, $user, $permissions);
        $this->execPreviousAction($this->request->request->get('action'));
    }
    
    /**
     * 
     * @param type $idproceso
     * @return type
     */
    public function getProceso($idproceso)
    {
        $proceso = new Proceso();
        $proceso->loadFromCode($idproceso);
        return $proceso->nombre;
    }
    
    /**
     * 
     * @return Incidencia
     */
    public function getIncidencia()
    {
        $incidencia = new Incidencia();
        $incidencia->loadFromCode($this->request->get('code'));
        return $incidencia;
    }
    
    /**
     * 
     * @param type $idtarea
     * @return type
     */
    public function getOrdenesTarea($idtarea)
    {
        $model = new Orden();
        $where = [new DataBaseWhere('idtarea', $idtarea)];
        $ordenes = $model->all($where, [], 0, $model->count());
        return $ordenes;
    }
    
    /**
     * 
     * @param type $idtarea
     * @return TareaProyecto
     */
    public function getTarea($idtarea)
    {
        $tarea = new TareaProyecto();
        $tarea->loadFromCode($idtarea);
        return $tarea;
    }
    
    /**
     * 
     * @param type $idproyecto
     * @return Proyecto
     */
    public function getProyecto($idproyecto)
    {
        $proyecto = new Proyecto();
        $proyecto->loadFromCode($idproyecto);
        return $proyecto;
    }
    
    /**
     * 
     * @param type $idincidencia
     * @return type
     */
    public function getOrdenesIncidencia($idincidencia)
    {
        $model = new ModelViewIncidencia();
        $where = [new DataBaseWhere('incidencias_ordenes.idincidencia', $idincidencia)];
        $ordenes = $model->all($where, [], 0, $model->count());
        return $ordenes;
    }
    
    private function execPreviousAction($action)
    {
        $result['result'] = false;
        
        switch ($action) {            
            case 'aprobar':
                $this->setTemplate(false);
                
                $incidencia = new Incidencia();
                $incidencia->loadFromCode($this->request->request->get('idincidencia'));
                $incidencia->estado = 1;
                $incidencia->save();
                
                $ordenesIncidencia = $this->getOrdenesIncidencia($incidencia->idincidencia);
                
                $this->dataBase->beginTransaction();
                try {
                    foreach($this->request->request->get('ordenes') as $orden) {
                        foreach($ordenesIncidencia as $ordenIncidencia) {
                            if ($orden['cantidadincidencia'] > 0 && $orden['idorden'] != $ordenIncidencia->idorden) {
                                $newIncidenciaOrden = new IncidenciaOrden();
                                $newIncidenciaOrden->idincidencia = $incidencia->idincidencia;
                                $newIncidenciaOrden->idorden = $orden['idorden'];
                                $newIncidenciaOrden->cantidadincidencia = $orden['cantidadincidencia'];
                                $newIncidenciaOrden->save();

                                $oldOrden = new Orden();
                                $oldOrden->loadFromCode($orden['idorden']);
                                $oldOrden->cantidadincidencia = $oldOrden->cantidadincidencia + $orden['cantidadincidencia'];
                                $oldOrden->cantidadpendiente = $oldOrden->cantidadpendiente - $orden['cantidadincidencia'];
                                $oldOrden->save();
                            }

                            if ($orden['cantidadincidencia'] > 0) {
                                $newOrden = new Orden();
                                $newOrden->loadFromCode($orden['idorden']);
                                $newOrden->cantidadpedida = $orden['cantidadincidencia'];
                                $newOrden->cantidadpendiente = $orden['cantidadincidencia'];
                                $newOrden->cantidadincidencia = 0;
                                $newOrden->estado = 0;
                                $newOrden->cronometro = 0;
                                $newOrden->parentidorden = $orden['idorden'];
                                unset($newOrden->idorden);
                                $newOrden->save();
                            }
                        }
                    }
                    
                    $result['result'] = $this->dataBase->commit();
                } catch (\Exception $e) {
                    $this->dataBase->rollback();
                }
                
                $this->response->setContent(json_encode($result));
                return false;
        }
    }
}