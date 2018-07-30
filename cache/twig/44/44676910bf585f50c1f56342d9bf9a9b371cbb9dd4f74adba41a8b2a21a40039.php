<?php

/* perfil-usuario/main.twig */
class __TwigTemplate_4a133082045c0b595b0f2f95a615171ff814fbd5f36caced913692edf007f79d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("templates/master/master.twig", "perfil-usuario/main.twig", 1);
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
#perfilf {
  min-height: 165px;
  min-width: 165px;
  max-width: 165px;
  max-height: 165px;
}
</style>
";
        // line 11
        if ((isset($context["datosu"]) ? $context["datosu"] : null)) {
            // line 12
            echo "    ";
            // line 13
            echo "
<div class=\"col-sm-12 col-md-12 col-lg-12\">
    <div class=\"cover-profile\">
        <div class=\"profile-bg-img\">
            <div class=\"card-block user-info\" style=\"position: inherit; background-color:#233237;\">
                <div class=\"col-sm-12 col-md-12 col-lg-12\" style=\"text-align: -webkit-center;\">
                    <div class=\"media-left\">
                        <a href=\"#\" class=\"profile-image\">
                            <img class=\"user-img img-radius\" src=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
            echo "/public/assets/images/PERFIL/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["datosu"]) ? $context["datosu"] : null), "id_usuario", array()), "html", null, true);
            echo ".jpg\" alt=\"user-img\" id=\"perfilf\">
                        </a>
                    </div>
                    ";
            // line 31
            echo "                </div>
            </div>
        </div>
    </div>
</div>
<div class=\"col-lg-12\">
<div class=\"tab-header card\">
<ul class=\"nav nav-tabs md-tabs tab-timeline\" role=\"tablist\" id=\"mytab\">
    <li class=\"nav-item\">
        <a class=\"nav-link active show\" data-toggle=\"tab\" href=\"#personal\" role=\"tab\" aria-selected=\"true\">Mis Anuncios</a>
        <div class=\"slide\"></div>
    </li>
    <li class=\"nav-item\">
        <a class=\"nav-link\" data-toggle=\"tab\" href=\"#binfo\" role=\"tab\" aria-selected=\"false\">Informacion Personal</a>
        <div class=\"slide\"></div>
    </li>
    ";
            // line 55
            echo "</ul>
</div>

<div class=\"tab-content\">
<div class=\"tab-pane active show\" id=\"personal\" role=\"tabpanel\">
  <div class=\"card\">
        <div class=\"card-header\">
            <h5 class=\"card-header-text\">Mis anuncios</h5>
        </div>
        <div class=\"card-block\">
            <div class=\"row\">
";
            // line 66
            if ((isset($context["anuncioU"]) ? $context["anuncioU"] : null)) {
                // line 67
                echo "    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["anuncioU"]) ? $context["anuncioU"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["datos"]) {
                    // line 68
                    echo "                <div class=\"col-md-6\">
                   ";
                    // line 69
                    if (($this->getAttribute($context["datos"], "estado_persona", array()) == "1")) {
                        echo " <div class=\"card b-l-success business-info services m-b-20\">";
                    } else {
                        echo " <div class=\"card b-l-danger business-info services m-b-20\"> ";
                    }
                    // line 70
                    echo "                        <div class=\"card-header\">
                            <div class=\"service-header\">
                                <a href=\"#\">
                                    <h5 class=\"card-header-text\">";
                    // line 73
                    if (($this->getAttribute($context["datos"], "estado_persona", array()) == "1")) {
                        echo " PERDIDA </td>";
                    } else {
                        echo " DESAPARECIDA ";
                    }
                    echo "</h5>
                                </a>
                            </div>
                            <span class=\"dropdown-toggle addon-btn text-muted float-right service-btn\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"true\" role=\"tooltip\">
                            </span>
                            <div class=\"dropdown-menu dropdown-menu-right b-none services-list\">
                                <a class=\"dropdown-item\" href=\"";
                    // line 79
                    echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
                    echo "/editar/";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["datos"], "id_anuncio", array()), "html", null, true);
                    echo "\"><i class=\"icofont icofont-edit\"></i> Editar</a>
                                <a class=\"dropdown-item\" href=\"";
                    // line 80
                    echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
                    echo "/detalle/";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["datos"], "id_anuncio", array()), "html", null, true);
                    echo "\"><i class=\"icofont icofont-eye-alt\"></i> Ver Aportes</a>
                            </div>
                        </div>
                        <div class=\"card-block\">
                            <div class=\"row\">
                                <div class=\"col-sm-12\">
                                    <p class=\"task-detail\">Persona:";
                    // line 86
                    echo twig_escape_filter($this->env, $this->getAttribute($context["datos"], "nombres", array()), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["datos"], "apellidos", array()), "html", null, true);
                    echo "</p>
                                    <p class=\"task-detail\">Descripcion:";
                    // line 87
                    echo twig_escape_filter($this->env, $this->getAttribute($context["datos"], "descripcion", array()), "html", null, true);
                    echo " </p>
                                    <p class=\"task-detail\">Fecha de Registro:";
                    // line 88
                    echo twig_escape_filter($this->env, $this->getAttribute($context["datos"], "fecha_registro", array()), "html", null, true);
                    echo " </p>
                                    <p class=\"task-detail\">Estado Anuncio:";
                    // line 89
                    if (($this->getAttribute($context["datos"], "estado_anuncio", array()) == "n")) {
                        echo " Publicado </td>";
                    } else {
                        echo " Desactivado ";
                    }
                    echo " </p>
                                </div>
                                <!-- end of col-sm-8 -->
                            </div>
                            <!-- end of row -->
                        </div>
                        <!-- end of card-block -->
                    </div>
                </div>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['datos'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 99
                echo "    ";
            } else {
                // line 100
                echo "        <p>No hay anuncios</p>
    ";
            }
            // line 102
            echo "            </div>
        </div>
    </div>
</div>
<!-- tab pane personal end -->

<!-- tab pane info start -->
<div class=\"tab-pane\" id=\"binfo\" role=\"tabpanel\">
    <!-- info card start -->
    <div class=\"card\">
    <div class=\"card-header\">
      <h5 class=\"card-header-text\">Mi Informacion</h5>
        <button id=\"edit-btn\" type=\"button\" class=\"btn btn-sm btn-primary waves-effect waves-light float-right\">
        <i class=\"icofont icofont-edit\"></i>
        </button>
    </div>
    <div class=\"card-block\">
      <div class=\"view-info\">
        <div class=\"col-lg-12\">
          <div class=\"general-info\">
            <div class=\"row\">
              <div class=\"col-lg-12 col-xl-6\">
                <div class=\"table-responsive\">
                  <table class=\"table m-0\">
                    <tbody>
                      <tr><th scope=\"row\">Nombres</th><td>";
            // line 127
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["datosu"]) ? $context["datosu"] : null), "nombres", array()), "html", null, true);
            echo "</td></tr>
                      <tr><th scope=\"row\">Sexo</th><td>";
            // line 128
            if (($this->getAttribute((isset($context["datosu"]) ? $context["datosu"] : null), "sexo", array()) == "h")) {
                echo " Hombre ";
            } else {
                echo " Mujer ";
            }
            echo "</td></tr>
                      <tr><th scope=\"row\">Cumpleaños</th><td>";
            // line 129
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["datosu"]) ? $context["datosu"] : null), "fecha_nacimiento", array()), "html", null, true);
            echo "</td></tr>
                      <tr><th scope=\"row\">Profesión</th><td></td></tr>
                      <tr><th scope=\"row\">Localización</th><td></td></tr>
                    </tbody>
                  </table>
                </div>
              </div>
              <div class=\"col-lg-12 col-xl-6\">
                <div class=\"table-responsive\">
                  <table class=\"table\">
                    <tbody>
                      <tr><th scope=\"row\">Correo Electronico</th><td>";
            // line 140
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["datosu"]) ? $context["datosu"] : null), "correo_electronico", array()), "html", null, true);
            echo "</td></tr>
                      <tr><th scope=\"row\">Numero Telefono</th><td></td></tr>
                      <tr><th scope=\"row\">Estado Cuenta</th>";
            // line 142
            if (($this->getAttribute((isset($context["datosu"]) ? $context["datosu"] : null), "estado", array()) == "1")) {
                echo "<td style=\"color:green;\"> Verificado </td>";
            } else {
                echo "<td style=\"color: red;\"> Sin verificar </td>";
            }
            echo "</tr>
                      <tr><th scope=\"row\">Skype</th><td><a href=\"//twitter.com\"></a></td></tr>
                      <tr><th scope=\"row\">Facebook</th><td><a href=\"//fb.com\"></a></td></tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- tab pane info end -->

</div>
";
            // line 209
            echo "
";
        }
    }

    // line 213
    public function block_scripts($context, array $blocks = array())
    {
        // line 214
        echo "  ";
        $this->displayParentBlock("scripts", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "perfil-usuario/main.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  279 => 214,  276 => 213,  270 => 209,  245 => 142,  240 => 140,  226 => 129,  218 => 128,  214 => 127,  187 => 102,  183 => 100,  180 => 99,  160 => 89,  156 => 88,  152 => 87,  146 => 86,  135 => 80,  129 => 79,  116 => 73,  111 => 70,  105 => 69,  102 => 68,  97 => 67,  95 => 66,  82 => 55,  64 => 31,  56 => 21,  46 => 13,  44 => 12,  42 => 11,  32 => 3,  29 => 2,  11 => 1,);
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
#perfilf {
  min-height: 165px;
  min-width: 165px;
  max-width: 165px;
  max-height: 165px;
}
</style>
{% if datosu %}
    {# {% for datos in datosu %} #}

<div class=\"col-sm-12 col-md-12 col-lg-12\">
    <div class=\"cover-profile\">
        <div class=\"profile-bg-img\">
            <div class=\"card-block user-info\" style=\"position: inherit; background-color:#233237;\">
                <div class=\"col-sm-12 col-md-12 col-lg-12\" style=\"text-align: -webkit-center;\">
                    <div class=\"media-left\">
                        <a href=\"#\" class=\"profile-image\">
                            <img class=\"user-img img-radius\" src=\"{{ base_url() }}/public/assets/images/PERFIL/{{datosu.id_usuario}}.jpg\" alt=\"user-img\" id=\"perfilf\">
                        </a>
                    </div>
                    {# <div class=\"media-body row\">
                        <div class=\"col-sm-12 col-md-12 col-lg-12\">
                            <div class=\"user-title\" style=\"bottom: 0px;\">
                                <h2>{{ datosu.nombres }}</h2>
                            </div>
                        </div>
                    </div> #}
                </div>
            </div>
        </div>
    </div>
</div>
<div class=\"col-lg-12\">
<div class=\"tab-header card\">
<ul class=\"nav nav-tabs md-tabs tab-timeline\" role=\"tablist\" id=\"mytab\">
    <li class=\"nav-item\">
        <a class=\"nav-link active show\" data-toggle=\"tab\" href=\"#personal\" role=\"tab\" aria-selected=\"true\">Mis Anuncios</a>
        <div class=\"slide\"></div>
    </li>
    <li class=\"nav-item\">
        <a class=\"nav-link\" data-toggle=\"tab\" href=\"#binfo\" role=\"tab\" aria-selected=\"false\">Informacion Personal</a>
        <div class=\"slide\"></div>
    </li>
    {# <li class=\"nav-item\">
        <a class=\"nav-link\" data-toggle=\"tab\" href=\"#contacts\" role=\"tab\" aria-selected=\"false\">User's Contacts</a>
        <div class=\"slide\"></div>
    </li>
    <li class=\"nav-item\">
        <a class=\"nav-link\" data-toggle=\"tab\" href=\"#review\" role=\"tab\" aria-selected=\"false\">Reviews</a>
        <div class=\"slide\"></div>
    </li> #}
</ul>
</div>

<div class=\"tab-content\">
<div class=\"tab-pane active show\" id=\"personal\" role=\"tabpanel\">
  <div class=\"card\">
        <div class=\"card-header\">
            <h5 class=\"card-header-text\">Mis anuncios</h5>
        </div>
        <div class=\"card-block\">
            <div class=\"row\">
{% if anuncioU %}
    {% for datos in anuncioU %}
                <div class=\"col-md-6\">
                   {% if datos.estado_persona == '1' %} <div class=\"card b-l-success business-info services m-b-20\">{% else %} <div class=\"card b-l-danger business-info services m-b-20\"> {% endif %}
                        <div class=\"card-header\">
                            <div class=\"service-header\">
                                <a href=\"#\">
                                    <h5 class=\"card-header-text\">{% if datos.estado_persona == '1' %} PERDIDA </td>{% else %} DESAPARECIDA {% endif %}</h5>
                                </a>
                            </div>
                            <span class=\"dropdown-toggle addon-btn text-muted float-right service-btn\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"true\" role=\"tooltip\">
                            </span>
                            <div class=\"dropdown-menu dropdown-menu-right b-none services-list\">
                                <a class=\"dropdown-item\" href=\"{{ base_url() }}/editar/{{datos.id_anuncio}}\"><i class=\"icofont icofont-edit\"></i> Editar</a>
                                <a class=\"dropdown-item\" href=\"{{ base_url() }}/detalle/{{datos.id_anuncio}}\"><i class=\"icofont icofont-eye-alt\"></i> Ver Aportes</a>
                            </div>
                        </div>
                        <div class=\"card-block\">
                            <div class=\"row\">
                                <div class=\"col-sm-12\">
                                    <p class=\"task-detail\">Persona:{{ datos.nombres }} {{ datos.apellidos }}</p>
                                    <p class=\"task-detail\">Descripcion:{{ datos.descripcion }} </p>
                                    <p class=\"task-detail\">Fecha de Registro:{{ datos.fecha_registro }} </p>
                                    <p class=\"task-detail\">Estado Anuncio:{% if datos.estado_anuncio == 'n' %} Publicado </td>{% else %} Desactivado {% endif %} </p>
                                </div>
                                <!-- end of col-sm-8 -->
                            </div>
                            <!-- end of row -->
                        </div>
                        <!-- end of card-block -->
                    </div>
                </div>
                    {% endfor %}
    {% else %}
        <p>No hay anuncios</p>
    {% endif %}
            </div>
        </div>
    </div>
</div>
<!-- tab pane personal end -->

<!-- tab pane info start -->
<div class=\"tab-pane\" id=\"binfo\" role=\"tabpanel\">
    <!-- info card start -->
    <div class=\"card\">
    <div class=\"card-header\">
      <h5 class=\"card-header-text\">Mi Informacion</h5>
        <button id=\"edit-btn\" type=\"button\" class=\"btn btn-sm btn-primary waves-effect waves-light float-right\">
        <i class=\"icofont icofont-edit\"></i>
        </button>
    </div>
    <div class=\"card-block\">
      <div class=\"view-info\">
        <div class=\"col-lg-12\">
          <div class=\"general-info\">
            <div class=\"row\">
              <div class=\"col-lg-12 col-xl-6\">
                <div class=\"table-responsive\">
                  <table class=\"table m-0\">
                    <tbody>
                      <tr><th scope=\"row\">Nombres</th><td>{{ datosu.nombres }}</td></tr>
                      <tr><th scope=\"row\">Sexo</th><td>{% if datosu.sexo == 'h' %} Hombre {% else %} Mujer {% endif %}</td></tr>
                      <tr><th scope=\"row\">Cumpleaños</th><td>{{ datosu.fecha_nacimiento }}</td></tr>
                      <tr><th scope=\"row\">Profesión</th><td></td></tr>
                      <tr><th scope=\"row\">Localización</th><td></td></tr>
                    </tbody>
                  </table>
                </div>
              </div>
              <div class=\"col-lg-12 col-xl-6\">
                <div class=\"table-responsive\">
                  <table class=\"table\">
                    <tbody>
                      <tr><th scope=\"row\">Correo Electronico</th><td>{{ datosu.correo_electronico }}</td></tr>
                      <tr><th scope=\"row\">Numero Telefono</th><td></td></tr>
                      <tr><th scope=\"row\">Estado Cuenta</th>{% if datosu.estado == '1' %}<td style=\"color:green;\"> Verificado </td>{% else %}<td style=\"color: red;\"> Sin verificar </td>{% endif %}</tr>
                      <tr><th scope=\"row\">Skype</th><td><a href=\"//twitter.com\"></a></td></tr>
                      <tr><th scope=\"row\">Facebook</th><td><a href=\"//fb.com\"></a></td></tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- tab pane info end -->

</div>
{# <div class=\"agregarP\" id=\"agregarP\">
<div class=\"col-xl-6 col-md-12\">
    <div class=\"card user-card-full\">
        <div class=\"row m-l-0 m-r-0\">
            <div class=\"col-sm-4 bg-c-blue user-profile\">
                <div class=\"card-block text-center text-white\">
                    <div class=\"m-b-25\">
                        <img src=\"../files/assets/images/avatar-4.jpg\" class=\"img-radius\" alt=\"User-Profile-Image\">
                    </div>
                    <h6 class=\"f-w-600\">Jeny William</h6>
                    <p>Web Designer</p>
                    <a href=\"#!\" class=\"text-white\"><i class=\"feather icon-edit m-t-10 f-16\"></i></a>
                </div>
            </div>
            <div class=\"col-sm-8\">
                <div class=\"card-block\">
                    <h6 class=\"m-b-20 p-b-5 b-b-default f-w-600\">Information</h6>
                    <div class=\"row\">
                        <div class=\"col-sm-6\">
                            <p class=\"m-b-10 f-w-600\">Email</p>
                            <h6 class=\"text-muted f-w-400\"><a href=\"mailto:someone@example.com?Subject=Hello%20again\" target=\"_top\">jeny@gmail.com</a> </h6>
                        </div>
                        <div class=\"col-sm-6\">
                            <p class=\"m-b-10 f-w-600\">Phone</p>
                            <h6 class=\"text-muted f-w-400\">0023-333-526136</h6>
                        </div>
                    </div>
                    <h6 class=\"m-b-20 m-t-50 p-b-5 b-b-default f-w-600\">Projects</h6>
                    <div class=\"row\">
                        <div class=\"col-sm-6\">
                            <p class=\"m-b-10 f-w-600\">Recent</p>
                            <h6 class=\"text-muted f-w-400\">Guruable Admin</h6>
                        </div>
                        <div class=\"col-sm-6\">
                            <p class=\"m-b-10 f-w-600\">Most Viewed</p>
                            <h6 class=\"text-muted f-w-400\">Able Pro Admin</h6>
                        </div>
                    </div>
                    <ul class=\"social-link list-unstyled m-t-50 m-b-20\">
                        <li><a href=\"#!\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"\" data-original-title=\"facebook\"><i class=\"feather icon-facebook facebook\" aria-hidden=\"true\"></i></a></li>
                        <li><a href=\"#!\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"\" data-original-title=\"twitter\"><i class=\"feather icon-twitter twitter\" aria-hidden=\"true\"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
                            </div> #}
{# {% endfor %} #}

{% endif %}
{% endblock content %}

{% block scripts %}
  {{ parent() }}
{% endblock %}", "perfil-usuario/main.twig", "C:\\xampp\\htdocs\\proyectoC\\app\\Views\\perfil-usuario\\main.twig");
    }
}
