<?php
namespace App\Controllers;
/*te mamaste con el repositorio*/
use App\Models\Ticket;


	class CrearAnuncio extends Controller {

		public function inicio( $request, $response, $args ){
			$data = array();
 			return $this->view->render( $response, 'crear-ticket/main.twig', $data );
		}

		public function crear_anuncio( $request, $response, $args ){
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
		$resultado = $obj_cita->crear( $request );
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