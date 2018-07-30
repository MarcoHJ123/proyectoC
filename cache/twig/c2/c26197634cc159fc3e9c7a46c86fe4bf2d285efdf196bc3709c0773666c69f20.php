<?php

/* aportar-anuncios/main.twig */
class __TwigTemplate_6d8d07e1d6fe906ea1ecb13355a871ddc7d1a90e271a8bd8355c1aa2454e7b82 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("templates/master/master.twig", "aportar-anuncios/main.twig", 1);
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
        if ((isset($context["anuncio"]) ? $context["anuncio"] : null)) {
            // line 5
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["anuncio"]);
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["anuncio"]) {
                // line 6
                echo "<div class=\"page-body text-center\">
  <div class=\"row\">
    <div class=\"col-sm-12\">
      ";
                // line 9
                $this->loadTemplate("templates/inc/messages.twig", "aportar-anuncios/main.twig", 9)->display($context);
                // line 10
                echo "    </div>
    <div class=\"col-sm-12\" style=\"padding-left: 42px; padding-right: 42px; text-transform:uppercase;\">
      <div class=\"card card-creacion-detalles\">
        <div class=\"card-header text-center\" >";
                // line 15
                echo "          <h3>PERSONA DESAPARECIDA</h3>
      \t</div>
      \t<div class=\"card-block form-crear-detalles\">
      \t\t<div class=\"row\" style=\"border-bottom:1px solid rgba(0,0,0,.125);\">

\t\t    \t\t<div class=\"col-sm-2 col-md-2 col-lg-2\"> ";
                // line 21
                echo "\t\t\t\t\t\t\t\t<input type=\"image\" class=\"img-rounded\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
                echo "/public/assets/app/images/add_image.png\" alt=\"Logo\" style=\"height: inherit; width: inherit;\" />
\t\t\t\t\t\t\t\t<input type=\"image\" class=\"img-rounded\" src=\"";
                // line 22
                echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
                echo "/public/assets/app/images/add_image.png\" alt=\"Logo\" style=\"height: inherit; width: inherit;\" />
\t\t\t\t\t\t\t\t<input type=\"image\" class=\"img-rounded\" src=\"";
                // line 23
                echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
                echo "/public/assets/app/images/add_image.png\" alt=\"Logo\" style=\"height: inherit; width: inherit;\" />
\t\t    \t\t</div>

\t\t    \t\t<div class=\"col-sm-6 col-md-6 col-lg-6\">
\t\t    \t\t<input type=\"image\" class=\"img-rounded\" src=\"";
                // line 27
                echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
                echo "/public/assets/app/images/add_image.png\" alt=\"Logo\" style=\"height: inherit; width: inherit;\" />
\t\t    \t\t</div>
\t\t    \t\t<div class=\"col-sm-4 col-md-4 col-lg-4\">
\t\t\t\t\t\t\t<h4>";
                // line 30
                echo twig_escape_filter($this->env, $this->getAttribute($context["anuncio"], "nombres", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["anuncio"], "apellidos", array()), "html", null, true);
                echo "</h4>
\t\t\t\t\t\t\tSexo : ";
                // line 31
                if (($this->getAttribute($context["anuncio"], "sexo", array()) == "h")) {
                    echo "Hombre ";
                } else {
                    echo " Mujer ";
                }
                // line 32
                echo "\t\t\t\t\t\t\tColor piel : ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["anuncio"], "color_piel", array()), "html", null, true);
                echo "<br>
\t\t\t\t\t\t\testatura : ";
                // line 33
                echo twig_escape_filter($this->env, $this->getAttribute($context["anuncio"], "estatura", array()), "html", null, true);
                echo "<br>
\t\t\t\t\t\t\tfecha nacimiento : ";
                // line 34
                echo twig_escape_filter($this->env, $this->getAttribute($context["anuncio"], "fecha_nacimiento", array()), "html", null, true);
                echo "<br>
\t\t\t\t\t\t\ttipo documento : ";
                // line 35
                echo twig_escape_filter($this->env, $this->getAttribute($context["anuncio"], "tipo_documento", array()), "html", null, true);
                echo "<br>
\t\t\t\t\t\t\tcontacto : ";
                // line 36
                echo twig_escape_filter($this->env, $this->getAttribute($context["anuncio"], "id_usuario", array()), "html", null, true);
                echo "<br>
\t\t\t\t\t\t\tfecha registro : ";
                // line 37
                echo twig_escape_filter($this->env, $this->getAttribute($context["anuncio"], "fecha_registro", array()), "html", null, true);
                echo "<br>
\t\t\t\t\t\t\tdescripcion : ";
                // line 38
                echo twig_escape_filter($this->env, $this->getAttribute($context["anuncio"], "descripcion", array()), "html", null, true);
                echo "<br>
\t\t\t\t\t\t\tparentezco : ";
                // line 39
                echo twig_escape_filter($this->env, $this->getAttribute($context["anuncio"], "parentesco", array()), "html", null, true);
                echo "<br>
\t\t\t\t\t\t\tnumero de documento : ";
                // line 40
                echo twig_escape_filter($this->env, $this->getAttribute($context["anuncio"], "numero_documento", array()), "html", null, true);
                echo "<br>
\t\t\t\t\t\t\t<div class=\"col-sm-12 col-md-12 col-lg-12\">
\t\t\t\t\t\t\t\t<div id=\"mapa_ultimo\" style=\"height:278px\"></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<a class=\"btn btn-mat waves-light btn-inverse text-center\" href=\"";
                // line 44
                echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
                echo "/aportar/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["anuncio"], "id_anuncio", array()), "html", null, true);
                echo "\">APORTAR</a>
\t\t    \t\t</div>
      \t\t</div>
        </div>
      </div>
    </div>
  </div>
</div>

";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['anuncio'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 55
            echo "\t<p>No hay datos del anuncio</p>
";
        }
    }

    // line 59
    public function block_scripts($context, array $blocks = array())
    {
        // line 60
        echo "  ";
        $this->displayParentBlock("scripts", $context, $blocks);
        echo "
    <script async defer
    src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyCV-quRftERbHa_3kEUVCTOWPgvl9bA1ao&callback=initMap\">
    </script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/public/assets/app/js/detalle.js\"></script>
";
    }

    public function getTemplateName()
    {
        return "aportar-anuncios/main.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  188 => 64,  180 => 60,  177 => 59,  171 => 55,  144 => 44,  137 => 40,  133 => 39,  129 => 38,  125 => 37,  121 => 36,  117 => 35,  113 => 34,  109 => 33,  104 => 32,  98 => 31,  92 => 30,  86 => 27,  79 => 23,  75 => 22,  70 => 21,  63 => 15,  58 => 10,  56 => 9,  51 => 6,  34 => 5,  32 => 4,  29 => 3,  11 => 1,);
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
{% if anuncio %}
{% for anuncio in anuncio %}
<div class=\"page-body text-center\">
  <div class=\"row\">
    <div class=\"col-sm-12\">
      {% include 'templates/inc/messages.twig' %}
    </div>
    <div class=\"col-sm-12\" style=\"padding-left: 42px; padding-right: 42px; text-transform:uppercase;\">
      <div class=\"card card-creacion-detalles\">
        <div class=\"card-header text-center\" >{#  style=\"color: white;
    background-color: #ff5252;\" #}
          <h3>PERSONA DESAPARECIDA</h3>
      \t</div>
      \t<div class=\"card-block form-crear-detalles\">
      \t\t<div class=\"row\" style=\"border-bottom:1px solid rgba(0,0,0,.125);\">

\t\t    \t\t<div class=\"col-sm-2 col-md-2 col-lg-2\"> {# style=\"background-color:#233237;\" #}
\t\t\t\t\t\t\t\t<input type=\"image\" class=\"img-rounded\" src=\"{{ base_url() }}/public/assets/app/images/add_image.png\" alt=\"Logo\" style=\"height: inherit; width: inherit;\" />
\t\t\t\t\t\t\t\t<input type=\"image\" class=\"img-rounded\" src=\"{{ base_url() }}/public/assets/app/images/add_image.png\" alt=\"Logo\" style=\"height: inherit; width: inherit;\" />
\t\t\t\t\t\t\t\t<input type=\"image\" class=\"img-rounded\" src=\"{{ base_url() }}/public/assets/app/images/add_image.png\" alt=\"Logo\" style=\"height: inherit; width: inherit;\" />
\t\t    \t\t</div>

\t\t    \t\t<div class=\"col-sm-6 col-md-6 col-lg-6\">
\t\t    \t\t<input type=\"image\" class=\"img-rounded\" src=\"{{ base_url() }}/public/assets/app/images/add_image.png\" alt=\"Logo\" style=\"height: inherit; width: inherit;\" />
\t\t    \t\t</div>
\t\t    \t\t<div class=\"col-sm-4 col-md-4 col-lg-4\">
\t\t\t\t\t\t\t<h4>{{ anuncio.nombres }} {{ anuncio.apellidos }}</h4>
\t\t\t\t\t\t\tSexo : {% if anuncio.sexo == 'h' %}Hombre {% else %} Mujer {% endif %}
\t\t\t\t\t\t\tColor piel : {{ anuncio.color_piel }}<br>
\t\t\t\t\t\t\testatura : {{ anuncio.estatura }}<br>
\t\t\t\t\t\t\tfecha nacimiento : {{ anuncio.fecha_nacimiento }}<br>
\t\t\t\t\t\t\ttipo documento : {{ anuncio.tipo_documento }}<br>
\t\t\t\t\t\t\tcontacto : {{ anuncio.id_usuario }}<br>
\t\t\t\t\t\t\tfecha registro : {{ anuncio.fecha_registro }}<br>
\t\t\t\t\t\t\tdescripcion : {{ anuncio.descripcion }}<br>
\t\t\t\t\t\t\tparentezco : {{ anuncio.parentesco }}<br>
\t\t\t\t\t\t\tnumero de documento : {{ anuncio.numero_documento }}<br>
\t\t\t\t\t\t\t<div class=\"col-sm-12 col-md-12 col-lg-12\">
\t\t\t\t\t\t\t\t<div id=\"mapa_ultimo\" style=\"height:278px\"></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<a class=\"btn btn-mat waves-light btn-inverse text-center\" href=\"{{ base_url() }}/aportar/{{anuncio.id_anuncio}}\">APORTAR</a>
\t\t    \t\t</div>
      \t\t</div>
        </div>
      </div>
    </div>
  </div>
</div>

{% endfor %}
{% else %}
\t<p>No hay datos del anuncio</p>
{% endif %}
{% endblock content %}

{% block scripts %}
  {{ parent() }}
    <script async defer
    src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyCV-quRftERbHa_3kEUVCTOWPgvl9bA1ao&callback=initMap\">
    </script>
\t\t<script type=\"text/javascript\" src=\"{{ base_url() }}/public/assets/app/js/detalle.js\"></script>
{% endblock %}", "aportar-anuncios/main.twig", "C:\\xampp\\htdocs\\proyectoC\\app\\Views\\aportar-anuncios\\main.twig");
    }
}
