<?php

/* crear-anuncios/desaparecido/inc/detalles-generales.twig */
class __TwigTemplate_a435b99814109b416765b23fd4251b545b481b222295e28eb32869625544f93b extends Twig_Template
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
<div class=\"row\">

  <div class=\"col-md-12 p-t-12\">
  <label class=\"col-form-label\">Ultima vez visto</label>
  <div id=\"map\" style=\"height: 278px\"></div>
  <form action=\"#\" id=\"posicion\" name=\"posicion\">
    <input type=\"text\" name=\"ubicacio_lt\"  hidden disabled />
    <input type=\"text\" name=\"ubicacio_ln\"  hidden disabled />
  </form>
  </div>

  <div class=\"col-md-12 p-t-12\" for=\"descripcion\">
    <label class=\"col-form-label\">Descripcion</label>
    <textarea type=\"text\" name=\"descripcion\" placeholder=\"Describir breve como ocurrio el acontecimiento\" class=\"form-control\" id=\"descripcion\"></textarea>
  </div>

</div>

<div class=\"f1-buttons\">
  <button type=\"button\" class=\"btn btn-previous\">Anterior</button>
  <button type=\"button\" class=\"btn btn-next\">Siguiente</button>
</div>";
    }

    public function getTemplateName()
    {
        return "crear-anuncios/desaparecido/inc/detalles-generales.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
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
<div class=\"row\">

  <div class=\"col-md-12 p-t-12\">
  <label class=\"col-form-label\">Ultima vez visto</label>
  <div id=\"map\" style=\"height: 278px\"></div>
  <form action=\"#\" id=\"posicion\" name=\"posicion\">
    <input type=\"text\" name=\"ubicacio_lt\"  hidden disabled />
    <input type=\"text\" name=\"ubicacio_ln\"  hidden disabled />
  </form>
  </div>

  <div class=\"col-md-12 p-t-12\" for=\"descripcion\">
    <label class=\"col-form-label\">Descripcion</label>
    <textarea type=\"text\" name=\"descripcion\" placeholder=\"Describir breve como ocurrio el acontecimiento\" class=\"form-control\" id=\"descripcion\"></textarea>
  </div>

</div>

<div class=\"f1-buttons\">
  <button type=\"button\" class=\"btn btn-previous\">Anterior</button>
  <button type=\"button\" class=\"btn btn-next\">Siguiente</button>
</div>", "crear-anuncios/desaparecido/inc/detalles-generales.twig", "C:\\xampp\\htdocs\\proyectoC\\app\\Views\\crear-anuncios\\desaparecido\\inc\\detalles-generales.twig");
    }
}
