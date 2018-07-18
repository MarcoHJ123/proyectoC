<?php
/*
|---------------------------------------------------------------------------------------------------
| View Service
|---------------------------------------------------------------------------------------------------
*/
$view = $container['view'];
$view_env = $view->getEnvironment();

/*
|---------------------------------------------------------------------------------------------------
| Flash variable for all views
|---------------------------------------------------------------------------------------------------
*/
$view_env->addGlobal( 'flash', $container->flash );


/*
|---------------------------------------------------------------------------------------------------
| Activar Items del menú principal
|---------------------------------------------------------------------------------------------------*/

$uri = $container->get('request')->getUri();
$base_url = $uri->getBaseUrl();
$router = $container->get('router');


$menu = array(
  'Anuncios' => array(
    'title' => 'Anuncios',
    'url'	  => $base_url.$router->pathFor('Anuncios'),
  ),
  'CrearAnuncio' => array(
    'title' => 'Anunciar',
    'url'   => $base_url.$router->pathFor('CrearAnuncio'),
  ),
  'login' => array(
    'title' => 'Iniciar Sesión',
    'url'   => $base_url.$router->pathFor('pagina_login'),
  ),
  'RegistrarUsuario' => array(
    'title' => 'Registrar Usuario',
    'url'   => $base_url.$router->pathFor('RegistrarUsuario'),
  ),
	// 'cronograma' => array(
 //    'title' => 'Cronograma Citas',
 //    'url'	  => $base_url.$router->pathFor('cronograma_inicio'),
 //  ),
 //  'login' => array(
 //    'title' => 'Iniciar Sesión',
 //    'url'	  => $base_url.$router->pathFor('pagina_login'),
 //  ),
 //  'cerrar_sesion' => array(
 //    'title' => 'Cerrar Sesión',
 //    'url'	  => $base_url.$router->pathFor('cerrar_sesion'),
 //  ),
 //  'ajustes' => array(
 //    'title' => 'Ajustes',
 //    'url'	  => $base_url.$router->pathFor('ajustes'),
  // ),
);

$view_env->addGlobal( 'current_url', $container->get('request')->getUri() );
$view_env->addGlobal( 'main_menu', $menu );

/*
|---------------------------------------------------------------------------------------------------
| Para verificar si estamos en producción o en desarrollo
|---------------------------------------------------------------------------------------------------
*/
$s_file = get_settings_file( 'otros-ajustes.json' );
$en_produccion = false;
if( is_array( $s_file ) ) {
  $en_produccion = $s_file['en-produccion'];
}
$view_env->addGlobal( 'en_produccion', $en_produccion ? 'true' : 'false' );


/*
|---------------------------------------------------------------------------------------------------
| Datos del usuario conectado
|---------------------------------------------------------------------------------------------------

$user_login = array();
$esta_conectado = $container->Login->esta_conectado();
$logo_inicio_url = $base_url;
if( $esta_conectado ){
  $user_login = $container->session->user_login;
  $logo_inicio_url = $menu['cronograma']['url'];
}


$view_env->addGlobal( 'user_login', $user_login );
$view_env->addGlobal( 'logo_inicio_url', $logo_inicio_url );*/

