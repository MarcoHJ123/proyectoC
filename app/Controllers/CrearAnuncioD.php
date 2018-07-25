<?php
namespace App\Controllers;

use App\Models\Anuncio;

class CrearAnuncioD extends Controller {

		/*
	|---------------------------------------------------------------------------------------------------
	| INICIO DE LA VISTA CREAR ANUNCIO DESAPARECIDO
	|---------------------------------------------------------------------------------------------------
	*/
	public function inicioD( $request, $response, $args ){
		$data = array();
			$user_login = $this->session->exists('user_login') ? $this->session->user_login : array();
			d($user_login);
		return $this->view->render( $response, 'crear-anuncios/desaparecido/main.twig', $data );

	}

	/*
	|---------------------------------------------------------------------------------------------------
	| CREAR ANUNCIO DESAPARECIDO
	|---------------------------------------------------------------------------------------------------
	*/
	public function crear_anuncioD( $request, $response, $args ){
		$return = array(
			'success' => false,
			'html' => '',
		);
		if( ! is_ajax() ) {
			$return['html'] = 'ajax-error';
			return json_encode( $return );
		}

		$user_login = $this->session->exists('user_login') ? $this->session->user_login : array();

		$error = false;
		$obj_cita = new Anuncio();
		$resultado = $obj_cita->crearDesaparecido( $request, $user_login['id_login'] );

		if( $resultado['status'] == true ){
			$mensaje = "creada ";
			$return['ANUNCIO'] = $mensaje;
		} else {
			$error = true;
		}

		if( $error ){
			$return['error'] = $resultado['error'];
			$return['sql'] = $resultado['sql'];
		} else {
			$return['success'] = true;
		}
		return json_encode( $return );
	}

}
?>