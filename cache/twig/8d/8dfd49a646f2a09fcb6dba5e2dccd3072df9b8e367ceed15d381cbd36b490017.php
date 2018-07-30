<?php

/* aportar-anuncios/inc/aportar.twig */
class __TwigTemplate_09abe47a5e771ae97e5c4bb1fbcdb6b49182b10a098f3413d760a881240a1361 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("templates/master/master.twig", "aportar-anuncios/inc/aportar.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'scripts' => array($this, 'block_scripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "templates/master/master.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 3
        if ((isset($context["anuncio"]) ? $context["anuncio"] : null)) {
            // line 4
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["anuncio"]);
            foreach ($context['_seq'] as $context["_key"] => $context["anuncio"]) {
                // line 5
                echo "<div class=\"card card-creacion-detalle\">
  <div class=\"card-header text-center\" >";
                // line 8
                echo "    <h3>PERSONA DESAPARECIDA</h3>
\t</div>
\t<div class=\"card-block form-crear-aporte\">
\t\t<div class=\"col-sm-12 col-md-12 col-lg-12\">
\t\t\t<h4 style=\"padding-top: 15px;\">REGISTRAR APORTE</h4>
\t\t\t<div class=\"col-md-12 p-t-12\">
\t\t  \t<label class=\"col-form-label\">Seleccionar lugar donde fue visto</label>
\t\t  \t<div id=\"map\" style=\"height: 278px\"></div>
\t\t    <form action=\"#\" id=\"posicion\" name=\"posicion\">
\t\t      <input type=\"text\" name=\"ubicacio_lt\" class=\"form-control\" hidden disabled/>
\t\t      <input type=\"text\" name=\"ubicacio_ln\" class=\"form-control\" hidden disabled/>
\t\t\t\t</form>
\t\t  </div>

\t\t\t<div class=\"col-md-12 p-t-12\" for=\"descripcion\">
\t\t    <label class=\"col-form-label\">Descripcion</label>
\t\t    <textarea type=\"text\" name=\"descripcion\" placeholder=\"Describir breve como ocurrio el acontecimiento\" class=\"form-control\" id=\"descripcion\"></textarea>
\t\t  </div>

\t\t\t<div class=\"col-md-12 p-t-12 text-center\"><br>
\t\t\t<input type=\"text\" name=\"id_anuncio\" class=\"form-control\" value=\"";
                // line 28
                echo twig_escape_filter($this->env, $this->getAttribute($context["anuncio"], "id_anuncio", array()), "html", null, true);
                echo "\" hidden disabled/>
\t\t\t<button type=\"button\" id=\"btn-crear-aporte\" class=\"btn btn-mat waves-light btn-inverse text-center\">Crear aporte</button>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"m-b-26 box-mensaje-aporte-creado hide\">
\t\t  <div class=\"alert alert-info icons-alert fix-icon-alert\">
\t\t  </div>
\t\t</div>
\t</div>
</div>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['anuncio'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 40
            echo "\t<p>No hay datos del anuncio</p>
";
        }
    }

    // line 44
    public function block_scripts($context, array $blocks = array())
    {
        // line 45
        echo "  ";
        $this->displayParentBlock("scripts", $context, $blocks);
        echo "
  <script type=\"text/javascript\" src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/public/assets/app/js/mapa.js\"></script>
  <script type=\"text/javascript\" src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/public/assets/app/js/crear_aporte.js\"></script>
  <script type=\"text/javascript\" src=\"http://maps.google.com/maps?file=api&v=2&key=AIzaSyCV-quRftERbHa_3kEUVCTOWPgvl9bA1ao\"></script>
";
    }

    public function getTemplateName()
    {
        return "aportar-anuncios/inc/aportar.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 47,  95 => 46,  90 => 45,  87 => 44,  81 => 40,  63 => 28,  41 => 8,  38 => 5,  34 => 4,  32 => 3,  29 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'templates/master/master.twig' %}
{% block content %}
{% if anuncio %}
{% for anuncio in anuncio %}
<div class=\"card card-creacion-detalle\">
  <div class=\"card-header text-center\" >{#  style=\"color: white;
background-color: #ff5252;\" #}
    <h3>PERSONA DESAPARECIDA</h3>
\t</div>
\t<div class=\"card-block form-crear-aporte\">
\t\t<div class=\"col-sm-12 col-md-12 col-lg-12\">
\t\t\t<h4 style=\"padding-top: 15px;\">REGISTRAR APORTE</h4>
\t\t\t<div class=\"col-md-12 p-t-12\">
\t\t  \t<label class=\"col-form-label\">Seleccionar lugar donde fue visto</label>
\t\t  \t<div id=\"map\" style=\"height: 278px\"></div>
\t\t    <form action=\"#\" id=\"posicion\" name=\"posicion\">
\t\t      <input type=\"text\" name=\"ubicacio_lt\" class=\"form-control\" hidden disabled/>
\t\t      <input type=\"text\" name=\"ubicacio_ln\" class=\"form-control\" hidden disabled/>
\t\t\t\t</form>
\t\t  </div>

\t\t\t<div class=\"col-md-12 p-t-12\" for=\"descripcion\">
\t\t    <label class=\"col-form-label\">Descripcion</label>
\t\t    <textarea type=\"text\" name=\"descripcion\" placeholder=\"Describir breve como ocurrio el acontecimiento\" class=\"form-control\" id=\"descripcion\"></textarea>
\t\t  </div>

\t\t\t<div class=\"col-md-12 p-t-12 text-center\"><br>
\t\t\t<input type=\"text\" name=\"id_anuncio\" class=\"form-control\" value=\"{{ anuncio.id_anuncio }}\" hidden disabled/>
\t\t\t<button type=\"button\" id=\"btn-crear-aporte\" class=\"btn btn-mat waves-light btn-inverse text-center\">Crear aporte</button>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"m-b-26 box-mensaje-aporte-creado hide\">
\t\t  <div class=\"alert alert-info icons-alert fix-icon-alert\">
\t\t  </div>
\t\t</div>
\t</div>
</div>
{% endfor %}
{% else %}
\t<p>No hay datos del anuncio</p>
{% endif %}
{% endblock content %}

{% block scripts %}
  {{ parent() }}
  <script type=\"text/javascript\" src=\"{{ base_url() }}/public/assets/app/js/mapa.js\"></script>
  <script type=\"text/javascript\" src=\"{{ base_url() }}/public/assets/app/js/crear_aporte.js\"></script>
  <script type=\"text/javascript\" src=\"http://maps.google.com/maps?file=api&v=2&key=AIzaSyCV-quRftERbHa_3kEUVCTOWPgvl9bA1ao\"></script>
{% endblock %}", "aportar-anuncios/inc/aportar.twig", "C:\\xampp\\htdocs\\proyectoC\\app\\Views\\aportar-anuncios\\inc\\aportar.twig");
    }
}
