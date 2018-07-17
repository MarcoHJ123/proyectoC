<?php
namespace App\Controllers;

use App\Models\Cita;
use App\Models\Distrito;
use App\Models\Horario;
use App\Models\Instancia;
use App\Models\Juzgado;
use App\Models\Motivo;
use App\Models\Parte;
use App\Models\Ticket;

class Ajustes extends Controller {

	/*
	|---------------------------------------------------------------------------------------------------
	| Página principal.
	|---------------------------------------------------------------------------------------------------
	*/
	public function inicio( $request, $response, $args ){

		return $this->view->render( $response, 'ajustes/ajustes-main.twig' );

	}




}