<?php

/* crear-anuncios/master.twig */
class __TwigTemplate_489b4ae44f6f31475317b83380598926d675bad3889aa17b405ce87d1743f681 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("templates/master/master.twig", "crear-anuncios/master.twig", 1);
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
        echo "<style type=\"text/css\">
\t#panele{
\t\ttext-align:center;
\t\tbackground-color: white;
\t\tborder:solid;
\t\tborder-color: #F0F0EE;
\t\t/*padding:-2px;*/
\t\tpadding-left: initial;
    padding-right: initial;
    border-radius: 20px;
\t}
\t#buttone{
\t\tborder-bottom-left-radius: 20px;
    border-bottom-right-radius: 20px;
\t}
</style>
<div class=\"col-sm-12 row\">
\t<div class=\"col-sm-12\" style=\"text-align: center; padding: 20px;\" >
\t<h3>CREAR ANUNCIO</h3>
\t</div>
\t<div class=\"col-sm-6\" id=\"panele\">
\t\t<h4>PERSONAS DESAPARECIDAS</h4>
\t\t<img src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/public/assets/images/user-card/img-round5.jpg\" alt=\"bg-img\" class=\"img-responsive\" alt=\"User-Profile-Image\">
\t\t<a class=\"btn btn-success col-sm-12\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/crear-anuncios/perdido\" id=\"buttone\">CREAR</a>
\t</div>

\t<div class=\"col-sm-6\" id=\"panele\">
\t\t<h4>PERSONAS ENCONTRADAS</h4>
\t\t<img src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/public/assets/images/user-card/img-round5.jpg\" alt=\"bg-img\" class=\"img-responsive\" alt=\"User-Profile-Image\">
\t\t<a class=\"btn btn-danger col-sm-12\"  href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/crear-anuncios/desaparecido\" id=\"buttone\" >CREAR</a>
\t</div>

</div>
";
    }

    // line 39
    public function block_scripts($context, array $blocks = array())
    {
        // line 40
        echo "  ";
        $this->displayParentBlock("scripts", $context, $blocks);
        echo "
  <!-- App JS -->
";
    }

    public function getTemplateName()
    {
        return "crear-anuncios/master.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 40,  81 => 39,  72 => 33,  68 => 32,  60 => 27,  56 => 26,  32 => 4,  29 => 3,  11 => 1,);
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
<style type=\"text/css\">
\t#panele{
\t\ttext-align:center;
\t\tbackground-color: white;
\t\tborder:solid;
\t\tborder-color: #F0F0EE;
\t\t/*padding:-2px;*/
\t\tpadding-left: initial;
    padding-right: initial;
    border-radius: 20px;
\t}
\t#buttone{
\t\tborder-bottom-left-radius: 20px;
    border-bottom-right-radius: 20px;
\t}
</style>
<div class=\"col-sm-12 row\">
\t<div class=\"col-sm-12\" style=\"text-align: center; padding: 20px;\" >
\t<h3>CREAR ANUNCIO</h3>
\t</div>
\t<div class=\"col-sm-6\" id=\"panele\">
\t\t<h4>PERSONAS DESAPARECIDAS</h4>
\t\t<img src=\"{{ base_url() }}/public/assets/images/user-card/img-round5.jpg\" alt=\"bg-img\" class=\"img-responsive\" alt=\"User-Profile-Image\">
\t\t<a class=\"btn btn-success col-sm-12\" href=\"{{ base_url() }}/crear-anuncios/perdido\" id=\"buttone\">CREAR</a>
\t</div>

\t<div class=\"col-sm-6\" id=\"panele\">
\t\t<h4>PERSONAS ENCONTRADAS</h4>
\t\t<img src=\"{{ base_url() }}/public/assets/images/user-card/img-round5.jpg\" alt=\"bg-img\" class=\"img-responsive\" alt=\"User-Profile-Image\">
\t\t<a class=\"btn btn-danger col-sm-12\"  href=\"{{ base_url() }}/crear-anuncios/desaparecido\" id=\"buttone\" >CREAR</a>
\t</div>

</div>
{% endblock %}

{% block scripts %}
  {{ parent() }}
  <!-- App JS -->
{% endblock %}", "crear-anuncios/master.twig", "C:\\xampp\\htdocs\\proyectoC\\app\\Views\\crear-anuncios\\master.twig");
    }
}
