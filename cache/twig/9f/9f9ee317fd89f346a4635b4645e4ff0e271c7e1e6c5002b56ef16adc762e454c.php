<?php

/* crear-ticket/inc/pasos.twig */
class __TwigTemplate_b9f4e7b4a43bfaa2dd6ebf5124b033923b1727f332237ad7267dfa2c9973a350 extends Twig_Template
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
        echo "
<div class=\"f1-steps\">
    <div class=\"f1-progress\">
        <div class=\"f1-progress-line\" data-now-value=\"16.66\" data-number-of-steps=\"3\" style=\"width: 16.66%;\"></div>
    </div>
    <div class=\"f1-step active\">
    \t<div class=\"f1-step-icon\">></div><p>Paso 1</p>
    </div>
    <div class=\"f1-step\">
    \t<div class=\"f1-step-icon\">></div><p>Paso 2</p>
    </div>
    <div class=\"f1-step\">
    \t<div class=\"f1-step-icon\">></div><p>Paso 3</p>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "crear-ticket/inc/pasos.twig";
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
        return new Twig_Source("
<div class=\"f1-steps\">
    <div class=\"f1-progress\">
        <div class=\"f1-progress-line\" data-now-value=\"16.66\" data-number-of-steps=\"3\" style=\"width: 16.66%;\"></div>
    </div>
    <div class=\"f1-step active\">
    \t<div class=\"f1-step-icon\">></div><p>Paso 1</p>
    </div>
    <div class=\"f1-step\">
    \t<div class=\"f1-step-icon\">></div><p>Paso 2</p>
    </div>
    <div class=\"f1-step\">
    \t<div class=\"f1-step-icon\">></div><p>Paso 3</p>
    </div>
</div>", "crear-ticket/inc/pasos.twig", "C:\\xampp\\htdocs\\PROYECTO-U\\app\\Views\\crear-ticket\\inc\\pasos.twig");
    }
}
