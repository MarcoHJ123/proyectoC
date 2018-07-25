<?php
/*
|---------------------------------------------------------------------------------------------------
| Controladores
|---------------------------------------------------------------------------------------------------
*/

$container['Ajustes'] = function( $container ){
  return new App\Controllers\Ajustes();
};
$container['ApiController'] = function( $container ){
  return new App\Controllers\ApiController();
};
$container['CrearAnuncio'] = function( $container ){
  return new App\Controllers\CrearAnuncio();
};
$container['CrearAnuncioD'] = function( $container ){
  return new App\Controllers\CrearAnuncioD();
};
$container['CrearAnuncioP'] = function( $container ){
  return new App\Controllers\CrearAnuncioP();
};
$container['ListarAnuncios'] = function( $container ){
  return new App\Controllers\ListarAnuncios();
};
$container['Login'] = function( $container ){
  return new App\Controllers\Login();
};
$container['LoginFb'] = function( $container ){
  return new App\Controllers\LoginFb();
};
$container['PerfilUsuario'] = function( $container ){
  return new App\Controllers\PerfilUsuario();
};
$container['RegistrarAporte'] = function( $container ){
  return new App\Controllers\RegistrarAporte();
};
$container['RegistrarUsuario'] = function( $container ){
  return new App\Controllers\RegistrarUsuario();
};

/*
|---------------------------------------------------------------------------------------------------
| Database - PDO ODBC
|---------------------------------------------------------------------------------------------------
*/

$container['connections'] = function( $container ) {
  $connections = new App\Includes\Connections();
  $settings = get_settings_file( 'conexiones.json' );
  if( is_array( $settings ) ) {
    $connections->addConnection( CONNECTION_SIJ, $settings[CONNECTION_SIJ] );
  }
  return $connections;
};


/*
|---------------------------------------------------------------------------------------------------
| 404 Page not found
|---------------------------------------------------------------------------------------------------
*/
$container['notFoundHandler'] = function ( $container ) {
  return function ($request, $response) use ( $container ) {
    $view = $container['view'];
    return $view->render( $response->withStatus(404), '404/main.twig', array());
  };
};


