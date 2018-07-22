<?php

/* crear-anuncios/perdido/inc/partes.twig */
class __TwigTemplate_0493eac5c66a0ddb64c698d2541fb7c8489ddd8016a7c73e6f1d42070b60f0ed extends Twig_Template
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
        echo "<div class=\"col-sm-12\">
\t<div class=\"col-sm-6 col-md-6 col-lg-6\">
\t\t<input type=\"file\" class=\"form-control\">
\t\t</div>
<div class=\"row\">
\t\t<div class=\"col-sm-6 col-md-6 col-lg-6\">
\t\t<input type=\"image\" class=\"img-rounded\" src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/public/assets/app/images/add_image.png\" alt=\"Logo\" style=\"height: inherit; width: inherit;\" />
\t\t</div>
\t\t<div class=\"col-sm-6 col-md-6 col-lg-6\" for=\"nombres_persona\">

  \t<label class=\"col-form-label\">Nombres</label>
    <input type=\"text\" name=\"nombres_persona\" class=\"form-control\" id=\"nombres_persona\">
\t  <label class=\"col-form-label\">Apellidos</label>
\t  <input type=\"text\" name=\"apellidos_persona\"  class=\"form-control\" id=\"apellidos_persona\">
\t  <label class=\"col-form-label\">Fecha Nacimiento</label>
  \t<input type=\"date\" name=\"fecha_nacimiento\"  class=\"form-control\" id=\"fecha_nacimiento\">
\t\t<label class=\"col-form-label\" >Tipo Documento Identidad</label>
    ";
        // line 19
        echo "    <select name=\"tipo_documento\"  id=\"tipo_documento\" class=\"form-control form-control-inverse\" >
\t\t<option value=\"0\">- SELECCIONAR -</option>
\t\t<option value=\"1\">DNI</option>
\t\t<option value=\"2\">PASAPORTE</option>
\t\t</select>
\t\t<label class=\"col-form-label\" >Numero Documento</label>
  \t<input type=\"text\" name=\"numero_documento\" placeholder=\"Numero de documento\" class=\"form-control\" id=\"numero_documento\">
  \t<label class=\"col-form-label\">Sexo</label>
\t  ";
        // line 28
        echo "\t  <select name=\"sexo_persona\" class=\"form-control form-control-inverse\">
\t\t<option value=\"0\">- SELECCIONAR -</option>
\t\t<option value=\"h\">Hombre</option>
\t\t<option value=\"m\">Mujer</option>
\t\t</select>
\t\t<label class=\"col-form-label\">Color Piel</label>
\t  ";
        // line 35
        echo "\t  <select name=\"color_piel\" class=\"form-control form-control-inverse\">
\t\t<option value=\"0\">- SELECCIONAR -</option>
\t\t<option value=\"bl\">Blanco</option>
\t\t<option value=\"m\">Moreno</option>
\t\t<option value=\"tr\">Trigueño</option>
\t\t</select>
\t\t<label class=\"col-form-label\">Estatura</label>
  \t<input type=\"number\" name=\"estatura_persona\" placeholder=\"Estatura de la persona\" class=\"form-control\" id=\"estatura_persona\">
\t  </div>
\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "crear-anuncios/perdido/inc/partes.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 35,  51 => 28,  41 => 19,  27 => 7,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"col-sm-12\">
\t<div class=\"col-sm-6 col-md-6 col-lg-6\">
\t\t<input type=\"file\" class=\"form-control\">
\t\t</div>
<div class=\"row\">
\t\t<div class=\"col-sm-6 col-md-6 col-lg-6\">
\t\t<input type=\"image\" class=\"img-rounded\" src=\"{{ base_url() }}/public/assets/app/images/add_image.png\" alt=\"Logo\" style=\"height: inherit; width: inherit;\" />
\t\t</div>
\t\t<div class=\"col-sm-6 col-md-6 col-lg-6\" for=\"nombres_persona\">

  \t<label class=\"col-form-label\">Nombres</label>
    <input type=\"text\" name=\"nombres_persona\" class=\"form-control\" id=\"nombres_persona\">
\t  <label class=\"col-form-label\">Apellidos</label>
\t  <input type=\"text\" name=\"apellidos_persona\"  class=\"form-control\" id=\"apellidos_persona\">
\t  <label class=\"col-form-label\">Fecha Nacimiento</label>
  \t<input type=\"date\" name=\"fecha_nacimiento\"  class=\"form-control\" id=\"fecha_nacimiento\">
\t\t<label class=\"col-form-label\" >Tipo Documento Identidad</label>
    {# <input type=\"text\" name=\"tipo_documento\"  class=\"form-control\" id=\"tipo_documento\"> #}
    <select name=\"tipo_documento\"  id=\"tipo_documento\" class=\"form-control form-control-inverse\" >
\t\t<option value=\"0\">- SELECCIONAR -</option>
\t\t<option value=\"1\">DNI</option>
\t\t<option value=\"2\">PASAPORTE</option>
\t\t</select>
\t\t<label class=\"col-form-label\" >Numero Documento</label>
  \t<input type=\"text\" name=\"numero_documento\" placeholder=\"Numero de documento\" class=\"form-control\" id=\"numero_documento\">
  \t<label class=\"col-form-label\">Sexo</label>
\t  {# <input type=\"text\" name=\"sexo_persona\" class=\"form-control\" id=\"sexo_persona\"> #}
\t  <select name=\"sexo_persona\" class=\"form-control form-control-inverse\">
\t\t<option value=\"0\">- SELECCIONAR -</option>
\t\t<option value=\"h\">Hombre</option>
\t\t<option value=\"m\">Mujer</option>
\t\t</select>
\t\t<label class=\"col-form-label\">Color Piel</label>
\t  {# <input type=\"text\" name=\"color_piel\" class=\"form-control\" id=\"color_piel\"> #}
\t  <select name=\"color_piel\" class=\"form-control form-control-inverse\">
\t\t<option value=\"0\">- SELECCIONAR -</option>
\t\t<option value=\"bl\">Blanco</option>
\t\t<option value=\"m\">Moreno</option>
\t\t<option value=\"tr\">Trigueño</option>
\t\t</select>
\t\t<label class=\"col-form-label\">Estatura</label>
  \t<input type=\"number\" name=\"estatura_persona\" placeholder=\"Estatura de la persona\" class=\"form-control\" id=\"estatura_persona\">
\t  </div>
\t</div>
</div>", "crear-anuncios/perdido/inc/partes.twig", "C:\\xampp\\htdocs\\proyectoC\\app\\Views\\crear-anuncios\\perdido\\inc\\partes.twig");
    }
}
