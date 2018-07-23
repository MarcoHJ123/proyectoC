<?php

/*
|---------------------------------------------------------------------------------------------------
| Routes
|---------------------------------------------------------------------------------------------------
*/

/*---------------AREA PUBLICA---------------*/
$app->group( '', function(){
/*---------------PAGINA PRINCIPAL DE ANUNCIOS---------------*/
$this->get( '/', 'ListarAnuncios:Anuncios' )->setName( 'Anuncios' );
/*---------------CREACION DE ANUNCIOS PERDIDOS Y DESAPARECIDOS---------------*/
$this->get( '/crear-anuncio/', 'CrearAnuncio:inicio' )->setName( 'Crear_Anuncio' );
$this->get( '/crear-anuncios/desaparecido', 'CrearAnuncioD:inicioD' )->setName( 'Crear_Anuncio_D' );
$this->post( '/ajax/crear-anuncioD', 'CrearAnuncioD:crear_anuncioD' )->setName( 'Crear_AnuncioD' );
$this->get( '/crear-anuncios/perdido', 'CrearAnuncioP:inicioP' )->setName( 'CrearAnuncioP' );
// $this->post( '/ajax/crear-anuncioD', 'CrearAnuncioD:crear_anuncioD' )->setName( 'CrearAnuncioD' );
/*---------------APORTACIONES DE ANUNCIOS PERDIDOS Y DESAPARECIDOS---------------*/
$this->get( '/anuncios/{id_ticket}', 'RegistrarAporte:inicio' )->setName( 'aportes' );
/*---------------CREACION Y LOGIN DE USUARIOS NORMALES---------------*/
$this->get( '/crear-usuario/', 'RegistrarUsuario:inicio' )->setName( 'RegistrarUsuario' );
$this->post( '/ajax/crear-usuario', 'RegistrarUsuario:crear_usuario' )->setName( 'crear_usuario' );
$this->get( '/login', 'Login:mostrar_pagina_login' )->setName( 'pagina_login' );
$this->post( '/login', 'Login:procesar_login' )->setName( 'procesar_login' );

$this->get( '/loginFb', 'LoginFb:inicio' )->setName( 'LoginFb' );

$this->get( '/admin/page/otro/{id}', function(){ return 'Admin page'; } )->setName( 'admin_page' );
});

$app->group( '', function(){
$this->get( '/perfil', 'ProgramacionCita:inicio' )->setName( 'programacion_citas' );

})->add( new App\Middlewares\Admin() );
