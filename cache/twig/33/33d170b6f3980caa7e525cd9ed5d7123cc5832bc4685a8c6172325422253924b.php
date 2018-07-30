<?php

/* perfil-usuario/inc/detalle.twig */
class __TwigTemplate_70665903e97f83140e860bbe992b15355b4f582d95e08997c3197fb60c942a76 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("templates/master/master.twig", "perfil-usuario/inc/detalle.twig", 1);
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
        if ((isset($context["aportes"]) ? $context["aportes"] : null)) {
            // line 4
            echo "<div class=\"card card-creacion-detalle\">
  <div class=\"card-header text-center\" >";
            // line 7
            echo "    <h3>PERSONA DESAPARECIDA</h3>
\t</div>
\t<div class=\"card-block form-crear-aporte\">
\t\t<div class=\"col-sm-12 col-md-12 col-lg-12\">
\t\t\t<h4 style=\"padding-top: 15px;\">APORTES</h4>
\t\t\t<div class=\"col-md-12 p-t-12\">
\t\t  \t<label class=\"col-form-label\">Seleccionar lugar donde fue visto</label>
\t\t  \t<div class=\"col-sm-12 col-md-12 col-lg-12\">
\t\t\t\t\t<div id=\"capa-mapa\" style=\"height:278px\"></div>
\t\t\t\t</div>
\t\t  </div>
";
            // line 18
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["aportes"]);
            foreach ($context['_seq'] as $context["_key"] => $context["aportes"]) {
                // line 19
                echo "
            <div class=\"col-md-12 p-t-12\" for=\"descripcion\">
\t\t    <label class=\"col-form-label\">Descripcion</label>
\t\t    <textarea type=\"text\" name=\"descripcion\" placeholder=\"Describir breve como ocurrio el acontecimiento\" class=\"form-control\" id=\"descripcion\" disabled>";
                // line 22
                echo twig_escape_filter($this->env, $this->getAttribute($context["aportes"], "descripcion", array()), "html", null, true);
                echo "</textarea>
\t\t  </div>

";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['aportes'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            echo "\t\t</div>
        <div class=\"col-md-12 p-t-12 text-center\">
         <a class=\"btn btn-mat waves-light btn-inverse text-center\" href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
            echo "/perfil\">REGRESAR</a>
        </div>
\t</div>
</div>

";
        } else {
            // line 34
            echo "    <br>
    <br>
\t<p>No hay datos del aportes</p> <div class=\"col-md-12 p-t-12 text-center\">
         <a class=\"btn btn-mat waves-light btn-inverse text-center\" href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
            echo "/perfil\">REGRESAR</a>
        </div>
";
        }
    }

    // line 42
    public function block_scripts($context, array $blocks = array())
    {
        // line 43
        echo "  ";
        $this->displayParentBlock("scripts", $context, $blocks);
        echo "
  <script type=\"text/javascript\" src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyCV-quRftERbHa_3kEUVCTOWPgvl9bA1ao&sensor=false\"></script>
  <script type=\"text/javascript\">
var misPuntos = [
    [\"Ultima posicion\", \"-6.7803976203869\", \"-79.86725174953096\", \"icon1\", \"<div>html</div>\"],
    //nombre, latitud, longitud, definir nombre icono, etiqueta html
];

function inicializaGoogleMaps() {
    // Coordenadas del centro de nuestro recuadro principal
    var x =-6.7803976203869;
    var y = -79.86725174953096;

    var mapOptions = {
        zoom: 18,
        center: new google.maps.LatLng(x, y),
        mapTypeId: google.maps.MapTypeId.ROADMAP
    }

    var map = new google.maps.Map(document.getElementById(\"capa-mapa\"), mapOptions);
    setGoogleMarkers(map, misPuntos);
}

var markers = Array();
var infowindowActivo = false;
function setGoogleMarkers(map, locations) {
    // Definimos los iconos a utilizar con sus medidas
    var icon1 = new google.maps.MarkerImage(
        \"https://www.vinx.info/uploads/editor/map-green.png\",
        new google.maps.Size(20, 30)
    );

    for(var i=0; i<locations.length; i++) {
        var elPunto = locations[i];
        var myLatLng = new google.maps.LatLng(elPunto[1], elPunto[2]);

        markers[i]=new google.maps.Marker({
            position: myLatLng,
            map: map,
            icon: eval(elPunto[3]),
            title: elPunto[0]
        });
        markers[i].infoWindow=new google.maps.InfoWindow({
            content: elPunto[4]
        });
        google.maps.event.addListener(markers[i], 'click', function(){
            if(infowindowActivo)
                infowindowActivo.close();
            infowindowActivo = this.infoWindow;
            infowindowActivo.open(map, this);
        });
    }
}
inicializaGoogleMaps();
</script>
";
    }

    public function getTemplateName()
    {
        return "perfil-usuario/inc/detalle.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 43,  95 => 42,  87 => 37,  82 => 34,  73 => 28,  69 => 26,  59 => 22,  54 => 19,  50 => 18,  37 => 7,  34 => 4,  32 => 3,  29 => 2,  11 => 1,);
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
{% if aportes %}
<div class=\"card card-creacion-detalle\">
  <div class=\"card-header text-center\" >{#  style=\"color: white;
background-color: #ff5252;\" #}
    <h3>PERSONA DESAPARECIDA</h3>
\t</div>
\t<div class=\"card-block form-crear-aporte\">
\t\t<div class=\"col-sm-12 col-md-12 col-lg-12\">
\t\t\t<h4 style=\"padding-top: 15px;\">APORTES</h4>
\t\t\t<div class=\"col-md-12 p-t-12\">
\t\t  \t<label class=\"col-form-label\">Seleccionar lugar donde fue visto</label>
\t\t  \t<div class=\"col-sm-12 col-md-12 col-lg-12\">
\t\t\t\t\t<div id=\"capa-mapa\" style=\"height:278px\"></div>
\t\t\t\t</div>
\t\t  </div>
{% for aportes in aportes %}

            <div class=\"col-md-12 p-t-12\" for=\"descripcion\">
\t\t    <label class=\"col-form-label\">Descripcion</label>
\t\t    <textarea type=\"text\" name=\"descripcion\" placeholder=\"Describir breve como ocurrio el acontecimiento\" class=\"form-control\" id=\"descripcion\" disabled>{{aportes.descripcion}}</textarea>
\t\t  </div>

{% endfor %}
\t\t</div>
        <div class=\"col-md-12 p-t-12 text-center\">
         <a class=\"btn btn-mat waves-light btn-inverse text-center\" href=\"{{ base_url() }}/perfil\">REGRESAR</a>
        </div>
\t</div>
</div>

{% else %}
    <br>
    <br>
\t<p>No hay datos del aportes</p> <div class=\"col-md-12 p-t-12 text-center\">
         <a class=\"btn btn-mat waves-light btn-inverse text-center\" href=\"{{ base_url() }}/perfil\">REGRESAR</a>
        </div>
{% endif %}
{% endblock content %}

{% block scripts %}
  {{ parent() }}
  <script type=\"text/javascript\" src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyCV-quRftERbHa_3kEUVCTOWPgvl9bA1ao&sensor=false\"></script>
  <script type=\"text/javascript\">
var misPuntos = [
    [\"Ultima posicion\", \"-6.7803976203869\", \"-79.86725174953096\", \"icon1\", \"<div>html</div>\"],
    //nombre, latitud, longitud, definir nombre icono, etiqueta html
];

function inicializaGoogleMaps() {
    // Coordenadas del centro de nuestro recuadro principal
    var x =-6.7803976203869;
    var y = -79.86725174953096;

    var mapOptions = {
        zoom: 18,
        center: new google.maps.LatLng(x, y),
        mapTypeId: google.maps.MapTypeId.ROADMAP
    }

    var map = new google.maps.Map(document.getElementById(\"capa-mapa\"), mapOptions);
    setGoogleMarkers(map, misPuntos);
}

var markers = Array();
var infowindowActivo = false;
function setGoogleMarkers(map, locations) {
    // Definimos los iconos a utilizar con sus medidas
    var icon1 = new google.maps.MarkerImage(
        \"https://www.vinx.info/uploads/editor/map-green.png\",
        new google.maps.Size(20, 30)
    );

    for(var i=0; i<locations.length; i++) {
        var elPunto = locations[i];
        var myLatLng = new google.maps.LatLng(elPunto[1], elPunto[2]);

        markers[i]=new google.maps.Marker({
            position: myLatLng,
            map: map,
            icon: eval(elPunto[3]),
            title: elPunto[0]
        });
        markers[i].infoWindow=new google.maps.InfoWindow({
            content: elPunto[4]
        });
        google.maps.event.addListener(markers[i], 'click', function(){
            if(infowindowActivo)
                infowindowActivo.close();
            infowindowActivo = this.infoWindow;
            infowindowActivo.open(map, this);
        });
    }
}
inicializaGoogleMaps();
</script>
{% endblock %}", "perfil-usuario/inc/detalle.twig", "C:\\xampp\\htdocs\\proyectoC\\app\\Views\\perfil-usuario\\inc\\detalle.twig");
    }
}
