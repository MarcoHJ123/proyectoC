<?php

/* crear-usuario/inc/detalle-persona.twig */
class __TwigTemplate_0b84b58f13d5755fad7f7191fe0016e51666eb73631daa3d70790ee6579f814f extends Twig_Template
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
<div class=\"row\">
<div class=\"col-md-12 p-t-12\" for=\"id_imagen\">
  <label for=\"imagen\">Imagen:</label> 
  <input id=\"id_imagen\" name=\"id_imagen\" size=\"30\" value=\"1\" type=\"file\" />
 
  </div>
    <div class=\"col-md-6 p-t-6\" for=\"nombres_persona\">
    <label class=\"col-form-label\">Nombres</label>
    <input type=\"text\" name=\"nombres_persona\" class=\"form-control\" id=\"nombres_persona\">
  </div>
  <div class=\"col-md-6 p-t-6\" for=\"apellidos_persona\">
    <label class=\"col-form-label\">Apellidos</label>
    <input type=\"text\" name=\"apellidos_persona\"  class=\"form-control\" id=\"apellidos_persona\">
  </div>
<div class=\"col-md-6 p-t-6\" for=\"sexo_persona\">
  <label class=\"col-form-label\">Sexo</label>
  ";
        // line 19
        echo "  <select name=\"sexo_persona\" class=\"form-control form-control-inverse\">
\t<option value=\"0\">- SELECCIONAR -</option>
\t<option value=\"h\">Hombre</option>
\t<option value=\"m\">Mujer</option>
\t</select>
</div>
    
<div class=\"col-md-6 p-t-6\" for=\"institucion\">
  <label class=\"col-form-label\">Institucion</label>
  ";
        // line 29
        echo "  <select name=\"institucion\" id=\"institucion\" class=\"form-control form-control-inverse\">
  ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["instituciones"]) ? $context["instituciones"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["institucion"]) {
            // line 31
            echo "\t<option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["institucion"], "id_institucion", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["institucion"], "nombre", array()), "html", null, true);
            echo "</option>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['institucion'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "\t</select>
</div>
 
<div class=\"col-md-4 p-t-6\" for=\"correo_electronico\">
  <label class=\"col-form-label\">Correo Electronico</label>
  <input type=\"text\" name=\"correo_electronico\" placeholder=\"Correo\" class=\"form-control\" id=\"correo_electronico\">
</div>

</div>
<div class=\"buttons\">
   <button type=\"button\" id=\"btn-crear-anuncio\" class=\"btn btn-mat waves-light btn-inverse text-center\">

    Crear Usuario</button>
</div>";
    }

    public function getTemplateName()
    {
        return "crear-usuario/inc/detalle-persona.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 33,  56 => 31,  52 => 30,  49 => 29,  38 => 19,  19 => 1,);
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
<div class=\"row\">
<div class=\"col-md-12 p-t-12\" for=\"id_imagen\">
  <label for=\"imagen\">Imagen:</label> 
  <input id=\"id_imagen\" name=\"id_imagen\" size=\"30\" value=\"1\" type=\"file\" />
 
  </div>
    <div class=\"col-md-6 p-t-6\" for=\"nombres_persona\">
    <label class=\"col-form-label\">Nombres</label>
    <input type=\"text\" name=\"nombres_persona\" class=\"form-control\" id=\"nombres_persona\">
  </div>
  <div class=\"col-md-6 p-t-6\" for=\"apellidos_persona\">
    <label class=\"col-form-label\">Apellidos</label>
    <input type=\"text\" name=\"apellidos_persona\"  class=\"form-control\" id=\"apellidos_persona\">
  </div>
<div class=\"col-md-6 p-t-6\" for=\"sexo_persona\">
  <label class=\"col-form-label\">Sexo</label>
  {# <input type=\"text\" name=\"sexo_persona\" class=\"form-control\" id=\"sexo_persona\"> #}
  <select name=\"sexo_persona\" class=\"form-control form-control-inverse\">
\t<option value=\"0\">- SELECCIONAR -</option>
\t<option value=\"h\">Hombre</option>
\t<option value=\"m\">Mujer</option>
\t</select>
</div>
    
<div class=\"col-md-6 p-t-6\" for=\"institucion\">
  <label class=\"col-form-label\">Institucion</label>
  {# <input type=\"text\" name=\"color_piel\" class=\"form-control\" id=\"color_piel\"> #}
  <select name=\"institucion\" id=\"institucion\" class=\"form-control form-control-inverse\">
  {% for institucion in instituciones %}
\t<option value=\"{{ institucion.id_institucion }}\">{{institucion.nombre}}</option>
  {% endfor %}
\t</select>
</div>
 
<div class=\"col-md-4 p-t-6\" for=\"correo_electronico\">
  <label class=\"col-form-label\">Correo Electronico</label>
  <input type=\"text\" name=\"correo_electronico\" placeholder=\"Correo\" class=\"form-control\" id=\"correo_electronico\">
</div>

</div>
<div class=\"buttons\">
   <button type=\"button\" id=\"btn-crear-anuncio\" class=\"btn btn-mat waves-light btn-inverse text-center\">

    Crear Usuario</button>
</div>", "crear-usuario/inc/detalle-persona.twig", "C:\\xampp\\htdocs\\proyectoC\\app\\Views\\crear-usuario\\inc\\detalle-persona.twig");
    }
}
