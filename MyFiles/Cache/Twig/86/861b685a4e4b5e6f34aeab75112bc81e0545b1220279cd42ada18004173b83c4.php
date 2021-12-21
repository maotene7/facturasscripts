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

/* Dashboard.html.twig */
class __TwigTemplate_ecc19b2ca940aaa4733199171ce366137fae786ea76aeec2ac51cef82c6926e4 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'sectionLinks' => [$this, 'block_sectionLinks'],
            'sectionStats' => [$this, 'block_sectionStats'],
            'sections' => [$this, 'block_sections'],
            'css' => [$this, 'block_css'],
        ];
        $macros["_self"] = $this->macros["_self"] = $this;
    }

    protected function doGetParent(array $context)
    {
        // line 20
        return "Master/MenuTemplate.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("Master/MenuTemplate.html.twig", "Dashboard.html.twig", 20);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 22
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 23
        echo "    <div class=\"bg-light pt-4 pb-5\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col\">
                    <h1 class=\"h4\">
                        ";
        // line 28
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "getPageData", [], "method", false, false, false, 28), "name", [], "any", false, false, false, 28) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "user", [], "any", false, false, false, 28), "homepage", [], "any", false, false, false, 28))) {
            // line 29
            echo "                            <a class=\"btn btn-sm btn-outline-secondary active\" href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "url", [], "method", false, false, false, 29), "html", null, true);
            echo "?defaultPage=FALSE\"
                               title=\"";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "marked-as-homepage"], "method", false, false, false, 30), "html", null, true);
            echo "\">
                                <i class=\"fas fa-bookmark\" aria-hidden=\"true\"></i>
                            </a>
                        ";
        } else {
            // line 34
            echo "                            <a class=\"btn btn-sm btn-outline-secondary\" href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "url", [], "method", false, false, false, 34), "html", null, true);
            echo "?defaultPage=TRUE\"
                               title=\"";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "mark-as-homepage"], "method", false, false, false, 35), "html", null, true);
            echo "\">
                                <i class=\"fas fa-bookmark\" aria-hidden=\"true\"></i>
                            </a>
                        ";
        }
        // line 39
        echo "                        <span class=\"ml-3\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "title", [], "any", false, false, false, 39), "html", null, true);
        echo "</span>
                    </h1>
                </div>
            </div>
        </div>
    </div>
    <div class=\"container\" style=\"margin-top: -40px;\">
        <div class=\"row\">
            <div class=\"col\">
                ";
        // line 48
        $this->displayBlock('sectionLinks', $context, $blocks);
        // line 51
        echo "            </div>
        </div>
        ";
        // line 53
        $this->displayBlock('sectionStats', $context, $blocks);
        // line 56
        echo "        <div class=\"row\">
            <div class=\"col\">
                ";
        // line 58
        $this->displayBlock('sections', $context, $blocks);
        // line 66
        echo "                ";
        echo twig_call_macro($macros["_self"], "macro_sectionNews", [($context["fsc"] ?? null), ($context["i18n"] ?? null)], 66, $context, $this->getSourceContext());
        echo "
            </div>
        </div>
    </div>
";
    }

    // line 48
    public function block_sectionLinks($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 49
        echo "                    ";
        echo twig_call_macro($macros["_self"], "macro_sectionLinks", [($context["fsc"] ?? null), ($context["i18n"] ?? null)], 49, $context, $this->getSourceContext());
        echo "
                ";
    }

    // line 53
    public function block_sectionStats($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 54
        echo "            ";
        echo twig_call_macro($macros["_self"], "macro_sectionStats", [($context["fsc"] ?? null), ($context["i18n"] ?? null)], 54, $context, $this->getSourceContext());
        echo "
        ";
    }

    // line 58
    public function block_sections($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 59
        echo "                    ";
        if (twig_in_filter("receipts", twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "sections", [], "any", false, false, false, 59))) {
            // line 60
            echo "                        ";
            echo twig_call_macro($macros["_self"], "macro_sectionReceipts", [($context["fsc"] ?? null), ($context["i18n"] ?? null)], 60, $context, $this->getSourceContext());
            echo "
                    ";
        }
        // line 62
        echo "                    ";
        if (twig_in_filter("low-stock", twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "sections", [], "any", false, false, false, 62))) {
            // line 63
            echo "                        ";
            echo twig_call_macro($macros["_self"], "macro_sectionLowStock", [($context["fsc"] ?? null), ($context["i18n"] ?? null)], 63, $context, $this->getSourceContext());
            echo "
                    ";
        }
        // line 65
        echo "                ";
    }

    // line 72
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 73
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

    // line 81
    public function macro_drawStatsBox($__fsc__ = null, $__i18n__ = null, $__group__ = null, $__color__ = null, $__ismoney__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "fsc" => $__fsc__,
            "i18n" => $__i18n__,
            "group" => $__group__,
            "color" => $__color__,
            "ismoney" => $__ismoney__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 82
            echo "    <div class=\"card shadow mb-3\">
        <div class=\"card-body text-white ";
            // line 83
            echo twig_escape_filter($this->env, ($context["color"] ?? null), "html", null, true);
            echo "\">
            <h2 class=\"h5 mb-0\">
                ";
            // line 85
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => ($context["group"] ?? null)], "method", false, false, false, 85), "html", null, true);
            echo "
            </h2>
        </div>
        <div class=\"table-responsive\">
            <table class=\"table mb-0\">
                ";
            // line 90
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "stats", [], "any", false, false, false, 90)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[($context["group"] ?? null)] ?? null) : null));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 91
                echo "                    <tr>
                        <td>";
                // line 92
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => $context["key"]], "method", false, false, false, 92), "html", null, true);
                echo "</td>
                        ";
                // line 93
                if (($context["ismoney"] ?? null)) {
                    // line 94
                    echo "                            <td class=\"text-right\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "toolBox", [], "method", false, false, false, 94), "coins", [], "method", false, false, false, 94), "format", [0 => $context["value"]], "method", false, false, false, 94), "html", null, true);
                    echo "</td>
                        ";
                } else {
                    // line 96
                    echo "                            <td class=\"text-right\">";
                    echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                    echo "</td>
                        ";
                }
                // line 98
                echo "                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 100
            echo "            </table>
        </div>
    </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 105
    public function macro_sectionLinks($__fsc__ = null, $__i18n__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "fsc" => $__fsc__,
            "i18n" => $__i18n__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 106
            echo "    <div class=\"card shadow mb-3\">
        <div class=\"card-body\">
            <div class=\"form-row\">
                <div class=\"col-md\">
                    <h2 class=\"h4 mb-3\">
                        <i class=\"fas fa-plus fa-fw\"></i> ";
            // line 111
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "create"], "method", false, false, false, 111), "html", null, true);
            echo "
                    </h2>
                    <ul>
                        ";
            // line 114
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "createLinks", [], "any", false, false, false, 114));
            foreach ($context['_seq'] as $context["link"] => $context["label"]) {
                // line 115
                echo "                            <li>
                                <a href=\"";
                // line 116
                echo twig_escape_filter($this->env, $context["link"], "html", null, true);
                echo "\">
                                    ";
                // line 117
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => $context["label"]], "method", false, false, false, 117), "html", null, true);
                echo "
                                </a>
                            </li>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['link'], $context['label'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 121
            echo "                    </ul>
                </div>
                ";
            // line 123
            if (twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "openLinks", [], "any", false, false, false, 123)) {
                // line 124
                echo "                    <div class=\"col-md\">
                        <h2 class=\"h4 mb-3\">
                            <i class=\"fas fa-folder-open fa-fw\"></i> ";
                // line 126
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "open"], "method", false, false, false, 126), "html", null, true);
                echo "
                        </h2>
                        <ul>
                            ";
                // line 129
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "openLinks", [], "any", false, false, false, 129));
                foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
                    // line 130
                    echo "                                <li>
                                    ";
                    // line 131
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => twig_get_attribute($this->env, $this->source, $context["link"], "type", [], "any", false, false, false, 131)], "method", false, false, false, 131), "html", null, true);
                    echo "
                                    <a href=\"";
                    // line 132
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["link"], "url", [], "any", false, false, false, 132), "html", null, true);
                    echo "\">
                                        ";
                    // line 133
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["link"], "name", [], "any", false, false, false, 133), "html", null, true);
                    echo "
                                    </a>
                                    <span class=\"text-muted\">
                                        ";
                    // line 136
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["link"], "date", [], "any", false, false, false, 136), "html", null, true);
                    echo "
                                    </span>
                                </li>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 140
                echo "                        </ul>
                    </div>
                ";
            }
            // line 143
            echo "            </div>
        </div>
    </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 148
    public function macro_sectionLowStock($__fsc__ = null, $__i18n__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "fsc" => $__fsc__,
            "i18n" => $__i18n__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 149
            echo "    <div class=\"card shadow mb-3\">
        <div class=\"card-body\">
            <h2 class=\"h4 mb-0\">
                <i class=\"fas fa-pallet fa-fw\"></i> ";
            // line 152
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "minimum-stock"], "method", false, false, false, 152), "html", null, true);
            echo "
            </h2>
        </div>
        <div class=\"table-responsive\">
            <table class=\"table table-hover mb-0\">
                <thead>
                <tr>
                    <th>";
            // line 159
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "reference"], "method", false, false, false, 159), "html", null, true);
            echo "</th>
                    <th>";
            // line 160
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "warehouse"], "method", false, false, false, 160), "html", null, true);
            echo "</th>
                    <th class=\"text-right\">";
            // line 161
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "minimum-stock"], "method", false, false, false, 161), "html", null, true);
            echo "</th>
                    <th class=\"text-right\">";
            // line 162
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "available"], "method", false, false, false, 162), "html", null, true);
            echo "</th>
                </tr>
                </thead>
                <tbody>
                ";
            // line 166
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "lowStock", [], "any", false, false, false, 166));
            foreach ($context['_seq'] as $context["_key"] => $context["stock"]) {
                // line 167
                echo "                    <tr class=\"clickableRow table-danger\" data-href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["stock"], "url", [], "method", false, false, false, 167), "html", null, true);
                echo "\">
                        <td>";
                // line 168
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["stock"], "referencia", [], "any", false, false, false, 168), "html", null, true);
                echo "</td>
                        <td>";
                // line 169
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["stock"], "codalmacen", [], "any", false, false, false, 169), "html", null, true);
                echo "</td>
                        <td class=\"text-right\">";
                // line 170
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "toolBox", [], "method", false, false, false, 170), "numbers", [], "method", false, false, false, 170), "format", [0 => twig_get_attribute($this->env, $this->source, $context["stock"], "stockmin", [], "any", false, false, false, 170)], "method", false, false, false, 170), "html", null, true);
                echo "</td>
                        <td class=\"text-right\">";
                // line 171
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "toolBox", [], "method", false, false, false, 171), "numbers", [], "method", false, false, false, 171), "format", [0 => twig_get_attribute($this->env, $this->source, $context["stock"], "disponible", [], "any", false, false, false, 171)], "method", false, false, false, 171), "html", null, true);
                echo "</td>
                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['stock'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 174
            echo "                </tbody>
            </table>
        </div>
    </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 180
    public function macro_sectionNews($__fsc__ = null, $__i18n__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "fsc" => $__fsc__,
            "i18n" => $__i18n__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 181
            echo "    <div class=\"card shadow mb-3\">
        <div class=\"card-body\">
            <h3 class=\"h4 mb-0\">
                ";
            // line 184
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "news"], "method", false, false, false, 184), "html", null, true);
            echo "
            </h3>
        </div>
        <div class=\"table-responsive\">
            <table class=\"table table-striped mb-0\">
                ";
            // line 189
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "news", [], "any", false, false, false, 189));
            foreach ($context['_seq'] as $context["_key"] => $context["news"]) {
                // line 190
                echo "                    <tr>
                        <td class=\"align-middle\">
                            <i class=\"fas fa-newspaper fa-3x\"></i>
                        </td>
                        <td>
                            <p class=\"mb-0\">
                                <small>";
                // line 196
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["news"], "fecha", [], "any", false, false, false, 196), "html", null, true);
                echo "</small>
                                <br/>";
                // line 197
                echo twig_get_attribute($this->env, $this->source, $context["news"], "texto", [], "any", false, false, false, 197);
                echo "
                                <a href=\"";
                // line 198
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["news"], "url", [], "any", false, false, false, 198), "html", null, true);
                echo "\" target=\"_blank\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "read-more"], "method", false, false, false, 198), "html", null, true);
                echo "</a>
                            </p>
                        </td>
                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['news'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 203
            echo "            </table>
        </div>
    </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 208
    public function macro_sectionReceipts($__fsc__ = null, $__i18n__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "fsc" => $__fsc__,
            "i18n" => $__i18n__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 209
            echo "    <div class=\"card shadow mb-3\">
        <div class=\"card-body\">
            <span class=\"float-right badge badge-danger\">";
            // line 211
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "unpaid"], "method", false, false, false, 211), "html", null, true);
            echo "</span>
            <h2 class=\"h4 mb-0\">
                <i class=\"fas fa-dollar-sign fa-fw\"></i>
                ";
            // line 214
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "receipts"], "method", false, false, false, 214), "html", null, true);
            echo "
            </h2>
        </div>
        <div class=\"table-responsive\">
            <table class=\"table table-hover mb-0\">
                <thead>
                <tr>
                    <th>";
            // line 221
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "customer"], "method", false, false, false, 221), "html", null, true);
            echo "</th>
                    <th>";
            // line 222
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "observations"], "method", false, false, false, 222), "html", null, true);
            echo "</th>
                    <th class=\"text-right\">";
            // line 223
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "amount"], "method", false, false, false, 223), "html", null, true);
            echo "</th>
                    <th class=\"text-right\">";
            // line 224
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "expiration"], "method", false, false, false, 224), "html", null, true);
            echo "</th>
                </tr>
                </thead>
                <tbody>
                ";
            // line 228
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "receipts", [], "any", false, false, false, 228));
            foreach ($context['_seq'] as $context["_key"] => $context["receipt"]) {
                // line 229
                echo "                    <tr class=\"clickableRow table-danger\" data-href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["receipt"], "url", [], "method", false, false, false, 229), "html", null, true);
                echo "\">
                        <td>";
                // line 230
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["receipt"], "getSubject", [], "method", false, false, false, 230), "nombre", [], "any", false, false, false, 230);
                echo "</td>
                        <td>";
                // line 231
                echo twig_get_attribute($this->env, $this->source, $context["receipt"], "observaciones", [], "any", false, false, false, 231);
                echo "</td>
                        <td class=\"text-right text-nowrap\">";
                // line 232
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "toolBox", [], "method", false, false, false, 232), "coins", [], "method", false, false, false, 232), "format", [0 => twig_get_attribute($this->env, $this->source, $context["receipt"], "importe", [], "any", false, false, false, 232)], "method", false, false, false, 232), "html", null, true);
                echo "</td>
                        <td class=\"text-right text-nowrap\">";
                // line 233
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["receipt"], "vencimiento", [], "any", false, false, false, 233), "html", null, true);
                echo "</td>
                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['receipt'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 236
            echo "                </tbody>
            </table>
        </div>
    </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 242
    public function macro_sectionStats($__fsc__ = null, $__i18n__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "fsc" => $__fsc__,
            "i18n" => $__i18n__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 243
            echo "    <div class=\"row\">
        <div class=\"col-sm-6 col-lg-3\">
            ";
            // line 245
            echo twig_call_macro($macros["_self"], "macro_drawStatsBox", [($context["fsc"] ?? null), ($context["i18n"] ?? null), "purchases", "bg-danger", true], 245, $context, $this->getSourceContext());
            echo "
        </div>
        <div class=\"col-sm-6 col-lg-3\">
            ";
            // line 248
            echo twig_call_macro($macros["_self"], "macro_drawStatsBox", [($context["fsc"] ?? null), ($context["i18n"] ?? null), "sales", "bg-success", true], 248, $context, $this->getSourceContext());
            echo "
        </div>
        <div class=\"col-sm-6 col-lg-3\">
            ";
            // line 251
            echo twig_call_macro($macros["_self"], "macro_drawStatsBox", [($context["fsc"] ?? null), ($context["i18n"] ?? null), "taxes", "bg-warning", true], 251, $context, $this->getSourceContext());
            echo "
        </div>
        <div class=\"col-sm-6 col-lg-3\">
            ";
            // line 254
            echo twig_call_macro($macros["_self"], "macro_drawStatsBox", [($context["fsc"] ?? null), ($context["i18n"] ?? null), "new-customers", "bg-info", false], 254, $context, $this->getSourceContext());
            echo "
        </div>
    </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "Dashboard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  673 => 254,  667 => 251,  661 => 248,  655 => 245,  651 => 243,  637 => 242,  624 => 236,  615 => 233,  611 => 232,  607 => 231,  603 => 230,  598 => 229,  594 => 228,  587 => 224,  583 => 223,  579 => 222,  575 => 221,  565 => 214,  559 => 211,  555 => 209,  541 => 208,  529 => 203,  516 => 198,  512 => 197,  508 => 196,  500 => 190,  496 => 189,  488 => 184,  483 => 181,  469 => 180,  456 => 174,  447 => 171,  443 => 170,  439 => 169,  435 => 168,  430 => 167,  426 => 166,  419 => 162,  415 => 161,  411 => 160,  407 => 159,  397 => 152,  392 => 149,  378 => 148,  366 => 143,  361 => 140,  351 => 136,  345 => 133,  341 => 132,  337 => 131,  334 => 130,  330 => 129,  324 => 126,  320 => 124,  318 => 123,  314 => 121,  304 => 117,  300 => 116,  297 => 115,  293 => 114,  287 => 111,  280 => 106,  266 => 105,  254 => 100,  247 => 98,  241 => 96,  235 => 94,  233 => 93,  229 => 92,  226 => 91,  222 => 90,  214 => 85,  209 => 83,  206 => 82,  189 => 81,  177 => 73,  173 => 72,  169 => 65,  163 => 63,  160 => 62,  154 => 60,  151 => 59,  147 => 58,  140 => 54,  136 => 53,  129 => 49,  125 => 48,  115 => 66,  113 => 58,  109 => 56,  107 => 53,  103 => 51,  101 => 48,  88 => 39,  81 => 35,  76 => 34,  69 => 30,  64 => 29,  62 => 28,  55 => 23,  51 => 22,  40 => 20,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * This file is part of FacturaScripts
 * Copyright (C) 2017-2021 Carlos Garcia Gomez <carlos@facturascripts.com>
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
 * along with this program. If not, see http://www.gnu.org/licenses/.
 */
#}
{% extends \"Master/MenuTemplate.html.twig\" %}

{% block body %}
    <div class=\"bg-light pt-4 pb-5\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col\">
                    <h1 class=\"h4\">
                        {% if fsc.getPageData().name == fsc.user.homepage %}
                            <a class=\"btn btn-sm btn-outline-secondary active\" href=\"{{ fsc.url() }}?defaultPage=FALSE\"
                               title=\"{{ i18n.trans('marked-as-homepage') }}\">
                                <i class=\"fas fa-bookmark\" aria-hidden=\"true\"></i>
                            </a>
                        {% else %}
                            <a class=\"btn btn-sm btn-outline-secondary\" href=\"{{ fsc.url() }}?defaultPage=TRUE\"
                               title=\"{{ i18n.trans('mark-as-homepage') }}\">
                                <i class=\"fas fa-bookmark\" aria-hidden=\"true\"></i>
                            </a>
                        {% endif %}
                        <span class=\"ml-3\">{{ fsc.title }}</span>
                    </h1>
                </div>
            </div>
        </div>
    </div>
    <div class=\"container\" style=\"margin-top: -40px;\">
        <div class=\"row\">
            <div class=\"col\">
                {% block sectionLinks %}
                    {{ _self.sectionLinks(fsc, i18n) }}
                {% endblock %}
            </div>
        </div>
        {% block sectionStats %}
            {{ _self.sectionStats(fsc, i18n) }}
        {% endblock %}
        <div class=\"row\">
            <div class=\"col\">
                {% block sections %}
                    {% if 'receipts' in fsc.sections %}
                        {{ _self.sectionReceipts(fsc, i18n) }}
                    {% endif %}
                    {% if 'low-stock' in fsc.sections %}
                        {{ _self.sectionLowStock(fsc, i18n) }}
                    {% endif %}
                {% endblock %}
                {{ _self.sectionNews(fsc, i18n) }}
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

{% macro drawStatsBox(fsc, i18n, group, color, ismoney) %}
    <div class=\"card shadow mb-3\">
        <div class=\"card-body text-white {{ color }}\">
            <h2 class=\"h5 mb-0\">
                {{ i18n.trans(group) }}
            </h2>
        </div>
        <div class=\"table-responsive\">
            <table class=\"table mb-0\">
                {% for key, value in fsc.stats[group] %}
                    <tr>
                        <td>{{ i18n.trans(key) }}</td>
                        {% if ismoney %}
                            <td class=\"text-right\">{{ fsc.toolBox().coins().format(value) }}</td>
                        {% else %}
                            <td class=\"text-right\">{{ value }}</td>
                        {% endif %}
                    </tr>
                {% endfor %}
            </table>
        </div>
    </div>
{% endmacro %}

{% macro sectionLinks(fsc, i18n) %}
    <div class=\"card shadow mb-3\">
        <div class=\"card-body\">
            <div class=\"form-row\">
                <div class=\"col-md\">
                    <h2 class=\"h4 mb-3\">
                        <i class=\"fas fa-plus fa-fw\"></i> {{ i18n.trans('create') }}
                    </h2>
                    <ul>
                        {% for link, label in fsc.createLinks %}
                            <li>
                                <a href=\"{{ link }}\">
                                    {{ i18n.trans(label) }}
                                </a>
                            </li>
                        {% endfor %}
                    </ul>
                </div>
                {% if fsc.openLinks %}
                    <div class=\"col-md\">
                        <h2 class=\"h4 mb-3\">
                            <i class=\"fas fa-folder-open fa-fw\"></i> {{ i18n.trans('open') }}
                        </h2>
                        <ul>
                            {% for link in fsc.openLinks %}
                                <li>
                                    {{ i18n.trans(link.type) }}
                                    <a href=\"{{ link.url }}\">
                                        {{ link.name }}
                                    </a>
                                    <span class=\"text-muted\">
                                        {{ link.date }}
                                    </span>
                                </li>
                            {% endfor %}
                        </ul>
                    </div>
                {% endif %}
            </div>
        </div>
    </div>
{% endmacro %}

{% macro sectionLowStock(fsc, i18n) %}
    <div class=\"card shadow mb-3\">
        <div class=\"card-body\">
            <h2 class=\"h4 mb-0\">
                <i class=\"fas fa-pallet fa-fw\"></i> {{ i18n.trans('minimum-stock') }}
            </h2>
        </div>
        <div class=\"table-responsive\">
            <table class=\"table table-hover mb-0\">
                <thead>
                <tr>
                    <th>{{ i18n.trans('reference') }}</th>
                    <th>{{ i18n.trans('warehouse') }}</th>
                    <th class=\"text-right\">{{ i18n.trans('minimum-stock') }}</th>
                    <th class=\"text-right\">{{ i18n.trans('available') }}</th>
                </tr>
                </thead>
                <tbody>
                {% for stock in fsc.lowStock %}
                    <tr class=\"clickableRow table-danger\" data-href=\"{{ stock.url() }}\">
                        <td>{{ stock.referencia }}</td>
                        <td>{{ stock.codalmacen }}</td>
                        <td class=\"text-right\">{{ fsc.toolBox().numbers().format(stock.stockmin) }}</td>
                        <td class=\"text-right\">{{ fsc.toolBox().numbers().format(stock.disponible) }}</td>
                    </tr>
                {% endfor %}
                </tbody>
            </table>
        </div>
    </div>
{% endmacro %}

{% macro sectionNews(fsc, i18n) %}
    <div class=\"card shadow mb-3\">
        <div class=\"card-body\">
            <h3 class=\"h4 mb-0\">
                {{ i18n.trans('news') }}
            </h3>
        </div>
        <div class=\"table-responsive\">
            <table class=\"table table-striped mb-0\">
                {% for news in fsc.news %}
                    <tr>
                        <td class=\"align-middle\">
                            <i class=\"fas fa-newspaper fa-3x\"></i>
                        </td>
                        <td>
                            <p class=\"mb-0\">
                                <small>{{ news.fecha }}</small>
                                <br/>{{ news.texto | raw }}
                                <a href=\"{{ news.url }}\" target=\"_blank\">{{ i18n.trans('read-more') }}</a>
                            </p>
                        </td>
                    </tr>
                {% endfor %}
            </table>
        </div>
    </div>
{% endmacro %}

{% macro sectionReceipts(fsc, i18n) %}
    <div class=\"card shadow mb-3\">
        <div class=\"card-body\">
            <span class=\"float-right badge badge-danger\">{{ i18n.trans('unpaid') }}</span>
            <h2 class=\"h4 mb-0\">
                <i class=\"fas fa-dollar-sign fa-fw\"></i>
                {{ i18n.trans('receipts') }}
            </h2>
        </div>
        <div class=\"table-responsive\">
            <table class=\"table table-hover mb-0\">
                <thead>
                <tr>
                    <th>{{ i18n.trans('customer') }}</th>
                    <th>{{ i18n.trans('observations') }}</th>
                    <th class=\"text-right\">{{ i18n.trans('amount') }}</th>
                    <th class=\"text-right\">{{ i18n.trans('expiration') }}</th>
                </tr>
                </thead>
                <tbody>
                {% for receipt in fsc.receipts %}
                    <tr class=\"clickableRow table-danger\" data-href=\"{{ receipt.url() }}\">
                        <td>{{ receipt.getSubject().nombre | raw }}</td>
                        <td>{{ receipt.observaciones | raw }}</td>
                        <td class=\"text-right text-nowrap\">{{ fsc.toolBox().coins().format(receipt.importe) }}</td>
                        <td class=\"text-right text-nowrap\">{{ receipt.vencimiento }}</td>
                    </tr>
                {% endfor %}
                </tbody>
            </table>
        </div>
    </div>
{% endmacro %}

{% macro sectionStats(fsc, i18n) %}
    <div class=\"row\">
        <div class=\"col-sm-6 col-lg-3\">
            {{ _self.drawStatsBox(fsc, i18n, 'purchases', 'bg-danger', true) }}
        </div>
        <div class=\"col-sm-6 col-lg-3\">
            {{ _self.drawStatsBox(fsc, i18n, 'sales', 'bg-success', true) }}
        </div>
        <div class=\"col-sm-6 col-lg-3\">
            {{ _self.drawStatsBox(fsc, i18n, 'taxes', 'bg-warning', true) }}
        </div>
        <div class=\"col-sm-6 col-lg-3\">
            {{ _self.drawStatsBox(fsc, i18n, 'new-customers', 'bg-info', false) }}
        </div>
    </div>
{% endmacro %}", "Dashboard.html.twig", "C:\\xampp2\\htdocs\\facturascripts\\facturasscripts\\Core\\View\\Dashboard.html.twig");
    }
}
