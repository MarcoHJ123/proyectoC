<?php
namespace App\Models;

class Model {
	protected $container;
	protected $connection = null;
	protected $error = '';

	public function __construct(){
		global $container;
		$this->container = $container;
	}

	/*
	|---------------------------------------------------------------------------------------------------
	| Acceder a propiedades de $container
	|---------------------------------------------------------------------------------------------------
	*/
	public function __get( $property ){
		if( $this->container->{$property} ){
			return $this->container->{$property};
		}
	}

	/*
	|---------------------------------------------------------------------------------------------------
	| Abre una conexión
	|---------------------------------------------------------------------------------------------------
	*/
	protected function open_connection( $connection_name ){
		$connect = $this->connections->connect( $connection_name );
		if( $connect ){
			$connection = $this->connections->getConnection( $connection_name );
			if( $connection ){
				return $connection;
			}
		}
		return false;
	}

	/*
	|---------------------------------------------------------------------------------------------------
	| Cierra una conexión
	|---------------------------------------------------------------------------------------------------
	*/
	protected function close_connection( $connection_name ){
		$this->connections->close( $connection_name );
	}

	/*
	|---------------------------------------------------------------------------------------------------
	| Ejecuta una consulta
	|---------------------------------------------------------------------------------------------------
	*/
	public function execute_query( $conn_name, $transaction = false, $type = 'insert', $sql_table_or_sp, $data = array(), $key = null  ){
		$return = array(
			'status' => false,
			'error' => '',
			'sql' => '',
			'stmt' => null,
		);

		$conn = $this->open_connection( $conn_name );
		if( ! $conn ){
			$return['error'] = 'No se puede realizar conexión a '.$conn_name;
			return $return;
		}
		try {
			if( $transaction ){
				$conn->beginTransaction();
			}
	    switch( $type ){
	    	case 'sql':
	    		$stmt = $this->connections->prepare_sql( $conn, $sql_table_or_sp, $data );
	    		break;
	    	case 'insert':
	    		$stmt = $this->connections->prepare_insert( $conn, $sql_table_or_sp, $data );
	    		break;
	    	case 'update':
	    		$stmt = $this->connections->prepare_update( $conn, $sql_table_or_sp, $data, $key );
	    		break;
	    	case 'sp':
	    		$stmt = $this->connections->prepare_sp( $conn, $sql_table_or_sp, $data );
	    		break;
	    }
	    $return['sql'] = $this->connections->sql;//Para verificar string sql en caso de error

	    if( $stmt ){
				$return['status'] = $stmt->execute();
				$return['stmt'] = $stmt;
				if( ! $return['status'] ){
					$return['error'] = 'Error en stmt->execute();';
				}
			} else {
				$return['error'] = 'Error en la consulta, verifica la sintaxis SQL';
			}
			if( $transaction ){
				$conn->commit();
			}
  	} catch( \PDOExecption $e ) {
  		if( $transaction ){
  			$conn->rollback();
				$conn->commit();
			}
			$return['error'] = 'Error en la transacción, haciendo rollback()';
		}
		//Cerramos la conexión
		$this->close_connection( $conn_name );

		return $return;
	}

	/*
	|---------------------------------------------------------------------------------------------------
	| Retorna todos los objetos
	|---------------------------------------------------------------------------------------------------
	*/
	public function get_all( $stmt  ){
		$fetch = $stmt->fetchAll(\PDO::FETCH_ASSOC);
		if( is_array( $fetch ) ){
			return $fetch;
		}
		return array();
	}

	/*
	|---------------------------------------------------------------------------------------------------
	| Retorna un solo objecto
	|---------------------------------------------------------------------------------------------------
	*/
	public function get_one( $stmt  ){
		$fetch = $stmt->fetch(\PDO::FETCH_ASSOC);
		if( is_array( $fetch ) ){
			return $fetch;
		}
		return array();
	}

}