<?php
/**
 * Copyright (C) ATHOS TRADER SL <info@athosonline.com>
 */
namespace FacturaScripts\Plugins\OrdenesProduccion\Model\ModelView;

use FacturaScripts\Core\Model\Base\JoinModel;

/**
 * Description of ProcesarOrden
 *
 * @author Daniel Fernández Giménez <daniel.fernandez@athosonline.com>
 */
class ProcesarOrden extends JoinModel
{
    
    protected function getFields(): array
    {
        return [
            'fechafinalizacion' => 'ordenes.fechafinalizacion',
            'idproceso' => 'ordenes.idproceso',
            'idorden' => 'ordenes.idorden',
            'proceso' => 'procesos.nombre',
            'proyecto' => 'proyectos.nombre',
            'descproyecto' => 'proyectos.descripcion',
            'tarea' => 'tareas.nombre',
            'desctarea' => 'tareas.descripcion',
            'cantidadpendiente' => 'ordenes.cantidadpendiente',
            'descripcion' => 'ordenes.descripcion',
            'empresa' => 'empresas.nombre',
            'idvariante' => 'tareas.idvariante',
            'estado' => 'ordenes.estado',
            'cronometro' => 'ordenes.cronometro'
        ];
    }

    protected function getSQLFrom(): string
    {
        return 'ordenes'
            . ' INNER JOIN tareas ON tareas.idtarea = ordenes.idtarea'
            . ' INNER JOIN proyectos ON proyectos.idproyecto = tareas.idproyecto'
            . ' INNER JOIN procesos ON procesos.idproceso = ordenes.idproceso'
            . ' INNER JOIN empresas ON empresas.idempresa = empresas.idempresa';
    }

    protected function getTables(): array
    {
        return [
            'empresas',
            'proyectos',
            'tareas',
            'ordenes',
            'procesos'
        ];
    }
    
	protected function getGroupFields(): string
{
    return 'ordenes.idorden, '
    . 'procesos.nombre, proyectos.nombre, proyectos.descripcion, tareas.nombre, tareas.descripcion,empresas.nombre,tareas.idvariante ' ;
}
}