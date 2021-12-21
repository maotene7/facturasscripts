<?php
/**
 * This file is part of Produccion plugin for FacturaScripts.
 * FacturaScripts  Copyright (C) 2015-2021 Carlos Garcia Gomez <carlos@facturascripts.com>
 * Produccion      Copyright (C) 2020-2021 Jose Antonio Cuello Principal <yopli2000@gmail.com>
 *
 * This program and its files are under the terms of the license specified in the LICENSE file.
 * All Rights Reserved.
 */
namespace FacturaScripts\Plugins\Produccion\Extension\Controller;

use FacturaScripts\Core\Base\DataBase\DataBaseWhere;

/**
 * Class to list the recipe items in the Producto edit view
 *
 * @author Jose Antonio Cuello Principal <yopli2000@gmail.com>
 */
class EditProducto
{
    /**
     * Load views
     */
    public function createViews()
    {
        return function() {
            $this->addListView('ListReceta', 'Join\Recipe', 'recipes', 'fas fa-clipboard-list');
            $this->setSettings('ListReceta', 'btnNew', false);
            $this->setSettings('ListReceta', 'btnDelete', false);
        };
    }

    /**
     * Load view data procedure
     *
     * @param string                      $viewName
     * @param ExtendedController\BaseView $view
     * @return function
     */
    public function loadData()
    {
        return function($viewName, $view) {
            if ($viewName == 'ListReceta') {
                $mainViewName = $this->getMainViewName();
                $idproduct = $this->getViewModelValue($mainViewName, 'idproducto');
                $this->loadDataRecipes($view, $idproduct);
            }
        };
    }

    /**
     * Load Recipes List for Product
     *
     * @return function
     */
    public function loadDataRecipes()
    {
        return function($view, $idproduct) {
            $where = [new DataBaseWhere('variantes.idproducto', $idproduct)];
            $order = ['produccion_recetas.codreceta' => 'ASC'];
            $view->loadData('', $where, $order);
        };
    }
}