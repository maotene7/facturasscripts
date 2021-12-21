<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* EditAsiento.html.twig */
class __TwigTemplate_e3e7ee75f573abfab5a8291ca481d3395256c8d5a39c3059505e1e35f1498df9 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'gridcard' => [$this, 'block_gridcard'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 20
        return "Master/GridView.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 22
        $context["showBalanceGraphic"] = twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "showBalanceGraphic", [], "method", false, false, false, 22);
        // line 20
        $this->parent = $this->loadTemplate("Master/GridView.html.twig", "EditAsiento.html.twig", 20);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 24
    public function block_gridcard($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 25
        echo "    ";
        // line 26
        echo "    <div class=\"col-";
        if (($context["showBalanceGraphic"] ?? null)) {
            echo "9";
        } else {
            echo "12";
        }
        echo " mr-2\">
        <div class=\"card shadow\">
            <div class=\"card-header\">
                <span><small id=\"account-description\"></small></span>
                <span class=\"float-right\"><small><strong>";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "unbalance"], "method", false, false, false, 30), "html", null, true);
        echo ":&nbsp;<span id=\"unbalance\">0.00</span></strong></small></span>
            </div>
            <div class=\"card-body p-0\">
                <div id=\"document-lines\"></div>
            </div>
        </div>
    </div>
    ";
        // line 37
        if (($context["showBalanceGraphic"] ?? null)) {
            // line 38
            echo "    ";
            // line 39
            echo "    <script src=\"node_modules/chart.js/dist/Chart.min.js\"></script>
    <div class=\"col\">
        <div class=\"card shadow h-100\">
            <div class=\"card-header\">
                <small><strong>";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "account-balance"], "method", false, false, false, 43), "html", null, true);
            echo ":&nbsp;<span id=\"account-balance\">0.00</span></strong></small>
            </div>
            ";
            // line 46
            echo "            <div class=\"card-body p-0\">
                <canvas id=\"detail-balance\" class=\"w-100\"></canvas>
            </div>
        </div>
    </div>
    ";
        }
    }

    public function getTemplateName()
    {
        return "EditAsiento.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 46,  87 => 43,  81 => 39,  79 => 38,  77 => 37,  67 => 30,  55 => 26,  53 => 25,  49 => 24,  44 => 20,  42 => 22,  35 => 20,);
    }

    public function getSourceContext()
    {
        return new Source("{#
    /**
     * This file is part of FacturaScripts
     * Copyright (C) 2017-2019 Carlos Garcia Gomez <carlos@facturascripts.com>
     *
     * This program is free software: you can redistribute it and/or modify
     * it under the terms of the GNU Lesser General Public License as
     * published by the Free Software Foundation, either version 3 of the
     * License, or (at your option) any later version.
     *
     * This program is distributed in the hope that it will be useful,
     * but WITHOUT ANY WARRANTY; without even the implied warranty of
     * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
     * GNU Lesser General Public License for more details.
     *
     * You should have received a copy of the GNU Lesser General Public License
     * along with this program. If not, see http://www.gnu.org/licenses/.
     */
#}
{% extends \"Master/GridView.html.twig\" %}

{% set showBalanceGraphic = fsc.showBalanceGraphic() %}

{% block gridcard %}
    {# Grid data panel #}
    <div class=\"col-{% if showBalanceGraphic %}9{% else %}12{% endif %} mr-2\">
        <div class=\"card shadow\">
            <div class=\"card-header\">
                <span><small id=\"account-description\"></small></span>
                <span class=\"float-right\"><small><strong>{{ i18n.trans('unbalance') }}:&nbsp;<span id=\"unbalance\">0.00</span></strong></small></span>
            </div>
            <div class=\"card-body p-0\">
                <div id=\"document-lines\"></div>
            </div>
        </div>
    </div>
    {% if showBalanceGraphic %}
    {# Graphic panel #}
    <script src=\"node_modules/chart.js/dist/Chart.min.js\"></script>
    <div class=\"col\">
        <div class=\"card shadow h-100\">
            <div class=\"card-header\">
                <small><strong>{{ i18n.trans('account-balance') }}:&nbsp;<span id=\"account-balance\">0.00</span></strong></small>
            </div>
            {# Graphic Subaccount Balance panel #}
            <div class=\"card-body p-0\">
                <canvas id=\"detail-balance\" class=\"w-100\"></canvas>
            </div>
        </div>
    </div>
    {% endif %}
{% endblock %}
", "EditAsiento.html.twig", "C:\\xampp2\\htdocs\\facturascripts\\facturasscripts\\Core\\View\\EditAsiento.html.twig");
    }
}
