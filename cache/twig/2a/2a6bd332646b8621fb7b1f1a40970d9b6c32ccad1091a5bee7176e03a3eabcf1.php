<?php

/* crear-ticket/inc/datos-Personales.twig */
class __TwigTemplate_af296ac6c0f9c2df5b11b60d3cdf472d55c169ec1cd000352a31f3aa39d743ea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "
<h4>Datos Personales</h4>
<div class=\"row\">
\t<div class=\"col-md-6 p-t-6\" for=\"nombres_persona\">
  \t<label class=\"col-form-label\">Nombres</label>
    <input type=\"text\" name=\"nombres_persona\" class=\"form-control\" id=\"nombres_persona\">
  </div>
  <div class=\"col-md-6 p-t-6\" for=\"apellidos_persona\">
    <label class=\"col-form-label\">Apellidos</label>
    <input type=\"text\" name=\"apellidos_persona\"  class=\"form-control\" id=\"apellidos_persona\">
  </div>
  <div class=\"col-md-6 p-t-6\" for=\"fecha_nacimiento\">
    <label class=\"col-form-label\">Fecha Nacimiento</label>
  \t<input type=\"date\" name=\"fecha_nacimiento\"  class=\"form-control\" id=\"fecha_nacimiento\">
  </div>
</div>
<div class=\"row\">
  <div class=\"col-md-6 p-t-6\" for=\"tipo_documento\">
    <label class=\"col-form-label\" >Tipo Documento Identidad</label>
    ";
        // line 21
        echo "    <select name=\"tipo_documento\"  id=\"tipo_documento\" class=\"form-control form-control-inverse\" >
\t\t<option value=\"0\">- SELECCIONAR -</option>
\t\t<option value=\"1\">DNI</option>
\t\t<option value=\"2\">PASAPORTE</option>
\t\t</select>
\t</div>
\t<div class=\"col-md-6 p-t-6\" for=\"numero_documento\">
\t\t<label class=\"col-form-label\" >Numero Documento</label>
  \t<input type=\"text\" name=\"numero_documento\" placeholder=\"Numero de documento\" class=\"form-control\" id=\"numero_documento\">
\t</div>
</div>
<div class=\"f1-buttons\">
    <button type=\"button\" class=\"btn btn-previous\">Previous</button>
  <button type=\"button\" id=\"btn-crear-anuncio\" class=\"btn btn-mat waves-light btn-inverse text-center\">Crear Anuncio</button>
</div>";
    }

    public function getTemplateName()
    {
        return "crear-ticket/inc/datos-Personales.twig";
    }

    public function getDebugInfo()
    {
        return array (  40 => 21,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
<h4>Datos Personales</h4>
<div class=\"row\">
\t<div class=\"col-md-6 p-t-6\" for=\"nombres_persona\">
  \t<label class=\"col-form-label\">Nombres</label>
    <input type=\"text\" name=\"nombres_persona\" class=\"form-control\" id=\"nombres_persona\">
  </div>
  <div class=\"col-md-6 p-t-6\" for=\"apellidos_persona\">
    <label class=\"col-form-label\">Apellidos</label>
    <input type=\"text\" name=\"apellidos_persona\"  class=\"form-control\" id=\"apellidos_persona\">
  </div>
  <div class=\"col-md-6 p-t-6\" for=\"fecha_nacimiento\">
    <label class=\"col-form-label\">Fecha Nacimiento</label>
  \t<input type=\"date\" name=\"fecha_nacimiento\"  class=\"form-control\" id=\"fecha_nacimiento\">
  </div>
</div>
<div class=\"row\">
  <div class=\"col-md-6 p-t-6\" for=\"tipo_documento\">
    <label class=\"col-form-label\" >Tipo Documento Identidad</label>
    {# <input type=\"text\" name=\"tipo_documento\"  class=\"form-control\" id=\"tipo_documento\"> #}
    <select name=\"tipo_documento\"  id=\"tipo_documento\" class=\"form-control form-control-inverse\" >
\t\t<option value=\"0\">- SELECCIONAR -</option>
\t\t<option value=\"1\">DNI</option>
\t\t<option value=\"2\">PASAPORTE</option>
\t\t</select>
\t</div>
\t<div class=\"col-md-6 p-t-6\" for=\"numero_documento\">
\t\t<label class=\"col-form-label\" >Numero Documento</label>
  \t<input type=\"text\" name=\"numero_documento\" placeholder=\"Numero de documento\" class=\"form-control\" id=\"numero_documento\">
\t</div>
</div>
<div class=\"f1-buttons\">
    <button type=\"button\" class=\"btn btn-previous\">Previous</button>
  <button type=\"button\" id=\"btn-crear-anuncio\" class=\"btn btn-mat waves-light btn-inverse text-center\">Crear Anuncio</button>
</div>", "crear-ticket/inc/datos-Personales.twig", "C:\\xampp\\htdocs\\proyectoC\\app\\Views\\crear-ticket\\inc\\datos-personales.twig");
    }
}
