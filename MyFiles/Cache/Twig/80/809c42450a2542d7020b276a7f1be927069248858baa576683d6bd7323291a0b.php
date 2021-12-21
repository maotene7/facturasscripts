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

/* Master/ListView.html.twig */
class __TwigTemplate_9619fb95b426afa7a43af3085dd91b539f27bb679a1132ffac7ba599604a1b62 extends \Twig\Template
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
        $macros["_self"] = $this->macros["_self"] = $this;
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 20
        $context["currentView"] = twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "getCurrentView", [], "method", false, false, false, 20);
        // line 21
        $context["formName"] = ("form" . twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 21));
        // line 22
        echo "
<script type=\"text/javascript\">
    var listViewDeleteCancel = \"";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "cancel"], "method", false, false, false, 24), "html", null, true);
        echo "\";
    var listViewDeleteConfirm = \"";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "confirm"], "method", false, false, false, 25), "html", null, true);
        echo "\";
    var listViewDeleteMessage = \"";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "are-you-sure"], "method", false, false, false, 26), "html", null, true);
        echo "\";
    var listViewDeleteTitle = \"";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "confirm-delete"], "method", false, false, false, 27), "html", null, true);
        echo "\";
</script>

<form id=\"";
        // line 30
        echo twig_escape_filter($this->env, ($context["formName"] ?? null), "html", null, true);
        echo "\" method=\"post\">
    <input type=\"hidden\" name=\"action\"/>
    <input type=\"hidden\" name=\"activetab\" value=\"";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 32), "html", null, true);
        echo "\"/>
    <input type=\"hidden\" name=\"loadfilter\" value=\"";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "pageFilterKey", [], "any", false, false, false, 33), "html", null, true);
        echo "\"/>
    <input type=\"hidden\" name=\"multireqtoken\" value=\"";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "multiRequestProtection", [], "any", false, false, false, 34), "newToken", [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "user", [], "any", false, false, false, 34), "logkey", [], "any", false, false, false, 34)], "method", false, false, false, 34), "html", null, true);
        echo "\"/>
    <input type=\"hidden\" name=\"offset\" value=\"";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "offset", [], "any", false, false, false, 35), "html", null, true);
        echo "\"/>
    <input type=\"hidden\" name=\"order\" value=\"";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "orderKey", [], "any", false, false, false, 36), "html", null, true);
        echo "\"/>
    <div class=\"";
        // line 37
        echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "settings", [], "any", false, false, false, 37), "card", [], "any", false, false, false, 37)) ? ("card shadow") : (""));
        echo "\">
        <div class=\"";
        // line 38
        echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "settings", [], "any", false, false, false, 38), "card", [], "any", false, false, false, 38)) ? ("container-fluid pt-3") : ("container-fluid"));
        echo "\">
            <div class=\"form-row\">
                ";
        // line 41
        echo "                <div class=\"col mb-2\">
                    <div class=\"btn-group\">
                        ";
        // line 43
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "settings", [], "any", false, false, false, 43), "btnNew", [], "any", false, false, false, 43)) {
            // line 44
            echo "                            ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "settings", [], "any", false, false, false, 44), "modalInsert", [], "any", false, false, false, 44)) {
                // line 45
                echo "                                <button type=\"button\" class=\"btn btn-success\" data-toggle=\"modal\" data-target=\"#modal";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "settings", [], "any", false, false, false, 45), "modalInsert", [], "any", false, false, false, 45), "html", null, true);
                echo "\">
                                    <i class=\"fas fa-plus fa-fw\" aria-hidden=\"true\"></i>
                                </button>
                            ";
            } else {
                // line 49
                echo "                                <a href=\"";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('asset')->getCallable(), [twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "btnNewUrl", [], "method", false, false, false, 49)]), "html", null, true);
                echo "\" class=\"btn btn-success\" title=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "new"], "method", false, false, false, 49), "html", null, true);
                echo "\">
                                    <i class=\"fas fa-plus fa-fw\" aria-hidden=\"true\"></i>
                                </a>
                            ";
            }
            // line 53
            echo "                        ";
        }
        // line 54
        echo "                        ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "settings", [], "any", false, false, false, 54), "btnDelete", [], "any", false, false, false, 54)) {
            // line 55
            echo "                            <button type=\"button\" class=\"btn btn-danger\" onclick=\"listViewDelete('";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 55), "html", null, true);
            echo "');\" title=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "delete"], "method", false, false, false, 55), "html", null, true);
            echo "\">
                                <i class=\"fas fa-trash-alt fa-fw\" aria-hidden=\"true\"></i>
                            </button>
                        ";
        }
        // line 59
        echo "                    </div>
                    ";
        // line 60
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "settings", [], "any", false, false, false, 60), "btnPrint", [], "any", false, false, false, 60)) {
            // line 61
            echo "                        <div class=\"btn-group\">
                            ";
            // line 62
            echo twig_call_macro($macros["_self"], "macro_printButton", [($context["fsc"] ?? null), ($context["currentView"] ?? null), ($context["i18n"] ?? null)], 62, $context, $this->getSourceContext());
            echo "
                        </div>
                    ";
        }
        // line 65
        echo "                    ";
        // line 66
        echo "                    ";
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getRow", [0 => "actions"], "method", false, false, false, 66), "render", [0 => true, 1 => twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 66)], "method", false, false, false, 66);
        echo "
                    ";
        // line 68
        echo "                    ";
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getRow", [0 => "statistics"], "method", false, false, false, 68), "render", [0 => ($context["fsc"] ?? null)], "method", false, false, false, 68);
        echo "
                </div>
                <div class=\"col-sm mb-2\">
                    ";
        // line 72
        echo "                    ";
        echo twig_call_macro($macros["_self"], "macro_searchControl", [($context["currentView"] ?? null), ($context["i18n"] ?? null)], 72, $context, $this->getSourceContext());
        echo "
                </div>
                <div class=\"col-md text-right mb-2\">
                    ";
        // line 76
        echo "                    ";
        echo twig_call_macro($macros["_self"], "macro_filterButton", [($context["currentView"] ?? null), ($context["i18n"] ?? null)], 76, $context, $this->getSourceContext());
        echo "
                    ";
        // line 78
        echo "                    ";
        echo twig_call_macro($macros["_self"], "macro_colorsButton", [($context["currentView"] ?? null), ($context["i18n"] ?? null)], 78, $context, $this->getSourceContext());
        echo "
                    ";
        // line 80
        echo "                    ";
        echo twig_call_macro($macros["_self"], "macro_sortButton", [($context["currentView"] ?? null)], 80, $context, $this->getSourceContext());
        echo "
                </div>
            </div>
            ";
        // line 84
        echo "            ";
        $context["divFiltersStyle"] = ((twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "showFilters", [], "any", false, false, false, 84)) ? ("") : ("display: none;"));
        // line 85
        echo "            <div id=\"form";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 85), "html", null, true);
        echo "Filters\" class=\"form-row align-items-center border-bottom\" style=\"";
        echo twig_escape_filter($this->env, ($context["divFiltersStyle"] ?? null), "html", null, true);
        echo "\">
                ";
        // line 86
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "filters", [], "any", false, false, false, 86));
        foreach ($context['_seq'] as $context["filterName"] => $context["filter"]) {
            // line 87
            echo "                    ";
            echo twig_get_attribute($this->env, $this->source, $context["filter"], "render", [], "method", false, false, false, 87);
            echo "
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['filterName'], $context['filter'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 89
        echo "            </div>
            ";
        // line 91
        echo "            <div class=\"row\">
                ";
        // line 92
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getRow", [0 => "header"], "method", false, false, false, 92), "render", [0 => twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 92), 1 => "listViewSetAction", 2 => ($context["fsc"] ?? null)], "method", false, false, false, 92);
        echo "
            </div>
        </div>
        ";
        // line 96
        echo "        <div class=\"table-responsive\">
            ";
        // line 97
        $context["tableClass"] = (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "toolBox", [], "method", false, false, false, 97), "appSettings", [], "method", false, false, false, 97), "get", [0 => "default", 1 => "tablesize"], "method", false, false, false, 97) == "small")) ? ("table-sm") : (""));
        // line 98
        echo "            <table class=\"table table-hover mb-0 ";
        echo twig_escape_filter($this->env, ($context["tableClass"] ?? null), "html", null, true);
        echo "\">
                <thead>
                    <tr>
                        ";
        // line 101
        if (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "cursor", [], "any", false, false, false, 101)) > 0) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "settings", [], "any", false, false, false, 101), "checkBoxes", [], "any", false, false, false, 101))) {
            // line 102
            echo "                            <th width=\"50\">
                                <div class=\"form-check form-check-inline mb-2 mr-sm-2 mb-sm-0\">
                                    <input class=\"form-check-input listActionCB\" type=\"checkbox\" onclick=\"listViewCheckboxes('";
            // line 104
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 104), "html", null, true);
            echo "');\" />
                                </div>
                            </th>
                        ";
        }
        // line 108
        echo "                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getColumns", [], "method", false, false, false, 108));
        foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
            // line 109
            echo "                            ";
            echo twig_get_attribute($this->env, $this->source, $context["column"], "tableHeader", [], "method", false, false, false, 109);
            echo "
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['column'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 111
        echo "                    </tr>
                </thead>
                <tbody>
                    ";
        // line 114
        $context["rowStatus"] = twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getRow", [0 => "status"], "method", false, false, false, 114);
        // line 115
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "cursor", [], "any", false, false, false, 115));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["model"]) {
            // line 116
            echo "                        ";
            $context["trClass"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "settings", [], "any", false, false, false, 116), "clickable", [], "any", false, false, false, 116)) ? (("clickableRow " . twig_get_attribute($this->env, $this->source, ($context["rowStatus"] ?? null), "trClass", [0 => $context["model"]], "method", false, false, false, 116))) : (twig_get_attribute($this->env, $this->source, ($context["rowStatus"] ?? null), "trClass", [0 => $context["model"]], "method", false, false, false, 116)));
            // line 117
            echo "                        ";
            $context["trTitle"] = twig_get_attribute($this->env, $this->source, ($context["rowStatus"] ?? null), "trTitle", [0 => $context["model"]], "method", false, false, false, 117);
            // line 118
            echo "                        <tr class=\"";
            echo twig_escape_filter($this->env, ($context["trClass"] ?? null), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, ($context["trTitle"] ?? null), "html", null, true);
            echo "\" data-href=\"";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('asset')->getCallable(), [twig_get_attribute($this->env, $this->source, $context["model"], "url", [], "method", false, false, false, 118)]), "html", null, true);
            echo "\">
                            ";
            // line 119
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "settings", [], "any", false, false, false, 119), "checkBoxes", [], "any", false, false, false, 119)) {
                // line 120
                echo "                                <td class=\"cancelClickable\">
                                    <div class=\"form-check form-check-inline mb-2 mr-sm-2 mb-sm-0\">
                                        <input class=\"form-check-input listAction\" type=\"checkbox\" name=\"code[]\" value=\"";
                // line 122
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["model"], "primaryColumnValue", [], "method", false, false, false, 122), "html", null, true);
                echo "\" />
                                    </div>
                                </td>
                            ";
            }
            // line 126
            echo "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getColumns", [], "method", false, false, false, 126));
            foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
                // line 127
                echo "                                ";
                echo twig_get_attribute($this->env, $this->source, $context["column"], "tableCell", [0 => $context["model"]], "method", false, false, false, 127);
                echo "
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['column'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 129
            echo "                        </tr>
                    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 131
            echo "                        <tr class=\"table-warning\">
                            <td colspan=\"";
            // line 132
            echo twig_escape_filter($this->env, (1 + twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getColumns", [], "method", false, false, false, 132))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "no-data"], "method", false, false, false, 132), "html", null, true);
            echo "</td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['model'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 135
        echo "                </tbody>
            </table>
        </div>
        ";
        // line 139
        echo "        ";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "totalAmounts", [], "any", false, false, false, 139))) {
            // line 140
            echo "            <div class=\"table-responsive\">
                <table class=\"table table-hover mb-0\">
                    <thead>
                        <tr>
                            <th>
                            </th>
                            ";
            // line 146
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "totalAmounts", [], "any", false, false, false, 146));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 147
                echo "                                <th class=\"text-right text-capitalize\">
                                    ";
                // line 148
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 148)], "method", false, false, false, 148), "html", null, true);
                echo "
                                </th>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 151
            echo "                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class=\"text-right\">";
            // line 155
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "page-total-amount"], "method", false, false, false, 155), "html", null, true);
            echo "</td>
                            ";
            // line 156
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "totalAmounts", [], "any", false, false, false, 156));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 157
                echo "                                <td class=\"text-right\">
                                    ";
                // line 158
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "toolBox", [], "method", false, false, false, 158), "numbers", [], "method", false, false, false, 158), "format", [0 => twig_get_attribute($this->env, $this->source, $context["item"], "page", [], "any", false, false, false, 158)], "method", false, false, false, 158), "html", null, true);
                echo "
                                </td>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 161
            echo "                        </tr>
                        <tr>
                            <td class=\"text-right\">";
            // line 163
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "total-amount"], "method", false, false, false, 163), "html", null, true);
            echo "</td>
                            ";
            // line 164
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "totalAmounts", [], "any", false, false, false, 164));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 165
                echo "                                <td class=\"text-right\">
                                    ";
                // line 166
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "toolBox", [], "method", false, false, false, 166), "numbers", [], "method", false, false, false, 166), "format", [0 => twig_get_attribute($this->env, $this->source, $context["item"], "total", [], "any", false, false, false, 166)], "method", false, false, false, 166), "html", null, true);
                echo "
                                </td>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 169
            echo "                        </tr>
                    </tbody>
                </table>
            </div>
        ";
        }
        // line 174
        echo "        ";
        // line 175
        echo "        ";
        $context["pages"] = twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getPagination", [], "method", false, false, false, 175);
        // line 176
        echo "        ";
        if ((twig_length_filter($this->env, ($context["pages"] ?? null)) > 0)) {
            // line 177
            echo "            <div class=\"";
            echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "settings", [], "any", false, false, false, 177), "card", [], "any", false, false, false, 177)) ? ("card-footer text-center") : ("pt-3 text-center"));
            echo "\">
                <div class=\"btn-group bg-white\">
                    ";
            // line 179
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getPagination", [], "method", false, false, false, 179));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 180
                echo "                        ";
                $context["btnClass"] = ((twig_get_attribute($this->env, $this->source, $context["page"], "active", [], "any", false, false, false, 180)) ? ("btn btn-outline-dark active") : ("btn btn-outline-dark"));
                // line 181
                echo "                        <button type=\"button\" class=\"";
                echo twig_escape_filter($this->env, ($context["btnClass"] ?? null), "html", null, true);
                echo "\" onclick=\"listViewSetOffset('";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 181), "html", null, true);
                echo "', '";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["page"], "offset", [], "any", false, false, false, 181), "html", null, true);
                echo "');\">
                            ";
                // line 182
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["page"], "num", [], "any", false, false, false, 182), "html", null, true);
                echo "
                        </button>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 185
            echo "                </div>
            </div>
        ";
        }
        // line 188
        echo "    </div>
    <br/>
    ";
        // line 191
        echo "    <div class=\"container-fluid\">
        <div class=\"row\">
            ";
        // line 193
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getRow", [0 => "footer"], "method", false, false, false, 193), "render", [0 => twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 193), 1 => "listViewSetAction", 2 => ($context["fsc"] ?? null)], "method", false, false, false, 193);
        echo "
        </div>
    </div>
    ";
        // line 197
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "showFilters", [], "any", false, false, false, 197)) {
            // line 198
            echo "        ";
            echo twig_call_macro($macros["_self"], "macro_filterSaveModal", [($context["currentView"] ?? null), ($context["i18n"] ?? null)], 198, $context, $this->getSourceContext());
            echo "
    ";
        }
        // line 200
        echo "</form>

";
        // line 203
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getModals", [], "method", false, false, false, 203));
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 204
            echo "    ";
            echo twig_get_attribute($this->env, $this->source, $context["group"], "modal", [0 => twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "model", [], "any", false, false, false, 204), 1 => twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 204)], "method", false, false, false, 204);
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 206
        echo "
";
        // line 247
        echo "
";
        // line 283
        echo "
";
        // line 303
        echo "
";
        // line 328
        echo "
";
        // line 343
        echo "
";
    }

    // line 208
    public function macro_filterButton($__currentView__ = null, $__i18n__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "currentView" => $__currentView__,
            "i18n" => $__i18n__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 209
            echo "    ";
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "filters", [], "any", false, false, false, 209))) {
                // line 210
                echo "        ";
                $context["viewName"] = twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 210);
                // line 211
                echo "        ";
                $context["saveFilters"] = twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "pageFilters", [], "any", false, false, false, 211);
                // line 212
                echo "        <div class=\"btn-group\">
            <button type=\"button\" class=\"btn btn-light\" onclick=\"listViewShowFilters('";
                // line 213
                echo twig_escape_filter($this->env, ($context["viewName"] ?? null), "html", null, true);
                echo "');\">
                <i class=\"fas fa-filter fa-fw\" aria-hidden=\"true\"></i> ";
                // line 214
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "filters"], "method", false, false, false, 214), "html", null, true);
                echo "
            </button>
            ";
                // line 216
                if ( !twig_test_empty(($context["saveFilters"] ?? null))) {
                    // line 217
                    echo "                <button type=\"button\" class=\"btn btn-light dropdown-toggle dropdown-toggle-split\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                    <span class=\"sr-only\"></span>
                </button>
                <div class=\"dropdown-menu dropdown-menu-right\">
                    ";
                    // line 221
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["saveFilters"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["pageFilter"]) {
                        // line 222
                        echo "                        ";
                        $context["activeClass"] = (((twig_get_attribute($this->env, $this->source, $context["pageFilter"], "id", [], "any", false, false, false, 222) == twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "pageFilterKey", [], "any", false, false, false, 222))) ? (" active") : (""));
                        // line 223
                        echo "                        ";
                        $context["icon"] = ((twig_test_empty(twig_get_attribute($this->env, $this->source, $context["pageFilter"], "nick", [], "any", false, false, false, 223))) ? ("fa-users") : ("fa-user"));
                        // line 224
                        echo "                        <a class=\"dropdown-item";
                        echo twig_escape_filter($this->env, ($context["activeClass"] ?? null), "html", null, true);
                        echo "\" href=\"#\" onclick=\"listViewSetLoadFilter('";
                        echo twig_escape_filter($this->env, ($context["viewName"] ?? null), "html", null, true);
                        echo "', '";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pageFilter"], "id", [], "any", false, false, false, 224), "html", null, true);
                        echo "');\">
                            <i class=\"fas ";
                        // line 225
                        echo twig_escape_filter($this->env, ($context["icon"] ?? null), "html", null, true);
                        echo " fa-fw\" aria-hidden=\"true\"></i> ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pageFilter"], "description", [], "any", false, false, false, 225), "html", null, true);
                        echo "
                        </a>
                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pageFilter'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 228
                    echo "                </div>
            ";
                }
                // line 230
                echo "        </div>
        ";
                // line 231
                if (twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "pageFilterKey", [], "any", false, false, false, 231)) {
                    // line 232
                    echo "            <div class=\"btn-group ml-1\">
                <button type=\"button\" class=\"btn btn-warning\" onclick=\"listViewSetLoadFilter('";
                    // line 233
                    echo twig_escape_filter($this->env, ($context["viewName"] ?? null), "html", null, true);
                    echo "', '');\">
                    <i class=\"fas fa-times fa-fw\"></i>
                </button>
                <button type=\"button\" class=\"btn btn-danger\" title=\"";
                    // line 236
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "remove-filter"], "method", false, false, false, 236), "html", null, true);
                    echo "\" onclick=\"listViewSetAction('";
                    echo twig_escape_filter($this->env, ($context["viewName"] ?? null), "html", null, true);
                    echo "', 'delete-filter');\">
                    <i class=\"fas fa-trash-alt fa-fw\"></i>
                </button>
            </div>
        ";
                } elseif (twig_get_attribute($this->env, $this->source,                 // line 240
($context["currentView"] ?? null), "showFilters", [], "any", false, false, false, 240)) {
                    // line 241
                    echo "            <button type=\"button\" class=\"btn btn-info ml-1\" data-toggle=\"modal\" data-target=\"#savefilter";
                    echo twig_escape_filter($this->env, ($context["viewName"] ?? null), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "save-filter"], "method", false, false, false, 241), "html", null, true);
                    echo "\">
                <i class=\"fas fa-save fa-fw\"></i>
            </button>
        ";
                }
                // line 245
                echo "    ";
            }

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 248
    public function macro_filterSaveModal($__currentView__ = null, $__i18n__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "currentView" => $__currentView__,
            "i18n" => $__i18n__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 249
            echo "    ";
            $context["viewName"] = twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 249);
            // line 250
            echo "    <div class=\"modal\" id=\"savefilter";
            echo twig_escape_filter($this->env, ($context["viewName"] ?? null), "html", null, true);
            echo "\" tabindex=\"-1\" role=\"dialog\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\">
                        <i class=\"fas fa-filter fa-fw\"></i> ";
            // line 255
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "save-filter"], "method", false, false, false, 255), "html", null, true);
            echo "
                    </h5>
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">×</span>
                    </button>
                </div>
                <div class=\"modal-body\">
                    <div class=\"row\">
                        <div class=\"col\">
                            <div class=\"form-group\">
                                <label>";
            // line 265
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "description"], "method", false, false, false, 265), "html", null, true);
            echo "</label>
                                <input type=\"text\" name=\"filter-description\" class=\"form-control noEnterKey\" autofocus=\"\"/>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">
                        ";
            // line 273
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "cancel"], "method", false, false, false, 273), "html", null, true);
            echo "
                    </button>
                    <button type=\"button\" class=\"btn btn-primary\" onclick=\"listViewSetAction('";
            // line 275
            echo twig_escape_filter($this->env, ($context["viewName"] ?? null), "html", null, true);
            echo "', 'save-filter');\">
                        ";
            // line 276
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "accept"], "method", false, false, false, 276), "html", null, true);
            echo "
                    </button>
                </div>
            </div>
        </div>
    </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 284
    public function macro_colorsButton($__currentView__ = null, $__i18n__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "currentView" => $__currentView__,
            "i18n" => $__i18n__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 285
            echo "    ";
            $context["legend"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getRow", [0 => "status"], "method", false, false, false, 285), "legend", [], "method", false, false, false, 285);
            // line 286
            echo "    ";
            if (($context["legend"] ?? null)) {
                // line 287
                echo "        ";
                $context["viewName"] = twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 287);
                // line 288
                echo "        <div class=\"btn-group\">
            <div class=\"dropdown\">
                <button class=\"btn btn-light dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                    <i class=\"fas fa-fill-drip fa-fw\" aria-hidden=\"true\"></i>
                </button>
                <div class=\"dropdown-menu dropdown-menu-right pb-0\">
                    <h6 class=\"dropdown-header\">
                        ";
                // line 295
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "colors"], "method", false, false, false, 295), "html", null, true);
                echo "
                    </h6>
                    ";
                // line 297
                echo ($context["legend"] ?? null);
                echo "
                </div>
            </div>
        </div>
    ";
            }

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 304
    public function macro_printButton($__fsc__ = null, $__currentView__ = null, $__i18n__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "fsc" => $__fsc__,
            "currentView" => $__currentView__,
            "i18n" => $__i18n__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 305
            echo "    <div class=\"dropdown\">
        <button class=\"btn btn-light dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
            <i class=\"fas fa-print fa-fw\" aria-hidden=\"true\"></i>
        </button>
        <div class=\"dropdown-menu\">
            ";
            // line 310
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "exportManager", [], "any", false, false, false, 310), "options", [], "method", false, false, false, 310));
            foreach ($context['_seq'] as $context["key"] => $context["option"]) {
                // line 311
                echo "                <a href=\"#\" class=\"dropdown-item\" onclick=\"listViewPrintAction('";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 311), "html", null, true);
                echo "', '";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "');\">
                    <i class=\"";
                // line 312
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "icon", [], "any", false, false, false, 312), "html", null, true);
                echo " fa-fw\" aria-hidden=\"true\"></i>
                    ";
                // line 313
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => twig_get_attribute($this->env, $this->source, $context["option"], "description", [], "any", false, false, false, 313)], "method", false, false, false, 313), "html", null, true);
                echo "
                </a>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 316
            echo "            ";
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "exportManager", [], "any", false, false, false, 316), "tools", [], "any", false, false, false, 316))) {
                // line 317
                echo "                <div class=\"dropdown-divider\"></div>
                ";
                // line 318
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "exportManager", [], "any", false, false, false, 318), "tools", [], "method", false, false, false, 318));
                foreach ($context['_seq'] as $context["key"] => $context["tool"]) {
                    // line 319
                    echo "                    <a href=\"";
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('asset')->getCallable(), [twig_get_attribute($this->env, $this->source, $context["tool"], "link", [], "any", false, false, false, 319)]), "html", null, true);
                    echo "\" class=\"dropdown-item\">
                        <i class=\"";
                    // line 320
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tool"], "icon", [], "any", false, false, false, 320), "html", null, true);
                    echo " fa-fw\" aria-hidden=\"true\"></i>
                        ";
                    // line 321
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => twig_get_attribute($this->env, $this->source, $context["tool"], "description", [], "any", false, false, false, 321)], "method", false, false, false, 321), "html", null, true);
                    echo "
                    </a>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['tool'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 324
                echo "            ";
            }
            // line 325
            echo "        </div>
    </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 329
    public function macro_searchControl($__currentView__ = null, $__i18n__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "currentView" => $__currentView__,
            "i18n" => $__i18n__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 330
            echo "    ";
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "searchFields", [], "any", false, false, false, 330))) {
                // line 331
                echo "        <div class=\"form-group\">
            <div class=\"input-group\">
                <input class=\"form-control\" type=\"text\" name=\"query\" value=\"";
                // line 333
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "query", [], "any", false, false, false, 333), "html", null, true);
                echo "\" autocomplete=\"off\" placeholder=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "search"], "method", false, false, false, 333), "html", null, true);
                echo "\"/>
                <span class=\"input-group-append\">
                    <button type=\"submit\" class=\"btn btn-secondary\">
                        <i class=\"fas fa-search\" aria-hidden=\"true\"></i>
                    </button>
                </span>
            </div>
        </div>
    ";
            }

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 344
    public function macro_sortButton($__currentView__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "currentView" => $__currentView__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 345
            echo "    ";
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "orderOptions", [], "any", false, false, false, 345))) {
                // line 346
                echo "        <div class=\"btn-group\">
            <button class=\"btn btn-light dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"true\">
                ";
                // line 348
                $context["icon"] = ((((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "orderOptions", [], "any", false, false, false, 348)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "orderKey", [], "any", false, false, false, 348)] ?? null) : null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["type"] ?? null) : null) == "ASC")) ? ("fas fa-sort-amount-down-alt") : ("fas fa-sort-amount-down"));
                // line 349
                echo "                <i class=\"";
                echo twig_escape_filter($this->env, ($context["icon"] ?? null), "html", null, true);
                echo " fa-fw\" aria-hidden=\"true\"></i>
                <span class=\"d-none d-lg-inline\">";
                // line 350
                echo twig_escape_filter($this->env, (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "orderOptions", [], "any", false, false, false, 350)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "orderKey", [], "any", false, false, false, 350)] ?? null) : null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["label"] ?? null) : null), "html", null, true);
                echo "</span>
                <span class=\"caret\"></span>
            </button>
            <div class=\"dropdown-menu dropdown-menu-right\">
                ";
                // line 354
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "orderOptions", [], "any", false, false, false, 354));
                foreach ($context['_seq'] as $context["key"] => $context["orderby"]) {
                    // line 355
                    echo "                    ";
                    $context["activeClass"] = (((twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "orderKey", [], "any", false, false, false, 355) == $context["key"])) ? (" active") : (""));
                    // line 356
                    echo "                    ";
                    $context["icon"] = (((twig_get_attribute($this->env, $this->source, $context["orderby"], "type", [], "any", false, false, false, 356) == "ASC")) ? ("fas fa-sort-amount-down-alt") : ("fas fa-sort-amount-down"));
                    // line 357
                    echo "                    <a class=\"dropdown-item";
                    echo twig_escape_filter($this->env, ($context["activeClass"] ?? null), "html", null, true);
                    echo "\" href=\"#\" onclick=\"listViewSetOrder('";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 357), "html", null, true);
                    echo "', '";
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo "');\">
                        <i class=\"";
                    // line 358
                    echo twig_escape_filter($this->env, ($context["icon"] ?? null), "html", null, true);
                    echo " fa-fw\" aria-hidden=\"true\"></i> ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["orderby"], "label", [], "any", false, false, false, 358), "html", null, true);
                    echo "
                    </a>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['orderby'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 361
                echo "            </div>
        </div>
    ";
            }

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "Master/ListView.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  978 => 361,  967 => 358,  958 => 357,  955 => 356,  952 => 355,  948 => 354,  941 => 350,  936 => 349,  934 => 348,  930 => 346,  927 => 345,  914 => 344,  893 => 333,  889 => 331,  886 => 330,  872 => 329,  861 => 325,  858 => 324,  849 => 321,  845 => 320,  840 => 319,  836 => 318,  833 => 317,  830 => 316,  821 => 313,  817 => 312,  810 => 311,  806 => 310,  799 => 305,  784 => 304,  769 => 297,  764 => 295,  755 => 288,  752 => 287,  749 => 286,  746 => 285,  732 => 284,  716 => 276,  712 => 275,  707 => 273,  696 => 265,  683 => 255,  674 => 250,  671 => 249,  657 => 248,  647 => 245,  637 => 241,  635 => 240,  626 => 236,  620 => 233,  617 => 232,  615 => 231,  612 => 230,  608 => 228,  597 => 225,  588 => 224,  585 => 223,  582 => 222,  578 => 221,  572 => 217,  570 => 216,  565 => 214,  561 => 213,  558 => 212,  555 => 211,  552 => 210,  549 => 209,  535 => 208,  530 => 343,  527 => 328,  524 => 303,  521 => 283,  518 => 247,  515 => 206,  506 => 204,  502 => 203,  498 => 200,  492 => 198,  489 => 197,  483 => 193,  479 => 191,  475 => 188,  470 => 185,  461 => 182,  452 => 181,  449 => 180,  445 => 179,  439 => 177,  436 => 176,  433 => 175,  431 => 174,  424 => 169,  415 => 166,  412 => 165,  408 => 164,  404 => 163,  400 => 161,  391 => 158,  388 => 157,  384 => 156,  380 => 155,  374 => 151,  365 => 148,  362 => 147,  358 => 146,  350 => 140,  347 => 139,  342 => 135,  331 => 132,  328 => 131,  322 => 129,  313 => 127,  308 => 126,  301 => 122,  297 => 120,  295 => 119,  286 => 118,  283 => 117,  280 => 116,  274 => 115,  272 => 114,  267 => 111,  258 => 109,  253 => 108,  246 => 104,  242 => 102,  240 => 101,  233 => 98,  231 => 97,  228 => 96,  222 => 92,  219 => 91,  216 => 89,  207 => 87,  203 => 86,  196 => 85,  193 => 84,  186 => 80,  181 => 78,  176 => 76,  169 => 72,  162 => 68,  157 => 66,  155 => 65,  149 => 62,  146 => 61,  144 => 60,  141 => 59,  131 => 55,  128 => 54,  125 => 53,  115 => 49,  107 => 45,  104 => 44,  102 => 43,  98 => 41,  93 => 38,  89 => 37,  85 => 36,  81 => 35,  77 => 34,  73 => 33,  69 => 32,  64 => 30,  58 => 27,  54 => 26,  50 => 25,  46 => 24,  42 => 22,  40 => 21,  38 => 20,);
    }

    public function getSourceContext()
    {
        return new Source("", "Master/ListView.html.twig", "C:\\xampp2\\htdocs\\facturascripts\\facturasscripts\\Dinamic\\View\\Master\\ListView.html.twig");
    }
}
