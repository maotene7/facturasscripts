<?php
/**
 * Copyright (C) ATHOS TRADER SL <info@athosonline.com>
 */
namespace FacturaScripts\Plugins\OrdenesProduccion\Model\ModelView;

use FacturaScripts\Core\Model\Base\JoinModel;

/**
 * Description of OrdenCompletada
 *
 * @author Daniel Fernández Giménez <daniel.fernandez@athosonline.com>
 */
class OrdenCompletada extends JoinModel
{    
    
    protected function getFields(): array
    {
        return [
            'idorden' => 'ordenes.idorden',
            'cantidadprocesada' => 'ordenes_completadas.cantidadprocesada',
            'idproceso' => 'ordenes.idproceso',
            'idtarea' => 'ordenes.idtarea',
            'fechaprocesada' => 'ordenes_completadas.fechaprocesada',
            'horaprocesada' => 'ordenes_completadas.horaprocesada',
            'precio' => 'ordenes_completadas.precio',
            'nombreproyecto' => 'proyectos.nombre',
            'idproyecto' => 'proyectos.idproyecto',
            'idempresa' => 'proyectos.idempresa',
            'privado' => 'proyectos.privado',
            'nombretarea' => 'tareas.nombre',
            'nick' => 'ordenes_completadas.nick'
        ];
    }

    protected function getSQLFrom(): string
    {
        return 'ordenes_completadas'
            . ' INNER JOIN ordenes ON ordenes.idorden = ordenes_completadas.idorden'
            . ' INNER JOIN tareas ON tareas.idtarea = ordenes.idtarea'
            . ' INNER JOIN proyectos ON proyectos.idproyecto = tareas.idproyecto';
    }

    protected function getTables(): array
    {
        return [
            'proyectos',
            'tareas',
            'ordenes',
            'ordenes_completadas'
        ];
    }
}