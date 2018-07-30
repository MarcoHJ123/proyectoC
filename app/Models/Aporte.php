<?php
namespace App\Models;

class Aporte extends Model {

	/*
	|---------------------------------------------------------------------------------------------------
	| DATOS DEL APORTE
	|---------------------------------------------------------------------------------------------------
	*/
	public function get_data( $request, $tabla ){
		if( $tabla == 'incidencia' ){
			return array(
				'id_incidencia'=> 1,
				'ubicacion_lt' => $request->getParam( 'ubicacio_lt' ),//ok
				'ubicacion_ln' => $request->getParam( 'ubicacio_ln' ),//ok
				'descripcion' => $request->getParam( 'descripcion' ),//ok
				'id_anuncio' => $request->getParam( 'id_anuncio' ),//ok
				'id_usuario' => 'a',//ok
				'fecha_aporte' => 'now()',//ok
			);
		}
		return array();
	}

	/*
	|---------------------------------------------------------------------------------------------------
	| CREAR APORTE
	|---------------------------------------------------------------------------------------------------
	*/
	public function crearA($request, $user_login ){
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
		$id_incidencia = 1;
    $resultado = $this->get_incidencia('last');
    if( $resultado['status'] && isset( $resultado['item']['id_incidencia'] ) ){
    	$id_incidencia = (int) $resultado['item']['id_incidencia'] + 1;
    }
    $incidencia = $this->get_data( $request, 'incidencia' );
    $incidencia['id_incidencia'] = $id_incidencia;
    $incidencia['id_usuario'] = $user_login;

		try {
	    $conn_proy->beginTransaction();

	    /*---------------------------------------------------
	    | Insertando "incidencia"
	    ----------------------------------------------------*/
	    $stmt = $this->connections->prepare_insert( $conn_proy, 'incidencia', $incidencia );
	    $return['sql'] = $this->connections->sql;
	    $return['error'] = '"incidencia"';

	    if( $stmt ){
				$return['status'] = $stmt->execute();
				if( ! $return['status'] ){
					$return['error'] = 'Error insertando en "incidencia"';
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

	/*
	|---------------------------------------------------------------------------------------------------
	| CODIGO DE ULTIMO APORTE
	|---------------------------------------------------------------------------------------------------
	*/
	public function get_incidencia( $request ){
		$return = array(
			'status' => false,
		);
		$data = array();
			$sql = "SELECT id_incidencia FROM incidencia ORDER BY id_incidencia DESC LIMIT 1";
		$result = $this->execute_query( CONNECTION_SIJ, false, 'sql', $sql, $data );
		$return = array_merge( $return, $result );
		if( $return['status'] ){
			$return['item'] = $this->get_one( $result['stmt'] );
		}
		return $return;
	}

	public function aporte_anuncio( $id_anuncio ){
		$return = array(
			'status' => false,
		);
		$data = array(
			'id_anuncio' => $id_anuncio,
		);
			$sql = "SELECT * FROM incidencia where id_anuncio = :id_anuncio";
		$result = $this->execute_query( CONNECTION_SIJ, false, 'sql', $sql, $data );
		$return = array_merge( $return, $result );
		if( $return['status'] ){
			$return['items'] = $this->get_all( $result['stmt'] );
		}
		return $return;
	}
}