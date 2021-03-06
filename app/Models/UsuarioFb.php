<?php
namespace App\Models;


class UsuarioFb extends Model {



public function get_data( $request, $tabla ){
		if( $tabla == 'usuario' ){
			return array(
				'id_usuario'=> 1,
				'nombres' => $request->getParam( 'nombres_persona' ),
				'fecha_nacimiento' => '2021-07-05',//ok
				'estado' => '1',//ok
				'sexo' => $request->getParam( 'sexo_persona' ),//ok
				'correo_electronico' => $request->getParam( 'correo_electronico' ),//ok
				'fecha_creacion' => '2021-07-05',//ok
				'fecha_ultima_sesion' => '2021-07-05',//ok
				'perfil_usuario' => $request->getParam( 'perfil_usuario' ),//ok
				'id_institucion' => $request->getParam( 'tipo_documento' ),//ok
				// 'id_usuario' => '1',//ok
				'fecha_registro' => '2021-07-05',//ok
				// 'fecha_final' => '',//ok--
				'id_ubigeo' => $request->getParam( 'id_ubigeo' ),//ok
				'apellidos' => $request->getParam( 'apellidos' ),//ok
				'id_fb' => $request->getParam( 'id_fb' ),//ok
			);
		}
		// if ($tabla =='usuario_login') {
		// 	return array(
		// 		 'id_usuario_login'=>1,
		// 		 'id_usuario' =>
		// 	);
		// 	# code...
		// }
		return array();
	}

public function crear_usuario_fb($request){
		$return = array(
				'status' => false,
				'error' => '',
				'sql' => '',
				'stmt' => null,
			);

			$conn_proy = $this->open_connection( CONNECTION_SIJ );
			if( ! $conn_proy ){
				$return['error'] = 'No se puede realizar conexión.';
				return $return;
			}

			//Consultamos la última cita para obtener el siguiente id de cita
			$id_ticket = 1;
	    $resultado = $this->get_anuncio('last');
	    if( $resultado['status'] && isset( $resultado['item']['id_usuario'] ) ){
	    	$id_ticket = (int) $resultado['item']['id_usuario'] + 1;
	    }
	    $ticket = $this->get_data( $request, 'usuario' );
	    $ticket['id_usuario'] = $id_ticket;
			// $ticket['nombres'] = encriptar_password( $request->getParam( 'nombres_persona' ));


			try {
		    $conn_proy->beginTransaction();

		    /*---------------------------------------------------
		    | Insertando "citas_web"
		    ----------------------------------------------------*/
		    $stmt = $this->connections->prepare_insert( $conn_proy, 'usuario', $ticket );
		    $return['sql'] = $this->connections->sql;
		    $return['error'] = '"usuario"';

		    if( $stmt ){
					$return['status'] = $stmt->execute();
					if( ! $return['status'] ){
						$return['error'] = 'Error insertando en "usuario"';
						$conn_proy->rollback();
						return $return;
					}
				} else {
					$return['error'] = 'Error en la consulta, verifica la sintaxis SQL';
				}

				$conn_proy->commit();
	  	} catch( \PDOExecption $e ) {
				$return['error'] = 'Error en la transacción, haciendo rollback(). Message: '.$e->getMessage();
				$conn_proy->rollback();
			}
			//Cerramos la conexión
			$this->close_connection( CONNECTION_SIJ );

			return $return;
		}

		public function get_anuncio( $request ){
			$return = array(
				'status' => false,
			);
			$data = array();
				$sql = "SELECT id_usuario FROM usuario ORDER BY id_usuario DESC LIMIT 1";
			$result = $this->execute_query( CONNECTION_SIJ, false, 'sql', $sql, $data );
			$return = array_merge( $return, $result );
			if( $return['status'] ){
				$return['item'] = $this->get_one( $result['stmt'] );
			}
			return $return;
		}
}

}