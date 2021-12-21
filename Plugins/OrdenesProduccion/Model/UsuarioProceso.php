<?php
/**
 * Copyright (C) ATHOS TRADER SL <info@athosonline.com>
 */
namespace FacturaScripts\Plugins\OrdenesProduccion\Model;

use FacturaScripts\Core\Model\Base;
use FacturaScripts\Plugins\OrdenesProduccion\Model\Proceso;

/**
 * Description of UsuarioProceso
 *
 * @author Daniel Fernández Giménez <daniel.fernandez@athosonline.com>
 */
class UsuarioProceso extends Base\ModelClass
{
    use Base\ModelTrait;
    
    /**
     *
     * @var serial
     */
    public $idup;
    
    /**
     *
     * @var int
     */
    public $idproceso;
    
    /**
     *
     * @var string
     */
    public $nick;
    
    /**
     *
     * @var double
     */
    public $precio;

    public static function primaryColumn()
    {
        return 'idup';
    }

    public static function tableName()
    {
        return 'usuarios_procesos';
    }
    
    public function install()
    {
        new Proceso();
        return parent::install();
    }
}