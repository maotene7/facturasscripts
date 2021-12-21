<?php
/**
 * Copyright (C) ATHOS TRADER SL <info@athosonline.com>
 */
namespace FacturaScripts\Plugins\OrdenesProduccion\Model;

use FacturaScripts\Core\Model\Base;
use FacturaScripts\Plugins\OrdenesProduccion\Model\Orden;

/**
 * Description of OrdenCompletada
 *
 * @author Daniel Fernández Giménez <daniel.fernandez@athosonline.com>
 */
class OrdenCompletada extends Base\ModelClass
{
    use Base\ModelTrait;
    
    /**
     *
     * @var serial
     */
    public $idordencompletada;
    
    /**
     *
     * @var int
     */
    public $idorden;
    
    /**
     *
     * @var int
     */
    public $cantidadprocesada;
    
    /**
     *
     * @var string
     */
    public $nick;
    
    /**
     *
     * @var date
     */
    public $fechaprocesada;
    
    /**
     *
     * @var double
     */
    public $precio;

    public static function primaryColumn()
    {
        return 'idordencompletada';
    }

    public static function tableName()
    {
        return 'ordenes_completadas';
    }
    
    public function install()
    {
        new Orden();
        return parent::install();
    }
}