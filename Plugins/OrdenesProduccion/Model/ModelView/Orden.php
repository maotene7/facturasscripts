<?php
/**
 * Copyright (C) ATHOS TRADER SL <info@athosonline.com>
 */
namespace FacturaScripts\Plugins\OrdenesProduccion\Model\ModelView;

use FacturaScripts\Core\Model\Base\JoinModel;
use FacturaScripts\Plugins\OrdenesProduccion\Model\Orden as OrdenModel;
use FacturaScripts\Plugins\OrdenesProduccion\Model\OrdenCompletada;

/**
 * Description of Orden
 *
 * @author Daniel Fernández Giménez <daniel.fernandez@athosonline.com>
 */
class Orden extends JoinModel
{    
    public function __construct($data = array())
    {
       parent::__construct($data);
       $this->setMasterModel(new OrdenModel());
       new OrdenCompletada();
    }
    
    protected function getFields(): array
    {
        return [
            'idorden' => 'ordenes.idorden',
            'cantidadpedida' => 'ordenes.cantidadpedida',
            'cantidadpendiente' => 'ordenes.cantidadpendiente',
            'cantidadincidencia' => 'ordenes.cantidadincidencia',
            'idproceso' => 'ordenes.idproceso',
            'estado' => 'ordenes.estado',
            'idtarea' => 'ordenes.idtarea',
            'descripcion' => 'ordenes.descripcion',
            'fechafinalizacion' => 'ordenes.fechafinalizacion',
            'nombreproyecto' => 'proyectos.nombre',
            'idproyecto' => 'proyectos.idproyecto',
            'idempresa' => 'proyectos.idempresa',
            'privado' => 'proyectos.privado',
            'nombretarea' => 'tareas.nombre',
            'cronometro' => 'ordenes.cronometro'
        ];
    }

    protected function getSQLFrom(): string
    {
        return 'ordenes'
            . ' INNER JOIN tareas ON tareas.idtarea = ordenes.idtarea'
            . ' INNER JOIN proyectos ON proyectos.idproyecto = tareas.idproyecto';
    }

    protected function getTables(): array
    {
        return [
            'proyectos',
            'tareas',
            'ordenes'
        ];
    }
}