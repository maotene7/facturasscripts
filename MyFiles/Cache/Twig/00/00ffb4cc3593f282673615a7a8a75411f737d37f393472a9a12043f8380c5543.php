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

/* Master/GridView.html.twig */
class __TwigTemplate_7e91fd43cca56a9aececf0cf26261ddc4e04d7a422140806b1450275df15f68f extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'detailmastercard' => [$this, 'block_detailmastercard'],
            'gridcard' => [$this, 'block_gridcard'],
        ];
        $macros["_self"] = $this->macros["_self"] = $this;
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 20
        echo "
";
        // line 22
        $context["currentView"] = twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "getCurrentView", [], "method", false, false, false, 22);
        // line 23
        $context["currentViewName"] = twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 23);
        // line 24
        $context["detailView"] = twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "detailView", [], "any", false, false, false, 24);
        // line 25
        $context["detailMasterColumns"] = twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getDetailColumns", [0 => "master"], "method", false, false, false, 25);
        // line 26
        $context["detailViewName"] = twig_get_attribute($this->env, $this->source, ($context["detailView"] ?? null), "getViewName", [], "method", false, false, false, 26);
        // line 27
        $context["formName"] = ("formGrid" . ($context["currentViewName"] ?? null));
        // line 29
        echo "<script type=\"text/javascript\">
    function gridViewDelete(formViewName) {
        bootbox.confirm({
            title: \"";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "confirm-delete"], "method", false, false, false, 32), "html", null, true);
        echo "\",
            message: \"";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "are-you-sure"], "method", false, false, false, 33), "html", null, true);
        echo "\",
            closeButton: false,
            buttons: {
                cancel: {
                    label: '<i class=\"fas fa-times\"></i> ";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "cancel"], "method", false, false, false, 37), "html", null, true);
        echo "'
                },
                confirm: {
                    label: '<i class=\"fas fa-check\"></i> ";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "confirm"], "method", false, false, false, 40), "html", null, true);
        echo "',
                    className: \"btn-danger\"
                }
            },
            callback: function (result) {
                if (result) {
                    \$(\"#\" + formViewName + \" :input[name=\\\"action\\\"]\").val(\"delete\");
                    \$(\"#\" + formViewName).submit();
                }
            }
        });

        return false;
    }
</script>
";
        // line 56
        echo "<div class=\"row\">
    <div class=\"col-12\">
        ";
        // line 59
        echo "        ";
        if ( !twig_test_empty(($context["detailMasterColumns"] ?? null))) {
            // line 60
            echo "            ";
            echo twig_call_macro($macros["_self"], "macro_tabRender", [($context["currentView"] ?? null), ($context["i18n"] ?? null)], 60, $context, $this->getSourceContext());
            echo "
        ";
        }
        // line 62
        echo "        <div class=\"tab-content\">
            <div class=\"tab-pane show active\" id=\"tab";
        // line 63
        echo twig_escape_filter($this->env, ($context["detailViewName"] ?? null), "html", null, true);
        echo "\" role=\"tabpanel\">
                ";
        // line 65
        echo "                ";
        if ( !twig_test_empty(($context["detailMasterColumns"] ?? null))) {
            // line 66
            echo "                    ";
            echo twig_call_macro($macros["_self"], "macro_rowRender", [($context["fsc"] ?? null), ($context["currentView"] ?? null), ($context["currentViewName"] ?? null), "header"], 66, $context, $this->getSourceContext());
            echo "
                ";
        }
        // line 68
        echo "                ";
        echo twig_call_macro($macros["_self"], "macro_rowRender", [($context["fsc"] ?? null), ($context["detailView"] ?? null), ($context["currentViewName"] ?? null), "header"], 68, $context, $this->getSourceContext());
        echo "
                ";
        // line 70
        echo "                <form id=\"";
        echo twig_escape_filter($this->env, ($context["formName"] ?? null), "html", null, true);
        echo "\" method=\"post\" enctype=\"multipart/form-data\">
                    <input type=\"hidden\" name=\"action\" value=\"";
        // line 71
        echo twig_escape_filter($this->env, ($context["action"] ?? null), "html", null, true);
        echo "\"/>
                    <input type=\"hidden\" name=\"activetab\" value=\"";
        // line 72
        echo twig_escape_filter($this->env, ($context["currentViewName"] ?? null), "html", null, true);
        echo "\"/>
                    <input type=\"hidden\" name=\"code\" value=\"";
        // line 73
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "model", [], "any", false, false, false, 73), "primaryColumnValue", [], "method", false, false, false, 73), "html", null, true);
        echo "\"/>
                    <div class=\"card shadow\">
                        <div class=\"card-body\">
                            <div class=\"row\">
                                <div class=\"col-12 text-right\">
                                    ";
        // line 79
        echo "                                    ";
        if ( !twig_test_empty(($context["detailMasterColumns"] ?? null))) {
            // line 80
            echo "                                        ";
            $context["row"] = twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getRow", [0 => "statistics"], "method", false, false, false, 80);
            // line 81
            echo "                                        ";
            echo twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "render", [0 => ($context["fsc"] ?? null)], "method", false, false, false, 81);
            echo "
                                    ";
        }
        // line 83
        echo "                                    ";
        $context["row"] = twig_get_attribute($this->env, $this->source, ($context["detailView"] ?? null), "getRow", [0 => "statistics"], "method", false, false, false, 83);
        // line 84
        echo "                                    ";
        echo twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "render", [0 => ($context["fsc"] ?? null)], "method", false, false, false, 84);
        echo "
                                </div>
                            </div>
                            ";
        // line 87
        $this->displayBlock('detailmastercard', $context, $blocks);
        // line 95
        echo "                            ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "model", [], "any", false, false, false, 95), "editable", [], "any", false, false, false, 95) === false)) {
            // line 96
            echo "                                <div class=\"row\">
                                    <script type=\"text/javascript\">
                                        documentReadOnly = true;
                                    </script>
                                    <div class=\"col\">
                                        <div class=\"alert alert-danger text-center mb-0\">
                                            <i class=\"fas fa-lock fa-fw\"></i> ";
            // line 102
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "non-editable-document"], "method", false, false, false, 102), "html", null, true);
            echo "
                                        </div>
                                    </div>
                                </div>
                            ";
        }
        // line 107
        echo "                        </div>
                    </div>
                    ";
        // line 110
        echo "                    <div class=\"row no-gutters mt-2\">
                        <script type=\"text/javascript\">
                            documentLineData = ";
        // line 112
        echo twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getGridData", [], "method", false, false, false, 112);
        echo ";
                        </script>
                        ";
        // line 114
        $this->displayBlock('gridcard', $context, $blocks);
        // line 124
        echo "                    </div>
                    ";
        // line 125
        $context["maxLines"] = twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getMaxLines", [], "method", false, false, false, 125);
        // line 126
        echo "                    ";
        if ((($context["maxLines"] ?? null) < 200)) {
            // line 127
            echo "                    <div class=\"row\">
                        <div class=\"col-12\">
                            <p class=\"alert alert-warning\" role=\"alert\">
                                ";
            // line 130
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "max-input-vars-warning", 1 => ["%numlines%" => ($context["maxLines"] ?? null)]], "method", false, false, false, 130), "html", null, true);
            echo "
                            </p>
                        </div>
                    </div>
                    ";
        }
        // line 135
        echo "                    ";
        // line 136
        echo "                    <div class=\"row no-gutters mt-2\">
                        <div class=\"card shadow col-12\">
                            <div class=\"card-body d-flex justify-content-between\" style=\"padding: 1rem 0rem;\">
                                ";
        // line 140
        echo "                                <div class=\"col\">
                                    ";
        // line 141
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "settings", [], "any", false, false, false, 141), "btnDelete", [], "any", false, false, false, 141)) {
            // line 142
            echo "                                        <div class=\"col\">
                                            <button type=\"button\" class=\"btn btn-sm btn-danger\" onclick=\"gridViewDelete('";
            // line 143
            echo twig_escape_filter($this->env, ($context["formName"] ?? null), "html", null, true);
            echo "');\">
                                                <i class=\"fas fa-trash-alt fa-fw\" aria-hidden=\"true\"></i>
                                                <span class=\"d-none d-sm-inline-block\">";
            // line 145
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "delete"], "method", false, false, false, 145), "html", null, true);
            echo "</span>
                                            </button>
                                        </div>
                                    ";
        }
        // line 149
        echo "                                </div>
                                ";
        // line 151
        echo "                                ";
        $context["row"] = twig_get_attribute($this->env, $this->source, ($context["detailView"] ?? null), "getRow", [0 => "actions"], "method", false, false, false, 151);
        // line 152
        echo "                                ";
        if ( !twig_test_empty(($context["row"] ?? null))) {
            // line 153
            echo "                                    <div class=\"col d-flex justify-content-center\">
                                        ";
            // line 154
            echo twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "render", [0 => false, 1 => twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 154)], "method", false, false, false, 154);
            echo "
                                    </div>
                                ";
        }
        // line 157
        echo "                                ";
        // line 158
        echo "                                <div class=\"col text-right\">
                                    ";
        // line 159
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "settings", [], "any", false, false, false, 159), "btnSave", [], "any", false, false, false, 159)) {
            // line 160
            echo "                                        <button class=\"btn btn-sm btn-primary\" type=\"button\" id=\"save-document\" onclick=\"saveDocument('";
            echo twig_escape_filter($this->env, ($context["formName"] ?? null), "html", null, true);
            echo "');\">
                                            <i class=\"fas fa-save\" aria-hidden=\"true\"></i>&nbsp; ";
            // line 161
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "save"], "method", false, false, false, 161), "html", null, true);
            echo "
                                        </button>
                                    ";
        }
        // line 164
        echo "                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                <br/>
                ";
        // line 171
        echo "                ";
        echo twig_call_macro($macros["_self"], "macro_rowRender", [($context["fsc"] ?? null), ($context["detailView"] ?? null), ($context["currentViewName"] ?? null), "footer"], 171, $context, $this->getSourceContext());
        echo "
                ";
        // line 172
        if ( !twig_test_empty(($context["detailMasterColumns"] ?? null))) {
            // line 173
            echo "                    ";
            echo twig_call_macro($macros["_self"], "macro_rowRender", [($context["fsc"] ?? null), ($context["currentView"] ?? null), ($context["currentViewName"] ?? null), "footer"], 173, $context, $this->getSourceContext());
            echo "
                ";
        }
        // line 175
        echo "                ";
        // line 176
        echo "                ";
        echo twig_call_macro($macros["_self"], "macro_modalRender", [($context["detailView"] ?? null), ($context["currentViewName"] ?? null)], 176, $context, $this->getSourceContext());
        echo "
                ";
        // line 177
        if ( !twig_test_empty(($context["detailMasterColumns"] ?? null))) {
            // line 178
            echo "                    ";
            echo twig_call_macro($macros["_self"], "macro_modalRender", [($context["currentView"] ?? null), ($context["currentViewName"] ?? null)], 178, $context, $this->getSourceContext());
            echo "
                ";
        }
        // line 180
        echo "            </div>
            ";
        // line 181
        if ( !twig_test_empty(($context["detailMasterColumns"] ?? null))) {
            // line 182
            echo "                <div class=\"tab-pane\" id=\"tab";
            echo twig_escape_filter($this->env, ($context["currentViewName"] ?? null), "html", null, true);
            echo "\" role=\"tabpanel\">
                    ";
            // line 183
            echo twig_include($this->env, $context, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "editTemplate", [], "any", false, false, false, 183));
            echo "
                </div>
            ";
        }
        // line 186
        echo "        </div>
    </div>
</div>

";
        // line 212
        echo "
";
        // line 219
        echo "
";
    }

    // line 87
    public function block_detailmastercard($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 88
        echo "                                <div class=\"row\">
                                    ";
        // line 89
        $context["columns"] = ((twig_test_empty(($context["detailMasterColumns"] ?? null))) ? (twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getColumns", [], "method", false, false, false, 89)) : (($context["detailMasterColumns"] ?? null)));
        // line 90
        echo "                                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["columns"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 91
            echo "                                        ";
            echo twig_get_attribute($this->env, $this->source, $context["group"], "edit", [0 => twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "model", [], "any", false, false, false, 91)], "method", false, false, false, 91);
            echo "
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 93
        echo "                                </div>
                            ";
    }

    // line 114
    public function block_gridcard($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 115
        echo "                            <div class=\"col\">
                                ";
        // line 117
        echo "                                <div class=\"card shadow\">
                                    <div class=\"card-body p-0\">
                                        <div id=\"document-lines\"></div>
                                    </div>
                                </div>
                            </div>
                        ";
    }

    // line 191
    public function macro_tabRender($__currentView__ = null, $__i18n__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "currentView" => $__currentView__,
            "i18n" => $__i18n__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 192
            echo "    ";
            $context["currentViewName"] = twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 192);
            // line 193
            echo "    ";
            $context["detailView"] = twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "detailView", [], "any", false, false, false, 193);
            // line 194
            echo "    ";
            $context["detailViewName"] = twig_get_attribute($this->env, $this->source, ($context["detailView"] ?? null), "getViewName", [], "method", false, false, false, 194);
            // line 195
            echo "    <ul class=\"nav nav-pills mb-3 d-print-none\" role=\"tablist\">
        ";
            // line 197
            echo "        <li class=\"nav-item\">
            <a href=\"#tab";
            // line 198
            echo twig_escape_filter($this->env, ($context["detailViewName"] ?? null), "html", null, true);
            echo "\" class=\"nav-link active\" data-toggle=\"tab\" role=\"tab\" aria-controls=\"tab";
            echo twig_escape_filter($this->env, ($context["detailViewName"] ?? null), "html", null, true);
            echo "\">
                <i class=\"";
            // line 199
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["detailView"] ?? null), "icon", [], "any", false, false, false, 199), "html", null, true);
            echo "\" aria-hidden=\"true\"></i>
                <span class=\"d-none d-sm-inline-block\">&nbsp;";
            // line 200
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["detailView"] ?? null), "title", [], "any", false, false, false, 200), "html", null, true);
            echo "</span>
            </a>
        </li>
        ";
            // line 204
            echo "        <li class=\"nav-item\">
            <a href=\"#tab";
            // line 205
            echo twig_escape_filter($this->env, ($context["currentViewName"] ?? null), "html", null, true);
            echo "\" class=\"nav-link\" data-toggle=\"tab\" role=\"tab\" aria-controls=\"tab";
            echo twig_escape_filter($this->env, ($context["currentViewName"] ?? null), "html", null, true);
            echo "\">
                <i class=\"fas fa-edit\" aria-hidden=\"true\"></i>
                <span class=\"d-none d-sm-inline-block\">&nbsp;";
            // line 207
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "detail"], "method", false, false, false, 207), "html", null, true);
            echo "</span>
            </a>
        </li>
    </ul>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 213
    public function macro_rowRender($__fsc__ = null, $__view__ = null, $__viewName__ = null, $__rowName__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "fsc" => $__fsc__,
            "view" => $__view__,
            "viewName" => $__viewName__,
            "rowName" => $__rowName__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 214
            echo "    <div class=\"row\">
        ";
            // line 215
            $context["row"] = twig_get_attribute($this->env, $this->source, ($context["view"] ?? null), "getRow", [0 => ($context["rowName"] ?? null)], "method", false, false, false, 215);
            // line 216
            echo "        ";
            echo twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "render", [0 => ($context["viewName"] ?? null), 1 => "", 2 => ($context["fsc"] ?? null)], "method", false, false, false, 216);
            echo "
    </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 220
    public function macro_modalRender($__view__ = null, $__viewName__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "view" => $__view__,
            "viewName" => $__viewName__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 221
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["view"] ?? null), "getModals", [], "method", false, false, false, 221));
            foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
                // line 222
                echo "        ";
                echo twig_get_attribute($this->env, $this->source, $context["group"], "modal", [0 => twig_get_attribute($this->env, $this->source, ($context["view"] ?? null), "model", [], "any", false, false, false, 222), 1 => ($context["viewName"] ?? null)], "method", false, false, false, 222);
                echo "
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "Master/GridView.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  525 => 222,  520 => 221,  506 => 220,  493 => 216,  491 => 215,  488 => 214,  472 => 213,  458 => 207,  451 => 205,  448 => 204,  442 => 200,  438 => 199,  432 => 198,  429 => 197,  426 => 195,  423 => 194,  420 => 193,  417 => 192,  403 => 191,  393 => 117,  390 => 115,  386 => 114,  381 => 93,  372 => 91,  367 => 90,  365 => 89,  362 => 88,  358 => 87,  353 => 219,  350 => 212,  344 => 186,  338 => 183,  333 => 182,  331 => 181,  328 => 180,  322 => 178,  320 => 177,  315 => 176,  313 => 175,  307 => 173,  305 => 172,  300 => 171,  292 => 164,  286 => 161,  281 => 160,  279 => 159,  276 => 158,  274 => 157,  268 => 154,  265 => 153,  262 => 152,  259 => 151,  256 => 149,  249 => 145,  244 => 143,  241 => 142,  239 => 141,  236 => 140,  231 => 136,  229 => 135,  221 => 130,  216 => 127,  213 => 126,  211 => 125,  208 => 124,  206 => 114,  201 => 112,  197 => 110,  193 => 107,  185 => 102,  177 => 96,  174 => 95,  172 => 87,  165 => 84,  162 => 83,  156 => 81,  153 => 80,  150 => 79,  142 => 73,  138 => 72,  134 => 71,  129 => 70,  124 => 68,  118 => 66,  115 => 65,  111 => 63,  108 => 62,  102 => 60,  99 => 59,  95 => 56,  77 => 40,  71 => 37,  64 => 33,  60 => 32,  55 => 29,  53 => 27,  51 => 26,  49 => 25,  47 => 24,  45 => 23,  43 => 22,  40 => 20,);
    }

    public function getSourceContext()
    {
        return new Source("{#
    /**
     * This file is part of FacturaScripts
     * Copyright (C) 2013-2019 Carlos Garcia Gomez <carlos@facturascripts.com>
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

{# IMPORTANT: This template is only executed if the master view has data. #}
{% set currentView = fsc.getCurrentView() %}
{% set currentViewName = currentView.getViewName() %}
{% set detailView = currentView.detailView %}
{% set detailMasterColumns = currentView.getDetailColumns('master') %}
{% set detailViewName = detailView.getViewName() %}
{% set formName = 'formGrid' ~ currentViewName %}
{# -- Scripts -- #}
<script type=\"text/javascript\">
    function gridViewDelete(formViewName) {
        bootbox.confirm({
            title: \"{{ i18n.trans('confirm-delete') }}\",
            message: \"{{ i18n.trans('are-you-sure') }}\",
            closeButton: false,
            buttons: {
                cancel: {
                    label: '<i class=\"fas fa-times\"></i> {{ i18n.trans('cancel') }}'
                },
                confirm: {
                    label: '<i class=\"fas fa-check\"></i> {{ i18n.trans('confirm') }}',
                    className: \"btn-danger\"
                }
            },
            callback: function (result) {
                if (result) {
                    \$(\"#\" + formViewName + \" :input[name=\\\"action\\\"]\").val(\"delete\");
                    \$(\"#\" + formViewName).submit();
                }
            }
        });

        return false;
    }
</script>
{# -- Main -- #}
<div class=\"row\">
    <div class=\"col-12\">
        {# -- Tabs: When detail view has a master card -- #}
        {% if detailMasterColumns is not empty %}
            {{ _self.tabRender(currentView, i18n) }}
        {% endif %}
        <div class=\"tab-content\">
            <div class=\"tab-pane show active\" id=\"tab{{ detailViewName }}\" role=\"tabpanel\">
                {# -- Row header -- #}
                {% if detailMasterColumns is not empty %}
                    {{ _self.rowRender(fsc, currentView, currentViewName, 'header') }}
                {% endif %}
                {{ _self.rowRender(fsc, detailView, currentViewName, 'header') }}
                {# -- Master data -- #}
                <form id=\"{{ formName }}\" method=\"post\" enctype=\"multipart/form-data\">
                    <input type=\"hidden\" name=\"action\" value=\"{{ action }}\"/>
                    <input type=\"hidden\" name=\"activetab\" value=\"{{ currentViewName }}\"/>
                    <input type=\"hidden\" name=\"code\" value=\"{{ currentView.model.primaryColumnValue() }}\"/>
                    <div class=\"card shadow\">
                        <div class=\"card-body\">
                            <div class=\"row\">
                                <div class=\"col-12 text-right\">
                                    {# -- Row statistics -- #}
                                    {% if detailMasterColumns is not empty %}
                                        {% set row = currentView.getRow('statistics') %}
                                        {{ row.render(fsc) | raw }}
                                    {% endif %}
                                    {% set row = detailView.getRow('statistics') %}
                                    {{ row.render(fsc) | raw }}
                                </div>
                            </div>
                            {% block detailmastercard %}
                                <div class=\"row\">
                                    {% set columns = detailMasterColumns is empty ? currentView.getColumns() : detailMasterColumns %}
                                    {% for group in columns %}
                                        {{ group.edit(currentView.model) | raw }}
                                    {% endfor %}
                                </div>
                            {% endblock %}
                            {% if currentView.model.editable is same as(false) %}
                                <div class=\"row\">
                                    <script type=\"text/javascript\">
                                        documentReadOnly = true;
                                    </script>
                                    <div class=\"col\">
                                        <div class=\"alert alert-danger text-center mb-0\">
                                            <i class=\"fas fa-lock fa-fw\"></i> {{ i18n.trans('non-editable-document') }}
                                        </div>
                                    </div>
                                </div>
                            {% endif %}
                        </div>
                    </div>
                    {# Grid zone #}
                    <div class=\"row no-gutters mt-2\">
                        <script type=\"text/javascript\">
                            documentLineData = {{ currentView.getGridData() | raw }};
                        </script>
                        {% block gridcard %}
                            <div class=\"col\">
                                {# Grid data panel #}
                                <div class=\"card shadow\">
                                    <div class=\"card-body p-0\">
                                        <div id=\"document-lines\"></div>
                                    </div>
                                </div>
                            </div>
                        {% endblock %}
                    </div>
                    {% set maxLines = currentView.getMaxLines() %}
                    {% if maxLines < 200 %}
                    <div class=\"row\">
                        <div class=\"col-12\">
                            <p class=\"alert alert-warning\" role=\"alert\">
                                {{ i18n.trans('max-input-vars-warning', {'%numlines%': maxLines}) }}
                            </p>
                        </div>
                    </div>
                    {% endif %}
                    {# Buttons actions #}
                    <div class=\"row no-gutters mt-2\">
                        <div class=\"card shadow col-12\">
                            <div class=\"card-body d-flex justify-content-between\" style=\"padding: 1rem 0rem;\">
                                {# -- Delete action -- #}
                                <div class=\"col\">
                                    {% if currentView.settings.btnDelete %}
                                        <div class=\"col\">
                                            <button type=\"button\" class=\"btn btn-sm btn-danger\" onclick=\"gridViewDelete('{{ formName }}');\">
                                                <i class=\"fas fa-trash-alt fa-fw\" aria-hidden=\"true\"></i>
                                                <span class=\"d-none d-sm-inline-block\">{{ i18n.trans('delete') }}</span>
                                            </button>
                                        </div>
                                    {% endif %}
                                </div>
                                {# -- Row actions -- #}
                                {% set row = detailView.getRow('actions') %}
                                {% if row is not empty %}
                                    <div class=\"col d-flex justify-content-center\">
                                        {{ row.render(false, currentView.getViewName()) | raw }}
                                    </div>
                                {% endif %}
                                {# -- Save actions -- #}
                                <div class=\"col text-right\">
                                    {% if currentView.settings.btnSave %}
                                        <button class=\"btn btn-sm btn-primary\" type=\"button\" id=\"save-document\" onclick=\"saveDocument('{{ formName }}');\">
                                            <i class=\"fas fa-save\" aria-hidden=\"true\"></i>&nbsp; {{ i18n.trans('save') }}
                                        </button>
                                    {% endif %}
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                <br/>
                {# -- Row footer -- #}
                {{ _self.rowRender(fsc, detailView, currentViewName, 'footer') }}
                {% if detailMasterColumns is not empty %}
                    {{ _self.rowRender(fsc, currentView, currentViewName, 'footer') }}
                {% endif %}
                {# -- Modals -- #}
                {{ _self.modalRender(detailView, currentViewName) }}
                {% if detailMasterColumns is not empty %}
                    {{ _self.modalRender(currentView, currentViewName) }}
                {% endif %}
            </div>
            {% if detailMasterColumns is not empty %}
                <div class=\"tab-pane\" id=\"tab{{ currentViewName }}\" role=\"tabpanel\">
                    {{ include(currentView.editTemplate) }}
                </div>
            {% endif %}
        </div>
    </div>
</div>

{# -- Macros -- #}
{% macro tabRender(currentView, i18n) %}
    {% set currentViewName = currentView.getViewName() %}
    {% set detailView = currentView.detailView %}
    {% set detailViewName = detailView.getViewName() %}
    <ul class=\"nav nav-pills mb-3 d-print-none\" role=\"tablist\">
        {# Grid View (detail) #}
        <li class=\"nav-item\">
            <a href=\"#tab{{ detailViewName }}\" class=\"nav-link active\" data-toggle=\"tab\" role=\"tab\" aria-controls=\"tab{{ detailViewName }}\">
                <i class=\"{{ detailView.icon }}\" aria-hidden=\"true\"></i>
                <span class=\"d-none d-sm-inline-block\">&nbsp;{{ detailView.title }}</span>
            </a>
        </li>
        {# Edit View (master) #}
        <li class=\"nav-item\">
            <a href=\"#tab{{ currentViewName }}\" class=\"nav-link\" data-toggle=\"tab\" role=\"tab\" aria-controls=\"tab{{ currentViewName }}\">
                <i class=\"fas fa-edit\" aria-hidden=\"true\"></i>
                <span class=\"d-none d-sm-inline-block\">&nbsp;{{ i18n.trans('detail') }}</span>
            </a>
        </li>
    </ul>
{% endmacro %}

{% macro rowRender(fsc, view, viewName, rowName) %}
    <div class=\"row\">
        {% set row = view.getRow(rowName) %}
        {{ row.render(viewName, '', fsc) | raw }}
    </div>
{% endmacro %}

{% macro modalRender(view, viewName) %}
    {% for group in view.getModals() %}
        {{ group.modal(view.model, viewName) | raw }}
    {% endfor %}
{% endmacro %}", "Master/GridView.html.twig", "C:\\xampp2\\htdocs\\facturascripts\\facturasscripts\\Core\\View\\Master\\GridView.html.twig");
    }
}
