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

/* EditAsiento.html.twig */
class __TwigTemplate_cd3cf5459a1c63358094d3accdacf64dcf8c35c7b14c2590e7adf930399a8bbe extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'gridcard' => [$this, 'block_gridcard'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 20
        return "Master/GridView.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 22
        $context["showBalanceGraphic"] = twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "showBalanceGraphic", [], "method", false, false, false, 22);
        // line 20
        $this->parent = $this->loadTemplate("Master/GridView.html.twig", "EditAsiento.html.twig", 20);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 24
    public function block_gridcard($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 25
        echo "    ";
        // line 26
        echo "    <div class=\"col-";
        if (($context["showBalanceGraphic"] ?? null)) {
            echo "9";
        } else {
            echo "12";
        }
        echo " mr-2\">
        <div class=\"card shadow\">
            <div class=\"card-header\">
                <span><small id=\"account-description\"></small></span>
                <span class=\"float-right\"><small><strong>";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "unbalance"], "method", false, false, false, 30), "html", null, true);
        echo ":&nbsp;<span id=\"unbalance\">0.00</span></strong></small></span>
            </div>
            <div class=\"card-body p-0\">
                <div id=\"document-lines\"></div>
            </div>
        </div>
    </div>
    ";
        // line 37
        if (($context["showBalanceGraphic"] ?? null)) {
            // line 38
            echo "    ";
            // line 39
            echo "    <script src=\"node_modules/chart.js/dist/Chart.min.js\"></script>
    <div class=\"col\">
        <div class=\"card shadow h-100\">
            <div class=\"card-header\">
                <small><strong>";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "account-balance"], "method", false, false, false, 43), "html", null, true);
            echo ":&nbsp;<span id=\"account-balance\">0.00</span></strong></small>
            </div>
            ";
            // line 46
            echo "            <div class=\"card-body p-0\">
                <canvas id=\"detail-balance\" class=\"w-100\"></canvas>
            </div>
        </div>
    </div>
    ";
        }
    }

    public function getTemplateName()
    {
        return "EditAsiento.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 46,  87 => 43,  81 => 39,  79 => 38,  77 => 37,  67 => 30,  55 => 26,  53 => 25,  49 => 24,  44 => 20,  42 => 22,  35 => 20,);
    }

    public function getSourceContext()
    {
        return new Source("", "EditAsiento.html.twig", "C:\\xampp2\\htdocs\\facturascripts\\facturasscripts\\Dinamic\\View\\EditAsiento.html.twig");
    }
}
