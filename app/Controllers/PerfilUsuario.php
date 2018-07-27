<?php
namespace App\Controllers;

use App\Models\Usuario;
// use App\Models\Institucion;

class PerfilUsuario extends Controller {

public function inicio( $request, $response, $args ){
		$user_login = $this->session->exists('user_login') ? $this->session->user_login : array();

		$obj = new Usuario();
		$resultado = $obj->datos_usuario( $user_login['id_login'] );
		$datosu = array();
		if( $resultado['status'] ){
			$datosu = $resultado['item'];
		}
		$data = array(
			'datosu' => $datosu,
 		);
 		 d($data);
 		return $this->view->render( $response, 'perfil-usuario/main.twig', $data );
  }


}