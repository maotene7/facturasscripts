<?php
/**
 * Copyright (C) ATHOS TRADER SL <info@athosonline.com>
 */
namespace FacturaScripts\Plugins\OrdenesProduccion\Controller;

use FacturaScripts\Core\Lib\ExtendedController;
use FacturaScripts\Plugins\OrdenesProduccion\Model\Orden;
use FacturaScripts\Plugins\OrdenesProduccion\Model\IncidenciaOrden;
use FacturaScripts\Plugins\OrdenesProduccion\Model\Incidencia;
use FacturaScripts\Core\Base\DataBase\DataBaseWhere;

/**
 * Description of ListIncidencia
 *
 * @author Daniel Fernández Giménez <daniel.fernandez@athosonline.com>
 */
class ListIncidencia extends ExtendedController\ListController
{
    /**
     * Returns basic page attributes
     *
     * @return array
     */
    public function getPageData()
    {
        $data = parent::getPageData();
        $data['menu'] = 'projects';
        $data['title'] = 'incidences';
        $data['icon'] = 'fas fa-exclamation';
        return $data;
    }
    
    protected function createViews()
    {
        $this->createViewIndidencias();
        $this->createViewIndidenciaOrdenes();
    }
    
    private function createViewIndidenciaOrdenes()
    {
        $ListIncidenciaOrden = 'ListIncidenciaOrden';
        $this->addView($ListIncidenciaOrden, 'ModelView\Incidencia', 'orders-work', 'fas fa-bars');
        $this->addOrderBy($ListIncidenciaOrden, ['idio'], 'id', 2);
        $this->setSettings($ListIncidenciaOrden, 'btnNew', false);
        $this->setSettings($ListIncidenciaOrden, 'btnDelete', false);
    }
    
    private function createViewIndidencias()
    {
        $ListIncidencia = 'ListIncidencia';
        $this->addView($ListIncidencia, 'Incidencia', 'incidences', 'fas fa-exclamation');
        $this->addOrderBy($ListIncidencia, ['fecha', 'idincidencia'], 'date', 2);
        $this->setSettings($ListIncidencia, 'btnNew', false);
        $users = $this->codeModel->all('users', 'nick', 'nick');
        $this->addFilterSelect($ListIncidencia, 'nick', 'user', 'nick', $users);
        $this->addFilterPeriod($ListIncidencia, 'fecha', 'date', 'fecha');
        $i18n = $this->toolBox()->i18n();
        $incidenciaEstados = [
            ['code' => '0', 'description' => $i18n->trans('pending')],
            ['code' => '1', 'description' => $i18n->trans('completed')]
        ];
        $this->addFilterSelect($ListIncidencia, 'estado', 'status', 'estado', $incidenciaEstados);
    }
    
    protected function execPreviousAction($action) {
        switch ($action) {
            case 'delete':
                $codes = $this->request->request->get('code');
                $this->deleteIncidencias($codes);
                break;
            
            default:
                parent::execPreviousAction($action);
                break;
        }
    }
    
    private function deleteIncidencias($codes)
    {
        $oldOrden = new Orden();
        $modelIncidenciaOrden = new IncidenciaOrden();
        $oldIncidencia = new Incidencia();
        
        $this->dataBase->beginTransaction();
        try {
            foreach ($codes as $code) {
                $oldIncidencia->clear();
                $oldIncidencia->loadFromCode($code);
                
                if ($oldIncidencia->estado == 0) {
                    $oldOrden->clear();
                    $modelIncidenciaOrden->clear();
                    
                    $where = [new DataBaseWhere('idincidencia', $code)];
                    foreach ($modelIncidenciaOrden->all($where, [], 0, $modelIncidenciaOrden->count()) as $oldIncidenciaOrden) {
                        $oldOrden->loadFromCode($oldIncidenciaOrden->idorden);
                        $oldOrden->cantidadpendiente = $oldOrden->cantidadpendiente + $oldIncidenciaOrden->cantidadincidencia;
                        $oldOrden->cantidadincidencia = $oldOrden->cantidadincidencia - $oldIncidenciaOrden->cantidadincidencia;
                        $oldOrden->estado = ($oldOrden->cantidadpendiente == $oldOrden->cantidadpedida)?0:1;
                        $oldOrden->save();
                        $oldIncidenciaOrden->delete();
                    }

                    $oldIncidencia->delete();
                }
            }
            $this->dataBase->commit();
        } catch (\Exception $e) {
            $this->dataBase->rollback();
        }
    }
}