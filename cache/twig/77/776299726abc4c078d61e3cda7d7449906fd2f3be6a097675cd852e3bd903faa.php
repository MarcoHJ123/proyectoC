<?php

/* templates/master/inc/footer.twig */
class __TwigTemplate_dc8d975cad4e699be9fe3f1c85e14a67e3fef21e443327a9625e7591fc8a6cdd extends Twig_Template
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
        echo "<footer class=\"footer text-center\">
    CARBAJAL - NIQUEN
</footer>";
    }

    public function getTemplateName()
    {
        return "templates/master/inc/footer.twig";
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
        return new Twig_Source("<footer class=\"footer text-center\">
    CARBAJAL - NIQUEN
</footer>", "templates/master/inc/footer.twig", "C:\\xampp\\htdocs\\PROYECTO-U\\app\\Views\\templates\\master\\inc\\footer.twig");
    }
}
