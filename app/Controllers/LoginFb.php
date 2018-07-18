<?php
namespace App\Controllers;

use App\Models\UsuarioFb;

class LoginFb extends Controller {

		public function inicio( $request, $response, $args ){
			$data = array();
 			return $this->view->render( $response, 'loginFb/main.twig', $data );
		}

}