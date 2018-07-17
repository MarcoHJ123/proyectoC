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

  <!-- Favicon icon -->
  ";
        // line 12
        echo "  <title>PERSONAS PERDIDAS Y DESAPARECIDAS</title>

  ";
        // line 14
        $this->loadTemplate("templates/master/inc/css-files.twig", "templates/master/master.twig", 14)->display($context);
        // line 15
        echo "
</head>

<body>

  <!-- [ Pre-loader ] start -->
  ";
        // line 21
        $this->loadTemplate("templates/master/inc/preloader.twig", "templates/master/master.twig", 21)->display($context);
        // line 22
        echo "  <!-- [ Pre-loader ] end -->

  <div id=\"pcoded\" class=\"pcoded\">
    <div class=\"pcoded-overlay-box\"></div>
    <div class=\"pcoded-container navbar-wrapper\">

      ";
        // line 28
        $this->loadTemplate("templates/master/inc/header.twig", "templates/master/master.twig", 28)->display($context);
        // line 29
        echo "
      <div class=\"pcoded-main-container\">
        <div class=\"pcoded-wrapper\">

          <!-- [ navigation menu ] start -->
          ";
        // line 34
        $this->loadTemplate("templates/master/inc/main-nav.twig", "templates/master/master.twig", 34)->display($context);
        // line 35
        echo "          <!-- [ navigation menu ] end -->

          <div class=\"pcoded-content\">

              <!-- [ breadcrumb ] start -->
              ";
        // line 40
        $this->loadTemplate("templates/master/inc/breadcrumb.twig", "templates/master/master.twig", 40)->display($context);
        // line 41
        echo "              <!-- [ breadcrumb ] end -->

              <div class=\"pcoded-inner-content\" >
                <div class=\"main-body\">
                  <div class=\"page-wrapper\">
                    ";
        // line 46
        $this->displayBlock('content', $context, $blocks);
        // line 49
        echo "                <button class=\"btn waves-light btn-icon back-to-top\"><i class=\"icofont icofont-caret-up\" style=\"color:#ecf0f5; margin-right: 0px;\"></i></button>
                  </div><!-- .page-wrapper -->

                </div><!-- .main-body -->

              </div><!-- .pcoded-inner-content-->
          </div><!-- .pcoded-content-->
";
        // line 57
        echo "
        </div>
      </div>
    </div>
  </div>

  ";
        // line 63
        $this->displayBlock('scripts', $context, $blocks);
        // line 111
        echo "
</body>

</html>
";
    }

    // line 46
    public function block_content($context, array $blocks = array())
    {
        // line 47
        echo "
                    ";
    }

    // line 63
    public function block_scripts($context, array $blocks = array())
    {
        // line 64
        echo "    <script type=\"text/javascript\">
    var APP = {
      en_produccion: '";
        // line 66
        echo twig_escape_filter($this->env, (isset($context["en_produccion"]) ? $context["en_produccion"] : null), "html", null, true);
        echo "',
      url: {
        inicio: '";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "',
        cronograma: '";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->pathFor("Anuncios"), "html", null, true);
        echo "',
      }
    };
    </script>
    ";
        // line 73
        $this->loadTemplate("templates/master/inc/js-files.twig", "templates/master/master.twig", 73)->display($context);
        // line 74
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
        return array (  146 => 74,  144 => 73,  137 => 69,  133 => 68,  128 => 66,  124 => 64,  121 => 63,  116 => 47,  113 => 46,  105 => 111,  103 => 63,  95 => 57,  86 => 49,  84 => 46,  77 => 41,  75 => 40,  68 => 35,  66 => 34,  59 => 29,  57 => 28,  49 => 22,  47 => 21,  39 => 15,  37 => 14,  33 => 12,  21 => 1,);
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

  <!-- Favicon icon -->
  {# <link rel=\"icon\" type=\"image/png\" sizes=\"16x16\" href=\"{{ base_url() }}/public/assets/app/images/favicon.png\"> #}
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
        cronograma: '{{ path_for(\"Anuncios\") }}',
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
", "templates/master/master.twig", "C:\\xampp\\htdocs\\PROYECTO-U\\app\\Views\\templates\\master\\master.twig");
    }
}
