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

/* Master/htmlChart.html.twig */
class __TwigTemplate_7cd12b99530dc775e82ed443e6d0c882c68be0145331be21bbfca29a8a7e8597 extends \Twig\Template
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
        // line 1
        echo "<script src=\"";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('asset')->getCallable(), ["node_modules/chart.js/dist/Chart.min.js"]), "html", null, true);
        echo "\"></script>

<div class=\"bg-white shadow\">
    ";
        // line 4
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "getChart", [], "method", false, false, false, 4), "render", [], "method", false, false, false, 4);
        echo "
</div>";
    }

    public function getTemplateName()
    {
        return "Master/htmlChart.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Master/htmlChart.html.twig", "C:\\xampp2\\htdocs\\facturascripts\\facturasscripts\\Dinamic\\View\\Master\\htmlChart.html.twig");
    }
}
