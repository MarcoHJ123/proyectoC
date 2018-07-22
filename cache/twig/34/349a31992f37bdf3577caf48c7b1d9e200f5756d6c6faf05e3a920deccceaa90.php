<?php

/* login/inc/login-form.twig */
class __TwigTemplate_cd0ea4690d7e7dd118f4fca19fe40354048aef2c573e268d18fc0008715048cd extends Twig_Template
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
        // line 66
        echo "

<form class=\"\" method=\"post\" action=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->pathFor("procesar_login"), "html", null, true);
        echo "\">
  <div class=\"auth-box card\">

    <div class=\"card-block m-t-20\" style=\"padding: 30px;\">

      ";
        // line 73
        $this->loadTemplate("templates/inc/messages.twig", "login/inc/login-form.twig", 73)->display($context);
        // line 74
        echo "
      <div class=\"row m-b-20\">
        <div class=\"col-md-12\">
          <h3 class=\"text-center\">Iniciar Sesión</h3>
        </div>
        <!-- <div class=\"col-md-12 m-t-15\">
          <div class=\"alert alert-danger icons-alert fix-icon-alert\">
            <p>Credenciales incorectas</p>
          </div>
        </div> -->
      </div>
      <div class=\"form-group m-t-20\">
        <label class=\"float-label\">Usuario</label>
        <input type=\"text\" name=\"usuario\" class=\"form-control\" required=\"\">
        <!-- <span class=\"messages\"><p class=\"text-danger error\">Email incorrecto</p></span> -->
      </div>
      <div class=\"form-group m-t-30\">
        <label class=\"float-label\">Contraseña</label>
        <input type=\"password\" name=\"password\" class=\"form-control\" required=\"\">
        <span class=\"messages\"></span>
      </div>

      <div class=\"row m-t-20\">
        <div class=\"col-md-12\">
          <button type=\"submit\" class=\"btn waves-effect waves-light hor-grd btn-grd-inverse btn-block text-center m-b-20\">Iniciar Sesión</button>
        </div>
      </div>
        <div class=\"row m-t-20\">
        <div class=\"col-md-12\">
          < <a href='proyectoC/facebook/login.php'>aqu&iacute;</a>
        </div>
      </div>


    </div>
  </div>
</form>
";
    }

    public function getTemplateName()
    {
        return "login/inc/login-form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 74,  31 => 73,  23 => 68,  19 => 66,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# <section class=\"login-block\">
            <!-- Container-fluid starts -->
            <div class=\"container-fluid\">
                <div class=\"row\">
                    <div class=\"col-sm-12\">
                        <!-- Authentication card start -->
                        <form class=\"md-float-material form-material m-t-40 m-b-40\">
                            <div class=\"auth-box card\">
                                <div class=\"card-block\">
                                    <div class=\"row m-b-20\">
                                        <div class=\"col-md-12\">
                                            <h3 class=\"text-center txt-primary\">Sign In</h3>
                                        </div>
                                    </div>
                                    <div class=\"row m-b-20\">
                                        <div class=\"col-md-6\">
                                            <button class=\"btn btn-facebook m-b-20 btn-block\"><i class=\"icofont icofont-social-facebook\"></i>facebook</button>
                                        </div>
                                        <div class=\"col-md-6\">
                                            <button class=\"btn btn-twitter m-b-20 btn-block\"><i class=\"icofont icofont-social-twitter\"></i>twitter</button>
                                        </div>
                                    </div>
                                    <p class=\"text-muted text-center p-b-5\">Sign in with your regular account</p>
                                    <div class=\"form-group form-primary\">
                                        <input type=\"text\" name=\"user-name\" class=\"form-control\" required=\"\">
                                        <span class=\"form-bar\"></span>
                                        <label class=\"float-label\">Username</label>
                                    </div>
                                    <div class=\"form-group form-primary\">
                                        <input type=\"password\" name=\"password\" class=\"form-control\" required=\"\">
                                        <span class=\"form-bar\"></span>
                                        <label class=\"float-label\">Password</label>
                                    </div>
                                    <div class=\"row m-t-25 text-left\">
                                        <div class=\"col-12\">
                                            <div class=\"checkbox-fade fade-in-primary\">
                                                <label>
                                                    <input type=\"checkbox\" value=\"\">
                                                    <span class=\"cr\"><i class=\"cr-icon icofont icofont-ui-check txt-primary\"></i></span>
                                                    <span class=\"text-inverse\">Remember me</span>
                                                </label>
                                            </div>
                                            <div class=\"forgot-phone text-right float-right\">
                                                <a href=\"auth-reset-password.html\" class=\"text-right f-w-600\"> Forgot Password?</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"row m-t-30\">
                                        <div class=\"col-md-12\">
                                            <button type=\"button\" class=\"btn btn-primary btn-md btn-block waves-effect text-center m-b-20\">LOGIN</button>
                                        </div>
                                    </div>
                                    <p class=\"text-inverse text-left\">Don't have an account?<a href=\"auth-sign-up-social.html\"> <b>Register here </b></a>for free!</p>
                                </div>
                            </div>
                        </form>
                        <!-- Authentication card end -->
                </div>
                <!-- end of col-sm-12 -->
            </div>
            <!-- end of row -->
        </div>
        <!-- end of container-fluid -->

    </section> #}


<form class=\"\" method=\"post\" action=\"{{ path_for('procesar_login') }}\">
  <div class=\"auth-box card\">

    <div class=\"card-block m-t-20\" style=\"padding: 30px;\">

      {% include 'templates/inc/messages.twig' %}

      <div class=\"row m-b-20\">
        <div class=\"col-md-12\">
          <h3 class=\"text-center\">Iniciar Sesión</h3>
        </div>
        <!-- <div class=\"col-md-12 m-t-15\">
          <div class=\"alert alert-danger icons-alert fix-icon-alert\">
            <p>Credenciales incorectas</p>
          </div>
        </div> -->
      </div>
      <div class=\"form-group m-t-20\">
        <label class=\"float-label\">Usuario</label>
        <input type=\"text\" name=\"usuario\" class=\"form-control\" required=\"\">
        <!-- <span class=\"messages\"><p class=\"text-danger error\">Email incorrecto</p></span> -->
      </div>
      <div class=\"form-group m-t-30\">
        <label class=\"float-label\">Contraseña</label>
        <input type=\"password\" name=\"password\" class=\"form-control\" required=\"\">
        <span class=\"messages\"></span>
      </div>

      <div class=\"row m-t-20\">
        <div class=\"col-md-12\">
          <button type=\"submit\" class=\"btn waves-effect waves-light hor-grd btn-grd-inverse btn-block text-center m-b-20\">Iniciar Sesión</button>
        </div>
      </div>
        <div class=\"row m-t-20\">
        <div class=\"col-md-12\">
          < <a href='proyectoC/facebook/login.php'>aqu&iacute;</a>
        </div>
      </div>


    </div>
  </div>
</form>
", "login/inc/login-form.twig", "C:\\xampp\\htdocs\\proyectoC\\app\\Views\\login\\inc\\login-form.twig");
    }
}
