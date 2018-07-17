<?php

/* listar-audiencias/inc/listaSedes.twig */
class __TwigTemplate_a541adb0452d40252b3d0aafcbc2a83166428a71d7d15cfeeec57cba31a4ca52 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("templates/master/master.twig", "listar-audiencias/inc/listaSedes.twig", 1);
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

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "<style type=\"text/css\">
  /*.widget-visitor-card i {
    color: #fff;
    font-size: 80px;
    position: absolute;
    bottom: -10px;
    opacity: 0.3;
    left: -10px;
    -webkit-transform: rotate(15deg);
    transform: rotate(15deg);
    -webkit-transition: all 0.3s ease-in-out;
    transition: all 0.3s ease-in-out;
  }
  .feather {
    font-family: 'feather' !important;
    speak: none;
    font-style: normal;
    font-weight: normal;
    font-variant: normal;
    text-transform: none;
    line-height: 1;
    -webkit-font-smoothing: antialiased;
    }
    .widget-visitor-card {
        overflow: hidden;
    }
    .widget-visitor-card:hover i {
        -webkit-transform: rotate(0deg) scale(1.4);
        transform: rotate(0deg) scale(1.4);
        opacity: 0.5;
    }.col-sm-4 {
        padding-bottom: 0;
    }*/
    #ticket_lista {
    max-width: 230px;
    max-height: 230px;
    min-width: 230px;
    min-height: 230px;
    }
</style>

";
        // line 56
        echo "       ";
        echo " ";
        // line 57
        echo "          ";
        // line 60
        echo "<div class=\"row\">
";
        // line 61
        if ((isset($context["personas"]) ? $context["personas"] : null)) {
            // line 62
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["personas"]) ? $context["personas"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["datos"]) {
                // line 63
                echo "        <div ";
                if (($this->getAttribute($context["datos"], "estado_persona", array()) == "1")) {
                    echo " class=\"col-sm-3 bg-c-green user-profile\" ";
                } else {
                    echo "class=\"col-sm-3 bg-c-red user-profile\" ";
                }
                echo " style=\"border-style:solid; border-color: #C2C2C2;\">
            <div class=\"card-block text-center text-white\">
                <div class=\"m-b-25\">
                    <img src=\"";
                // line 66
                echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
                echo "/public/assets/images/user-card/img-round2.jpg\" alt=\"bg-img\" class=\"img-radius\" alt=\"User-Profile-Image\" id=\"ticket_lista\">
                </div>
                <h6 class=\"f-w-600\">";
                // line 68
                echo twig_escape_filter($this->env, $this->getAttribute($context["datos"], "nombres", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["datos"], "apellidos", array()), "html", null, true);
                echo "</a> </h6>
                <h6 class=\"f-w-400\">";
                // line 69
                echo twig_escape_filter($this->env, $this->getAttribute($context["datos"], "descripcion", array()), "html", null, true);
                echo "</h6>
                <h6 class=\"f-w-600\">PERU</h6>
                ";
                // line 71
                if (($this->getAttribute($context["datos"], "estado_persona", array()) == "1")) {
                    // line 72
                    echo "                <button class=\"btn btn-mat waves-light btn-success\" style=\"background-color: white; color: green;\">APORTAR</button>
                ";
                } else {
                    // line 74
                    echo "                <button class=\"btn btn-mat waves-light btn-danger text-center\" style=\"background-color: white; color: red;\">APORTAR</button>
                ";
                }
                // line 76
                echo "            </div>
        </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['datos'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 79
            echo "    ";
        } else {
            // line 80
            echo "        <p>No hay anuncios</p>
    ";
        }
        // line 82
        echo "
</div>
";
    }

    // line 86
    public function block_scripts($context, array $blocks = array())
    {
        // line 87
        echo "  ";
        $this->displayParentBlock("scripts", $context, $blocks);
        echo "

  <!-- pickadate -->

  <!-- App JS -->

";
    }

    public function getTemplateName()
    {
        return "listar-audiencias/inc/listaSedes.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 87,  148 => 86,  142 => 82,  138 => 80,  135 => 79,  127 => 76,  123 => 74,  119 => 72,  117 => 71,  112 => 69,  106 => 68,  101 => 66,  90 => 63,  85 => 62,  83 => 61,  80 => 60,  78 => 57,  75 => 56,  32 => 3,  29 => 2,  11 => 1,);
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
  /*.widget-visitor-card i {
    color: #fff;
    font-size: 80px;
    position: absolute;
    bottom: -10px;
    opacity: 0.3;
    left: -10px;
    -webkit-transform: rotate(15deg);
    transform: rotate(15deg);
    -webkit-transition: all 0.3s ease-in-out;
    transition: all 0.3s ease-in-out;
  }
  .feather {
    font-family: 'feather' !important;
    speak: none;
    font-style: normal;
    font-weight: normal;
    font-variant: normal;
    text-transform: none;
    line-height: 1;
    -webkit-font-smoothing: antialiased;
    }
    .widget-visitor-card {
        overflow: hidden;
    }
    .widget-visitor-card:hover i {
        -webkit-transform: rotate(0deg) scale(1.4);
        transform: rotate(0deg) scale(1.4);
        opacity: 0.5;
    }.col-sm-4 {
        padding-bottom: 0;
    }*/
    #ticket_lista {
    max-width: 230px;
    max-height: 230px;
    min-width: 230px;
    min-height: 230px;
    }
</style>

{# <div class=\"row\">
    <div class=\"col-md-2\">
    </div>
    <div class=\"col-md-3\">
            <input type=\"date\" class=\"form-control form-control-inverse\">
            <span class=\"messages\"></span>
    </div>
    <div class=\"col-md-3\">
            <input type=\"date\" class=\"form-control form-control-inverse\">
            <span class=\"messages\"></span>
    </div>
    <div class=\"col-md-4 \"> #}
       {#      <button class=\"btn waves-effect waves-light btn-primary\">BUSCAR</button> #} {# //<i class=\"fa fa-camera\"></i> #}
          {#   <span class=\"messages\"></span>
    </div>
</div> #}
<div class=\"row\">
{% if personas %}
    {% for datos in personas %}
        <div {% if datos.estado_persona == '1' %} class=\"col-sm-3 bg-c-green user-profile\" {% else %}class=\"col-sm-3 bg-c-red user-profile\" {% endif %} style=\"border-style:solid; border-color: #C2C2C2;\">
            <div class=\"card-block text-center text-white\">
                <div class=\"m-b-25\">
                    <img src=\"{{ base_url() }}/public/assets/images/user-card/img-round2.jpg\" alt=\"bg-img\" class=\"img-radius\" alt=\"User-Profile-Image\" id=\"ticket_lista\">
                </div>
                <h6 class=\"f-w-600\">{{datos.nombres}} {{datos.apellidos}}</a> </h6>
                <h6 class=\"f-w-400\">{{datos.descripcion}}</h6>
                <h6 class=\"f-w-600\">PERU</h6>
                {% if datos.estado_persona == '1' %}
                <button class=\"btn btn-mat waves-light btn-success\" style=\"background-color: white; color: green;\">APORTAR</button>
                {% else %}
                <button class=\"btn btn-mat waves-light btn-danger text-center\" style=\"background-color: white; color: red;\">APORTAR</button>
                {% endif %}
            </div>
        </div>
    {% endfor %}
    {% else %}
        <p>No hay anuncios</p>
    {% endif %}

</div>
{% endblock content %}

{% block scripts %}
  {{ parent() }}

  <!-- pickadate -->

  <!-- App JS -->

{% endblock %}", "listar-audiencias/inc/listaSedes.twig", "C:\\xampp\\htdocs\\PROYECTO-U\\app\\Views\\listar-audiencias\\inc\\listaSedes.twig");
    }
}
