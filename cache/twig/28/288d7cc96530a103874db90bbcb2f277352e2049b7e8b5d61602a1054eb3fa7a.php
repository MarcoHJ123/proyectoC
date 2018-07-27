<?php

/* templates/master/master.twig */
class __TwigTemplate_66fd1a77963329abb47cf71bb42313c6fb3fa9549a72ca42e170d004fc627b7b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'scripts' => array($this, 'block_scripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"es\">

<head>
  <meta charset=\"utf-8\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
  <!-- Tell the browser to be responsive to screen width -->
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

  <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/public/assets/app/images/logo.png\">
  <title>PERSONAS PERDIDAS Y DESAPARECIDAS</title>

  ";
        // line 13
        $this->loadTemplate("templates/master/inc/css-files.twig", "templates/master/master.twig", 13)->display($context);
        // line 14
        echo "
</head>

<body>

  <!-- [ Pre-loader ] start -->
  ";
        // line 20
        $this->loadTemplate("templates/master/inc/preloader.twig", "templates/master/master.twig", 20)->display($context);
        // line 21
        echo "  <!-- [ Pre-loader ] end -->

  <div id=\"pcoded\" class=\"pcoded\">
    <div class=\"pcoded-overlay-box\"></div>
    <div class=\"pcoded-container navbar-wrapper\">

      ";
        // line 27
        $this->loadTemplate("templates/master/inc/header.twig", "templates/master/master.twig", 27)->display($context);
        // line 28
        echo "
      <div class=\"pcoded-main-container\">
        <div class=\"pcoded-wrapper\">

          <!-- [ navigation menu ] start -->
          ";
        // line 33
        $this->loadTemplate("templates/master/inc/main-nav.twig", "templates/master/master.twig", 33)->display($context);
        // line 34
        echo "          <!-- [ navigation menu ] end -->

          <div class=\"pcoded-content\">

              <!-- [ breadcrumb ] start -->
              ";
        // line 39
        $this->loadTemplate("templates/master/inc/breadcrumb.twig", "templates/master/master.twig", 39)->display($context);
        // line 40
        echo "              <!-- [ breadcrumb ] end -->

              <div class=\"pcoded-inner-content\" >
                <div class=\"main-body\">
                  <div class=\"page-wrapper\">
                    ";
        // line 45
        $this->displayBlock('content', $context, $blocks);
        // line 48
        echo "                <button class=\"btn waves-light btn-icon back-to-top\"><i class=\"icofont icofont-caret-up\" style=\"color:#ecf0f5; margin-right: 0px;\"></i></button>
                  </div><!-- .page-wrapper -->

                </div><!-- .main-body -->

              </div><!-- .pcoded-inner-content-->
          </div><!-- .pcoded-content-->
";
        // line 56
        echo "
        </div>
      </div>
    </div>
  </div>

  ";
        // line 62
        $this->displayBlock('scripts', $context, $blocks);
        // line 110
        echo "
</body>

</html>
";
    }

    // line 45
    public function block_content($context, array $blocks = array())
    {
        // line 46
        echo "
                    ";
    }

    // line 62
    public function block_scripts($context, array $blocks = array())
    {
        // line 63
        echo "    <script type=\"text/javascript\">
    var APP = {
      en_produccion: '";
        // line 65
        echo twig_escape_filter($this->env, (isset($context["en_produccion"]) ? $context["en_produccion"] : null), "html", null, true);
        echo "',
      url: {
        inicio: '";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "',
        Anuncios: '";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->pathFor("Anuncios"), "html", null, true);
        echo "',
      }
    };
    </script>
    ";
        // line 72
        $this->loadTemplate("templates/master/inc/js-files.twig", "templates/master/master.twig", 72)->display($context);
        // line 73
        echo "  <style type=\"text/css\">
.back-to-top {
      position: fixed;
      bottom: 2em;
      right: 0px;
      text-decoration: none;
      /*color: #000000;*/
      background-color: #233237;
      /*font-size: 12px;*/
      /*padding: 1em;*/
      display: none;
    }

    .back-to-top:hover {
      background-color: #233237;
    }
  </style>
  <script>
      jQuery(document).ready(function() {
        var offset = 220;
        var duration = 200;
        jQuery(window).scroll(function() {
          if (jQuery(this).scrollTop() > offset) {
            jQuery('.back-to-top').fadeIn(duration);
          } else {
            jQuery('.back-to-top').fadeOut(duration);
          }
        });

        jQuery('.back-to-top').click(function(event) {
          event.preventDefault();
          jQuery('html, body').animate({scrollTop: 0}, duration);
          return false;
        })
      });
    </script>
  ";
    }

    public function getTemplateName()
    {
        return "templates/master/master.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 73,  145 => 72,  138 => 68,  134 => 67,  129 => 65,  125 => 63,  122 => 62,  117 => 46,  114 => 45,  106 => 110,  104 => 62,  96 => 56,  87 => 48,  85 => 45,  78 => 40,  76 => 39,  69 => 34,  67 => 33,  60 => 28,  58 => 27,  50 => 21,  48 => 20,  40 => 14,  38 => 13,  32 => 10,  21 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"es\">

<head>
  <meta charset=\"utf-8\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
  <!-- Tell the browser to be responsive to screen width -->
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

  <link rel=\"icon\" type=\"image/png\" href=\"{{ base_url() }}/public/assets/app/images/logo.png\">
  <title>PERSONAS PERDIDAS Y DESAPARECIDAS</title>

  {% include 'templates/master/inc/css-files.twig' %}

</head>

<body>

  <!-- [ Pre-loader ] start -->
  {% include 'templates/master/inc/preloader.twig' %}
  <!-- [ Pre-loader ] end -->

  <div id=\"pcoded\" class=\"pcoded\">
    <div class=\"pcoded-overlay-box\"></div>
    <div class=\"pcoded-container navbar-wrapper\">

      {% include 'templates/master/inc/header.twig' %}

      <div class=\"pcoded-main-container\">
        <div class=\"pcoded-wrapper\">

          <!-- [ navigation menu ] start -->
          {% include 'templates/master/inc/main-nav.twig' %}
          <!-- [ navigation menu ] end -->

          <div class=\"pcoded-content\">

              <!-- [ breadcrumb ] start -->
              {% include 'templates/master/inc/breadcrumb.twig' %}
              <!-- [ breadcrumb ] end -->

              <div class=\"pcoded-inner-content\" >
                <div class=\"main-body\">
                  <div class=\"page-wrapper\">
                    {% block content %}

                    {% endblock %}
                <button class=\"btn waves-light btn-icon back-to-top\"><i class=\"icofont icofont-caret-up\" style=\"color:#ecf0f5; margin-right: 0px;\"></i></button>
                  </div><!-- .page-wrapper -->

                </div><!-- .main-body -->

              </div><!-- .pcoded-inner-content-->
          </div><!-- .pcoded-content-->
{# {% include 'templates/master/inc/footer.twig' %} #}

        </div>
      </div>
    </div>
  </div>

  {% block scripts %}
    <script type=\"text/javascript\">
    var APP = {
      en_produccion: '{{ en_produccion }}',
      url: {
        inicio: '{{ base_url() }}',
        Anuncios: '{{ path_for(\"Anuncios\") }}',
      }
    };
    </script>
    {% include 'templates/master/inc/js-files.twig' %}
  <style type=\"text/css\">
.back-to-top {
      position: fixed;
      bottom: 2em;
      right: 0px;
      text-decoration: none;
      /*color: #000000;*/
      background-color: #233237;
      /*font-size: 12px;*/
      /*padding: 1em;*/
      display: none;
    }

    .back-to-top:hover {
      background-color: #233237;
    }
  </style>
  <script>
      jQuery(document).ready(function() {
        var offset = 220;
        var duration = 200;
        jQuery(window).scroll(function() {
          if (jQuery(this).scrollTop() > offset) {
            jQuery('.back-to-top').fadeIn(duration);
          } else {
            jQuery('.back-to-top').fadeOut(duration);
          }
        });

        jQuery('.back-to-top').click(function(event) {
          event.preventDefault();
          jQuery('html, body').animate({scrollTop: 0}, duration);
          return false;
        })
      });
    </script>
  {% endblock %}

</body>

</html>
", "templates/master/master.twig", "C:\\xampp\\htdocs\\proyectoC\\app\\Views\\templates\\master\\master.twig");
    }
}
