<?php
namespace App\Controllers;

use App\Models\Personas;


class ListarAnuncios extends Controller {

 	public function Anuncios( $request, $response, $args ){
		$obj = new Personas();
		$resultado = $obj->listar_personas();
		// d($resultado);
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
