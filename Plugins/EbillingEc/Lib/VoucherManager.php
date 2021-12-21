<?php
/*
 * *
 *  * Copyright (C)  Carlos Yanez Correa <cyanez@bitmedia.technology>
 *
 */

namespace FacturaScripts\Plugins\EbillingEc\Lib;




use FacturaScripts\Core\App\AppSettings;
use FacturaScripts\Core\Base\DataBase\DataBaseWhere;
use FacturaScripts\Core\Base\NumberTools;
use FacturaScripts\Core\Base\ToolBox;
use FacturaScripts\Dinamic\Model\Impuesto;
use FacturaScripts\Dinamic\Model\RetencionProveedor;
use FacturaScripts\Dinamic\Model\SecuenciaDocumento;
use FacturaScripts\Dinamic\Model\Serie;
use Facturascripts\Dinamic\Model\FacturaCliente;
use FacturaScripts\Dinamic\Model\Empresa;
use FacturaScripts\Dinamic\Model\Cliente;
use FacturaScripts\Dinamic\Model\OperacionEbilling;
use FacturaScripts\Dinamic\Model\LogEbilling;
use FacturaScripts\Dinamic\Lib\APIConsumer;
use FacturaScripts\Dinamic\Model\RetencionRenta;
use FacturaScripts\Dinamic\Model\RetencionIva;
use FacturaScripts\Dinamic\Model\FacturaProveedor;
use FacturaScripts\Dinamic\Model\SuppliersSerie;

class VoucherManager
{
    /**
     * @var Serie
     */
    public $serie;

    /**
     * @var FacturaCliente
     * @var RetencionProveedor
     */
    public $voucher;

    /**
     * @var SecuenciaDocumento
     */
    public $sequence;

    /**
     * @var Empresa
     */
    public $company;

    /**
     * @var Cliente
     */
    public $subject;

    /**
     * @var OperacionEbilling
     */
    public $operation;



    const MODEL_NAMESPACE = '\\FacturaScripts\\Dinamic\\Model\\';

    const DOCUMENTS_TYPE_SRI = [
        'FacturaCliente' => '01', 'Liquidacion' => '03','NotaCreCliente' => '04',
        'NotaDebitoCliente'=>'05','GuiaRemision' => '06', 'RetencionProveedor' => '07'
        ];

    const ID_FISCALES = [
        'RUC'=>'04','CI'=>'05','Pasaporte' => '06',
        'CF' => '07','Placa' => '09','IDFE' => '08'
    ];


    public function singVoucher($iddoc,$type) : bool {

        if(!$this->loadDataVoucher($iddoc,$type)) return false;
        if(!$this->loadOrGetOperation()) return false;
        if(!$this->singXmlOnApiVoucher()) return false;
        return true;
    }

    public function authVoucher($iddoc,$type) {
        if(!$this->loadDataVoucher($iddoc,$type)) return false;
        if(!$this->loadOrGetOperation()) return false;
        if(!$this->authXmlOnApiVoucher()) return false;
        return true;
    }

    public function printVoucher($iddoc,$type){
        if(!$this->loadDataVoucher($iddoc,$type)) return false;
        if(!$this->loadOrGetOperation()) return false;
        return $this->printXmlOnApiVoucher();
    }

    public function getXml($iddoc,$type){
        if(!$this->loadDataVoucher($iddoc,$type)) return false;
        if(!$this->loadOrGetOperation()) return false;
        return $this->getXmlVoucher();
    }

    public function  sendEmailVoucher ($iddoc,$type){
        if(!$this->loadDataVoucher($iddoc,$type)) return false;
        if(!$this->loadOrGetOperation()) return false;
        if(!$this->sendEmail()) return false;

        return true;
    }


    private function sendEmail(){

        if(!$this->operation->exists()){
            $this->toolBox()->i18nLog()->warning('not-found-operation-for-send-email');
            return false;
        }

        $subject = $this->voucher->getSubject();
        if($subject->email == ''){
            $this->toolBox()->i18nLog()->warning('empty-email');
            return false;
        }

        $context['documents'][$this->operation->claveacceso]['accessKey'] = $this->operation->claveacceso;
        $context['documents'][$this->operation->claveacceso]['emailCustomer'] = $subject->email;
        $context['documents'][$this->operation->claveacceso]['nameCustomer'] = $subject->razonsocial;
        $context['documents'][$this->operation->claveacceso]['type'] = $this->operation->tipodocumento;


        $api = new APIConsumer();
        try {
            $resp = $api->sendEmail(json_encode($context));
        }catch (\Exception $e){
            echo "Se encontro un problema al enviar el email {$this->operation->claveacceso}  {$this->voucher->modelClassName()} documento {$this->voucher->primaryColumnValue()}";
            return false;
        }

        if($resp->success != true){
            return false;
        }


        $this->operation->enviado = true;
        $this->operation->save();

        return true;

    }

    public function createVoucher($iddoc,$type): bool {

        $voucher = [];

        if(!$this->loadDataVoucher($iddoc,$type)) return false;
        if(!$this->loadOrGetOperation()) return false;
        if(!$this->createHeader($voucher)) return false;
        if(!$this->setDataVoucher($voucher)) return false;
        if(!$this->createAditionalInfo($voucher)) return false;
        if(!$this->generateXmlOnApiVoucher($voucher)) return false;

        return true;
    }

    private function getXmlVoucher(){

        if(!$this->operation->exists()){
            $this->toolBox()->i18nLog()->warning('not-found-operation-for-getXml');
            return false;
        }

        $api = new APIConsumer();
        $context['accesskey']  = $this->operation->claveacceso;
        try {
            $resp = $api->getXml(json_encode($context));
        }catch (\Exception $e){
            echo "Se encontro un problema al obtener el xml con {$this->operation->claveacceso}  {$this->voucher->modelClassName()} documento {$this->voucher->primaryColumnValue()}";
            return false;
        }

        if($resp->success != true){
            return false;
        }

        $xml = $resp->response;


        return ['xml' => $xml, 'claveacceso' => $this->operation->claveacceso];

    }

    private function printXmlOnApiVoucher(){

        if(!$this->operation->exists()){
            $this->toolBox()->i18nLog()->warning('not-found-operation-for-sing');
            return false;
        }

        $api = new APIConsumer();
        $context['accesskey']  = $this->operation->claveacceso;
        try {
            $resp = $api->printDocument(json_encode($context));
        }catch (\Exception $e){
            echo "Se encontro un problema al generar pdf del xml con {$this->operation->claveacceso}  {$this->voucher->modelClassName()} documento {$this->voucher->primaryColumnValue()}";
            return false;
        }

        if($resp->success != true){
            return false;
        }

        $pdf = $resp->response;
        if($this->operation->pdf != $pdf){
            $this->operation->pdf = $pdf;
        }

        if(!$this->operation->save()){
            return false;
        }

        return ['pdf' => $pdf, 'claveacceso' => $this->operation->claveacceso];

    }

    private function authXmlOnApiVoucher(){

        if(!$this->operation->exists()){
            $this->toolBox()->i18nLog()->warning('not-found-operation-for-sing');
            return false;
        }

        $api = new APIConsumer();
        $context['accesskey']  = $this->operation->claveacceso;
        try {
            $resp = $api->authDocument(json_encode($context));
        }catch (\Exception $e){
            echo "Se encontro un problema al auth el xml con {$this->operation->claveacceso}  {$this->voucher->modelClassName()} documento {$this->voucher->primaryColumnValue()}";
        }

        $logEbilling = new LogEbilling();
        $logEbilling->fecha = date("Y-m-d H:i:s");
        $logEbilling->idoperacion = $this->operation->idoperacion;
        $logEbilling->proceso = "Auth";

        if($resp->success != true){
            $logEbilling->mensaje = "Error al auth el documento || {$resp->msg}";
            $logEbilling->save();
            return $resp;
        }

        $this->operation->fechaautorizacion =  date('Y-m-d H:i:s');
        if(!$this->operation->save()){
            return false;
        }

        $logEbilling->mensaje = "Exito al auth el documento";
        if(!$logEbilling->save()){
            return false;
        }

        return $resp;

    }

    private function singXmlOnApiVoucher(){

        if(!$this->operation->exists()){
            $this->toolBox()->i18nLog()->warning('not-found-operation-for-sing');
            return false;
        }

        $api = new APIConsumer();
        $context['accesskey']  = $this->operation->claveacceso;
        try {
            $resp = $api->signDocument(json_encode($context));
        }catch (\Exception $e){
            echo "Se encontro un problema al firmar el xml con {$this->voucher->modelClassName()} documento {$this->voucher->primaryColumnValue()}";
        }

        $logEbilling = new LogEbilling();
        $logEbilling->fecha = date("Y-m-d H:i:s");
        $logEbilling->idoperacion = $this->operation->idoperacion;
        $logEbilling->proceso = "Sing";

        if($resp->success != true){
            $logEbilling->mensaje = "Error al firmar el documento";
            $logEbilling->save();
            return false;
        }

        $this->operation->fechafirma =  date('Y-m-d H:i:s');
        if(!$this->operation->save()){
            return false;
        }

        $logEbilling->mensaje = "Exito al firmar el documento";
        if(!$logEbilling->save()){
            return false;
        }

        return true;

    }

    private function generateXmlOnApiVoucher(&$voucher){

        $api = new APIConsumer();
        try {
            $resp =  $api->createDocument(json_encode($voucher));
        }catch (\Exception $e){
            $msg = "Se encontro un problema al generar el xml con {$this->voucher->modelClassName()} documento {$this->voucher->primaryColumnValue()}";
        }

        $logEbilling = new LogEbilling();
        $logEbilling->fecha = date("Y-m-d H:i:s");
        $logEbilling->idoperacion = $this->operation->idoperacion;
        $logEbilling->proceso = "Gen";

        if($resp->success != true){
            $logEbilling->mensaje = $msg;
            $logEbilling->save();
            return false;
        }

        $this->operation->fechageneracion =  date('Y-m-d H:i:s');
        $this->operation->claveacceso = $this->getKeyAccess();
        if(!$this->operation->save()){
            return false;
        }

        $logEbilling->mensaje = "Generado correctamente";
        if(!$logEbilling->save()){
            return false;
        }

        return true;

    }

    private function setDataVoucher(&$voucher){
        switch ($this->voucher->modelClassName()){
            case "FacturaCliente":
                return $this->setDataVoucherInvoice($voucher);
            case "RetencionProveedor":
                return $this->setDataVoucherRetention($voucher);
            case "NotaCreCliente":
                return $this->setDataVoucherNoteCredit($voucher);
        }

    }

    private function setDataVoucherInvoice(&$voucher){

        if($voucher->anulada){
            return false;
        }


        $voucher[$this->voucher->modelClassName()]['date'] = $this->voucher->fecha;
        $voucher[$this->voucher->modelClassName()]['address_estab'] = $this->serie->address;
        $voucher[$this->voucher->modelClassName()]['require_accounting'] = (AppSettings::get("ebillingec", "require_accounting") == "true") ? "SI" : "NO";
        $voucher[$this->voucher->modelClassName()]['neto'] = $this->voucher->neto;
        $voucher[$this->voucher->modelClassName()]['total'] = $this->voucher->total;

        $voucher[$this->voucher->modelClassName()]['customer']['id'] = $this->voucher->cifnif;
        $voucher[$this->voucher->modelClassName()]['customer']['type_id'] = self::ID_FISCALES[$this->subject->tipoidfiscal];
        $voucher[$this->voucher->modelClassName()]['customer']['bussinesName'] = $this->voucher->nombrecliente;
        $voucher[$this->voucher->modelClassName()]['customer']['address'] = $this->voucher->direccion;

        $i = 0;
        $discount = 0;
        $lines = $this->voucher->getLines();

        foreach ($lines as $line){
            $voucher[$this->voucher->modelClassName()]['lines'][$i]['reference'] = $line->referencia;
            $voucher[$this->voucher->modelClassName()]['lines'][$i]['description'] = $line->descripcion;
            $voucher[$this->voucher->modelClassName()]['lines'][$i]['pvpUnit'] = self::NumberToolsGen($line->pvpunitario);
            $voucher[$this->voucher->modelClassName()]['lines'][$i]['count'] = $line->cantidad;
            $voucher[$this->voucher->modelClassName()]['lines'][$i]['codIva'] = $line->iva;
            $voucher[$this->voucher->modelClassName()]['lines'][$i]['pvptotal'] = self::NumberToolsGen($line->pvptotal);
            $voucher[$this->voucher->modelClassName()]['lines'][$i]['discount'] = 0;

            if($line->pvpsindto != $line->pvptotal){
                if($line->dtopor > 0){
                    $voucher[$this->voucher->modelClassName()]['lines'][$i]['discount'] = self::NumberToolsGen($line->pvpsindto - $line->pvptotal);
                    $discount += $voucher[$this->voucher->modelClassName()]['lines'][$i]['discount'];
                }else{
                    $voucher[$this->voucher->modelClassName()]['lines'][$i]['pvpUnit'] = \round($line->pvptotal / $line->cantidad,FS_NF0);
                }
            }

            $i++;
        }

        $voucher[$this->voucher->modelClassName()]['discount'] = $discount;

        $i = 0;
        foreach ($this->getTaxesRows($this->voucher) as $line){
            $codiva = 0;

            if($line['taxp'] == 12){
                $codiva = 2;
            }

            $voucher[$this->voucher->modelClassName()]['lines_iva'][$i]['codIva'] = $codiva;
            $voucher[$this->voucher->modelClassName()]['lines_iva'][$i]['neto'] = self::NumberToolsGen($line['taxbase']);
            $voucher[$this->voucher->modelClassName()]['lines_iva'][$i]['totalIva'] = self::NumberToolsGen($line['taxamount']);
            $voucher[$this->voucher->modelClassName()]['lines_iva'][$i]['rateIva'] = $line['taxp'];
            $i++;
        }

        $voucher[$this->voucher->modelClassName()]['payments']['method'] = 20;
        $voucher[$this->voucher->modelClassName()]['payments']['total'] = $this->voucher->total;
        $voucher[$this->voucher->modelClassName()]['payments']['term'] = 0;
        $voucher[$this->voucher->modelClassName()]['payments']['unity'] = "dias";

        return true;

    }

    private function setDataVoucherRetention(&$voucher){

        $addressSupplier = $this->subject->getDefaultAddress()->direccion;
        $voucher[$this->voucher->modelClassName()]['date'] = $this->voucher->fecha;
        $voucher[$this->voucher->modelClassName()]['address_estab'] = $this->serie->address;
        $voucher[$this->voucher->modelClassName()]['require_accounting'] = (AppSettings::get("ebillingec", "require_accounting") == "true") ? "SI" : "NO";
        $voucher[$this->voucher->modelClassName()]['supplier']['id'] = $this->subject->cifnif;
        $voucher[$this->voucher->modelClassName()]['supplier']['type_id'] = self::ID_FISCALES[$this->subject->tipoidfiscal];
        $voucher[$this->voucher->modelClassName()]['supplier']['bussinesName'] = $this->subject->razonsocial;
        $voucher[$this->voucher->modelClassName()]['supplier']['address'] = $addressSupplier;


        $i = 0;
        foreach ($this->voucher->getLines() as $line){
            if($line->type == 'RENTA'){
                $voucher[$this->voucher->modelClassName()]['lines'][$i]['code'] = 1;
                $concept = new RetencionRenta();
                if(!$concept->loadFromCode($line->idalicuota)){
                    return false;
                }
                $voucher[$this->voucher->modelClassName()]['lines'][$i]['codeRet'] = $concept->codanex;
            }elseif($line->type == 'IVA'){
                $voucher[$this->voucher->modelClassName()]['lines'][$i]['code'] = 2;
                $concept = new RetencionIva();
                if(!$concept->loadFromCode($line->idalicuota)){
                    return false;
                }
                $voucher[$this->voucher->modelClassName()]['lines'][$i]['codeRet'] = $concept->codanex;
            }

            $invoice = new FacturaProveedor();
            if(!$invoice->loadFromCode($this->voucher->idfactura)){
                ToolBox::log()->error("invoice-not-found");
                return FALSE;
            }

            $serieSupplier = new SuppliersSerie();
            if(!$serieSupplier->loadFromCode($invoice->idseriesupplier)){
                ToolBox::log()->error("serie-supplier-not-found");
                return FALSE;
            }

            $codSerieSupplier = str_replace('-', '', $serieSupplier->codserie);

            $voucher[$this->voucher->modelClassName()]['lines'][$i]['bi'] = round($line->base, FS_NF0);
            $voucher[$this->voucher->modelClassName()]['lines'][$i]['percentage'] = $line->porcentaje;
            $voucher[$this->voucher->modelClassName()]['lines'][$i]['value'] = round($line->total, FS_NF0);
            $voucher[$this->voucher->modelClassName()]['lines'][$i]['codSupport'] = '01';
            $voucher[$this->voucher->modelClassName()]['lines'][$i]['numDoc'] = "{$codSerieSupplier}{$invoice->numbersupplier}";
            $voucher[$this->voucher->modelClassName()]['lines'][$i]['date_issue'] = $invoice->fecha;
            $i++;
        }

       return true;

    }

    private function setDataVoucherNoteCredit(&$voucher){


            $invoice = new FacturaCliente();
            if(!$invoice->loadFromCode($this->voucher->idfactura)){
                $this->toolBox()->i18nLog()->error('invoice-not-found');
                return false;
            }

            $sequenceInvoice = (new SecuenciaDocumento())->all([new DataBaseWhere('tipodoc',$invoice->modelClassName()),
                new DataBaseWhere('codejercicio',$invoice->codejercicio),
                new DataBaseWhere('codserie',$invoice->codserie)])[0];

                $voucher[$this->voucher->modelClassName()]['date'] = $this->voucher->fecha;
                $voucher[$this->voucher->modelClassName()]['address_estab'] = $this->serie->address;
                $voucher[$this->voucher->modelClassName()]['customer']['type_id'] = self::ID_FISCALES[$this->subject->tipoidfiscal];
                $voucher[$this->voucher->modelClassName()]['customer']['bussinesName'] = $this->subject->razonsocial;
                $voucher[$this->voucher->modelClassName()]['customer']['id'] = $this->subject->cifnif;
                $voucher[$this->voucher->modelClassName()]['require_accounting'] = (AppSettings::get("ebillingec", "require_accounting") == "true") ? 'SI' : 'NO';
                $voucher[$this->voucher->modelClassName()]['codSupport'] = '01';
                $voucher[$this->voucher->modelClassName()]['numDoc'] = "{$this->serie->estab}-{$this->serie->terminal}-".self::getNumberSri($sequenceInvoice,$invoice);
                $voucher[$this->voucher->modelClassName()]['date_issue'] = $invoice->fecha;
                $voucher[$this->voucher->modelClassName()]['valueWhitoutTax'] = round($this->voucher->neto,FS_NF0);
                $voucher[$this->voucher->modelClassName()]['valueWhitTax'] = round($this->voucher->total,FS_NF0);
                $voucher[$this->voucher->modelClassName()]['reason'] = "-";

                $i = 0;
                foreach ($this->voucher->getLines() as $line){
                    $voucher[$this->voucher->modelClassName()]['lines'][$i]['reference'] = $line->referencia;
                    $voucher[$this->voucher->modelClassName()]['lines'][$i]['description'] = $line->descripcion;
                    $voucher[$this->voucher->modelClassName()]['lines'][$i]['count'] = $line->cantidad;
                    $voucher[$this->voucher->modelClassName()]['lines'][$i]['pvpUnit'] = round($line->punitario,FS_NF0);
                    $voucher[$this->voucher->modelClassName()]['lines'][$i]['codIva'] = $line->iva;
                    $voucher[$this->voucher->modelClassName()]['lines'][$i]['pvptotalWhitoutTax'] = round($line->punitario * $line->cantidad,FS_NF0);
                    $voucher[$this->voucher->modelClassName()]['lines'][$i]['TotalTax'] = round(($line->ptotal * $line->iva / 100),FS_NF0);
                    $voucher[$this->voucher->modelClassName()]['lines'][$i]['discount'] = '0'; // Peding ..
                    $i++;
                }

        return true;
    }

    public function loadOrGetOperation(){

        $where = [
            new DataBaseWhere('tipodocumento',$this->voucher->modelClassName()),
            new DataBaseWhere('iddocumento',$this->voucher->primaryColumnValue())
        ];

        $this->operation = new OperacionEbilling();
        $this->operation->loadFromCode('',$where);

        if(!$this->operation->exists()){
            $this->operation->iddocumento = $this->voucher->primaryColumnValue();
            $this->operation->tipodocumento = $this->voucher->modelClassName();
            $this->operation->nick = $this->voucher->nick;
            $this->operation->claveacceso = $this->getKeyAccess();
            $this->operation->fechageneracion = NULL;
            $this->operation->ambiente = AppSettings::get("ebillingec", "env");
            $this->operation->enviado = 0;
            $this->operation->verificado = 0;
            if(!$this->operation->save()){
                $this->toolBox()->i18nLog()->warning('unable-create-opertaion-ebilling');
                return false;
            }
        }

        return true;

   }

   private function createAditionalInfo(&$voucher){

       $voucher[$this->voucher->modelClassName()]['info']['address'] = $this->voucher->direccion;
       $voucher[$this->voucher->modelClassName()]['info']['email'] = ($this->voucher->getSubject()->email != '') ? $this->voucher->getSubject()->email : "-";
       $voucher[$this->voucher->modelClassName()]['info']['phone'] = ($this->voucher->getSubject()->telefono1 !=  "") ? $this->voucher->getSubject()->telefono1 : "-" ;
       $voucher[$this->voucher->modelClassName()]['info']['numagent'] = (AppSettings::get('ebillingec','numagent') != '') ? AppSettings::get('ebillingec','numagent') : NULL ;
       $voucher[$this->voucher->modelClassName()]['info']['regimen'] = (AppSettings::get('ebillingec','regimen') != '') ? AppSettings::get('ebillingec','regimen') : NULL ;

       return true;

   }

    private function createHeader(&$voucher)
    {
        $voucher['type'] = self::DOCUMENTS_TYPE_SRI[$this->voucher->modelClassName()];
        $voucher['header']['type'] = self::DOCUMENTS_TYPE_SRI[$this->voucher->modelClassName()];
        $voucher['header']['env'] = AppSettings::get("ebillingec", "env");
        $voucher['header']['bussinesName'] = $this->company->nombre;
        $voucher['header']['comercialName'] = $this->company->nombrecorto;
        $voucher['header']['ruc_company'] = $this->company->cifnif;
        $voucher['header']['estab'] = $this->serie->estab;
        $voucher['header']['terminal'] = $this->serie->terminal;
        $voucher['header']['address_company'] = $this->company->direccion;
        $voucher['header']['numero'] = self::getNumberSri($this->sequence, $this->voucher);

        if(!$this->getKeyAccess()){
            $this->toolBox()->i18nLog()->error('key-not-valid');
            return false;
        }
        $voucher['header']['accessKey'] = $this->getKeyAccess();

        return true;

    }

    public function getTaxesRows(&$model)
    {
        $subtotals = [];
        foreach ($model->getLines() as $line) {
            if (is_null($line->iva)) {
                continue;
            }

            $key = $line->codimpuesto . '_' . $line->iva;
            if (!isset($subtotals[$key])) {
                $subtotals[$key] = [
                    'tax' => $key,
                    'taxbase' => 0,
                    'taxp' => $line->iva,
                    'taxamount' => 0,
                    'taxsurcharge' => 0,
                ];

                $impuesto = new Impuesto();
                if (!empty($line->codimpuesto) && $impuesto->loadFromCode($line->codimpuesto)) {
                    $subtotals[$key]['tax'] = $impuesto->descripcion;
                }
            }

            $subtotals[$key]['taxbase'] += $line->pvptotal;
            $subtotals[$key]['taxamount'] += $line->pvptotal * $line->iva / 100;
        }

        /// round
        foreach ($subtotals as $key => $value) {
            $subtotals[$key]['taxbase'] = $value['taxbase'];
            $subtotals[$key]['taxamount'] = $value['taxamount'];
        }

        return $subtotals;
    }

   private function validateFieldsCustomer(){

        if($this->voucher->cifnif == ''){
            $this->voucher->cifnif = $this->subject->cifnif;
            if(!$this->voucher->save()){
                return false;
            }
        }

       if(!key_exists($this->subject->tipoidfiscal,self::ID_FISCALES)){
           $this->toolBox()->i18nLog()->warning('idfiscal-not-found');
           return false;
       }

       if($this->subject->tipoidfiscal == "CF"){
           $this->subject->cifnif = "9999999999999";
           $this->subject->nombrecliente = "CONSUMIDOR FINAL";
       }

       return true;


    }

    public function loadDataVoucher($iddoc,$type){

        $modelName = self::MODEL_NAMESPACE.$type;

        $this->voucher = (new $modelName())->get($iddoc);

        if(!$this->voucher->exists()){
            $this->toolBox()->i18nLog()->warning('voucher-not-found');
            return false;
        }

        $this->company = (new Empresa())->get($this->voucher->idempresa);
        if(!$this->company->exists()){
            $this->toolBox()->i18nLog()->warning('company-not-found');
            return false;
        }

        $this->subject = $this->voucher->getSubject();;
        if(!$this->subject->exists()){
            $this->toolBox()->i18nLog()->warning('subject-not-found');
            return false;
        }

        if(!$this->validateFieldsCustomer()){
            $this->toolBox()->i18nLog()->warning('subject-fields-invalid');
            return false;
        }

        $this->serie = (new Serie())->get($this->voucher->codserie);
        if(!$this->serie->exists()){
            $this->toolBox()->i18nLog()->warning('serie-not-found');
            return false;
        }

        $this->sequence = new SecuenciaDocumento();
        $where = [new DataBaseWhere('codserie',$this->serie->codserie),
            new DataBaseWhere('tipodoc',$this->voucher->modelClassName()),
            new DataBaseWhere('codejercicio',$this->voucher->codejercicio)];

        if(!$this->sequence->loadFromCode('',$where)){
            $this->toolBox()->i18nLog()->warning('sequence-not-found');
            return false;
        }


        if($this->voucher->direccion == ''){
            $this->voucher->direccion = $this->company->ciudad;
        }

        return true;
    }

    /**
     *
     * @return ToolBox
     */
    protected function toolBox()
    {
        return new ToolBox();
    }

    public static  function NumberToolsGen($number){

        if(!is_null($number)){

            $number = NumberTools::format($number);
            $number = str_replace(" ","",$number);
            return  $number;

        }

        return false;

    }

    public static function getNumberSri(&$sequence,&$document){

        preg_match("#\w{2}(\d{6}).*#",$sequence->patron,$matches);
        $number = \str_pad($document->numero,$sequence->longnumero,'0',\STR_PAD_LEFT);
        return "{$number}";

    }

    private function getKeyAccess()
    {


        $date = $this->generateDate($this->voucher->fecha);
        $typeDoc = self::DOCUMENTS_TYPE_SRI[$this->voucher->modelClassName()];
        $number = self::getNumberSri($this->sequence, $this->voucher);
        $estab = $this->serie->estab;
        $terminal = $this->serie->terminal;
        $ruc = $this->company->cifnif;
        $env = AppSettings::get("ebillingec", "env");
        $numberValidate = "123456781"; // last number is type of issue

        if(strlen($date) != 8){
            $this->toolBox()->i18nLog()->error('date-not-valid');
            return false;
        }

        if(strlen($ruc) != 13){
            $this->toolBox()->i18nLog()->error("ruc-not-valid");
            return false;
        }

        if(strlen($typeDoc) != 2){
            $this->toolBox()->i18nLog()->error('type-document-not-found');
            return false;
        }

        if(strlen($env) != 1){
            $this->toolBox()->i18nLog()->error('env-not-valid');
            return false;
        }

        if(strlen($estab) != 3 and strlen($terminal) != 3){
            $this->toolBox()->i18nLog()->error('estab-or-terminal-not-valid');
            return false;
        }

        if(strlen($number) != 9){
            $this->toolBox()->i18nLog()->error('number-not-valid');
            return false;
        }


        $key = "{$date}{$typeDoc}{$ruc}{$env}{$estab}{$terminal}{$number}{$numberValidate}";
        $code11 = $this->validateModule11($key);
        $key .= "{$code11}";
        return $key;
    }

    private function validateModule11($string)
    {

        $mode11 = 2;
        $operacion = 0;
        $modres = 0;
        for ($i = strlen($string) - 1; $i >= 0; $i--) {
            if ($mode11 == 2) {
                $operacion += ((int)$string[$i]) * 2;
                $mode11 = 3;
            } elseif ($mode11 == 3) {
                $operacion += ((int)$string[$i]) * 3;
                $mode11 = 4;
            } elseif ($mode11 == 4) {
                $operacion += ((int)$string[$i]) * 4;
                $mode11 = 5;
            } elseif ($mode11 == 5) {
                $operacion += ((int)$string[$i]) * 5;
                $mode11 = 6;
            } elseif ($mode11 == 6) {
                $operacion += ((int)$string[$i]) * 6;
                $mode11 = 7;
            } elseif ($mode11 == 7) {
                $operacion += ((int)$string[$i]) * 7;
                $mode11 = 2;
            }
        }

        $modres = $operacion % 11;
        $total = (int)(11 - $modres);

        $t = is_int($total);
        if ($total <= 9) {
            return $total;
        } else if ($total > 10) {
            return 0;
        } else {
            return 1;
        }
    }

    private function generateDate($date = null)
    {

        if(!is_null($date)){
            $date = date_create($date);

            $day = date_format($date, 'd');
            $day = (strlen($day) == 1) ? "0{$day}" : $day;

            $month = date_format($date, 'm');
            $month = (strlen($month) == 1) ? "0{$month}" : $month;

            $year = date_format($date, "Y");
        }

        return "{$day}{$month}{$year}";
    }



}