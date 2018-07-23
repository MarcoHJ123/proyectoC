<?php
namespace App\Models;

class Personas extends Model {

	public function listar_personas(){
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
}

?>