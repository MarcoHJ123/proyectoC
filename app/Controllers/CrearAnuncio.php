<?php
namespace App\Controllers;

use App\Models\Anuncio;


class CrearAnuncio extends Controller {

	public function inicio( $request, $response, $args ){
		$data = array();
		return $this->view->render( $response, 'crear-anuncios/master.twig', $data );
	}

	public function iniciom( $request, $response, $args ){
		$data = array();
		return $this->view->render( $response, 'crear-anuncios/inc/mapa.twig', $data );
	}

}
?>