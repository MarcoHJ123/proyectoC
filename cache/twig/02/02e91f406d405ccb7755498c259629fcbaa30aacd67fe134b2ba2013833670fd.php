<?php

/* templates/login/login.twig */
class __TwigTemplate_49933f7368f79478bccf1235b223793c1dc2ba81d12d088c97d310a2d9ae123b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'scripts' => array($this, 'block_scripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"es\">

<head>
  <meta charset=\"utf-8\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
  <!-- Tell the browser to be responsive to screen width -->
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

  <!-- Favicon icon -->
  ";
        // line 12
        echo "  <title>PERSONAS</title>

  ";
        // line 14
        $this->loadTemplate("templates/master/inc/css-files.twig", "templates/login/login.twig", 14)->display($context);
        // line 15
        echo "

</head>

<body>

  <div class=\"login-block\">
    <div class=\"container\">
      ";
        // line 23
        $this->displayBlock('content', $context, $blocks);
        // line 26
        echo "    </div><!-- .container -->
  </div><!-- .login-block -->



  ";
        // line 31
        $this->displayBlock('scripts', $context, $blocks);
        // line 38
        echo "
  ";
        // line 39
        $this->loadTemplate("templates/master/inc/js-files.twig", "templates/login/login.twig", 39)->display($context);
        // line 40
        echo "

</body>

</html>
";
    }

    // line 23
    public function block_content($context, array $blocks = array())
    {
        // line 24
        echo "
      ";
    }

    // line 31
    public function block_scripts($context, array $blocks = array())
    {
        // line 32
        echo "    <script type=\"text/javascript\">
    var APP = {
      site_url: '";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "'
    };
    </script>
  ";
    }

    public function getTemplateName()
    {
        return "templates/login/login.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 34,  85 => 32,  82 => 31,  77 => 24,  74 => 23,  65 => 40,  63 => 39,  60 => 38,  58 => 31,  51 => 26,  49 => 23,  39 => 15,  37 => 14,  33 => 12,  21 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"es\">

<head>
  <meta charset=\"utf-8\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
  <!-- Tell the browser to be responsive to screen width -->
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

  <!-- Favicon icon -->
  {# <link rel=\"icon\" type=\"image/png\" sizes=\"16x16\" href=\"{{ base_url() }}/public/assets/app/images/favicon.png\"> #}
  <title>PERSONAS</title>

  {% include 'templates/master/inc/css-files.twig' %}


</head>

<body>

  <div class=\"login-block\">
    <div class=\"container\">
      {% block content %}

      {% endblock %}
    </div><!-- .container -->
  </div><!-- .login-block -->



  {% block scripts %}
    <script type=\"text/javascript\">
    var APP = {
      site_url: '{{ base_url() }}'
    };
    </script>
  {% endblock %}

  {% include 'templates/master/inc/js-files.twig' %}


</body>

</html>
", "templates/login/login.twig", "C:\\xampp\\htdocs\\proyectoC\\app\\Views\\templates\\login\\login.twig");
    }
}
