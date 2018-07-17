<?php
namespace App\Controllers;

use App\Models\Cita;

class ApiController extends Controller {

	/*
	|---------------------------------------------------------------------------------------------------
	| Obtener todas las citas
	|---------------------------------------------------------------------------------------------------
	*/
	public function get_citas( $request, $response, $args ){
		$return = array(
			'success' => false,
			'html' => '',
			'c_cita' => '',
		);

		$obj = new Cita();
		$resultado = $obj->get_all_citas( $request );

		//Obtener datos
		if( $resultado['status'] ){
			$return['success'] = true;
		} else {
			$return['error'] = $resultado['error'];
		}
		$return['items'] = $resultado['items'];

		//Verificar usuario
		$headers = $request->getHeaders();
		$usuario = $request->getHeaderLine( 'usuario' );
		$password = $request->getHeaderLine( 'password' );
		//$verificar_usuario = $this->container->Login->conectar( 'PVALLEJOS', '1234562' );
		$verificar_usuario = $this->container->Login->conectar( $usuario, $password );

		if( $verificar_usuario ){
			return $response->withStatus(200)->withJson(array(
				'status' => 'success',
				'message' => 'Consulta exitosa',
				'items' => $return['items'],
			));
		} else {
			$response = $response->withStatus(401);
			return $response->withJson(array(
				'status' => 'error',
				'message' => 'Autenticación requerida',
				'items' => array(),
			));
		}

	}



}
