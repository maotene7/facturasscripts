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

/* Block/AccountNoteInfo.html.twig */
class __TwigTemplate_8d38f82a2addbe7a41bf935310a564a4cf9ad342697f2eb4ebc49bae68a13eb0 extends \Twig\Template
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
        echo "<div class=\"col-12 text-secondary\" style=\"font-size: smaller\">
    <div class=\"row text-info\">
        <div class=\"col-6\"><h4>";
        // line 3
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "general-concepts"], "method", false, false, false, 3), "html", null, true);
        echo "</h4></div>
        <div class=\"col-6\"><h4>";
        // line 4
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "wildcard-title"], "method", false, false, false, 4), "html", null, true);
        echo "</h4></div>
    </div>
    <div class=\"row\">
        <div class=\"col-6\">
            <div class=\"row\"><div class=\"col-3\"><b>";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "wildcard"], "method", false, false, false, 8), "html", null, true);
        echo "</b></div><div class=\"col-9\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "wildcard-general-info"], "method", false, false, false, 8), "html", null, true);
        echo "</div></div>
        </div>
        <div class=\"col-6\">
            <div class=\"row\"><div class=\"col-3\"><b>%document%</b></div><div class=\"col-9\">";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "document-wildcard-info"], "method", false, false, false, 11), "html", null, true);
        echo "</div></div>
            <div class=\"row\"><div class=\"col-3\"><b>%date%</b></div><div class=\"col-9\">";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "date-wildcard-info"], "method", false, false, false, 12), "html", null, true);
        echo "</div></div>
            <div class=\"row\"><div class=\"col-3\"><b>%date-entry%</b></div><div class=\"col-9\">";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "dateentry-wildcard-info"], "method", false, false, false, 13), "html", null, true);
        echo "</div></div>
            <div class=\"row\"><div class=\"col-3\"><b>%month%</b></div><div class=\"col-9\">";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "month-wildcard-info"], "method", false, false, false, 14), "html", null, true);
        echo "</div></div>
            <div class=\"row\"><div class=\"col-3\"><b>%year%</b></div><div class=\"col-9\">";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "year-wildcard-info"], "method", false, false, false, 15), "html", null, true);
        echo "</div></div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "Block/AccountNoteInfo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 15,  72 => 14,  68 => 13,  64 => 12,  60 => 11,  52 => 8,  45 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"col-12 text-secondary\" style=\"font-size: smaller\">
    <div class=\"row text-info\">
        <div class=\"col-6\"><h4>{{ i18n.trans('general-concepts') }}</h4></div>
        <div class=\"col-6\"><h4>{{ i18n.trans('wildcard-title') }}</h4></div>
    </div>
    <div class=\"row\">
        <div class=\"col-6\">
            <div class=\"row\"><div class=\"col-3\"><b>{{ i18n.trans('wildcard') }}</b></div><div class=\"col-9\">{{ i18n.trans('wildcard-general-info') }}</div></div>
        </div>
        <div class=\"col-6\">
            <div class=\"row\"><div class=\"col-3\"><b>%document%</b></div><div class=\"col-9\">{{ i18n.trans('document-wildcard-info') }}</div></div>
            <div class=\"row\"><div class=\"col-3\"><b>%date%</b></div><div class=\"col-9\">{{ i18n.trans('date-wildcard-info') }}</div></div>
            <div class=\"row\"><div class=\"col-3\"><b>%date-entry%</b></div><div class=\"col-9\">{{ i18n.trans('dateentry-wildcard-info') }}</div></div>
            <div class=\"row\"><div class=\"col-3\"><b>%month%</b></div><div class=\"col-9\">{{ i18n.trans('month-wildcard-info') }}</div></div>
            <div class=\"row\"><div class=\"col-3\"><b>%year%</b></div><div class=\"col-9\">{{ i18n.trans('year-wildcard-info') }}</div></div>
        </div>
    </div>
</div>", "Block/AccountNoteInfo.html.twig", "C:\\xampp2\\htdocs\\facturascripts\\facturasscripts\\Core\\View\\Block\\AccountNoteInfo.html.twig");
    }
}
