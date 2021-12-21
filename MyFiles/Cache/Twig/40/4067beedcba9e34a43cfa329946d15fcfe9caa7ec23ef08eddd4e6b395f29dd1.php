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

/* ProcesarOrdenes.html.twig */
class __TwigTemplate_b7299131354fa8591937cdd06e62d751ab28dd7547b5e7b4744a7aaf42e27413 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
        $macros["_self"] = $this->macros["_self"] = $this;
    }

    protected function doGetParent(array $context)
    {
        // line 7
        return "Master/MenuTemplate.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("Master/MenuTemplate.html.twig", "ProcesarOrdenes.html.twig", 7);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 9
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "    <style type=\"text/css\">
        .modal-space-bottom {
            margin-bottom: 10px;
        }
        
        .modal-content * {
            text-align: center;
        }
        
        .modal-footer, .modal-header {
            display: inline;
        }
    </style>
    
    <div class=\"container-fluid mb-2\">
        ";
        // line 25
        $this->displayParentBlock("body", $context, $blocks);
        echo "
        <div class=\"row\">
            <div class=\"col-sm-6\">
                <div class=\"btn-group d-xs-none\">
                    <a class=\"btn btn-sm btn-outline-secondary\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "url", [], "method", false, false, false, 29), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "refresh"], "method", false, false, false, 29), "html", null, true);
        echo "\">
                        <i class=\"fas fa-redo\" aria-hidden=\"true\"></i>
                    </a>
                    ";
        // line 32
        if (((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "getPageData", [], "method", false, false, false, 32)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["name"] ?? null) : null) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "user", [], "any", false, false, false, 32), "homepage", [], "any", false, false, false, 32))) {
            // line 33
            echo "                        <a class=\"btn btn-sm btn-outline-secondary active\" href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "url", [], "method", false, false, false, 33), "html", null, true);
            echo "?defaultPage=FALSE\" title=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "marked-as-homepage"], "method", false, false, false, 33), "html", null, true);
            echo "\">
                            <i class=\"fas fa-bookmark\" aria-hidden=\"true\"></i>
                        </a>
                    ";
        } else {
            // line 37
            echo "                        <a class=\"btn btn-sm btn-outline-secondary\" href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "url", [], "method", false, false, false, 37), "html", null, true);
            echo "?defaultPage=TRUE\" title=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "mark-as-homepage"], "method", false, false, false, 37), "html", null, true);
            echo "\">
                            <i class=\"far fa-bookmark\" aria-hidden=\"true\"></i>
                        </a>
                    ";
        }
        // line 41
        echo "                </div>
            </div>
            <div class=\"col-sm text-right\">
                <h1 class=\"h3\">
                    ";
        // line 45
        $context["title"] = twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "getPageData", [], "method", false, false, false, 45)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["title"] ?? null) : null)], "method", false, false, false, 45));
        // line 46
        echo "                    ";
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo " <i class=\"";
        echo twig_escape_filter($this->env, (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "getPageData", [], "method", false, false, false, 46)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["icon"] ?? null) : null), "html", null, true);
        echo "\" aria-hidden=\"true\"></i>
                </h1>
            </div>
        </div>
    </div>
                
    ";
        // line 52
        $context["allProcesos"] = twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "allProcesos", [], "method", false, false, false, 52);
        // line 53
        echo "    ";
        $context["allOrdenes"] = twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "allOrdenes", [], "method", false, false, false, 53);
        // line 54
        echo "    
    <ul class=\"nav nav-tabs procesos\" role=\"tablist\">
        ";
        // line 56
        $context["divClass"] = "active";
        // line 57
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["allProcesos"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["proceso"]) {
            // line 58
            echo "            <li class=\"nav-item\">
                <a class=\"nav-link ";
            // line 59
            echo twig_escape_filter($this->env, ($context["divClass"] ?? null), "html", null, true);
            echo "\" data-toggle=\"tab\" href=\"#proceso";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["proceso"], "idproceso", [], "any", false, false, false, 59), "html", null, true);
            echo "\" aria-controls=\"proceso";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["proceso"], "idproceso", [], "any", false, false, false, 59), "html", null, true);
            echo "\" role=\"tab\">
                    <i class=\"fas fa-tasks fa-fw\" aria-hidden=\"true\"></i> ";
            // line 60
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["proceso"], "proceso", [], "any", false, false, false, 60), "html", null, true);
            echo "
                    <span class=\"badge badge-secondary\">";
            // line 61
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["proceso"], "count", [], "any", false, false, false, 61), "html", null, true);
            echo "</span>
                </a>
            </li>
            ";
            // line 64
            $context["divClass"] = "";
            // line 65
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['proceso'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "    </ul>
        
    <div class=\"tab-content\">
        ";
        // line 69
        $context["divClass"] = "show active";
        // line 70
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["allProcesos"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["proceso"]) {
            // line 71
            echo "            <div class=\"tab-pane fade ";
            echo twig_escape_filter($this->env, ($context["divClass"] ?? null), "html", null, true);
            echo "\" id=\"proceso";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["proceso"], "idproceso", [], "any", false, false, false, 71), "html", null, true);
            echo "\" aria-labelledby=\"proceso";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["proceso"], "idproceso", [], "any", false, false, false, 71), "html", null, true);
            echo "-tab\" role=\"tabpanel\">
                ";
            // line 72
            echo twig_call_macro($macros["_self"], "macro_showOrdenes", [($context["fsc"] ?? null), ($context["i18n"] ?? null), ($context["allOrdenes"] ?? null), twig_get_attribute($this->env, $this->source, $context["proceso"], "idproceso", [], "any", false, false, false, 72)], 72, $context, $this->getSourceContext());
            echo "
            </div>
            ";
            // line 74
            $context["divClass"] = "";
            // line 75
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['proceso'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        echo "    </div>
";
    }

    // line 79
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 80
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script type=\"text/javascript\">
        var timeSession = parseInt(\"";
        // line 82
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "getTimeSession", [], "method", false, false, false, 82), "html", null, true);
        echo "\");
        
        if (timeSession > 0) {
            var time = new Date().getTime();

            \$(document.body).bind(\"mousemove keypress\", function(e) {
                time = new Date().getTime();
            });

            function refresh() {
                if(new Date().getTime() - time >= timeSession) 
                    window.location.reload(true);
                else 
                    setTimeout(refresh, 10000);
            }

            setTimeout(refresh, 10000);
        }
               
        \$(document).on('click', 'tbody.procesos tr .btn', function(){
            //modalHTML(\$(this));
            var action = \$(this).attr('action');
            
            switch (action) {
                case 'incidencia':
                    procesar(\$(this));
                    break;
                
                case 'procesar':
                    procesar(\$(this));
                    break;
                
                case 'iniciar':
                    cronometrar(\$(this));
                    break;
                    
                case 'parar':
                    cronometrar(\$(this));
                    break;
            }
        });
        
        function cronometrar(btn) {
            var action = \$(btn).attr('action');
            var idorden = \$(btn).attr('idorden');
            var icon = \$(btn).find('i');
            
            \$(icon).removeClass('fa-check');
            \$(icon).addClass('fa-spinner fa-spin');
            
            var datos = {
                'idorden' : idorden,
                'action' : action
            };

            \$.ajax({
                type: \"POST\",
                url: \"";
        // line 139
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "url", [], "method", false, false, false, 139), "html", null, true);
        echo "\",
                dataType: \"json\",
                data: datos,
                success: function (results) {
                    if (results['result']) {
                        btnActions(idorden, results['cronometro']);
                        
                        var mensaje = \"";
        // line 146
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "order-work-start"], "method", false, false, false, 146), "html", null, true);
        echo "\";
                        if (results['cronometro'] === 0) {
                            mensaje = \"";
        // line 148
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "order-work-stop"], "method", false, false, false, 148), "html", null, true);
        echo "\";
                        }
                        
                        bootbox.dialog({
                            message: mensaje,
                            centerVertical: true,
                        });
                   }

                    \$(icon).removeClass('fa-spinner fa-spin');
                    \$(icon).addClass('fa-check');
                },
                error: function (xhr, status, error) {
                    \$(icon).removeClass('fa-spinner fa-spin');
                    \$(icon).addClass('fa-check');
                }
            });
        }
        
        function procesar(btn) {
            var action = \$(btn).attr('action');
            var idorden = \$(btn).attr('idorden');
            var tr = \$('.procesos #'+idorden);
            var icon = \$(btn).find('i');
            var title = '';
            
            \$(icon).removeClass('fa-check');
            \$(icon).addClass('fa-spinner fa-spin');
            
            var empresa = \$(tr).find('.empresa').html();
            var proyecto = \$(tr).find('.proyecto').html();
            var tarea = \$(tr).find('.tarea').html();
            var proceso = \$(tr).find('.proceso').html();
            var qty = \$(tr).find('.qty').html();

            var html = '<div class=\"modal-space-bottom\"><strong>";
        // line 183
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "company"], "method", false, false, false, 183), "html", null, true);
        echo "</strong><div>'+empresa+'</div></div>'+
                    '<div class=\"modal-space-bottom\"><strong>";
        // line 184
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "project"], "method", false, false, false, 184), "html", null, true);
        echo "</strong><div>'+proyecto+'</div></div>'+
                    '<div class=\"modal-space-bottom\"><strong>";
        // line 185
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "task"], "method", false, false, false, 185), "html", null, true);
        echo "</strong><div>'+tarea+'</div></div>'+
                    '<div class=\"modal-space-bottom\"><strong>";
        // line 186
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "process"], "method", false, false, false, 186), "html", null, true);
        echo "</strong><div>'+proceso+'</div></div>'+
                    '<div class=\"modal-space-bottom\"><strong>";
        // line 187
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "amount-requested"], "method", false, false, false, 187), "html", null, true);
        echo "</strong><div>'+qty+'</div></div>';

            if (action === 'procesar') {
                title = \"";
        // line 190
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "prosecute-order-work"], "method", false, false, false, 190), "html", null, true);
        echo "\";
                html = html + '<div class=\"form-group\"><label>";
        // line 191
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "amount-processed"], "method", false, false, false, 191), "html", null, true);
        echo "</label><input type=\"number\" id=\"modalQty\" value=\"'+qty+'\" class=\"form-control\" min=\"1\" max=\"'+qty+'\" required=\"true\"></div>';
            } else {
                title = \"";
        // line 193
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "new-incidence"], "method", false, false, false, 193), "html", null, true);
        echo "\";
                html = html + '<div class=\"form-group\"><label>";
        // line 194
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "amount-incidence"], "method", false, false, false, 194), "html", null, true);
        echo "</label><input type=\"number\" id=\"modalQty\" value=\"1\" class=\"form-control\" min=\"1\" max=\"'+qty+'\" required=\"true\"></div>'+
                    '<div class=\"form-group\"><label>";
        // line 195
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "observations"], "method", false, false, false, 195), "html", null, true);
        echo "</label><textarea rows=\"3\" id=\"modalObs\" class=\"form-control\" required=\"true\"></textarea></div>';
            }

            bootbox.dialog({
                title: title,
                message: html,
                closeButton: false,
                centerVertical: true,
                buttons: {
                    cancel: {
                        label: \"<i class='fas fa-times'></i> ";
        // line 205
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "cancel"], "method", false, false, false, 205), "html", null, true);
        echo "\",
                        callback: function(){
                            \$(icon).removeClass('fa-spinner fa-spin');
                            \$(icon).addClass('fa-check');
                        }
                    },
                    ok: {
                        label: \"<i class='fas fa-check'></i> ";
        // line 212
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "save"], "method", false, false, false, 212), "html", null, true);
        echo "\",
                        className: 'btn-success',
                        callback: function(){
                            var datos = {
                                'idorden' : idorden,
                                'cantidad' : \$('#modalQty').val(),
                                'action' : action
                            };
                            
                            if (\$('#modalObs')) {
                                datos['observaciones'] = \$('#modalObs').val();
                            }

                            if (datos['cantidad'] > qty) {
                                datos['cantidad'] = qty;
                            }

                            \$.ajax({
                                type: \"POST\",
                                url: \"";
        // line 231
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "url", [], "method", false, false, false, 231), "html", null, true);
        echo "\",
                                dataType: \"json\",
                                data: datos,
                                success: function (results) {
                                    if (results['result']) {
                                        var resto =  qty - datos['cantidad'];

                                        if (resto === 0) {
                                            \$(tr).find('td').remove().fadeOut();
                                            var tab = \$('.nav-tabs .active .badge');
                                            var cont = parseInt(\$(tab).html()) - 1;
                                            \$(tab).html(cont);

                                            if (action === 'procesar') {
                                                \$(tr).addClass('table-success').html('<td colspan=\"7\" class=\"text-center\"><i class=\"fa fa-check\"></i> ";
        // line 245
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "order-work-processed"], "method", false, false, false, 245), "html", null, true);
        echo "</td>').fadeIn();
                                            } 
                                        } else {
                                            \$(tr).find('.qty').html(resto);
                                        }

                                        var mensaje = '';
                                        if (action === 'procesar') {
                                            mensaje = \"";
        // line 253
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "order-work-processed"], "method", false, false, false, 253), "html", null, true);
        echo "\";
                                        } else {
                                            mensaje = \"";
        // line 255
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "incidence-created"], "method", false, false, false, 255), "html", null, true);
        echo "\";
                                        }

                                        bootbox.dialog({
                                            message: mensaje,
                                            centerVertical: true,
                                        });
                                    }

                                    \$(icon).removeClass('fa-spinner fa-spin');
                                    \$(icon).addClass('fa-check');
                                },
                                error: function (xhr, status, error) {
                                    \$(icon).removeClass('fa-spinner fa-spin');
                                    \$(icon).addClass('fa-check');
                                }
                            });
                        }
                    }
                }
            });
        }
        
        function btnActions(idorden, cronometro) {
            var tr = \$('.procesos #'+idorden);
            
            if (cronometro === 1) {
                \$(tr).find('.iniciar').hide();
                \$(tr).find('.parar').show();
                \$(tr).find('.procesar').hide();
                \$(tr).find('.incidencia').hide();
            } else {
                \$(tr).find('.iniciar').show();
                \$(tr).find('.parar').hide();
                \$(tr).find('.procesar').show();
                \$(tr).find('.incidencia').show();
            }
        }
    </script>
";
    }

    // line 296
    public function macro_showOrdenes($__fsc__ = null, $__i18n__ = null, $__allOrdenes__ = null, $__idproceso__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "fsc" => $__fsc__,
            "i18n" => $__i18n__,
            "allOrdenes" => $__allOrdenes__,
            "idproceso" => $__idproceso__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 297
            echo "    <div class=\"table-responsive\">
        <table class=\"table table-striped table-hover\">
            <thead>
                <tr>
                    <th>";
            // line 301
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "company"], "method", false, false, false, 301), "html", null, true);
            echo "</th>
                    <th>";
            // line 302
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "project"], "method", false, false, false, 302), "html", null, true);
            echo "</th>
                    <th>";
            // line 303
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "task"], "method", false, false, false, 303), "html", null, true);
            echo "</th>
                    <th class=\"d-none\">";
            // line 304
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "process"], "method", false, false, false, 304), "html", null, true);
            echo "</th>
                    <th>";
            // line 305
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "description"], "method", false, false, false, 305), "html", null, true);
            echo "</th>
                    <th>";
            // line 306
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "amount-pending"], "method", false, false, false, 306), "html", null, true);
            echo "</th>
                    <th>";
            // line 307
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "end-date"], "method", false, false, false, 307), "html", null, true);
            echo "</th>
                    <th class=\"text-right\">";
            // line 308
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "actions"], "method", false, false, false, 308), "html", null, true);
            echo "</th>
                </tr>
            </thead>
            <tbody class=\"procesos\">
                ";
            // line 312
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["allOrdenes"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["orden"]) {
                // line 313
                echo "                    ";
                if ((($context["idproceso"] ?? null) == twig_get_attribute($this->env, $this->source, $context["orden"], "idproceso", [], "any", false, false, false, 313))) {
                    // line 314
                    echo "                        <tr id=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["orden"], "idorden", [], "any", false, false, false, 314), "html", null, true);
                    echo "\">
                            <td class=\"empresa align-middle\">";
                    // line 315
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["orden"], "empresa", [], "any", false, false, false, 315), "html", null, true);
                    echo "</td>
                            <td class=\"proyecto align-middle\">
                                <div>";
                    // line 317
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["orden"], "proyecto", [], "any", false, false, false, 317), "html", null, true);
                    echo "</div>
                                <div><i>";
                    // line 318
                    echo twig_escape_filter($this->env, twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["orden"], "descproyecto", [], "any", false, false, false, 318), 0, 50), "html", null, true);
                    echo "</i></div>
                            </td>
                            <td class=\"tarea align-middle\">
                                <div>";
                    // line 321
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["orden"], "tarea", [], "any", false, false, false, 321), "html", null, true);
                    echo "</div>
                                <div><i>";
                    // line 322
                    echo twig_escape_filter($this->env, twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["orden"], "desctarea", [], "any", false, false, false, 322), 0, 50), "html", null, true);
                    echo "</i></div>
                            </td>
                            <td class=\"proceso d-none align-middle\">";
                    // line 324
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["orden"], "proceso", [], "any", false, false, false, 324), "html", null, true);
                    echo "</td>
                            <td class=\"desc align-middle\">";
                    // line 325
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["orden"], "descripcion", [], "any", false, false, false, 325), "html", null, true);
                    echo "</td>
                            <td class=\"qty align-middle\">";
                    // line 326
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["orden"], "cantidadpendiente", [], "any", false, false, false, 326), "html", null, true);
                    echo "</td>
                            <td class=\"fechafinalizacion align-middle\">";
                    // line 327
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["orden"], "fechafinalizacion", [], "any", false, false, false, 327), "html", null, true);
                    echo "</td>
                            <td class=\"botones text-right align-middle\">
                                <span class=\"btn-group\">                                    
                                    <a class=\"btn btn-lg btn-info iniciar\" href=\"#\" action=\"iniciar\" idorden=\"";
                    // line 330
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["orden"], "idorden", [], "any", false, false, false, 330), "html", null, true);
                    echo "\">
                                        <i class=\"fas fa-hourglass-start fa-fw\" aria-hidden=\"true\"></i> 
                                        <span class=\"d-none d-sm-inline-block\">";
                    // line 332
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "start"], "method", false, false, false, 332), "html", null, true);
                    echo "</span>
                                    </a>

                                    <a class=\"btn btn-lg btn-danger parar\" href=\"#\" action=\"parar\" idorden=\"";
                    // line 335
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["orden"], "idorden", [], "any", false, false, false, 335), "html", null, true);
                    echo "\">
                                        <i class=\"fas fa-hourglass-end fa-fw\" aria-hidden=\"true\"></i> 
                                        <span class=\"d-none d-sm-inline-block\">";
                    // line 337
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "stop"], "method", false, false, false, 337), "html", null, true);
                    echo "</span>
                                    </a>
                                    
                                    <a class=\"btn btn-lg btn-success procesar\" href=\"#\" action=\"procesar\" idorden=\"";
                    // line 340
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["orden"], "idorden", [], "any", false, false, false, 340), "html", null, true);
                    echo "\">
                                        <i class=\"fas fa-check fa-fw\" aria-hidden=\"true\"></i>
                                        <span class=\"d-none d-sm-inline-block\">";
                    // line 342
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "prosecute"], "method", false, false, false, 342), "html", null, true);
                    echo "</span>
                                    </a>
                                    
                                    <a class=\"btn btn-lg btn-warning incidencia\" href=\"#\" action=\"incidencia\" idorden=\"";
                    // line 345
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["orden"], "idorden", [], "any", false, false, false, 345), "html", null, true);
                    echo "\">
                                        <i class=\"fas fa-exclamation fa-fw\" aria-hidden=\"true\"></i>
                                        <span class=\"d-none d-sm-inline-block\">";
                    // line 347
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "incidence"], "method", false, false, false, 347), "html", null, true);
                    echo "</span>
                                    </a>
                                    
                                    <script>
                                        btnActions(";
                    // line 351
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["orden"], "idorden", [], "any", false, false, false, 351), "html", null, true);
                    echo ", ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["orden"], "cronometro", [], "any", false, false, false, 351), "html", null, true);
                    echo ");
                                    </script>
                                </span>
                            </td>
                        </tr>   
                    ";
                }
                // line 357
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['orden'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 358
            echo "            </tbody>
        </table>
    </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "ProcesarOrdenes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  667 => 358,  661 => 357,  650 => 351,  643 => 347,  638 => 345,  632 => 342,  627 => 340,  621 => 337,  616 => 335,  610 => 332,  605 => 330,  599 => 327,  595 => 326,  591 => 325,  587 => 324,  582 => 322,  578 => 321,  572 => 318,  568 => 317,  563 => 315,  558 => 314,  555 => 313,  551 => 312,  544 => 308,  540 => 307,  536 => 306,  532 => 305,  528 => 304,  524 => 303,  520 => 302,  516 => 301,  510 => 297,  494 => 296,  450 => 255,  445 => 253,  434 => 245,  417 => 231,  395 => 212,  385 => 205,  372 => 195,  368 => 194,  364 => 193,  359 => 191,  355 => 190,  349 => 187,  345 => 186,  341 => 185,  337 => 184,  333 => 183,  295 => 148,  290 => 146,  280 => 139,  220 => 82,  214 => 80,  210 => 79,  205 => 76,  199 => 75,  197 => 74,  192 => 72,  183 => 71,  178 => 70,  176 => 69,  171 => 66,  165 => 65,  163 => 64,  157 => 61,  153 => 60,  145 => 59,  142 => 58,  137 => 57,  135 => 56,  131 => 54,  128 => 53,  126 => 52,  114 => 46,  112 => 45,  106 => 41,  96 => 37,  86 => 33,  84 => 32,  76 => 29,  69 => 25,  52 => 10,  48 => 9,  37 => 7,);
    }

    public function getSourceContext()
    {
        return new Source("{#
    /*
    * Copyright (C) ATHOS TRADER SL <info@athosonline.com>
    */
#}

{% extends \"Master/MenuTemplate.html.twig\" %}

{% block body %}
    <style type=\"text/css\">
        .modal-space-bottom {
            margin-bottom: 10px;
        }
        
        .modal-content * {
            text-align: center;
        }
        
        .modal-footer, .modal-header {
            display: inline;
        }
    </style>
    
    <div class=\"container-fluid mb-2\">
        {{ parent() }}
        <div class=\"row\">
            <div class=\"col-sm-6\">
                <div class=\"btn-group d-xs-none\">
                    <a class=\"btn btn-sm btn-outline-secondary\" href=\"{{ fsc.url() }}\" title=\"{{ i18n.trans('refresh') }}\">
                        <i class=\"fas fa-redo\" aria-hidden=\"true\"></i>
                    </a>
                    {% if fsc.getPageData()['name'] == fsc.user.homepage %}
                        <a class=\"btn btn-sm btn-outline-secondary active\" href=\"{{ fsc.url() }}?defaultPage=FALSE\" title=\"{{ i18n.trans('marked-as-homepage') }}\">
                            <i class=\"fas fa-bookmark\" aria-hidden=\"true\"></i>
                        </a>
                    {% else %}
                        <a class=\"btn btn-sm btn-outline-secondary\" href=\"{{ fsc.url() }}?defaultPage=TRUE\" title=\"{{ i18n.trans('mark-as-homepage') }}\">
                            <i class=\"far fa-bookmark\" aria-hidden=\"true\"></i>
                        </a>
                    {% endif %}
                </div>
            </div>
            <div class=\"col-sm text-right\">
                <h1 class=\"h3\">
                    {% set title = i18n.trans(fsc.getPageData()['title']) | capitalize %}
                    {{ title }} <i class=\"{{ fsc.getPageData()['icon'] }}\" aria-hidden=\"true\"></i>
                </h1>
            </div>
        </div>
    </div>
                
    {% set allProcesos = fsc.allProcesos() %}
    {% set allOrdenes = fsc.allOrdenes() %}
    
    <ul class=\"nav nav-tabs procesos\" role=\"tablist\">
        {% set divClass = 'active' %}
        {% for proceso in allProcesos %}
            <li class=\"nav-item\">
                <a class=\"nav-link {{ divClass }}\" data-toggle=\"tab\" href=\"#proceso{{ proceso.idproceso }}\" aria-controls=\"proceso{{ proceso.idproceso }}\" role=\"tab\">
                    <i class=\"fas fa-tasks fa-fw\" aria-hidden=\"true\"></i> {{ proceso.proceso }}
                    <span class=\"badge badge-secondary\">{{ proceso.count }}</span>
                </a>
            </li>
            {% set divClass = '' %}
        {% endfor %}
    </ul>
        
    <div class=\"tab-content\">
        {% set divClass = 'show active' %}
        {% for proceso in allProcesos %}
            <div class=\"tab-pane fade {{ divClass }}\" id=\"proceso{{ proceso.idproceso }}\" aria-labelledby=\"proceso{{ proceso.idproceso }}-tab\" role=\"tabpanel\">
                {{ _self.showOrdenes(fsc, i18n, allOrdenes, proceso.idproceso) }}
            </div>
            {% set divClass = '' %}
        {% endfor %}
    </div>
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script type=\"text/javascript\">
        var timeSession = parseInt(\"{{fsc.getTimeSession()}}\");
        
        if (timeSession > 0) {
            var time = new Date().getTime();

            \$(document.body).bind(\"mousemove keypress\", function(e) {
                time = new Date().getTime();
            });

            function refresh() {
                if(new Date().getTime() - time >= timeSession) 
                    window.location.reload(true);
                else 
                    setTimeout(refresh, 10000);
            }

            setTimeout(refresh, 10000);
        }
               
        \$(document).on('click', 'tbody.procesos tr .btn', function(){
            //modalHTML(\$(this));
            var action = \$(this).attr('action');
            
            switch (action) {
                case 'incidencia':
                    procesar(\$(this));
                    break;
                
                case 'procesar':
                    procesar(\$(this));
                    break;
                
                case 'iniciar':
                    cronometrar(\$(this));
                    break;
                    
                case 'parar':
                    cronometrar(\$(this));
                    break;
            }
        });
        
        function cronometrar(btn) {
            var action = \$(btn).attr('action');
            var idorden = \$(btn).attr('idorden');
            var icon = \$(btn).find('i');
            
            \$(icon).removeClass('fa-check');
            \$(icon).addClass('fa-spinner fa-spin');
            
            var datos = {
                'idorden' : idorden,
                'action' : action
            };

            \$.ajax({
                type: \"POST\",
                url: \"{{fsc.url()}}\",
                dataType: \"json\",
                data: datos,
                success: function (results) {
                    if (results['result']) {
                        btnActions(idorden, results['cronometro']);
                        
                        var mensaje = \"{{ i18n.trans('order-work-start') }}\";
                        if (results['cronometro'] === 0) {
                            mensaje = \"{{ i18n.trans('order-work-stop') }}\";
                        }
                        
                        bootbox.dialog({
                            message: mensaje,
                            centerVertical: true,
                        });
                   }

                    \$(icon).removeClass('fa-spinner fa-spin');
                    \$(icon).addClass('fa-check');
                },
                error: function (xhr, status, error) {
                    \$(icon).removeClass('fa-spinner fa-spin');
                    \$(icon).addClass('fa-check');
                }
            });
        }
        
        function procesar(btn) {
            var action = \$(btn).attr('action');
            var idorden = \$(btn).attr('idorden');
            var tr = \$('.procesos #'+idorden);
            var icon = \$(btn).find('i');
            var title = '';
            
            \$(icon).removeClass('fa-check');
            \$(icon).addClass('fa-spinner fa-spin');
            
            var empresa = \$(tr).find('.empresa').html();
            var proyecto = \$(tr).find('.proyecto').html();
            var tarea = \$(tr).find('.tarea').html();
            var proceso = \$(tr).find('.proceso').html();
            var qty = \$(tr).find('.qty').html();

            var html = '<div class=\"modal-space-bottom\"><strong>{{ i18n.trans('company') }}</strong><div>'+empresa+'</div></div>'+
                    '<div class=\"modal-space-bottom\"><strong>{{ i18n.trans('project') }}</strong><div>'+proyecto+'</div></div>'+
                    '<div class=\"modal-space-bottom\"><strong>{{ i18n.trans('task') }}</strong><div>'+tarea+'</div></div>'+
                    '<div class=\"modal-space-bottom\"><strong>{{ i18n.trans('process') }}</strong><div>'+proceso+'</div></div>'+
                    '<div class=\"modal-space-bottom\"><strong>{{ i18n.trans('amount-requested') }}</strong><div>'+qty+'</div></div>';

            if (action === 'procesar') {
                title = \"{{ i18n.trans('prosecute-order-work') }}\";
                html = html + '<div class=\"form-group\"><label>{{ i18n.trans('amount-processed') }}</label><input type=\"number\" id=\"modalQty\" value=\"'+qty+'\" class=\"form-control\" min=\"1\" max=\"'+qty+'\" required=\"true\"></div>';
            } else {
                title = \"{{ i18n.trans('new-incidence') }}\";
                html = html + '<div class=\"form-group\"><label>{{ i18n.trans('amount-incidence') }}</label><input type=\"number\" id=\"modalQty\" value=\"1\" class=\"form-control\" min=\"1\" max=\"'+qty+'\" required=\"true\"></div>'+
                    '<div class=\"form-group\"><label>{{ i18n.trans('observations') }}</label><textarea rows=\"3\" id=\"modalObs\" class=\"form-control\" required=\"true\"></textarea></div>';
            }

            bootbox.dialog({
                title: title,
                message: html,
                closeButton: false,
                centerVertical: true,
                buttons: {
                    cancel: {
                        label: \"<i class='fas fa-times'></i> {{ i18n.trans('cancel') }}\",
                        callback: function(){
                            \$(icon).removeClass('fa-spinner fa-spin');
                            \$(icon).addClass('fa-check');
                        }
                    },
                    ok: {
                        label: \"<i class='fas fa-check'></i> {{ i18n.trans('save') }}\",
                        className: 'btn-success',
                        callback: function(){
                            var datos = {
                                'idorden' : idorden,
                                'cantidad' : \$('#modalQty').val(),
                                'action' : action
                            };
                            
                            if (\$('#modalObs')) {
                                datos['observaciones'] = \$('#modalObs').val();
                            }

                            if (datos['cantidad'] > qty) {
                                datos['cantidad'] = qty;
                            }

                            \$.ajax({
                                type: \"POST\",
                                url: \"{{fsc.url()}}\",
                                dataType: \"json\",
                                data: datos,
                                success: function (results) {
                                    if (results['result']) {
                                        var resto =  qty - datos['cantidad'];

                                        if (resto === 0) {
                                            \$(tr).find('td').remove().fadeOut();
                                            var tab = \$('.nav-tabs .active .badge');
                                            var cont = parseInt(\$(tab).html()) - 1;
                                            \$(tab).html(cont);

                                            if (action === 'procesar') {
                                                \$(tr).addClass('table-success').html('<td colspan=\"7\" class=\"text-center\"><i class=\"fa fa-check\"></i> {{ i18n.trans('order-work-processed') }}</td>').fadeIn();
                                            } 
                                        } else {
                                            \$(tr).find('.qty').html(resto);
                                        }

                                        var mensaje = '';
                                        if (action === 'procesar') {
                                            mensaje = \"{{ i18n.trans('order-work-processed') }}\";
                                        } else {
                                            mensaje = \"{{ i18n.trans('incidence-created') }}\";
                                        }

                                        bootbox.dialog({
                                            message: mensaje,
                                            centerVertical: true,
                                        });
                                    }

                                    \$(icon).removeClass('fa-spinner fa-spin');
                                    \$(icon).addClass('fa-check');
                                },
                                error: function (xhr, status, error) {
                                    \$(icon).removeClass('fa-spinner fa-spin');
                                    \$(icon).addClass('fa-check');
                                }
                            });
                        }
                    }
                }
            });
        }
        
        function btnActions(idorden, cronometro) {
            var tr = \$('.procesos #'+idorden);
            
            if (cronometro === 1) {
                \$(tr).find('.iniciar').hide();
                \$(tr).find('.parar').show();
                \$(tr).find('.procesar').hide();
                \$(tr).find('.incidencia').hide();
            } else {
                \$(tr).find('.iniciar').show();
                \$(tr).find('.parar').hide();
                \$(tr).find('.procesar').show();
                \$(tr).find('.incidencia').show();
            }
        }
    </script>
{% endblock %}
    
{% macro showOrdenes(fsc, i18n, allOrdenes, idproceso) %}
    <div class=\"table-responsive\">
        <table class=\"table table-striped table-hover\">
            <thead>
                <tr>
                    <th>{{ i18n.trans('company') }}</th>
                    <th>{{ i18n.trans('project') }}</th>
                    <th>{{ i18n.trans('task') }}</th>
                    <th class=\"d-none\">{{ i18n.trans('process') }}</th>
                    <th>{{ i18n.trans('description') }}</th>
                    <th>{{ i18n.trans('amount-pending') }}</th>
                    <th>{{ i18n.trans('end-date') }}</th>
                    <th class=\"text-right\">{{ i18n.trans('actions') }}</th>
                </tr>
            </thead>
            <tbody class=\"procesos\">
                {% for orden in allOrdenes %}
                    {% if idproceso == orden.idproceso %}
                        <tr id=\"{{ orden.idorden }}\">
                            <td class=\"empresa align-middle\">{{ orden.empresa }}</td>
                            <td class=\"proyecto align-middle\">
                                <div>{{ orden.proyecto }}</div>
                                <div><i>{{ orden.descproyecto[0:50] }}</i></div>
                            </td>
                            <td class=\"tarea align-middle\">
                                <div>{{ orden.tarea }}</div>
                                <div><i>{{ orden.desctarea[0:50] }}</i></div>
                            </td>
                            <td class=\"proceso d-none align-middle\">{{ orden.proceso }}</td>
                            <td class=\"desc align-middle\">{{ orden.descripcion }}</td>
                            <td class=\"qty align-middle\">{{ orden.cantidadpendiente }}</td>
                            <td class=\"fechafinalizacion align-middle\">{{ orden.fechafinalizacion }}</td>
                            <td class=\"botones text-right align-middle\">
                                <span class=\"btn-group\">                                    
                                    <a class=\"btn btn-lg btn-info iniciar\" href=\"#\" action=\"iniciar\" idorden=\"{{ orden.idorden }}\">
                                        <i class=\"fas fa-hourglass-start fa-fw\" aria-hidden=\"true\"></i> 
                                        <span class=\"d-none d-sm-inline-block\">{{ i18n.trans('start') }}</span>
                                    </a>

                                    <a class=\"btn btn-lg btn-danger parar\" href=\"#\" action=\"parar\" idorden=\"{{ orden.idorden }}\">
                                        <i class=\"fas fa-hourglass-end fa-fw\" aria-hidden=\"true\"></i> 
                                        <span class=\"d-none d-sm-inline-block\">{{ i18n.trans('stop') }}</span>
                                    </a>
                                    
                                    <a class=\"btn btn-lg btn-success procesar\" href=\"#\" action=\"procesar\" idorden=\"{{ orden.idorden }}\">
                                        <i class=\"fas fa-check fa-fw\" aria-hidden=\"true\"></i>
                                        <span class=\"d-none d-sm-inline-block\">{{ i18n.trans('prosecute') }}</span>
                                    </a>
                                    
                                    <a class=\"btn btn-lg btn-warning incidencia\" href=\"#\" action=\"incidencia\" idorden=\"{{ orden.idorden }}\">
                                        <i class=\"fas fa-exclamation fa-fw\" aria-hidden=\"true\"></i>
                                        <span class=\"d-none d-sm-inline-block\">{{ i18n.trans('incidence') }}</span>
                                    </a>
                                    
                                    <script>
                                        btnActions({{ orden.idorden }}, {{ orden.cronometro }});
                                    </script>
                                </span>
                            </td>
                        </tr>   
                    {% endif %}
                {% endfor %}
            </tbody>
        </table>
    </div>
{% endmacro %}", "ProcesarOrdenes.html.twig", "C:\\xampp2\\htdocs\\facturascripts\\facturasscripts\\Plugins\\OrdenesProduccion\\View\\ProcesarOrdenes.html.twig");
    }
}
