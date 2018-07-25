<?php
namespace App\Controllers;

use App\Models\Anuncio;
use App\Models\Aporte;

class RegistrarAporte extends Controller {

	public function inicio( $request, $response, $args ){
<<<<<<< HEAD
		$id_anuncio = $args['id_anuncio'];
		$obj = new Anuncio();
		$resultado = $obj->buscar_anuncio( $id_anuncio );
		$anuncio = array();
		if( $resultado['status'] ){
			$anuncio = $resultado['items'];
		}
		$data = array(
			'anuncio' => $anuncio,
 		);
 		 d($data);
=======
<<<<<<< HEAD


			$id_anuncio = $args['id_anuncio'];
			d($id_anuncio);
			$data = array(

	 		);

			$id_ticket = $args['id_ticket'];
			d($id_ticket);
=======

			$id_anuncio = $args['id_anuncio'];
			d($id_anuncio);
>>>>>>> 8b33cb5b7ec7a940f50d56d5451f0bab2d0b81a5
			$data = array();

>>>>>>> 61590ebb00bee79588ad2a072d0748d54789ff0b
 		return $this->view->render( $response, 'aportar-anuncios/main.twig', $data );
  }

	public function crearAporte( $request, $response, $args ){
		// $id_anuncio = $request->getParam('id_anuncio');
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
		$obj_cita = new Aporte();
		$resultado = $obj_cita->crearA( $request, $user_login['id_login'] );

		if( $resultado['status'] == true ){
			$mensaje = "creado";
			$return['id2'] = $request->getParam('id_anuncio');
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