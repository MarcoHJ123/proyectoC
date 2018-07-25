<?php
namespace App\Includes;

class Connections {
	private $connections = array();
	private $settings = array();
	private $last_connection = null;
	private $stmt = null;
	public $sql = '';

	public function __construct( $data = array() ){

	}

	/*
	|---------------------------------------------------------------------------------------------------
	| Agrega una conexión
	|---------------------------------------------------------------------------------------------------
	*/
	public function addConnection( $name, $data ){
		$this->settings[$name] = $data;

		if( is_array( $data ) ){
			$driver = ! empty( $data['driver'] ) ? $data['driver'] : '';
			$dsn = ! empty( $data['dsn'] ) ? $data['dsn'] : '';
			$database = ! empty( $data['database'] ) ? $data['database'] : '';
			$username = ! empty( $data['username'] ) ? $data['username'] : '';
			$password = ! empty( $data['password'] ) ? $data['password'] : '';
<<<<<<< HEAD
			

			$this->settings[$name]['string'] = "$driver:DSN=$dsn;DBN=$database;UID=$username;PWD=$password;";

=======
			$this->settings[$name]['string'] = "$driver:DSN=$dsn;DBN=$database;UID=$username;PWD=$password;";
>>>>>>> 8b33cb5b7ec7a940f50d56d5451f0bab2d0b81a5
		} else {
			$this->settings[$name]['string'] = $data;
		}

	}

	/*
	|---------------------------------------------------------------------------------------------------
	| Realiza la conexión
	|---------------------------------------------------------------------------------------------------
	*/
	public function connect( $name ){
		if( empty( $name ) ){
			return false;
		}
		if( isset( $this->connections[$name] ) && $this->isConnectionOpen( $this->connections[$name] ) ){
			return $this->connections[$name];
		}
		try {
		  $this->connections[$name] = new \PDO( $this->settings[$name]['string'] );
		 //  $tz = (new \DateTime('now', new \DateTimeZone('America/Lima')))->format('P');
			// $this->connections[$name]->exec("SET time_zone='$tz';");


		  $this->last_connection = $this->connections[$name];
		  return true;
		}
		catch ( \PDOException $e ){
		  echo 'Conexion fallida: ' . $e->getMessage();
		  return false;
		}
		return false;
	}

	/*
	|---------------------------------------------------------------------------------------------------
	| Cierra la conexión
	|---------------------------------------------------------------------------------------------------
	*/
	public function close( $name ){
		if( isset( $this->connections[$name] ) ){
			$this->connections[$name] = null;
		}
	}

	/*
	|---------------------------------------------------------------------------------------------------
	| Comprueba el estado de la conexión
	|---------------------------------------------------------------------------------------------------
	*/
	public function connectionStatus( $name ){
		$connection = $this->getConnection( $name );
		return $connection;
	}

	/*
	|---------------------------------------------------------------------------------------------------
	| Comprueba si la conexión existe y está abierta
	|---------------------------------------------------------------------------------------------------
	*/
	public function isConnectionOpen( $connection ){
		return $connection != null && is_a( $connection, '\PDO' );
	}

	/*
	|---------------------------------------------------------------------------------------------------
	| Retorna una conexión
	|---------------------------------------------------------------------------------------------------
	*/
	public function getConnection( $name = '' ){
		if( empty( $name ) ){
			if( $this->isConnectionOpen( $this->last_connection ) ){
				return $this->last_connection;
			}
		} else {
			if( isset( $this->connections[$name] ) && $this->isConnectionOpen( $this->connections[$name] ) ){
				return $this->connections[$name];
			}
		}
		return null;
	}


	/*
	|---------------------------------------------------------------------------------------------------
	| Prepara la consulta para un procedimiento almacenado
	|---------------------------------------------------------------------------------------------------
	*/
	public function prepare_sp( $connection, $sp, $data = array() ) {
	  $args = '';
	  if( ! empty( $data ) && is_array( $data ) ){
	    $args = ':' . implode( ',:', array_keys( $data ) );
	  }
	  $this->sql = "CALL $sp($args)";

	  return $this->prepare_sql( $connection, $this->sql, $data );
	}


	/*
	|---------------------------------------------------------------------------------------------------
	| Prepara la consulta para un Insert
	|---------------------------------------------------------------------------------------------------
	*/
	public function prepare_insert( $connection, $table, $data = array() ) {
		$this->sql = 'INSERT INTO '.$table;
	  if( ! empty( $data ) && is_array( $data ) ){
	    $columns = implode( ',', array_keys( $data ) );
	    $values = ':' . implode( ', :', array_keys( $data ) );
	    $this->sql .= "($columns) VALUES($values)";
	    foreach ( $data as $field => $value ) {
	      if( $value == 'NOW()' || $value == 'now()' ){
	        $this->sql = str_replace( ':'.$field, 'NOW()', $this->sql  );
	      }
	    }
	  }
		return $this->prepare_sql( $connection, $this->sql, $data );
  }


  /*
	|---------------------------------------------------------------------------------------------------
	| Prepara la consulta para un Update
	|---------------------------------------------------------------------------------------------------
	*/
	public function prepare_update( $connection, $table, $data = array(), $primary_key = null ) {
		$this->sql = 'UPDATE '.$table.' SET ';
	  if( ! empty( $data ) && is_array( $data ) ){
	  	//Capturamos el valor del primary key y lo eliminamos de la data
	  	$pk_value = $primary_key != null && ! empty( $data[$primary_key] ) ? $data[$primary_key] : '';
	  	unset( $data[$primary_key] );
	    foreach ( $data as $field => $value ) {
	      if( $field != $primary_key ){
	        if( $value == 'NOW()' || $value == 'now()' ){
	        	$this->sql .= " $field = NOW(),";
	        } else {
	        	$this->sql .= " $field = :$field,";
	        }
	      }
	    }
	    $this->sql = rtrim( $this->sql, ', ');
	    if( $primary_key != null ){
	    	$this->sql .= " WHERE $primary_key = $pk_value";
	    }
	  }

		return $this->prepare_sql( $connection, $this->sql, $data );
  }

  /*
	|---------------------------------------------------------------------------------------------------
	| Asigna parámetros a la consulta preparada
	|---------------------------------------------------------------------------------------------------
	*/
  public function prepare_sql( $connection, $sql, $data = array() ){
  	$this->sql = $sql;
  	$this->stmt = $connection->prepare( $this->sql );
		if( $this->stmt ){
			foreach ( $data as $field => $value ) {
				if( $value != 'NOW()' && $value != 'now()' ){
        	$this->set_pdo_value( ':'.$field, $value );
        }
	    }
	    return $this->stmt;
	  }
	  return false;
  }

  /*
	|---------------------------------------------------------------------------------------------------
	| Asigna parámetros a la consulta preparada
	|---------------------------------------------------------------------------------------------------
	*/
  private function set_pdo_value( $param, $value, $type = null ){
    if ( is_null( $type ) ) {
      switch( true ) {
        case is_int( $value ):
          $type = \PDO::PARAM_INT;
          break;
        case is_bool( $value ):
          $type = \PDO::PARAM_BOOL;
          break;
        case is_null( $value ):
          $type = \PDO::PARAM_NULL;
          break;
        default:
          $type = \PDO::PARAM_STR;
      }
    }
    $this->stmt->bindValue( $param, $value, $type );
  }

}

?>
