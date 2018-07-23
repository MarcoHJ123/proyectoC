<?php

/* listar-anuncios/main.twig */
class __TwigTemplate_97474d4acea53bcfaede24517d8a83b1e630c83e6b33931129486025a6791244 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("templates/master/master.twig", "listar-anuncios/main.twig", 1);
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
    #anuncio_lista {
    max-width: 230px;
    max-height: 230px;
    min-width: 230px;
    min-height: 230px;
    }
</style>

  ";
        // line 50
        echo "<div class=\"row\" id=\"seccion2\">
";
        // line 51
        if ((isset($context["personas"]) ? $context["personas"] : null)) {
            // line 52
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["personas"]) ? $context["personas"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["datos"]) {
                // line 53
                echo "        <div ";
                if (($this->getAttribute($context["datos"], "estado_persona", array()) == "1")) {
                    echo " class=\"col-sm-6 col-md-6 col-lg-3 bg-c-green user-profile\" ";
                } else {
                    echo "class=\"col-sm-6 col-md-6 col-lg-3 bg-c-red user-profile\" ";
                }
                echo " style=\"border-style:solid; border-color: #C2C2C2;\">
            <div class=\"card-block text-center text-white\">
                <div class=\"m-b-25\">
                    <img src=\"";
                // line 56
                echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
                echo "/public/assets/images/user-card/img-round5.jpg\" alt=\"bg-img\" class=\"img-radius\" alt=\"User-Profile-Image\" id=\"anuncio_lista\">
                </div>
                <h6 class=\"f-w-600\">";
                // line 58
                echo twig_escape_filter($this->env, $this->getAttribute($context["datos"], "nombres", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["datos"], "apellidos", array()), "html", null, true);
                echo "</a> </h6>
                <h6 class=\"f-w-400\">";
                // line 59
                echo twig_escape_filter($this->env, $this->getAttribute($context["datos"], "descripcion", array()), "html", null, true);
                echo "</h6>
                <h6 class=\"f-w-600\">PERU</h6>
                ";
                // line 61
                if (($this->getAttribute($context["datos"], "estado_persona", array()) == "1")) {
                    // line 62
                    echo "                <a class=\"btn btn-mat waves-light btn-success\" href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
                    echo "/anuncios/";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["datos"], "id_anuncio", array()), "html", null, true);
                    echo "\" style=\"background-color: white; color: green;\">APORTAR</a>
                ";
                } else {
                    // line 64
                    echo "                <a class=\"btn btn-mat waves-light btn-danger text-center\" href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
                    echo "/anuncios/";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["datos"], "id_anuncio", array()), "html", null, true);
                    echo "\" style=\"background-color: white; color: red;\">APORTAR</a>
                ";
                }
                // line 66
                echo "            </div>
        </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['datos'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 69
            echo "    ";
        } else {
            // line 70
            echo "        <p>No hay anuncios</p>
    ";
        }
        // line 72
        echo "
</div>
";
    }

    // line 76
    public function block_scripts($context, array $blocks = array())
    {
        // line 77
        echo "  ";
        $this->displayParentBlock("scripts", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "listar-anuncios/main.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 77,  151 => 76,  145 => 72,  141 => 70,  138 => 69,  130 => 66,  122 => 64,  114 => 62,  112 => 61,  107 => 59,  101 => 58,  96 => 56,  85 => 53,  80 => 52,  78 => 51,  75 => 50,  32 => 3,  29 => 2,  11 => 1,);
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
    #anuncio_lista {
    max-width: 230px;
    max-height: 230px;
    min-width: 230px;
    min-height: 230px;
    }
</style>

  {# <img src=\"{{ base_url() }}/public/assets/app/images/fondo.jpg\"> #}
{# <div>
    <img src=\"{{ base_url() }}/public/assets/app/images/portada2.jpg\"
    style=\"height: -webkit-fill-available;vertical-align: baseline;\">
    <a href=\"#seccion2\"><button>><</button></a>
</div> #}
<div class=\"row\" id=\"seccion2\">
{% if personas %}
    {% for datos in personas %}
        <div {% if datos.estado_persona == '1' %} class=\"col-sm-6 col-md-6 col-lg-3 bg-c-green user-profile\" {% else %}class=\"col-sm-6 col-md-6 col-lg-3 bg-c-red user-profile\" {% endif %} style=\"border-style:solid; border-color: #C2C2C2;\">
            <div class=\"card-block text-center text-white\">
                <div class=\"m-b-25\">
                    <img src=\"{{ base_url() }}/public/assets/images/user-card/img-round5.jpg\" alt=\"bg-img\" class=\"img-radius\" alt=\"User-Profile-Image\" id=\"anuncio_lista\">
                </div>
                <h6 class=\"f-w-600\">{{datos.nombres}} {{datos.apellidos}}</a> </h6>
                <h6 class=\"f-w-400\">{{datos.descripcion}}</h6>
                <h6 class=\"f-w-600\">PERU</h6>
                {% if datos.estado_persona == '1' %}
                <a class=\"btn btn-mat waves-light btn-success\" href=\"{{ base_url() }}/anuncios/{{datos.id_anuncio}}\" style=\"background-color: white; color: green;\">APORTAR</a>
                {% else %}
                <a class=\"btn btn-mat waves-light btn-danger text-center\" href=\"{{ base_url() }}/anuncios/{{datos.id_anuncio}}\" style=\"background-color: white; color: red;\">APORTAR</a>
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
{% endblock %}", "listar-anuncios/main.twig", "C:\\xampp\\htdocs\\proyectoC\\app\\Views\\listar-anuncios\\main.twig");
    }
}
