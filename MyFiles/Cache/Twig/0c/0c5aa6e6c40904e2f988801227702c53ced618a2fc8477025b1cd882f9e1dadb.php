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

/* MegaSearch.html.twig */
class __TwigTemplate_f235181e7bfe6de23f7763f3195c631023d869fa1ccbf20185d83fc5560b6199 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'css' => [$this, 'block_css'],
        ];
        $macros["_self"] = $this->macros["_self"] = $this;
    }

    protected function doGetParent(array $context)
    {
        // line 20
        return "Master/MenuTemplate.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("Master/MenuTemplate.html.twig", "MegaSearch.html.twig", 20);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 22
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 23
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "sections", [], "any", false, false, false, 23));
        foreach ($context['_seq'] as $context["_key"] => $context["section"]) {
            // line 24
            echo "        <script type=\"text/javascript\">
            \$(document).ready(function () {
                searchOnSection(\"";
            // line 26
            echo $context["section"];
            echo "\");
            });
        </script>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['section'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-sm-3\"></div>
            <div class=\"col-sm-6\">
                <form action=\"";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "url", [], "method", false, false, false, 34), "html", null, true);
        echo "\" method=\"post\" class=\"form\">
                    <div class=\"form-group\">
                        <div class=\"input-group\">
                            <input type=\"text\" name=\"query\" value=\"";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "query", [], "any", false, false, false, 37), "html", null, true);
        echo "\" class=\"form-control form-control-lg\" autocomplete=\"off\" autofocus=\"\"/>
                            <span class=\"input-group-append\">
                                <button type=\"submit\" class=\"btn btn-primary\">
                                    <i class=\"fas fa-search\" aria-hidden=\"true\"></i>
                                </button>
                            </span>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-sm-3 col-xl-2\">
                <div class=\"nav flex-column nav-pills\" id=\"v-pills-tab\" role=\"tablist\">
                    ";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "results", [], "any", false, false, false, 51));
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
        foreach ($context['_seq'] as $context["key"] => $context["result"]) {
            // line 52
            echo "                        ";
            $context["active"] = (((twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 52) == 1)) ? ("nav-link active") : ("nav-link"));
            // line 53
            echo "                        <a class=\"";
            echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
            echo "\" data-toggle=\"pill\" href=\"#v-pills-";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "\" role=\"tab\" aria-controls=\"v-pills-";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "\" aria-expanded=\"true\">
                            <span class=\"badge badge-secondary float-right\">";
            // line 54
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["result"], "results", [], "any", false, false, false, 54)), "html", null, true);
            echo "</span>
                            <i class=\"";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["result"], "icon", [], "any", false, false, false, 55), "html", null, true);
            echo " fa-fw\"></i>
                            ";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => twig_get_attribute($this->env, $this->source, $context["result"], "title", [], "any", false, false, false, 56)], "method", false, false, false, 56), "html", null, true);
            echo "
                        </a>
                    ";
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
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['result'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "                </div>
            </div>
            <div class=\"col-sm-9 col-xl-10\">
                <div class=\"tab-content\" id=\"v-pills-tabContent\">
                    ";
        // line 63
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "results", [], "any", false, false, false, 63));
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
        foreach ($context['_seq'] as $context["key"] => $context["result"]) {
            // line 64
            echo "                        ";
            $context["active"] = (((twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 64) == 1)) ? (" show active") : (""));
            // line 65
            echo "                        <div class=\"tab-pane fade";
            echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
            echo "\" id=\"v-pills-";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "\" role=\"tabpanel\" aria-labelledby=\"v-pills-";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "-tab\">
                            <div class=\"card shadow\">
                                ";
            // line 67
            echo twig_call_macro($macros["_self"], "macro_showSearchResults", [$context["result"], ($context["i18n"] ?? null)], 67, $context, $this->getSourceContext());
            echo "
                            </div>
                        </div>
                    ";
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
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['result'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo "                </div>
            </div>
        </div>
    </div>
";
    }

    // line 77
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 78
        echo "    ";
        $this->displayParentBlock("css", $context, $blocks);
        echo "
    <style>
        body {
            background-color: #FAFBFC;
        }
    </style>
";
    }

    // line 86
    public function macro_showSearchResults($__result__ = null, $__i18n__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "result" => $__result__,
            "i18n" => $__i18n__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 87
            echo "    <div class=\"table-responsive\">
        <table class=\"table table-striped table-hover\">
            <thead>
                <tr>
                    ";
            // line 91
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["result"] ?? null), "columns", [], "any", false, false, false, 91));
            foreach ($context['_seq'] as $context["key"] => $context["column"]) {
                // line 92
                echo "                        ";
                if (($context["key"] == "icon")) {
                    // line 93
                    echo "                            <th>
                            </th>
                        ";
                } else {
                    // line 96
                    echo "                            <th>
                                ";
                    // line 97
                    echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => $context["column"]], "method", false, false, false, 97)), "html", null, true);
                    echo "
                            </th>
                        ";
                }
                // line 100
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['column'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 101
            echo "                </tr>
            </thead>
            <tbody>
                ";
            // line 104
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["result"] ?? null), "results", [], "any", false, false, false, 104));
            foreach ($context['_seq'] as $context["_key"] => $context["line"]) {
                // line 105
                echo "                    ";
                $context["link"] = ((twig_get_attribute($this->env, $this->source, $context["line"], "link", [], "any", false, false, false, 105)) ? (twig_get_attribute($this->env, $this->source, $context["line"], "link", [], "any", false, false, false, 105)) : ("#"));
                // line 106
                echo "                    <tr class=\"clickableRow\" data-href=\"";
                echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
                echo "\" data-target=\"_blank\">
                        ";
                // line 107
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["result"] ?? null), "columns", [], "any", false, false, false, 107));
                foreach ($context['_seq'] as $context["key"] => $context["column"]) {
                    // line 108
                    echo "                            ";
                    if (($context["key"] == "icon")) {
                        // line 109
                        echo "                                <td class=\"text-center\">
                                    <i class=\"";
                        // line 110
                        echo twig_escape_filter($this->env, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = $context["line"]) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[$context["key"]] ?? null) : null), "html", null, true);
                        echo " fa-fw\"></i>
                                </td>
                            ";
                    } elseif ((                    // line 112
$context["key"] != "link")) {
                        // line 113
                        echo "                                <td>";
                        echo twig_escape_filter($this->env, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = $context["line"]) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[$context["key"]] ?? null) : null), "html", null, true);
                        echo "</td>
                            ";
                    }
                    // line 115
                    echo "                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['column'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 116
                echo "                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['line'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 118
            echo "            </tbody>
        </table>
    </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "MegaSearch.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  332 => 118,  325 => 116,  319 => 115,  313 => 113,  311 => 112,  306 => 110,  303 => 109,  300 => 108,  296 => 107,  291 => 106,  288 => 105,  284 => 104,  279 => 101,  273 => 100,  267 => 97,  264 => 96,  259 => 93,  256 => 92,  252 => 91,  246 => 87,  232 => 86,  220 => 78,  216 => 77,  208 => 71,  190 => 67,  180 => 65,  177 => 64,  160 => 63,  154 => 59,  137 => 56,  133 => 55,  129 => 54,  120 => 53,  117 => 52,  100 => 51,  83 => 37,  77 => 34,  71 => 30,  61 => 26,  57 => 24,  52 => 23,  48 => 22,  37 => 20,);
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
{% extends \"Master/MenuTemplate.html.twig\" %}

{% block body %}
    {% for section in fsc.sections %}
        <script type=\"text/javascript\">
            \$(document).ready(function () {
                searchOnSection(\"{{ section | raw }}\");
            });
        </script>
    {% endfor %}
    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-sm-3\"></div>
            <div class=\"col-sm-6\">
                <form action=\"{{ fsc.url() }}\" method=\"post\" class=\"form\">
                    <div class=\"form-group\">
                        <div class=\"input-group\">
                            <input type=\"text\" name=\"query\" value=\"{{ fsc.query }}\" class=\"form-control form-control-lg\" autocomplete=\"off\" autofocus=\"\"/>
                            <span class=\"input-group-append\">
                                <button type=\"submit\" class=\"btn btn-primary\">
                                    <i class=\"fas fa-search\" aria-hidden=\"true\"></i>
                                </button>
                            </span>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-sm-3 col-xl-2\">
                <div class=\"nav flex-column nav-pills\" id=\"v-pills-tab\" role=\"tablist\">
                    {% for key, result in fsc.results  %}
                        {% set active = (loop.index == 1) ? 'nav-link active' : 'nav-link' %}
                        <a class=\"{{ active }}\" data-toggle=\"pill\" href=\"#v-pills-{{ key }}\" role=\"tab\" aria-controls=\"v-pills-{{ key }}\" aria-expanded=\"true\">
                            <span class=\"badge badge-secondary float-right\">{{ result.results | length }}</span>
                            <i class=\"{{ result.icon }} fa-fw\"></i>
                            {{ i18n.trans(result.title) }}
                        </a>
                    {% endfor %}
                </div>
            </div>
            <div class=\"col-sm-9 col-xl-10\">
                <div class=\"tab-content\" id=\"v-pills-tabContent\">
                    {% for key, result in fsc.results  %}
                        {% set active = (loop.index == 1) ? ' show active' : '' %}
                        <div class=\"tab-pane fade{{ active }}\" id=\"v-pills-{{ key }}\" role=\"tabpanel\" aria-labelledby=\"v-pills-{{ key }}-tab\">
                            <div class=\"card shadow\">
                                {{ _self.showSearchResults(result, i18n) }}
                            </div>
                        </div>
                    {% endfor %}
                </div>
            </div>
        </div>
    </div>
{% endblock %}

{% block css %}
    {{ parent() }}
    <style>
        body {
            background-color: #FAFBFC;
        }
    </style>
{% endblock %}

{% macro showSearchResults(result, i18n) %}
    <div class=\"table-responsive\">
        <table class=\"table table-striped table-hover\">
            <thead>
                <tr>
                    {% for key, column in result.columns %}
                        {% if key == 'icon' %}
                            <th>
                            </th>
                        {% else %}
                            <th>
                                {{ i18n.trans(column) | capitalize }}
                            </th>
                        {% endif %}
                    {% endfor %}
                </tr>
            </thead>
            <tbody>
                {% for line in result.results %}
                    {% set link = line.link ? line.link : '#' %}
                    <tr class=\"clickableRow\" data-href=\"{{ link }}\" data-target=\"_blank\">
                        {% for key, column in result.columns %}
                            {% if key == 'icon' %}
                                <td class=\"text-center\">
                                    <i class=\"{{ line[key] }} fa-fw\"></i>
                                </td>
                            {% elseif key != 'link' %}
                                <td>{{ line[key] }}</td>
                            {% endif %}
                        {% endfor %}
                    </tr>
                {% endfor %}
            </tbody>
        </table>
    </div>
{% endmacro %}", "MegaSearch.html.twig", "C:\\xampp2\\htdocs\\facturascripts\\facturasscripts\\Core\\View\\MegaSearch.html.twig");
    }
}
