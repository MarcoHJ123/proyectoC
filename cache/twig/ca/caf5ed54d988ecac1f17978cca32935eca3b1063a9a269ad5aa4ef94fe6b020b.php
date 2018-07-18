<?php

/* templates/master/inc/preloader.twig */
class __TwigTemplate_2033f2ba934283c3a2c0e0dfd2094db42a2bd85a6da7dc8b97aa34982056105d extends Twig_Template
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
        echo "<div class=\"loader-bg\">
  <div class=\"loader-bar\"></div>
</div>";
    }

    public function getTemplateName()
    {
        return "templates/master/inc/preloader.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"loader-bg\">
  <div class=\"loader-bar\"></div>
</div>", "templates/master/inc/preloader.twig", "C:\\xampp\\htdocs\\proyectoC\\app\\Views\\templates\\master\\inc\\preloader.twig");
    }
}
