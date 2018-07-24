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

			$id_ticket = $args['id_ticket'];
			d($id_ticket);
=======

			$id_anuncio = $args['id_anuncio'];
			d($id_anuncio);
>>>>>>> 8b33cb5b7ec7a940f50d56d5451f0bab2d0b81a5
			$data = array();

 		return $this->view->render( $response, 'aportar-anuncios/main.twig', $data );
  }
}