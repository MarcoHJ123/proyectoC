<?php
namespace App\Controllers;

// use App\Models\;

class RegistrarAporte extends Controller {

	public function inicio( $request, $response, $args ){

			$id_anuncio = $args['id_anuncio'];
			d($id_anuncio);
			$data = array();

			$id_ticket = $args['id_ticket'];
			d($id_ticket);

 		return $this->view->render( $response, 'aportar-anuncios/main.twig', $data );
  }
}