<?php

/* crear-ticket/main.twig */
class __TwigTemplate_085f9c8b8f15e56ec582726818873e48748d3bb924a832975b4c1ae5ae7cfaa4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("templates/master/master.twig", "crear-ticket/main.twig", 1);
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
        $this->loadTemplate("templates/inc/messages.twig", "crear-ticket/main.twig", 7)->display($context);
        // line 8
        echo "      </div>
\t\t<div class=\"col-sm-12\">
      <div class=\"card card-creacion-ticket\">
        <div class=\"card-header text-center m-t-10\">
          <h3>Registra Persona Desaparecida</h3>
        </div>
          <div class=\"f1 card-block form-crear-ticket\">
          \t";
        // line 16
        echo "          \t\t";
        $this->loadTemplate("crear-ticket/inc/pasos.twig", "crear-ticket/main.twig", 16)->display($context);
        // line 17
        echo "          \t\t<fieldset>
          \t\t";
        // line 18
        $this->loadTemplate("crear-ticket/inc/detalle-persona.twig", "crear-ticket/main.twig", 18)->display($context);
        // line 19
        echo "              </fieldset>
              <fieldset>
              ";
        // line 21
        $this->loadTemplate("crear-ticket/inc/detalles-generales.twig", "crear-ticket/main.twig", 21)->display($context);
        // line 22
        echo "              </fieldset>
              <fieldset>
          \t\t";
        // line 24
        $this->loadTemplate("crear-ticket/inc/datos-Personales.twig", "crear-ticket/main.twig", 24)->display($context);
        // line 25
        echo "              </fieldset>
              
              <div class=\"m-b-26 box-mensaje-ticket-creado hide\">
                <div class=\"alert alert-info icons-alert fix-icon-alert\">
                </div>
              </div>
          \t";
        // line 32
        echo "          </div>
        </div>
      </div>
    </div>
  </div>
";
    }

    // line 38
    public function block_scripts($context, array $blocks = array())
    {
        // line 39
        echo "  ";
        $this->displayParentBlock("scripts", $context, $blocks);
        echo "
  <!-- pickadate -->
  <script type=\"text/javascript\" src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/public/assets/app/libs/pickadate/js/picker.js\"></script>
  <script type=\"text/javascript\" src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/public/assets/app/libs/pickadate/js/picker.time.js\"></script>
  <script type=\"text/javascript\" src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/public/assets/app/libs/pickadate/js/picker.date.js\"></script>

  <!-- App JS -->
  <script type=\"text/javascript\" src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/public/assets/app/js/crear_ticket.js\"></script>
  <script type=\"text/javascript\" src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/public/assets/app/js/validar_crear_ticket.js\"></script>
";
    }

    public function getTemplateName()
    {
        return "crear-ticket/main.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 47,  108 => 46,  102 => 43,  98 => 42,  94 => 41,  88 => 39,  85 => 38,  76 => 32,  68 => 25,  66 => 24,  62 => 22,  60 => 21,  56 => 19,  54 => 18,  51 => 17,  48 => 16,  39 => 8,  37 => 7,  32 => 4,  29 => 3,  11 => 1,);
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
\t\t<div class=\"col-sm-12\">
      <div class=\"card card-creacion-ticket\">
        <div class=\"card-header text-center m-t-10\">
          <h3>Registra Persona Desaparecida</h3>
        </div>
          <div class=\"f1 card-block form-crear-ticket\">
          \t{# <form role=\"form\" action=\"\" class=\"f1\"> #}
          \t\t{% include 'crear-ticket/inc/pasos.twig' %}
          \t\t<fieldset>
          \t\t{% include 'crear-ticket/inc/detalle-persona.twig' %}
              </fieldset>
              <fieldset>
              {% include 'crear-ticket/inc/detalles-generales.twig' %}
              </fieldset>
              <fieldset>
          \t\t{% include 'crear-ticket/inc/datos-Personales.twig' %}
              </fieldset>
              
              <div class=\"m-b-26 box-mensaje-ticket-creado hide\">
                <div class=\"alert alert-info icons-alert fix-icon-alert\">
                </div>
              </div>
          \t{# </form> #}
          </div>
        </div>
      </div>
    </div>
  </div>
{% endblock %}
{% block scripts %}
  {{ parent() }}
  <!-- pickadate -->
  <script type=\"text/javascript\" src=\"{{ base_url() }}/public/assets/app/libs/pickadate/js/picker.js\"></script>
  <script type=\"text/javascript\" src=\"{{ base_url() }}/public/assets/app/libs/pickadate/js/picker.time.js\"></script>
  <script type=\"text/javascript\" src=\"{{ base_url() }}/public/assets/app/libs/pickadate/js/picker.date.js\"></script>

  <!-- App JS -->
  <script type=\"text/javascript\" src=\"{{ base_url() }}/public/assets/app/js/crear_ticket.js\"></script>
  <script type=\"text/javascript\" src=\"{{ base_url() }}/public/assets/app/js/validar_crear_ticket.js\"></script>
{% endblock %}", "crear-ticket/main.twig", "C:\\xampp\\htdocs\\proyectoC\\app\\Views\\crear-ticket\\main.twig");
    }
}
