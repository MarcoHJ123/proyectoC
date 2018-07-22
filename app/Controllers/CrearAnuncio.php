<?php
namespace App\Controllers;
/*te mamaste con el repositorio*/
use App\Models\Anuncio;


	class CrearAnuncio extends Controller {

		public function inicio( $request, $response, $args ){
			$data = array();
 			return $this->view->render( $response, 'crear-anuncios/master.twig', $data );
		}

	}
?>