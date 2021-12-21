<?php


namespace FacturaScripts\Plugins\EbillingEc\Model;

use FacturaScripts\Core\Base\DataBase\DataBaseWhere;
use FacturaScripts\Core\Model\Base;
use FacturaScripts\Dinamic\Model\FacturaCliente;


class OperacionEbilling extends Base\ModelClass
{
    use Base\ModelTrait;


    /**
     * Accesskey genared for SRI
     *
     * @var string
     */
    public $claveacceso;


    /**
     * Type of the document
     *
     * @var string
     */
    public $tipodocumento;

    /**
     * PrimaryKey
     *
     * @var integer
     */
    public $iddocumento;

    /**
     * Date of generation the document
     *
     * @var date
     */
    public $fechageneracion;

    /**
     * Date of sign by API the document
     *
     * @var date
     */
    public $fechafirma;

    /**
     * Date of auth by API the document
     *
     * @var date
     */
    public $fechaautorizacion;



    /**
     * Environment for generated of the document
     *
     * @var integer
     */
    public $ambiente;


    /**
     * Verify if API auth the document
     *
     * @var boolean
     */
    public $verificado;

    /**
     * Verify if email was sent to customer
     *
     * @var boolean
     */
    public $enviado;



    /**
     * @inheritDoc
     */
    public static function primaryColumn()
    {
        return "idoperacion";
    }

    /**
     * @inheritDoc
     */
    public static function tableName()
    {
        return "operacionesebilling";
    }


    public function getDocument(){
        if(!is_null($this->iddocumento)){
            switch ($this->tipodocumento){
                case "factura":
                return (new FacturaCliente())->get($this->iddocumento);
                break;
            }
        }
    }



    /**
     * This method get a document from invoice type
     *
     * @return OperacionEbilling
     */
    public function getFromInvoice($id = null) {

        if(!is_null($id)){
            $where = [new DataBaseWhere('iddocumento', $id),
                      new DataBaseWhere('tipodocumento','FacturaCliente')];
            return $this->loadFromCode('',$where);
        }

        return false;
    }

    /**
     * This method get a document from retention type
     *
     * @return OperacionEbilling
     */

    public function getFromRetention($id = null){

        if(!is_null($id)){
            $where = [new DataBaseWhere('iddocumento', $id),
                new DataBaseWhere('tipodocumento','RetencionProveedor')];
            return $this->loadFromCode('',$where);
        }

        return false;
    }

    /**
     * This method get a document from NoteCredit type
     *
     * @return OperacionEbilling
     */

    public function getFromNote($id = null){

        if(!is_null($id)){
            $where = [new DataBaseWhere('iddocumento', $id),
                new DataBaseWhere('tipodocumento','NotaCreCliente')];
            return $this->loadFromCode('',$where);
        }

        return false;
    }
}