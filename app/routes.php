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

/*---------------CREACION Y LOGIN DE USUARIOS NORMALES---------------*/
$this->get( '/crear-usuario/', 'RegistrarUsuario:inicio' )->setName( 'RegistrarUsuario' );
$this->post( '/ajax/crear-usuario', 'RegistrarUsuario:crear_usuario' )->setName( 'crear_usuario' );
$this->get( '/login', 'Login:mostrar_pagina_login' )->setName( 'pagina_login' );
$this->post( '/login', 'Login:procesar_login' )->setName( 'procesar_login' );

/*---------------LOGIN DE USUARIOS FACEBOOK---------------*/
$this->get( '/loginFb', 'LoginFb:inicio' )->setName( 'LoginFb' );

/*---------------PAG ADMIN---------------*/
$this->get( '/admin/page/otro/{id}', function(){
	return 'Admin page'; } )->setName( 'admin_page' );
});

/*---------------AREA PRIVADA---------------*/
$app->group( '', function(){
/*---------------CREACION DE ANUNCIOS PERDIDOS Y DESAPARECIDOS---------------*/
$this->get( '/crear-anuncio/', 'CrearAnuncio:inicio' )->setName( 'Crear_Anuncio' );
$this->get( '/crear-anuncios/desaparecido', 'CrearAnuncioD:inicioD' )->setName( 'Crear_Anuncio_D' );
$this->post( '/ajax/crear-anuncioD', 'CrearAnuncioD:crear_anuncioD' )->setName( 'Crear_AnuncioD' );
$this->get( '/crear-anuncios/perdido', 'CrearAnuncioP:inicioP' )->setName( 'CrearAnuncioP' );
$this->post( '/ajax/crear-anuncioP', 'CrearAnuncioP:crear_anuncioP' )->setName( 'CrearAnuncioD' );

/*---------------APORTACIONES DE ANUNCIOS PERDIDOS Y DESAPARECIDOS---------------*/
$this->get( '/anuncios/{id_anuncio}', 'RegistrarAporte:inicio' )->setName( 'aportes' );
$this->post( '/ajax/crear-aporte', 'RegistrarAporte:crearAporte' )->setName( 'Crear_aporte' );
$this->get( '/aportar/{id_anuncio}', 'RegistrarAporte:Aportar' )->setName( 'Aportar' );

/*---------------CERRAR SESION---------------*/
$this->get( '/cerrar-sesion', 'Login:cerrar_sesion' )->setName( 'cerrar_sesion' );

/*---------------CERRAR SESION---------------*/
$this->get( '/perfil', 'PerfilUsuario:inicio' )->setName( 'PerfilUsuario' );
$this->get( '/detalle/{id_anuncio}', 'PerfilUsuario:detalle' )->setName( 'Detalle_nuncio' );
$this->get( '/editar/{id_anuncio}', 'PerfilUsuario:editar' )->setName( 'edita_anuncio' );
$this->post( '/ajax/editar-anuncio', 'PerfilUsuario:editar_anuncio' )->setName( 'editar_anuncio' );

})->add( new App\Middlewares\Admin() );
