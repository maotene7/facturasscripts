<?php
/**
 * This file is part of Produccion plugin for FacturaScripts.
 * FacturaScripts  Copyright (C) 2015-2021 Carlos Garcia Gomez <carlos@facturascripts.com>
 * Produccion      Copyright (C) 2020-2021 Jose Antonio Cuello Principal <yopli2000@gmail.com>
 *
 * This program and its files are under the terms of the license specified in the LICENSE file.
 * All Rights Reserved.
 */
namespace FacturaScripts\Plugins\Produccion\Controller;

use FacturaScripts\Core\Base\DataBase\DataBaseWhere;
use FacturaScripts\Core\Lib\ExtendedController\BaseView;
use FacturaScripts\Dinamic\Lib\ExtendedController\EditController;
use FacturaScripts\Dinamic\Lib\Produccion\RecipeManager;
use FacturaScripts\Dinamic\Model\Join\VariantAutocomplete;
use FacturaScripts\Dinamic\Model\Receta;
use FacturaScripts\Dinamic\Model\Stock;

/**
 * Description of EditReceta
 *
 * @author Carlos Garcia Gomez  <carlos@facturascripts.com>
 * @author Jose Antonio Cuello  <yopli2000@gmail.com>
 */
class EditReceta extends EditController
{

    /**
     * Returns the model name
     */
    public function getModelClassName()
    {
        return 'Receta';
    }

    /**
     * Returns basic page attributes
     *
     * @return array
     */
    public function getPageData()
    {
        $pagedata = parent::getPageData();
        $pagedata['menu'] = 'warehouse';
        $pagedata['title'] = 'recipe';
        $pagedata['icon'] = 'fas fa-clipboard-list';
        return $pagedata;
    }

    /**
     *
     * @return array
     */
    protected function autocompleteAction(): array
    {
        if ($this->request->get('source', '') === 'variantes') {
            return $this->autocompleteReference();
        }

        return parent::autocompleteAction();
    }

    /**
     * Create the view to display.
     */
    protected function createViews()
    {
        parent::createViews();
        $this->setTabsPosition('bottom');
        $this->createViewLines();
        $this->createViewHistory();
    }

    /**
     * Run the actions that alter data before reading it.
     *
     * @param string $action
     *
     * @return bool
     */
    protected function execPreviousAction($action)
    {
        switch ($action) {
            case 'produce-product':
                return $this->produceProduct();

            default:
                return parent::execPreviousAction($action);
        }
    }

    /**
     * Loads the data to display.
     *
     * @param string   $viewName
     * @param BaseView $view
     */
    protected function loadData($viewName, $view)
    {
        $mvn = $this->getMainViewName();
        switch ($viewName) {
            case 'EditLineaReceta':
                $where = [new DataBaseWhere('idreceta', $this->getViewModelValue($mvn, 'idreceta'))];
                $view->loadData('', $where, ['idlinea' => 'DESC']);
                if ($view->count > 0) {
                    $this->addProduceButton($mvn);
                    $this->setStockLineas($view->cursor, $this->getViewModelValue($mvn, 'codalmacen'));
                }
                break;

            case 'ListMovimientoStock':
                $where = [
                    new DataBaseWhere('docmodel', $this->getModelClassName()),
                    new DataBaseWhere('referencia', $this->getViewModelValue($mvn, 'referencia'))
                ];
                $view->loadData('', $where);
                break;

            case $mvn:
                parent::loadData($viewName, $view);
                $this->setStockData($view->model, $view->model->codalmacen2);
                $this->setMaxToProduce($view->model);
                break;
        }
    }

    /**
     *
     * @param string $mainViewName
     */
    private function addProduceButton(string $mainViewName)
    {
        $this->addButton($mainViewName, [
            'action' => 'produce-product',
            'color' => 'info',
            'confirm' => true,
            'icon' => 'fas fa-cogs',
            'label' => 'produce-product',
            'type' => 'modal'
        ]);
    }

    /**
     * Return array data for Variant Autocomplete.
     *
     * @return array
     */
    private function autocompleteReference()
    {
        $data = $this->requestGet(['fieldcode', 'fieldtitle', 'source', 'strict', 'term']);
        return VariantAutocomplete::autocomplete(
            $data['fieldcode'],
            $data['fieldtitle'],
            $data['term'],
            $data['strict']
        );
    }

    /**
     * Create the Movement History view.
     *
     * @param string $viewName
     */
    private function createViewHistory(string $viewName = 'ListMovimientoStock')
    {
        $this->addListView($viewName, 'MovimientoStock', 'movements', 'fas fa-truck-loading');
        $this->views[$viewName]->addOrderBy(['cantidad'], 'quantity');
        $this->views[$viewName]->addOrderBy(['fecha', 'hora', 'id'], 'date', 2);

        /// disable column
        $this->views[$viewName]->disableColumn('document');

        /// disable buttons
        $this->setSettings($viewName, 'btnDelete', false);
        $this->setSettings($viewName, 'btnNew', false);
        $this->setSettings($viewName, 'checkBoxes', false);
    }

    /**
     * Create the Recipe Lines view.
     *
     * @param string $viewName
     */
    private function createViewLines(string $viewName = 'EditLineaReceta')
    {
        $this->addEditListView($viewName, 'LineaReceta', 'ingredients', 'fas fa-tasks');
        $this->views[$viewName]->setInLine(true);
    }

    /**
     * Produces the amount of the indicated product.
     *
     * @return bool
     */
    private function produceProduct()
    {
        $code = $this->request->get('idreceta');
        $quantity = $this->request->get('quantity');
        $maximum = $this->request->get('maximum');
        if (empty($code) || empty($quantity)) {
            return true;
        }

        if ($maximum < $quantity) {
            $this->toolBox()->i18nLog()->notice('max-produce-error', ['%quantity%' => $maximum]);
            return true;
        }

        $manager = new RecipeManager();
        if ($manager->produce($code, $quantity)) {
            $this->toolBox()->i18nLog()->notice(
                'recipe-produce-ok',
                ['%recipe%' => $this->request->get('codreceta'), '%quantity%' => $quantity]
            );
        }
        return true;
    }

    /**
     * Load the max quantity to produce into the fields of the modal form.
     *
     * @param Receta $model
     */
    private function setMaxToProduce(&$model)
    {
        $maxQuantity = 999;
        foreach ($model->getLines() as $recipeLine) {
            if ($recipeLine->nostock || $recipeLine->cantidad == 0) {
                continue;
            }

            if ($recipeLine->disponible < $recipeLine->cantidad) {
                $maxQuantity = 0;
                break;
            }

            $maxReference = $recipeLine->disponible / $recipeLine->cantidad;
            if ($maxReference < $maxQuantity) {
                $maxQuantity = $maxReference;
            }
        }
        $model->maximum = $maxQuantity;
    }

    /**
     * Loads the stock data into the fields of the model.
     *
     * @param Receta|LineaReceta $model
     * @param string $warehouse
     */
    private function setStockData(&$model, $warehouse)
    {
        $stock = new Stock();
        $where = [
            new DataBaseWhere('codalmacen', $warehouse),
            new DataBaseWhere('referencia', $model->referencia)
        ];
        if ($stock->loadFromCode('', $where)) {
            $model->stock = $stock->cantidad;
            $model->reserved = $stock->reservada;
            $model->available = $stock->disponible;
            $model->productname = $stock->getProducto()->descripcion;
        }
    }

    /**
     * Set stock data to all Recipe Lines.
     *
     * @param Array $rows
     * @param string $warehouse
     */
    private function setStockLineas($rows, $warehouse)
    {
        foreach ($rows as $model) {
            $this->setStockData($model, $warehouse);
        }
    }
}
