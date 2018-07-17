<?php

/* a/a.twig */
class __TwigTemplate_2f2707e19c18288ef27ad9f52c8383dd4aa19b7044bc51c56dd1d4f510c3c5b3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("templates/master/master.twig", "a/a.twig", 1);
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
        echo "<div class=\"page-body boxed-layout-padding\">
    <div class=\"row\">
      <div class=\"col-sm-12\">
        ";
        // line 7
        $this->loadTemplate("templates/inc/messages.twig", "a/a.twig", 7)->display($context);
        // line 8
        echo "      </div>
\t\t<div class=\"col-sm-12\">
      <div class=\"card card-creacion-ticket\">
        <div class=\"card-header text-center m-t-10\">
          <h4>REGISTRA TU ANUNCIO</h4>
        </div>
          <div class=\"card-block form-crear-ticket\">
            <div class=\"m-b-25 box-datos-generales\">
              <div class=\"form-group row\">
              \t<div class=\"col-md-6 p-t-6\" >
                  <label class=\"col-form-label\" for=\"nombres_persona\">Nombres</label>
                  <div class=\"col-md-7\">
                    <input type=\"text\" name=\"nombres_persona\" class=\"form-control\" id=\"nombres_persona\">
                  </div>
                </div>
                <div class=\"m-b-25 m-t-50 text-center\">
                  <button type=\"button\" id=\"btn-crear\" class=\"btn btn-mat waves-light btn-inverse text-center\">Crear Anuncio</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
";
    }

    // line 34
    public function block_scripts($context, array $blocks = array())
    {
        // line 35
        echo "  ";
        $this->displayParentBlock("scripts", $context, $blocks);
        echo "
  <!-- pickadate -->
  <script type=\"text/javascript\" src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/public/assets/app/libs/pickadate/js/picker.js\"></script>
  <script type=\"text/javascript\" src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/public/assets/app/libs/pickadate/js/picker.time.js\"></script>
  <script type=\"text/javascript\" src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/public/assets/app/libs/pickadate/js/picker.date.js\"></script>

  <!-- App JS -->
  <script type=\"text/javascript\" src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/public/assets/app/js/crea.js\"></script>
";
    }

    public function getTemplateName()
    {
        return "a/a.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 42,  85 => 39,  81 => 38,  77 => 37,  71 => 35,  68 => 34,  39 => 8,  37 => 7,  32 => 4,  29 => 3,  11 => 1,);
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
<div class=\"page-body boxed-layout-padding\">
    <div class=\"row\">
      <div class=\"col-sm-12\">
        {% include 'templates/inc/messages.twig' %}
      </div>
\t\t<div class=\"col-sm-12\">
      <div class=\"card card-creacion-ticket\">
        <div class=\"card-header text-center m-t-10\">
          <h4>REGISTRA TU ANUNCIO</h4>
        </div>
          <div class=\"card-block form-crear-ticket\">
            <div class=\"m-b-25 box-datos-generales\">
              <div class=\"form-group row\">
              \t<div class=\"col-md-6 p-t-6\" >
                  <label class=\"col-form-label\" for=\"nombres_persona\">Nombres</label>
                  <div class=\"col-md-7\">
                    <input type=\"text\" name=\"nombres_persona\" class=\"form-control\" id=\"nombres_persona\">
                  </div>
                </div>
                <div class=\"m-b-25 m-t-50 text-center\">
                  <button type=\"button\" id=\"btn-crear\" class=\"btn btn-mat waves-light btn-inverse text-center\">Crear Anuncio</button>
                </div>
              </div>
            </div>
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
  <script type=\"text/javascript\" src=\"{{ base_url() }}/public/assets/app/js/crea.js\"></script>
{% endblock %}", "a/a.twig", "C:\\xampp\\htdocs\\PROYECTO-U\\app\\Views\\a\\a.twig");
    }
}
