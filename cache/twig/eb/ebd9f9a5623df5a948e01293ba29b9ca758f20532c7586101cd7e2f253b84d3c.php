<?php

/* crear-ticket/desaparecido/main.twig */
class __TwigTemplate_51b5842ec732cc5273cb04e6556e718f814c548119d75c3eb5ee9b8cae156e73 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("templates/master/master.twig", "crear-ticket/desaparecido/main.twig", 1);
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
        $this->loadTemplate("templates/inc/messages.twig", "crear-ticket/desaparecido/main.twig", 7)->display($context);
        // line 8
        echo "      </div>
    <div class=\"col-sm-12\">
      <div class=\"card card-creacion-ticket\">
        <div class=\"card-header text-center m-t-10\">
          <h3>Registra Persona Desaparecida</h3>
        </div>
          <div class=\"f1 card-block form-crear-ticket\">
            ";
        // line 16
        echo "              ";
        $this->loadTemplate("crear-ticket/desaparecido/inc/pasos.twig", "crear-ticket/desaparecido/main.twig", 16)->display($context);
        // line 17
        echo "              <fieldset>
              ";
        // line 18
        $this->loadTemplate("crear-ticket/desaparecido/inc/detalle-persona.twig", "crear-ticket/desaparecido/main.twig", 18)->display($context);
        // line 19
        echo "              </fieldset>
              <fieldset>
              ";
        // line 21
        $this->loadTemplate("crear-ticket/desaparecido/inc/detalles-generales.twig", "crear-ticket/desaparecido/main.twig", 21)->display($context);
        // line 22
        echo "              </fieldset>
              <fieldset>
              ";
        // line 24
        $this->loadTemplate("crear-ticket/desaparecido/inc/datos-Personales.twig", "crear-ticket/desaparecido/main.twig", 24)->display($context);
        // line 25
        echo "              </fieldset>

              <div class=\"m-b-26 box-mensaje-ticket-creado hide\">
                <div class=\"alert alert-info icons-alert fix-icon-alert\">
                </div>
              </div>
            ";
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
        return "crear-ticket/desaparecido/main.twig";
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
    <div class=\"col-sm-12\">
      <div class=\"card card-creacion-ticket\">
        <div class=\"card-header text-center m-t-10\">
          <h3>Registra Persona Desaparecida</h3>
        </div>
          <div class=\"f1 card-block form-crear-ticket\">
            {# <form role=\"form\" action=\"\" class=\"f1\"> #}
              {% include 'crear-ticket/desaparecido/inc/pasos.twig' %}
              <fieldset>
              {% include 'crear-ticket/desaparecido/inc/detalle-persona.twig' %}
              </fieldset>
              <fieldset>
              {% include 'crear-ticket/desaparecido/inc/detalles-generales.twig' %}
              </fieldset>
              <fieldset>
              {% include 'crear-ticket/desaparecido/inc/datos-Personales.twig' %}
              </fieldset>

              <div class=\"m-b-26 box-mensaje-ticket-creado hide\">
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
  <!-- pickadate -->
  <script type=\"text/javascript\" src=\"{{ base_url() }}/public/assets/app/libs/pickadate/js/picker.js\"></script>
  <script type=\"text/javascript\" src=\"{{ base_url() }}/public/assets/app/libs/pickadate/js/picker.time.js\"></script>
  <script type=\"text/javascript\" src=\"{{ base_url() }}/public/assets/app/libs/pickadate/js/picker.date.js\"></script>

  <!-- App JS -->
  <script type=\"text/javascript\" src=\"{{ base_url() }}/public/assets/app/js/crear_ticket.js\"></script>
  <script type=\"text/javascript\" src=\"{{ base_url() }}/public/assets/app/js/validar_crear_ticket.js\"></script>
{% endblock %}", "crear-ticket/desaparecido/main.twig", "C:\\xampp\\htdocs\\proyectoC\\app\\Views\\crear-ticket\\desaparecido\\main.twig");
    }
}
