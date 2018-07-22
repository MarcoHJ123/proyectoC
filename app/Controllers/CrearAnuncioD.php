<?php
namespace App\Controllers;

use App\Models\Anuncio;

class CrearAnuncioD extends Controller {

	public function inicioD( $request, $response, $args ){
		$data = array();
		return $this->view->render( $response, 'crear-anuncios/desaparecido/main.twig', $data );
	}

	public function crear_anuncioD( $request, $response, $args ){
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
		$resultado = $obj_cita->crear( $request );

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