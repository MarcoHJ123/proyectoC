<?php

/* perfil-usuario/inc/editar_anuncio.twig */
class __TwigTemplate_2179abb67643f03918a098662620c8fca3201f009190b72210f9d1a218719118 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("templates/master/master.twig", "perfil-usuario/inc/editar_anuncio.twig", 1);
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
        echo "   ";
        if ((isset($context["anuncio"]) ? $context["anuncio"] : null)) {
            // line 5
            echo "  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["anuncio"]) ? $context["anuncio"] : null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["datos"]) {
                // line 6
                echo "  <div class=\"page-body text-center\">
    <div class=\"row\">
      <div class=\"col-sm-12\">
        ";
                // line 9
                $this->loadTemplate("templates/inc/messages.twig", "perfil-usuario/inc/editar_anuncio.twig", 9)->display($context);
                // line 10
                echo "      </div>
    <div class=\"col-sm-12\">
      <div class=\"card card-edicion-anuncio\">
        <div class=\"card-header text-center m-t-10\">
          <h3>Registra Persona Encontradas</h3>
                      <a class=\"btn btn-mat waves-light btn-inverse text-center\" href=\"";
                // line 15
                echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
                echo "/perfil\">REGRESAR</a>

        </div>
          <div class=\"f1 card-block form-editar-anuncio\">
            <div class=\"row\">
              <div class=\"col-sm-6\" style=\"text-align: -webkit-center; border-right: 1px solid rgba(0,0,0,.125);\">
                ";
                // line 21
                $this->loadTemplate("crear-anuncios/desaparecido/inc/foto.twig", "perfil-usuario/inc/editar_anuncio.twig", 21)->display($context);
                // line 22
                echo "              </div>
              <div class=\"col-sm-6\">
                ";
                // line 24
                $this->loadTemplate("crear-anuncios/desaparecido/inc/pasos.twig", "perfil-usuario/inc/editar_anuncio.twig", 24)->display($context);
                // line 25
                echo "                <fieldset>

                  <h4>Detalles de la persona</h4>
                      <a class=\"btn btn-mat waves-light btn-inverse text-center\" href=\"";
                // line 28
                echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
                echo "/perfil\">REGRESAR</a>

                  <div class=\"row\">
                    <div class=\"col-md-6 p-t-6\" for=\"sexo_persona\">
                      <label class=\"col-form-label\">Sexo</label>
                      <select name=\"sexo_persona\" class=\"form-control form-control-inverse\">
                      <option value=\"0\">- SELECCIONAR -</option>
                      ";
                // line 35
                if (($this->getAttribute($context["datos"], "sexo", array()) == "h")) {
                    // line 36
                    echo "                        <option value=\"h\" selected>Hombre</option>
                        <option value=\"m\">Mujer</option>
                      ";
                } else {
                    // line 39
                    echo "                        <option value=\"h\">Hombre</option>
                        <option value=\"m\" selected>Mujer</option>
                      ";
                }
                // line 42
                echo "                      </select>
                    </div>

                      <div class=\"col-md-6 p-t-6\" for=\"color_piel\">
                        <label class=\"col-form-label\">Color Piel</label>
                        <select name=\"color_piel\" class=\"form-control form-control-inverse\">
                        <option value=\"0\">- SELECCIONAR -</option>
                        ";
                // line 49
                if (($this->getAttribute($context["datos"], "colo_piel", array()) == "bl")) {
                    // line 50
                    echo "                        <option value=\"bl\" selected>Blanco</option>
                        <option value=\"m\">Moreno</option>
                        <option value=\"tr\">Trigueño</option>
                        ";
                } elseif (($this->getAttribute(                // line 53
$context["datos"], "colo_piel", array()) == "m")) {
                    // line 54
                    echo "                        <option value=\"bl\">Blanco</option>
                        <option value=\"m\" selected>Moreno</option>
                        <option value=\"tr\">Trigueño</option>
                        ";
                } elseif (($this->getAttribute(                // line 57
$context["datos"], "colo_piel", array()) == "tr")) {
                    // line 58
                    echo "                        <option value=\"bl\">Blanco</option>
                        <option value=\"m\">Moreno</option>
                        <option value=\"tr\" selected>Trigueño</option>
                        ";
                }
                // line 62
                echo "                        ";
                // line 63
                echo "                        </select>
                      </div>

                      <div class=\"col-md-6 p-t-6\" for=\"estatura_persona\">
                        <label class=\"col-form-label\">Estatura</label>
                        <input type=\"number\" name=\"estatura_persona\" placeholder=\"Estatura de la persona\" class=\"form-control\" id=\"estatura_persona\" value=\"";
                // line 68
                echo twig_escape_filter($this->env, $this->getAttribute($context["datos"], "estatura", array()), "html", null, true);
                echo "\">
                      </div>

                      <div class=\"col-md-6 p-t-6\" for=\"parentesco\">
                        <label class=\"col-form-label\">Parentesco con Persona</label>
                        <select name=\"parentesco\" class=\"form-control form-control-inverse\">
                        <option value=\"0\">- SELECCIONAR -</option>
                        ";
                // line 75
                if (($this->getAttribute($context["datos"], "parentesco", array()) == "1")) {
                    // line 76
                    echo "                        <option value=\"1\" selected>Padre / Madre</option>
                        <option value=\"2\">Tío / Tía</option>
                        <option value=\"3\">Primo / Prima</option>
                        <option value=\"4\">Amigo / Amiga</option>
                        <option value=\"5\">Conocido</option>
                        ";
                } elseif (($this->getAttribute(                // line 81
$context["datos"], "parentesco", array()) == "2")) {
                    // line 82
                    echo "                        <option value=\"1\">Padre / Madre</option>
                        <option value=\"2\"selected>Tío / Tía</option>
                        <option value=\"3\">Primo / Prima</option>
                        <option value=\"4\">Amigo / Amiga</option>
                        <option value=\"5\">Conocido</option>
                        ";
                } elseif (($this->getAttribute(                // line 87
$context["datos"], "parentesco", array()) == "3")) {
                    // line 88
                    echo "                        <option value=\"1\">Padre / Madre</option>
                        <option value=\"2\">Tío / Tía</option>
                        <option value=\"3\" selected>Primo / Prima</option>
                        <option value=\"4\">Amigo / Amiga</option>
                        <option value=\"5\">Conocido</option>
                        ";
                } elseif (($this->getAttribute(                // line 93
$context["datos"], "parentesco", array()) == "4")) {
                    // line 94
                    echo "                        <option value=\"1\">Padre / Madre</option>
                        <option value=\"2\">Tío / Tía</option>
                        <option value=\"3\" selected>Primo / Prima</option>
                        <option value=\"4\">Amigo / Amiga</option>
                        <option value=\"5\">Conocido</option>
                        ";
                } elseif (($this->getAttribute(                // line 99
$context["datos"], "parentesco", array()) == "5")) {
                    // line 100
                    echo "                        <option value=\"1\">Padre / Madre</option>
                        <option value=\"2\">Tío / Tía</option>
                        <option value=\"3\">Primo / Prima</option>
                        <option value=\"4\">Amigo / Amiga</option>
                        <option value=\"5\"selected>Conocido</option>
                        ";
                }
                // line 106
                echo "                        </select>
                      </div>
                    </div>
                    <div class=\"f1-buttons\">
                      <button type=\"button\" class=\"btn btn-next\">Siguiente</button>
                    </div>
                </fieldset>
                <fieldset>
                  <h4>Detalles</h4>
                  <div class=\"row\">

                  <div class=\"col-md-12 p-t-12\">
                  <label class=\"col-form-label\">Ultima vez visto</label>
                  <div id=\"map\" style=\"height: 278px\"></div>
                    <form action=\"#\" id=\"posicion\" name=\"posicion\">
                      <input type=\"text\" name=\"ubicacio_lt\"  hidden disabled value=\"";
                // line 121
                echo twig_escape_filter($this->env, $this->getAttribute($context["datos"], "ubicacio_lt", array()), "html", null, true);
                echo "\"/>
                      <input type=\"text\" name=\"ubicacio_ln\"  hidden disabled value=\"";
                // line 122
                echo twig_escape_filter($this->env, $this->getAttribute($context["datos"], "ubicacio_ln", array()), "html", null, true);
                echo "\" />
                    </form>
                  </div>

                  <div class=\"col-md-12 p-t-12\" for=\"descripcion\">
                    <label class=\"col-form-label\">Descripcion</label>
                    <textarea type=\"text\" name=\"descripcion\" placeholder=\"Describir breve como ocurrio el acontecimiento\" class=\"form-control\" id=\"descripcion\" >";
                // line 128
                echo twig_escape_filter($this->env, $this->getAttribute($context["datos"], "descripcion", array()), "html", null, true);
                echo "</textarea>
                  </div>

                  </div>

                  <div class=\"f1-buttons\">
                  <button type=\"button\" class=\"btn btn-previous\">Anterior</button>
                  <button type=\"button\" class=\"btn btn-next\">Siguiente</button>
                  </div>
                </fieldset>
                <fieldset>
                  <h4>Datos Personales</h4>
                  <div class=\"row\">

                    <div class=\"col-md-6 p-t-6\" for=\"nombres_persona\">
                      <label class=\"col-form-label\">Nombres</label>
                      <input type=\"text\" name=\"nombres_persona\" class=\"form-control\" id=\"nombres_persona\" value=\"";
                // line 144
                echo twig_escape_filter($this->env, $this->getAttribute($context["datos"], "nombres", array()), "html", null, true);
                echo "\">
                    </div>

                    <div class=\"col-md-6 p-t-6\" for=\"apellidos_persona\">
                      <label class=\"col-form-label\">Apellidos</label>
                      <input type=\"text\" name=\"apellidos_persona\"  class=\"form-control\" id=\"apellidos_persona\" value=\"";
                // line 149
                echo twig_escape_filter($this->env, $this->getAttribute($context["datos"], "apellidos", array()), "html", null, true);
                echo "\">
                    </div>

                    <div class=\"col-md-6 p-t-6\" for=\"fecha_nacimiento\">
                      <label class=\"col-form-label\">Fecha Nacimiento</label>
                      <input type=\"date\" name=\"fecha_nacimiento\"  class=\"form-control\" id=\"fecha_nacimiento\" value=\"";
                // line 154
                echo twig_escape_filter($this->env, $this->getAttribute($context["datos"], "fecha_nacimiento", array()), "html", null, true);
                echo "\">
                    </div>

                    <div class=\"col-md-6 p-t-6\" for=\"tipo_documento\">
                      <label class=\"col-form-label\" >Tipo Documento Identidad</label>
                      ";
                // line 160
                echo "                      <select name=\"tipo_documento\"  id=\"tipo_documento\" class=\"form-control form-control-inverse\" >
                      <option value=\"0\">- SELECCIONAR -</option>
                      ";
                // line 162
                if (($this->getAttribute($context["datos"], "numero_documento", array()) == "1")) {
                    // line 163
                    echo "                      <option value=\"1\" selected>DNI</option>
                      <option value=\"2\">PASAPORTE</option>
                     ";
                } else {
                    // line 166
                    echo "                      <option value=\"1\">DNI</option>
                      <option value=\"2\" selected>PASAPORTE</option>
                      ";
                }
                // line 169
                echo "                    </select>
                    </div>

                    <div class=\"col-md-6 p-t-6\" for=\"numero_documento\">
                      <label class=\"col-form-label\" >Numero Documento</label>
                      <input type=\"text\" name=\"numero_documento\" placeholder=\"Numero de documento\" class=\"form-control\" id=\"numero_documento\" value=\"";
                // line 174
                echo twig_escape_filter($this->env, $this->getAttribute($context["datos"], "numero_documento", array()), "html", null, true);
                echo "\">
                    </div>

                  </div>

                  <div class=\"f1-buttons\">
                    <input type=\"text\" name=\"id_anuncio\" class=\"form-control\" id=\"id_anuncio\" value=\"";
                // line 180
                echo twig_escape_filter($this->env, $this->getAttribute($context["datos"], "id_anuncio", array()), "html", null, true);
                echo "\"disable hidden>
                    <button type=\"button\" class=\"btn btn-previous\">Anterior</button>
                    <button type=\"button\" id=\"btn-editar-anuncio\" class=\"btn btn-mat waves-light btn-inverse text-center\">Editar Anuncio</button>
                  </div>

                </fieldset>
              </div>
            </div>
              <div class=\"m-b-26 box-mensaje-anuncio-creado hide\">
                <div class=\"alert alert-info icons-alert fix-icon-alert\">
                </div>
              </div>
            ";
                // line 193
                echo "          </div>
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['datos'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 199
            echo "    ";
        } else {
            // line 200
            echo "        <p>No hay anuncios</p>
    ";
        }
    }

    // line 203
    public function block_scripts($context, array $blocks = array())
    {
        // line 204
        echo "  ";
        $this->displayParentBlock("scripts", $context, $blocks);
        echo "
  <!-- App JS -->
  <script type=\"text/javascript\" src=\"http://maps.google.com/maps?file=api&v=2&key=AIzaSyCV-quRftERbHa_3kEUVCTOWPgvl9bA1ao\"></script>
  <script type=\"text/javascript\" src=\"";
        // line 207
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/public/assets/app/js/mapa.js\"></script>
  <script type=\"text/javascript\" src=\"";
        // line 208
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/public/assets/app/js/edicionA.js\"></script>
  <script type=\"text/javascript\" src=\"";
        // line 209
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/public/assets/app/js/validar_crear_ticket.js\"></script>
";
    }

    public function getTemplateName()
    {
        return "perfil-usuario/inc/editar_anuncio.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  373 => 209,  369 => 208,  365 => 207,  358 => 204,  355 => 203,  349 => 200,  346 => 199,  327 => 193,  312 => 180,  303 => 174,  296 => 169,  291 => 166,  286 => 163,  284 => 162,  280 => 160,  272 => 154,  264 => 149,  256 => 144,  237 => 128,  228 => 122,  224 => 121,  207 => 106,  199 => 100,  197 => 99,  190 => 94,  188 => 93,  181 => 88,  179 => 87,  172 => 82,  170 => 81,  163 => 76,  161 => 75,  151 => 68,  144 => 63,  142 => 62,  136 => 58,  134 => 57,  129 => 54,  127 => 53,  122 => 50,  120 => 49,  111 => 42,  106 => 39,  101 => 36,  99 => 35,  89 => 28,  84 => 25,  82 => 24,  78 => 22,  76 => 21,  67 => 15,  60 => 10,  58 => 9,  53 => 6,  35 => 5,  32 => 4,  29 => 3,  11 => 1,);
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
  {% for datos in anuncio %}
  <div class=\"page-body text-center\">
    <div class=\"row\">
      <div class=\"col-sm-12\">
        {% include 'templates/inc/messages.twig' %}
      </div>
    <div class=\"col-sm-12\">
      <div class=\"card card-edicion-anuncio\">
        <div class=\"card-header text-center m-t-10\">
          <h3>Registra Persona Encontradas</h3>
                      <a class=\"btn btn-mat waves-light btn-inverse text-center\" href=\"{{ base_url() }}/perfil\">REGRESAR</a>

        </div>
          <div class=\"f1 card-block form-editar-anuncio\">
            <div class=\"row\">
              <div class=\"col-sm-6\" style=\"text-align: -webkit-center; border-right: 1px solid rgba(0,0,0,.125);\">
                {% include 'crear-anuncios/desaparecido/inc/foto.twig' %}
              </div>
              <div class=\"col-sm-6\">
                {% include 'crear-anuncios/desaparecido/inc/pasos.twig' %}
                <fieldset>

                  <h4>Detalles de la persona</h4>
                      <a class=\"btn btn-mat waves-light btn-inverse text-center\" href=\"{{ base_url() }}/perfil\">REGRESAR</a>

                  <div class=\"row\">
                    <div class=\"col-md-6 p-t-6\" for=\"sexo_persona\">
                      <label class=\"col-form-label\">Sexo</label>
                      <select name=\"sexo_persona\" class=\"form-control form-control-inverse\">
                      <option value=\"0\">- SELECCIONAR -</option>
                      {% if datos.sexo == 'h' %}
                        <option value=\"h\" selected>Hombre</option>
                        <option value=\"m\">Mujer</option>
                      {% else %}
                        <option value=\"h\">Hombre</option>
                        <option value=\"m\" selected>Mujer</option>
                      {% endif %}
                      </select>
                    </div>

                      <div class=\"col-md-6 p-t-6\" for=\"color_piel\">
                        <label class=\"col-form-label\">Color Piel</label>
                        <select name=\"color_piel\" class=\"form-control form-control-inverse\">
                        <option value=\"0\">- SELECCIONAR -</option>
                        {% if datos.colo_piel == 'bl' %}
                        <option value=\"bl\" selected>Blanco</option>
                        <option value=\"m\">Moreno</option>
                        <option value=\"tr\">Trigueño</option>
                        {% elseif datos.colo_piel == 'm' %}
                        <option value=\"bl\">Blanco</option>
                        <option value=\"m\" selected>Moreno</option>
                        <option value=\"tr\">Trigueño</option>
                        {% elseif datos.colo_piel == 'tr' %}
                        <option value=\"bl\">Blanco</option>
                        <option value=\"m\">Moreno</option>
                        <option value=\"tr\" selected>Trigueño</option>
                        {% endif %}
                        {# Poner una paleta para que la gente escoja el color #}
                        </select>
                      </div>

                      <div class=\"col-md-6 p-t-6\" for=\"estatura_persona\">
                        <label class=\"col-form-label\">Estatura</label>
                        <input type=\"number\" name=\"estatura_persona\" placeholder=\"Estatura de la persona\" class=\"form-control\" id=\"estatura_persona\" value=\"{{datos.estatura }}\">
                      </div>

                      <div class=\"col-md-6 p-t-6\" for=\"parentesco\">
                        <label class=\"col-form-label\">Parentesco con Persona</label>
                        <select name=\"parentesco\" class=\"form-control form-control-inverse\">
                        <option value=\"0\">- SELECCIONAR -</option>
                        {% if datos.parentesco == '1' %}
                        <option value=\"1\" selected>Padre / Madre</option>
                        <option value=\"2\">Tío / Tía</option>
                        <option value=\"3\">Primo / Prima</option>
                        <option value=\"4\">Amigo / Amiga</option>
                        <option value=\"5\">Conocido</option>
                        {% elseif datos.parentesco == '2' %}
                        <option value=\"1\">Padre / Madre</option>
                        <option value=\"2\"selected>Tío / Tía</option>
                        <option value=\"3\">Primo / Prima</option>
                        <option value=\"4\">Amigo / Amiga</option>
                        <option value=\"5\">Conocido</option>
                        {% elseif datos.parentesco == '3' %}
                        <option value=\"1\">Padre / Madre</option>
                        <option value=\"2\">Tío / Tía</option>
                        <option value=\"3\" selected>Primo / Prima</option>
                        <option value=\"4\">Amigo / Amiga</option>
                        <option value=\"5\">Conocido</option>
                        {% elseif datos.parentesco == '4' %}
                        <option value=\"1\">Padre / Madre</option>
                        <option value=\"2\">Tío / Tía</option>
                        <option value=\"3\" selected>Primo / Prima</option>
                        <option value=\"4\">Amigo / Amiga</option>
                        <option value=\"5\">Conocido</option>
                        {% elseif datos.parentesco == '5' %}
                        <option value=\"1\">Padre / Madre</option>
                        <option value=\"2\">Tío / Tía</option>
                        <option value=\"3\">Primo / Prima</option>
                        <option value=\"4\">Amigo / Amiga</option>
                        <option value=\"5\"selected>Conocido</option>
                        {% endif %}
                        </select>
                      </div>
                    </div>
                    <div class=\"f1-buttons\">
                      <button type=\"button\" class=\"btn btn-next\">Siguiente</button>
                    </div>
                </fieldset>
                <fieldset>
                  <h4>Detalles</h4>
                  <div class=\"row\">

                  <div class=\"col-md-12 p-t-12\">
                  <label class=\"col-form-label\">Ultima vez visto</label>
                  <div id=\"map\" style=\"height: 278px\"></div>
                    <form action=\"#\" id=\"posicion\" name=\"posicion\">
                      <input type=\"text\" name=\"ubicacio_lt\"  hidden disabled value=\"{{datos.ubicacio_lt}}\"/>
                      <input type=\"text\" name=\"ubicacio_ln\"  hidden disabled value=\"{{datos.ubicacio_ln}}\" />
                    </form>
                  </div>

                  <div class=\"col-md-12 p-t-12\" for=\"descripcion\">
                    <label class=\"col-form-label\">Descripcion</label>
                    <textarea type=\"text\" name=\"descripcion\" placeholder=\"Describir breve como ocurrio el acontecimiento\" class=\"form-control\" id=\"descripcion\" >{{datos.descripcion}}</textarea>
                  </div>

                  </div>

                  <div class=\"f1-buttons\">
                  <button type=\"button\" class=\"btn btn-previous\">Anterior</button>
                  <button type=\"button\" class=\"btn btn-next\">Siguiente</button>
                  </div>
                </fieldset>
                <fieldset>
                  <h4>Datos Personales</h4>
                  <div class=\"row\">

                    <div class=\"col-md-6 p-t-6\" for=\"nombres_persona\">
                      <label class=\"col-form-label\">Nombres</label>
                      <input type=\"text\" name=\"nombres_persona\" class=\"form-control\" id=\"nombres_persona\" value=\"{{datos.nombres}}\">
                    </div>

                    <div class=\"col-md-6 p-t-6\" for=\"apellidos_persona\">
                      <label class=\"col-form-label\">Apellidos</label>
                      <input type=\"text\" name=\"apellidos_persona\"  class=\"form-control\" id=\"apellidos_persona\" value=\"{{datos.apellidos}}\">
                    </div>

                    <div class=\"col-md-6 p-t-6\" for=\"fecha_nacimiento\">
                      <label class=\"col-form-label\">Fecha Nacimiento</label>
                      <input type=\"date\" name=\"fecha_nacimiento\"  class=\"form-control\" id=\"fecha_nacimiento\" value=\"{{datos.fecha_nacimiento}}\">
                    </div>

                    <div class=\"col-md-6 p-t-6\" for=\"tipo_documento\">
                      <label class=\"col-form-label\" >Tipo Documento Identidad</label>
                      {# <input type=\"text\" name=\"tipo_documento\"  class=\"form-control\" id=\"tipo_documento\"> #}
                      <select name=\"tipo_documento\"  id=\"tipo_documento\" class=\"form-control form-control-inverse\" >
                      <option value=\"0\">- SELECCIONAR -</option>
                      {% if datos.numero_documento == '1' %}
                      <option value=\"1\" selected>DNI</option>
                      <option value=\"2\">PASAPORTE</option>
                     {% else %}
                      <option value=\"1\">DNI</option>
                      <option value=\"2\" selected>PASAPORTE</option>
                      {% endif %}
                    </select>
                    </div>

                    <div class=\"col-md-6 p-t-6\" for=\"numero_documento\">
                      <label class=\"col-form-label\" >Numero Documento</label>
                      <input type=\"text\" name=\"numero_documento\" placeholder=\"Numero de documento\" class=\"form-control\" id=\"numero_documento\" value=\"{{datos.numero_documento}}\">
                    </div>

                  </div>

                  <div class=\"f1-buttons\">
                    <input type=\"text\" name=\"id_anuncio\" class=\"form-control\" id=\"id_anuncio\" value=\"{{datos.id_anuncio}}\"disable hidden>
                    <button type=\"button\" class=\"btn btn-previous\">Anterior</button>
                    <button type=\"button\" id=\"btn-editar-anuncio\" class=\"btn btn-mat waves-light btn-inverse text-center\">Editar Anuncio</button>
                  </div>

                </fieldset>
              </div>
            </div>
              <div class=\"m-b-26 box-mensaje-anuncio-creado hide\">
                <div class=\"alert alert-info icons-alert fix-icon-alert\">
                </div>
              </div>
            {# </form> #}
          </div>
        </div>
      </div>
    </div>
  </div>
{% endfor %}
    {% else %}
        <p>No hay anuncios</p>
    {% endif %}
{% endblock %}
{% block scripts %}
  {{ parent() }}
  <!-- App JS -->
  <script type=\"text/javascript\" src=\"http://maps.google.com/maps?file=api&v=2&key=AIzaSyCV-quRftERbHa_3kEUVCTOWPgvl9bA1ao\"></script>
  <script type=\"text/javascript\" src=\"{{ base_url() }}/public/assets/app/js/mapa.js\"></script>
  <script type=\"text/javascript\" src=\"{{ base_url() }}/public/assets/app/js/edicionA.js\"></script>
  <script type=\"text/javascript\" src=\"{{ base_url() }}/public/assets/app/js/validar_crear_ticket.js\"></script>
{% endblock %}", "perfil-usuario/inc/editar_anuncio.twig", "C:\\xampp\\htdocs\\proyectoC\\app\\Views\\perfil-usuario\\inc\\editar_anuncio.twig");
    }
}
