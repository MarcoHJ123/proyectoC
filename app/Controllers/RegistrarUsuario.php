<?php
namespace App\Controllers;

use App\Models\Usuario;
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
			'instituciones' => $instituciones,
		);
 		return $this->view->render( $response, 'crear-usuario/main.twig', $data );
	}

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
		$obj_cita = new Usuario();
		$resultado = $obj_cita->crearUsuario( $request );

		if( $resultado['status'] == true ){
			$mensaje = "creado";
			$return['USUARIO'] = $mensaje;
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