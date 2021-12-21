<?php
/**
 * Copyright (C) ATHOS TRADER SL <info@athosonline.com>
 */
namespace FacturaScripts\Plugins\OrdenesProduccion\Model;

use FacturaScripts\Core\Model\Base;
use FacturaScripts\Plugins\OrdenesProduccion\Model\Incidencia;

/**
 * Description of IncidenciaOrden
 *
 * @author Daniel Fernández Giménez <daniel.fernandez@athosonline.com>
 */
class IncidenciaOrden extends Base\ModelClass
{
    use Base\ModelTrait;
    
    /**
     *
     * @var serial
     */
    public $idio;
    
    /**
     *
     * @var int
     */
    public $idincidencia;
    
    /**
     *
     * @var int
     */
    public $idorden;
    
    /**
     *
     * @var int
     */
    public $cantidadincidencia;
    
    public static function primaryColumn()
    {
        return 'idio';
    }

    public static function tableName()
    {
        return 'incidencias_ordenes';
    }
    
    public function install() {
        new Incidencia();
        return parent::install();
    }
}