<?php


namespace FacturaScripts\Plugins\EbillingEc\Model;

use FacturaScripts\Core\Model\Base;


class LogEbilling extends Base\ModelClass
{
    use Base\ModelTrait;

    /**
     * @inheritDoc
     */
    public static function primaryColumn()
    {
        return "idlog";
    }

    /**
     * @inheritDoc
     */
    public static function tableName()
    {
       return "logebilling";
    }
}