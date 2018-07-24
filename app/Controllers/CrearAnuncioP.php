<?php
namespace App\Controllers;

use App\Models\Anuncio;

class CrearAnuncioP extends Controller {
	/*
	|---------------------------------------------------------------------------------------------------
	| CREAR ANUNCIO PERDIDO
	|---------------------------------------------------------------------------------------------------
	*/
	public function inicioP( $request, $response, $args ){
		$data = array();
		return $this->view->render( $response, 'crear-anuncios/perdido/main.twig', $data );
	}

	/*
	|---------------------------------------------------------------------------------------------------
	| CREAR ANUNCIO PERDIDO
	|---------------------------------------------------------------------------------------------------
	*/
	public function crear_anuncioP( $request, $response, $args ){
		$return = array(
			'success' => false,
			'html' => '',
		);
		if( ! is_ajax() ) {
			$return['html'] = 'ajax-error';
			return json_encode( $return );
		}

		$error = false;
		$obj_cita = new Anuncio();
		$resultado = $obj_cita->crearDesaparecido( $request );

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