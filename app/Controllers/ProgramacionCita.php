<?php
namespace App\Controllers;

use App\Models\Cita;
use App\Models\Distrito;
use App\Models\Horario;
use App\Models\Motivo;
use App\Models\Audiencia;
use App\Models\Feriados;
use App\Models\Personas;


class ProgramacionCita extends Controller {

	/*
	|---------------------------------------------------------------------------------------------------
	| Página programación cita
	|---------------------------------------------------------------------------------------------------
*/

	public function inicio( $request, $response, $args ){

			$arrayMeses = array('Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio','Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre');
	   	$arrayDias = array( 'Domingo', 'Lunes', 'Martes','Miercoles', 'Jueves', 'Viernes', 'Sabado');

			$data = array(
				'dia' => $arrayDias[date('w')]." ".date('d')." de ".$arrayMeses[date('m')-1]." de ".date('Y'),

	 		);
 		return $this->view->render( $response, 'listar-audiencias/main.twig', $data );
 }



 public function crearticket( $request, $response, $args ){

			$arrayMeses = array('Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio','Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre');
	   	$arrayDias = array( 'Domingo', 'Lunes', 'Martes','Miercoles', 'Jueves', 'Viernes', 'Sabado');

			$data = array(
				'dia' => $arrayDias[date('w')]." ".date('d')." de ".$arrayMeses[date('m')-1]." de ".date('Y'),

	 		);

 	return $this->view->render( $response, 'crear-ticket/main.twig', $data );
 }

 public function inicio3( $request, $response, $args ){
 		$data = array();
 	return $this->view->render( $response, 'login/login.twig', $data );
	}
	}

