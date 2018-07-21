<?php
namespace App\Controllers;
/*te mamaste con el repositorio*/
use App\Models\Ticket;
use App\Models\Institucion;


	class RegistrarUsuario extends Controller {

			



		public function inicio( $request, $response, $args ){
				$obj = new Institucion();
		$resultado = $obj->listar_institucion();
		$instituciones = array();
		if( $resultado['status'] ){
			$instituciones = $resultado['items'];
		}
		$data = array(
			'Instituciones' => $instituciones,
		);
			$data = array();
 			return $this->view->render( $response, 'crear-usuario/main.twig', $data );
		}

		// public function inicioDesaparecido( $request, $response, $args ){
		// 	$data = array();
 	// 		return $this->view->render( $response, 'crear-ticket/desaparecido/main.twig', $data );
		// }
		// public function inicioPerdido( $request, $response, $args ){
		// 	$data = array();
 	// 		return $this->view->render( $response, 'crear-ticket/perdido/main.twig', $data );
		// }

		public function crear_usuario( $request, $response, $args ){
		$return = array(
			'success' => false,
			'html' => '',
		);
		if( ! is_ajax() ) {
			$return['html'] = 'ajax-error';
			return json_encode( $return );
		}

		$error = false;
		$obj_cita = new Ticket();
		$resultado = $obj_cita->crearUsuario( $request );
		if( $resultado['status'] == true ){
			$mensaje = "creada ";
			$return['msgEnviado'] = $mensaje;
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
?>