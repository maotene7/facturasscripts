<?php
/**
 * Copyright (C) ATHOS TRADER SL <info@athosonline.com>
 */
namespace FacturaScripts\Plugins\OrdenesProduccion;

use FacturaScripts\Core\Base\InitClass;
use FacturaScripts\Core\Base\DataBase;
use FacturaScripts\Core\Model\Role;
use FacturaScripts\Core\Model\RoleAccess;

/**
 * Composer autoload.
 */
require_once __DIR__ . '/vendor/autoload.php';

/**
 * Description of Init
 *
 * @author Daniel Fernández Giménez <daniel.fernandez@athosonline.com>
 */
class Init extends InitClass
{

    public function init()
    {
        $this->loadExtension(new Extension\Model\TareaProyecto());
        $this->loadExtension(new Extension\Controller\EditProducto());
        $this->loadExtension(new Extension\Controller\EditUser());
        $this->loadExtension(new Extension\Controller\EditTareaProyecto());
    }

    public function update()
    {
        $this->addRoleOrderWork();
        $this->addRoleIncidence();
    }
    
    private function addRoleIncidence()
    {
        $role = new Role();
        
        if(!$role->loadFromCode('incidencias')) {
            $role->codrole = 'incidencias';
            $role->descripcion = 'Incidencias';
            
            $dataBase = new DataBase();
            $dataBase->beginTransaction();
            try {
                if ($role->save()) {
                    $access = new RoleAccess();
                    
                    $listAccess = [
                        'ListIncidencia',
                        'EditIncidencia'
                    ];
                    
                    foreach ($listAccess as $list) {
                        $access->clear();
                        $access->allowdelete = 1;
                        $access->allowupdate = 1;
                        $access->codrole = $role->codrole;
                        $access->pagename = $list;
                        $access->save();
                    }
                }
                $dataBase->commit();
            } catch (\Exception $e) {
                $dataBase->rollback();
            }   
        }
    }
    
    private function addRoleOrderWork()
    {
        $role = new Role();
        
        if($role->loadFromCode('proyectos')) {
            $listAccess = [
                'InformesOrdenes',
                'ProcesarOrdenes',
                'ListProceso',
                'EditProceso',
                'ListOrden',
                'EditOrden'
            ];
            
            $dataBase = new DataBase();
            $dataBase->beginTransaction();
            try {
                $access = new RoleAccess();
                foreach ($listAccess as $list) {
                    $access->clear();
                    $access->allowdelete = 1;
                    $access->allowupdate = 1;
                    $access->codrole = $role->codrole;
                    $access->pagename = $list;
                    $access->save();
                }
                $dataBase->commit();
            } catch (\Exception $e) {
                $dataBase->rollback();
            }
        }
    }
}
