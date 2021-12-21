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

/* Master/EditListView.html.twig */
class __TwigTemplate_a8e1664152875a073628b705433fcf8a63108bf890538f165f16e097682bae45 extends \Twig\Template
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
                        <div class=\"form-row\">
                            ";
            // line 61
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getColumns", [], "method", false, false, false, 61));
            foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
                // line 62
                echo "                                ";
                echo twig_get_attribute($this->env, $this->source, $context["group"], "edit", [0 => twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "model", [], "any", false, false, false, 62)], "method", false, false, false, 62);
                echo "
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 64
            echo "                            <div class=\"col-12 text-right\">
                                <button class=\"btn btn-sm btn-success\" type=\"submit\">
                                    <i class=\"fas fa-save fa-fw\" aria-hidden=\"true\"></i>
                                    <span class=\"d-none d-sm-inline-block\">";
            // line 67
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "save"], "method", false, false, false, 67), "html", null, true);
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
        // line 76
        echo "
    ";
        // line 78
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "cursor", [], "any", false, false, false, 78));
        foreach ($context['_seq'] as $context["counter"] => $context["model"]) {
            // line 79
            echo "        ";
            $context["formName"] = (("form" . twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 79)) . $context["counter"]);
            // line 80
            echo "        <form id=\"";
            echo twig_escape_filter($this->env, ($context["formName"] ?? null), "html", null, true);
            echo "\" method=\"post\" enctype=\"multipart/form-data\">
            <input type=\"hidden\" name=\"action\" value=\"edit\"/>
            <input type=\"hidden\" name=\"activetab\" value=\"";
            // line 82
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 82), "html", null, true);
            echo "\"/>
            <input type=\"hidden\" name=\"code\" value=\"";
            // line 83
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["model"], "primaryColumnValue", [], "method", false, false, false, 83), "html", null, true);
            echo "\"/>
            <input type=\"hidden\" name=\"multireqtoken\" value=\"";
            // line 84
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "multiRequestProtection", [], "any", false, false, false, 84), "newToken", [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "user", [], "any", false, false, false, 84), "logkey", [], "any", false, false, false, 84)], "method", false, false, false, 84), "html", null, true);
            echo "\"/>
            <div class=\"card shadow mb-2\">
                <div class=\"card-body\">
                    <div class=\"form-row\">
                        ";
            // line 88
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getColumns", [], "method", false, false, false, 88));
            foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
                // line 89
                echo "                            ";
                echo twig_get_attribute($this->env, $this->source, $context["group"], "edit", [0 => $context["model"]], "method", false, false, false, 89);
                echo "
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 91
            echo "                    </div>
                    <div class=\"row\">
                        ";
            // line 93
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "settings", [], "any", false, false, false, 93), "btnDelete", [], "any", false, false, false, 93)) {
                // line 94
                echo "                            <div class=\"col\">
                                <button type=\"button\" class=\"btn btn-sm btn-danger\" onclick=\"editListViewDelete('";
                // line 95
                echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 95) . $context["counter"]), "html", null, true);
                echo "');\">
                                    <i class=\"fas fa-trash-alt fa-fw\" aria-hidden=\"true\"></i>
                                    <span class=\"d-none d-sm-inline-block\">";
                // line 97
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "delete"], "method", false, false, false, 97), "html", null, true);
                echo "</span>
                                </button>
                            </div>
                        ";
            }
            // line 101
            echo "                        <div class=\"col\">
                            ";
            // line 103
            echo "                            ";
            $context["row"] = twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getRow", [0 => "actions"], "method", false, false, false, 103);
            // line 104
            echo "                            ";
            echo twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "render", [0 => false, 1 => (twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 104) . $context["counter"])], "method", false, false, false, 104);
            echo "
                        </div>
                        <div class=\"col text-right\">
                            ";
            // line 107
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "settings", [], "any", false, false, false, 107), "btnUndo", [], "any", false, false, false, 107)) {
                // line 108
                echo "                                <button class=\"btn btn-sm btn-secondary\" type=\"reset\">
                                    <i class=\"fas fa-undo fa-fw\" aria-hidden=\"true\"></i>
                                    <span class=\"d-none d-sm-inline-block\">";
                // line 110
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "undo"], "method", false, false, false, 110), "html", null, true);
                echo "</span>
                                </button>
                            ";
            }
            // line 113
            echo "                            ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "settings", [], "any", false, false, false, 113), "btnSave", [], "any", false, false, false, 113)) {
                // line 114
                echo "                                <button class=\"btn btn-sm btn-primary\" type=\"submit\">
                                    <i class=\"fas fa-save fa-fw\" aria-hidden=\"true\"></i>
                                    <span class=\"d-none d-sm-inline-block\">";
                // line 116
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "save"], "method", false, false, false, 116), "html", null, true);
                echo "</span>
                                </button>
                            ";
            }
            // line 119
            echo "                        </div>
                    </div>
                </div>
            </div>
        </form>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['counter'], $context['model'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 125
        echo "
    ";
        // line 127
        echo "    ";
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getPagination", [], "method", false, false, false, 127)) > 0)) {
            // line 128
            echo "        ";
            $context["formName"] = (("form" . twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 128)) . "Offset");
            // line 129
            echo "        <form id=\"";
            echo twig_escape_filter($this->env, ($context["formName"] ?? null), "html", null, true);
            echo "\" method=\"post\">
            <input type=\"hidden\" name=\"activetab\" value=\"";
            // line 130
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 130), "html", null, true);
            echo "\"/>
            <input type=\"hidden\" name=\"offset\" value=\"";
            // line 131
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "offset", [], "any", false, false, false, 131), "html", null, true);
            echo "\"/>
            <div class=\"text-center pt-3\">
                <div class=\"btn-group bg-white\">
                    ";
            // line 134
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getPagination", [], "method", false, false, false, 134));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 135
                echo "                        ";
                $context["btnClass"] = ((twig_get_attribute($this->env, $this->source, $context["page"], "active", [], "any", false, false, false, 135)) ? ("btn btn-outline-dark active") : ("btn btn-outline-dark"));
                // line 136
                echo "                        <button type=\"button\" class=\"";
                echo twig_escape_filter($this->env, ($context["btnClass"] ?? null), "html", null, true);
                echo "\" onclick=\"editListViewSetOffset('";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 136), "html", null, true);
                echo "', '";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["page"], "offset", [], "any", false, false, false, 136), "html", null, true);
                echo "');\">
                            ";
                // line 137
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["page"], "num", [], "any", false, false, false, 137), "html", null, true);
                echo "
                        </button>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 140
            echo "                </div>
            </div>
        </form>
    ";
        }
        // line 144
        echo "
    ";
        // line 146
        echo "    <div class=\"row\">
        ";
        // line 147
        $context["row"] = twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getRow", [0 => "footer"], "method", false, false, false, 147);
        // line 148
        echo "        ";
        echo twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "render", [0 => twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 148), 1 => "", 2 => ($context["fsc"] ?? null)], "method", false, false, false, 148);
        echo "
    </div>
</div>

";
        // line 153
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getModals", [], "method", false, false, false, 153));
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 154
            echo "    ";
            echo twig_get_attribute($this->env, $this->source, $context["group"], "modal", [0 => twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "model", [], "any", false, false, false, 154), 1 => twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 154)], "method", false, false, false, 154);
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "Master/EditListView.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  353 => 154,  349 => 153,  341 => 148,  339 => 147,  336 => 146,  333 => 144,  327 => 140,  318 => 137,  309 => 136,  306 => 135,  302 => 134,  296 => 131,  292 => 130,  287 => 129,  284 => 128,  281 => 127,  278 => 125,  267 => 119,  261 => 116,  257 => 114,  254 => 113,  248 => 110,  244 => 108,  242 => 107,  235 => 104,  232 => 103,  229 => 101,  222 => 97,  217 => 95,  214 => 94,  212 => 93,  208 => 91,  199 => 89,  195 => 88,  188 => 84,  184 => 83,  180 => 82,  174 => 80,  171 => 79,  166 => 78,  163 => 76,  151 => 67,  146 => 64,  137 => 62,  133 => 61,  127 => 58,  122 => 56,  116 => 53,  111 => 51,  105 => 48,  101 => 47,  95 => 45,  92 => 44,  89 => 43,  82 => 39,  80 => 38,  77 => 37,  70 => 33,  68 => 32,  65 => 31,  61 => 29,  55 => 26,  51 => 25,  47 => 24,  43 => 23,  39 => 21,  37 => 20,);
    }

    public function getSourceContext()
    {
        return new Source("", "Master/EditListView.html.twig", "C:\\xampp2\\htdocs\\facturascripts\\facturasscripts\\Dinamic\\View\\Master\\EditListView.html.twig");
    }
}
