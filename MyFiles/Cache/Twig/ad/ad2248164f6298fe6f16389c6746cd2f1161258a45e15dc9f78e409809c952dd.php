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

/* Master/EditListViewInLine.html.twig */
class __TwigTemplate_58604d98624bed62a75a419b1b8e9ff4d90f8fef7d09ad0530425398be8082db extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 20
        $context["currentView"] = twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "getCurrentView", [], "method", false, false, false, 20);
        // line 21
        echo "
<script type=\"text/javascript\">
    var editListViewDeleteCancel = \"";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "cancel"], "method", false, false, false, 23), "html", null, true);
        echo "\";
    var editListViewDeleteConfirm = \"";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "confirm"], "method", false, false, false, 24), "html", null, true);
        echo "\";
    var editListViewDeleteMessage = \"";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "are-you-sure"], "method", false, false, false, 25), "html", null, true);
        echo "\";
    var editListViewDeleteTitle = \"";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "confirm-delete"], "method", false, false, false, 26), "html", null, true);
        echo "\";
</script>

<div class=\"";
        // line 29
        echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "settings", [], "any", false, false, false, 29), "card", [], "any", false, false, false, 29)) ? ("") : ("container-fluid"));
        echo "\">
    ";
        // line 31
        echo "    <div class=\"row\">
        ";
        // line 32
        $context["row"] = twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getRow", [0 => "header"], "method", false, false, false, 32);
        // line 33
        echo "        ";
        echo twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "render", [0 => twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 33), 1 => "", 2 => ($context["fsc"] ?? null)], "method", false, false, false, 33);
        echo "
    </div>

    ";
        // line 37
        echo "    <div>
        ";
        // line 38
        $context["row"] = twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getRow", [0 => "statistics"], "method", false, false, false, 38);
        // line 39
        echo "        ";
        echo twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "render", [0 => ($context["fsc"] ?? null)], "method", false, false, false, 39);
        echo "
    </div>

    ";
        // line 43
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "settings", [], "any", false, false, false, 43), "btnNew", [], "any", false, false, false, 43)) {
            // line 44
            echo "        ";
            $context["formName"] = (("form" . twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 44)) . "New");
            // line 45
            echo "        <form id=\"";
            echo twig_escape_filter($this->env, ($context["formName"] ?? null), "html", null, true);
            echo "\" method=\"post\" enctype=\"multipart/form-data\">
            <input type=\"hidden\" name=\"action\" value=\"insert\"/>
            <input type=\"hidden\" name=\"activetab\" value=\"";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 47), "html", null, true);
            echo "\"/>
            <input type=\"hidden\" name=\"multireqtoken\" value=\"";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "multiRequestProtection", [], "any", false, false, false, 48), "newToken", [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "user", [], "any", false, false, false, 48), "logkey", [], "any", false, false, false, 48)], "method", false, false, false, 48), "html", null, true);
            echo "\"/>
            <div class=\"card border-success shadow mb-2\">
                <div class=\"card-body p-2\">
                    <button class=\"btn btn-sm btn-outline-success\" type=\"button\" data-toggle=\"collapse\" data-target=\"#";
            // line 51
            echo twig_escape_filter($this->env, ($context["formName"] ?? null), "html", null, true);
            echo "Collapse\" aria-expanded=\"false\">
                        <i class=\"fas fa-plus-square fa-fw\" aria-hidden=\"true\"></i>
                        ";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "add"], "method", false, false, false, 53), "html", null, true);
            echo "
                    </button>
                    &nbsp;
                    ";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "title", [], "any", false, false, false, 56), "html", null, true);
            echo "
                </div>
                <div class=\"collapse\" id=\"";
            // line 58
            echo twig_escape_filter($this->env, ($context["formName"] ?? null), "html", null, true);
            echo "Collapse\">
                    <div class=\"card-body border-top\">
                        <div class=\"form-row align-items-end\">
                            <div class=\"col\">
                                ";
            // line 62
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getColumns", [], "method", false, false, false, 62));
            foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
                // line 63
                echo "                                    ";
                echo twig_get_attribute($this->env, $this->source, $context["group"], "edit", [0 => twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "model", [], "any", false, false, false, 63)], "method", false, false, false, 63);
                echo "
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 65
            echo "                            </div>
                            <div class=\"col-sm-2 text-right\">
                                <button class=\"btn btn-sm btn-success\" type=\"submit\">
                                    <i class=\"fas fa-save fa-fw\" aria-hidden=\"true\"></i>
                                    <span class=\"d-none d-sm-inline-block\">";
            // line 69
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "save"], "method", false, false, false, 69), "html", null, true);
            echo "</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    ";
        }
        // line 78
        echo "
    ";
        // line 80
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "cursor", [], "any", false, false, false, 80));
        foreach ($context['_seq'] as $context["counter"] => $context["model"]) {
            // line 81
            echo "        ";
            $context["formName"] = (("form" . twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 81)) . $context["counter"]);
            // line 82
            echo "        <form id=\"";
            echo twig_escape_filter($this->env, ($context["formName"] ?? null), "html", null, true);
            echo "\" method=\"post\" enctype=\"multipart/form-data\">
            <input type=\"hidden\" name=\"action\" value=\"edit\"/>
            <input type=\"hidden\" name=\"activetab\" value=\"";
            // line 84
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 84), "html", null, true);
            echo "\"/>
            <input type=\"hidden\" name=\"code\" value=\"";
            // line 85
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["model"], "primaryColumnValue", [], "method", false, false, false, 85), "html", null, true);
            echo "\"/>
            <input type=\"hidden\" name=\"multireqtoken\" value=\"";
            // line 86
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "multiRequestProtection", [], "any", false, false, false, 86), "newToken", [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "user", [], "any", false, false, false, 86), "logkey", [], "any", false, false, false, 86)], "method", false, false, false, 86), "html", null, true);
            echo "\"/>
            <div class=\"card shadow mb-2\">
                <div class=\"form-row align-items-end\">
                    <div class=\"col pt-2\">
                        ";
            // line 90
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getColumns", [], "method", false, false, false, 90));
            foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
                // line 91
                echo "                            ";
                echo twig_get_attribute($this->env, $this->source, $context["group"], "edit", [0 => $context["model"]], "method", false, false, false, 91);
                echo "
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 93
            echo "                    </div>
                    <div class=\"col-sm-2 text-right pb-2 pr-3\">
                        ";
            // line 95
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "settings", [], "any", false, false, false, 95), "btnDelete", [], "any", false, false, false, 95)) {
                // line 96
                echo "                            <button type=\"button\" class=\"btn btn-sm btn-danger\" title=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "delete"], "method", false, false, false, 96), "html", null, true);
                echo "\"
                                    onclick=\"editListViewDelete('";
                // line 97
                echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 97) . $context["counter"]), "html", null, true);
                echo "');\">
                                <i class=\"fas fa-trash-alt fa-fw\" aria-hidden=\"true\"></i>
                            </button>
                        ";
            }
            // line 101
            echo "                        ";
            // line 102
            echo "                        ";
            $context["row"] = twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getRow", [0 => "actions"], "method", false, false, false, 102);
            // line 103
            echo "                        ";
            echo twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "render", [0 => false, 1 => (twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 103) . $context["counter"])], "method", false, false, false, 103);
            echo "
                        ";
            // line 104
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "settings", [], "any", false, false, false, 104), "btnUndo", [], "any", false, false, false, 104)) {
                // line 105
                echo "                            <button class=\"btn btn-sm btn-secondary\" type=\"reset\" title=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "undo"], "method", false, false, false, 105), "html", null, true);
                echo "\">
                                <i class=\"fas fa-undo fa-fw\" aria-hidden=\"true\"></i>
                            </button>
                        ";
            }
            // line 109
            echo "                        ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "settings", [], "any", false, false, false, 109), "btnSave", [], "any", false, false, false, 109)) {
                // line 110
                echo "                            <button class=\"btn btn-sm btn-primary\" type=\"submit\" title=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "save"], "method", false, false, false, 110), "html", null, true);
                echo "\">
                                <i class=\"fas fa-save fa-fw\" aria-hidden=\"true\"></i>
                            </button>
                        ";
            }
            // line 114
            echo "                    </div>
                </div>
            </div>
        </form>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['counter'], $context['model'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 119
        echo "
    ";
        // line 121
        echo "    ";
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getPagination", [], "method", false, false, false, 121)) > 0)) {
            // line 122
            echo "        ";
            $context["formName"] = (("form" . twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 122)) . "Offset");
            // line 123
            echo "        <form id=\"";
            echo twig_escape_filter($this->env, ($context["formName"] ?? null), "html", null, true);
            echo "\" method=\"post\">
            <input type=\"hidden\" name=\"activetab\" value=\"";
            // line 124
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 124), "html", null, true);
            echo "\"/>
            <input type=\"hidden\" name=\"offset\" value=\"";
            // line 125
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "offset", [], "any", false, false, false, 125), "html", null, true);
            echo "\"/>
            <div class=\"text-center pt-3\">
                <div class=\"btn-group bg-white\">
                    ";
            // line 128
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getPagination", [], "method", false, false, false, 128));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 129
                echo "                        ";
                $context["btnClass"] = ((twig_get_attribute($this->env, $this->source, $context["page"], "active", [], "any", false, false, false, 129)) ? ("btn btn-outline-dark active") : ("btn btn-outline-dark"));
                // line 130
                echo "                        <button type=\"button\" class=\"";
                echo twig_escape_filter($this->env, ($context["btnClass"] ?? null), "html", null, true);
                echo "\" onclick=\"editListViewSetOffset('";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 130), "html", null, true);
                echo "', '";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["page"], "offset", [], "any", false, false, false, 130), "html", null, true);
                echo "');\">
                            ";
                // line 131
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["page"], "num", [], "any", false, false, false, 131), "html", null, true);
                echo "
                        </button>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 134
            echo "                </div>
            </div>
        </form>
    ";
        }
        // line 138
        echo "
    ";
        // line 140
        echo "    <div class=\"row\">
        ";
        // line 141
        $context["row"] = twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getRow", [0 => "footer"], "method", false, false, false, 141);
        // line 142
        echo "        ";
        echo twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "render", [0 => twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 142), 1 => "", 2 => ($context["fsc"] ?? null)], "method", false, false, false, 142);
        echo "
    </div>
</div>

";
        // line 147
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getModals", [], "method", false, false, false, 147));
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 148
            echo "    ";
            echo twig_get_attribute($this->env, $this->source, $context["group"], "modal", [0 => twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "model", [], "any", false, false, false, 148), 1 => twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 148)], "method", false, false, false, 148);
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "Master/EditListViewInLine.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  344 => 148,  340 => 147,  332 => 142,  330 => 141,  327 => 140,  324 => 138,  318 => 134,  309 => 131,  300 => 130,  297 => 129,  293 => 128,  287 => 125,  283 => 124,  278 => 123,  275 => 122,  272 => 121,  269 => 119,  259 => 114,  251 => 110,  248 => 109,  240 => 105,  238 => 104,  233 => 103,  230 => 102,  228 => 101,  221 => 97,  216 => 96,  214 => 95,  210 => 93,  201 => 91,  197 => 90,  190 => 86,  186 => 85,  182 => 84,  176 => 82,  173 => 81,  168 => 80,  165 => 78,  153 => 69,  147 => 65,  138 => 63,  134 => 62,  127 => 58,  122 => 56,  116 => 53,  111 => 51,  105 => 48,  101 => 47,  95 => 45,  92 => 44,  89 => 43,  82 => 39,  80 => 38,  77 => 37,  70 => 33,  68 => 32,  65 => 31,  61 => 29,  55 => 26,  51 => 25,  47 => 24,  43 => 23,  39 => 21,  37 => 20,);
    }

    public function getSourceContext()
    {
        return new Source("{#
    /**
     * This file is part of FacturaScripts
     * Copyright (C) 2017-2021 Carlos Garcia Gomez <carlos@facturascripts.com>
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
{% set currentView = fsc.getCurrentView() %}

<script type=\"text/javascript\">
    var editListViewDeleteCancel = \"{{ i18n.trans('cancel') }}\";
    var editListViewDeleteConfirm = \"{{ i18n.trans('confirm') }}\";
    var editListViewDeleteMessage = \"{{ i18n.trans('are-you-sure') }}\";
    var editListViewDeleteTitle = \"{{ i18n.trans('confirm-delete') }}\";
</script>

<div class=\"{{ currentView.settings.card ? '' : 'container-fluid' }}\">
    {# -- Row header -- #}
    <div class=\"row\">
        {% set row = currentView.getRow('header') %}
        {{ row.render(currentView.getViewName(), '', fsc) | raw }}
    </div>

    {# -- Row statistics -- #}
    <div>
        {% set row = currentView.getRow('statistics') %}
        {{ row.render(fsc) | raw }}
    </div>

    {# -- New form -- #}
    {% if currentView.settings.btnNew %}
        {% set formName = 'form' ~ currentView.getViewName() ~ 'New' %}
        <form id=\"{{ formName }}\" method=\"post\" enctype=\"multipart/form-data\">
            <input type=\"hidden\" name=\"action\" value=\"insert\"/>
            <input type=\"hidden\" name=\"activetab\" value=\"{{ currentView.getViewName() }}\"/>
            <input type=\"hidden\" name=\"multireqtoken\" value=\"{{ fsc.multiRequestProtection.newToken(fsc.user.logkey) }}\"/>
            <div class=\"card border-success shadow mb-2\">
                <div class=\"card-body p-2\">
                    <button class=\"btn btn-sm btn-outline-success\" type=\"button\" data-toggle=\"collapse\" data-target=\"#{{ formName }}Collapse\" aria-expanded=\"false\">
                        <i class=\"fas fa-plus-square fa-fw\" aria-hidden=\"true\"></i>
                        {{ i18n.trans('add') }}
                    </button>
                    &nbsp;
                    {{ currentView.title }}
                </div>
                <div class=\"collapse\" id=\"{{ formName }}Collapse\">
                    <div class=\"card-body border-top\">
                        <div class=\"form-row align-items-end\">
                            <div class=\"col\">
                                {% for group in currentView.getColumns() %}
                                    {{ group.edit(currentView.model) | raw }}
                                {% endfor %}
                            </div>
                            <div class=\"col-sm-2 text-right\">
                                <button class=\"btn btn-sm btn-success\" type=\"submit\">
                                    <i class=\"fas fa-save fa-fw\" aria-hidden=\"true\"></i>
                                    <span class=\"d-none d-sm-inline-block\">{{ i18n.trans('save') }}</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    {% endif %}

    {# -- Forms -- #}
    {% for counter, model in currentView.cursor %}
        {% set formName = 'form' ~ currentView.getViewName() ~ counter %}
        <form id=\"{{ formName }}\" method=\"post\" enctype=\"multipart/form-data\">
            <input type=\"hidden\" name=\"action\" value=\"edit\"/>
            <input type=\"hidden\" name=\"activetab\" value=\"{{ currentView.getViewName() }}\"/>
            <input type=\"hidden\" name=\"code\" value=\"{{ model.primaryColumnValue() }}\"/>
            <input type=\"hidden\" name=\"multireqtoken\" value=\"{{ fsc.multiRequestProtection.newToken(fsc.user.logkey) }}\"/>
            <div class=\"card shadow mb-2\">
                <div class=\"form-row align-items-end\">
                    <div class=\"col pt-2\">
                        {% for group in currentView.getColumns() %}
                            {{ group.edit(model) | raw }}
                        {% endfor %}
                    </div>
                    <div class=\"col-sm-2 text-right pb-2 pr-3\">
                        {% if currentView.settings.btnDelete %}
                            <button type=\"button\" class=\"btn btn-sm btn-danger\" title=\"{{ i18n.trans('delete') }}\"
                                    onclick=\"editListViewDelete('{{ currentView.getViewName() ~ counter }}');\">
                                <i class=\"fas fa-trash-alt fa-fw\" aria-hidden=\"true\"></i>
                            </button>
                        {% endif %}
                        {# -- Row actions -- #}
                        {% set row = currentView.getRow('actions') %}
                        {{ row.render(false, currentView.getViewName() ~ counter) | raw }}
                        {% if currentView.settings.btnUndo %}
                            <button class=\"btn btn-sm btn-secondary\" type=\"reset\" title=\"{{ i18n.trans('undo') }}\">
                                <i class=\"fas fa-undo fa-fw\" aria-hidden=\"true\"></i>
                            </button>
                        {% endif %}
                        {% if currentView.settings.btnSave %}
                            <button class=\"btn btn-sm btn-primary\" type=\"submit\" title=\"{{ i18n.trans('save') }}\">
                                <i class=\"fas fa-save fa-fw\" aria-hidden=\"true\"></i>
                            </button>
                        {% endif %}
                    </div>
                </div>
            </div>
        </form>
    {% endfor %}

    {# -- Pagination -- #}
    {% if currentView.getPagination() | length > 0 %}
        {% set formName = 'form' ~ currentView.getViewName() ~ 'Offset' %}
        <form id=\"{{ formName }}\" method=\"post\">
            <input type=\"hidden\" name=\"activetab\" value=\"{{ currentView.getViewName() }}\"/>
            <input type=\"hidden\" name=\"offset\" value=\"{{ currentView.offset }}\"/>
            <div class=\"text-center pt-3\">
                <div class=\"btn-group bg-white\">
                    {% for page in currentView.getPagination() %}
                        {% set btnClass = page.active ? 'btn btn-outline-dark active' : 'btn btn-outline-dark' %}
                        <button type=\"button\" class=\"{{ btnClass }}\" onclick=\"editListViewSetOffset('{{ currentView.getViewName() }}', '{{ page.offset }}');\">
                            {{ page.num }}
                        </button>
                    {% endfor %}
                </div>
            </div>
        </form>
    {% endif %}

    {# -- Row footer -- #}
    <div class=\"row\">
        {% set row = currentView.getRow('footer') %}
        {{ row.render(currentView.getViewName(), '', fsc) | raw }}
    </div>
</div>

{# -- Modals -- #}
{% for group in currentView.getModals() %}
    {{ group.modal(currentView.model, currentView.getViewName()) | raw }}
{% endfor %}", "Master/EditListViewInLine.html.twig", "C:\\xampp2\\htdocs\\facturascripts\\facturasscripts\\Core\\View\\Master\\EditListViewInLine.html.twig");
    }
}
