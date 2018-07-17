<?php
namespace App\Models;

class Ticket extends Model {
	public function get_data( $request, $tabla ){
		if( $tabla == 'ticket' ){
			return array(
				'id_ticket'=> 1,
				'nombres' => $request->getParam( 'nombres_persona' ),
				'sexo' => $request->getParam( 'sexo_persona' ),//ok
				'colo_piel' => $request->getParam( 'color_piel' ),//ok
				'estatura' => $request->getParam( 'estatura_persona' ),//ok
				'fecha_nacimiento' => '2021-07-05',//ok
				'tipo_documento' => $request->getParam( 'tipo_documento' ),//ok
				'estado_ticket' => 'n',//ok
				// 'id_usuario' => '1',//ok
				'fecha_registro' => '2021-07-05',//ok
				// 'fecha_final' => '',//ok--
				'descripcion' => $request->getParam( 'descripcion' ),//ok
				'ultima_ubicacion' => $request->getParam( 'ultima_ubicacion' ),//ok
				'estado_persona' => $request->getParam( 'estado_persona' ),//ok
				'parentesco' => $request->getParam( 'parentesco' ),//ok
				'apellidos' => $request->getParam( 'apellidos_persona' ),//ok
				'numero_documento' => $request->getParam( 'numero_documento' ),//ok
			);
		}
		return array();
	}
public function crear($request){
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
	    if( $resultado['status'] && isset( $resultado['item']['id_ticket'] ) ){
	    	$id_ticket = (int) $resultado['item']['id_ticket'] + 1;
	    }
	    $ticket = $this->get_data( $request, 'ticket' );
	    $ticket['id_ticket'] = $id_ticket;
			// $ticket['nombres'] = encriptar_password( $request->getParam( 'nombres_persona' ));


			try {
		    $conn_proy->beginTransaction();

		    /*---------------------------------------------------
		    | Insertando "citas_web"
		    ----------------------------------------------------*/
		    $stmt = $this->connections->prepare_insert( $conn_proy, 'ticket', $ticket );
		    $return['sql'] = $this->connections->sql;
		    $return['error'] = '"ticket"';

		    if( $stmt ){
					$return['status'] = $stmt->execute();
					if( ! $return['status'] ){
						$return['error'] = 'Error insertando en "ticket"';
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
				$sql = "SELECT id_ticket FROM ticket ORDER BY id_ticket DESC LIMIT 1";
			$result = $this->execute_query( CONNECTION_SIJ, false, 'sql', $sql, $data );
			$return = array_merge( $return, $result );
			if( $return['status'] ){
				$return['item'] = $this->get_one( $result['stmt'] );
			}
			return $return;
		}
}
?>