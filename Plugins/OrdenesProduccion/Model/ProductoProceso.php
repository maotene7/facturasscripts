<?php
/**
 * Copyright (C) ATHOS TRADER SL <info@athosonline.com>
 */
namespace FacturaScripts\Plugins\OrdenesProduccion\Model;

use FacturaScripts\Core\Model\Base;
use FacturaScripts\Plugins\OrdenesProduccion\Model\Proceso;

/**
 * Description of ProductoProceso
 *
 * @author Daniel Fernández Giménez <daniel.fernandez@athosonline.com>
 */
class ProductoProceso extends Base\ModelClass
{
    use Base\ModelTrait;
    
    /**
     *
     * @var serial
     */
    public $idpp;
    
    /**
     *
     * @var int
     */
    public $idproceso;
    
    /**
     *
     * @var int
     */
    public $idproducto;
    
    /**
     *
     * @var int
     */
    public $idvariante;
    
    /**
     *
     * @var int
     */
    public $cantidad;
    
    /**
     *
     * @var string
     */
    public $descripcion;
    
    /**
     *
     * @var int
     */
    public $orden;

    public static function primaryColumn()
    {
        return 'idpp';
    }

    public static function tableName()
    {
        return 'productos_procesos';
    }
    
    public function install() {
        new Proceso();
        return parent::install();
    }
}