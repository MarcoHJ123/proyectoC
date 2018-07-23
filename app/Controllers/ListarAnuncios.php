<?php
namespace App\Controllers;

use App\Models\Anuncio;

class ListarAnuncios extends Controller {

 	public function Anuncios( $request, $response, $args ){
		$obj = new Anuncio();
		$resultado = $obj->listar_anuncios();
		$personas = array();
		if( $resultado['status'] ){
			$personas = $resultado['items'];
		}
		$data = array(
			'personas' => $personas,
 		);
 		return $this->view->render( $response, 'listar-anuncios/main.twig', $data );
 	}
}
?>
