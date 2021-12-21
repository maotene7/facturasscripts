<?php


namespace FacturaScripts\Plugins\EbillingEc;
use FacturaScripts\Core\Base\CronClass;
use FacturaScripts\Dinamic\Model\Empresa;
use FacturaScripts\Dinamic\Model\OperacionEbilling;
use FacturaScripts\Core\Base\DataBase\DataBaseWhere;
use FacturaScripts\Dinamic\Model\User;
use FacturaScripts\Core\App\AppSettings;
use FacturaScripts\Plugins\EbillingEc\Lib\VoucherManager;


class Cron extends  CronClass
{
    const CHECK_EBILLING_DOCUMENTS_JOB = "check-ebilling-documents";

    public $empresa;
    public $user;

    public function run()
    {
        if ($this->isTimeForJob(self::CHECK_EBILLING_DOCUMENTS_JOB, "2 seconds")){

            if(AppSettings::get('ebillingec','cron_code_nick') == '' and AppSettings::get('ebillingec','cron_code_empresa')){
                echo "El nick o el codigo de empresa estan vacios";
                return;
            }

            $since = (AppSettings::get('ebillingec','cron_date_since') != '') ? date('Y-m-d',strtotime(AppSettings::get('ebillingec','cron_date_since'))) : date("Y-m-d");
            $until = (AppSettings::get('ebillingec','cron_date_until') != '') ? date('Y-m-d',strtotime(AppSettings::get('ebillingec','cron_date_until'))) : date("Y-m-d");
            $rege = (AppSettings::get('ebillingec','cron_regen_docs'));
            $sendemail = AppSettings::get('ebillingec','cron_email_sents');


            $this->empresa = (new Empresa())->get(AppSettings::get('ebillingec','cron_code_empresa'));
            $this->user = (new User())->get(AppSettings::get('ebillingec','cron_code_nick'));


            $voucherManager = new VoucherManager();
            $operation = new OperacionEbilling();

            //Generate XML

            $whereWhitOutGenerate = [
                new DataBaseWhere('fechageneracion',null)
            ];

            $operationWhitOutGenerate = $operation->all($whereWhitOutGenerate,[],0,0);

            foreach ($operationWhitOutGenerate as $op){
                $voucherManager->createVoucher($op->iddocumento,$op->tipodocumento);
            }
            //Sing XML

            echo "Firmando documentos .. \n";

            $whereWhitOutSing = [
                new DataBaseWhere('fechafirma',null),
                new DataBaseWhere('fechageneracion',null,'is not'),
                new DataBaseWhere('fechageneracion',$since,'>'),
                new DataBaseWhere('fechageneracion',$until,'<')];


            $operationWhitOutSing = $operation->all($whereWhitOutSing,[],0,0);

            foreach ($operationWhitOutSing as $op){
                $voucherManager->singVoucher($op->iddocumento,$op->tipodocumento);
            }

            //Auth XML
            echo "Autorizando documentos .. \n";

            $whereWhitOutAuth = [
                new DataBaseWhere('fechaautorizacion',null),
                new DataBaseWhere('fechafirma',null,'is not'),
                new DataBaseWhere('fechageneracion',$since,'>'),
                new DataBaseWhere('fechageneracion',$until,'<')];

            $operationWhitOutAuth = $operation->all($whereWhitOutAuth,[],0,0);

            foreach ($operationWhitOutAuth as $op){
                $voucherManager->authVoucher($op->iddocumento,$op->tipodocumento);
            }

            //SendEmail XML
            echo "Enviado email de documentos .. \n";

            $whereWhitOutSendEmail = [
                new DataBaseWhere('fechaautorizacion',$since,'>'),
                new DataBaseWhere('fechaautorizacion',$until,'<'),
                new DataBaseWhere('enviado', 0)];

            $operationWhitOutSendEmail = $operation->all($whereWhitOutSendEmail,[],0,0);

            foreach ($operationWhitOutSendEmail as $op){
                $voucherManager->sendEmailVoucher($op->iddocumento,$op->tipodocumento);
            }

        }
    }
}