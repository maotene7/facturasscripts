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

/* Macro/Utils.html.twig */
class __TwigTemplate_bf2151386042d64133b5642298486c11302edeb45f31612ff3b552d241a86c8a extends \Twig\Template
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
        // line 20
        echo "
";
        // line 37
        echo "
";
    }

    // line 24
    public function macro_message($__log__ = null, $__types__ = null, $__style__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "log" => $__log__,
            "types" => $__types__,
            "style" => $__style__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 25
            echo "    ";
            $context["messages"] = twig_get_attribute($this->env, $this->source, ($context["log"] ?? null), "readAll", [0 => ($context["types"] ?? null)], "method", false, false, false, 25);
            // line 26
            echo "    ";
            if ((twig_length_filter($this->env, ($context["messages"] ?? null)) > 0)) {
                // line 27
                echo "        <div class=\"alert alert-";
                echo twig_escape_filter($this->env, ($context["style"] ?? null), "html", null, true);
                echo "\" role=\"alert\">
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                <span aria-hidden=\"true\">&times;</span>
            </button>
            ";
                // line 31
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["messages"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
                    // line 32
                    echo "                <div>";
                    echo twig_get_attribute($this->env, $this->source, $context["msg"], "message", [], "any", false, false, false, 32);
                    echo "</div>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 34
                echo "        </div>
    ";
            }

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 41
    public function macro_popoverTitle($__msg__ = null, $__position__ = "auto", ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "msg" => $__msg__,
            "position" => $__position__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 42
            echo "    ";
            if ((twig_length_filter($this->env, ($context["msg"] ?? null)) > 0)) {
                echo "data-toggle=\"popover\" data-placement=\"";
                echo twig_escape_filter($this->env, ($context["position"] ?? null), "html", null, true);
                echo "\" data-trigger=\"hover\" data-content=\"";
                echo twig_escape_filter($this->env, ($context["msg"] ?? null), "html", null, true);
                echo "\"";
            }

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "Macro/Utils.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 42,  98 => 41,  87 => 34,  78 => 32,  74 => 31,  66 => 27,  63 => 26,  60 => 25,  45 => 24,  40 => 37,  37 => 20,);
    }

    public function getSourceContext()
    {
        return new Source("{#
    /**
     * This file is part of FacturaScripts
     * Copyright (C) 2017-2019 Carlos Garcia Gomez <carlos@facturascripts.com>
     *
     * This program is free software: you can redistribute it and/or modify
     * it under the terms of the GNU Lesser General Public License as
     * published by the Free Software Foundation, either version 3 of the
     * License, or (at your option) any later version.
     *
     * This program is distributed in the hope that it will be useful,
     * but WITHOUT ANY WARRANTY; without even the implied warranty of
     * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
     * GNU Lesser General Public License for more details.
     *
     * You should have received a copy of the GNU Lesser General Public License
     * along with this program. If not, see <http://www.gnu.org/licenses/>.
     */
#}

{#
    Loads and displays a list of messages from the given types
#}
{% macro message(log, types, style) %}
    {% set messages = log.readAll(types) %}
    {% if messages | length > 0 %}
        <div class=\"alert alert-{{ style }}\" role=\"alert\">
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                <span aria-hidden=\"true\">&times;</span>
            </button>
            {% for msg in messages %}
                <div>{{ msg.message | raw }}</div>
            {% endfor %}
        </div>
    {% endif %}
{% endmacro %}

{#
    Returns the CSS code to display the user help
#}
{% macro popoverTitle(msg, position = 'auto') %}
    {% if msg | length > 0 %}data-toggle=\"popover\" data-placement=\"{{ position }}\" data-trigger=\"hover\" data-content=\"{{ msg }}\"{% endif %}
{% endmacro %}
", "Macro/Utils.html.twig", "C:\\xampp2\\htdocs\\facturascripts\\facturasscripts\\Core\\View\\Macro\\Utils.html.twig");
    }
}
