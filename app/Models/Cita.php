<?php
namespace App\Models;

use App\Models\Horario;
use App\Models\Usuario;

class Cita extends Model {
public function get_data( $request, $tabla ){
			if( $tabla == 'ticket' ){
				return array(
				'id_ticket' => 1,//ok
				'nombres' => $request->getParam( 'nombres_persona' ),//ok
				'sexo' => '',
				'color_piel' => 'm',
				'estatura' => '1.70',
				'fecha_nacimiento' => '2018-07-05',
				'tipo_documento' => 1,
				'estado_ticket' => 1,
				'id_usuario'=>1,
				'fecha_registro' => '2018-07-05',//ok
				'fecha_final'=> '',
				'descripcion' => 'descripcion',
				'ultima ubicacion' => 'ubi',
				'estado_persona' => 1,
				'parentesco' => 'pa',
				'apellidos' => 'apellidos',
				'numero_documento' => '123456',
				);
			}
			return array();
		}

// public function crear( $request ){
// 		$return = array(
// 				'status' => false,
// 				'error' => '',
// 				'sql' => '',
// 				'stmt' => null,
// 				'validador' => null,
// 			);

// 			$conn_proy = $this->open_connection( CONNECTION_SIJ );
// 			if( ! $conn_proy ){
// 				$return['error'] = 'No se puede realizar conexión.';
// 				return $return;
// 			}

// 			//Consultamos la última cita para obtener el siguiente id de cita
// 			$cod_ins = 1;
// 	    $resultado = $this->get_cita_web('last');
// 	    if( $resultado['status'] && isset( $resultado['item']['cod_ins'] ) ){
// 	    	$cod_ins = (int) $resultado['item']['cod_ins'] + 1;
// 	    }
// 	    $ticket = $this->get_data( $request, 'ticket' );
// 	    $ticket['cod_ins'] = $cod_ins;

// 			try {
// 		    $conn_proy->beginTransaction();

// 		    /*---------------------------------------------------
// 		    | Insertando "citas_web"
// 		    ----------------------------------------------------*/
// 		    $stmt = $this->connections->prepare_insert( $conn_proy, 'ticket', $ticket );
// 		    $return['sql'] = $this->connections->sql;//Para verificar string sql en caso de error

// 		    if( $stmt ){
// 					$return['status'] = $stmt->execute();
// 					if( ! $return['status'] ){
// 						$return['error'] = 'Error insertando en "ticket"';
// 						$conn_proy->rollback();

// 						//Insertar error en la tabla citas_web_errores

// 						return $return;
// 					}

// 				/*	/*---------------------------------------------------
// 			    | Insertando "citas_web_detalle"
// 			    ----------------------------------------------------*/

// 				} else {
// 					$return['error'] = 'Error en la consulta, verifica la sintaxis SQL';
// 				}

// 				$conn_proy->commit();
// 	  	} catch( \PDOExecption $e ) {
// 				$return['error'] = 'Error en la transacción, haciendo rollback(). Message: '.$e->getMessage();
// 				$conn_proy->rollback();
// 			}
// 			//Cerramos la conexión
// 			$this->close_connection( CONNECTION_SIJ );

// 			return $return;
// 		}

// public function get_cita_web( $request ){
// 			$return = array(
// 				'status' => false,
// 			);
// 			$data = array();
// 				$sql = "SELECT TOP 1 id_ticket FROM ticket ORDER BY id_ticket  DESC";
// 			$result = $this->execute_query( CONNECTION_SIJ, false, 'sql', $sql, $data );
// 			$return = array_merge( $return, $result );
// 			if( $return['status'] ){
// 				$return['item'] = $this->get_one( $result['stmt'] );
// 			}
// 			return $return;
// 		}
}
