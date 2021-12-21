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

/* Tab/RefundFacturaProveedor.html.twig */
class __TwigTemplate_4de474b3a7f92c8fcf0f159cbe8293ad9768ad362393d4f1d789158f45663aaa extends \Twig\Template
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
        $context["firstView"] = twig_first($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "views", [], "any", false, false, false, 21));
        // line 22
        echo "
";
        // line 23
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["firstView"] ?? null), "model", [], "any", false, false, false, 23), "exists", [], "method", false, false, false, 23)) {
            // line 24
            echo "    <script>
        function refundAll() {
            var refundableQty = document.getElementsByClassName(\"refundable\");
            var inputToBeRefunded = document.getElementsByClassName(\"to_refund\");
            for (i = 0; i < inputToBeRefunded.length; i++) {
                inputToBeRefunded.item(i).value = refundableQty.item(i).innerHTML;
            }

            return false;
        }
        function refundNone() {
            var inputToBeRefunded = document.getElementsByClassName(\"to_refund\");
            for (i = 0; i < inputToBeRefunded.length; i++) {
                inputToBeRefunded.item(i).value = 0;
            }

            return false;
        }
    </script>
    <form method=\"post\">
        <input type=\"hidden\" name=\"action\" value=\"new-refund\"/>
        <input type=\"hidden\" name=\"activetab\" value=\"";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 45), "html", null, true);
            echo "\"/>
        <input type=\"hidden\" name=\"idfactura\" value=\"";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["firstView"] ?? null), "model", [], "any", false, false, false, 46), "primaryColumnValue", [], "method", false, false, false, 46), "html", null, true);
            echo "\"/>
        <div class=\"container-fluid\">
            <div class=\"form-row\">
                ";
            // line 49
            echo twig_call_macro($macros["_self"], "macro_customSelect", ["codserie", "codserie", twig_get_attribute($this->env, $this->source, ($context["appSettings"] ?? null), "get", [0 => "default", 1 => "codserierec", 2 => "R"], "method", false, false, false, 49), twig_get_attribute($this->env, $this->source, ($context["firstView"] ?? null), "getSelectValues", [0 => "Serie"], "method", false, false, false, 49)], 49, $context, $this->getSourceContext());
            echo "
                ";
            // line 50
            echo twig_call_macro($macros["_self"], "macro_customInput", ["fecha", "fecha", twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["task"] ?? null), "end", [], "any", false, false, false, 50), "Y-m-d"), "date", "", ["class" => "form-control"]], 50, $context, $this->getSourceContext());
            echo "
                ";
            // line 51
            echo twig_call_macro($macros["_self"], "macro_customInput", ["numproveedor", "numproveedor", "", "text", "fas fa-hashtag"], 51, $context, $this->getSourceContext());
            echo "
                <div class=\"col text-right\">
                    <div class=\"btn-group\">
                        <div class=\"dropdown\">
                            <button class=\"btn btn-sm btn-secondary dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                <i class=\"fas fa-check-square fa-fw\"></i> ";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "select"], "method", false, false, false, 56), "html", null, true);
            echo "
                            </button>
                            <div class=\"dropdown-menu dropdown-menu-right\">
                                <a class=\"dropdown-item\" href=\"#\" onClick=\"return refundNone();\">
                                    ";
            // line 60
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "select-none"], "method", false, false, false, 60), "html", null, true);
            echo "
                                </a>
                                <a class=\"dropdown-item\" href=\"#\" onClick=\"return refundAll();\">
                                    ";
            // line 63
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "select-all"], "method", false, false, false, 63), "html", null, true);
            echo "
                                </a>
                            </div>
                        </div>
                    </div>
                    &nbsp;
                    <button type=\"submit\" class=\"btn btn-sm btn-primary\">
                        <i class=\"fas fa-save fa-fw\" aria-hidden=\"true\"></i> ";
            // line 70
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "save"], "method", false, false, false, 70), "html", null, true);
            echo "
                    </button>
                </div>
            </div>
        </div>
        <div class=\"table-responsive\">
            <table class=\"table table-sm table-hover\">
                <thead>
                    <tr>
                        <th width=\"180\">";
            // line 79
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "product"], "method", false, false, false, 79), "html", null, true);
            echo "</th>
                        <th>";
            // line 80
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "description"], "method", false, false, false, 80), "html", null, true);
            echo "</th>
                        <th class=\"text-right\" width=\"200\">";
            // line 81
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "quantity"], "method", false, false, false, 81), "html", null, true);
            echo "</th>
                        <th class=\"text-right\" width=\"200\">";
            // line 82
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "new-refund"], "method", false, false, false, 82), "html", null, true);
            echo "</th>
                    </tr>
                </thead>
                <tbody>
                    ";
            // line 86
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["firstView"] ?? null), "model", [], "any", false, false, false, 86), "getLines", [], "method", false, false, false, 86));
            foreach ($context['_seq'] as $context["_key"] => $context["line"]) {
                // line 87
                echo "                        ";
                $context["refunded"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["firstView"] ?? null), "model", [], "any", false, false, false, 87), "refundedItemAmount", [0 => twig_get_attribute($this->env, $this->source, $context["line"], "referencia", [], "any", false, false, false, 87)], "method", false, false, false, 87);
                // line 88
                echo "                        <tr>
                            <td>
                                <input type=\"text\" class=\"form-control\" value=\"";
                // line 90
                echo twig_get_attribute($this->env, $this->source, $context["line"], "referencia", [], "any", false, false, false, 90);
                echo "\" readonly=\"true\" />
                            </td>
                            <td>
                                <textarea class=\"form-control\" rows=\"1\" readonly=\"true\">";
                // line 93
                echo twig_get_attribute($this->env, $this->source, $context["line"], "descripcion", [], "any", false, false, false, 93);
                echo "</textarea>
                            </td>
                            <td>
                                <div class=\"form-control text-right refundable\">";
                // line 96
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["line"], "cantidad", [], "any", false, false, false, 96), "html", null, true);
                echo "</div>
                            </td>
                            <td class=\"table-warning\">
                                <input type=\"number\" name=\"refund_";
                // line 99
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["line"], "primaryColumnValue", [], "method", false, false, false, 99), "html", null, true);
                echo "\" value=\"0\" min=\"0\" max=\"";
                echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["line"], "cantidad", [], "any", false, false, false, 99) - ($context["refunded"] ?? null)), "html", null, true);
                echo "\"
                                       step=\"any\" class=\"form-control text-right to_refund\" autocomplete=\"off\"/>
                            </td>
                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['line'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 104
            echo "                </tbody>
            </table>
        </div>
        <div class=\"container-fluid\">
            <div class=\"form-row\">
                <div class=\"col mb-2\">
                    <textarea name=\"observaciones\" class=\"form-control\" placeholder=\"";
            // line 110
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "observations"], "method", false, false, false, 110), "html", null, true);
            echo "\"></textarea>
                </div>
            </div>
        </div>
    </form>
";
        }
        // line 116
        echo "
";
        // line 134
        echo "
";
    }

    // line 117
    public function macro_customSelect($__id__ = null, $__name__ = null, $__value__ = null, $__allValues__ = [], $__allowHide__ = true, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "id" => $__id__,
            "name" => $__name__,
            "value" => $__value__,
            "allValues" => $__allValues__,
            "allowHide" => $__allowHide__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 118
            echo "    ";
            if ((($context["allowHide"] ?? null) && (twig_length_filter($this->env, ($context["allValues"] ?? null)) == 1))) {
                // line 119
                echo "        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["allValues"] ?? null));
                foreach ($context['_seq'] as $context["key"] => $context["option"]) {
                    // line 120
                    echo "            <input type=\"hidden\" id=\"";
                    echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                    echo "\" name=\"";
                    echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
                    echo "\" value=\"";
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo "\"/>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['option'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 122
                echo "    ";
            } else {
                // line 123
                echo "        <div class=\"col-sm-2 mb-2\">
            <select id=\"";
                // line 124
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo "\" name=\"";
                echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
                echo "\" class=\"form-control\">
                ";
                // line 125
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["allValues"] ?? null));
                foreach ($context['_seq'] as $context["key"] => $context["option"]) {
                    // line 126
                    echo "                    <option value=\"";
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo "\"";
                    if ((($context["value"] ?? null) == $context["key"])) {
                        echo " selected=\"\"";
                    }
                    echo ">
                        ";
                    // line 127
                    echo twig_escape_filter($this->env, $context["option"], "html", null, true);
                    echo "
                    </option>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['option'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 130
                echo "            </select>
        </div>
    ";
            }

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 135
    public function macro_customInput($__id__ = null, $__name__ = null, $__value__ = null, $__type__ = "text", $__icon__ = null, $__attributes__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "id" => $__id__,
            "name" => $__name__,
            "value" => $__value__,
            "type" => $__type__,
            "icon" => $__icon__,
            "attributes" => $__attributes__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 136
            echo "    <div class=\"col-sm-2 mb-2\">
        ";
            // line 137
            if (($context["icon"] ?? null)) {
                // line 138
                echo "            <div class=\"input-group\">
                <span class=\"input-group-prepend\">
                    <span class=\"input-group-text\">
                        <i class=\"";
                // line 141
                echo twig_escape_filter($this->env, ($context["icon"] ?? null), "html", null, true);
                echo " fa-fw\" aria-hidden=\"true\"></i>
                    </span>
                </span>
            ";
            }
            // line 145
            echo "
            <input type=\"";
            // line 146
            echo twig_escape_filter($this->env, ($context["type"] ?? null), "html", null, true);
            echo "\" id=\"";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "\" name=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
            echo "\"
                   ";
            // line 147
            if ( !twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "class", [], "any", true, true, false, 147)) {
                // line 148
                echo "                       class=\"form-control\"
                   ";
            }
            // line 150
            echo "
                   ";
            // line 151
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["attributes"] ?? null));
            foreach ($context['_seq'] as $context["attribute"] => $context["attrValue"]) {
                // line 152
                echo "                       ";
                echo twig_escape_filter($this->env, $context["attribute"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrValue"], "html", null, true);
                echo "\"
                   ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attribute'], $context['attrValue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 153
            echo " /> ";
            // line 154
            echo "
            ";
            // line 155
            if (($context["icon"] ?? null)) {
                // line 156
                echo "            </div>
        ";
            }
            // line 158
            echo "    </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "Tab/RefundFacturaProveedor.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  384 => 158,  380 => 156,  378 => 155,  375 => 154,  373 => 153,  362 => 152,  358 => 151,  355 => 150,  351 => 148,  349 => 147,  339 => 146,  336 => 145,  329 => 141,  324 => 138,  322 => 137,  319 => 136,  301 => 135,  289 => 130,  280 => 127,  271 => 126,  267 => 125,  261 => 124,  258 => 123,  255 => 122,  242 => 120,  237 => 119,  234 => 118,  217 => 117,  212 => 134,  209 => 116,  200 => 110,  192 => 104,  179 => 99,  173 => 96,  167 => 93,  161 => 90,  157 => 88,  154 => 87,  150 => 86,  143 => 82,  139 => 81,  135 => 80,  131 => 79,  119 => 70,  109 => 63,  103 => 60,  96 => 56,  88 => 51,  84 => 50,  80 => 49,  74 => 46,  70 => 45,  47 => 24,  45 => 23,  42 => 22,  40 => 21,  38 => 20,);
    }

    public function getSourceContext()
    {
        return new Source("", "Tab/RefundFacturaProveedor.html.twig", "C:\\xampp2\\htdocs\\facturascripts\\facturasscripts\\Dinamic\\View\\Tab\\RefundFacturaProveedor.html.twig");
    }
}
