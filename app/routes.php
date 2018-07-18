<?php

/*
|---------------------------------------------------------------------------------------------------
| Routes
|---------------------------------------------------------------------------------------------------
*/
$app->group( '', function(){
$this->get( '/', 'ListarAnuncios:Anuncios' )->setName( 'Anuncios' );

$this->get( '/crear-anuncio/', 'CrearAnuncio:inicio' )->setName( 'CrearAnuncio' );
$this->get( '/crear-anuncio/desaparecido', 'CrearAnuncio:inicioDesaparecido' )->setName( 'CrearAnuncioD' );
$this->get( '/crear-anuncio/perdido', 'CrearAnuncio:inicioPerdido' )->setName( 'CrearAnuncioP' );
$this->post( '/ajax/crear-anuncio', 'CrearAnuncio:crear_anuncio' )->setName( 'CrearAnuncio' );

$this->get( '/login', 'Login:mostrar_pagina_login' )->setName( 'pagina_login' );
$this->post( '/login', 'Login:procesar_login' )->setName( 'procesar_login' );

$this->get( '/loginFb', 'LoginFb:inicio' )->setName( 'LoginFb' );

$this->get( '/anuncios/{id_ticket}', 'RegistrarAporte:inicio' )->setName( 'aportes' );

$this->get( '/admin/page/otro/{id}', function(){
		return 'Admin page';
	} )->setName( 'admin_page' );
});

$app->group( '', function(){
$this->get( '/perfil', 'ProgramacionCita:inicio' )->setName( 'programacion_citas' );

})->add( new App\Middlewares\Admin() );
