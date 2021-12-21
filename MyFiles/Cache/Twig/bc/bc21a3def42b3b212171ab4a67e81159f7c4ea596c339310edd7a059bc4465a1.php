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

/* Macro/Forms.html.twig */
class __TwigTemplate_a4df86884cd9af062d1928fad991bc47c886aa277f5e50566bb8a80715b56870 extends \Twig\Template
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
        // line 64
        echo "
";
    }

    // line 37
    public function macro_simpleInput($__id__ = null, $__name__ = null, $__value__ = null, $__type__ = "text", $__label__ = null, $__icon__ = null, $__attributes__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "id" => $__id__,
            "name" => $__name__,
            "value" => $__value__,
            "type" => $__type__,
            "label" => $__label__,
            "icon" => $__icon__,
            "attributes" => $__attributes__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 38
            echo "        ";
            if (($context["label"] ?? null)) {
                // line 39
                echo "            <label for=\"";
                echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, ($context["label"] ?? null), "html", null, true);
                echo "</label>
        ";
            }
            // line 41
            echo "
        ";
            // line 42
            if (($context["icon"] ?? null)) {
                // line 43
                echo "            <div class=\"input-group\">
                <span class=\"input-group-prepend\">
                    <span class=\"input-group-text\">
                        <i class=\"";
                // line 46
                echo twig_escape_filter($this->env, ($context["icon"] ?? null), "html", null, true);
                echo " fa-fw\" aria-hidden=\"true\"></i>
                    </span>
                </span>
        ";
            }
            // line 50
            echo "
                <input type=\"";
            // line 51
            echo twig_escape_filter($this->env, ($context["type"] ?? null), "html", null, true);
            echo "\" id=\"";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "\" name=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
            echo "\"
                        ";
            // line 52
            if ( !twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "class", [], "any", true, true, false, 52)) {
                // line 53
                echo "                            class=\"form-control\"
                        ";
            }
            // line 55
            echo "
                        ";
            // line 56
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["attributes"] ?? null));
            foreach ($context['_seq'] as $context["attribute"] => $context["attrValue"]) {
                // line 57
                echo "                            ";
                echo twig_escape_filter($this->env, $context["attribute"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrValue"], "html", null, true);
                echo "\"
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attribute'], $context['attrValue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 58
            echo " /> ";
            // line 59
            echo "
        ";
            // line 60
            if (($context["icon"] ?? null)) {
                // line 61
                echo "            </div>
        ";
            }

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 82
    public function macro_simpleSelect($__id__ = null, $__name__ = null, $__value__ = null, $__allValues__ = [], $__label__ = null, $__icon__ = null, $__attributes__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "id" => $__id__,
            "name" => $__name__,
            "value" => $__value__,
            "allValues" => $__allValues__,
            "label" => $__label__,
            "icon" => $__icon__,
            "attributes" => $__attributes__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 83
            echo "    ";
            if (($context["label"] ?? null)) {
                // line 84
                echo "        <label for=\"";
                echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, ($context["label"] ?? null), "html", null, true);
                echo "</label>
    ";
            }
            // line 86
            echo "
    ";
            // line 87
            if (($context["icon"] ?? null)) {
                // line 88
                echo "        <div class=\"input-group\">
            <span class=\"input-group-prepend\">
                <span class=\"input-group-text\">
                    <i class=\"";
                // line 91
                echo twig_escape_filter($this->env, ($context["icon"] ?? null), "html", null, true);
                echo " fa-fw\" aria-hidden=\"true\"></i>
                </span>
            </span>
    ";
            }
            // line 95
            echo "
        <select id=\"";
            // line 96
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "\" name=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\"
                ";
            // line 97
            if ( !twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "class", [], "any", true, true, false, 97)) {
                // line 98
                echo "                class=\"form-control\"
                ";
            }
            // line 100
            echo "
                ";
            // line 101
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["attributes"] ?? null));
            foreach ($context['_seq'] as $context["attribute"] => $context["attrValue"]) {
                // line 102
                echo "                    ";
                echo twig_escape_filter($this->env, $context["attribute"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrValue"], "html", null, true);
                echo "\"
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attribute'], $context['attrValue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 103
            echo "> ";
            // line 104
            echo "
            ";
            // line 105
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["allValues"] ?? null));
            foreach ($context['_seq'] as $context["key"] => $context["option"]) {
                // line 106
                echo "                <option value=\"";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\"";
                if ((($context["value"] ?? null) == $context["key"])) {
                    echo " selected=\"selected\"";
                }
                echo ">
                    ";
                // line 107
                echo twig_escape_filter($this->env, $context["option"], "html", null, true);
                echo "
                </option>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 110
            echo "        </select>

    ";
            // line 112
            if (($context["icon"] ?? null)) {
                // line 113
                echo "        </div>
    ";
            }
            // line 115
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "Macro/Forms.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  264 => 115,  260 => 113,  258 => 112,  254 => 110,  245 => 107,  236 => 106,  232 => 105,  229 => 104,  227 => 103,  216 => 102,  212 => 101,  209 => 100,  205 => 98,  203 => 97,  197 => 96,  194 => 95,  187 => 91,  182 => 88,  180 => 87,  177 => 86,  169 => 84,  166 => 83,  147 => 82,  136 => 61,  134 => 60,  131 => 59,  129 => 58,  118 => 57,  114 => 56,  111 => 55,  107 => 53,  105 => 52,  95 => 51,  92 => 50,  85 => 46,  80 => 43,  78 => 42,  75 => 41,  67 => 39,  64 => 38,  45 => 37,  40 => 64,  37 => 20,);
    }

    public function getSourceContext()
    {
        return new Source("{#
    /**
     * This file is part of FacturaScripts
     * Copyright (C) 2013-2019 Carlos Garcia Gomez <carlos@facturascripts.com>
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
    /**
     * Creates an input form element
     *
     * @param string \$id element id attribute.
     * @param string \$name element name attribute.
     * @param string \$value the default value for the input.
     * @param string \$type the input type attribute (defaults to text) must be any valid input type attribute
     *               (https://www.w3.org/TR/2017/REC-html52-20171214/sec-forms.html#element-attrdef-input-type).
     * @param string \$label NULL if no label is set. This will add a <label> element with the string as its contents.
     * @param string \$icon string identifying a FontAwesome icon (http://fontawesome.io/icons/).
     * @param array  \$attributes an associative array of strings, extra attributes with their values
     *               (https://www.w3.org/TR/2017/REC-html52-20171214/sec-forms.html#the-input-element)
     *               it shouldn't be 'type', 'id' or 'name', as those are already given.
     */
#}
{% macro simpleInput(id, name, value, type = \"text\", label = NULL, icon = NULL, attributes = NULL) %}
        {% if label %}
            <label for=\"{{ name }}\">{{ label }}</label>
        {% endif %}

        {% if icon %}
            <div class=\"input-group\">
                <span class=\"input-group-prepend\">
                    <span class=\"input-group-text\">
                        <i class=\"{{ icon }} fa-fw\" aria-hidden=\"true\"></i>
                    </span>
                </span>
        {% endif %}

                <input type=\"{{ type }}\" id=\"{{ id }}\" name=\"{{ name }}\" value=\"{{ value }}\"
                        {% if attributes.class is not defined %}
                            class=\"form-control\"
                        {% endif %}

                        {% for attribute,attrValue in attributes %}
                            {{ attribute }}=\"{{ attrValue }}\"
                        {% endfor %} /> {# end input #}

        {% if icon %}
            </div>
        {% endif %}
{% endmacro %}

{#
    /**
     * Creates a Select form element
     *
     * @param string \$id element id attribute
     * @param string \$name element name attribute
     * @param string \$value the default value that will be selected (must be contained in the allValues select)
     * @param array  \$allValues an associative array with the select options (where the key is the option value and the
     *               array value is the option text.
     * @param string \$label NULL if no label is set. This will add a <label> element with the string as its contents.
     * @param string \$icon string identifying a FontAwesome icon (http://fontawesome.io/icons/).
     * @param array  \$attributes an associative array of strings, extra attributes with their values
     *               (https://www.w3.org/TR/2017/REC-html52-20171214/sec-forms.html#the-input-element)
     *               it shouldn't be 'id' or 'name', as those are already given, beware that if the class attribute is
     *               given, it will override the default ones (remember to add the \"form-control\" class for consistency.
     */
#}
{% macro simpleSelect(id, name, value, allValues = {}, label = NULL, icon = NULL, attributes = NULL) %}
    {% if label %}
        <label for=\"{{ name }}\">{{ label }}</label>
    {% endif %}

    {% if icon %}
        <div class=\"input-group\">
            <span class=\"input-group-prepend\">
                <span class=\"input-group-text\">
                    <i class=\"{{ icon }} fa-fw\" aria-hidden=\"true\"></i>
                </span>
            </span>
    {% endif %}

        <select id=\"{{ id }}\" name=\"{{ name }}\"
                {% if attributes.class is not defined %}
                class=\"form-control\"
                {% endif %}

                {% for attribute,attrValue in attributes %}
                    {{ attribute }}=\"{{ attrValue }}\"
                {% endfor %}> {# end select #}

            {% for key,option in allValues %}
                <option value=\"{{ key }}\"{% if value == key %} selected=\"selected\"{% endif %}>
                    {{ option }}
                </option>
            {% endfor %}
        </select>

    {% if icon %}
        </div>
    {% endif %}

{% endmacro %}", "Macro/Forms.html.twig", "C:\\xampp2\\htdocs\\facturascripts\\facturasscripts\\Core\\View\\Macro\\Forms.html.twig");
    }
}
