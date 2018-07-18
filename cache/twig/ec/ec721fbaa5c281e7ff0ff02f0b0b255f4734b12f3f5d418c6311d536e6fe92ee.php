<?php

/* templates/master/inc/main-nav.twig */
class __TwigTemplate_92f5059e4112c9e861e9db2300b9b013e2ad7dbd686f92b0b368ce75e16bcbf4 extends Twig_Template
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
<nav class=\"pcoded-navbar\">
  <div class=\"pcoded-inner-navbar main-menu\"style=\"background-color: #233237;\">
    <div class=\"boxed-layout\">
      <ul class=\"pcoded-item\">
         ";
        // line 11
        echo "          ";
        if ( !$this->getAttribute((isset($context["user_login"]) ? $context["user_login"] : null), "c_usuario", array())) {
            // line 12
            echo "          <li class=\"";
            if (((isset($context["current_url"]) ? $context["current_url"] : null) == $this->getAttribute($this->getAttribute((isset($context["main_menu"]) ? $context["main_menu"] : null), "Anuncios", array()), "url", array()))) {
                echo " active ";
            }
            echo "\">
            <a href=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["main_menu"]) ? $context["main_menu"] : null), "Anuncios", array()), "url", array()), "html", null, true);
            echo "\" class=\" \">
              <span class=\"pcoded-mtext\">";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["main_menu"]) ? $context["main_menu"] : null), "Anuncios", array()), "title", array()), "html", null, true);
            echo "</span>
            </a>
          </li>
          ";
        }
        // line 18
        echo "          ";
        if ( !$this->getAttribute((isset($context["user_login"]) ? $context["user_login"] : null), "c_usuario", array())) {
            // line 19
            echo "          <li class=\"";
            if (((isset($context["current_url"]) ? $context["current_url"] : null) == $this->getAttribute($this->getAttribute((isset($context["main_menu"]) ? $context["main_menu"] : null), "CrearAnuncio", array()), "url", array()))) {
                echo " active ";
            }
            echo "\">
            <a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["main_menu"]) ? $context["main_menu"] : null), "CrearAnuncio", array()), "url", array()), "html", null, true);
            echo "\" class=\" \">
              <span class=\"pcoded-mtext\">";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["main_menu"]) ? $context["main_menu"] : null), "CrearAnuncio", array()), "title", array()), "html", null, true);
            echo "</span>
            </a>
          </li>
          ";
        }
        // line 25
        echo "          ";
        if ( !$this->getAttribute((isset($context["user_login"]) ? $context["user_login"] : null), "c_usuario", array())) {
            // line 26
            echo "          <li class=\"";
            if (((isset($context["current_url"]) ? $context["current_url"] : null) == $this->getAttribute($this->getAttribute((isset($context["main_menu"]) ? $context["main_menu"] : null), "RegistrarUsuario", array()), "url", array()))) {
                echo " active ";
            }
            echo "\">
            <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["main_menu"]) ? $context["main_menu"] : null), "RegistrarUsuario", array()), "url", array()), "html", null, true);
            echo "\" class=\" \">
              <span class=\"pcoded-mtext\">";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["main_menu"]) ? $context["main_menu"] : null), "RegistrarUsuario", array()), "title", array()), "html", null, true);
            echo "</span>
            </a>
          </li>
          ";
        }
        // line 32
        echo "          ";
        if ($this->getAttribute((isset($context["user_login"]) ? $context["user_login"] : null), "c_usuario", array())) {
            // line 33
            echo "          <li class=\"";
            if (((isset($context["current_url"]) ? $context["current_url"] : null) == $this->getAttribute($this->getAttribute((isset($context["main_menu"]) ? $context["main_menu"] : null), "cerrar_sesion", array()), "url", array()))) {
                echo " active ";
            }
            echo "\">
            <a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["main_menu"]) ? $context["main_menu"] : null), "cerrar_sesion", array()), "url", array()), "html", null, true);
            echo "\" class=\" \">
              <span class=\"pcoded-mtext\">";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["main_menu"]) ? $context["main_menu"] : null), "cerrar_sesion", array()), "title", array()), "html", null, true);
            echo "</span>
            </a>
          </li>
        ";
        } else {
            // line 39
            echo "          <li class=\"";
            if (((isset($context["current_url"]) ? $context["current_url"] : null) == $this->getAttribute($this->getAttribute((isset($context["main_menu"]) ? $context["main_menu"] : null), "login", array()), "url", array()))) {
                echo " active ";
            }
            echo "\">
            <a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["main_menu"]) ? $context["main_menu"] : null), "login", array()), "url", array()), "html", null, true);
            echo "\" class=\" \">
              <span class=\"pcoded-mtext\">";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["main_menu"]) ? $context["main_menu"] : null), "login", array()), "title", array()), "html", null, true);
            echo "</span>
            </a>
          </li>
        ";
        }
        // line 45
        echo "
      </ul><!--.pcoded-item-->
    </div><!--  .boxed-layout -->

  </div>
</nav>";
    }

    public function getTemplateName()
    {
        return "templates/master/inc/main-nav.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 45,  121 => 41,  117 => 40,  110 => 39,  103 => 35,  99 => 34,  92 => 33,  89 => 32,  82 => 28,  78 => 27,  71 => 26,  68 => 25,  61 => 21,  57 => 20,  50 => 19,  47 => 18,  40 => 14,  36 => 13,  29 => 12,  26 => 11,  19 => 1,);
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
<nav class=\"pcoded-navbar\">
  <div class=\"pcoded-inner-navbar main-menu\"style=\"background-color: #233237;\">
    <div class=\"boxed-layout\">
      <ul class=\"pcoded-item\">
         {#  <li class=\"active\">
            <a href=\"\">
              <span class=\"pcoded-mtext\">INICIO</span>
            </a>
          </li> #}
          {% if not user_login.c_usuario %}
          <li class=\"{% if current_url == main_menu.Anuncios.url %} active {% endif %}\">
            <a href=\"{{ main_menu.Anuncios.url }}\" class=\" \">
              <span class=\"pcoded-mtext\">{{ main_menu.Anuncios.title }}</span>
            </a>
          </li>
          {% endif %}
          {% if not user_login.c_usuario %}
          <li class=\"{% if current_url == main_menu.CrearAnuncio.url %} active {% endif %}\">
            <a href=\"{{ main_menu.CrearAnuncio.url }}\" class=\" \">
              <span class=\"pcoded-mtext\">{{ main_menu.CrearAnuncio.title }}</span>
            </a>
          </li>
          {% endif %}
          {% if not user_login.c_usuario %}
          <li class=\"{% if current_url == main_menu.RegistrarUsuario.url %} active {% endif %}\">
            <a href=\"{{ main_menu.RegistrarUsuario.url }}\" class=\" \">
              <span class=\"pcoded-mtext\">{{ main_menu.RegistrarUsuario.title }}</span>
            </a>
          </li>
          {% endif %}
          {% if user_login.c_usuario %}
          <li class=\"{% if current_url == main_menu.cerrar_sesion.url %} active {% endif %}\">
            <a href=\"{{ main_menu.cerrar_sesion.url }}\" class=\" \">
              <span class=\"pcoded-mtext\">{{ main_menu.cerrar_sesion.title }}</span>
            </a>
          </li>
        {% else %}
          <li class=\"{% if current_url == main_menu.login.url %} active {% endif %}\">
            <a href=\"{{ main_menu.login.url }}\" class=\" \">
              <span class=\"pcoded-mtext\">{{ main_menu.login.title }}</span>
            </a>
          </li>
        {% endif %}

      </ul><!--.pcoded-item-->
    </div><!--  .boxed-layout -->

  </div>
</nav>", "templates/master/inc/main-nav.twig", "C:\\xampp\\htdocs\\proyectoC\\app\\Views\\templates\\master\\inc\\main-nav.twig");
    }
}
