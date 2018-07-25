<?php

/* crear-anuncios/desaparecido/inc/foto.twig */
class __TwigTemplate_e7ce337030e301c2842ecf931f627b3c88503a64d8448cbc140f94776e34bebf extends Twig_Template
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
        echo "ACA IRAN LAS FOTOS
<div class=\"col-sm-12\">
\t\t<input type=\"file\" class=\"form-control\">
\t</div>
<div class=\"col-md-6\">
\t\t<input type=\"image\" class=\"img-rounded\" src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/public/assets/app/images/add_image.png\" alt=\"Logo\" style=\"height: inherit; width: inherit;\" />
\t\t</div>";
    }

    public function getTemplateName()
    {
        return "crear-anuncios/desaparecido/inc/foto.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 6,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("ACA IRAN LAS FOTOS
<div class=\"col-sm-12\">
\t\t<input type=\"file\" class=\"form-control\">
\t</div>
<div class=\"col-md-6\">
\t\t<input type=\"image\" class=\"img-rounded\" src=\"{{ base_url() }}/public/assets/app/images/add_image.png\" alt=\"Logo\" style=\"height: inherit; width: inherit;\" />
\t\t</div>", "crear-anuncios/desaparecido/inc/foto.twig", "C:\\xampp\\htdocs\\proyectoC\\app\\Views\\crear-anuncios\\desaparecido\\inc\\foto.twig");
    }
}
