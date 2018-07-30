<?php
namespace App\Controllers;

use App\Models\Usuario;
use App\Models\Anuncio;
use App\Models\Aporte;
// use App\Models\Institucion;

class PerfilUsuario extends Controller {

public function inicio( $request, $response, $args ){
		$user_login = $this->session->exists('user_login') ? $this->session->user_login : array();

		$obj = new Usuario();
		$resultado = $obj->datos_usuario( $user_login['id_login'] );
		$datosu = array();
		if( $resultado['status'] ){
			$datosu = $resultado['item'];
		}

		$obj2 = new Anuncio();
		$resultado2 = $obj2->listar_anuncios_x_usuario( $user_login['id_login'] );
		$anuncioU = array();
		if( $resultado2['status'] ){
			$anuncioU = $resultado2['items'];
		}

		$data = array(
			'datosu' => $datosu,
			'anuncioU' => $anuncioU,
 		);

 		 // d($data);
 		return $this->view->render( $response, 'perfil-usuario/main.twig', $data );
  }

public function detalle( $request, $response, $args ){
		$user_login = $this->session->exists('user_login') ? $this->session->user_login : array();
		$id_anuncio = $args['id_anuncio'];

		// $obj2 = new Anuncio();
		// $resultado2 = $obj2->buscar_anuncio( $id_anuncio );
		// $anuncio = array();
		// if( $resultado2['status'] ){
		// 	$anuncio = $resultado2['items'];
		// }

		$obj3 = new Aporte();
		$resultado3 = $obj3->aporte_anuncio( $id_anuncio );
		$aportes = array();
		if( $resultado3['status'] ){
			$aportes = $resultado3['items'];
		}

		$data = array(
			// 'anuncio' => $anuncio,
			'aportes' => $aportes,
 		);

 		 // d($data);
 		return $this->view->render( $response, 'perfil-usuario/inc/detalle.twig', $data );
  }

public function editar( $request, $response, $args ){
		$user_login = $this->session->exists('user_login') ? $this->session->user_login : array();
		$id_anuncio = $args['id_anuncio'];

		$obj2 = new Anuncio();
		$resultado2 = $obj2->buscar_anuncio( $id_anuncio );
		$anuncio = array();
		if( $resultado2['status'] ){
			$anuncio = $resultado2['items'];
		}

		// $obj3 = new Aporte();
		// $resultado3 = $obj3->aporte_anuncio( $id_anuncio );
		// $aportes = array();
		// if( $resultado3['status'] ){
		// 	$aportes = $resultado3['items'];
		// }

		$data = array(
			'anuncio' => $anuncio,
			// 'aportes' => $aportes,
 		);

 		 d($data);
 		return $this->view->render( $response, 'perfil-usuario/inc/editar_anuncio.twig', $data );
  }
	public function editar_anuncio( $request, $response, $args ){
		$id_anuncio = $request->getParam('id_anuncio');
		$return = array(
			'success' => false,
			'html' => '',
		);

		if( ! is_ajax() ) {
			$return['html'] = 'ajax-error';
			return json_encode( $return );
		}

		$user_login = $this->session->exists('user_login') ? $this->session->user_login : array();

		$error = false;
		$obj_cita = new Anuncio();
		$resultado = $obj_cita->edicion( $request , $id_anuncio);

		if( $resultado['status'] == true ){
			$mensaje = "creado";
			$return['id2'] = $request->getParam('id_anuncio');
		} else {
			$error = true;
		}

		if( $error ){
			$return['error'] = $resultado['error'];
			$return['sql'] = $resultado['sql'];
		} else {
			$return['success'] = true;
		}

		return json_encode( $return );


}


}