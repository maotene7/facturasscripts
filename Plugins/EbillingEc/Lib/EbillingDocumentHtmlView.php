<?php

namespace FacturaScripts\Plugins\EbillingEc\Lib;

use FacturaScripts\Core\Lib\AssetManager;
use FacturaScripts\Core\Lib\ExtendedController\HtmlView;
use FacturaScripts\Core\Model\FacturaCliente;
use FacturaScripts\Plugins\EbillingEc\Model\OperacionEbilling;

class EbillingDocumentHtmlView extends HtmlView
{

    /**
     *
     * @var integer
     */
    public $documentId;


    /**
     *
     * @var string
     */
    public $type;


    /** @var OperacionEbilling */
    public $model;



    public function __construct()
    {
        $name = cls_name(self::class);
        parent::__construct($name, 'electronic-billing', OperacionEbilling::class, $name, 'fas fa-at');

        AssetManager::add('js','/Dinamic/Assets/JS/EbillingHtmlView.js');
        AssetManager::add('js','/Dinamic/Assets/JS/EbillingEc/download.js');
        $this->template = 'EbillingHtmlView.html.twig';

    }

    public function loadData($type = '', $code = '', $where = [], $order = [], $offset = 0, $limit = FS_ITEM_LIMIT)
    {

        if(!$this->model->exists() and $code and $type != ''){
            switch ($type){
                case 'FacturaCliente':
                    $this->model->getFromInvoice($code);
                    $this->documentId = $code;
                    $this->type = 'FacturaCliente';
                    break;
                case 'RetencionProveedor':
                    $this->model->getFromRetention($code);
                    $this->documentId = $code;
                    $this->type = 'RetencionProveedor';
                    break;
                case 'NotaCreCliente':
                    $this->model->getFromNote($code);
                    $this->documentId = $code;
                    $this->type = 'NotaCreCliente';
                    break;

            }
        }


    }

}