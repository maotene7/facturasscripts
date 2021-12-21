<?php
/**
 * Copyright (C) ATHOS TRADER SL <info@athosonline.com>
 */
namespace FacturaScripts\Plugins\OrdenesProduccion\Model;

use FacturaScripts\Core\Model\Base;

/**
 * Description of Incidencia
 *
 * @author Daniel Fernández Giménez <daniel.fernandez@athosonline.com>
 */
class Incidencia extends Base\ModelClass
{
    use Base\ModelTrait;
    
    /**
     *
     * @var serial
     */
    public $idincidencia;
    
    /**
     *
     * @var int
     */
    public $idtarea;
    
    /**
     *
     * @var string
     */
    public $observaciones;
    
    /**
     *
     * @var date
     */
    public $fecha;
    
    /**
     *
     * @var int
     */
    public $estado;
    
    /**
     *
     * @var string
     */
    public $nick;
    
    public static function primaryColumn()
    {
        return 'idincidencia';
    }

    public static function tableName()
    {
        return 'incidencias';
    }
}