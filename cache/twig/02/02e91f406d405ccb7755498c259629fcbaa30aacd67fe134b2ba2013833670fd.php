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
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

  <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/public/assets/app/images/logo.png\">
  <title>PERSONAS</title>
  ";
        // line 11
        $this->loadTemplate("templates/master/inc/css-files.twig", "templates/login/login.twig", 11)->display($context);
        // line 12
        echo "
</head>

<body>

  <div class=\"login-block\">
    <div class=\"container\">
      ";
        // line 19
        $this->displayBlock('content', $context, $blocks);
        // line 22
        echo "    </div><!-- .container -->
  </div><!-- .login-block -->



  ";
        // line 27
        $this->displayBlock('scripts', $context, $blocks);
        // line 34
        echo "
  ";
        // line 35
        $this->loadTemplate("templates/master/inc/js-files.twig", "templates/login/login.twig", 35)->display($context);
        // line 36
        echo "

</body>

</html>
";
    }

    // line 19
    public function block_content($context, array $blocks = array())
    {
        // line 20
        echo "
      ";
    }

    // line 27
    public function block_scripts($context, array $blocks = array())
    {
        // line 28
        echo "    <script type=\"text/javascript\">
    var APP = {
      site_url: '";
        // line 30
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
        return array (  87 => 30,  83 => 28,  80 => 27,  75 => 20,  72 => 19,  63 => 36,  61 => 35,  58 => 34,  56 => 27,  49 => 22,  47 => 19,  38 => 12,  36 => 11,  31 => 9,  21 => 1,);
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
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

  <link rel=\"icon\" type=\"image/png\" href=\"{{ base_url() }}/public/assets/app/images/logo.png\">
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
