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

/* EbillingHtmlView.html.twig */
class __TwigTemplate_53c736cab6f79764ce5db80df9b0c0e2575d682ad4032bc343f2a2e56152e1d8 extends \Twig\Template
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
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["view"] ?? null), "model", [], "any", false, false, false, 1), "fechaautorizacion", [], "any", false, false, false, 1) != null)) {
            // line 2
            echo "<div class=\"card\">
    <div class=\"card-body\">
        <p>Clave de acceso: ";
            // line 4
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["view"] ?? null), "model", [], "any", false, false, false, 4), "claveacceso", [], "any", false, false, false, 4), "html", null, true);
            echo " <br>
        Fecha de Autorización: ";
            // line 5
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["view"] ?? null), "model", [], "any", false, false, false, 5), "fechaautorizacion", [], "any", false, false, false, 5), "html", null, true);
            echo " <br>
        Fecha de Generación: ";
            // line 6
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["view"] ?? null), "model", [], "any", false, false, false, 6), "fechageneracion", [], "any", false, false, false, 6), "html", null, true);
            echo "</p>
        <p><a href=\"https://srienlinea.sri.gob.ec/comprobantes-electronicos-internet/publico/validezComprobantes.jsf\">Url SRI</a><br></p>

        <h2>Documento generado de forma exitosa</h2>
        <p>Puedes elegir cualquiera de las siguientes opciones:</p>
        <button class=\"btn btn-warning\" id=\"getXml\" data-type=\"";
            // line 11
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["view"] ?? null), "type", [], "any", false, false, false, 11), "html", null, true);
            echo "\" data-id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["view"] ?? null), "documentId", [], "any", false, false, false, 11), "html", null, true);
            echo "\" type=\"button\">Descargar XML</button>
        <button class=\"btn btn-danger\" id=\"print\" data-type=\"";
            // line 12
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["view"] ?? null), "type", [], "any", false, false, false, 12), "html", null, true);
            echo "\" data-id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["view"] ?? null), "documentId", [], "any", false, false, false, 12), "html", null, true);
            echo "\" type=\"button\">Descargar PDF</button>
        <button class=\"btn btn-primary\" id=\"send\" data-type=\"";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["view"] ?? null), "type", [], "any", false, false, false, 13), "html", null, true);
            echo "\" data-id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["view"] ?? null), "documentId", [], "any", false, false, false, 13), "html", null, true);
            echo "\" type=\"button\" title=\"Enviaras un correo electrónico con el xml y pdf adjunto al correo registrado en la ficha del cliente\">Enviar correo electrónico</button>
    </div>
</div>
";
        } else {
            // line 17
            echo "    <div class=\"card\">
        <h2>Gestionar documentos electrónicos</h2>
        <p style=\"padding-left:20px;\">
            ";
            // line 20
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["view"] ?? null), "model", [], "any", false, false, false, 20), "fechageneracion", [], "any", false, false, false, 20) != null)) {
                // line 21
                echo "                <i><b>1</b> Documento Generado</i>
                <br>
            ";
            }
            // line 24
            echo "            ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["view"] ?? null), "model", [], "any", false, false, false, 24), "fechafirma", [], "any", false, false, false, 24) != null)) {
                // line 25
                echo "                <i><b>2</b> Documento Firmado</i><br>
            ";
            }
            // line 27
            echo "        </p>
        <div class=\"card-body\">
            <p>Selecciona una opción</p>
            <button class=\"btn btn-warning\" id=\"reload\" data-type=\"";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["view"] ?? null), "type", [], "any", false, false, false, 30), "html", null, true);
            echo "\" data-id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["view"] ?? null), "documentId", [], "any", false, false, false, 30), "html", null, true);
            echo "\" title=\"Consulta el estado del documento\"><i class=\"fas fa-retweet\"></i> Refrescar</button>
            <button class=\"btn btn-primary\" id=\"generate\" data-type=\"";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["view"] ?? null), "type", [], "any", false, false, false, 31), "html", null, true);
            echo "\" data-id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["view"] ?? null), "documentId", [], "any", false, false, false, 31), "html", null, true);
            echo "\"><i class=\"fas fa-edit\"></i> Generar</button>
            <button class=\"btn btn-warning\" id=\"sign\" data-type=\"";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["view"] ?? null), "type", [], "any", false, false, false, 32), "html", null, true);
            echo "\" data-id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["view"] ?? null), "documentId", [], "any", false, false, false, 32), "html", null, true);
            echo "\"><i class=\"fas fa-signature\"></i> Firmar</button>
            <button class=\"btn btn-success\" id=\"auth\" data-type=\"";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["view"] ?? null), "type", [], "any", false, false, false, 33), "html", null, true);
            echo "\" data-id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["view"] ?? null), "documentId", [], "any", false, false, false, 33), "html", null, true);
            echo "\"><i class=\"fas fa-paper-plane\"></i> Enviar</button>
        </div>
    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "EbillingHtmlView.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 33,  116 => 32,  110 => 31,  104 => 30,  99 => 27,  95 => 25,  92 => 24,  87 => 21,  85 => 20,  80 => 17,  71 => 13,  65 => 12,  59 => 11,  51 => 6,  47 => 5,  43 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "EbillingHtmlView.html.twig", "C:\\xampp2\\htdocs\\facturascripts\\facturasscripts\\Dinamic\\View\\EbillingHtmlView.html.twig");
    }
}
