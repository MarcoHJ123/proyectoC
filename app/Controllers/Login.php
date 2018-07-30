<?php
namespace App\Controllers;

use App\Models\Usuario;

class Login extends Controller {
	private $perfil = 'ad';

	/*
	|---------------------------------------------------------------------------------------------------
	| Retorna el código de usuario conectado
	|---------------------------------------------------------------------------------------------------
	*/
	public function get_codigo_usuario(){
		if( $this->esta_conectado() ){
			return $this->session->user_login['id_login'];
		}
		return null;
	}

	/*
	|---------------------------------------------------------------------------------------------------
	| Retorna el nombre de usuario conectado
	|---------------------------------------------------------------------------------------------------
	*/
	public function get_nombre_usuario(){
		if( $this->esta_conectado() ){
			return $this->session->user_login['nombres'];
		}
		return null;
	}

	/*
	|---------------------------------------------------------------------------------------------------
	| Comprueba si ha iniciado sesión
	|---------------------------------------------------------------------------------------------------
	*/
	public function esta_conectado(){
		return isset( $this->session->user_login ) && ! empty( $this->session->user_login['id_login'] );
	}

	/*
	|---------------------------------------------------------------------------------------------------
	| Cierra la sesión
	|---------------------------------------------------------------------------------------------------
	*/
	public function cerrar_sesion(){
		$this->session->delete( 'user_login' );
		return $this->response->withRedirect( $this->router->pathFor( 'pagina_login' ) );
	}

	/*
	|---------------------------------------------------------------------------------------------------
	| Hace un intento de conexión
	|---------------------------------------------------------------------------------------------------
	*/
	public function conectar( $usuario = '', $password = '' ){
		//Si ya está conectado no hacer nada
		if( $this->esta_conectado() ){
			$this->cerrar_sesion();
		}
		$settings = get_settings_file( 'conexiones.json' );
		$login_settings = $settings[CONNECTION_LOGIN];
		$login_settings['username'] = trim( strtoupper( $usuario ) );
		 $login_settings['password'] =  strtoupper( $password );
  //encriptar_password( strtoupper( $password ) );
		//Agregamos la conexión
		$this->connections->addConnection( CONNECTION_LOGIN, $login_settings );

		//Nos conectamos
		$connect = $this->connections->connect( CONNECTION_LOGIN );

		if( $connect ){
			//Si se conectó con éxtito, verificamos perfil del usuario
			$obj = new Usuario();
			$resultado = $obj->verificar_usuario( $usuario );

			//Si existe usuario y es el perfil permitido, entonces creamos la sesión
			if( $resultado['status'] && ! empty( $resultado['usuario'] ) ){
				$session_login = array(
					'id_login' => $login_settings['username'],
					'nombres' => $resultado['usuario']['nombres'].' '. $resultado['usuario']['apellidos'],
					'perfil_usuario' => $resultado['usuario']['perfil_usuario'],
					'correo_electronico' => $resultado['usuario']['correo_electronico'],
					'settings' => $login_settings,
				);
				$this->session->set( 'user_login', $session_login );
				return true;
			}

			//Cerramos la conexion
			$this->connections->close( CONNECTION_LOGIN );
			return false;
		}
		return false;
	}

	/*
	|---------------------------------------------------------------------------------------------------
	| Muestra la página de inicio de sesión
	|---------------------------------------------------------------------------------------------------
	*/
	public function mostrar_pagina_login( $request, $response, $args ){
		$data = array(
			'id_login' => $this->session->get('id_login'),
			'login_settings' => $this->session->get('login_settings'),
			'nombres' => $this->session->get('nombres'),
			'count' => $this->session->get('count'),
			'perfil_usuario' => $this->session->get('perfil_usuario'),
		);
		// d($data);
		return $this->view->render( $response, 'login/login.twig', $data );
	}

	/*
	|---------------------------------------------------------------------------------------------------
	| Procesa el inicio de sesión
	|---------------------------------------------------------------------------------------------------
	*/
	public function procesar_login( $request, $response, $args ){
		$usuario = $request->getParam('usuario');
		$password = $request->getParam('password');

		$conectado = $this->conectar( $usuario, $password );
		if( ! $conectado ){
			$this->flash->addMessage( 'error', 'Datos incorrectos.');
			return $this->response->withRedirect( $this->router->pathFor( 'pagina_login' ) );
		} else {
			$user_login =  $this->session->get('user_login');

			$this->flash->addMessage( 'success', 'Bienvenido(a): '.$user_login['nombres'] );

			if( $user_login['perfil_usuario'] == $this->perfil ){
				return $this->response->withRedirect( $this->router->pathFor( 'Anuncios' ) );
			// } else if( $user_login['perfil'] == $this->perfil_admin ) {
			// 	return $this->response->withRedirect( $this->router->pathFor( 'ajustes' ) );
			} else {
				//Si no tiene el perfil requerido cerramos la sesión y lo enviamos fuera del admin
				$this->cerrar_sesion();
				return $this->response->withRedirect( $this->router->pathFor( 'inicio' ) );
			}
		}
	}

}
