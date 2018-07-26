<?php

/* templates/master/inc/css-files.twig */
class __TwigTemplate_c248c3b5afbb17843cbd51a90e5c9cb17c744231596dee58e8863e52b907e7b8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!-- framework -->
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/public/bower_components/bootstrap/css/bootstrap.min.css\">

<!-- waves.css -->
";
        // line 17
        echo "
<!-- animation nifty modal window effects css -->
";
        // line 20
        echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/public/assets/icon/icofont/css/icofont.css\">

<!-- main style -->
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/public/assets/css/style.css\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/public/assets/css/pages.css\">


<!-- app style -->
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/public/assets/app/css/app.css\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/public/assets/app/css/style.css\">


";
    }

    public function getTemplateName()
    {
        return "templates/master/inc/css-files.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 29,  50 => 28,  43 => 24,  39 => 23,  32 => 20,  28 => 17,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!-- framework -->
<link rel=\"stylesheet\" type=\"text/css\" href=\"{{ base_url() }}/public/bower_components/bootstrap/css/bootstrap.min.css\">

<!-- waves.css -->
{# <link rel=\"stylesheet\" href=\"{{ base_url() }}/public/assets/pages/waves/css/waves.min.css\" type=\"text/css\" media=\"all\"> #}
{#
<!-- feather icon -->
<link rel=\"stylesheet\" type=\"text/css\" href=\"{{ base_url() }}/public/assets/icon/feather/css/feather.css\">

<!-- themify-icons line icon -->
<link rel=\"stylesheet\" type=\"text/css\" href=\"{{ base_url() }}/public/assets/icon/themify-icons/themify-icons.css\">

<!-- ico font -->

<!-- Font Awesome -->
<link rel=\"stylesheet\" type=\"text/css\" href=\"{{ base_url() }}/public/assets/icon/font-awesome/css/font-awesome.min.css\"> #}

<!-- animation nifty modal window effects css -->
{# <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ base_url() }}/public/assets/css/component.css\"> #}
<link rel=\"stylesheet\" type=\"text/css\" href=\"{{ base_url() }}/public/assets/icon/icofont/css/icofont.css\">

<!-- main style -->
<link rel=\"stylesheet\" type=\"text/css\" href=\"{{ base_url() }}/public/assets/css/style.css\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"{{ base_url() }}/public/assets/css/pages.css\">


<!-- app style -->
<link rel=\"stylesheet\" type=\"text/css\" href=\"{{ base_url() }}/public/assets/app/css/app.css\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"{{ base_url() }}/public/assets/app/css/style.css\">


", "templates/master/inc/css-files.twig", "C:\\xampp\\htdocs\\proyectoC\\app\\Views\\templates\\master\\inc\\css-files.twig");
    }
}
