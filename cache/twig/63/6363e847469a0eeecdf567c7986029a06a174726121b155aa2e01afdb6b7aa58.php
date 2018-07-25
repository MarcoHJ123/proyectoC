<?php

/* 404/main.twig */
class __TwigTemplate_8b2f4fb1d75cff0cb6a5897f4ce75ba29f076c5aa9103846de5c1ce00a0d59e8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("templates/master/master.twig", "404/main.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
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
        $this->loadTemplate("templates/inc/messages.twig", "404/main.twig", 7)->display($context);
        // line 8
        echo "    </div>
    <div class=\"col-sm-12\">
      <div class=\"card\">
        <div class=\"card-block error-404\" style=\"text-align: center;\">
          <img class=\"img-fluid error-img \" src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/public/assets/app/images/error404.png\" alt=\"404\"  style=\"max-height: 540px;\" />
          ";
        // line 14
        echo "          ";
        // line 15
        echo "        </div>
      </div>
    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "404/main.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 15,  48 => 14,  44 => 12,  38 => 8,  36 => 7,  31 => 4,  28 => 3,  11 => 1,);
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
    <div class=\"col-sm-12\">
      <div class=\"card\">
        <div class=\"card-block error-404\" style=\"text-align: center;\">
          <img class=\"img-fluid error-img \" src=\"{{ base_url() }}/public/assets/app/images/error404.png\" alt=\"404\"  style=\"max-height: 540px;\" />
          {# <h1>404</h1> #}
          {# <h4>Página no encontrada</h4> #}
        </div>
      </div>
    </div>
  </div>
</div>
{% endblock %}
", "404/main.twig", "C:\\xampp\\htdocs\\proyectoC\\app\\Views\\404\\main.twig");
    }
}
