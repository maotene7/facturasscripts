<?php
/**
 * Copyright (C) ATHOS TRADER SL <info@athosonline.com>
 */
namespace FacturaScripts\Plugins\OrdenesProduccion\Model\ModelView;

use FacturaScripts\Core\Model\Base\JoinModel;
use FacturaScripts\Plugins\OrdenesProduccion\Model\Incidencia as parentIncidencia;
use FacturaScripts\Plugins\OrdenesProduccion\Model\IncidenciaOrden;
use FacturaScripts\Plugins\OrdenesProduccion\Model\Orden;

/**
 * Description of Incidencia
 *
 * @author Daniel Fernández Giménez <daniel.fernandez@athosonline.com>
 */
class Incidencia extends JoinModel
{    
    public function __construct($data = array())
    {
       parent::__construct($data);
       $this->setMasterModel(new parentIncidencia());
       new Orden();
       new IncidenciaOrden();
    }
    
    protected function getFields(): array
    {
        return [
            'idio' => 'incidencias_ordenes.idio',
            'idincidencia' => 'incidencias_ordenes.idincidencia',
            'idproyecto' => 'tareas.idproyecto',
            'idtarea' => 'ordenes.idtarea',
            'idorden' => 'incidencias_ordenes.idorden',
            'idproceso' => 'ordenes.idproceso',
            'cantidadpedida' => 'ordenes.cantidadpedida',
            'cantidadpendiente' => 'ordenes.cantidadpendiente',
            'cantidadincidencia' => 'incidencias_ordenes.cantidadincidencia',
            'fecha' => 'incidencias.fecha',
            'nick' => 'incidencias.nick',
            'idempresa' => 'proyectos.idempresa',
            'estado' => 'incidencias.estado',
            'nombretarea' => 'tareas.nombre',
            'nombreproyecto' => 'proyectos.nombre',
            'observaciones' => 'incidencias.observaciones'
        ];
    }

    protected function getSQLFrom(): string
    {
        return 'incidencias'
            . ' INNER JOIN incidencias_ordenes ON incidencias_ordenes.idincidencia = incidencias.idincidencia'
            . ' INNER JOIN ordenes ON incidencias_ordenes.idorden = ordenes.idorden'
            . ' INNER JOIN tareas ON tareas.idtarea = ordenes.idtarea'
            . ' INNER JOIN proyectos ON proyectos.idproyecto = tareas.idproyecto';
    }

    protected function getTables(): array
    {
        return [
            'incidencias',
            'incidencias_ordenes',
            'tareas',
            'proyectos',
            'ordenes'
        ];
    }
}