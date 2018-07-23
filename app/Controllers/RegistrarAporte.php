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

			$id_anuncio = $args['id_anuncio'];
			d($id_anuncio);
			$data = array(

	 		);
 		return $this->view->render( $response, 'aportar-anuncios/main.twig', $data );
 }
}