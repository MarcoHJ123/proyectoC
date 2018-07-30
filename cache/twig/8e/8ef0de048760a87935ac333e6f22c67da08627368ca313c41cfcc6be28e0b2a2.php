<?php

/* crear-anuncios/desaparecido/main.twig */
class __TwigTemplate_6a8c115e16aabe84d8d99da81c1f90d309187b23e89288cc77fc1fbb3081b6c3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("templates/master/master.twig", "crear-anuncios/desaparecido/main.twig", 1);
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

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "  <div class=\"page-body text-center\">
    <div class=\"row\">
      <div class=\"col-sm-12\">
        ";
        // line 7
        $this->loadTemplate("templates/inc/messages.twig", "crear-anuncios/desaparecido/main.twig", 7)->display($context);
        // line 8
        echo "      </div>
    <div class=\"col-sm-12\">
      <div class=\"card card-creacion-anuncio\">
        <div class=\"card-header text-center m-t-10\">
          <h3>Registra Persona Encontradas</h3>
        </div>
          <div class=\"f1 card-block form-crear-anuncio\">
            <div class=\"row\">
              <div class=\"col-sm-6\" style=\"text-align: -webkit-center; border-right: 1px solid rgba(0,0,0,.125);\">
                ";
        // line 17
        $this->loadTemplate("crear-anuncios/desaparecido/inc/foto.twig", "crear-anuncios/desaparecido/main.twig", 17)->display($context);
        // line 18
        echo "              </div>
              <div class=\"col-sm-6\">
                ";
        // line 20
        $this->loadTemplate("crear-anuncios/desaparecido/inc/pasos.twig", "crear-anuncios/desaparecido/main.twig", 20)->display($context);
        // line 21
        echo "                <fieldset>
                ";
        // line 22
        $this->loadTemplate("crear-anuncios/desaparecido/inc/detalle-persona.twig", "crear-anuncios/desaparecido/main.twig", 22)->display($context);
        // line 23
        echo "                </fieldset>
                <fieldset>
                ";
        // line 25
        $this->loadTemplate("crear-anuncios/desaparecido/inc/detalles-generales.twig", "crear-anuncios/desaparecido/main.twig", 25)->display($context);
        // line 26
        echo "                </fieldset>
                <fieldset>
                ";
        // line 28
        $this->loadTemplate("crear-anuncios/desaparecido/inc/datos-Personales.twig", "crear-anuncios/desaparecido/main.twig", 28)->display($context);
        // line 29
        echo "                </fieldset>
              </div>
            </div>
              <div class=\"m-b-26 box-mensaje-anuncio-creado hide\">
                <div class=\"alert alert-info icons-alert fix-icon-alert\">
                </div>
              </div>
            ";
        // line 37
        echo "          </div>
        </div>
      </div>
    </div>
  </div>
";
    }

    // line 43
    public function block_scripts($context, array $blocks = array())
    {
        // line 44
        echo "  ";
        $this->displayParentBlock("scripts", $context, $blocks);
        echo "
  <!-- App JS -->
  <script type=\"text/javascript\" src=\"http://maps.google.com/maps?file=api&v=2&key=AIzaSyCV-quRftERbHa_3kEUVCTOWPgvl9bA1ao\"></script>
  <script type=\"text/javascript\" src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/public/assets/app/js/mapa.js\"></script>
  <script type=\"text/javascript\" src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/public/assets/app/js/crear_anunciosD.js\"></script>
  <script type=\"text/javascript\" src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/public/assets/app/js/validar_crear_ticket.js\"></script>
";
    }

    public function getTemplateName()
    {
        return "crear-anuncios/desaparecido/main.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 49,  107 => 48,  103 => 47,  96 => 44,  93 => 43,  84 => 37,  75 => 29,  73 => 28,  69 => 26,  67 => 25,  63 => 23,  61 => 22,  58 => 21,  56 => 20,  52 => 18,  50 => 17,  39 => 8,  37 => 7,  32 => 4,  29 => 3,  11 => 1,);
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
  <div class=\"page-body text-center\">
    <div class=\"row\">
      <div class=\"col-sm-12\">
        {% include 'templates/inc/messages.twig' %}
      </div>
    <div class=\"col-sm-12\">
      <div class=\"card card-creacion-anuncio\">
        <div class=\"card-header text-center m-t-10\">
          <h3>Registra Persona Encontradas</h3>
        </div>
          <div class=\"f1 card-block form-crear-anuncio\">
            <div class=\"row\">
              <div class=\"col-sm-6\" style=\"text-align: -webkit-center; border-right: 1px solid rgba(0,0,0,.125);\">
                {% include 'crear-anuncios/desaparecido/inc/foto.twig' %}
              </div>
              <div class=\"col-sm-6\">
                {% include 'crear-anuncios/desaparecido/inc/pasos.twig' %}
                <fieldset>
                {% include 'crear-anuncios/desaparecido/inc/detalle-persona.twig' %}
                </fieldset>
                <fieldset>
                {% include 'crear-anuncios/desaparecido/inc/detalles-generales.twig' %}
                </fieldset>
                <fieldset>
                {% include 'crear-anuncios/desaparecido/inc/datos-Personales.twig' %}
                </fieldset>
              </div>
            </div>
              <div class=\"m-b-26 box-mensaje-anuncio-creado hide\">
                <div class=\"alert alert-info icons-alert fix-icon-alert\">
                </div>
              </div>
            {# </form> #}
          </div>
        </div>
      </div>
    </div>
  </div>
{% endblock %}
{% block scripts %}
  {{ parent() }}
  <!-- App JS -->
  <script type=\"text/javascript\" src=\"http://maps.google.com/maps?file=api&v=2&key=AIzaSyCV-quRftERbHa_3kEUVCTOWPgvl9bA1ao\"></script>
  <script type=\"text/javascript\" src=\"{{ base_url() }}/public/assets/app/js/mapa.js\"></script>
  <script type=\"text/javascript\" src=\"{{ base_url() }}/public/assets/app/js/crear_anunciosD.js\"></script>
  <script type=\"text/javascript\" src=\"{{ base_url() }}/public/assets/app/js/validar_crear_ticket.js\"></script>
{% endblock %}", "crear-anuncios/desaparecido/main.twig", "C:\\xampp\\htdocs\\proyectoC\\app\\Views\\crear-anuncios\\desaparecido\\main.twig");
    }
}
