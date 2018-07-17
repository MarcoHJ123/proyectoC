<?php

/* crear-ticket/inc/detalles-generales.twig */
class __TwigTemplate_4465c0be1207e51f0201bcc93e090099f88d201705c66776be2e4b469e7b4f10 extends Twig_Template
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
        echo "<h4>Detalles</h4>
<div class=\"col-md-6 p-t-6\" for=\"estado_persona\">
  <label class=\"col-form-label\">Estado de Persona</label>
  ";
        // line 5
        echo "  <select name=\"estado_persona\" class=\"form-control form-control-inverse\">
\t<option value=\"0\">- SELECCIONAR -</option>
\t<option value=\"1\">Perdido</option>
\t<option value=\"2\">Desaparecido</option>
\t</select>
</div>
<div class=\"col-md-12 p-t-12\" for=\"ultima_ubicacion\">
  <label class=\"col-form-label\">Ultima vez visto</label>
  <input type=\"text\" name=\"ultima_ubicacion\" placeholder=\"Google maps...\" class=\"form-control\" id=\"ultima_ubicacion\">
</div>
<div class=\"col-md-12 p-t-12\" for=\"descripcion\">
  <label class=\"col-form-label\">Descripcion</label>
  <textarea type=\"text\" name=\"descripcion\" placeholder=\"Describir breve como ocurrio el acontecimiento\" class=\"form-control\" id=\"descripcion\"></textarea>
</div>
<div class=\"f1-buttons col-md-12 p-t-12\">
  <button type=\"button\" class=\"btn btn-previous\">Previous</button>
  <button type=\"button\" id=\"btn-crear-anuncio\" class=\"btn btn-mat waves-light btn-inverse text-center\">Crear Anuncio</button>
</div>";
    }

    public function getTemplateName()
    {
        return "crear-ticket/inc/detalles-generales.twig";
    }

    public function getDebugInfo()
    {
        return array (  24 => 5,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<h4>Detalles</h4>
<div class=\"col-md-6 p-t-6\" for=\"estado_persona\">
  <label class=\"col-form-label\">Estado de Persona</label>
  {# <input type=\"text\" name=\"estado_persona\" class=\"form-control\" id=\"estado_persona\"> #}
  <select name=\"estado_persona\" class=\"form-control form-control-inverse\">
\t<option value=\"0\">- SELECCIONAR -</option>
\t<option value=\"1\">Perdido</option>
\t<option value=\"2\">Desaparecido</option>
\t</select>
</div>
<div class=\"col-md-12 p-t-12\" for=\"ultima_ubicacion\">
  <label class=\"col-form-label\">Ultima vez visto</label>
  <input type=\"text\" name=\"ultima_ubicacion\" placeholder=\"Google maps...\" class=\"form-control\" id=\"ultima_ubicacion\">
</div>
<div class=\"col-md-12 p-t-12\" for=\"descripcion\">
  <label class=\"col-form-label\">Descripcion</label>
  <textarea type=\"text\" name=\"descripcion\" placeholder=\"Describir breve como ocurrio el acontecimiento\" class=\"form-control\" id=\"descripcion\"></textarea>
</div>
<div class=\"f1-buttons col-md-12 p-t-12\">
  <button type=\"button\" class=\"btn btn-previous\">Previous</button>
  <button type=\"button\" id=\"btn-crear-anuncio\" class=\"btn btn-mat waves-light btn-inverse text-center\">Crear Anuncio</button>
</div>", "crear-ticket/inc/detalles-generales.twig", "C:\\xampp\\htdocs\\PROYECTO-U\\app\\Views\\crear-ticket\\inc\\detalles-generales.twig");
    }
}
