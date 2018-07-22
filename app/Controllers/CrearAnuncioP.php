<?php
namespace App\Controllers;
use App\Models\Anuncio;


	class CrearAnuncioP extends Controller {

		public function inicioP( $request, $response, $args ){
			$data = array();
 			return $this->view->render( $response, 'crear-anuncios/perdido/main.twig', $data );
		}

}
?>