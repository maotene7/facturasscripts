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

/* Master/PanelController.html.twig */
class __TwigTemplate_dd1fe7b2a4d1f8297a46eef77f0557eae4eb9aeffec358c7f6569c59058dcdb2 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'bodyHeaderOptions' => [$this, 'block_bodyHeaderOptions'],
            'body' => [$this, 'block_body'],
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
        $this->parent = $this->loadTemplate("Master/MenuTemplate.html.twig", "Master/PanelController.html.twig", 20);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 22
    public function block_bodyHeaderOptions($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 23
        echo "    ";
        $this->displayParentBlock("bodyHeaderOptions", $context, $blocks);
        echo "
    ";
        // line 24
        $context["pageData"] = twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "getPageData", [], "method", false, false, false, 24);
        // line 25
        echo "    ";
        $context["firstView"] = twig_first($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "views", [], "any", false, false, false, 25));
        // line 26
        echo "    <div class=\"container-fluid d-print-none\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                ";
        // line 30
        echo "                <nav aria-label=\"breadcrumb\">
                    <ol class=\"breadcrumb d-md-none\">
                        <li class=\"breadcrumb-item\">
                            <a href=\"#\">";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => twig_get_attribute($this->env, $this->source, ($context["pageData"] ?? null), "menu", [], "any", false, false, false, 33)], "method", false, false, false, 33), "html", null, true);
        echo "</a>
                        </li>
                        ";
        // line 35
        if (twig_get_attribute($this->env, $this->source, ($context["pageData"] ?? null), "submenu", [], "any", false, false, false, 35)) {
            // line 36
            echo "                            <li class=\"breadcrumb-item\">
                                <a href=\"#\">";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => twig_get_attribute($this->env, $this->source, ($context["pageData"] ?? null), "submenu", [], "any", false, false, false, 37)], "method", false, false, false, 37), "html", null, true);
            echo "</a>
                            </li>
                        ";
        }
        // line 40
        echo "                        <li class=\"breadcrumb-item\">
                            <a href=\"";
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["firstView"] ?? null), "model", [], "any", false, false, false, 41), "url", [0 => "list"], "method", false, false, false, 41), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => twig_get_attribute($this->env, $this->source, ($context["pageData"] ?? null), "title", [], "any", false, false, false, 41)], "method", false, false, false, 41), "html", null, true);
        echo "</a>
                        </li>
                        <li class=\"breadcrumb-item active\" aria-current=\"page\">
                            ";
        // line 44
        if (twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "hasData", [], "any", false, false, false, 44)) {
            // line 45
            echo "                                ";
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["firstView"] ?? null), "model", [], "any", false, false, false, 45), "primaryDescription", [], "method", false, false, false, 45);
            echo "
                            ";
        } else {
            // line 47
            echo "                                ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "new"], "method", false, false, false, 47), "html", null, true);
            echo "
                            ";
        }
        // line 49
        echo "                        </li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class=\"row\">
            ";
        // line 56
        echo "            <div class=\"col-md col-8 mb-2\">
                <div class=\"btn-group bg-white\">
                    <a href=\"";
        // line 58
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["firstView"] ?? null), "model", [], "any", false, false, false, 58), "url", [0 => "list"], "method", false, false, false, 58), "html", null, true);
        echo "\" class=\"btn btn-sm btn-outline-secondary\">
                        <i class=\"fas fa-list fa-fw\" aria-hidden=\"true\"></i>
                        <span class=\"d-none d-lg-inline-block\">";
        // line 60
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "all"], "method", false, false, false, 60), "html", null, true);
        echo "</span>
                    </a>
                    <a href=\"";
        // line 62
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["firstView"] ?? null), "model", [], "any", false, false, false, 62), "url", [0 => "edit"], "method", false, false, false, 62), "html", null, true);
        echo "\" class=\"btn btn-sm btn-outline-secondary\" title=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "refresh"], "method", false, false, false, 62), "html", null, true);
        echo "\">
                        <i class=\"fas fa-redo\" aria-hidden=\"true\"></i>
                    </a>
                </div>
                ";
        // line 67
        echo "                ";
        echo twig_call_macro($macros["_self"], "macro_optionsButton", [($context["fsc"] ?? null), ($context["firstView"] ?? null), ($context["i18n"] ?? null)], 67, $context, $this->getSourceContext());
        echo "
                &nbsp;
                ";
        // line 70
        echo "                ";
        if ((twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "hasData", [], "any", false, false, false, 70) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["firstView"] ?? null), "settings", [], "any", false, false, false, 70), "btnNew", [], "any", false, false, false, 70))) {
            // line 71
            echo "                    <a href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["firstView"] ?? null), "model", [], "any", false, false, false, 71), "url", [0 => "new"], "method", false, false, false, 71), "html", null, true);
            echo "\" class=\"btn btn-sm btn-success\">
                        <i class=\"fas fa-plus fa-fw\" aria-hidden=\"true\"></i>
                        <span class=\"d-none d-lg-inline-block\">";
            // line 73
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "new"], "method", false, false, false, 73), "html", null, true);
            echo "</span>
                    </a>
                ";
        }
        // line 76
        echo "                ";
        // line 77
        echo "                ";
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["firstView"] ?? null), "getRow", [0 => "actions"], "method", false, false, false, 77), "renderTop", [], "method", false, false, false, 77);
        echo "
                ";
        // line 79
        echo "                ";
        if ((twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "hasData", [], "any", false, false, false, 79) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["firstView"] ?? null), "settings", [], "any", false, false, false, 79), "btnPrint", [], "any", false, false, false, 79))) {
            // line 80
            echo "                    ";
            echo twig_call_macro($macros["_self"], "macro_printButton", [($context["fsc"] ?? null), ($context["firstView"] ?? null), ($context["i18n"] ?? null)], 80, $context, $this->getSourceContext());
            echo "
                ";
        }
        // line 82
        echo "            </div>
            ";
        // line 84
        echo "            <div class=\"col-md d-none d-md-inline-block text-right\">
                <h1 class=\"h4\">
                    ";
        // line 86
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => twig_get_attribute($this->env, $this->source, ($context["pageData"] ?? null), "title", [], "any", false, false, false, 86)], "method", false, false, false, 86), "html", null, true);
        echo "<br/>
                    ";
        // line 87
        if (twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "hasData", [], "any", false, false, false, 87)) {
            // line 88
            echo "                        <small class=\"text-info\">";
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["firstView"] ?? null), "model", [], "any", false, false, false, 88), "primaryDescription", [], "method", false, false, false, 88);
            echo "</small>
                    ";
        } else {
            // line 90
            echo "                        <small class=\"text-info\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "new"], "method", false, false, false, 90), "html", null, true);
            echo "</small>
                    ";
        }
        // line 92
        echo "                </h1>
            </div>
            ";
        // line 95
        echo "            <div class=\"col-lg-1 d-none d-lg-inline-block text-center\">
                ";
        // line 96
        $context["image"] = twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "getImageUrl", [], "method", false, false, false, 96);
        // line 97
        echo "                ";
        if (twig_test_empty(($context["image"] ?? null))) {
            // line 98
            echo "                    <i class=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["pageData"] ?? null), "icon", [], "any", false, false, false, 98), "html", null, true);
            echo " fa-3x\" aria-hidden=\"true\"></i>
                ";
        } else {
            // line 100
            echo "                    <img src=\"";
            echo twig_escape_filter($this->env, ($context["image"] ?? null), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "title", [], "any", false, false, false, 100), "html", null, true);
            echo "\" class=\"img-thumbnail\" style=\"margin-bottom: 10px;\"/>
                ";
        }
        // line 102
        echo "            </div>
        </div>
    </div>
";
    }

    // line 107
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 108
        echo "    ";
        $context["firstView"] = twig_first($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "views", [], "any", false, false, false, 108));
        // line 109
        echo "    <div class=\"container-fluid\">
        <div class=\"row\">
            ";
        // line 112
        echo "            ";
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "views", [], "any", false, false, false, 112)) > 1)) {
            // line 113
            echo "                <div class=\"col-lg-2 d-none d-lg-inline-block\">
                    <div class=\"nav flex-column nav-pills\" id=\"mainTabs\" role=\"tablist\">
                        ";
            // line 115
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "views", [], "any", false, false, false, 115));
            foreach ($context['_seq'] as $context["viewName"] => $context["view"]) {
                // line 116
                echo "                            ";
                $context["active"] = ((($context["viewName"] == twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "active", [], "any", false, false, false, 116))) ? (" active") : (""));
                // line 117
                echo "                            ";
                $context["disable"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["view"], "settings", [], "any", false, false, false, 117), "active", [], "any", false, false, false, 117)) ? ("") : (" disabled"));
                // line 118
                echo "                            <a class=\"nav-link";
                echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
                echo twig_escape_filter($this->env, ($context["disable"] ?? null), "html", null, true);
                echo "\" id=\"";
                echo twig_escape_filter($this->env, $context["viewName"], "html", null, true);
                echo "-tab\" data-toggle=\"pill\" href=\"#";
                echo twig_escape_filter($this->env, $context["viewName"], "html", null, true);
                echo "\"
                               role=\"tab\" aria-controls=\"";
                // line 119
                echo twig_escape_filter($this->env, $context["viewName"], "html", null, true);
                echo "\" aria-expanded=\"true\">
                                ";
                // line 120
                if (((twig_get_attribute($this->env, $this->source, $context["view"], "count", [], "any", false, false, false, 120) >= 1) && ($context["viewName"] != twig_get_attribute($this->env, $this->source, ($context["firstView"] ?? null), "getViewName", [], "method", false, false, false, 120)))) {
                    // line 121
                    echo "                                    <span class='badge badge-secondary float-right'>";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["view"], "count", [], "any", false, false, false, 121), "html", null, true);
                    echo "</span>
                                ";
                }
                // line 123
                echo "                                <i class=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["view"], "icon", [], "any", false, false, false, 123), "html", null, true);
                echo " fa-fw d-none d-xl-inline-block\" aria-hidden=\"true\"></i> ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["view"], "title", [], "any", false, false, false, 123), "html", null, true);
                echo "
                            </a>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['viewName'], $context['view'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 126
            echo "                    </div>
                </div>
            ";
        }
        // line 129
        echo "            ";
        // line 130
        echo "            ";
        $context["rightPanelClass"] = (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "views", [], "any", false, false, false, 130)) > 1)) ? ("col-lg-10") : ("col"));
        // line 131
        echo "            <div class=\"";
        echo twig_escape_filter($this->env, ($context["rightPanelClass"] ?? null), "html", null, true);
        echo "\">
                ";
        // line 133
        echo "                ";
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "views", [], "any", false, false, false, 133)) > 1)) {
            // line 134
            echo "                    <div class=\"nav nav-tabs d-lg-none\" role=\"tablist\">
                        ";
            // line 135
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "views", [], "any", false, false, false, 135));
            foreach ($context['_seq'] as $context["viewName"] => $context["view"]) {
                // line 136
                echo "                            ";
                $context["active"] = ((($context["viewName"] == twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "active", [], "any", false, false, false, 136))) ? (" active") : (""));
                // line 137
                echo "                            ";
                $context["disable"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["view"], "settings", [], "any", false, false, false, 137), "active", [], "any", false, false, false, 137)) ? ("") : (" disabled"));
                // line 138
                echo "                            <a class=\"nav-link";
                echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
                echo twig_escape_filter($this->env, ($context["disable"] ?? null), "html", null, true);
                echo "\" id=\"";
                echo twig_escape_filter($this->env, $context["viewName"], "html", null, true);
                echo "-tab2\" data-toggle=\"tab\" href=\"#";
                echo twig_escape_filter($this->env, $context["viewName"], "html", null, true);
                echo "\"
                               role=\"tab\" aria-controls=\"";
                // line 139
                echo twig_escape_filter($this->env, $context["viewName"], "html", null, true);
                echo "\" aria-expanded=\"true\">
                                ";
                // line 140
                if ((twig_get_attribute($this->env, $this->source, $context["view"], "count", [], "any", false, false, false, 140) > 1)) {
                    echo "<span class='badge badge-secondary float-right'>";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["view"], "count", [], "any", false, false, false, 140), "html", null, true);
                    echo "</span>";
                }
                // line 141
                echo "                                <i class=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["view"], "icon", [], "any", false, false, false, 141), "html", null, true);
                echo " fa-fw\" aria-hidden=\"true\"></i>
                            </a>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['viewName'], $context['view'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 144
            echo "                    </div>
                ";
        }
        // line 146
        echo "                ";
        // line 147
        echo "                <div class=\"tab-content\" id=\"mainTabsContent\">
                    ";
        // line 148
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "views", [], "any", false, false, false, 148));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["viewName"] => $context["view"]) {
            // line 149
            echo "                        ";
            $context["active"] = ((($context["viewName"] == twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "active", [], "any", false, false, false, 149))) ? (" show active") : (""));
            // line 150
            echo "                        <div class=\"tab-pane fade";
            echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
            echo "\" id=\"";
            echo twig_escape_filter($this->env, $context["viewName"], "html", null, true);
            echo "\" role=\"tabpanel\" aria-labelledby=\"";
            echo twig_escape_filter($this->env, $context["viewName"], "html", null, true);
            echo "-tab\">
                            ";
            // line 151
            twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "setCurrentView", [0 => $context["viewName"]], "method", false, false, false, 151);
            // line 152
            echo "                            ";
            echo twig_include($this->env, $context, twig_get_attribute($this->env, $this->source, $context["view"], "template", [], "any", false, false, false, 152));
            echo "
                        </div>
                    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['viewName'], $context['view'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 155
        echo "                </div>
            </div>
        </div>
    </div>
";
    }

    // line 161
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 162
        echo "    ";
        $this->displayParentBlock("css", $context, $blocks);
        echo "
    <style>
        body {
            background-color: #FAFBFC;
        }
    </style>
";
    }

    // line 170
    public function macro_optionsButton($__fsc__ = null, $__firstView__ = null, $__i18n__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "fsc" => $__fsc__,
            "firstView" => $__firstView__,
            "i18n" => $__i18n__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 171
            echo "    ";
            $context["show"] = false;
            // line 172
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "views", [], "any", false, false, false, 172));
            foreach ($context['_seq'] as $context["viewName"] => $context["view"]) {
                // line 173
                echo "        ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["view"], "settings", [], "any", false, false, false, 173), "active", [], "any", false, false, false, 173) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["view"], "columns", [], "any", false, false, false, 173)))) {
                    // line 174
                    echo "            ";
                    $context["show"] = true;
                    // line 175
                    echo "        ";
                }
                // line 176
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['viewName'], $context['view'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 177
            echo "    ";
            if (($context["show"] ?? null)) {
                // line 178
                echo "        <div class=\"btn-group\">
            <div class=\"dropdown\">
                <button class=\"btn btn-sm btn-secondary dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                    <i class=\"fas fa-wrench fa-fw\" aria-hidden=\"true\"></i>
                    <span class=\"d-none d-lg-inline-block\">";
                // line 182
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "options"], "method", false, false, false, 182), "html", null, true);
                echo "</span>
                </button>
                <div class=\"dropdown-menu\">
                    ";
                // line 185
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "views", [], "any", false, false, false, 185));
                foreach ($context['_seq'] as $context["viewName"] => $context["view"]) {
                    // line 186
                    echo "                        ";
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["view"], "settings", [], "any", false, false, false, 186), "active", [], "any", false, false, false, 186) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["view"], "columns", [], "any", false, false, false, 186)))) {
                        // line 187
                        echo "                            <a class=\"dropdown-item\" href=\"EditPageOption?code=";
                        echo twig_escape_filter($this->env, $context["viewName"], "html", null, true);
                        echo "&url=";
                        echo twig_escape_filter($this->env, twig_urlencode_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["firstView"] ?? null), "model", [], "any", false, false, false, 187), "url", [], "method", false, false, false, 187)), "html", null, true);
                        echo "\">
                                <i class=\"";
                        // line 188
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["view"], "icon", [], "any", false, false, false, 188), "html", null, true);
                        echo " fa-fw\" aria-hidden=\"true\"></i> ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["view"], "title", [], "any", false, false, false, 188), "html", null, true);
                        echo "
                            </a>
                        ";
                    }
                    // line 191
                    echo "                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['viewName'], $context['view'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 192
                echo "                </div>
            </div>
        </div>
    ";
            }

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 198
    public function macro_printButton($__fsc__ = null, $__firstView__ = null, $__i18n__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "fsc" => $__fsc__,
            "firstView" => $__firstView__,
            "i18n" => $__i18n__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 199
            echo "    <div class=\"btn-group bg-white\">
        <a href=\"";
            // line 200
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["firstView"] ?? null), "model", [], "any", false, false, false, 200), "url", [], "method", false, false, false, 200), "html", null, true);
            echo "&action=export&option=";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "exportManager", [], "any", false, false, false, 200), "defaultOption", [], "method", false, false, false, 200), "html", null, true);
            echo "\" target=\"_blank\" class=\"btn btn-sm btn-outline-secondary\">
            <i class=\"fas fa-print fa-fw\" aria-hidden=\"true\"></i>
            <span class=\"d-none d-lg-inline-block\">";
            // line 202
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "print"], "method", false, false, false, 202), "html", null, true);
            echo "</span>
        </a>
        <button type=\"button\" class=\"btn btn-sm btn-outline-secondary dropdown-toggle dropdown-toggle-split\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
            <span class=\"sr-only\">";
            // line 205
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "more"], "method", false, false, false, 205), "html", null, true);
            echo "</span>
        </button>
        <div class=\"dropdown-menu dropdown-menu-right\">
            ";
            // line 208
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "exportManager", [], "any", false, false, false, 208), "options", [], "method", false, false, false, 208));
            foreach ($context['_seq'] as $context["key"] => $context["option"]) {
                // line 209
                echo "                ";
                if (($context["key"] != twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "exportManager", [], "any", false, false, false, 209), "defaultOption", [], "method", false, false, false, 209))) {
                    // line 210
                    echo "                    <a href=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["firstView"] ?? null), "model", [], "any", false, false, false, 210), "url", [], "method", false, false, false, 210), "html", null, true);
                    echo "&action=export&option=";
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo "\" class=\"dropdown-item\">
                        <i class=\"";
                    // line 211
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "icon", [], "any", false, false, false, 211), "html", null, true);
                    echo " fa-fw\" aria-hidden=\"true\"></i>
                        ";
                    // line 212
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => twig_get_attribute($this->env, $this->source, $context["option"], "description", [], "any", false, false, false, 212)], "method", false, false, false, 212), "html", null, true);
                    echo "
                    </a>
                ";
                }
                // line 215
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 216
            echo "            <div class=\"dropdown-divider\"></div>
            <a href=\"#\" class=\"dropdown-item\" data-toggle=\"modal\" data-target=\"#advancedExportModal\">
                <i class=\"fas fa-tools fa-fw\" aria-hidden=\"true\"></i>
                ";
            // line 219
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "advanced"], "method", false, false, false, 219), "html", null, true);
            echo "
            </a>
            ";
            // line 221
            $context["tools"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "exportManager", [], "any", false, false, false, 221), "tools", [], "method", false, false, false, 221);
            // line 222
            echo "            ";
            if ( !twig_test_empty(($context["tools"] ?? null))) {
                // line 223
                echo "                <div class=\"dropdown-divider\"></div>
                ";
                // line 224
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["tools"] ?? null));
                foreach ($context['_seq'] as $context["key"] => $context["tool"]) {
                    // line 225
                    echo "                    <a href=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tool"], "link", [], "any", false, false, false, 225), "html", null, true);
                    echo "\" target=\"_blank\" class=\"dropdown-item\">
                        <i class=\"";
                    // line 226
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tool"], "icon", [], "any", false, false, false, 226), "html", null, true);
                    echo " fa-fw\" aria-hidden=\"true\"></i>
                        ";
                    // line 227
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => twig_get_attribute($this->env, $this->source, $context["tool"], "description", [], "any", false, false, false, 227)], "method", false, false, false, 227), "html", null, true);
                    echo "
                    </a>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['tool'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 230
                echo "            ";
            }
            // line 231
            echo "        </div>
    </div>
    <form action=\"";
            // line 233
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["firstView"] ?? null), "model", [], "any", false, false, false, 233), "url", [], "method", false, false, false, 233), "html", null, true);
            echo "\" method=\"post\" target=\"_blank\">
        <input type=\"hidden\" name=\"action\" value=\"export\" />
        <div class=\"modal fade\" id=\"advancedExportModal\" tabindex=\"-1\" aria-hidden=\"true\">
            <div class=\"modal-dialog\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <h5 class=\"modal-title\">
                            <i class=\"fas fa-tools fa-fw\" aria-hidden=\"true\"></i>
                            ";
            // line 241
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "advanced"], "method", false, false, false, 241), "html", null, true);
            echo "
                        </h5>
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                            <span aria-hidden=\"true\">&times;</span>
                        </button>
                    </div>
                    <div class=\"modal-body text-left\">
                        <div class=\"form-group\">
                            <select name=\"option\" class=\"form-control\">
                                ";
            // line 250
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "exportManager", [], "any", false, false, false, 250), "options", [], "method", false, false, false, 250));
            foreach ($context['_seq'] as $context["key"] => $context["option"]) {
                // line 251
                echo "                                    <option value=\"";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => twig_get_attribute($this->env, $this->source, $context["option"], "description", [], "any", false, false, false, 251)], "method", false, false, false, 251), "html", null, true);
                echo "</option>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 253
            echo "                            </select>
                        </div>
                        <div class=\"form-group\">
                            ";
            // line 256
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "format"], "method", false, false, false, 256), "html", null, true);
            echo "
                            <select name=\"idformat\" class=\"form-control\">
                                <option value=\"\">";
            // line 258
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "default"], "method", false, false, false, 258), "html", null, true);
            echo "</option>
                                <option value=\"\">------</option>
                                ";
            // line 260
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "exportManager", [], "any", false, false, false, 260), "getFormats", [0 => twig_get_attribute($this->env, $this->source, ($context["firstView"] ?? null), "model", [], "any", false, false, false, 260)], "method", false, false, false, 260));
            foreach ($context['_seq'] as $context["_key"] => $context["format"]) {
                // line 261
                echo "                                    <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["format"], "id", [], "any", false, false, false, 261), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["format"], "nombre", [], "any", false, false, false, 261), "html", null, true);
                echo "</option>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['format'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 263
            echo "                            </select>
                        </div>
                        <div class=\"form-group\">
                            ";
            // line 266
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "language"], "method", false, false, false, 266), "html", null, true);
            echo "
                            <select name=\"langcode\" class=\"form-control\">
                                <option value=\"\">";
            // line 268
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "default"], "method", false, false, false, 268), "html", null, true);
            echo "</option>
                                <option value=\"\">------</option>
                                ";
            // line 270
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "getAvailableLanguages", [], "method", false, false, false, 270));
            foreach ($context['_seq'] as $context["code"] => $context["lang"]) {
                // line 271
                echo "                                    <option value=\"";
                echo twig_escape_filter($this->env, $context["code"], "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["lang"], "html", null, true);
                echo "</option>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['code'], $context['lang'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 273
            echo "                            </select>
                        </div>
                        <div class=\"text-right\">
                            <button type=\"submit\" class=\"btn btn-primary\">
                                ";
            // line 277
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "accept"], "method", false, false, false, 277), "html", null, true);
            echo "
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "Master/PanelController.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  757 => 277,  751 => 273,  740 => 271,  736 => 270,  731 => 268,  726 => 266,  721 => 263,  710 => 261,  706 => 260,  701 => 258,  696 => 256,  691 => 253,  680 => 251,  676 => 250,  664 => 241,  653 => 233,  649 => 231,  646 => 230,  637 => 227,  633 => 226,  628 => 225,  624 => 224,  621 => 223,  618 => 222,  616 => 221,  611 => 219,  606 => 216,  600 => 215,  594 => 212,  590 => 211,  583 => 210,  580 => 209,  576 => 208,  570 => 205,  564 => 202,  557 => 200,  554 => 199,  539 => 198,  526 => 192,  520 => 191,  512 => 188,  505 => 187,  502 => 186,  498 => 185,  492 => 182,  486 => 178,  483 => 177,  477 => 176,  474 => 175,  471 => 174,  468 => 173,  463 => 172,  460 => 171,  445 => 170,  433 => 162,  429 => 161,  421 => 155,  403 => 152,  401 => 151,  392 => 150,  389 => 149,  372 => 148,  369 => 147,  367 => 146,  363 => 144,  353 => 141,  347 => 140,  343 => 139,  333 => 138,  330 => 137,  327 => 136,  323 => 135,  320 => 134,  317 => 133,  312 => 131,  309 => 130,  307 => 129,  302 => 126,  290 => 123,  284 => 121,  282 => 120,  278 => 119,  268 => 118,  265 => 117,  262 => 116,  258 => 115,  254 => 113,  251 => 112,  247 => 109,  244 => 108,  240 => 107,  233 => 102,  225 => 100,  219 => 98,  216 => 97,  214 => 96,  211 => 95,  207 => 92,  201 => 90,  195 => 88,  193 => 87,  189 => 86,  185 => 84,  182 => 82,  176 => 80,  173 => 79,  168 => 77,  166 => 76,  160 => 73,  154 => 71,  151 => 70,  145 => 67,  136 => 62,  131 => 60,  126 => 58,  122 => 56,  114 => 49,  108 => 47,  102 => 45,  100 => 44,  92 => 41,  89 => 40,  83 => 37,  80 => 36,  78 => 35,  73 => 33,  68 => 30,  63 => 26,  60 => 25,  58 => 24,  53 => 23,  49 => 22,  38 => 20,);
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

{% block bodyHeaderOptions %}
    {{ parent() }}
    {% set pageData = fsc.getPageData() %}
    {% set firstView = fsc.views | first %}
    <div class=\"container-fluid d-print-none\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                {# -- Hidden alternative page info -- #}
                <nav aria-label=\"breadcrumb\">
                    <ol class=\"breadcrumb d-md-none\">
                        <li class=\"breadcrumb-item\">
                            <a href=\"#\">{{ i18n.trans(pageData.menu) }}</a>
                        </li>
                        {% if pageData.submenu %}
                            <li class=\"breadcrumb-item\">
                                <a href=\"#\">{{ i18n.trans(pageData.submenu) }}</a>
                            </li>
                        {% endif %}
                        <li class=\"breadcrumb-item\">
                            <a href=\"{{ firstView.model.url('list') }}\">{{ i18n.trans(pageData.title) }}</a>
                        </li>
                        <li class=\"breadcrumb-item active\" aria-current=\"page\">
                            {% if fsc.hasData %}
                                {{ firstView.model.primaryDescription() | raw }}
                            {% else %}
                                {{ i18n.trans('new') }}
                            {% endif %}
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class=\"row\">
            {# -- Top left buttons -- #}
            <div class=\"col-md col-8 mb-2\">
                <div class=\"btn-group bg-white\">
                    <a href=\"{{ firstView.model.url('list') }}\" class=\"btn btn-sm btn-outline-secondary\">
                        <i class=\"fas fa-list fa-fw\" aria-hidden=\"true\"></i>
                        <span class=\"d-none d-lg-inline-block\">{{ i18n.trans('all') }}</span>
                    </a>
                    <a href=\"{{ firstView.model.url('edit') }}\" class=\"btn btn-sm btn-outline-secondary\" title=\"{{ i18n.trans('refresh') }}\">
                        <i class=\"fas fa-redo\" aria-hidden=\"true\"></i>
                    </a>
                </div>
                {# -- Options button -- #}
                {{ _self.optionsButton(fsc, firstView, i18n) }}
                &nbsp;
                {# -- New button -- #}
                {% if fsc.hasData and firstView.settings.btnNew %}
                    <a href=\"{{ firstView.model.url('new') }}\" class=\"btn btn-sm btn-success\">
                        <i class=\"fas fa-plus fa-fw\" aria-hidden=\"true\"></i>
                        <span class=\"d-none d-lg-inline-block\">{{ i18n.trans('new') }}</span>
                    </a>
                {% endif %}
                {# -- Action buttons -- #}
                {{ firstView.getRow('actions').renderTop() | raw }}
                {# -- Print button -- #}
                {% if fsc.hasData and firstView.settings.btnPrint %}
                    {{ _self.printButton(fsc, firstView, i18n) }}
                {% endif %}
            </div>
            {# -- Top right text -- #}
            <div class=\"col-md d-none d-md-inline-block text-right\">
                <h1 class=\"h4\">
                    {{ i18n.trans(pageData.title) }}<br/>
                    {% if fsc.hasData %}
                        <small class=\"text-info\">{{ firstView.model.primaryDescription() | raw }}</small>
                    {% else %}
                        <small class=\"text-info\">{{ i18n.trans('new') }}</small>
                    {% endif %}
                </h1>
            </div>
            {# -- Top right icon -- #}
            <div class=\"col-lg-1 d-none d-lg-inline-block text-center\">
                {% set image = fsc.getImageUrl() %}
                {% if image is empty %}
                    <i class=\"{{ pageData.icon }} fa-3x\" aria-hidden=\"true\"></i>
                {% else %}
                    <img src=\"{{ image }}\" alt=\"{{ fsc.title }}\" class=\"img-thumbnail\" style=\"margin-bottom: 10px;\"/>
                {% endif %}
            </div>
        </div>
    </div>
{% endblock %}

{% block body %}
    {% set firstView = fsc.views | first %}
    <div class=\"container-fluid\">
        <div class=\"row\">
            {# -- Left Panel -- #}
            {% if fsc.views | length > 1 %}
                <div class=\"col-lg-2 d-none d-lg-inline-block\">
                    <div class=\"nav flex-column nav-pills\" id=\"mainTabs\" role=\"tablist\">
                        {% for viewName, view in fsc.views %}
                            {% set active = (viewName == fsc.active) ? ' active' : '' %}
                            {% set disable = view.settings.active ? '' : ' disabled' %}
                            <a class=\"nav-link{{ active }}{{ disable }}\" id=\"{{ viewName }}-tab\" data-toggle=\"pill\" href=\"#{{ viewName }}\"
                               role=\"tab\" aria-controls=\"{{ viewName }}\" aria-expanded=\"true\">
                                {% if view.count >= 1 and viewName != firstView.getViewName() %}
                                    <span class='badge badge-secondary float-right'>{{ view.count }}</span>
                                {% endif %}
                                <i class=\"{{ view.icon }} fa-fw d-none d-xl-inline-block\" aria-hidden=\"true\"></i> {{ view.title }}
                            </a>
                        {% endfor %}
                    </div>
                </div>
            {% endif %}
            {# -- Right Panel -- #}
            {% set rightPanelClass = (fsc.views | length > 1) ? 'col-lg-10' : 'col' %}
            <div class=\"{{ rightPanelClass }}\">
                {# -- Tabs on top when screen is small -- #}
                {% if fsc.views | length > 1 %}
                    <div class=\"nav nav-tabs d-lg-none\" role=\"tablist\">
                        {% for viewName, view in fsc.views %}
                            {% set active = (viewName == fsc.active) ? ' active' : '' %}
                            {% set disable = view.settings.active ? '' : ' disabled' %}
                            <a class=\"nav-link{{ active }}{{ disable }}\" id=\"{{ viewName }}-tab2\" data-toggle=\"tab\" href=\"#{{ viewName }}\"
                               role=\"tab\" aria-controls=\"{{ viewName }}\" aria-expanded=\"true\">
                                {% if view.count > 1 %}<span class='badge badge-secondary float-right'>{{ view.count }}</span>{% endif %}
                                <i class=\"{{ view.icon }} fa-fw\" aria-hidden=\"true\"></i>
                            </a>
                        {% endfor %}
                    </div>
                {% endif %}
                {# -- Tab content -- #}
                <div class=\"tab-content\" id=\"mainTabsContent\">
                    {% for viewName, view in fsc.views %}
                        {% set active = (viewName == fsc.active) ? ' show active' : '' %}
                        <div class=\"tab-pane fade{{ active }}\" id=\"{{ viewName }}\" role=\"tabpanel\" aria-labelledby=\"{{ viewName }}-tab\">
                            {% do fsc.setCurrentView(viewName) %}
                            {{ include(view.template) }}
                        </div>
                    {% endfor %}
                </div>
            </div>
        </div>
    </div>
{% endblock %}

{% block css %}
    {{ parent() }}
    <style>
        body {
            background-color: #FAFBFC;
        }
    </style>
{% endblock %}

{% macro optionsButton(fsc, firstView, i18n) %}
    {% set show = false %}
    {% for viewName, view in fsc.views %}
        {% if view.settings.active and view.columns is not empty %}
            {% set show = true %}
        {% endif %}
    {% endfor %}
    {% if show %}
        <div class=\"btn-group\">
            <div class=\"dropdown\">
                <button class=\"btn btn-sm btn-secondary dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                    <i class=\"fas fa-wrench fa-fw\" aria-hidden=\"true\"></i>
                    <span class=\"d-none d-lg-inline-block\">{{ i18n.trans('options') }}</span>
                </button>
                <div class=\"dropdown-menu\">
                    {% for viewName, view in fsc.views %}
                        {% if view.settings.active and view.columns is not empty %}
                            <a class=\"dropdown-item\" href=\"EditPageOption?code={{ viewName }}&url={{ firstView.model.url() | url_encode }}\">
                                <i class=\"{{ view.icon }} fa-fw\" aria-hidden=\"true\"></i> {{ view.title }}
                            </a>
                        {% endif %}
                    {% endfor %}
                </div>
            </div>
        </div>
    {% endif %}
{% endmacro %}

{% macro printButton(fsc, firstView, i18n) %}
    <div class=\"btn-group bg-white\">
        <a href=\"{{ firstView.model.url() }}&action=export&option={{ fsc.exportManager.defaultOption() }}\" target=\"_blank\" class=\"btn btn-sm btn-outline-secondary\">
            <i class=\"fas fa-print fa-fw\" aria-hidden=\"true\"></i>
            <span class=\"d-none d-lg-inline-block\">{{ i18n.trans('print') }}</span>
        </a>
        <button type=\"button\" class=\"btn btn-sm btn-outline-secondary dropdown-toggle dropdown-toggle-split\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
            <span class=\"sr-only\">{{ i18n.trans('more') }}</span>
        </button>
        <div class=\"dropdown-menu dropdown-menu-right\">
            {% for key, option in fsc.exportManager.options() %}
                {% if key != fsc.exportManager.defaultOption() %}
                    <a href=\"{{ firstView.model.url() }}&action=export&option={{ key }}\" class=\"dropdown-item\">
                        <i class=\"{{ option.icon }} fa-fw\" aria-hidden=\"true\"></i>
                        {{ i18n.trans(option.description) }}
                    </a>
                {% endif %}
            {% endfor %}
            <div class=\"dropdown-divider\"></div>
            <a href=\"#\" class=\"dropdown-item\" data-toggle=\"modal\" data-target=\"#advancedExportModal\">
                <i class=\"fas fa-tools fa-fw\" aria-hidden=\"true\"></i>
                {{ i18n.trans('advanced') }}
            </a>
            {% set tools = fsc.exportManager.tools() %}
            {% if tools is not empty %}
                <div class=\"dropdown-divider\"></div>
                {% for key, tool in tools %}
                    <a href=\"{{ tool.link }}\" target=\"_blank\" class=\"dropdown-item\">
                        <i class=\"{{ tool.icon }} fa-fw\" aria-hidden=\"true\"></i>
                        {{ i18n.trans(tool.description) }}
                    </a>
                {% endfor %}
            {% endif %}
        </div>
    </div>
    <form action=\"{{ firstView.model.url() }}\" method=\"post\" target=\"_blank\">
        <input type=\"hidden\" name=\"action\" value=\"export\" />
        <div class=\"modal fade\" id=\"advancedExportModal\" tabindex=\"-1\" aria-hidden=\"true\">
            <div class=\"modal-dialog\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <h5 class=\"modal-title\">
                            <i class=\"fas fa-tools fa-fw\" aria-hidden=\"true\"></i>
                            {{ i18n.trans('advanced') }}
                        </h5>
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                            <span aria-hidden=\"true\">&times;</span>
                        </button>
                    </div>
                    <div class=\"modal-body text-left\">
                        <div class=\"form-group\">
                            <select name=\"option\" class=\"form-control\">
                                {% for key, option in fsc.exportManager.options() %}
                                    <option value=\"{{ key }}\">{{ i18n.trans(option.description) }}</option>
                                {% endfor %}
                            </select>
                        </div>
                        <div class=\"form-group\">
                            {{ i18n.trans('format') }}
                            <select name=\"idformat\" class=\"form-control\">
                                <option value=\"\">{{ i18n.trans('default') }}</option>
                                <option value=\"\">------</option>
                                {% for format in fsc.exportManager.getFormats(firstView.model) %}
                                    <option value=\"{{ format.id }}\">{{ format.nombre }}</option>
                                {% endfor %}
                            </select>
                        </div>
                        <div class=\"form-group\">
                            {{ i18n.trans('language') }}
                            <select name=\"langcode\" class=\"form-control\">
                                <option value=\"\">{{ i18n.trans('default') }}</option>
                                <option value=\"\">------</option>
                                {% for code, lang in i18n.getAvailableLanguages() %}
                                    <option value=\"{{ code }}\">{{ lang }}</option>
                                {% endfor %}
                            </select>
                        </div>
                        <div class=\"text-right\">
                            <button type=\"submit\" class=\"btn btn-primary\">
                                {{ i18n.trans('accept') }}
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
{% endmacro %}", "Master/PanelController.html.twig", "C:\\xampp2\\htdocs\\facturascripts\\facturasscripts\\Core\\View\\Master\\PanelController.html.twig");
    }
}
