<?php
namespace App\Controllers;

use App\Models\Cita;
use App\Models\Distrito;
use App\Models\Horario;
use App\Models\Motivo;
use App\Models\Audiencia;
use App\Models\Feriados;
use App\Models\Personas;


class RegistrarAporte extends Controller {

	/*
	|---------------------------------------------------------------------------------------------------
	| Página programación cita
	|---------------------------------------------------------------------------------------------------
*/

	public function inicio( $request, $response, $args ){

			$id_ticket = $args['id_ticket'];
			d($id_ticket);
			$data = array(

	 		);
 		return $this->view->render( $response, 'aportar-anuncios/main.twig', $data );
 }
}