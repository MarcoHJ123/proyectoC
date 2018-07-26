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
        echo "<nav class=\"pcoded-navbar\">
  <div class=\"pcoded-inner-navbar main-menu\"style=\"background-color: #233237;\">
    <div class=\"boxed-layout\">
      <ul class=\"pcoded-item\">
          ";
        // line 6
        echo "          <li class=\"";
        if (((isset($context["current_url"]) ? $context["current_url"] : null) == $this->getAttribute($this->getAttribute((isset($context["main_menu"]) ? $context["main_menu"] : null), "Anuncios", array()), "url", array()))) {
            echo " active ";
        }
        echo "\">
            <a href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["main_menu"]) ? $context["main_menu"] : null), "Anuncios", array()), "url", array()), "html", null, true);
        echo "\" class=\" \">
              <span class=\"pcoded-mtext\">";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["main_menu"]) ? $context["main_menu"] : null), "Anuncios", array()), "title", array()), "html", null, true);
        echo "</span>
            </a>
          </li>
          ";
        // line 12
        echo "
          ";
        // line 13
        if ($this->getAttribute((isset($context["user_login"]) ? $context["user_login"] : null), "id_login", array())) {
            // line 14
            echo "          <li class=\"";
            if (((isset($context["current_url"]) ? $context["current_url"] : null) == $this->getAttribute($this->getAttribute((isset($context["main_menu"]) ? $context["main_menu"] : null), "Crear_Anuncio", array()), "url", array()))) {
                echo " active ";
            }
            echo "\">
            <a href=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["main_menu"]) ? $context["main_menu"] : null), "Crear_Anuncio", array()), "url", array()), "html", null, true);
            echo "\" class=\" \">
              <span class=\"pcoded-mtext\">";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["main_menu"]) ? $context["main_menu"] : null), "Crear_Anuncio", array()), "title", array()), "html", null, true);
            echo "</span>
            </a>
          </li>
          ";
        }
        // line 20
        echo "
          ";
        // line 21
        if ( !$this->getAttribute((isset($context["user_login"]) ? $context["user_login"] : null), "id_login", array())) {
            // line 22
            echo "          <li class=\"";
            if (((isset($context["current_url"]) ? $context["current_url"] : null) == $this->getAttribute($this->getAttribute((isset($context["main_menu"]) ? $context["main_menu"] : null), "RegistrarUsuario", array()), "url", array()))) {
                echo " active ";
            }
            echo "\">
            <a href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["main_menu"]) ? $context["main_menu"] : null), "RegistrarUsuario", array()), "url", array()), "html", null, true);
            echo "\" class=\" \">
              <span class=\"pcoded-mtext\">";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["main_menu"]) ? $context["main_menu"] : null), "RegistrarUsuario", array()), "title", array()), "html", null, true);
            echo "</span>
            </a>
          </li>
          ";
        }
        // line 28
        echo "
          ";
        // line 29
        if ($this->getAttribute((isset($context["user_login"]) ? $context["user_login"] : null), "id_login", array())) {
            // line 30
            echo "          <li class=\"";
            if (((isset($context["current_url"]) ? $context["current_url"] : null) == $this->getAttribute($this->getAttribute((isset($context["main_menu"]) ? $context["main_menu"] : null), "PerfilUsuario", array()), "url", array()))) {
                echo " active ";
            }
            echo "\">
            <a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["main_menu"]) ? $context["main_menu"] : null), "PerfilUsuario", array()), "url", array()), "html", null, true);
            echo "\" class=\"\">
              <span class=\"pcoded-mtext\">";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["main_menu"]) ? $context["main_menu"] : null), "PerfilUsuario", array()), "title", array()), "html", null, true);
            echo "</span>
            </a>
          </li>
          ";
        }
        // line 36
        echo "
          ";
        // line 37
        if ($this->getAttribute((isset($context["user_login"]) ? $context["user_login"] : null), "id_login", array())) {
            // line 38
            echo "          <li class=\"";
            if (((isset($context["current_url"]) ? $context["current_url"] : null) == $this->getAttribute($this->getAttribute((isset($context["main_menu"]) ? $context["main_menu"] : null), "cerrar_sesion", array()), "url", array()))) {
                echo " active ";
            }
            echo "\">
            <a href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["main_menu"]) ? $context["main_menu"] : null), "cerrar_sesion", array()), "url", array()), "html", null, true);
            echo "\" class=\"\">
              <span class=\"pcoded-mtext\">";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["main_menu"]) ? $context["main_menu"] : null), "cerrar_sesion", array()), "title", array()), "html", null, true);
            echo "</span>
            </a>
          </li>
          ";
        } else {
            // line 44
            echo "          <li class=\"";
            if (((isset($context["current_url"]) ? $context["current_url"] : null) == $this->getAttribute($this->getAttribute((isset($context["main_menu"]) ? $context["main_menu"] : null), "login", array()), "url", array()))) {
                echo " active ";
            }
            echo "\">
            <a href=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["main_menu"]) ? $context["main_menu"] : null), "login", array()), "url", array()), "html", null, true);
            echo "\" class=\"\">
              <span class=\"pcoded-mtext\">";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["main_menu"]) ? $context["main_menu"] : null), "login", array()), "title", array()), "html", null, true);
            echo "</span>
            </a>
          </li>
          ";
        }
        // line 50
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
        return array (  152 => 50,  145 => 46,  141 => 45,  134 => 44,  127 => 40,  123 => 39,  116 => 38,  114 => 37,  111 => 36,  104 => 32,  100 => 31,  93 => 30,  91 => 29,  88 => 28,  81 => 24,  77 => 23,  70 => 22,  68 => 21,  65 => 20,  58 => 16,  54 => 15,  47 => 14,  45 => 13,  42 => 12,  36 => 8,  32 => 7,  25 => 6,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<nav class=\"pcoded-navbar\">
  <div class=\"pcoded-inner-navbar main-menu\"style=\"background-color: #233237;\">
    <div class=\"boxed-layout\">
      <ul class=\"pcoded-item\">
          {# {% if not user_login.id_login %} #}
          <li class=\"{% if current_url == main_menu.Anuncios.url %} active {% endif %}\">
            <a href=\"{{ main_menu.Anuncios.url }}\" class=\" \">
              <span class=\"pcoded-mtext\">{{ main_menu.Anuncios.title }}</span>
            </a>
          </li>
          {# {% endif %} #}

          {% if user_login.id_login %}
          <li class=\"{% if current_url == main_menu.Crear_Anuncio.url %} active {% endif %}\">
            <a href=\"{{ main_menu.Crear_Anuncio.url }}\" class=\" \">
              <span class=\"pcoded-mtext\">{{ main_menu.Crear_Anuncio.title }}</span>
            </a>
          </li>
          {% endif %}

          {% if not user_login.id_login %}
          <li class=\"{% if current_url == main_menu.RegistrarUsuario.url %} active {% endif %}\">
            <a href=\"{{ main_menu.RegistrarUsuario.url }}\" class=\" \">
              <span class=\"pcoded-mtext\">{{ main_menu.RegistrarUsuario.title }}</span>
            </a>
          </li>
          {% endif %}

          {% if user_login.id_login %}
          <li class=\"{% if current_url == main_menu.PerfilUsuario.url %} active {% endif %}\">
            <a href=\"{{ main_menu.PerfilUsuario.url }}\" class=\"\">
              <span class=\"pcoded-mtext\">{{ main_menu.PerfilUsuario.title }}</span>
            </a>
          </li>
          {% endif %}

          {% if user_login.id_login %}
          <li class=\"{% if current_url == main_menu.cerrar_sesion.url %} active {% endif %}\">
            <a href=\"{{ main_menu.cerrar_sesion.url }}\" class=\"\">
              <span class=\"pcoded-mtext\">{{ main_menu.cerrar_sesion.title }}</span>
            </a>
          </li>
          {% else %}
          <li class=\"{% if current_url == main_menu.login.url %} active {% endif %}\">
            <a href=\"{{ main_menu.login.url }}\" class=\"\">
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
