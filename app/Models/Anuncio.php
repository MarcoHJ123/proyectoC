<?php
namespace App\Models;

class Anuncio extends Model {

	/*
	|---------------------------------------------------------------------------------------------------
	| DATOS DEL ANUNCIO
	|---------------------------------------------------------------------------------------------------
	*/
	public function get_data( $request, $tabla ){
		if( $tabla == 'anuncio' ){
			return array(
				'id_anuncio'=> 1,
				'nombres' => $request->getParam( 'nombres_persona' ),
				'sexo' => $request->getParam( 'sexo_persona' ),//ok
				'colo_piel' => $request->getParam( 'color_piel' ),//ok
				'estatura' => $request->getParam( 'estatura_persona' ),//ok
				'fecha_nacimiento' => '2021-07-05',//ok
				'tipo_documento' => $request->getParam( 'tipo_documento' ),//ok
				'estado_anuncio' => 'n',//ok
				'fecha_registro' => 'now()',//ok
				'descripcion' => $request->getParam( 'descripcion' ),//ok
				'parentesco' => $request->getParam( 'parentesco' ),//ok
				'apellidos' => $request->getParam( 'apellidos_persona' ),//ok
				'numero_documento' => $request->getParam( 'numero_documento' ),//ok
				'ubicacio_lt' => $request->getParam( 'ubicacio_lt' ),//ok
				'ubicacio_ln' => $request->getParam( 'ubicacio_ln' ),//ok
			);
		}
		return array();
	}

	/*
	|---------------------------------------------------------------------------------------------------
	| LISTA DE LOS ANUNCIOS -- MODIFICAR QUE SOLO SE VEA LOS CON ESTADO n
	|---------------------------------------------------------------------------------------------------
	*/
	public function listar_anuncios(){
		$return = array(
			'status' => false,
		);

		$data = array();

		$sql = "SELECT * FROM anuncio";

		$result = $this->execute_query( CONNECTION_SIJ, false, 'sql', $sql, $data );
		$return = array_merge( $return, $result );
		if( $return['status'] ){
			$return['items'] = $this->get_all( $result['stmt'] );
		}
		return $return;
	}

	/*
	|---------------------------------------------------------------------------------------------------
	| CREAR ANUNCIO DE PERSONA DESAPARECIDA
	|---------------------------------------------------------------------------------------------------
	*/
public function crearDesaparecido($request){
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
			$id_anuncio = 1;
	    $resultado = $this->get_anuncio('last');
	    if( $resultado['status'] && isset( $resultado['item']['id_anuncio'] ) ){
	    	$id_anuncio = (int) $resultado['item']['id_anuncio'] + 1;
	    }
	    $anuncio = $this->get_data( $request, 'anuncio' );
	    $anuncio['id_anuncio'] = $id_anuncio;
	    $anuncio['estado_persona'] = '2';
			// $anuncio['nombres'] = encriptar_password( $request->getParam( 'nombres_persona' ));

			try {
		    $conn_proy->beginTransaction();

		    /*---------------------------------------------------
		    | Insertando "anuncio"
		    ----------------------------------------------------*/
		    $stmt = $this->connections->prepare_insert( $conn_proy, 'anuncio', $anuncio );
		    $return['sql'] = $this->connections->sql;
		    $return['error'] = '"anuncio"';

		    if( $stmt ){
					$return['status'] = $stmt->execute();
					if( ! $return['status'] ){
						$return['error'] = 'Error insertando en "anuncio"';
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
	| TRAE EL ULTIMO CODIGO DE ANUNCIO
	|---------------------------------------------------------------------------------------------------
	*/
		public function get_anuncio( $request ){
			$return = array(
				'status' => false,
			);
			$data = array();
				$sql = "SELECT id_anuncio FROM anuncio ORDER BY id_anuncio DESC LIMIT 1";
			$result = $this->execute_query( CONNECTION_SIJ, false, 'sql', $sql, $data );
			$return = array_merge( $return, $result );
			if( $return['status'] ){
				$return['item'] = $this->get_one( $result['stmt'] );
			}
			return $return;
		}
}

?>