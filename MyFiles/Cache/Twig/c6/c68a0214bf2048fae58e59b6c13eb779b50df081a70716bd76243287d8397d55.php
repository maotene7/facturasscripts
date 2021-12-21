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

/* EditSettings.html.twig */
class __TwigTemplate_510bfecba87105ad6aec91a8bfffe062e3d363a55f4f3f47287bc2257f897a48 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'bodyHeaderOptions' => [$this, 'block_bodyHeaderOptions'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 20
        return "Master/PanelController.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("Master/PanelController.html.twig", "EditSettings.html.twig", 20);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 22
    public function block_bodyHeaderOptions($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 23
        echo "    ";
        $context["pageData"] = twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "getPageData", [], "method", false, false, false, 23);
        // line 24
        echo "    <div class=\"container-fluid mb-2\">
        <div class=\"row\">
            <div class=\"col-1\">
                <div class=\"btn-group bg-white\">
                    <a class=\"btn btn-sm btn-outline-secondary\" href=\"";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "url", [], "method", false, false, false, 28), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "refresh"], "method", false, false, false, 28), "html", null, true);
        echo "\">
                        <i class=\"fas fa-redo\" aria-hidden=\"true\"></i>
                    </a>
                </div>
            </div>
            <div class=\"col-11 text-right\">
                <h1 class=\"h3\">
                    ";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "title", [], "any", false, false, false, 35), "html", null, true);
        echo "
                    <i class=\"";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["pageData"] ?? null), "icon", [], "any", false, false, false, 36), "html", null, true);
        echo " fa-fw\" aria-hidden=\"true\"></i>
                </h1>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "EditSettings.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 36,  71 => 35,  59 => 28,  53 => 24,  50 => 23,  46 => 22,  35 => 20,);
    }

    public function getSourceContext()
    {
        return new Source("{#
    /**
     * This file is part of FacturaScripts
     * Copyright (C) 2017-2020 Carlos Garcia Gomez <carlos@facturascripts.com>
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
{% extends \"Master/PanelController.html.twig\" %}

{% block bodyHeaderOptions %}
    {% set pageData = fsc.getPageData() %}
    <div class=\"container-fluid mb-2\">
        <div class=\"row\">
            <div class=\"col-1\">
                <div class=\"btn-group bg-white\">
                    <a class=\"btn btn-sm btn-outline-secondary\" href=\"{{ fsc.url() }}\" title=\"{{ i18n.trans('refresh') }}\">
                        <i class=\"fas fa-redo\" aria-hidden=\"true\"></i>
                    </a>
                </div>
            </div>
            <div class=\"col-11 text-right\">
                <h1 class=\"h3\">
                    {{ fsc.title }}
                    <i class=\"{{ pageData.icon }} fa-fw\" aria-hidden=\"true\"></i>
                </h1>
            </div>
        </div>
    </div>
{% endblock %}
", "EditSettings.html.twig", "C:\\xampp2\\htdocs\\facturascripts\\facturasscripts\\Core\\View\\EditSettings.html.twig");
    }
}
