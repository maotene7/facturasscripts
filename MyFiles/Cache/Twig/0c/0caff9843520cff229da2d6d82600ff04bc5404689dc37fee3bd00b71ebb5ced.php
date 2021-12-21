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

/* ReportTaxes.html.twig */
class __TwigTemplate_b22ec2a21077651e430e6a6995088e31af54ee32972542b4f622a529ebe36384 extends \Twig\Template
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
    }

    protected function doGetParent(array $context)
    {
        // line 20
        return "Master/MenuTemplate.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("Master/MenuTemplate.html.twig", "ReportTaxes.html.twig", 20);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 22
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 23
        echo "    <form method=\"post\">
        <input type=\"hidden\" name=\"action\" value=\"export\" />
        <div class=\"container\" style=\"margin-top: -60px;\">
            <div class=\"row\">
                <div class=\"col-12\">
                    <div class=\"card shadow mb-3\">
                        <div class=\"card-body\">
                            <h1 class=\"h3 mb-3\">
                                <i class=\"";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "getPageData", [], "method", false, false, false, 31), "icon", [], "any", false, false, false, 31), "html", null, true);
        echo "\"></i> ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "title", [], "any", false, false, false, 31), "html", null, true);
        echo "
                            </h1>
                            <div class=\"form-row\">
                                <div class=\"col-sm-3\">
                                    <div class=\"form-group\">
                                        ";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "company"], "method", false, false, false, 36), "html", null, true);
        echo "
                                        <select name=\"idempresa\" class=\"form-control\">
                                            ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "empresa", [], "any", false, false, false, 38), "all", [], "method", false, false, false, 38));
        foreach ($context['_seq'] as $context["_key"] => $context["empresa"]) {
            // line 39
            echo "                                                ";
            if ((twig_get_attribute($this->env, $this->source, $context["empresa"], "idempresa", [], "any", false, false, false, 39) == twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "idempresa", [], "any", false, false, false, 39))) {
                // line 40
                echo "                                                    <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["empresa"], "idempresa", [], "any", false, false, false, 40), "html", null, true);
                echo "\" selected=\"\">";
                echo twig_get_attribute($this->env, $this->source, $context["empresa"], "nombrecorto", [], "any", false, false, false, 40);
                echo "</option>
                                                ";
            } else {
                // line 42
                echo "                                                    <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["empresa"], "idempresa", [], "any", false, false, false, 42), "html", null, true);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["empresa"], "nombrecorto", [], "any", false, false, false, 42);
                echo "</option>
                                                ";
            }
            // line 44
            echo "                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['empresa'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "                                        </select>
                                    </div>
                                </div>
                                <div class=\"col-sm-3\">
                                    <div class=\"form-group\">
                                        ";
        // line 50
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "invoices"], "method", false, false, false, 50), "html", null, true);
        echo "
                                        <select name=\"source\" class=\"form-control\">
                                            ";
        // line 52
        if ((twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "source", [], "any", false, false, false, 52) == "purchases")) {
            // line 53
            echo "                                                <option value=\"sales\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "sales"], "method", false, false, false, 53), "html", null, true);
            echo "</option>
                                                <option value=\"purchases\" selected=\"\">";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "purchases"], "method", false, false, false, 54), "html", null, true);
            echo "</option>
                                            ";
        } else {
            // line 56
            echo "                                                <option value=\"sales\" selected=\"\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "sales"], "method", false, false, false, 56), "html", null, true);
            echo "</option>
                                                <option value=\"purchases\">";
            // line 57
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "purchases"], "method", false, false, false, 57), "html", null, true);
            echo "</option>
                                            ";
        }
        // line 59
        echo "                                        </select>
                                    </div>
                                </div>
                                <div class=\"col-sm-3\">
                                    <div class=\"form-group\">
                                        ";
        // line 64
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "from-date"], "method", false, false, false, 64), "html", null, true);
        echo "
                                        <input type=\"date\" name=\"datefrom\" value=\"";
        // line 65
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "datefrom", [], "any", false, false, false, 65), "html", null, true);
        echo "\" class=\"form-control\" required=\"\" />
                                    </div>
                                </div>
                                <div class=\"col-sm-3\">
                                    <div class=\"form-group\">
                                        ";
        // line 70
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "until-date"], "method", false, false, false, 70), "html", null, true);
        echo "
                                        <input type=\"date\" name=\"dateto\" value=\"";
        // line 71
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "dateto", [], "any", false, false, false, 71), "html", null, true);
        echo "\" class=\"form-control\" required=\"\" />
                                    </div>
                                </div>
                            </div>
                            <div class=\"form-row align-items-end\">
                                <div class=\"col-sm-3\">
                                    <div class=\"form-group\">
                                        ";
        // line 78
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "format"], "method", false, false, false, 78), "html", null, true);
        echo "
                                        <select name=\"format\" class=\"form-control\">
                                            <option value=\"PDF\">PDF</option>
                                            <option value=\"CSV\">CSV</option>
                                            <option value=\"XLS\">Excel</option>
                                        </select>
                                    </div>
                                </div>
                                <div class=\"col-sm\">
                                    <div class=\"form-group\">
                                        <button type=\"submit\" class=\"btn btn-primary\">
                                            ";
        // line 89
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "generate"], "method", false, false, false, 89), "html", null, true);
        echo "
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
";
    }

    // line 103
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 104
        echo "    ";
        $this->displayParentBlock("css", $context, $blocks);
        echo "
    <style>
        .bg-header {
            background-color: #FAFBFC;
            padding-bottom: 90px;
        }
    </style>
";
    }

    public function getTemplateName()
    {
        return "ReportTaxes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  206 => 104,  202 => 103,  186 => 89,  172 => 78,  162 => 71,  158 => 70,  150 => 65,  146 => 64,  139 => 59,  134 => 57,  129 => 56,  124 => 54,  119 => 53,  117 => 52,  112 => 50,  105 => 45,  99 => 44,  91 => 42,  83 => 40,  80 => 39,  76 => 38,  71 => 36,  61 => 31,  51 => 23,  47 => 22,  36 => 20,);
    }

    public function getSourceContext()
    {
        return new Source("", "ReportTaxes.html.twig", "C:\\xampp2\\htdocs\\facturascripts\\facturasscripts\\Dinamic\\View\\ReportTaxes.html.twig");
    }
}
