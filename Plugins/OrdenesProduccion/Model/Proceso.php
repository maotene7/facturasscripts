<?php
/**
 * Copyright (C) ATHOS TRADER SL <info@athosonline.com>
 */
namespace FacturaScripts\Plugins\OrdenesProduccion\Model;

use FacturaScripts\Core\Model\Base;

/**
 * Description of Proceso
 *
 * @author Daniel Fernández Giménez <daniel.fernandez@athosonline.com>
 */
class Proceso extends Base\ModelClass
{
    use Base\ModelTrait;
    
    /**
     *
     * @var serial
     */
    public $idproceso;
    
    /**
     *
     * @var string
     */
    public $nombre;
    
    /**
     *
     * @var double
     */
    public $precio;
    
    public static function primaryColumn()
    {
        return 'idproceso';
    }
    
    public function primaryDescriptionColumn()
    {
        return 'nombre';
    }

    public static function tableName()
    {
        return 'procesos';
    }
}