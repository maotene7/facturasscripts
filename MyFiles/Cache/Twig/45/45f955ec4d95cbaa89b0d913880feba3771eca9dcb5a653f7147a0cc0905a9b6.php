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

/* Master/BusinessDocumentView.html.twig */
class __TwigTemplate_494dff62505092ffbbba40e3f28f65a6235d88a9f010e679046d53150df56c3f extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'extras' => [$this, 'block_extras'],
        ];
        $macros["_self"] = $this->macros["_self"] = $this;
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 20
        $context["thisView"] = twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "getCurrentView", [], "method", false, false, false, 20);
        // line 21
        echo "
<script type=\"text/javascript\">
    businessDocViewLineData = ";
        // line 23
        echo twig_get_attribute($this->env, $this->source, ($context["thisView"] ?? null), "getLineData", [], "method", false, false, false, 23);
        echo ";
    businessDocViewFormName = \"form";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["thisView"] ?? null), "getViewName", [], "method", false, false, false, 24), "html", null, true);
        echo "\";
    businessDocViewUrl = \"";
        // line 25
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["thisView"] ?? null), "model", [], "any", false, false, false, 25), "url", [0 => "edit"], "method", false, false, false, 25);
        echo "\";
    function businessDocViewDelete(viewName) {
        bootbox.confirm({
            title: \"";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "confirm-delete"], "method", false, false, false, 28), "html", null, true);
        echo "\",
            message: \"";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "are-you-sure"], "method", false, false, false, 29), "html", null, true);
        echo "\",
            closeButton: false,
            buttons: {
                cancel: {
                    label: '<i class=\"fas fa-times\"></i> ";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "cancel"], "method", false, false, false, 33), "html", null, true);
        echo "'
                },
                confirm: {
                    label: '<i class=\"fas fa-check\"></i> ";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "confirm"], "method", false, false, false, 36), "html", null, true);
        echo "',
                    className: \"btn-danger\"
                }
            },
            callback: function (result) {
                if (result) {
                    \$(\"#form\" + viewName + \" :input[name=\\\"action\\\"]\").val(\"delete\");
                    \$(\"#form\" + viewName).submit();
                }
            }
        });

        return false;
    }
</script>

<form id=\"form";
        // line 52
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["thisView"] ?? null), "getViewName", [], "method", false, false, false, 52), "html", null, true);
        echo "\" action=\"#\" method=\"post\">
    <input type=\"hidden\" name=\"action\"/>
    <input type=\"hidden\" name=\"activetab\" value=\"";
        // line 54
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["thisView"] ?? null), "getViewName", [], "method", false, false, false, 54), "html", null, true);
        echo "\"/>
    <input type=\"hidden\" name=\"code\" value=\"";
        // line 55
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["thisView"] ?? null), "model", [], "any", false, false, false, 55), "primaryColumnValue", [], "method", false, false, false, 55), "html", null, true);
        echo "\"/>
    <input type=\"hidden\" name=\"";
        // line 56
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["thisView"] ?? null), "model", [], "any", false, false, false, 56), "primaryColumn", [], "method", false, false, false, 56), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["thisView"] ?? null), "model", [], "any", false, false, false, 56), "primaryColumnValue", [], "method", false, false, false, 56), "html", null, true);
        echo "\"/>
    <input type=\"hidden\" name=\"idestado\" value=\"";
        // line 57
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["thisView"] ?? null), "model", [], "any", false, false, false, 57), "idestado", [], "any", false, false, false, 57), "html", null, true);
        echo "\" id=\"doc_idestado\"/>
    <input type=\"hidden\" name=\"multireqtoken\" value=\"";
        // line 58
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "multiRequestProtection", [], "any", false, false, false, 58), "newToken", [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "user", [], "any", false, false, false, 58), "logkey", [], "any", false, false, false, 58)], "method", false, false, false, 58), "html", null, true);
        echo "\"/>
    <div class=\"";
        // line 59
        echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "settings", [], "any", false, false, false, 59), "card", [], "any", false, false, false, 59)) ? ("") : ("container-fluid"));
        echo "\">
        <div class=\"form-row\">
            ";
        // line 61
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["thisView"] ?? null), "model", [], "any", false, false, false, 61), "subjectColumn", [], "method", false, false, false, 61) == "codcliente")) {
            // line 62
            echo "                ";
            echo twig_call_macro($macros["_self"], "macro_customerSelect", [($context["i18n"] ?? null), "codcliente", "codcliente", twig_get_attribute($this->env, $this->source, ($context["thisView"] ?? null), "model", [], "any", false, false, false, 62), twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "getNewSubjectUrl", [], "method", false, false, false, 62)], 62, $context, $this->getSourceContext());
            echo "
            ";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 63
($context["thisView"] ?? null), "model", [], "any", false, false, false, 63), "subjectColumn", [], "method", false, false, false, 63) == "codproveedor")) {
            // line 64
            echo "                ";
            echo twig_call_macro($macros["_self"], "macro_supplierSelect", [($context["i18n"] ?? null), "codproveedor", "codproveedor", twig_get_attribute($this->env, $this->source, ($context["thisView"] ?? null), "model", [], "any", false, false, false, 64), twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "getNewSubjectUrl", [], "method", false, false, false, 64)], 64, $context, $this->getSourceContext());
            echo "
            ";
        }
        // line 66
        echo "            ";
        echo twig_call_macro($macros["_self"], "macro_customSelect", ["doc_codalmacen", "codalmacen", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["thisView"] ?? null), "model", [], "any", false, false, false, 66), "codalmacen", [], "any", false, false, false, 66), twig_get_attribute($this->env, $this->source, ($context["thisView"] ?? null), "getSelectValues", [0 => "Almacen"], "method", false, false, false, 66)], 66, $context, $this->getSourceContext());
        echo "
            ";
        // line 67
        echo twig_call_macro($macros["_self"], "macro_customSelect", ["doc_codserie", "codserie", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["thisView"] ?? null), "model", [], "any", false, false, false, 67), "codserie", [], "any", false, false, false, 67), twig_get_attribute($this->env, $this->source, ($context["thisView"] ?? null), "getSelectValues", [0 => "Serie"], "method", false, false, false, 67)], 67, $context, $this->getSourceContext());
        echo "
            ";
        // line 68
        echo twig_call_macro($macros["_self"], "macro_customInput", ["doc_fecha", "fecha", twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["thisView"] ?? null), "model", [], "any", false, false, false, 68), "fecha", [], "any", false, false, false, 68), "Y-m-d"), "date", "", ["class" => "form-control"]], 68, $context, $this->getSourceContext());
        echo "
            ";
        // line 69
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "getCustomFields", [], "method", false, false, false, 69));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 70
            echo "                ";
            echo twig_call_macro($macros["_self"], "macro_customInput", [("doc_" . twig_get_attribute($this->env, $this->source, $context["field"], "name", [], "any", false, false, false, 70)), twig_get_attribute($this->env, $this->source, $context["field"], "name", [], "any", false, false, false, 70), twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "getViewModelValue", [0 => twig_get_attribute($this->env, $this->source, ($context["thisView"] ?? null), "getViewName", [], "method", false, false, false, 70), 1 => twig_get_attribute($this->env, $this->source, $context["field"], "name", [], "any", false, false, false, 70)], "method", false, false, false, 70), "text", twig_get_attribute($this->env, $this->source,             // line 71
$context["field"], "icon", [], "any", false, false, false, 71), ["placeholder" => twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => twig_get_attribute($this->env, $this->source, $context["field"], "label", [], "any", false, false, false, 71)], "method", false, false, false, 71)]], 70, $context, $this->getSourceContext());
            echo "
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        echo "            ";
        echo twig_call_macro($macros["_self"], "macro_customSelect", ["doc_codpago", "codpago", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["thisView"] ?? null), "model", [], "any", false, false, false, 73), "codpago", [], "any", false, false, false, 73), twig_get_attribute($this->env, $this->source, ($context["thisView"] ?? null), "getSelectValues", [0 => "FormaPago"], "method", false, false, false, 73)], 73, $context, $this->getSourceContext());
        echo "
            ";
        // line 74
        echo twig_call_macro($macros["_self"], "macro_customSelect", ["doc_coddivisa", "coddivisa", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["thisView"] ?? null), "model", [], "any", false, false, false, 74), "coddivisa", [], "any", false, false, false, 74), twig_get_attribute($this->env, $this->source, ($context["thisView"] ?? null), "getSelectValues", [0 => "Divisa"], "method", false, false, false, 74)], 74, $context, $this->getSourceContext());
        echo "
            <div class=\"col-sm-3 col-md-2 col-lg mb-2\">
                <div class=\"input-group\">
                    <input type=\"text\" id=\"doc_total\" name=\"total\" value=\"";
        // line 77
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["thisView"] ?? null), "model", [], "any", false, false, false, 77), "total", [], "any", false, false, false, 77), "html", null, true);
        echo "\" class=\"form-control text-right\" disabled=\"\" />
                    <div class=\"input-group-append\">
                        ";
        // line 79
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["thisView"] ?? null), "settings", [], "any", false, false, false, 79), "btnSave", [], "any", false, false, false, 79)) {
            // line 80
            echo "                            <button type=\"button\" class=\"btn btn-primary\" onclick=\"businessDocViewSave();\">
                                <i class=\"fas fa-save\" aria-hidden=\"true\"></i>
                            </button>
                        ";
        }
        // line 84
        echo "                    </div>
                </div>
            </div>
            ";
        // line 87
        echo twig_call_macro($macros["_self"], "macro_statusSelect", [twig_get_attribute($this->env, $this->source, ($context["thisView"] ?? null), "model", [], "any", false, false, false, 87), ($context["thisView"] ?? null), ($context["i18n"] ?? null)], 87, $context, $this->getSourceContext());
        echo "
        </div>
        ";
        // line 89
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["thisView"] ?? null), "model", [], "any", false, false, false, 89), "exists", [], "method", false, false, false, 89)) {
            // line 90
            echo "            <div class=\"row\">
                ";
            // line 91
            echo twig_call_macro($macros["_self"], "macro_parentDocuments", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["thisView"] ?? null), "model", [], "any", false, false, false, 91), "parentDocuments", [], "method", false, false, false, 91), ($context["fsc"] ?? null), ($context["i18n"] ?? null)], 91, $context, $this->getSourceContext());
            echo "
                ";
            // line 92
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["thisView"] ?? null), "model", [], "any", false, false, false, 92), "femail", [], "any", false, false, false, 92)) {
                // line 93
                echo "                    <div class=\"col-sm\">
                        <div class=\"alert alert-info text-center\">
                            <i class=\"fas fa-envelope fa-fw\" aria-hidden=\"true\"></i> ";
                // line 95
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["thisView"] ?? null), "model", [], "any", false, false, false, 95), "femail", [], "any", false, false, false, 95), "html", null, true);
                echo "
                        </div>
                    </div>
                ";
            }
            // line 99
            echo "                ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["thisView"] ?? null), "model", [], "any", false, false, false, 99), "paid", [], "method", false, false, false, 99)) {
                // line 100
                echo "                    <div class=\"col-sm\">
                        <div class=\"alert alert-success text-center\">
                            <i class=\"fas fa-check fa-fw\" aria-hidden=\"true\"></i> ";
                // line 102
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "paid"], "method", false, false, false, 102), "html", null, true);
                echo "
                        </div>
                    </div>
                ";
            }
            // line 106
            echo "                ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["thisView"] ?? null), "model", [], "any", false, false, false, 106), "editable", [], "any", false, false, false, 106) == false)) {
                // line 107
                echo "                    <div class=\"col-sm\">
                        <div class=\"alert alert-danger text-center\">
                            <i class=\"fas fa-lock fa-fw\"></i> ";
                // line 109
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "non-editable-document"], "method", false, false, false, 109), "html", null, true);
                echo "
                        </div>
                    </div>
                ";
            }
            // line 113
            echo "                ";
            echo twig_call_macro($macros["_self"], "macro_childrenDocuments", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["thisView"] ?? null), "model", [], "any", false, false, false, 113), "childrenDocuments", [], "method", false, false, false, 113), ($context["fsc"] ?? null), ($context["i18n"] ?? null)], 113, $context, $this->getSourceContext());
            echo "
            </div>
        ";
        }
        // line 116
        echo "        <div id=\"document-lines\"></div>
        <div class=\"form-row mt-2\">
            <div class=\"col-sm-12\">
                <p class=\"text-center text-muted\">
                    ";
        // line 120
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "grid-help"], "method", false, false, false, 120), "html", null, true);
        echo "
                    ";
        // line 121
        if ((twig_get_attribute($this->env, $this->source, ($context["thisView"] ?? null), "getMaxLines", [], "method", false, false, false, 121) < 200)) {
            // line 122
            echo "                        <span class=\"text-danger\">
                            ";
            // line 123
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "max-input-vars-warning", 1 => ["%numlines%" => twig_get_attribute($this->env, $this->source, ($context["thisView"] ?? null), "getMaxLines", [], "method", false, false, false, 123)]], "method", false, false, false, 123), "html", null, true);
            echo "
                        </span>
                    ";
        }
        // line 126
        echo "                </p>
            </div>
            ";
        // line 128
        echo twig_call_macro($macros["_self"], "macro_customInput", ["doc_netosindto", "netosindto", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["thisView"] ?? null), "model", [], "any", false, false, false, 128), "netosindto", [], "any", false, false, false, 128), "text", "", ["class" => "form-control", "disabled" => ""], twig_get_attribute($this->env, $this->source,         // line 129
($context["i18n"] ?? null), "trans", [0 => "subtotal"], "method", false, false, false, 129)], 128, $context, $this->getSourceContext());
        echo "
            ";
        // line 130
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["thisView"] ?? null), "model", [], "any", false, false, false, 130), "editable", [], "any", false, false, false, 130)) {
            // line 131
            echo "                ";
            echo twig_call_macro($macros["_self"], "macro_customInput", ["doc_dtopor1", "dtopor1", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["thisView"] ?? null), "model", [], "any", false, false, false, 131), "dtopor1", [], "any", false, false, false, 131), "number", "fas fa-percentage", ["class" => "form-control"], twig_get_attribute($this->env, $this->source,             // line 132
($context["i18n"] ?? null), "trans", [0 => "global-dto"], "method", false, false, false, 132)], 131, $context, $this->getSourceContext());
            echo "
                ";
            // line 133
            echo twig_call_macro($macros["_self"], "macro_customInput", ["doc_dtopor2", "dtopor2", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["thisView"] ?? null), "model", [], "any", false, false, false, 133), "dtopor2", [], "any", false, false, false, 133), "number", "fas fa-percentage", ["class" => "form-control"], twig_get_attribute($this->env, $this->source,             // line 134
($context["i18n"] ?? null), "trans", [0 => "global-dto-2"], "method", false, false, false, 134)], 133, $context, $this->getSourceContext());
            echo "
            ";
        } else {
            // line 136
            echo "                ";
            echo twig_call_macro($macros["_self"], "macro_customInput", ["doc_dtopor1", "dtopor1", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["thisView"] ?? null), "model", [], "any", false, false, false, 136), "dtopor1", [], "any", false, false, false, 136), "number", "fas fa-percentage", ["class" => "form-control", "disabled" => ""], twig_get_attribute($this->env, $this->source,             // line 137
($context["i18n"] ?? null), "trans", [0 => "global-dto"], "method", false, false, false, 137)], 136, $context, $this->getSourceContext());
            echo "
                ";
            // line 138
            echo twig_call_macro($macros["_self"], "macro_customInput", ["doc_dtopor2", "dtopor2", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["thisView"] ?? null), "model", [], "any", false, false, false, 138), "dtopor2", [], "any", false, false, false, 138), "number", "fas fa-percentage", ["class" => "form-control", "disabled" => ""], twig_get_attribute($this->env, $this->source,             // line 139
($context["i18n"] ?? null), "trans", [0 => "global-dto-2"], "method", false, false, false, 139)], 138, $context, $this->getSourceContext());
            echo "
            ";
        }
        // line 141
        echo "            ";
        echo twig_call_macro($macros["_self"], "macro_customInput", ["doc_neto", "neto", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["thisView"] ?? null), "model", [], "any", false, false, false, 141), "neto", [], "any", false, false, false, 141), "text", "", ["class" => "form-control", "disabled" => ""], twig_get_attribute($this->env, $this->source,         // line 142
($context["i18n"] ?? null), "trans", [0 => "net"], "method", false, false, false, 142)], 141, $context, $this->getSourceContext());
        echo "
            ";
        // line 143
        echo twig_call_macro($macros["_self"], "macro_customInput", ["doc_totaliva", "totaliva", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["thisView"] ?? null), "model", [], "any", false, false, false, 143), "totaliva", [], "any", false, false, false, 143), "text", "", ["class" => "form-control", "disabled" => ""], twig_get_attribute($this->env, $this->source,         // line 144
($context["i18n"] ?? null), "trans", [0 => "taxes"], "method", false, false, false, 144)], 143, $context, $this->getSourceContext());
        echo "
            ";
        // line 145
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["thisView"] ?? null), "model", [], "any", false, false, false, 145), "totalrecargo", [], "any", false, false, false, 145) != 0)) {
            // line 146
            echo "                ";
            echo twig_call_macro($macros["_self"], "macro_customInput", ["doc_totalrecargo", "totalrecargo", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["thisView"] ?? null), "model", [], "any", false, false, false, 146), "totalrecargo", [], "any", false, false, false, 146), "text", "", ["class" => "form-control", "disabled" => ""], twig_get_attribute($this->env, $this->source,             // line 147
($context["i18n"] ?? null), "trans", [0 => "re"], "method", false, false, false, 147)], 146, $context, $this->getSourceContext());
            echo "
            ";
        }
        // line 149
        echo "            ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["thisView"] ?? null), "model", [], "any", false, false, false, 149), "totalirpf", [], "any", false, false, false, 149) != 0)) {
            // line 150
            echo "                ";
            echo twig_call_macro($macros["_self"], "macro_customInput", ["doc_totalirpf", "totalirpf", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["thisView"] ?? null), "model", [], "any", false, false, false, 150), "totalirpf", [], "any", false, false, false, 150), "text", "", ["class" => "form-control", "disabled" => ""], twig_get_attribute($this->env, $this->source,             // line 151
($context["i18n"] ?? null), "trans", [0 => "irpf"], "method", false, false, false, 151)], 150, $context, $this->getSourceContext());
            echo "
            ";
        }
        // line 153
        echo "            ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["thisView"] ?? null), "model", [], "any", false, false, false, 153), "totalsuplidos", [], "any", false, false, false, 153) != 0)) {
            // line 154
            echo "                ";
            echo twig_call_macro($macros["_self"], "macro_customInput", ["doc_totalsuplidos", "totalsuplidos", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["thisView"] ?? null), "model", [], "any", false, false, false, 154), "totalsuplidos", [], "any", false, false, false, 154), "text", "", ["class" => "form-control", "disabled" => ""], twig_get_attribute($this->env, $this->source,             // line 155
($context["i18n"] ?? null), "trans", [0 => "supplied-amount"], "method", false, false, false, 155)], 154, $context, $this->getSourceContext());
            echo "
            ";
        }
        // line 157
        echo "            ";
        echo twig_call_macro($macros["_self"], "macro_customInput", ["doc_total2", "total", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["thisView"] ?? null), "model", [], "any", false, false, false, 157), "total", [], "any", false, false, false, 157), "text", "", ["class" => "form-control", "disabled" => ""], twig_get_attribute($this->env, $this->source,         // line 158
($context["i18n"] ?? null), "trans", [0 => "total"], "method", false, false, false, 158)], 157, $context, $this->getSourceContext());
        echo "
        </div>
        <div class=\"form-row mb-2\">
            ";
        // line 161
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["thisView"] ?? null), "getRow", [0 => "business"], "method", false, false, false, 161), "edit", [0 => twig_get_attribute($this->env, $this->source, ($context["thisView"] ?? null), "model", [], "any", false, false, false, 161)], "method", false, false, false, 161);
        echo "
        </div>
        <div class=\"form-row\">
            <div class=\"col\">
                ";
        // line 165
        if ((twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "hasData", [], "any", false, false, false, 165) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["thisView"] ?? null), "settings", [], "any", false, false, false, 165), "btnDelete", [], "any", false, false, false, 165))) {
            // line 166
            echo "                    <button type=\"button\" class=\"btn btn-sm btn-danger\" onclick=\"businessDocViewDelete('";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["thisView"] ?? null), "getViewName", [], "method", false, false, false, 166), "html", null, true);
            echo "');\">
                        <i class=\"fas fa-trash-alt fa-fw\" aria-hidden=\"true\"></i>
                        <span class=\"d-none d-sm-inline-block\">";
            // line 168
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "delete"], "method", false, false, false, 168), "html", null, true);
            echo "</span>
                    </button>
                ";
        }
        // line 171
        echo "            </div>
            <div class=\"col text-center\">
                ";
        // line 173
        $this->displayBlock('extras', $context, $blocks);
        // line 176
        echo "            </div>
            <div class=\"col text-right\">
                ";
        // line 178
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["thisView"] ?? null), "settings", [], "any", false, false, false, 178), "btnUndo", [], "any", false, false, false, 178)) {
            // line 179
            echo "                    <a class=\"btn btn-sm btn-secondary\" href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["thisView"] ?? null), "model", [], "any", false, false, false, 179), "url", [], "method", false, false, false, 179), "html", null, true);
            echo "\">
                        <i class=\"fas fa-undo fa-fw\" aria-hidden=\"true\"></i>
                        <span class=\"d-none d-sm-inline-block\">";
            // line 181
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "undo"], "method", false, false, false, 181), "html", null, true);
            echo "</span>
                    </a>
                ";
        }
        // line 184
        echo "                ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["thisView"] ?? null), "settings", [], "any", false, false, false, 184), "btnSave", [], "any", false, false, false, 184)) {
            // line 185
            echo "                    <button type=\"button\" class=\"btn btn-sm btn-primary\" onclick=\"businessDocViewSave();\">
                        <i class=\"fas fa-save fa-fw\" aria-hidden=\"true\"></i> ";
            // line 186
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "save"], "method", false, false, false, 186), "html", null, true);
            echo "
                    </button>
                ";
        }
        // line 189
        echo "            </div>
        </div>
    </div>
</form>

";
        // line 212
        echo "
";
        // line 239
        echo "
";
        // line 262
        echo "
";
        // line 285
        echo "
";
        // line 328
        echo "
";
        // line 381
        echo "
";
    }

    // line 173
    public function block_extras($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 174
        echo "                    ";
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["thisView"] ?? null), "getRow", [0 => "actions"], "method", false, false, false, 174), "render", [0 => false, 1 => twig_get_attribute($this->env, $this->source, ($context["thisView"] ?? null), "getViewName", [], "method", false, false, false, 174)], "method", false, false, false, 174);
        echo "
                ";
    }

    // line 194
    public function macro_customSelect($__id__ = null, $__name__ = null, $__value__ = null, $__allValues__ = [], $__allowHide__ = true, $__label__ = "", ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "id" => $__id__,
            "name" => $__name__,
            "value" => $__value__,
            "allValues" => $__allValues__,
            "allowHide" => $__allowHide__,
            "label" => $__label__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 195
            echo "    ";
            if ((($context["allowHide"] ?? null) && (twig_length_filter($this->env, ($context["allValues"] ?? null)) == 1))) {
                // line 196
                echo "        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["allValues"] ?? null));
                foreach ($context['_seq'] as $context["key"] => $context["option"]) {
                    // line 197
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
                // line 199
                echo "    ";
            } else {
                // line 200
                echo "        <div class=\"col-sm-3 col-md-2 col-lg mb-2\">
            ";
                // line 201
                echo twig_escape_filter($this->env, ($context["label"] ?? null), "html", null, true);
                echo "
            <select id=\"";
                // line 202
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo "\" name=\"";
                echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
                echo "\" class=\"form-control\">
                ";
                // line 203
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["allValues"] ?? null));
                foreach ($context['_seq'] as $context["key"] => $context["option"]) {
                    // line 204
                    echo "                    <option value=\"";
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo "\"";
                    if ((($context["value"] ?? null) == $context["key"])) {
                        echo " selected=\"\"";
                    }
                    echo ">
                        ";
                    // line 205
                    echo $context["option"];
                    echo "
                    </option>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['option'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 208
                echo "            </select>
        </div>
    ";
            }

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 213
    public function macro_customInput($__id__ = null, $__name__ = null, $__value__ = null, $__type__ = "text", $__icon__ = null, $__attributes__ = null, $__label__ = "", ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "id" => $__id__,
            "name" => $__name__,
            "value" => $__value__,
            "type" => $__type__,
            "icon" => $__icon__,
            "attributes" => $__attributes__,
            "label" => $__label__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 214
            echo "    <div class=\"col-sm-3 col-md-2 col-lg mb-2\">
        ";
            // line 215
            echo twig_escape_filter($this->env, ($context["label"] ?? null), "html", null, true);
            echo "
        ";
            // line 216
            if (($context["icon"] ?? null)) {
                // line 217
                echo "            <div class=\"input-group\">
                <span class=\"input-group-prepend\">
                    <span class=\"input-group-text\">
                        <i class=\"";
                // line 220
                echo twig_escape_filter($this->env, ($context["icon"] ?? null), "html", null, true);
                echo " fa-fw\" aria-hidden=\"true\"></i>
                    </span>
                </span>
            ";
            }
            // line 224
            echo "
            <input type=\"";
            // line 225
            echo twig_escape_filter($this->env, ($context["type"] ?? null), "html", null, true);
            echo "\" id=\"";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "\" name=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" value=\"";
            echo ($context["value"] ?? null);
            echo "\" autocomplete=\"off\"
                   ";
            // line 226
            if ( !twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "class", [], "any", true, true, false, 226)) {
                // line 227
                echo "                       class=\"form-control\"
                   ";
            }
            // line 229
            echo "
                   ";
            // line 230
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["attributes"] ?? null));
            foreach ($context['_seq'] as $context["attribute"] => $context["attrValue"]) {
                // line 231
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
            // line 232
            echo " /> ";
            // line 233
            echo "
            ";
            // line 234
            if (($context["icon"] ?? null)) {
                // line 235
                echo "            </div>
        ";
            }
            // line 237
            echo "    </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 240
    public function macro_customerSelect($__i18n__ = null, $__id__ = null, $__name__ = null, $__model__ = null, $__newUrl__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "i18n" => $__i18n__,
            "id" => $__id__,
            "name" => $__name__,
            "model" => $__model__,
            "newUrl" => $__newUrl__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 241
            echo "    <div class=\"col-sm-3 col-md-2 col-lg mb-2\">
        <div class=\"input-group\">
            <span class=\"input-group-prepend\">
                ";
            // line 244
            if (twig_get_attribute($this->env, $this->source, ($context["model"] ?? null), "codcliente", [], "any", false, false, false, 244)) {
                // line 245
                echo "                    <a href=\"EditCliente?code=";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["model"] ?? null), "codcliente", [], "any", false, false, false, 245), "html", null, true);
                echo "\" target=\"_blank\" class=\"btn btn-info\">
                        <i class=\"fas fa-user-cog fa-fw\" aria-hidden=\"true\"></i>
                    </a>
                ";
            } else {
                // line 249
                echo "                    <a href=\"";
                echo twig_escape_filter($this->env, ($context["newUrl"] ?? null), "html", null, true);
                echo "\" class=\"btn btn-success\" title=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "new-customer"], "method", false, false, false, 249), "html", null, true);
                echo "\">
                        <i class=\"fas fa-user-plus fa-fw\" aria-hidden=\"true\"></i>
                    </a>
                ";
            }
            // line 253
            echo "            </span>
            <input type=\"hidden\" id=\"";
            // line 254
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "Autocomplete\" name=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["model"] ?? null), "codcliente", [], "any", false, false, false, 254), "html", null, true);
            echo "\"/>
            ";
            // line 255
            $context["autofocus"] = ((twig_get_attribute($this->env, $this->source, ($context["model"] ?? null), "codcliente", [], "any", false, false, false, 255)) ? ("") : ("autofocus=\"\""));
            // line 256
            echo "            <input type=\"text\" id=\"";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "\" value=\"";
            echo twig_get_attribute($this->env, $this->source, ($context["model"] ?? null), "nombrecliente", [], "any", false, false, false, 256);
            echo "\" class=\"form-control autocomplete-dc\"
                   data-field=\"";
            // line 257
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "\" data-source=\"Cliente\" data-fieldcode=\"codcliente\" data-fieldtitle=\"nombre\"
                   placeholder=\"";
            // line 258
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "customer"], "method", false, false, false, 258), "html", null, true);
            echo "\" ";
            echo twig_escape_filter($this->env, ($context["autofocus"] ?? null), "html", null, true);
            echo " autocomplete=\"off\"/>
        </div>
    </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 263
    public function macro_supplierSelect($__i18n__ = null, $__id__ = null, $__name__ = null, $__model__ = null, $__newUrl__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "i18n" => $__i18n__,
            "id" => $__id__,
            "name" => $__name__,
            "model" => $__model__,
            "newUrl" => $__newUrl__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 264
            echo "    <div class=\"col-sm-3 col-md-2 col-lg mb-2\">
        <div class=\"input-group\">
            <span class=\"input-group-prepend\">
                ";
            // line 267
            if (twig_get_attribute($this->env, $this->source, ($context["model"] ?? null), "codproveedor", [], "any", false, false, false, 267)) {
                // line 268
                echo "                    <a href=\"EditProveedor?code=";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["model"] ?? null), "codproveedor", [], "any", false, false, false, 268), "html", null, true);
                echo "\" target=\"_blank\" class=\"btn btn-info\">
                        <i class=\"fas fa-user-cog fa-fw\" aria-hidden=\"true\"></i>
                    </a>
                ";
            } else {
                // line 272
                echo "                    <a href=\"";
                echo twig_escape_filter($this->env, ($context["newUrl"] ?? null), "html", null, true);
                echo "\" class=\"btn btn-success\" title=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "new-supplier"], "method", false, false, false, 272), "html", null, true);
                echo "\">
                        <i class=\"fas fa-user-plus fa-fw\" aria-hidden=\"true\"></i>
                    </a>
                ";
            }
            // line 276
            echo "            </span>
            <input type=\"hidden\" id=\"";
            // line 277
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "Autocomplete\" name=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["model"] ?? null), "codproveedor", [], "any", false, false, false, 277), "html", null, true);
            echo "\"/>
            ";
            // line 278
            $context["autofocus"] = ((twig_get_attribute($this->env, $this->source, ($context["model"] ?? null), "codproveedor", [], "any", false, false, false, 278)) ? ("") : ("autofocus=\"\""));
            // line 279
            echo "            <input type=\"text\" id=\"";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "\" value=\"";
            echo twig_get_attribute($this->env, $this->source, ($context["model"] ?? null), "nombre", [], "any", false, false, false, 279);
            echo "\" class=\"form-control autocomplete-dc\"
                   data-field=\"";
            // line 280
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "\" data-source=\"Proveedor\" data-fieldcode=\"codproveedor\" data-fieldtitle=\"nombre\"
                   placeholder=\"";
            // line 281
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "supplier"], "method", false, false, false, 281), "html", null, true);
            echo "\" ";
            echo twig_escape_filter($this->env, ($context["autofocus"] ?? null), "html", null, true);
            echo " autocomplete=\"off\"/>
        </div>
    </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 286
    public function macro_statusSelect($__model__ = null, $__view__ = null, $__i18n__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "model" => $__model__,
            "view" => $__view__,
            "i18n" => $__i18n__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 287
            echo "    ";
            $context["status"] = twig_get_attribute($this->env, $this->source, ($context["model"] ?? null), "getStatus", [], "method", false, false, false, 287);
            // line 288
            echo "    ";
            if ((twig_get_attribute($this->env, $this->source, ($context["model"] ?? null), "exists", [], "method", false, false, false, 288) == false)) {
                // line 289
                echo "    ";
            } elseif (twig_get_attribute($this->env, $this->source, ($context["status"] ?? null), "generadoc", [], "any", false, false, false, 289)) {
                // line 290
                echo "        <div class=\"col mb-2\">
            <button class=\"btn btn-block btn-secondary\" type=\"button\">
                <i class=\"";
                // line 292
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["status"] ?? null), "icon", [], "method", false, false, false, 292), "html", null, true);
                echo " fa-fw\" aria-hidden=\"true\"></i> ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["status"] ?? null), "nombre", [], "any", false, false, false, 292), "html", null, true);
                echo "
            </button>
        </div>
    ";
            } else {
                // line 296
                echo "        <div class=\"col mb-2\">
            <div class=\"dropdown\">
                <button class=\"btn btn-block btn-secondary dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                    <i class=\"";
                // line 299
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["status"] ?? null), "icon", [], "method", false, false, false, 299), "html", null, true);
                echo " fa-fw\" aria-hidden=\"true\"></i> ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["status"] ?? null), "nombre", [], "any", false, false, false, 299), "html", null, true);
                echo "
                </button>
                <div class=\"dropdown-menu dropdown-menu-right\">
                    ";
                // line 302
                $context["showDocumentStitcher"] = false;
                // line 303
                echo "                    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["view"] ?? null), "documentStatus", [], "any", false, false, false, 303));
                foreach ($context['_seq'] as $context["_key"] => $context["status"]) {
                    // line 304
                    echo "                        ";
                    if ((twig_get_attribute($this->env, $this->source, ($context["model"] ?? null), "idestado", [], "any", false, false, false, 304) == twig_get_attribute($this->env, $this->source, $context["status"], "idestado", [], "any", false, false, false, 304))) {
                        // line 305
                        echo "                            <a class=\"dropdown-item active\" href=\"#\">
                                <i class=\"";
                        // line 306
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["status"], "icon", [], "method", false, false, false, 306), "html", null, true);
                        echo " fa-fw\" aria-hidden=\"true\"></i> ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["status"], "nombre", [], "any", false, false, false, 306), "html", null, true);
                        echo "
                            </a>
                        ";
                    } else {
                        // line 309
                        echo "                            <a class=\"dropdown-item\" href=\"#\" onclick=\"\$('#doc_idestado').val('";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["status"], "idestado", [], "any", false, false, false, 309), "html", null, true);
                        echo "'); businessDocViewSave();\">
                                ";
                        // line 310
                        if (twig_get_attribute($this->env, $this->source, $context["status"], "generadoc", [], "any", false, false, false, 310)) {
                            // line 311
                            echo "                                    ";
                            $context["showDocumentStitcher"] = true;
                            // line 312
                            echo "                                ";
                        }
                        // line 313
                        echo "                                <i class=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["status"], "icon", [], "method", false, false, false, 313), "html", null, true);
                        echo " fa-fw\" aria-hidden=\"true\"></i> ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["status"], "nombre", [], "any", false, false, false, 313), "html", null, true);
                        echo "
                            </a>
                        ";
                    }
                    // line 316
                    echo "                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['status'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 317
                echo "                    ";
                if ((twig_get_attribute($this->env, $this->source, ($context["model"] ?? null), "exists", [], "method", false, false, false, 317) && ($context["showDocumentStitcher"] ?? null))) {
                    // line 318
                    echo "                        <div class=\"dropdown-divider\"></div>
                        <a class=\"dropdown-item\" href=\"DocumentStitcher?model=";
                    // line 319
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["model"] ?? null), "modelClassName", [], "method", false, false, false, 319), "html", null, true);
                    echo "&codes=";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["model"] ?? null), "primaryColumnValue", [], "method", false, false, false, 319), "html", null, true);
                    echo "\">
                            <i class=\"fas fa-magic fa-fw\" aria-hidden=\"true\"></i> ";
                    // line 320
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "group-or-split"], "method", false, false, false, 320), "html", null, true);
                    echo "
                        </a>
                    ";
                }
                // line 323
                echo "                </div>
            </div>
        </div>
    ";
            }

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 329
    public function macro_parentDocuments($__relatedDocuments__ = null, $__fsc__ = null, $__i18n__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "relatedDocuments" => $__relatedDocuments__,
            "fsc" => $__fsc__,
            "i18n" => $__i18n__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 330
            echo "    ";
            if ((twig_length_filter($this->env, ($context["relatedDocuments"] ?? null)) > 2)) {
                // line 331
                echo "        <div class=\"col-sm\">
            <div class=\"alert alert-warning text-center\">
                <i class=\"fas fa-backward fa-fw\" aria-hidden=\"true\"></i>
                <a href=\"#\" data-toggle=\"modal\" data-target=\"#parentsModal\">";
                // line 334
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "previous-documents"], "method", false, false, false, 334), "html", null, true);
                echo "</a>
            </div>
        </div>
        <div class=\"modal fade\" id=\"parentsModal\" tabindex=\"-1\" role=\"dialog\">
            <div class=\"modal-dialog modal-lg\" role=\"document\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <h5 class=\"modal-title\">
                            <i class=\"fas fa-backward fa-fw\" aria-hidden=\"true\"></i>
                            ";
                // line 343
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "previous-documents"], "method", false, false, false, 343), "html", null, true);
                echo "
                        </h5>
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                            <span aria-hidden=\"true\">&times;</span>
                        </button>
                    </div>
                    <div class=\"table-responsive\">
                        <table class=\"table table-hover mb-0\">
                            <tbody>
                                ";
                // line 352
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["relatedDocuments"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["doc"]) {
                    // line 353
                    echo "                                    <tr>
                                        <td>
                                            <a href=\"";
                    // line 355
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["doc"], "url", [], "method", false, false, false, 355), "html", null, true);
                    echo "\">
                                                ";
                    // line 356
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => twig_get_attribute($this->env, $this->source, $context["doc"], "modelClassName", [], "method", false, false, false, 356)], "method", false, false, false, 356), "html", null, true);
                    echo "
                                                ";
                    // line 357
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["doc"], "primaryDescription", [], "method", false, false, false, 357), "html", null, true);
                    echo "
                                            </a>
                                        </td>
                                        <td class=\"text-right\">";
                    // line 360
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "toolBox", [], "method", false, false, false, 360), "coins", [], "method", false, false, false, 360), "format", [0 => twig_get_attribute($this->env, $this->source, $context["doc"], "total", [], "any", false, false, false, 360)], "method", false, false, false, 360), "html", null, true);
                    echo "</td>
                                        <td class=\"text-right\">";
                    // line 361
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["doc"], "fecha", [], "any", false, false, false, 361), "html", null, true);
                    echo "</td>
                                    </tr>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['doc'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 364
                echo "                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    ";
            } else {
                // line 371
                echo "        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["relatedDocuments"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["relatedDoc"]) {
                    // line 372
                    echo "            <div class=\"col-sm\">
                <div class=\"alert alert-warning text-center\">
                    <i class=\"fas fa-backward fa-fw\" aria-hidden=\"true\"></i> ";
                    // line 374
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => twig_get_attribute($this->env, $this->source, $context["relatedDoc"], "modelClassName", [], "method", false, false, false, 374)], "method", false, false, false, 374), "html", null, true);
                    echo "
                    <a href=\"";
                    // line 375
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["relatedDoc"], "url", [], "method", false, false, false, 375), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["relatedDoc"], "primaryDescription", [], "method", false, false, false, 375), "html", null, true);
                    echo "</a>
                </div>
            </div>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['relatedDoc'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 379
                echo "    ";
            }

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 382
    public function macro_childrenDocuments($__relatedDocuments__ = null, $__fsc__ = null, $__i18n__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "relatedDocuments" => $__relatedDocuments__,
            "fsc" => $__fsc__,
            "i18n" => $__i18n__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 383
            echo "    ";
            if ((twig_length_filter($this->env, ($context["relatedDocuments"] ?? null)) > 2)) {
                // line 384
                echo "        <div class=\"col-sm\">
            <div class=\"alert alert-success text-center\">
                <i class=\"fas fa-forward fa-fw\" aria-hidden=\"true\"></i>
                <a href=\"#\" data-toggle=\"modal\" data-target=\"#childrenModal\">";
                // line 387
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "documents-generated"], "method", false, false, false, 387), "html", null, true);
                echo "</a>
            </div>
        </div>
        <div class=\"modal fade\" id=\"childrenModal\" tabindex=\"-1\" role=\"dialog\">
            <div class=\"modal-dialog modal-lg\" role=\"document\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <h5 class=\"modal-title\">
                            <i class=\"fas fa-forward fa-fw\" aria-hidden=\"true\"></i>
                            ";
                // line 396
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "documents-generated"], "method", false, false, false, 396), "html", null, true);
                echo "
                        </h5>
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                            <span aria-hidden=\"true\">&times;</span>
                        </button>
                    </div>
                    <div class=\"table-responsive\">
                        <table class=\"table table-hover mb-0\">
                            <tbody>
                                ";
                // line 405
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["relatedDocuments"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["doc"]) {
                    // line 406
                    echo "                                    <tr>
                                        <td>
                                            <a href=\"";
                    // line 408
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["doc"], "url", [], "method", false, false, false, 408), "html", null, true);
                    echo "\">
                                                ";
                    // line 409
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => twig_get_attribute($this->env, $this->source, $context["doc"], "modelClassName", [], "method", false, false, false, 409)], "method", false, false, false, 409), "html", null, true);
                    echo "
                                                ";
                    // line 410
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["doc"], "primaryDescription", [], "method", false, false, false, 410), "html", null, true);
                    echo "
                                            </a>
                                        </td>
                                        <td class=\"text-right\">";
                    // line 413
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "toolBox", [], "method", false, false, false, 413), "coins", [], "method", false, false, false, 413), "format", [0 => twig_get_attribute($this->env, $this->source, $context["doc"], "total", [], "any", false, false, false, 413)], "method", false, false, false, 413), "html", null, true);
                    echo "</td>
                                        <td class=\"text-right\">";
                    // line 414
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["doc"], "fecha", [], "any", false, false, false, 414), "html", null, true);
                    echo "</td>
                                    </tr>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['doc'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 417
                echo "                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    ";
            } else {
                // line 424
                echo "        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["relatedDocuments"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["relatedDoc"]) {
                    // line 425
                    echo "            <div class=\"col-sm\">
                <div class=\"alert alert-success text-center\">
                    <i class=\"fas fa-forward fa-fw\" aria-hidden=\"true\"></i> ";
                    // line 427
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => twig_get_attribute($this->env, $this->source, $context["relatedDoc"], "modelClassName", [], "method", false, false, false, 427)], "method", false, false, false, 427), "html", null, true);
                    echo "
                    <a href=\"";
                    // line 428
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["relatedDoc"], "url", [], "method", false, false, false, 428), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["relatedDoc"], "primaryDescription", [], "method", false, false, false, 428), "html", null, true);
                    echo "</a>
                </div>
            </div>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['relatedDoc'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 432
                echo "    ";
            }

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "Master/BusinessDocumentView.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1180 => 432,  1168 => 428,  1164 => 427,  1160 => 425,  1155 => 424,  1146 => 417,  1137 => 414,  1133 => 413,  1127 => 410,  1123 => 409,  1119 => 408,  1115 => 406,  1111 => 405,  1099 => 396,  1087 => 387,  1082 => 384,  1079 => 383,  1064 => 382,  1054 => 379,  1042 => 375,  1038 => 374,  1034 => 372,  1029 => 371,  1020 => 364,  1011 => 361,  1007 => 360,  1001 => 357,  997 => 356,  993 => 355,  989 => 353,  985 => 352,  973 => 343,  961 => 334,  956 => 331,  953 => 330,  938 => 329,  925 => 323,  919 => 320,  913 => 319,  910 => 318,  907 => 317,  901 => 316,  892 => 313,  889 => 312,  886 => 311,  884 => 310,  879 => 309,  871 => 306,  868 => 305,  865 => 304,  860 => 303,  858 => 302,  850 => 299,  845 => 296,  836 => 292,  832 => 290,  829 => 289,  826 => 288,  823 => 287,  808 => 286,  793 => 281,  789 => 280,  782 => 279,  780 => 278,  772 => 277,  769 => 276,  759 => 272,  751 => 268,  749 => 267,  744 => 264,  727 => 263,  712 => 258,  708 => 257,  701 => 256,  699 => 255,  691 => 254,  688 => 253,  678 => 249,  670 => 245,  668 => 244,  663 => 241,  646 => 240,  636 => 237,  632 => 235,  630 => 234,  627 => 233,  625 => 232,  614 => 231,  610 => 230,  607 => 229,  603 => 227,  601 => 226,  591 => 225,  588 => 224,  581 => 220,  576 => 217,  574 => 216,  570 => 215,  567 => 214,  548 => 213,  536 => 208,  527 => 205,  518 => 204,  514 => 203,  508 => 202,  504 => 201,  501 => 200,  498 => 199,  485 => 197,  480 => 196,  477 => 195,  459 => 194,  452 => 174,  448 => 173,  443 => 381,  440 => 328,  437 => 285,  434 => 262,  431 => 239,  428 => 212,  421 => 189,  415 => 186,  412 => 185,  409 => 184,  403 => 181,  397 => 179,  395 => 178,  391 => 176,  389 => 173,  385 => 171,  379 => 168,  373 => 166,  371 => 165,  364 => 161,  358 => 158,  356 => 157,  351 => 155,  349 => 154,  346 => 153,  341 => 151,  339 => 150,  336 => 149,  331 => 147,  329 => 146,  327 => 145,  323 => 144,  322 => 143,  318 => 142,  316 => 141,  311 => 139,  310 => 138,  306 => 137,  304 => 136,  299 => 134,  298 => 133,  294 => 132,  292 => 131,  290 => 130,  286 => 129,  285 => 128,  281 => 126,  275 => 123,  272 => 122,  270 => 121,  266 => 120,  260 => 116,  253 => 113,  246 => 109,  242 => 107,  239 => 106,  232 => 102,  228 => 100,  225 => 99,  218 => 95,  214 => 93,  212 => 92,  208 => 91,  205 => 90,  203 => 89,  198 => 87,  193 => 84,  187 => 80,  185 => 79,  180 => 77,  174 => 74,  169 => 73,  161 => 71,  159 => 70,  155 => 69,  151 => 68,  147 => 67,  142 => 66,  136 => 64,  134 => 63,  129 => 62,  127 => 61,  122 => 59,  118 => 58,  114 => 57,  108 => 56,  104 => 55,  100 => 54,  95 => 52,  76 => 36,  70 => 33,  63 => 29,  59 => 28,  53 => 25,  49 => 24,  45 => 23,  41 => 21,  39 => 20,);
    }

    public function getSourceContext()
    {
        return new Source("", "Master/BusinessDocumentView.html.twig", "C:\\xampp2\\htdocs\\facturascripts\\facturasscripts\\Dinamic\\View\\Master\\BusinessDocumentView.html.twig");
    }
}
