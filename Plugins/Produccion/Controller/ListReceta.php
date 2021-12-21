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

use FacturaScripts\Dinamic\Lib\ExtendedController\ListController;

/**
 * Description of ListReceta
 *
 * @author Carlos Garcia Gomez  <carlos@facturascripts.com>
 * @author Jose Antonio Cuello  <yopli2000@gmail.com>
 */
class ListReceta extends ListController
{

    /**
     * Returns basic page attributes
     *
     * @return array
     */
    public function getPageData()
    {
        $pagedata = parent::getPageData();
        $pagedata['menu'] = 'warehouse';
        $pagedata['title'] = 'recipes';
        $pagedata['icon'] = 'fas fa-clipboard-list';
        return $pagedata;
    }

    /**
     * Load views
     */
    protected function createViews(string $viewName = 'ListReceta')
    {
        /// Views
        $this->addView($viewName, 'Join\Recipe', 'recipes', 'fas fa-clipboard-list');
        $this->addSearchFields($viewName, ['produccion_recetas.codreceta', 'produccion_recetas.descripcion', 'produccion_recetas.referencia']);

        /// Order By
        $this->addOrderBy($viewName, ['produccion_recetas.codreceta'], 'code', 1);
        $this->addOrderBy($viewName, ['produccion_recetas.descripcion'], 'description');
        $this->addOrderBy($viewName, ['produccion_recetas.referencia', 'produccion_recetas.codreceta'], 'product');
        $this->addOrderBy($viewName, ['produccion_recetas.ultimaproduccion'], 'last-production');
    }
}
