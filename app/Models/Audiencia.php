<?php
namespace App\Models;

class Audiencia extends Model {

	public function obtener_audiencias($request){
		$return = array(
				'status' => false,
				'items' => array(),
			);

			$fecha_actual=date("Y-m-d");
			$año=date("Y");

			$data = array(
				'c_usuario_age' => 'ADMIN17',
				'n_anio' =>  $año,
				'dt_fecha' =>  $fecha_actual,
			);

			$result = $this->execute_query( CONNECTION_SIJ, false, 'sp', "usp_age_reporte_x_dependencia", $data );
			$return = array_merge( $return, $result );
			if( $return['status'] ){
				$return['items'] = $this->get_all( $result['stmt'] );
			}
			return $return;
	}
}

?>