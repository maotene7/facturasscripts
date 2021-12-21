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

/* Tab/RefundFacturaCliente.html.twig */
class __TwigTemplate_a30e7bfe8bb52217a19b9f88411e90789f0df194438b9f3ecb825eca670a6a8b extends \Twig\Template
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
                <div class=\"col text-right\">
                    <div class=\"btn-group\">
                        <div class=\"dropdown\">
                            <button class=\"btn btn-sm btn-secondary dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                <i class=\"fas fa-check-square fa-fw\"></i> ";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "select"], "method", false, false, false, 55), "html", null, true);
            echo "
                            </button>
                            <div class=\"dropdown-menu dropdown-menu-right\">
                                <a class=\"dropdown-item\" href=\"#\" onClick=\"return refundNone();\">
                                    ";
            // line 59
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "select-none"], "method", false, false, false, 59), "html", null, true);
            echo "
                                </a>
                                <a class=\"dropdown-item\" href=\"#\" onClick=\"return refundAll();\">
                                    ";
            // line 62
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "select-all"], "method", false, false, false, 62), "html", null, true);
            echo "
                                </a>
                            </div>
                        </div>
                    </div>
                    &nbsp;
                    <button type=\"submit\" class=\"btn btn-sm btn-primary\">
                        <i class=\"fas fa-save fa-fw\" aria-hidden=\"true\"></i> ";
            // line 69
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "save"], "method", false, false, false, 69), "html", null, true);
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
            // line 78
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "product"], "method", false, false, false, 78), "html", null, true);
            echo "</th>
                        <th>";
            // line 79
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "description"], "method", false, false, false, 79), "html", null, true);
            echo "</th>
                        <th class=\"text-right\" width=\"200\">";
            // line 80
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "quantity"], "method", false, false, false, 80), "html", null, true);
            echo "</th>
                        <th class=\"text-right\" width=\"200\">";
            // line 81
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "new-refund"], "method", false, false, false, 81), "html", null, true);
            echo "</th>
                    </tr>
                </thead>
                <tbody>
                    ";
            // line 85
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["firstView"] ?? null), "model", [], "any", false, false, false, 85), "getLines", [], "method", false, false, false, 85));
            foreach ($context['_seq'] as $context["_key"] => $context["line"]) {
                // line 86
                echo "                        ";
                $context["refunded"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["firstView"] ?? null), "model", [], "any", false, false, false, 86), "refundedItemAmount", [0 => twig_get_attribute($this->env, $this->source, $context["line"], "referencia", [], "any", false, false, false, 86)], "method", false, false, false, 86);
                // line 87
                echo "                        <tr>
                            <td>
                                <input type=\"text\" class=\"form-control\" value=\"";
                // line 89
                echo twig_get_attribute($this->env, $this->source, $context["line"], "referencia", [], "any", false, false, false, 89);
                echo "\" readonly=\"true\" />
                            </td>
                            <td>
                                <textarea class=\"form-control\" rows=\"1\" readonly=\"true\">";
                // line 92
                echo twig_get_attribute($this->env, $this->source, $context["line"], "descripcion", [], "any", false, false, false, 92);
                echo "</textarea>
                            </td>
                            <td>
                                <div class=\"form-control text-right refundable\">";
                // line 95
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["line"], "cantidad", [], "any", false, false, false, 95), "html", null, true);
                echo "</div>
                            </td>
                            <td class=\"table-warning\">
                                <input type=\"number\" name=\"refund_";
                // line 98
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["line"], "primaryColumnValue", [], "method", false, false, false, 98), "html", null, true);
                echo "\" value=\"0\" min=\"0\" max=\"";
                echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["line"], "cantidad", [], "any", false, false, false, 98) - ($context["refunded"] ?? null)), "html", null, true);
                echo "\" step=\"any\"
                                       class=\"form-control text-right to_refund\" autocomplete=\"off\"/>
                            </td>
                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['line'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 103
            echo "                </tbody>
            </table>
        </div>
        <div class=\"container-fluid\">
            <div class=\"form-row\">
                <div class=\"col mb-2\">
                    <textarea name=\"observaciones\" class=\"form-control\" placeholder=\"";
            // line 109
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "observations"], "method", false, false, false, 109), "html", null, true);
            echo "\"></textarea>
                </div>
            </div>
        </div>
    </form>
";
        }
        // line 115
        echo "
";
        // line 133
        echo "
";
    }

    // line 116
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
            // line 117
            echo "    ";
            if ((($context["allowHide"] ?? null) && (twig_length_filter($this->env, ($context["allValues"] ?? null)) == 1))) {
                // line 118
                echo "        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["allValues"] ?? null));
                foreach ($context['_seq'] as $context["key"] => $context["option"]) {
                    // line 119
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
                // line 121
                echo "    ";
            } else {
                // line 122
                echo "        <div class=\"col-sm-2 mb-2\">
            <select id=\"";
                // line 123
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo "\" name=\"";
                echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
                echo "\" class=\"form-control\">
                ";
                // line 124
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["allValues"] ?? null));
                foreach ($context['_seq'] as $context["key"] => $context["option"]) {
                    // line 125
                    echo "                    <option value=\"";
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo "\"";
                    if ((($context["value"] ?? null) == $context["key"])) {
                        echo " selected=\"\"";
                    }
                    echo ">
                        ";
                    // line 126
                    echo twig_escape_filter($this->env, $context["option"], "html", null, true);
                    echo "
                    </option>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['option'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 129
                echo "            </select>
        </div>
    ";
            }

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 134
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
            // line 135
            echo "    <div class=\"col-sm-2 mb-2\">
        ";
            // line 136
            if (($context["icon"] ?? null)) {
                // line 137
                echo "            <div class=\"input-group\">
                <span class=\"input-group-prepend\">
                    <span class=\"input-group-text\">
                        <i class=\"";
                // line 140
                echo twig_escape_filter($this->env, ($context["icon"] ?? null), "html", null, true);
                echo " fa-fw\" aria-hidden=\"true\"></i>
                    </span>
                </span>
            ";
            }
            // line 144
            echo "
            <input type=\"";
            // line 145
            echo twig_escape_filter($this->env, ($context["type"] ?? null), "html", null, true);
            echo "\" id=\"";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "\" name=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
            echo "\"
                   ";
            // line 146
            if ( !twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "class", [], "any", true, true, false, 146)) {
                // line 147
                echo "                       class=\"form-control\"
                   ";
            }
            // line 149
            echo "
                   ";
            // line 150
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["attributes"] ?? null));
            foreach ($context['_seq'] as $context["attribute"] => $context["attrValue"]) {
                // line 151
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
            // line 152
            echo " /> ";
            // line 153
            echo "
            ";
            // line 154
            if (($context["icon"] ?? null)) {
                // line 155
                echo "            </div>
        ";
            }
            // line 157
            echo "    </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "Tab/RefundFacturaCliente.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  380 => 157,  376 => 155,  374 => 154,  371 => 153,  369 => 152,  358 => 151,  354 => 150,  351 => 149,  347 => 147,  345 => 146,  335 => 145,  332 => 144,  325 => 140,  320 => 137,  318 => 136,  315 => 135,  297 => 134,  285 => 129,  276 => 126,  267 => 125,  263 => 124,  257 => 123,  254 => 122,  251 => 121,  238 => 119,  233 => 118,  230 => 117,  213 => 116,  208 => 133,  205 => 115,  196 => 109,  188 => 103,  175 => 98,  169 => 95,  163 => 92,  157 => 89,  153 => 87,  150 => 86,  146 => 85,  139 => 81,  135 => 80,  131 => 79,  127 => 78,  115 => 69,  105 => 62,  99 => 59,  92 => 55,  84 => 50,  80 => 49,  74 => 46,  70 => 45,  47 => 24,  45 => 23,  42 => 22,  40 => 21,  38 => 20,);
    }

    public function getSourceContext()
    {
        return new Source("", "Tab/RefundFacturaCliente.html.twig", "C:\\xampp2\\htdocs\\facturascripts\\facturasscripts\\Dinamic\\View\\Tab\\RefundFacturaCliente.html.twig");
    }
}
