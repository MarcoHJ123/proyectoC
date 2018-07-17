<?php

/* templates/master/inc/js-files.twig */
class __TwigTemplate_39f60bcb30be2d75f87e377a3f1a923b148be44cfb121213b201a319bb59f935 extends Twig_Template
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
        echo "<!-- Required Jquery -->
<script type=\"text/javascript\" src=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/public/bower_components/jquery/js/jquery.min.js\"></script>
<script type=\"text/javascript\" src=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/public/bower_components/jquery-ui/js/jquery-ui.min.js\"></script>
<script type=\"text/javascript\" src=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/public/bower_components/popper.js/js/popper.min.js\"></script>
<script type=\"text/javascript\" src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/public/bower_components/bootstrap/js/bootstrap.min.js\"></script>
";
        // line 8
        echo "
<!-- waves js -->
<script src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/public/assets/pages/waves/js/waves.min.js\"></script>

<!-- jquery slimscroll js -->
<script type=\"text/javascript\" src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/public/bower_components/jquery-slimscroll/js/jquery.slimscroll.js\"></script>

<!-- Switch component js -->
";
        // line 17
        echo "
<!-- Tags js -->
";
        // line 21
        echo "
<!-- Max-length js -->
<script type=\"text/javascript\" src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/public/bower_components/bootstrap-maxlength/js/bootstrap-maxlength.js\"></script>


<!-- Custom js -->
<script type=\"text/javascript\" src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/public/assets/js/classie.js\"></script>
";
        // line 29
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/public/assets/js/pcoded.min.js\"></script>
<script src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/public/assets/js/vertical/menu/menu-hori-fixed.js\"></script>
<script type=\"text/javascript\" src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/public/assets/js/script.js\"></script>


<!-- App General JS -->
<script type=\"text/javascript\" src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/public/assets/app/js/app.js\"></script>

";
    }

    public function getTemplateName()
    {
        return "templates/master/inc/js-files.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 35,  82 => 31,  78 => 30,  73 => 29,  69 => 27,  62 => 23,  58 => 21,  54 => 17,  48 => 13,  42 => 10,  38 => 8,  34 => 5,  30 => 4,  26 => 3,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!-- Required Jquery -->
<script type=\"text/javascript\" src=\"{{ base_url() }}/public/bower_components/jquery/js/jquery.min.js\"></script>
<script type=\"text/javascript\" src=\"{{ base_url() }}/public/bower_components/jquery-ui/js/jquery-ui.min.js\"></script>
<script type=\"text/javascript\" src=\"{{ base_url() }}/public/bower_components/popper.js/js/popper.min.js\"></script>
<script type=\"text/javascript\" src=\"{{ base_url() }}/public/bower_components/bootstrap/js/bootstrap.min.js\"></script>
{# <script type=\"text/javascript\" src=\"{{ base_url() }}/public/bower_components/bootstrap/js/jquery-1.11.1.min.js\"></script> #}
{# <script type=\"text/javascript\" src=\"{{ base_url() }}/public/bower_components/bootstrap/js/jquery.backstretch.min.js\"></script> #}

<!-- waves js -->
<script src=\"{{ base_url() }}/public/assets/pages/waves/js/waves.min.js\"></script>

<!-- jquery slimscroll js -->
<script type=\"text/javascript\" src=\"{{ base_url() }}/public/bower_components/jquery-slimscroll/js/jquery.slimscroll.js\"></script>

<!-- Switch component js -->
{# <script type=\"text/javascript\" src=\"{{ base_url() }}/public/bower_components/switchery/js/switchery.min.js\"></script> #}

<!-- Tags js -->
{# <script type=\"text/javascript\" src=\"{{ base_url() }}/public/bower_components/bootstrap-tagsinput/js/bootstrap-tagsinput.js\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/typeahead.js/0.10.4/typeahead.bundle.min.js\"></script> #}

<!-- Max-length js -->
<script type=\"text/javascript\" src=\"{{ base_url() }}/public/bower_components/bootstrap-maxlength/js/bootstrap-maxlength.js\"></script>


<!-- Custom js -->
<script type=\"text/javascript\" src=\"{{ base_url() }}/public/assets/js/classie.js\"></script>
{# <script type=\"text/javascript\" src=\"{{ base_url() }}/public/assets/js/modalEffects.js\"></script> #}
<script src=\"{{ base_url() }}/public/assets/js/pcoded.min.js\"></script>
<script src=\"{{ base_url() }}/public/assets/js/vertical/menu/menu-hori-fixed.js\"></script>
<script type=\"text/javascript\" src=\"{{ base_url() }}/public/assets/js/script.js\"></script>


<!-- App General JS -->
<script type=\"text/javascript\" src=\"{{ base_url() }}/public/assets/app/js/app.js\"></script>

", "templates/master/inc/js-files.twig", "C:\\xampp\\htdocs\\PROYECTO-U\\app\\Views\\templates\\master\\inc\\js-files.twig");
    }
}
