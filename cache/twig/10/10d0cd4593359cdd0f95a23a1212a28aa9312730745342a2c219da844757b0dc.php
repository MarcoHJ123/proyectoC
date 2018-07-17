<?php

/* login/login.twig */
class __TwigTemplate_9d32a313064b9dc0b9a5b9182650182159fea9fca86891f84699e0274fb39123 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("templates/login/login.twig", "login/login.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "templates/login/login.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "  <div class=\"row\">
    <div class=\"col-sm-12\">
      ";
        // line 6
        $this->loadTemplate("login/inc/login-form.twig", "login/login.twig", 6)->display($context);
        // line 7
        echo "    </div><!--.col-sm-12-->
  </div><!--.row-->
";
    }

    public function getTemplateName()
    {
        return "login/login.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 7,  35 => 6,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'templates/login/login.twig' %}

{% block content %}
  <div class=\"row\">
    <div class=\"col-sm-12\">
      {% include 'login/inc/login-form.twig' %}
    </div><!--.col-sm-12-->
  </div><!--.row-->
{% endblock %}", "login/login.twig", "C:\\xampp\\htdocs\\proyectoC\\app\\Views\\login\\login.twig");
    }
}
