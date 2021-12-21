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

/* Error/TemplateError.html.twig */
class __TwigTemplate_8c8b413ffd2a313630cb4b2f5f55e907babdfceebfce1bb612a1f01b644a6efa extends \Twig\Template
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
        $this->parent = $this->loadTemplate("Master/MicroTemplate.html.twig", "Error/TemplateError.html.twig", 1);
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
                        <i class=\"fas fa-bug\" aria-hidden=\"true\"></i> ";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "template-error"], "method", false, false, false, 10), "html", null, true);
        echo ":
                    </h1>
                    <hr class=\"my-4\">
                    <p>";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "template"], "method", false, false, false, 13), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, ($context["template"] ?? null), "html", null, true);
        echo "</p>
                    <p>";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "controller"], "method", false, false, false, 14), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, ($context["controllerName"] ?? null), "html", null, true);
        echo "</p>
                </div>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "Error/TemplateError.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 14,  64 => 13,  58 => 10,  50 => 4,  46 => 3,  35 => 1,);
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
                        <i class=\"fas fa-bug\" aria-hidden=\"true\"></i> {{ i18n.trans('template-error') }}:
                    </h1>
                    <hr class=\"my-4\">
                    <p>{{ i18n.trans('template') }}: {{ template }}</p>
                    <p>{{ i18n.trans('controller') }}: {{ controllerName }}</p>
                </div>
            </div>
        </div>
    </div>
{% endblock %}", "Error/TemplateError.html.twig", "C:\\xampp2\\htdocs\\facturascripts\\facturasscripts\\Core\\View\\Error\\TemplateError.html.twig");
    }
}
