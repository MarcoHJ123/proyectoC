<?php
namespace App\Controllers;

// use App\Models\;

class RegistrarAporte extends Controller {

	public function inicio( $request, $response, $args ){
<<<<<<< HEAD

			$id_anuncio = $args['id_anuncio'];
			d($id_anuncio);
			$data = array(

	 		);
=======
			$id_ticket = $args['id_ticket'];
			d($id_ticket);
			$data = array();
>>>>>>> eb855b2a8a1664f8d7759169b11da3c6a0e1334e
 		return $this->view->render( $response, 'aportar-anuncios/main.twig', $data );
  }
}