<?php
/*
|---------------------------------------------------------------------------------------------------
| Controladores
|---------------------------------------------------------------------------------------------------
*/
$container['Page'] = function( $container ){
  return new App\Controllers\Page();
};

$container['ConsultaExpediente'] = function( $container ){
  return new App\Controllers\ConsultaExpediente();
};

$container['ListarAnuncios'] = function( $container ){
  return new App\Controllers\ListarAnuncios();
};

$container['CrearAnuncio'] = function( $container ){
  return new App\Controllers\CrearAnuncio();
};
$container['Crea'] = function( $container ){
  return new App\Controllers\ProgramacionCita();
};
$container['Login'] = function( $container ){
  return new App\Controllers\Login();
};
$container['ProgramacionCita'] = function( $container ){
  return new App\Controllers\ProgramacionCita();
};
$container['RegistrarAporte'] = function( $container ){
  return new App\Controllers\RegistrarAporte();
};
$container['LoginFb'] = function( $container ){
  return new App\Controllers\LoginFb();
};
$container['RegistrarUsuario'] = function( $container ){
  return new App\Controllers\RegistrarUsuario();
};

/*
$container['CronogramaCita'] = function( $container ){
  return new App\Controllers\CronogramaCita();
};

$container['Ajustes'] = function( $container ){
  return new App\Controllers\Ajustes();
};



$container['ApiController'] = function( $container ){
  return new App\Controllers\ApiController();
};*/

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



