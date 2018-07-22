<?php

namespace App\Middlewares;

class Admin extends Middleware {

	public function __invoke(  $request, $response, $next  ){

		if( ! $this->container->Login->esta_conectado() ){
			$this->container->flash->addMessage( 'error', 'Por favor Inicia Sesión.' );
			return $response->withRedirect( $this->container->router->pathFor( 'pagina_login' ) );
		}
		$response = $next( $request, $response );
		return $response;
	}
}