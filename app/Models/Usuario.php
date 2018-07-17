<?php
namespace App\Models;

class Usuario extends Model {

	/*
	|---------------------------------------------------------------------------------------------------
	| Verifica el usuario
	|---------------------------------------------------------------------------------------------------
	*/
	public function verificar_usuario( $usuario ){
		$return = array(
			'status' => false,
		);

		$data = array(
			'usuario' => $usuario,
		);

		$sql = "SELECT DISTINCT nombres, perfil_usuario, correo_electronico
														FROM usuario u INNER JOIN usuario_login ul WHERE
														u.id_usuario = ul.id_usurio and u.estado = '1' and u.id_usuario = :usuario";

		$result = $this->execute_query( CONNECTION_LOGIN, false, 'sql', $sql, $data );
		$return = array_merge( $return, $result );
		if( $return['status'] ){
			$return['usuario'] = $this->get_one( $result['stmt'] );
		}

		return $return;
	}


}