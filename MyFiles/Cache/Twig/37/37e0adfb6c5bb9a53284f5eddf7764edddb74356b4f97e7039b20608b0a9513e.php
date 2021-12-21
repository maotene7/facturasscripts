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

/* Master/MenuTemplate.html.twig */
class __TwigTemplate_f601d8ff25a8217d734224d58cb1a232a8c5deb9c953fd087418b9d6d56f9aad extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'meta' => [$this, 'block_meta'],
            'icons' => [$this, 'block_icons'],
            'css' => [$this, 'block_css'],
            'javascripts' => [$this, 'block_javascripts'],
            'fullBody' => [$this, 'block_fullBody'],
            'navbar' => [$this, 'block_navbar'],
            'navbarContent' => [$this, 'block_navbarContent'],
            'messages' => [$this, 'block_messages'],
            'bodyHeaderOptions' => [$this, 'block_bodyHeaderOptions'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 20
        echo "<!DOCTYPE html>
<html xmlns=\"http://www.w3.org/1999/xhtml\" lang=\"";
        // line 21
        echo twig_escape_filter($this->env, twig_slice($this->env, twig_constant("FS_LANG"), 0, 2), "html", null, true);
        echo "\" xml:lang=\"";
        echo twig_escape_filter($this->env, twig_slice($this->env, twig_constant("FS_LANG"), 0, 2), "html", null, true);
        echo "\" >
    <head>
        ";
        // line 23
        $this->displayBlock('meta', $context, $blocks);
        // line 31
        echo "        ";
        $this->displayBlock('icons', $context, $blocks);
        // line 35
        echo "        ";
        $this->displayBlock('css', $context, $blocks);
        // line 40
        echo "        ";
        // line 41
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["assetManager"] ?? null), "get", [0 => "css"], "method", false, false, false, 41));
        foreach ($context['_seq'] as $context["_key"] => $context["css"]) {
            // line 42
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $context["css"], "html", null, true);
            echo "\" />
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['css'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 52
        echo "        ";
        // line 53
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["assetManager"] ?? null), "get", [0 => "js"], "method", false, false, false, 53));
        foreach ($context['_seq'] as $context["_key"] => $context["js"]) {
            // line 54
            echo "            <script src=\"";
            echo twig_escape_filter($this->env, $context["js"], "html", null, true);
            echo "\"></script>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['js'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "        ";
        echo twig_get_attribute($this->env, $this->source, ($context["debugBarRender"] ?? null), "renderHead", [], "method", false, false, false, 56);
        echo "
    </head>
    ";
        // line 58
        $this->displayBlock('fullBody', $context, $blocks);
        // line 129
        echo "</html>";
    }

    // line 23
    public function block_meta($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 24
        echo "            <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\" />
            <title>";
        // line 25
        echo twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "title", [], "any", false, false, false, 25);
        echo "</title>
            <meta name=\"description\" content=\"";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "meta-description"], "method", false, false, false, 26), "html", null, true);
        echo "\" />
            <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />
            <meta name=\"generator\" content=\"FacturaScripts\" />
            <meta name=\"robots\" content=\"noindex\" />
        ";
    }

    // line 31
    public function block_icons($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 32
        echo "            <link rel=\"shortcut icon\" href=\"";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('asset')->getCallable(), ["Dinamic/Assets/Images/favicon.ico"]), "html", null, true);
        echo "\" />
            <link rel=\"apple-touch-icon\" sizes=\"180x180\" href=\"";
        // line 33
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('asset')->getCallable(), ["Dinamic/Assets/Images/apple-icon-180x180.png"]), "html", null, true);
        echo "\" />
        ";
    }

    // line 35
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 36
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('asset')->getCallable(), ["node_modules/bootstrap/dist/css/bootstrap.min.css"]), "html", null, true);
        echo "\" />
            <link rel=\"stylesheet\" href=\"";
        // line 37
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('asset')->getCallable(), ["node_modules/@fortawesome/fontawesome-free/css/all.min.css"]), "html", null, true);
        echo "\" />
            <link rel=\"stylesheet\" href=\"";
        // line 38
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('asset')->getCallable(), ["Dinamic/Assets/CSS/custom.css"]), "html", null, true);
        echo "?v=2\" />
        ";
    }

    // line 44
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 45
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('asset')->getCallable(), ["node_modules/jquery/dist/jquery.min.js"]), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 46
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('asset')->getCallable(), ["node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"]), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 47
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('asset')->getCallable(), ["node_modules/bootbox/dist/bootbox.min.js"]), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 48
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('asset')->getCallable(), ["node_modules/bootbox/dist/bootbox.locales.min.js"]), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 49
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('asset')->getCallable(), ["node_modules/pace-js/pace.min.js"]), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 50
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('asset')->getCallable(), ["Dinamic/Assets/JS/Custom.js"]), "html", null, true);
        echo "?v=2\"></script>
        ";
    }

    // line 58
    public function block_fullBody($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 59
        echo "        <body>
            ";
        // line 60
        $this->displayBlock('navbar', $context, $blocks);
        // line 104
        echo "            <div class=\"bg-header pt-3\">
                ";
        // line 105
        $this->displayBlock('messages', $context, $blocks);
        // line 118
        echo "                ";
        $this->displayBlock('bodyHeaderOptions', $context, $blocks);
        // line 120
        echo "            </div>
            ";
        // line 121
        $this->displayBlock('body', $context, $blocks);
        // line 123
        echo "            <br/>
            <br/>
            <br/>
            ";
        // line 126
        echo twig_get_attribute($this->env, $this->source, ($context["debugBarRender"] ?? null), "render", [], "method", false, false, false, 126);
        echo "
        </body>
    ";
    }

    // line 60
    public function block_navbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 61
        echo "                <nav class=\"navbar navbar-expand navbar-dark bg-dark sticky-top d-print-none\">
                    ";
        // line 62
        $this->displayBlock('navbarContent', $context, $blocks);
        // line 102
        echo "                </nav>
            ";
    }

    // line 62
    public function block_navbarContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 63
        echo "                        <a class=\"navbar-brand d-none d-sm-inline\" href=\"";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('asset')->getCallable(), [""]), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "homepage"], "method", false, false, false, 63), "html", null, true);
        echo "\">
                            <img src=\"";
        // line 64
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('asset')->getCallable(), ["Dinamic/Assets/Images/logo-white.png"]), "html", null, true);
        echo "\" width=\"30\" height=\"30\" class=\"d-inline-block align-top\" alt=\"FacturaScripts\"/>
                            <span class=\"d-none d-xl-inline\">";
        // line 65
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "empresa", [], "any", false, false, false, 65), "nombrecorto", [], "any", false, false, false, 65);
        echo "</span>
                        </a>
                        <div class=\"navbar-collapse collapse\">
                            <ul class=\"navbar-nav pt-1\">
                                ";
        // line 69
        $macros["macros"] = $this->loadTemplate("Macro/Menu.html.twig", "Master/MenuTemplate.html.twig", 69)->unwrap();
        // line 70
        echo "                                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["menuManager"] ?? null), "getMenu", [], "method", false, false, false, 70));
        foreach ($context['_seq'] as $context["_key"] => $context["menuItem"]) {
            // line 71
            echo "                                    ";
            echo twig_call_macro($macros["macros"], "macro_showMenu", [$context["menuItem"]], 71, $context, $this->getSourceContext());
            echo "
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menuItem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        echo "                            </ul>
                            <ul class=\"navbar-nav flex-row ml-auto\">
                                <li class=\"nav-item";
        // line 75
        echo (((($context["template"] ?? null) == "MegaSearch.html.twig")) ? (" active") : (""));
        echo "\" title=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "search"], "method", false, false, false, 75), "html", null, true);
        echo "\">
                                    <a class=\"nav-link\" href=\"MegaSearch\">
                                        <i class=\"fas fa-search\" aria-hidden=\"true\"></i>
                                    </a>
                                </li>
                                <li class=\"nav-item\" title=\"";
        // line 80
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "help"], "method", false, false, false, 80), "html", null, true);
        echo "\">
                                    <a class=\"nav-link\" href=\"https://facturascripts.com/ayuda\" target=\"_blank\">
                                        <i class=\"fas fa-question-circle\" aria-hidden=\"true\"></i>
                                    </a>
                                </li>
                                <li class=\"nav-item dropdown\" title=\"";
        // line 85
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "user"], "method", false, false, false, 85), "html", null, true);
        echo "\">
                                    <a class=\"nav-link dropdown-toggle mr-md-2\" href=\"#\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                        <i class=\"fas fa-user-circle fa-fw\" aria-hidden=\"true\"></i>
                                    </a>
                                    <div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"user-list\">
                                        <a class=\"dropdown-item\" href=\"";
        // line 90
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "user", [], "any", false, false, false, 90), "url", [], "method", false, false, false, 90), "html", null, true);
        echo "\">
                                            <i class=\"fas fa-user-circle fa-fw\" aria-hidden=\"true\"></i> ";
        // line 91
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "user", [], "any", false, false, false, 91), "nick", [], "any", false, false, false, 91), "html", null, true);
        echo "
                                        </a>
                                        <div class=\"dropdown-divider\"></div>
                                        <a class=\"dropdown-item\" href=\"?logout=TRUE\">
                                            <i class=\"fas fa-door-open fa-fw\" aria-hidden=\"true\"></i> ";
        // line 95
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "logout"], "method", false, false, false, 95), "html", null, true);
        echo "
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    ";
    }

    // line 105
    public function block_messages($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 106
        echo "                    ";
        $macros["__internal_8b0daa32bca0ac19379d665d41be325bd8189c7de00fe1ea6d947aa7f9554497"] = $this->loadTemplate("Macro/Utils.html.twig", "Master/MenuTemplate.html.twig", 106)->unwrap();
        // line 107
        echo "                    <div class=\"container-fluid\">
                        <div class=\"row\">
                            <div class=\"col-12\">
                                ";
        // line 110
        echo twig_call_macro($macros["__internal_8b0daa32bca0ac19379d665d41be325bd8189c7de00fe1ea6d947aa7f9554497"], "macro_message", [($context["log"] ?? null), [0 => "error", 1 => "critical"], "danger"], 110, $context, $this->getSourceContext());
        echo "
                                ";
        // line 111
        echo twig_call_macro($macros["__internal_8b0daa32bca0ac19379d665d41be325bd8189c7de00fe1ea6d947aa7f9554497"], "macro_message", [($context["log"] ?? null), [0 => "warning"], "warning"], 111, $context, $this->getSourceContext());
        echo "
                                ";
        // line 112
        echo twig_call_macro($macros["__internal_8b0daa32bca0ac19379d665d41be325bd8189c7de00fe1ea6d947aa7f9554497"], "macro_message", [($context["log"] ?? null), [0 => "notice"], "success"], 112, $context, $this->getSourceContext());
        echo "
                                ";
        // line 113
        echo twig_call_macro($macros["__internal_8b0daa32bca0ac19379d665d41be325bd8189c7de00fe1ea6d947aa7f9554497"], "macro_message", [($context["log"] ?? null), [0 => "info"], "info"], 113, $context, $this->getSourceContext());
        echo "
                            </div>
                        </div>
                    </div>
                ";
    }

    // line 118
    public function block_bodyHeaderOptions($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 119
        echo "                ";
    }

    // line 121
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 122
        echo "            ";
    }

    public function getTemplateName()
    {
        return "Master/MenuTemplate.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  380 => 122,  376 => 121,  372 => 119,  368 => 118,  359 => 113,  355 => 112,  351 => 111,  347 => 110,  342 => 107,  339 => 106,  335 => 105,  324 => 95,  317 => 91,  313 => 90,  305 => 85,  297 => 80,  287 => 75,  283 => 73,  274 => 71,  269 => 70,  267 => 69,  260 => 65,  256 => 64,  249 => 63,  245 => 62,  240 => 102,  238 => 62,  235 => 61,  231 => 60,  224 => 126,  219 => 123,  217 => 121,  214 => 120,  211 => 118,  209 => 105,  206 => 104,  204 => 60,  201 => 59,  197 => 58,  191 => 50,  187 => 49,  183 => 48,  179 => 47,  175 => 46,  170 => 45,  166 => 44,  160 => 38,  156 => 37,  151 => 36,  147 => 35,  141 => 33,  136 => 32,  132 => 31,  123 => 26,  119 => 25,  116 => 24,  112 => 23,  108 => 129,  106 => 58,  100 => 56,  91 => 54,  86 => 53,  84 => 52,  81 => 44,  72 => 42,  67 => 41,  65 => 40,  62 => 35,  59 => 31,  57 => 23,  50 => 21,  47 => 20,);
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
<!DOCTYPE html>
<html xmlns=\"http://www.w3.org/1999/xhtml\" lang=\"{{ constant('FS_LANG') | slice(0, 2) }}\" xml:lang=\"{{ constant('FS_LANG') | slice(0, 2) }}\" >
    <head>
        {% block meta %}
            <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\" />
            <title>{{ fsc.title | raw }}</title>
            <meta name=\"description\" content=\"{{ i18n.trans('meta-description') }}\" />
            <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />
            <meta name=\"generator\" content=\"FacturaScripts\" />
            <meta name=\"robots\" content=\"noindex\" />
        {% endblock %}
        {% block icons %}
            <link rel=\"shortcut icon\" href=\"{{ asset('Dinamic/Assets/Images/favicon.ico') }}\" />
            <link rel=\"apple-touch-icon\" sizes=\"180x180\" href=\"{{ asset('Dinamic/Assets/Images/apple-icon-180x180.png') }}\" />
        {% endblock %}
        {% block css %}
            <link rel=\"stylesheet\" href=\"{{ asset('node_modules/bootstrap/dist/css/bootstrap.min.css') }}\" />
            <link rel=\"stylesheet\" href=\"{{ asset('node_modules/@fortawesome/fontawesome-free/css/all.min.css') }}\" />
            <link rel=\"stylesheet\" href=\"{{ asset('Dinamic/Assets/CSS/custom.css') }}?v=2\" />
        {% endblock %}
        {# Adds custom CSS assets #}
        {% for css in assetManager.get('css') %}
            <link rel=\"stylesheet\" href=\"{{ css }}\" />
        {% endfor %}
        {% block javascripts %}
            <script src=\"{{ asset('node_modules/jquery/dist/jquery.min.js') }}\"></script>
            <script src=\"{{ asset('node_modules/bootstrap/dist/js/bootstrap.bundle.min.js') }}\"></script>
            <script src=\"{{ asset('node_modules/bootbox/dist/bootbox.min.js') }}\"></script>
            <script src=\"{{ asset('node_modules/bootbox/dist/bootbox.locales.min.js') }}\"></script>
            <script src=\"{{ asset('node_modules/pace-js/pace.min.js') }}\"></script>
            <script src=\"{{ asset('Dinamic/Assets/JS/Custom.js') }}?v=2\"></script>
        {% endblock %}
        {# Adds custom JS assets #}
        {% for js in assetManager.get('js') %}
            <script src=\"{{ js }}\"></script>
        {% endfor %}
        {{ debugBarRender.renderHead() | raw }}
    </head>
    {% block fullBody %}
        <body>
            {% block navbar %}
                <nav class=\"navbar navbar-expand navbar-dark bg-dark sticky-top d-print-none\">
                    {% block navbarContent %}
                        <a class=\"navbar-brand d-none d-sm-inline\" href=\"{{ asset('') }}\" title=\"{{ i18n.trans('homepage') }}\">
                            <img src=\"{{ asset('Dinamic/Assets/Images/logo-white.png') }}\" width=\"30\" height=\"30\" class=\"d-inline-block align-top\" alt=\"FacturaScripts\"/>
                            <span class=\"d-none d-xl-inline\">{{ fsc.empresa.nombrecorto | raw }}</span>
                        </a>
                        <div class=\"navbar-collapse collapse\">
                            <ul class=\"navbar-nav pt-1\">
                                {% import 'Macro/Menu.html.twig' as macros %}
                                {% for menuItem in menuManager.getMenu() %}
                                    {{ macros.showMenu(menuItem) }}
                                {% endfor %}
                            </ul>
                            <ul class=\"navbar-nav flex-row ml-auto\">
                                <li class=\"nav-item{{ template == 'MegaSearch.html.twig' ? ' active' : '' }}\" title=\"{{ i18n.trans('search') }}\">
                                    <a class=\"nav-link\" href=\"MegaSearch\">
                                        <i class=\"fas fa-search\" aria-hidden=\"true\"></i>
                                    </a>
                                </li>
                                <li class=\"nav-item\" title=\"{{ i18n.trans('help') }}\">
                                    <a class=\"nav-link\" href=\"https://facturascripts.com/ayuda\" target=\"_blank\">
                                        <i class=\"fas fa-question-circle\" aria-hidden=\"true\"></i>
                                    </a>
                                </li>
                                <li class=\"nav-item dropdown\" title=\"{{ i18n.trans('user') }}\">
                                    <a class=\"nav-link dropdown-toggle mr-md-2\" href=\"#\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                        <i class=\"fas fa-user-circle fa-fw\" aria-hidden=\"true\"></i>
                                    </a>
                                    <div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"user-list\">
                                        <a class=\"dropdown-item\" href=\"{{ fsc.user.url() }}\">
                                            <i class=\"fas fa-user-circle fa-fw\" aria-hidden=\"true\"></i> {{ fsc.user.nick }}
                                        </a>
                                        <div class=\"dropdown-divider\"></div>
                                        <a class=\"dropdown-item\" href=\"?logout=TRUE\">
                                            <i class=\"fas fa-door-open fa-fw\" aria-hidden=\"true\"></i> {{ i18n.trans('logout') }}
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    {% endblock %}
                </nav>
            {% endblock %}
            <div class=\"bg-header pt-3\">
                {% block messages %}
                    {% from 'Macro/Utils.html.twig' import message as showMessage %}
                    <div class=\"container-fluid\">
                        <div class=\"row\">
                            <div class=\"col-12\">
                                {{ showMessage(log, ['error', 'critical'], 'danger') }}
                                {{ showMessage(log, ['warning'], 'warning') }}
                                {{ showMessage(log, ['notice'], 'success') }}
                                {{ showMessage(log, ['info'], 'info') }}
                            </div>
                        </div>
                    </div>
                {% endblock %}
                {% block bodyHeaderOptions %}
                {% endblock %}
            </div>
            {% block body %}
            {% endblock %}
            <br/>
            <br/>
            <br/>
            {{ debugBarRender.render() | raw }}
        </body>
    {% endblock %}
</html>", "Master/MenuTemplate.html.twig", "C:\\xampp2\\htdocs\\facturascripts\\facturasscripts\\Core\\View\\Master\\MenuTemplate.html.twig");
    }
}
