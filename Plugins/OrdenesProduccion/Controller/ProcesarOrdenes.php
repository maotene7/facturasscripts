<?php
/**
 * Copyright (C) ATHOS TRADER SL <info@athosonline.com>
 */
namespace FacturaScripts\Plugins\OrdenesProduccion\Controller;

use FacturaScripts\Core\Base\Controller;
use FacturaScripts\Plugins\OrdenesProduccion\Model\UsuarioProceso;
use FacturaScripts\Plugins\OrdenesProduccion\Model\Orden;
use FacturaScripts\Plugins\OrdenesProduccion\Model\ProductoProceso;
use FacturaScripts\Plugins\OrdenesProduccion\Model\ModelView\ProcesarOrden;
use FacturaScripts\Plugins\OrdenesProduccion\Model\OrdenCompletada;
use FacturaScripts\Plugins\OrdenesProduccion\Model\Incidencia;
use FacturaScripts\Plugins\OrdenesProduccion\Model\IncidenciaOrden;
use FacturaScripts\Plugins\OrdenesProduccion\Model\Proceso;
use FacturaScripts\Plugins\Proyectos\Model\TareaProyecto;
use FacturaScripts\Plugins\Proyectos\Model\FaseTarea;
use FacturaScripts\Core\Base\DataBase\DataBaseWhere;
use FacturaScripts\Core\Model\RoleUser;
use FacturaScripts\Core\Model\Role;

/**
 * Description of ProcesarOrdenes
 *
 * @author Daniel Fernández Giménez <daniel.fernandez@athosonline.com>
 */
class ProcesarOrdenes extends Controller
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
        $data['title'] = 'complete-orders-work';
        $data['icon'] = 'fas fa-tasks';
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
     * @return array
     */
    public function allProcesos()
    {
        $modelUserProcesos = new UsuarioProceso();
        $where = [new DataBaseWhere('nick', $this->user->nick)];
        
        $modelOrden = new Orden();
        $proceso = new Proceso();
        
        $results = [];
        foreach ($modelUserProcesos->all($where, [], 0, $modelUserProcesos->count()) as $UserProceso) {
            $modelOrden->clear();
            $proceso->clear();
            
            $proceso->loadFromCode($UserProceso->idproceso);
            
            $where = [
                new DataBaseWhere('estado', 2, '<'),
                new DataBaseWhere('idproceso', $proceso->idproceso)
            ];

            $aux = array(
                'idproceso' => $proceso->idproceso,
                'proceso' => $proceso->nombre,
                'count' => $modelOrden->count($where)
            );

            array_push($results, $aux);
        }
        
        return $results;
    }
    
    /**
     * 
     * @return array
     */
    public function allOrdenes()
    {
        $modelProcesarOrden = new ProcesarOrden();
        $where = [new DataBaseWhere('ordenes.estado', 2, '<')];
        $order = ['ordenes.fechafinalizacion' => 'ASC'];
        $ordenes = $modelProcesarOrden->all($where, $order, 0, $modelProcesarOrden->count());
        
        return $ordenes;
    }
    
    /**
     * OBTENEMOS EL PRECIO DEL PROCESO CUANDO SE PROCESA
     * 
     * @param object $Orden
     * @return double
     */
    private function getPriceProceso($Orden) {
        $Proceso = new Proceso();
        $Proceso->loadFromCode($Orden->idproceso);
        
        $Tarea = new TareaProyecto();
        $Tarea->loadFromCode($Orden->idtarea);
        
        if ($Proceso->precio) {
            $precio = $Proceso->precio;
        } else {
            $precio = 0;
        }
        
        $UsuarioProceso = new UsuarioProceso();
        $where = [
            new DataBaseWhere('nick', $this->user->nick),
            new DataBaseWhere('idproceso', $Orden->idproceso)
        ];
        $UsuarioProceso->loadFromCode('', $where);
        
        if ($UsuarioProceso->precio > 0) {
            $precio = $UsuarioProceso->precio;
        } else if ($Tarea->idvariante) {
            $ProductoProceso = new ProductoProceso();
            $where = [
                new DataBaseWhere('idvariante', $Tarea->idvariante),
                new DataBaseWhere('idproceso', $Orden->idproceso)
            ];
            $ProductoProceso->loadFromCode('', $where);

            if ($ProductoProceso->precio > 0) {
                $precio = $ProductoProceso->precio;
            }
        }
        
        return $precio;
    }
    
    /**
     * MARCAMOS LA TAREA EN PROCESANDO
     * 
     * @param object $Orden
     */
    private function changeFaseTarea($Orden)
    {
        $Tarea = new TareaProyecto();
        $Tarea->loadFromCode($Orden->idtarea);

        $FaseTarea = new FaseTarea();
        //MARCAMOS LA TAREA EN PRODUCCION
        $whereFases = [new DataBaseWhere('tipo', 2)];
        $FaseTarea->loadFromCode('', $whereFases);

        if ($FaseTarea) {
            $Tarea->idfase = $FaseTarea->idfase;
        }

        $Tarea->save(); 
    }
    
    /**
     * SE INICIA O SE PARA EL CONTADOR DE CADA ORDEN DE TRABAJO
     * 
     * @param object $Orden
     * @param object $OrdenCompletada
     * @return boolean
     */
    private function cronometro($Orden, $OrdenCompletada)
    {
        $result['result'] = false;
        
        if ($OrdenCompletada->save()) {
            $Orden->estado = 1;
            
            if ($Orden->cronometro) {
                $Orden->cronometro = 0;
            } else {
                $Orden->cronometro = 1;
            }
            
            if ($Orden->save()) {
                $result['result'] = true;
                $result['cronometro'] = $Orden->cronometro;
                $this->changeFaseTarea($Orden);
            }
        }
        
        $this->response->setContent(json_encode($result));
        return false;
    }
    
    /**
     * DAMOS POR TERMINADA UNA ORDEN DE TRABAJO SEGUN LA CANTIDAD QUE SE LE PASE
     * 
     * @param object $Orden
     * @param object $OrdenCompletada
     * @return boolean
     */
    private function procesar($Orden, $OrdenCompletada)
    {
        $result['result'] = false;
        
        $OrdenCompletada->cantidadprocesada = $this->request->request->get('cantidad');
        $OrdenCompletada->precio = $this->getPriceProceso($Orden);
        
        if ($OrdenCompletada->save()) {
            //GUARDAMOS EL PROCESO DE LA TAREA CLICADO
            //MARCAMOS EL PROCESO DE LA TAREA COMO PRODUCCION O COMPLETADO
            $Orden->cantidadpendiente = $Orden->cantidadpendiente - $OrdenCompletada->cantidadprocesada;

            if ($Orden->save()) {
                $result['result'] = true;

                ///OBTENEMOS LA TAREA DEL PROCESO CLICADO
                $Tarea = new TareaProyecto();
                $Tarea->loadFromCode($Orden->idtarea);
                
                ///OBTENEMOS TODOS LOS PROCESOS DE LA TAREA PROCESADA
                $modelOrden = new Orden();
                $whereOrden = [new DataBaseWhere('idtarea', $Orden->idtarea)];
                
                //BUSCAMOS SI TODOS LOS PROCESOS DE LA TAREA HAN SIDO COMPLETADOS
                $tareaCompletada = true;
                foreach ($modelOrden->all($whereOrden, [], 0, $modelOrden->count()) as $ord) {
                    if ($ord->cantidadpendiente > 0) {
                        $tareaCompletada = false;
                    }
                }
                
                $FaseTarea = new FaseTarea();
                
                //MARCAMOS LA TAREA EN COMPLETADA O PROCESANDO SEGUN SEA EL CASO
                $whereFases = ($tareaCompletada)?[new DataBaseWhere('tipo', 0)]:[new DataBaseWhere('tipo', 2)];
                $FaseTarea->loadFromCode('', $whereFases);

                if ($FaseTarea) {
                    $Tarea->idfase = $FaseTarea->idfase;
                }

                $Tarea->save();
            }
        }

        $this->response->setContent(json_encode($result));
        return false;
    }
    
    /**
     * 
     * @param type $Orden
     * @return boolean
     */
    private function incidencia($Orden)
    {
        $result['result'] = false;
        
        $Incidencia = new Incidencia();
        $Incidencia->fecha = date('Y-m-d');
        
        $Incidencia->observaciones = $this->request->request->get('observaciones');
        $Incidencia->nick = $this->user->nick;
        $Incidencia->idtarea = $Orden->idtarea;
        
        if ($Incidencia->save()) {
            $IncidenciaOrden = new IncidenciaOrden();
            $IncidenciaOrden->idorden = $Orden->idorden;
            $IncidenciaOrden->idincidencia = $Incidencia->idincidencia;
            $IncidenciaOrden->cantidadincidencia = $this->request->request->get('cantidad');
            
            if ($IncidenciaOrden->save()) {
                $Orden->cantidadincidencia = $Orden->cantidadincidencia + $IncidenciaOrden->cantidadincidencia;
                $Orden->cantidadpendiente = $Orden->cantidadpendiente - $IncidenciaOrden->cantidadincidencia;
                
                $result['result'] = $Orden->save();
            }
        }
        
        $this->response->setContent(json_encode($result));
        return false;
    }
    
    private function execPreviousAction($action)
    {        
        //OBTENEMOS EL PROCESO CLICADO
        $Orden = new Orden();
        $Orden->loadFromCode($this->request->request->get('idorden'));
        
        //GUARDAMOS EL PROCESO COMPLETADO O INICIADO
        $OrdenCompletada = new OrdenCompletada();
        $OrdenCompletada->fechaprocesada = date('Y-m-d');
        $OrdenCompletada->horaprocesada = date('H:i:s');
        $OrdenCompletada->nick = $this->user->nick;
        $OrdenCompletada->idorden = $Orden->idorden;
        
        switch ($action) {
            case 'iniciar':
                $this->setTemplate(false);
                $this->cronometro($Orden, $OrdenCompletada);
                return false;
                
            case 'parar':
                $this->setTemplate(false);
                $aux = new OrdenCompletada();
                $where = [new DataBaseWhere('idorden', $OrdenCompletada->idorden)];
                $orden = ['idorden' => 'DESC'];
                $procesada = $aux->all($where, $orden, 0, 1);
                
                if ($procesada[0]->nick == $OrdenCompletada->nick) {
                    $this->cronometro($Orden, $OrdenCompletada);
                }
                return false;
            
            case 'procesar':
                $this->setTemplate(false);
                $this->procesar($Orden, $OrdenCompletada);
                return false;
                
            case 'incidencia':
                $this->setTemplate(false);
                $this->incidencia($Orden);
                return false;
        }
    }
    
    /**
     * 
     * @return int
     */
    public function getTimeSession()
    {
        $timeSession = 0;
        
        if (!$this->user->admin) {
            $nick = $this->request->cookies->get('fsNick');

            $modelRoles = new RoleUser();
            $whereR = [new DataBaseWhere('nick', $nick)];
            $rolesUser = $modelRoles->all($whereR, [], 0, $modelRoles->count());

            $times = [];
            foreach ($rolesUser as $roleUser) {
                $role = new Role();
                $role->loadFromCode($roleUser->codrole);

                if (isset($role->tiemposesion)) {
                    $times[] = $role->tiemposesion;
                }
            }

            if (count($times) > 0) {
                sort($times);
                $timeSession = $times[0] * 60000;
            }
        }
        
        return $timeSession;
    }
}