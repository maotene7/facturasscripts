<?php
/**
 * Copyright (C) ATHOS TRADER SL <info@athosonline.com>
 */
namespace FacturaScripts\Plugins\OrdenesProduccion\Extension\Model;

use FacturaScripts\Plugins\OrdenesProduccion\Model\ProductoProceso;
use FacturaScripts\Plugins\OrdenesProduccion\Model\Orden;
use FacturaScripts\Core\Base\DataBase\DataBaseWhere;
use FacturaScripts\Plugins\Proyectos\Model\FaseTarea;
use FacturaScripts\Plugins\Proyectos\Model\Proyecto;

/**
 * Description of TareaProyecto
 *
 * @author Daniel Fernández Giménez <daniel.fernandez@athosonline.com>
 */
class TareaProyecto
{
    public function saveInsert()
    {
        return function() {
            if ($this->idvariante) {
                $ProductoProcesoModel = new ProductoProceso();
                $where = [new DataBaseWhere('idvariante', $this->idvariante)];
                $order = ['orden' => 'ASC'];

                $Orden = new Orden();
                foreach ($ProductoProcesoModel->all($where, $order, 0, $ProductoProcesoModel->count()) as $proceso) {
                    $Orden->clear();
                    $Orden->idproceso = $proceso->idproceso;
                    $Orden->cantidadpedida = $proceso->cantidad;
                    $Orden->descripcion = $proceso->descripcion;
                    $Orden->idtarea = $this->idtarea;
                    $Orden->fechafinalizacion = isset($this->fechafin)?$this->fechafin:null;
                    $Orden->estado = 0;
                    $Orden->save();
                }
            }
        };
    }
    
    public function saveUpdate()
    {
        return function() {
            $oldFaseTarea = new FaseTarea();
            $oldFaseTarea->loadFromCode($this->idfase);
            
            if ($oldFaseTarea->tipo == 2) {
                $proyecto = new Proyecto();
                $proyecto->loadFromCode($this->idproyecto);
                $proyecto->idestado = $oldFaseTarea->idestado;
                $proyecto->save();
            }
        };
    }
}