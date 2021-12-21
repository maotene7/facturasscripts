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

/* EditConteoStockLines.html.twig */
class __TwigTemplate_1f8486e8ffc7e695d3e54ef03814523444d1c82be59b13ecc0ef1e3e50e15547 extends \Twig\Template
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
        // line 1
        echo "<div class=\"card shadow mb-3\">
    <div class=\"card-body\">
        <h2 class=\"h5 card-title\">
            ";
        // line 4
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "lines"], "method", false, false, false, 4), "html", null, true);
        echo "
            <span class=\"badge badge-secondary\">";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "getCurrentView", [], "method", false, false, false, 5), "count", [], "any", false, false, false, 5), "html", null, true);
        echo "</span>
        </h2>
        <p>";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "stock-count-line-p"], "method", false, false, false, 7), "html", null, true);
        echo "</p>
        <form method=\"post\">
            <input type=\"hidden\" name=\"action\" value=\"add-line\" />
            <div class=\"form-row\">
                <div class=\"col-sm-3\">
                    <div class=\"form-group\">
                        <div class=\"input-group mb-3\">
                            <div class=\"input-group-prepend\">
                                <span class=\"input-group-text\">
                                    <i class=\"fas fa-barcode\"></i>
                                </span>
                            </div>
                            <input type=\"text\" name=\"codbarras\" class=\"form-control\" placeholder=\"";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "barcode"], "method", false, false, false, 19), "html", null, true);
        echo "\" />
                        </div>
                    </div>
                </div>
                <div class=\"col-sm-3\">
                    <div class=\"form-group\">
                        <div class=\"input-group mb-3\">
                            <div class=\"input-group-prepend\">
                                <span class=\"input-group-text\">
                                    <i class=\"fas fa-hashtag\"></i>
                                </span>
                            </div>
                            <input type=\"text\" name=\"referencia\" class=\"form-control\" placeholder=\"";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "reference"], "method", false, false, false, 31), "html", null, true);
        echo "\" />
                        </div>
                    </div>
                </div>
                <div class=\"col-sm\">
                    <button type=\"submit\" class=\"btn btn-success\">
                        ";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "add"], "method", false, false, false, 37), "html", null, true);
        echo "
                    </button>
                </div>
                <div class=\"col-sm text-right\">
                    <a href=\"";
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "getModel", [], "method", false, false, false, 41), "url", [], "method", false, false, false, 41), "html", null, true);
        echo "&action=rebuild-stock\" class=\"btn btn-warning\">
                        ";
        // line 42
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "update-stock"], "method", false, false, false, 42), "html", null, true);
        echo "
                    </a>
                </div>
            </div>
        </form>
    </div>
    <div class=\"table-responsive\">
        <table class=\"table table-hover mb-0\">
            <thead>
                <tr>
                    <th>";
        // line 52
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "reference"], "method", false, false, false, 52), "html", null, true);
        echo "</th>
                    <th class=\"text-right\">";
        // line 53
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "quantity"], "method", false, false, false, 53), "html", null, true);
        echo "</th>
                    <th></th>
                    <th>";
        // line 55
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "user"], "method", false, false, false, 55), "html", null, true);
        echo "</th>
                    <th class=\"text-right\">";
        // line 56
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "date"], "method", false, false, false, 56), "html", null, true);
        echo "</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 60
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "getCurrentView", [], "method", false, false, false, 60), "cursor", [], "any", false, false, false, 60));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["line"]) {
            // line 61
            echo "                    <tr>
                        <td>";
            // line 62
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["line"], "referencia", [], "any", false, false, false, 62), "html", null, true);
            echo "</td>
                        <td class=\"text-right\">";
            // line 63
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["line"], "cantidad", [], "any", false, false, false, 63), "html", null, true);
            echo "</td>
                        <td>";
            // line 64
            echo twig_call_macro($macros["_self"], "macro_editCountLine", [($context["i18n"] ?? null), $context["line"]], 64, $context, $this->getSourceContext());
            echo "</td>
                        <td>";
            // line 65
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["line"], "nick", [], "any", false, false, false, 65), "html", null, true);
            echo "</td>
                        <td class=\"text-right\">";
            // line 66
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["line"], "fecha", [], "any", false, false, false, 66), "html", null, true);
            echo "</td>
                    </tr>
                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 69
            echo "                    <tr class=\"table-warning\">
                        <td colspan=\"5\">";
            // line 70
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "no-data"], "method", false, false, false, 70), "html", null, true);
            echo "</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['line'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        echo "            </tbody>
        </table>
    </div>
</div>

";
    }

    // line 78
    public function macro_editCountLine($__i18n__ = null, $__line__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "i18n" => $__i18n__,
            "line" => $__line__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 79
            echo "    <a href=\"#\" data-toggle=\"modal\" data-target=\"#modalCountLine";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["line"] ?? null), "idlinea", [], "any", false, false, false, 79), "html", null, true);
            echo "\">
        <i class=\"fas fa-edit\"></i>
    </a>
    <form method=\"post\">
        <input type=\"hidden\" name=\"action\" value=\"edit-line\" />
        <input type=\"hidden\" name=\"idlinea\" value=\"";
            // line 84
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["line"] ?? null), "idlinea", [], "any", false, false, false, 84), "html", null, true);
            echo "\" />
        <div class=\"modal fade\" id=\"modalCountLine";
            // line 85
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["line"] ?? null), "idlinea", [], "any", false, false, false, 85), "html", null, true);
            echo "\" tabindex=\"-1\" aria-hidden=\"true\">
            <div class=\"modal-dialog\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <h5 class=\"modal-title\">";
            // line 89
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "quantity"], "method", false, false, false, 89), "html", null, true);
            echo "</h5>
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                            <span aria-hidden=\"true\">&times;</span>
                        </button>
                    </div>
                    <div class=\"modal-body\">
                        <div class=\"form-group\">
                            <input type=\"number\" name=\"quantity\" min=\"0\" steap=\"any\" value=\"";
            // line 96
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["line"] ?? null), "cantidad", [], "any", false, false, false, 96), "html", null, true);
            echo "\" class=\"form-control\" required=\"\" />
                        </div>
                        <div class=\"form-row\">
                            <div class=\"col\">
                                <button type=\"button\" class=\"btn btn-outline-danger\" onclick=\"this.form.action.value = 'delete-line';
                                        this.form.submit();\">
                                    ";
            // line 102
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "delete"], "method", false, false, false, 102), "html", null, true);
            echo "
                                </button>
                            </div>
                            <div class=\"col text-right\">
                                <button type=\"submit\" class=\"btn btn-primary\">";
            // line 106
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "save"], "method", false, false, false, 106), "html", null, true);
            echo "</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "EditConteoStockLines.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  248 => 106,  241 => 102,  232 => 96,  222 => 89,  215 => 85,  211 => 84,  202 => 79,  188 => 78,  179 => 73,  170 => 70,  167 => 69,  159 => 66,  155 => 65,  151 => 64,  147 => 63,  143 => 62,  140 => 61,  135 => 60,  128 => 56,  124 => 55,  119 => 53,  115 => 52,  102 => 42,  98 => 41,  91 => 37,  82 => 31,  67 => 19,  52 => 7,  47 => 5,  43 => 4,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "EditConteoStockLines.html.twig", "C:\\xampp2\\htdocs\\facturascripts\\facturasscripts\\Dinamic\\View\\EditConteoStockLines.html.twig");
    }
}
