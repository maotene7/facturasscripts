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

/* Randomizer.html.twig */
class __TwigTemplate_8b802823ac93dd8f257817fc4cb0d4e326cd26fe5be0e3b1c5b591c987dc427b extends \Twig\Template
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
        $macros["_self"] = $this->macros["_self"] = $this;
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "Master/MenuTemplate.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("Master/MenuTemplate.html.twig", "Randomizer.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    <div class=\"bg-light pt-5 pb-5\">
    </div>
    <div class=\"container\" style=\"margin-top: -70px;\">
        <div class=\"row\">
            <div class=\"col\">
                <div class=\"card shadow mb-4\">
                    <div class=\"card-body\">
                        <h1 class=\"h3 mb-5\">
                            <i class=\"";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "getPagedata", [], "method", false, false, false, 12), "icon", [], "any", false, false, false, 12), "html", null, true);
        echo "\" aria-hidden=\"true\"></i> ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "generate-test-data"], "method", false, false, false, 12), "html", null, true);
        echo "
                            <a href=\"";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "url", [], "method", false, false, false, 13), "html", null, true);
        echo "\" class=\"btn btn-sm btn-outline-secondary\">
                                <i class=\"fas fa-sync\" aria-hidden=\"true\"></i>
                            </a>
                        </h1>
                        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "buttonList", [], "any", false, false, false, 17));
        foreach ($context['_seq'] as $context["title"] => $context["group"]) {
            // line 18
            echo "                            ";
            if ($context["title"]) {
                // line 19
                echo "                            <h3 class=\"mt-4\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => $context["title"]], "method", false, false, false, 19), "html", null, true);
                echo "</h3>
                            <hr/>
                            ";
            }
            // line 22
            echo "                            <div class=\"form-row\">
                                ";
            // line 23
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["group"]);
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 24
                echo "                                    ";
                echo twig_call_macro($macros["_self"], "macro_genButton", [($context["fsc"] ?? null), twig_get_attribute($this->env, $this->source, $context["item"], "action", [], "any", false, false, false, 24), ($context["i18n"] ?? null), twig_get_attribute($this->env, $this->source, $context["item"], "icon", [], "any", false, false, false, 24), twig_get_attribute($this->env, $this->source, $context["item"], "label", [], "any", false, false, false, 24)], 24, $context, $this->getSourceContext());
                echo "
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            echo "                            </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['title'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "                    </div>
                </div>
            </div>
        </div>
    </div>
";
    }

    // line 35
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 36
        echo "    ";
        $this->displayParentBlock("css", $context, $blocks);
        echo "
    <style>
        .bg-header {
            background-color: #FAFBFC;
        }
    </style>
";
    }

    // line 44
    public function macro_genButton($__fsc__ = null, $__gen__ = null, $__i18n__ = null, $__icon__ = null, $__label__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "fsc" => $__fsc__,
            "gen" => $__gen__,
            "i18n" => $__i18n__,
            "icon" => $__icon__,
            "label" => $__label__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 45
            echo "    <div class=\"col-sm-4\">
        <a href=\"";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "url", [], "method", false, false, false, 46), "html", null, true);
            echo "?gen=";
            echo twig_escape_filter($this->env, ($context["gen"] ?? null), "html", null, true);
            echo "\" class=\"btn btn-block btn-outline-success mb-3\">
            <i class=\"";
            // line 47
            echo twig_escape_filter($this->env, ($context["icon"] ?? null), "html", null, true);
            echo "\" aria-hidden=\"true\"></i>&nbsp; ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => ($context["label"] ?? null)], "method", false, false, false, 47), "html", null, true);
            echo "
            ";
            // line 48
            if (((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "totalCounter", [], "any", false, false, false, 48)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[($context["gen"] ?? null)] ?? null) : null) > 0)) {
                // line 49
                echo "                <span class=\"badge badge-success\">";
                echo twig_escape_filter($this->env, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "totalCounter", [], "any", false, false, false, 49)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[($context["gen"] ?? null)] ?? null) : null), "html", null, true);
                echo "</span>
            ";
            }
            // line 51
            echo "        </a>
    </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "Randomizer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  177 => 51,  171 => 49,  169 => 48,  163 => 47,  157 => 46,  154 => 45,  137 => 44,  125 => 36,  121 => 35,  112 => 28,  105 => 26,  96 => 24,  92 => 23,  89 => 22,  82 => 19,  79 => 18,  75 => 17,  68 => 13,  62 => 12,  52 => 4,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"Master/MenuTemplate.html.twig\" %}

{% block body %}
    <div class=\"bg-light pt-5 pb-5\">
    </div>
    <div class=\"container\" style=\"margin-top: -70px;\">
        <div class=\"row\">
            <div class=\"col\">
                <div class=\"card shadow mb-4\">
                    <div class=\"card-body\">
                        <h1 class=\"h3 mb-5\">
                            <i class=\"{{ fsc.getPagedata().icon }}\" aria-hidden=\"true\"></i> {{ i18n.trans('generate-test-data') }}
                            <a href=\"{{ fsc.url() }}\" class=\"btn btn-sm btn-outline-secondary\">
                                <i class=\"fas fa-sync\" aria-hidden=\"true\"></i>
                            </a>
                        </h1>
                        {% for title, group in fsc.buttonList %}
                            {% if title %}
                            <h3 class=\"mt-4\">{{ i18n.trans(title) }}</h3>
                            <hr/>
                            {% endif %}
                            <div class=\"form-row\">
                                {% for item in group %}
                                    {{ _self.genButton(fsc, item.action, i18n, item.icon, item.label) }}
                                {% endfor %}
                            </div>
                        {% endfor %}
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}

{% block css %}
    {{ parent() }}
    <style>
        .bg-header {
            background-color: #FAFBFC;
        }
    </style>
{% endblock %}

{% macro genButton(fsc, gen, i18n, icon, label) %}
    <div class=\"col-sm-4\">
        <a href=\"{{ fsc.url() }}?gen={{ gen }}\" class=\"btn btn-block btn-outline-success mb-3\">
            <i class=\"{{ icon }}\" aria-hidden=\"true\"></i>&nbsp; {{ i18n.trans(label) }}
            {% if fsc.totalCounter[gen] > 0 %}
                <span class=\"badge badge-success\">{{ fsc.totalCounter[gen] }}</span>
            {% endif %}
        </a>
    </div>
{% endmacro %}", "Randomizer.html.twig", "C:\\xampp2\\htdocs\\facturascripts\\facturasscripts\\Plugins\\Randomizer\\View\\Randomizer.html.twig");
    }
}
