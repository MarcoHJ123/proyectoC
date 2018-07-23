<?php

/* templates/inc/messages.twig */
class __TwigTemplate_fc74b14a4a554fbec9fbc408cda31a7454ae9235055380b5c64e6c9e5ff066e2 extends Twig_Template
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
        // line 2
        echo "
";
        // line 3
        if ($this->getAttribute((isset($context["flash"]) ? $context["flash"] : null), "getMessage", array(0 => "success"), "method")) {
            // line 4
            echo "\t<div class=\"alert alert-success icons-alert\">
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
      <i class=\"fa fa-times\"></i>
    </button>
    <p>";
            // line 8
            echo twig_escape_filter($this->env, twig_first($this->env, $this->getAttribute((isset($context["flash"]) ? $context["flash"] : null), "getMessage", array(0 => "success"), "method")), "html", null, true);
            echo "</p>
  </div>
";
        }
        // line 11
        echo "
";
        // line 12
        if ($this->getAttribute((isset($context["flash"]) ? $context["flash"] : null), "getMessage", array(0 => "info"), "method")) {
            // line 13
            echo "\t<div class=\"alert alert-info icons-alert\">
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
      <i class=\"fa fa-times\"></i>
    </button>
    <p>";
            // line 17
            echo twig_escape_filter($this->env, twig_first($this->env, $this->getAttribute((isset($context["flash"]) ? $context["flash"] : null), "getMessage", array(0 => "info"), "method")), "html", null, true);
            echo "</p>
  </div>
";
        }
        // line 20
        echo "
";
        // line 21
        if ($this->getAttribute((isset($context["flash"]) ? $context["flash"] : null), "getMessage", array(0 => "error"), "method")) {
            // line 22
            echo "\t<div class=\"alert alert-danger icons-alert\">
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
      <i class=\"fa fa-times\"></i>
    </button>
    ";
            // line 26
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["flash"]) ? $context["flash"] : null), "getMessage", array(0 => "error"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 27
                echo "\t\t\t<li>";
                echo twig_escape_filter($this->env, $context["error"], "html", null, true);
                echo "</li>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "  </div>
";
        }
        // line 31
        echo "
";
        // line 32
        if ($this->getAttribute((isset($context["flash"]) ? $context["flash"] : null), "getMessage", array(0 => "warning"), "method")) {
            // line 33
            echo "\t<div class=\"alert alert-warning icons-alert\">
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
      <i class=\"fa fa-times\"></i>
    </button>
    ";
            // line 37
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["flash"]) ? $context["flash"] : null), "getMessage", array(0 => "warning"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["warning"]) {
                // line 38
                echo "\t\t\t<li>";
                echo twig_escape_filter($this->env, $context["warning"], "html", null, true);
                echo "</li>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['warning'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            echo "  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "templates/inc/messages.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 40,  96 => 38,  92 => 37,  86 => 33,  84 => 32,  81 => 31,  77 => 29,  68 => 27,  64 => 26,  58 => 22,  56 => 21,  53 => 20,  47 => 17,  41 => 13,  39 => 12,  36 => 11,  30 => 8,  24 => 4,  22 => 3,  19 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# Estoy en messages.twig #}

{% if flash.getMessage( 'success' ) %}
\t<div class=\"alert alert-success icons-alert\">
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
      <i class=\"fa fa-times\"></i>
    </button>
    <p>{{ flash.getMessage( 'success' ) | first }}</p>
  </div>
{% endif %}

{% if flash.getMessage( 'info' ) %}
\t<div class=\"alert alert-info icons-alert\">
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
      <i class=\"fa fa-times\"></i>
    </button>
    <p>{{ flash.getMessage( 'info' ) | first }}</p>
  </div>
{% endif %}

{% if flash.getMessage( 'error' ) %}
\t<div class=\"alert alert-danger icons-alert\">
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
      <i class=\"fa fa-times\"></i>
    </button>
    {% for error in flash.getMessage( 'error' ) %}
\t\t\t<li>{{ error }}</li>
\t\t{% endfor %}
  </div>
{% endif %}

{% if flash.getMessage( 'warning' ) %}
\t<div class=\"alert alert-warning icons-alert\">
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
      <i class=\"fa fa-times\"></i>
    </button>
    {% for warning in flash.getMessage( 'warning' ) %}
\t\t\t<li>{{ warning }}</li>
\t\t{% endfor %}
  </div>
{% endif %}", "templates/inc/messages.twig", "C:\\xampp\\htdocs\\proyectoC\\app\\Views\\templates\\inc\\messages.twig");
    }
}
