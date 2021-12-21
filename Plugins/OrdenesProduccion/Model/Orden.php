<?php
/**
 * Copyright (C) ATHOS TRADER SL <info@athosonline.com>
 */
namespace FacturaScripts\Plugins\OrdenesProduccion\Model;

use FacturaScripts\Core\Model\Base;
use FacturaScripts\Plugins\Proyectos\Model\TareaProyecto;
use FacturaScripts\Plugins\Proyectos\Model\FaseTarea;
use FacturaScripts\Plugins\OrdenesProduccion\Model\Proceso;
use FacturaScripts\Core\Base\DataBase\DataBaseWhere;

/**
 * Description of Orden
 *
 * @author Daniel Fernández Giménez <daniel.fernandez@athosonline.com>
 */
class Orden extends Base\ModelOnChangeClass
{
    use Base\ModelTrait;
    
    /**
     *
     * @var serial
     */
    public $idorden;
    
    /**
     *
     * @var int
     */
    public $idproceso;
    
    /**
     *
     * @var int
     */
    public $idtarea;
    
    /**
     *
     * @var int
     */
    public $cantidadpedida;
    
    /**
     *
     * @var int
     */
    public $cantidadpendiente;
    
    /**
     *
     * @var int
     */
    public $cantidadincidencia;
    
    /**
     *
     * @var string
     */
    public $descripcion;
    
    /**
     *
     * @var date
     */
    public $fechafinalizacion;
    
    /**
     * 
     * @var int
     */
    public $estado;
    
    /**
     * 
     * @var boolean
     */
    public $cronometro;
    
    protected function setPreviousData(array $fields = array())
    {
        $more = ['cantidadpedida'];
        parent::setPreviousData(array_merge($more, $fields));
    }
    
    public static function primaryColumn()
    {
        return 'idorden';
    }
    
    public static function tableName()
    {
        return 'ordenes';
    }
    
    protected function saveInsert(array $values = [])
    {
        $Tarea = new TareaProyecto();
        $Tarea->loadFromCode($this->idtarea);
        
        $this->statusTaskProcess($Tarea);
        
        $this->cantidadpedida = $this->cantidadpedida * $Tarea->cantidad;
        $this->cantidadpendiente = $this->cantidadpedida;
        return parent::saveInsert($values);
    }
    
    private function statusTaskProcess($Tarea)
    {
        $oldFaseTarea = new FaseTarea();
        $oldFaseTarea->loadFromCode($Tarea->idfase);
        
        $faseTarea = new FaseTarea();
        $whereF = [new DataBaseWhere('tipo', 2)];
        $faseTarea->loadFromCode('', $whereF);
        
        if ($oldFaseTarea->tipo != $faseTarea->tipo) {
            $faseTarea->clear();
            $whereF = [new DataBaseWhere('predeterminado', 1)];
            $faseTarea->loadFromCode('', $whereF);
            $Tarea->idfase = $faseTarea->idfase;
            $Tarea->save();
        }
    }
    
    protected function saveUpdate(array $values = array())
    {
        $this->updateCantidad();
        return parent::saveUpdate($values);
    }
    
    private function updateCantidad()
    {
        $prevCantidad = $this->previousData['cantidadpedida'];
        $newCantidad = $this->cantidadpedida;
        
        if ($newCantidad > $prevCantidad) {
            $restoCantidad = $newCantidad - $prevCantidad;
            $this->cantidadpedida = $newCantidad;
            $this->cantidadpendiente = $this->cantidadpendiente + $restoCantidad;
        } else if ($newCantidad < $prevCantidad) {
            $restoCantidad = $prevCantidad - $newCantidad;
            $this->cantidadpedida = $newCantidad;
            $this->cantidadpendiente = $this->cantidadpendiente - $restoCantidad;
        }
        
        if ($this->cantidadpendiente == 0) {
            $this->estado = 2;
        } else if ($this->cantidadpendiente > 0 && $this->cantidadpendiente < $this->cantidadpedida) {
            $this->estado = 1;
        }
    }
    
    public function clear()
    {
        parent::clear();
        $this->cantidadpendiente = 0;
        $this->cantidadincidencia = 0;
    }
    
    public function url(string $type = 'auto', string $list = 'List')
    {
        $value = $this->idorden;
        switch ($type) {
            case 'edit':
                return is_null($value) ? 'EditOrden' : 'EditOrden?code=' . $value;

            case 'list':
                return $list.'Orden';

            case 'new':
                return 'EditOrden';
        }

        /// default
        return empty($value) ? $list : 'EditOrden?code=' . $value;
    }
    
    public function install()
    {
        new Proceso();
        return parent::install();
    }
}