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

/* Error/ControllerNotFound.html.twig */
class __TwigTemplate_fb31f64b1f6fd0a127b06e4c36ffd644a9dc5eeed40c102d9b1ae9022ae1f00a extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "Master/MicroTemplate.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("Master/MicroTemplate.html.twig", "Error/ControllerNotFound.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-sm-12\">
                <br/><br/>
                <div class=\"jumbotron\">
                    <h1>
                        <i class=\"fas fa-bug fa-fw\" aria-hidden=\"true\"></i>
                        ";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "controller-not-found"], "method", false, false, false, 11), "html", null, true);
        echo ":
                    </h1>
                    <hr class=\"my-4\">
                    <b>";
        // line 14
        echo twig_escape_filter($this->env, ($context["controllerName"] ?? null), "html", null, true);
        echo "</b>
                    <br/><br/>
                    <a href=\"";
        // line 16
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('asset')->getCallable(), ["Wizard"]), "html", null, true);
        echo "\" class=\"btn btn-warning\">
                        <i class=\"fas fa-wrench fa-fw\" aria-hidden=\"true\"></i> ";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "wizard"], "method", false, false, false, 17), "html", null, true);
        echo "
                    </a>
                </div>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "Error/ControllerNotFound.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 17,  70 => 16,  65 => 14,  59 => 11,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"Master/MicroTemplate.html.twig\" %}

{% block body %}
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-sm-12\">
                <br/><br/>
                <div class=\"jumbotron\">
                    <h1>
                        <i class=\"fas fa-bug fa-fw\" aria-hidden=\"true\"></i>
                        {{ i18n.trans('controller-not-found') }}:
                    </h1>
                    <hr class=\"my-4\">
                    <b>{{ controllerName }}</b>
                    <br/><br/>
                    <a href=\"{{ asset('Wizard') }}\" class=\"btn btn-warning\">
                        <i class=\"fas fa-wrench fa-fw\" aria-hidden=\"true\"></i> {{ i18n.trans('wizard') }}
                    </a>
                </div>
            </div>
        </div>
    </div>
{% endblock %}", "Error/ControllerNotFound.html.twig", "C:\\xampp2\\htdocs\\facturascripts\\facturasscripts\\Core\\View\\Error\\ControllerNotFound.html.twig");
    }
}
