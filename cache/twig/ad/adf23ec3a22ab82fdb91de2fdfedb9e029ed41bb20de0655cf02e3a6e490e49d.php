<?php

/* crear-anuncios/desaparecido/inc/detalle-persona.twig */
class __TwigTemplate_51c1583b2e0ad42cc5f1a48195999f9696fe0982039a97c2801c66476db58793 extends Twig_Template
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
        echo "<h4>Detalles de la persona</h4>
<div class=\"row\">

  <div class=\"col-md-6 p-t-6\" for=\"sexo_persona\">
    <label class=\"col-form-label\">Sexo</label>
    <select name=\"sexo_persona\" class=\"form-control form-control-inverse\">
  \t<option value=\"0\">- SELECCIONAR -</option>
  \t<option value=\"h\">Hombre</option>
  \t<option value=\"m\">Mujer</option>
  \t</select>
  </div>

  <div class=\"col-md-6 p-t-6\" for=\"color_piel\">
    <label class=\"col-form-label\">Color Piel</label>
    <select name=\"color_piel\" class=\"form-control form-control-inverse\">
  \t<option value=\"0\">- SELECCIONAR -</option>
  \t<option value=\"bl\">Blanco</option>
  \t<option value=\"m\">Moreno</option>
  \t<option value=\"tr\">Trigueño</option>
    ";
        // line 21
        echo "  \t</select>
  </div>

  <div class=\"col-md-6 p-t-6\" for=\"estatura_persona\">
    <label class=\"col-form-label\">Estatura</label>
    <input type=\"number\" name=\"estatura_persona\" placeholder=\"Estatura de la persona\" class=\"form-control\" id=\"estatura_persona\">
  </div>

  <div class=\"col-md-6 p-t-6\" for=\"parentesco\">
    <label class=\"col-form-label\">Parentesco con Persona</label>
    <select name=\"parentesco\" class=\"form-control form-control-inverse\">
    <option value=\"0\">- SELECCIONAR -</option>
    <option value=\"1\">Padre / Madre</option>
    <option value=\"2\">Tío / Tía</option>
    <option value=\"3\">Primo / Prima</option>
    <option value=\"4\">Amigo / Amiga</option>
    <option value=\"5\">Conocido</option>
    </select>
  </div>

</div>

<div class=\"f1-buttons\">
  <button type=\"button\" class=\"btn btn-next\">Siguiente</button>
</div>";
    }

    public function getTemplateName()
    {
        return "crear-anuncios/desaparecido/inc/detalle-persona.twig";
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
        return new Twig_Source("<h4>Detalles de la persona</h4>
<div class=\"row\">

  <div class=\"col-md-6 p-t-6\" for=\"sexo_persona\">
    <label class=\"col-form-label\">Sexo</label>
    <select name=\"sexo_persona\" class=\"form-control form-control-inverse\">
  \t<option value=\"0\">- SELECCIONAR -</option>
  \t<option value=\"h\">Hombre</option>
  \t<option value=\"m\">Mujer</option>
  \t</select>
  </div>

  <div class=\"col-md-6 p-t-6\" for=\"color_piel\">
    <label class=\"col-form-label\">Color Piel</label>
    <select name=\"color_piel\" class=\"form-control form-control-inverse\">
  \t<option value=\"0\">- SELECCIONAR -</option>
  \t<option value=\"bl\">Blanco</option>
  \t<option value=\"m\">Moreno</option>
  \t<option value=\"tr\">Trigueño</option>
    {# Poner una paleta para que la gente escoja el color #}
  \t</select>
  </div>

  <div class=\"col-md-6 p-t-6\" for=\"estatura_persona\">
    <label class=\"col-form-label\">Estatura</label>
    <input type=\"number\" name=\"estatura_persona\" placeholder=\"Estatura de la persona\" class=\"form-control\" id=\"estatura_persona\">
  </div>

  <div class=\"col-md-6 p-t-6\" for=\"parentesco\">
    <label class=\"col-form-label\">Parentesco con Persona</label>
    <select name=\"parentesco\" class=\"form-control form-control-inverse\">
    <option value=\"0\">- SELECCIONAR -</option>
    <option value=\"1\">Padre / Madre</option>
    <option value=\"2\">Tío / Tía</option>
    <option value=\"3\">Primo / Prima</option>
    <option value=\"4\">Amigo / Amiga</option>
    <option value=\"5\">Conocido</option>
    </select>
  </div>

</div>

<div class=\"f1-buttons\">
  <button type=\"button\" class=\"btn btn-next\">Siguiente</button>
</div>", "crear-anuncios/desaparecido/inc/detalle-persona.twig", "C:\\xampp\\htdocs\\proyectoC\\app\\Views\\crear-anuncios\\desaparecido\\inc\\detalle-persona.twig");
    }
}
