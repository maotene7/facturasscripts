<?php
namespace FacturaScripts\Plugins\ProduccionEc\Model;

use FacturaScripts\Core\Model\Base;

class CostCentre extends Base\ModelClass
{
    use Base\ModelTrait;

    public $codcenter;
    public $descripcion;
    public $direccion;
    public $idempresa;
    public $nombre;

    

    public static function primaryColumn() {
        return 'codcenter';
    }

    public static function tableName() {
        return 'centrocostos';
    }

 

}

