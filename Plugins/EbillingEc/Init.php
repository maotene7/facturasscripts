<?php
namespace FacturaScripts\Plugins\EbillingEc;

if(file_exists(__DIR__ . '/vendor/autoload.php')){
    require_once __DIR__ . '/vendor/autoload.php';
}

use FacturaScripts\Core\Base\InitClass;
use FacturaScripts\Core\Base\PluginManager;

class Init extends InitClass
{

    public function init()
    {
        $this->loadExtension(new Extension\Controller\EditFacturaCliente());
        $this->loadExtension(new Extension\Controller\EditSettings());
        $this->loadExtension(new Extension\Model\FacturaCliente());

        if(in_array("YContabilidad", (new PluginManager())->enabledPlugins())){

        $this->loadExtension(new Extension\Controller\EditRetencionProveedor());
        }

        if(in_array("YInventario", (new PluginManager())->enabledPlugins())) {
            $this->loadExtension(new Extension\Controller\EditNotaCreCliente());
        }

        }

    public function update()
    {
        ;
    }

}
