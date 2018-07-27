<?php
namespace App\Controllers;

use App\Models\Anuncio;
use App\Models\Aporte;

class RegistrarAporte extends Controller {

	public function inicio( $request, $response, $args ){
<<<<<<< HEAD

=======
		$id_anuncio = $args['id_anuncio'];
		$obj = new Anuncio();
		$resultado = $obj->buscar_anuncio( $id_anuncio );
		if( $resultado['status'] ){
			$anuncio = $resultado['items'];
		}
		$data = array(
			'anuncio' => $anuncio,
 		);
		// d($data);
 		return $this->view->render( $response, 'aportar-anuncios/main.twig', $data );
  }
>>>>>>> 1b12b565350dd3d483dab85a5ef8a6450723fdb6

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

<<<<<<< HEAD
			$id_ticket = $args['id_ticket'];
			d($id_ticket);


			$id_anuncio = $args['id_anuncio'];
			d($id_anuncio);

			$data = array();
=======
		$error = false;
		$obj_cita = new Aporte();
		$resultado = $obj_cita->crearA( $request, $user_login['id_login'] );

		if( $resultado['status'] == true ){
			$mensaje = "creado";
			$return['id2'] = $request->getParam('id_anuncio');
		} else {
			$error = true;
		}
>>>>>>> 1b12b565350dd3d483dab85a5ef8a6450723fdb6

		if( $error ){
			$return['error'] = $resultado['error'];
			$return['sql'] = $resultado['sql'];
		} else {
			$return['success'] = true;
		}

		return json_encode( $return );

	}
	public function aportar( $request, $response, $args ){
		$id_anuncio = $args['id_anuncio'];
		$obj = new Anuncio();
		$resultado = $obj->buscar_anuncio( $id_anuncio );
		if( $resultado['status'] ){
			$anuncio = $resultado['items'];
		}
		$data = array(
			'anuncio' => $anuncio,
 		);
 		return $this->view->render( $response, 'aportar-anuncios/inc/aportar.twig', $data );
  }
}