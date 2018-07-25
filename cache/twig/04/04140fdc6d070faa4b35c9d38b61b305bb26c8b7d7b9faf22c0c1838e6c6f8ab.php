<?php

/* crear-anuncios/perdido/main.twig */
class __TwigTemplate_c925044b27d7da14c929f94f08932baa8f747a400adf5a5524ba4f9784273883 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("templates/master/master.twig", "crear-anuncios/perdido/main.twig", 1);
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
        echo "<div class=\"page-body text-center\">
<<<<<<< HEAD
  <div class=\"row\">
    <div class=\"col-sm-12\">
      ";
        // line 7
        $this->loadTemplate("templates/inc/messages.twig", "crear-anuncios/perdido/main.twig", 7)->display($context);
        // line 8
        echo "    </div>
    <div class=\"col-sm-12\" style=\"    padding-left: 42px;
    padding-right: 42px;\">
=======
    <div class=\"row\">
      <div class=\"col-sm-12\">
        ";
        // line 7
        $this->loadTemplate("templates/inc/messages.twig", "crear-anuncios/perdido/main.twig", 7)->display($context);
        // line 8
        echo "      </div>
    <div class=\"col-sm-12\">
>>>>>>> 61590ebb00bee79588ad2a072d0748d54789ff0b
      <div class=\"card card-creacion-ticket\">
        <div class=\"card-header text-center m-t-10\">
          <h3>Registra Persona Encontrada</h3>
        </div>
<<<<<<< HEAD
        <div class=\"card-block form-crear-ticket\">
          ";
        // line 16
        $this->loadTemplate("crear-anuncios/perdido/inc/partes.twig", "crear-anuncios/perdido/main.twig", 16)->display($context);
        // line 17
        echo "          <div class=\"m-b-26 box-mensaje-ticket-creado hide\">
            <div class=\"alert alert-info icons-alert fix-icon-alert\">
            </div>
          </div>
        </div>
        </div>
      </div>
    </div>
</div>
=======
          <div class=\"card-block form-crear-ticket\">

              ";
        // line 16
        $this->loadTemplate("crear-anuncios/perdido/inc/partes.twig", "crear-anuncios/perdido/main.twig", 16)->display($context);
        // line 17
        echo "
              <div class=\"m-b-26 box-mensaje-ticket-creado hide\">
                <div class=\"alert alert-info icons-alert fix-icon-alert\">
                </div>
              </div>
            ";
        // line 23
        echo "          </div>
        </div>
      </div>
    </div>
  </div>


>>>>>>> 61590ebb00bee79588ad2a072d0748d54789ff0b

";
    }

<<<<<<< HEAD
    // line 28
    public function block_scripts($context, array $blocks = array())
    {
        // line 29
=======
    // line 32
    public function block_scripts($context, array $blocks = array())
    {
        // line 33
>>>>>>> 61590ebb00bee79588ad2a072d0748d54789ff0b
        echo "  ";
        $this->displayParentBlock("scripts", $context, $blocks);
        echo "

  <!-- App JS -->
";
    }

    public function getTemplateName()
    {
        return "crear-anuncios/perdido/main.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
<<<<<<< HEAD
        return array (  68 => 29,  65 => 28,  51 => 17,  49 => 16,  39 => 8,  37 => 7,  32 => 4,  29 => 3,  11 => 1,);
=======
        return array (  73 => 33,  70 => 32,  58 => 23,  51 => 17,  49 => 16,  39 => 8,  37 => 7,  32 => 4,  29 => 3,  11 => 1,);
>>>>>>> 61590ebb00bee79588ad2a072d0748d54789ff0b
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
<<<<<<< HEAD
  <div class=\"row\">
    <div class=\"col-sm-12\">
      {% include 'templates/inc/messages.twig' %}
    </div>
    <div class=\"col-sm-12\" style=\"    padding-left: 42px;
    padding-right: 42px;\">
=======
    <div class=\"row\">
      <div class=\"col-sm-12\">
        {% include 'templates/inc/messages.twig' %}
      </div>
    <div class=\"col-sm-12\">
>>>>>>> 61590ebb00bee79588ad2a072d0748d54789ff0b
      <div class=\"card card-creacion-ticket\">
        <div class=\"card-header text-center m-t-10\">
          <h3>Registra Persona Encontrada</h3>
        </div>
<<<<<<< HEAD
        <div class=\"card-block form-crear-ticket\">
          {% include 'crear-anuncios/perdido/inc/partes.twig' %}
          <div class=\"m-b-26 box-mensaje-ticket-creado hide\">
            <div class=\"alert alert-info icons-alert fix-icon-alert\">
            </div>
          </div>
        </div>
        </div>
      </div>
    </div>
</div>
=======
          <div class=\"card-block form-crear-ticket\">

              {% include 'crear-anuncios/perdido/inc/partes.twig' %}

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


>>>>>>> 61590ebb00bee79588ad2a072d0748d54789ff0b

{% endblock %}
{% block scripts %}
  {{ parent() }}

  <!-- App JS -->
{% endblock %}", "crear-anuncios/perdido/main.twig", "C:\\xampp\\htdocs\\proyectoC\\app\\Views\\crear-anuncios\\perdido\\main.twig");
    }
}
