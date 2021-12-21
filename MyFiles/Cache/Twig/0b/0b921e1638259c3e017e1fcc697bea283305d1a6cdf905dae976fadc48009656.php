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

/* Updater.html.twig */
class __TwigTemplate_74ec26a46e6f6820bcd632de336402829c2dcf8250e6d7b439812a06af84676f extends \Twig\Template
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
        // line 20
        return "Master/MenuTemplate.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("Master/MenuTemplate.html.twig", "Updater.html.twig", 20);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 22
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 23
        echo "    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-sm-6\">
                <div class=\"btn-group\">
                    <a href=\"AdminPlugins\" class=\"btn btn-sm btn-outline-secondary\">
                        <i class=\"fas fa-arrow-left fa-fw\" aria-hidden=\"true\"></i>
                        <span class=\"d-none d-md-inline-block\">";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "plugins"], "method", false, false, false, 29), "html", null, true);
        echo " </span>
                    </a>
                    <a href=\"";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "url", [], "method", false, false, false, 31), "html", null, true);
        echo "\" class=\"btn btn-sm btn-outline-secondary\" title=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "refresh"], "method", false, false, false, 31), "html", null, true);
        echo "\">
                        <i class=\"fas fa-redo\" aria-hidden=\"true\"></i>
                    </a>
                </div>
                ";
        // line 35
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "telemetryManager", [], "any", false, false, false, 35), "ready", [], "method", false, false, false, 35)) {
            // line 36
            echo "                    <button class=\"btn btn-sm btn-secondary\" type=\"button\" data-toggle=\"modal\" data-target=\"#modalTelemetry\">
                        <i class=\"fas fa-registered fa-fw\" aria-hidden=\"true\"></i>
                        <span class=\"d-none d-md-inline-block\">";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "register-installation"], "method", false, false, false, 38), "html", null, true);
            echo " </span>
                    </button>
                ";
        } else {
            // line 41
            echo "                    <button class=\"btn btn-sm btn-warning\" type=\"button\" data-toggle=\"modal\" data-target=\"#modalTelemetry\">
                        <i class=\"fas fa-registered fa-fw\" aria-hidden=\"true\"></i>
                        <span class=\"d-none d-md-inline-block\">";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "register-installation"], "method", false, false, false, 43), "html", null, true);
            echo "</span>
                    </button>
                ";
        }
        // line 46
        echo "            </div>
            <div class=\"col-sm-6 text-right\">
                <h1 class=\"h3\">
                    ";
        // line 49
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "updater"], "method", false, false, false, 49), "html", null, true);
        echo "
                    <small class=\"text-info\">";
        // line 50
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "getCoreVersion", [], "method", false, false, false, 50), "html", null, true);
        echo "</small>
                    <i class=\"fas fa-cloud-download-alt\" aria-hidden=\"true\"></i>
                </h1>
            </div>
        </div>
    </div>
    <div class=\"table-responsive\">
        <table class=\"table table-hover\">
            <thead>
                <tr>
                    <th scope=\"col\">";
        // line 60
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "component"], "method", false, false, false, 60), "html", null, true);
        echo "</th>
                    <th scope=\"col\">";
        // line 61
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "description"], "method", false, false, false, 61), "html", null, true);
        echo "</th>
                    <th scope=\"col\" class=\"text-right\">";
        // line 62
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "action"], "method", false, false, false, 62), "html", null, true);
        echo "</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 66
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "updaterItems", [], "any", false, false, false, 66));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 67
            echo "                    <tr class=\"";
            echo ((twig_get_attribute($this->env, $this->source, $context["item"], "stable", [], "any", false, false, false, 67)) ? ("table-success") : ("table-warning"));
            echo "\">
                        <td>";
            // line 68
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 68), "html", null, true);
            echo "</td>
                        <td>";
            // line 69
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "description", [], "any", false, false, false, 69), "html", null, true);
            echo "</td>
                        <td class=\"text-right\">
                            ";
            // line 71
            if (twig_get_attribute($this->env, $this->source, $context["item"], "downloaded", [], "any", false, false, false, 71)) {
                // line 72
                echo "                                <a href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "url", [], "method", false, false, false, 72), "html", null, true);
                echo "?action=update&item=";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 72), "html", null, true);
                echo "\" class=\"btn btn-sm btn-success\">
                                    <i class=\"fas fa-rocket fa-fw\" aria-hidden=\"true\"></i> ";
                // line 73
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "update"], "method", false, false, false, 73), "html", null, true);
                echo "
                                </a>
                                <a href=\"";
                // line 75
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "url", [], "method", false, false, false, 75), "html", null, true);
                echo "?action=cancel&item=";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 75), "html", null, true);
                echo "\" class=\"btn btn-sm btn-warning\">
                                    <i class=\"fas fa-times fa-fw\" aria-hidden=\"true\"></i> ";
                // line 76
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "cancel"], "method", false, false, false, 76), "html", null, true);
                echo "
                                </a>
                            ";
            } elseif (twig_get_attribute($this->env, $this->source,             // line 78
$context["item"], "stable", [], "any", false, false, false, 78)) {
                // line 79
                echo "                                <a href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "url", [], "method", false, false, false, 79), "html", null, true);
                echo "?action=download&item=";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 79), "html", null, true);
                echo "\" class=\"btn btn-sm btn-secondary\">
                                    <i class=\"fas fa-cloud-download-alt fa-fw\" aria-hidden=\"true\"></i> ";
                // line 80
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "download"], "method", false, false, false, 80), "html", null, true);
                echo "
                                </a>
                            ";
            } else {
                // line 83
                echo "                                <a href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "url", [], "method", false, false, false, 83), "html", null, true);
                echo "?action=download&item=";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 83), "html", null, true);
                echo "\" class=\"btn btn-sm btn-outline-warning\">
                                    <i class=\"fas fa-flask fa-fw\" aria-hidden=\"true\"></i> ";
                // line 84
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "beta"], "method", false, false, false, 84), "html", null, true);
                echo "
                                </a>
                            ";
            }
            // line 87
            echo "                        </td>
                    </tr>
                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 90
            echo "                    <tr class=\"table-warning\">
                        <td colspan=\"3\"><b>";
            // line 91
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "no-data"], "method", false, false, false, 91), "html", null, true);
            echo "</b></td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 94
        echo "            </tbody>
        </table>
    </div>
    <div class=\"modal fade\" id=\"modalTelemetry\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content\">
                ";
        // line 100
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "telemetryManager", [], "any", false, false, false, 100), "ready", [], "method", false, false, false, 100)) {
            // line 101
            echo "                    <div class=\"modal-header\">
                        <h5 class=\"modal-title\">";
            // line 102
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "registered-installation", 1 => ["%number%" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "telemetryManager", [], "any", false, false, false, 102), "id", [], "method", false, false, false, 102)]], "method", false, false, false, 102), "html", null, true);
            echo "</h5>
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"";
            // line 103
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "close"], "method", false, false, false, 103), "html", null, true);
            echo "\">
                            <span aria-hidden=\"true\">&times;</span>
                        </button>
                    </div>
                    <div class=\"modal-body\">
                        <p>";
            // line 108
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "registered-installation-p"], "method", false, false, false, 108), "html", null, true);
            echo "</p>
                        <p>";
            // line 109
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "telemetry-data-to-send"], "method", false, false, false, 109), "html", null, true);
            echo "</p>
                        <a class=\"btn btn-primary\" href=\"";
            // line 110
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "url", [], "method", false, false, false, 110), "html", null, true);
            echo "?action=claim-install\" target=\"_blank\">
                            ";
            // line 111
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "manage"], "method", false, false, false, 111), "html", null, true);
            echo "
                        </a>
                    </div>
                ";
        } else {
            // line 115
            echo "                    <form action=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "url", [], "method", false, false, false, 115), "html", null, true);
            echo "\" method=\"post\">
                        <input type=\"hidden\" name=\"action\" value=\"register\" />
                        <div class=\"modal-header\">
                            <h5 class=\"modal-title\">";
            // line 118
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "register-installation"], "method", false, false, false, 118), "html", null, true);
            echo "</h5>
                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"";
            // line 119
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "close"], "method", false, false, false, 119), "html", null, true);
            echo "\">
                                <span aria-hidden=\"true\">&times;</span>
                            </button>
                        </div>
                        <div class=\"modal-body\">
                            <p>";
            // line 124
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "register-installation-p"], "method", false, false, false, 124), "html", null, true);
            echo "</p>
                            <p>";
            // line 125
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "telemetry-data-to-send"], "method", false, false, false, 125), "html", null, true);
            echo "</p>
                            <button type=\"submit\" class=\"btn btn-primary\">
                                ";
            // line 127
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "register-installation"], "method", false, false, false, 127), "html", null, true);
            echo "
                            </button>
                        </div>
                    </form>
                ";
        }
        // line 132
        echo "            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "Updater.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  302 => 132,  294 => 127,  289 => 125,  285 => 124,  277 => 119,  273 => 118,  266 => 115,  259 => 111,  255 => 110,  251 => 109,  247 => 108,  239 => 103,  235 => 102,  232 => 101,  230 => 100,  222 => 94,  213 => 91,  210 => 90,  203 => 87,  197 => 84,  190 => 83,  184 => 80,  177 => 79,  175 => 78,  170 => 76,  164 => 75,  159 => 73,  152 => 72,  150 => 71,  145 => 69,  141 => 68,  136 => 67,  131 => 66,  124 => 62,  120 => 61,  116 => 60,  103 => 50,  99 => 49,  94 => 46,  88 => 43,  84 => 41,  78 => 38,  74 => 36,  72 => 35,  63 => 31,  58 => 29,  50 => 23,  46 => 22,  35 => 20,);
    }

    public function getSourceContext()
    {
        return new Source("", "Updater.html.twig", "C:\\xampp2\\htdocs\\facturascripts\\facturasscripts\\Dinamic\\View\\Updater.html.twig");
    }
}
