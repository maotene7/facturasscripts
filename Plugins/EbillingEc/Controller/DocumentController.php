<?php


namespace FacturaScripts\Plugins\EbillingEc\Controller;

use FacturaScripts\Core\Lib\ExtendedController\PanelController;
use FacturaScripts\Dinamic\Model\OperacionEbilling;
use FacturaScripts\Plugins\EbillingEc\Lib\APIConsumer;
use FacturaScripts\Plugins\EbillingEc\Lib\VoucherManager;


class  DocumentController extends PanelController
{



    const URL_PRUEBAS_RECEPCION = "https://celcer.sri.gob.ec/comprobantes-electronicos-ws/RecepcionComprobantesOffline?wsdl";
    const URL_PRO_RECEPCION = "https://cel.sri.gob.ec/comprobantes-electronicos-ws/RecepcionComprobantesOffline?wsdl";

    public $managerVoucher;


    protected function createViews()
    {
        // TODO: Implement createViews() method.
    }

    protected function loadData($viewName, $view)
    {
        // TODO: Implement loadData() method.
    }

    public function getPageData()
    {
        $pageData = parent::getPageData();
        $pageData['showonmenu'] = false;

        return $pageData;
    }

    protected function execPreviousAction($action)
    {

        $this->setTemplate(false);
        $type = input('type', 'post', 'string');
        $iddocument = input("iddocument", "post", "int");

        $this->managerVoucher = new VoucherManager();

        switch ($action){
            case "generate":
                $this->createVoucher($iddocument,$type);
                break;
            case "sign":
                $this->signVoucher($iddocument,$type);
                break;
            case "auth" :
                $this->authDocument($iddocument,$type);
                break;
            case "print":
                $this->printVoucher($iddocument,$type);
                break;
            case "getXml":
                $this->getVoucherXml($iddocument,$type);
                break;
            case "sendEmail":
                $this->sendEmailVoucher($iddocument,$type);
                break;
        }

    }

    public function printVoucher($iddocument,$type)
    {
        $voucherManager = new VoucherManager();
        if(!$data = $voucherManager->printVoucher($iddocument,$type)){
            $params = json_encode(['success' => false,'msg' => 'Problema al obtener pdf el Documento']);
            $this->responseJSON($params,200);
            return false;
        }

        $params = json_encode(['success' => true,'pdf'=>$data['pdf'],'claveacceso'=>$data['claveacceso']]);
        $this->responseJSON($params,200);
        return true;
    }

    public function getVoucherXml($iddocument,$type)
    {

        $voucherManager = new VoucherManager();
        if(!$data = $voucherManager->getXml($iddocument,$type)){
            $params = json_encode(['success' => false,'msg' => 'Problema al obtener xml el Documento']);
            $this->responseJSON($params,200);
            return false;
        }

        $params = json_encode(['success' => true,'xml'=>$data['xml'],'claveacceso'=>$data['claveacceso']]);
        $this->responseJSON($params,200);
        return true;

    }

    public function sendEmailVoucher($iddocument,$type)
    {

        $voucherManager = new VoucherManager();
        if(!$voucherManager->sendEmailVoucher($iddocument,$type)){
            $params = json_encode(['success' => false,'msg' => 'Problema al enviar por correo el Documento']);
            $this->responseJSON($params,200);
            return false;
        }

        $params = json_encode(['success' => true,'xml'=>'','claveacceso'=>'']);
        $this->responseJSON($params,200);
        return true;

    }

    public function createVoucher($iddocument,$type)
    {

        $voucherManager = new VoucherManager();
        if(!$voucherManager->createVoucher($iddocument,$type)){
            $params = json_encode(['success' => false,'msg' => 'Problema al Generar el Documento']);
            $this->responseJSON($params,200);
            return false;
        }

        $params = json_encode(['success' => true,'msg' => 'Documento Generado Correctamente']);
        $this->responseJSON($params,200);
        return true;
    }

    public function signVoucher ($iddocument,$type){
        $voucherManager = new VoucherManager();
        if(!$voucherManager->singVoucher($iddocument,$type)){
            $params = json_encode(['success' => false,'msg' => 'Problema al firmar el Documento']);
            $this->responseJSON($params,200);
            return false;
        }

        $params = json_encode(['success' => true,'msg' => 'Documento firmado Correctamente']);
        $this->responseJSON($params,200);
        return true;
    }

    public function authDocument ($iddocument,$type){
        $voucherManager = new VoucherManager();
        if(!$voucherManager->authVoucher($iddocument,$type)){
            $params = json_encode(['success' => false,'msg' => 'Problema al autorizar el Documento']);
            $this->responseJSON($params,200);
            return false;
        }

        $params = json_encode(['success' => true,'msg' => 'Documento autorizado Correctamente']);
        $this->responseJSON($params,200);
        return true;
    }

    public function  getDocumentSri($accessKey = null){
        if(!is_null($accessKey)){
            $context['accesskey'] = $accessKey;
            $resp = $this->api->getDocumentSri($context);

            if($resp->success != true) {
                $context_resp = json_encode(['success' => $resp->success, 'msg'=>$resp->msg]);
                $this->response->setContent($context_resp);
                $this->response->setStatusCode('200');
            }

            $context_resp = json_encode(['success' => $resp->success, 'document' => $resp->document]);
            $this->response->setContent($context_resp);
            $this->response->setStatusCode('200');

        }
    }

    private function responseJSON($params,$code){
        $this->response->setContent($params);
        $this->response->setStatusCode($code);
    }


}
