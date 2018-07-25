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
      <div class=\"card card-creacion-ticket\">
        <div class=\"card-header text-center\" >";
                // line 15
                echo "          <h3>PERSONA DESAPARECIDA</h3>
      \t</div>
      \t<div class=\"card-block form-crear-aporte\">
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
                // line 31
                echo twig_escape_filter($this->env, $this->getAttribute($context["anuncio"], "nombres", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["anuncio"], "apellidos", array()), "html", null, true);
                echo "</h4>
\t\t\t\t\t\t\tSexo : ";
                // line 32
                if (($this->getAttribute($context["anuncio"], "sexo", array()) == "h")) {
                    echo "Hombre ";
                } else {
                    echo " Mujer ";
                }
                // line 33
                echo "\t\t\t\t\t\t\tColor piel : ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["anuncio"], "color_piel", array()), "html", null, true);
                echo "<br>
\t\t\t\t\t\t\testatura : ";
                // line 34
                echo twig_escape_filter($this->env, $this->getAttribute($context["anuncio"], "estatura", array()), "html", null, true);
                echo "<br>
\t\t\t\t\t\t\tfecha nacimiento : ";
                // line 35
                echo twig_escape_filter($this->env, $this->getAttribute($context["anuncio"], "fecha_nacimiento", array()), "html", null, true);
                echo "<br>
\t\t\t\t\t\t\ttipo documento : ";
                // line 36
                echo twig_escape_filter($this->env, $this->getAttribute($context["anuncio"], "tipo_documento", array()), "html", null, true);
                echo "<br>
\t\t\t\t\t\t\tcontacto : ";
                // line 37
                echo twig_escape_filter($this->env, $this->getAttribute($context["anuncio"], "id_usuario", array()), "html", null, true);
                echo "<br>
\t\t\t\t\t\t\tfecha registro : ";
                // line 38
                echo twig_escape_filter($this->env, $this->getAttribute($context["anuncio"], "fecha_registro", array()), "html", null, true);
                echo "<br>
\t\t\t\t\t\t\tdescripcion : ";
                // line 39
                echo twig_escape_filter($this->env, $this->getAttribute($context["anuncio"], "descripcion", array()), "html", null, true);
                echo "<br>
\t\t\t\t\t\t\tparentezco : ";
                // line 40
                echo twig_escape_filter($this->env, $this->getAttribute($context["anuncio"], "parentesco", array()), "html", null, true);
                echo "<br>
\t\t\t\t\t\t\tnumero de documento : ";
                // line 41
                echo twig_escape_filter($this->env, $this->getAttribute($context["anuncio"], "numero_documento", array()), "html", null, true);
                echo "<br>
\t\t    \t\t</div>
      \t\t</div>

      \t\t<div class=\"col-sm-12 col-md-12 col-lg-12\">
\t\t\t\t\t\t<h4 style=\"padding-top: 15px;\">REGISTRAR APORTE</h4>
\t\t\t\t\t\t<div class=\"col-md-12 p-t-12\">
\t\t\t\t\t  \t<label class=\"col-form-label\">Ultima vez visto</label>
\t\t\t\t\t  \t";
                // line 50
                echo "\t\t\t\t\t    ";
                // line 51
                echo "\t\t\t\t\t      <input type=\"text\" name=\"ubicacio_lt\" class=\"form-control\"/>
\t\t\t\t\t      <input type=\"text\" name=\"ubicacio_ln\" class=\"form-control\"/>
\t\t\t\t\t      <input type=\"text\" name=\"id_anuncio\" class=\"form-control\" value=\"";
                // line 53
                echo twig_escape_filter($this->env, $this->getAttribute($context["anuncio"], "id_anuncio", array()), "html", null, true);
                echo "\" hidden disabled/>
\t\t\t\t\t\t\t";
                // line 55
                echo "\t\t\t\t\t  </div>

      \t\t\t<div class=\"col-md-12 p-t-12\" for=\"descripcion\">
\t\t\t\t\t    <label class=\"col-form-label\">Descripcion</label>
\t\t\t\t\t    <textarea type=\"text\" name=\"descripcion\" placeholder=\"Describir breve como ocurrio el acontecimiento\" class=\"form-control\" id=\"descripcion\"></textarea>
\t\t\t\t\t  </div>

\t\t\t\t\t\t<button type=\"button\" id=\"btn-crear-aporte\" class=\"btn btn-mat waves-light btn-inverse text-center\">Crear aporte</button>

      \t\t</div>

      \t\t<div class=\"m-b-26 box-mensaje-aporte-creado hide\">
            <div class=\"alert alert-info icons-alert fix-icon-alert\">
            </div>
          </div>
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
            // line 78
            echo "\t<p>No hay datos del anuncio</p>
";
        }
    }

    // line 82
    public function block_scripts($context, array $blocks = array())
    {
        // line 83
        echo "  ";
        $this->displayParentBlock("scripts", $context, $blocks);
        echo "
   <script type=\"text/javascript\" src=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/public/assets/app/js/crear_aporte.js\"></script>
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
        return array (  209 => 84,  204 => 83,  201 => 82,  195 => 78,  159 => 55,  155 => 53,  151 => 51,  149 => 50,  138 => 41,  134 => 40,  130 => 39,  126 => 38,  122 => 37,  118 => 36,  114 => 35,  110 => 34,  105 => 33,  99 => 32,  93 => 31,  86 => 27,  79 => 23,  75 => 22,  70 => 21,  63 => 15,  58 => 10,  56 => 9,  51 => 6,  34 => 5,  32 => 4,  29 => 3,  11 => 1,);
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
      <div class=\"card card-creacion-ticket\">
        <div class=\"card-header text-center\" >{#  style=\"color: white;
    background-color: #ff5252;\" #}
          <h3>PERSONA DESAPARECIDA</h3>
      \t</div>
      \t<div class=\"card-block form-crear-aporte\">
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
\t\t    \t\t</div>
      \t\t</div>

      \t\t<div class=\"col-sm-12 col-md-12 col-lg-12\">
\t\t\t\t\t\t<h4 style=\"padding-top: 15px;\">REGISTRAR APORTE</h4>
\t\t\t\t\t\t<div class=\"col-md-12 p-t-12\">
\t\t\t\t\t  \t<label class=\"col-form-label\">Ultima vez visto</label>
\t\t\t\t\t  \t{# <div id=\"map\" style=\"height: 278px\"></div> #}
\t\t\t\t\t    {# <form action=\"#\" id=\"posicion\" name=\"posicion\"> #}
\t\t\t\t\t      <input type=\"text\" name=\"ubicacio_lt\" class=\"form-control\"/>
\t\t\t\t\t      <input type=\"text\" name=\"ubicacio_ln\" class=\"form-control\"/>
\t\t\t\t\t      <input type=\"text\" name=\"id_anuncio\" class=\"form-control\" value=\"{{ anuncio.id_anuncio }}\" hidden disabled/>
\t\t\t\t\t\t\t{# </form> #}
\t\t\t\t\t  </div>

      \t\t\t<div class=\"col-md-12 p-t-12\" for=\"descripcion\">
\t\t\t\t\t    <label class=\"col-form-label\">Descripcion</label>
\t\t\t\t\t    <textarea type=\"text\" name=\"descripcion\" placeholder=\"Describir breve como ocurrio el acontecimiento\" class=\"form-control\" id=\"descripcion\"></textarea>
\t\t\t\t\t  </div>

\t\t\t\t\t\t<button type=\"button\" id=\"btn-crear-aporte\" class=\"btn btn-mat waves-light btn-inverse text-center\">Crear aporte</button>

      \t\t</div>

      \t\t<div class=\"m-b-26 box-mensaje-aporte-creado hide\">
            <div class=\"alert alert-info icons-alert fix-icon-alert\">
            </div>
          </div>
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
   <script type=\"text/javascript\" src=\"{{ base_url() }}/public/assets/app/js/crear_aporte.js\"></script>
{% endblock %}", "aportar-anuncios/main.twig", "C:\\xampp\\htdocs\\proyectoC\\app\\Views\\aportar-anuncios\\main.twig");
    }
}
