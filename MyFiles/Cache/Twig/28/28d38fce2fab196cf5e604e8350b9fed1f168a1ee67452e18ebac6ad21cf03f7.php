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

/* Tab/DocFiles.html.twig */
class __TwigTemplate_c6a6aecbdc5e4e8a0a659a35720bf80e080f264406a153eec49b7c2b08aac729 extends \Twig\Template
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
        $context["firstView"] = twig_first($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "views", [], "any", false, false, false, 1));
        // line 2
        $context["doc"] = twig_get_attribute($this->env, $this->source, ($context["firstView"] ?? null), "model", [], "any", false, false, false, 2);
        // line 3
        $context["currentView"] = twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "getCurrentView", [], "method", false, false, false, 3);
        // line 4
        echo "
<div class=\"container-fluid\">
    <div class=\"row\">
        <div class=\"col\">
            ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "cursor", [], "any", false, false, false, 8));
        foreach ($context['_seq'] as $context["_key"] => $context["docfile"]) {
            // line 9
            echo "                <form action=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["doc"] ?? null), "url", [], "method", false, false, false, 9), "html", null, true);
            echo "\" method=\"post\" enctype=\"multipart/form-data\">
                    <input type=\"hidden\" name=\"activetab\" value=\"";
            // line 10
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 10), "html", null, true);
            echo "\" />
                    <input type=\"hidden\" name=\"id\" value=\"";
            // line 11
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["docfile"], "id", [], "any", false, false, false, 11), "html", null, true);
            echo "\" />
                    <input type=\"hidden\" name=\"multireqtoken\" value=\"";
            // line 12
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "multiRequestProtection", [], "any", false, false, false, 12), "newToken", [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "user", [], "any", false, false, false, 12), "logkey", [], "any", false, false, false, 12)], "method", false, false, false, 12), "html", null, true);
            echo "\"/>
                    <div class=\"card shadow mb-3\">
                        <div class=\"card-body\">
                            <div class=\"form-group\">
                                <textarea name=\"observations\" class=\"form-control\" placeholder=\"";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "observations"], "method", false, false, false, 16), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["docfile"], "observations", [], "any", false, false, false, 16), "html", null, true);
            echo "</textarea>
                            </div>
                            <div class=\"form-row align-items-end\">
                                <div class=\"col\">
                                    ";
            // line 20
            $context["file"] = twig_get_attribute($this->env, $this->source, $context["docfile"], "getFile", [], "method", false, false, false, 20);
            // line 21
            echo "                                    <a href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["file"] ?? null), "url", [], "method", false, false, false, 21), "html", null, true);
            echo "\" class=\"btn btn-sm btn-outline-primary\">
                                        <i class=\"far fa-file\"></i> ";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["file"] ?? null), "filename", [], "any", false, false, false, 22), "html", null, true);
            echo "
                                    </a>
                                </div>
                                <div class=\"col\">
                                    <p class=\"text-muted mb-0\">
                                        ";
            // line 27
            if (twig_get_attribute($this->env, $this->source, $context["docfile"], "nick", [], "any", false, false, false, 27)) {
                // line 28
                echo "                                            <i class=\"fas fa-user\"></i> ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["docfile"], "nick", [], "any", false, false, false, 28), "html", null, true);
                echo " &nbsp;
                                        ";
            }
            // line 30
            echo "                                        <i class=\"fas fa-calendar-alt\"></i> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["docfile"], "creationdate", [], "any", false, false, false, 30), "html", null, true);
            echo "
                                    </p>
                                </div>
                                <div class=\"col text-right\">
                                    <button type=\"submit\" name=\"action\" value=\"edit-file\" class=\"btn btn-sm btn-primary\">
                                        <i class=\"fas fa-save fa-fw\" aria-hidden=\"true\"></i> ";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "save"], "method", false, false, false, 35), "html", null, true);
            echo "
                                    </button>
                                    &nbsp;
                                    <div class=\"btn-group\">
                                        <div class=\"dropdown\">
                                            <button class=\"btn btn-sm btn-danger dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                                <i class=\"fas fa-trash-alt\"></i>
                                            </button>
                                            <div class=\"dropdown-menu dropdown-menu-right\">
                                                <button type=\"submit\" name=\"action\" value=\"delete-file\" class=\"dropdown-item\" href=\"#\">
                                                    <i class=\"far fa-trash-alt fa-fw\"></i> ";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "delete-file"], "method", false, false, false, 45), "html", null, true);
            echo "
                                                </button>
                                                <button type=\"submit\" name=\"action\" value=\"unlink-file\" class=\"dropdown-item\" href=\"#\">
                                                    <i class=\"fas fa-unlink fa-fw\"></i> ";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "unlink-file"], "method", false, false, false, 48), "html", null, true);
            echo "
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['docfile'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "            <form action=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["doc"] ?? null), "url", [], "method", false, false, false, 59), "html", null, true);
        echo "\" method=\"post\" enctype=\"multipart/form-data\">
                <input type=\"hidden\" name=\"activetab\" value=\"";
        // line 60
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 60), "html", null, true);
        echo "\" />
                <input type=\"hidden\" name=\"action\" value=\"add-file\" />
                <input type=\"hidden\" name=\"multireqtoken\" value=\"";
        // line 62
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "multiRequestProtection", [], "any", false, false, false, 62), "newToken", [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "user", [], "any", false, false, false, 62), "logkey", [], "any", false, false, false, 62)], "method", false, false, false, 62), "html", null, true);
        echo "\"/>
                <div class=\"card border-success shadow\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">
                            <i class=\"far fa-file\"></i> ";
        // line 66
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "new"], "method", false, false, false, 66), "html", null, true);
        echo "
                        </h5>
                        <div class=\"form-group\">
                            <textarea name=\"observations\" class=\"form-control\" placeholder=\"";
        // line 69
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "observations"], "method", false, false, false, 69), "html", null, true);
        echo "\"></textarea>
                        </div>
                        <div class=\"form-row align-items-end\">
                            <div class=\"col\">
                                <input type=\"file\" name=\"new-file\" class=\"form-control-file\" required=\"\" />
                                <p class=\"text-muted mb-0\">
                                    ";
        // line 75
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "help-server-accepts-filesize", 1 => ["%size%" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "model", [], "any", false, false, false, 75), "getMaxFileUpload", [], "method", false, false, false, 75)]], "method", false, false, false, 75), "html", null, true);
        echo "
                                </p>
                            </div>
                            <div class=\"col text-right\">
                                <button type=\"submit\" class=\"btn btn-sm btn-success\">
                                    <i class=\"fas fa-save fa-fw\" aria-hidden=\"true\"></i> ";
        // line 80
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "save"], "method", false, false, false, 80), "html", null, true);
        echo "
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "Tab/DocFiles.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  190 => 80,  182 => 75,  173 => 69,  167 => 66,  160 => 62,  155 => 60,  150 => 59,  133 => 48,  127 => 45,  114 => 35,  105 => 30,  99 => 28,  97 => 27,  89 => 22,  84 => 21,  82 => 20,  73 => 16,  66 => 12,  62 => 11,  58 => 10,  53 => 9,  49 => 8,  43 => 4,  41 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set firstView = fsc.views | first %}
{% set doc = firstView.model %}
{% set currentView = fsc.getCurrentView() %}

<div class=\"container-fluid\">
    <div class=\"row\">
        <div class=\"col\">
            {% for docfile in currentView.cursor %}
                <form action=\"{{ doc.url() }}\" method=\"post\" enctype=\"multipart/form-data\">
                    <input type=\"hidden\" name=\"activetab\" value=\"{{ currentView.getViewName() }}\" />
                    <input type=\"hidden\" name=\"id\" value=\"{{ docfile.id }}\" />
                    <input type=\"hidden\" name=\"multireqtoken\" value=\"{{ fsc.multiRequestProtection.newToken(fsc.user.logkey) }}\"/>
                    <div class=\"card shadow mb-3\">
                        <div class=\"card-body\">
                            <div class=\"form-group\">
                                <textarea name=\"observations\" class=\"form-control\" placeholder=\"{{ i18n.trans('observations') }}\">{{ docfile.observations }}</textarea>
                            </div>
                            <div class=\"form-row align-items-end\">
                                <div class=\"col\">
                                    {% set file = docfile.getFile() %}
                                    <a href=\"{{ file.url() }}\" class=\"btn btn-sm btn-outline-primary\">
                                        <i class=\"far fa-file\"></i> {{ file.filename }}
                                    </a>
                                </div>
                                <div class=\"col\">
                                    <p class=\"text-muted mb-0\">
                                        {% if docfile.nick %}
                                            <i class=\"fas fa-user\"></i> {{ docfile.nick }} &nbsp;
                                        {% endif %}
                                        <i class=\"fas fa-calendar-alt\"></i> {{ docfile.creationdate }}
                                    </p>
                                </div>
                                <div class=\"col text-right\">
                                    <button type=\"submit\" name=\"action\" value=\"edit-file\" class=\"btn btn-sm btn-primary\">
                                        <i class=\"fas fa-save fa-fw\" aria-hidden=\"true\"></i> {{ i18n.trans('save') }}
                                    </button>
                                    &nbsp;
                                    <div class=\"btn-group\">
                                        <div class=\"dropdown\">
                                            <button class=\"btn btn-sm btn-danger dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                                <i class=\"fas fa-trash-alt\"></i>
                                            </button>
                                            <div class=\"dropdown-menu dropdown-menu-right\">
                                                <button type=\"submit\" name=\"action\" value=\"delete-file\" class=\"dropdown-item\" href=\"#\">
                                                    <i class=\"far fa-trash-alt fa-fw\"></i> {{ i18n.trans('delete-file') }}
                                                </button>
                                                <button type=\"submit\" name=\"action\" value=\"unlink-file\" class=\"dropdown-item\" href=\"#\">
                                                    <i class=\"fas fa-unlink fa-fw\"></i> {{ i18n.trans('unlink-file') }}
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            {% endfor %}
            <form action=\"{{ doc.url() }}\" method=\"post\" enctype=\"multipart/form-data\">
                <input type=\"hidden\" name=\"activetab\" value=\"{{ currentView.getViewName() }}\" />
                <input type=\"hidden\" name=\"action\" value=\"add-file\" />
                <input type=\"hidden\" name=\"multireqtoken\" value=\"{{ fsc.multiRequestProtection.newToken(fsc.user.logkey) }}\"/>
                <div class=\"card border-success shadow\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">
                            <i class=\"far fa-file\"></i> {{ i18n.trans('new') }}
                        </h5>
                        <div class=\"form-group\">
                            <textarea name=\"observations\" class=\"form-control\" placeholder=\"{{ i18n.trans('observations') }}\"></textarea>
                        </div>
                        <div class=\"form-row align-items-end\">
                            <div class=\"col\">
                                <input type=\"file\" name=\"new-file\" class=\"form-control-file\" required=\"\" />
                                <p class=\"text-muted mb-0\">
                                    {{ i18n.trans('help-server-accepts-filesize', {'%size%': currentView.model.getMaxFileUpload()}) }}
                                </p>
                            </div>
                            <div class=\"col text-right\">
                                <button type=\"submit\" class=\"btn btn-sm btn-success\">
                                    <i class=\"fas fa-save fa-fw\" aria-hidden=\"true\"></i> {{ i18n.trans('save') }}
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
", "Tab/DocFiles.html.twig", "C:\\xampp2\\htdocs\\facturascripts\\facturasscripts\\Core\\View\\Tab\\DocFiles.html.twig");
    }
}
