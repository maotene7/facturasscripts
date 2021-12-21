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

/* Master/PanelControllerBottom.html.twig */
class __TwigTemplate_1de036325218f6e519ab333a7fba6d8331db23062727603e874cbea7246ea6b6 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
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
        $this->parent = $this->loadTemplate("Master/PanelController.html.twig", "Master/PanelControllerBottom.html.twig", 20);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 22
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 23
        echo "    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col\">
                ";
        // line 27
        echo "                ";
        $context["firstView"] = twig_first($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "views", [], "any", false, false, false, 27));
        // line 28
        echo "                ";
        $context["firstViewName"] = twig_get_attribute($this->env, $this->source, ($context["firstView"] ?? null), "getViewName", [], "method", false, false, false, 28);
        // line 29
        echo "                ";
        twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "setCurrentView", [0 => ($context["firstViewName"] ?? null)], "method", false, false, false, 29);
        // line 30
        echo "                ";
        echo twig_include($this->env, $context, twig_get_attribute($this->env, $this->source, ($context["firstView"] ?? null), "template", [], "any", false, false, false, 30));
        echo "
            </div>
        </div>
        ";
        // line 33
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "views", [], "any", false, false, false, 33)) > 2)) {
            // line 34
            echo "            <div class=\"row\">
                <div class=\"col\">
                    <ul class=\"nav nav-pills mb-3 d-print-none\" id=\"mainTabs\" role=\"tablist\">
                        ";
            // line 37
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "views", [], "any", false, false, false, 37), 1, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "views", [], "any", false, false, false, 37))));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["viewName"] => $context["view"]) {
                // line 38
                echo "                            ";
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["view"], "settings", [], "any", false, false, false, 38), "active", [], "any", false, false, false, 38)) {
                    // line 39
                    echo "                                <li class=\"nav-item\">
                                    ";
                    // line 40
                    $context["active"] = (((($context["viewName"] == twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "active", [], "any", false, false, false, 40)) || ((twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "active", [], "any", false, false, false, 40) == ($context["firstViewName"] ?? null)) && (twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 40) == 1)))) ? (" active") : (""));
                    // line 41
                    echo "                                    <a href=\"#";
                    echo twig_escape_filter($this->env, $context["viewName"], "html", null, true);
                    echo "\" class=\"nav-link";
                    echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
                    echo twig_escape_filter($this->env, ($context["disable"] ?? null), "html", null, true);
                    echo "\" data-toggle=\"tab\" role=\"tab\" aria-controls=\"";
                    echo twig_escape_filter($this->env, $context["viewName"], "html", null, true);
                    echo "\">
                                        <i class=\"";
                    // line 42
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["view"], "icon", [], "any", false, false, false, 42), "html", null, true);
                    echo "\" aria-hidden=\"true\"></i>
                                        <span class=\"d-none d-sm-inline-block\">&nbsp;";
                    // line 43
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["view"], "title", [], "any", false, false, false, 43), "html", null, true);
                    echo "</span>
                                        ";
                    // line 44
                    if ((twig_get_attribute($this->env, $this->source, $context["view"], "count", [], "any", false, false, false, 44) > 0)) {
                        // line 45
                        echo "                                            <span class=\"badge badge-secondary\">";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "toolBox", [], "method", false, false, false, 45), "numbers", [], "method", false, false, false, 45), "format", [0 => twig_get_attribute($this->env, $this->source, $context["view"], "count", [], "any", false, false, false, 45), 1 => 0], "method", false, false, false, 45), "html", null, true);
                        echo "</span>
                                        ";
                    }
                    // line 47
                    echo "                                    </a>
                                </li>
                            ";
                }
                // line 50
                echo "                        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['viewName'], $context['view'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 51
            echo "                    </ul>
                </div>
            </div>
        ";
        }
        // line 55
        echo "        <div class=\"tab-content\" id=\"mainTabsContent\">
            ";
        // line 56
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "views", [], "any", false, false, false, 56), 1, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "views", [], "any", false, false, false, 56))));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["viewName"] => $context["view"]) {
            // line 57
            echo "                ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["view"], "settings", [], "any", false, false, false, 57), "active", [], "any", false, false, false, 57)) {
                // line 58
                echo "                    ";
                $context["active"] = (((($context["viewName"] == twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "active", [], "any", false, false, false, 58)) || ((twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "active", [], "any", false, false, false, 58) == ($context["firstViewName"] ?? null)) && (twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 58) == 1)))) ? (" show active") : (""));
                // line 59
                echo "                    <div class=\"tab-pane";
                echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
                echo "\" id=\"";
                echo twig_escape_filter($this->env, $context["viewName"], "html", null, true);
                echo "\" role=\"tabpanel\">
                        ";
                // line 60
                twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "setCurrentView", [0 => $context["viewName"]], "method", false, false, false, 60);
                // line 61
                echo "                        ";
                echo twig_include($this->env, $context, twig_get_attribute($this->env, $this->source, $context["view"], "template", [], "any", false, false, false, 61));
                echo "
                    </div>
                ";
            }
            // line 64
            echo "            ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['viewName'], $context['view'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "Master/PanelControllerBottom.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  210 => 65,  196 => 64,  189 => 61,  187 => 60,  180 => 59,  177 => 58,  174 => 57,  157 => 56,  154 => 55,  148 => 51,  134 => 50,  129 => 47,  123 => 45,  121 => 44,  117 => 43,  113 => 42,  103 => 41,  101 => 40,  98 => 39,  95 => 38,  78 => 37,  73 => 34,  71 => 33,  64 => 30,  61 => 29,  58 => 28,  55 => 27,  50 => 23,  46 => 22,  35 => 20,);
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

{% block body %}
    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col\">
                {# -- First view -- #}
                {% set firstView = fsc.views | first %}
                {% set firstViewName = firstView.getViewName() %}
                {% do fsc.setCurrentView(firstViewName) %}
                {{ include(firstView.template) }}
            </div>
        </div>
        {% if fsc.views | length > 2 %}
            <div class=\"row\">
                <div class=\"col\">
                    <ul class=\"nav nav-pills mb-3 d-print-none\" id=\"mainTabs\" role=\"tablist\">
                        {% for viewName, view in fsc.views | slice(1, fsc.views | length) %}
                            {% if view.settings.active %}
                                <li class=\"nav-item\">
                                    {% set active = (viewName == fsc.active) or (fsc.active == firstViewName and loop.index == 1) ? ' active' : '' %}
                                    <a href=\"#{{ viewName }}\" class=\"nav-link{{ active }}{{ disable }}\" data-toggle=\"tab\" role=\"tab\" aria-controls=\"{{ viewName }}\">
                                        <i class=\"{{ view.icon }}\" aria-hidden=\"true\"></i>
                                        <span class=\"d-none d-sm-inline-block\">&nbsp;{{ view.title }}</span>
                                        {% if view.count > 0 %}
                                            <span class=\"badge badge-secondary\">{{ fsc.toolBox().numbers().format(view.count, 0) }}</span>
                                        {% endif %}
                                    </a>
                                </li>
                            {% endif %}
                        {% endfor %}
                    </ul>
                </div>
            </div>
        {% endif %}
        <div class=\"tab-content\" id=\"mainTabsContent\">
            {% for viewName, view in fsc.views | slice(1, fsc.views | length) %}
                {% if view.settings.active %}
                    {% set active = (viewName == fsc.active) or (fsc.active == firstViewName and loop.index == 1) ? ' show active' : '' %}
                    <div class=\"tab-pane{{ active }}\" id=\"{{ viewName }}\" role=\"tabpanel\">
                        {% do fsc.setCurrentView(viewName) %}
                        {{ include(view.template) }}
                    </div>
                {% endif %}
            {% endfor %}
        </div>
    </div>
{% endblock %}
", "Master/PanelControllerBottom.html.twig", "C:\\xampp2\\htdocs\\facturascripts\\facturasscripts\\Core\\View\\Master\\PanelControllerBottom.html.twig");
    }
}
