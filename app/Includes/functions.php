<?php

/*
|---------------------------------------------------------------------------------------------------
| Debug
|---------------------------------------------------------------------------------------------------
*/
function dlog($var){
  echo '<br>';
  echo '<pre>';
  var_dump($var);
  echo '</pre>';
}

/*
|---------------------------------------------------------------------------------------------------
| Devuelve ajustes de un archivo json
|---------------------------------------------------------------------------------------------------
*/
function get_settings_file( $file ){
  $settings = @file_get_contents( ABSPATH."/settings/$file" );
  if( $settings !== false ){
    return json_decode( $settings, true );
  }
  return null;
}

/*
|---------------------------------------------------------------------------------------------------
| Devuelve el dominio de una url
|---------------------------------------------------------------------------------------------------
*/
function url_to_domain( $url, $length = 50 ){
  $host = parse_url( $url, PHP_URL_HOST );
  //If the URL can't be parsed, use the original URL
  if( ! $host ){
    $host = $url;
  }
  //Remove www.
  if( substr( $host, 0, 4 ) == 'www.' ){
    $host = substr($host, 4);
  }
  //Limit the domain length
  if( strlen( $host ) > $length ){
    $host = substr( $host, 0, $length - 3 ) . '...';
  }
  return $host;
}

/*
|---------------------------------------------------------------------------------------------------
| Comprueba una solicitud ajax
|---------------------------------------------------------------------------------------------------
*/
function is_ajax(){
  if( !empty( $_SERVER['HTTP_X_REQUESTED_WITH'] ) && strtolower( $_SERVER['HTTP_X_REQUESTED_WITH'] ) == 'xmlhttprequest' ) {
    return true;
  }
  return false;
}

/*
|---------------------------------------------------------------------------------------------------
| Random string
|---------------------------------------------------------------------------------------------------

function random_string( $length = 10, $type = 'mixed' ){
  $letters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
  $numbers = '0123456789';
  $str = $letters.$numbers;
  if( $type == 'letters' ){
    $str = $letters;
  } elseif( $type == 'numbers' ){
    $str = $numbers;
  }
  return substr( str_shuffle( $str ), 0, $length );
}*/


// |---------------------------------------------------------------------------------------------------
// | Encriptar password
// |---------------------------------------------------------------------------------------------------

function encriptar_password( $clave ){
  $nueva_clave = '';
  $c_len = strlen( $clave );
  $resta = 0;
  for( $i = 0; $i < $c_len; $i++ ){
    $char = substr( $clave, $i, 1 );
    $acsii = ord( $char );
    if( is_numeric( $char ) ){
      //Si es un número
      if( $acsii > 47 && $acsii < 58 ){
        $resta = 64 + $acsii - 47;
      }
    } else {
      //Si es un caracter mayúscula
      switch( $acsii ){
        case ( $acsii >=65 && $acsii <= 75 ):
          $resta = 47 + $acsii - 64;
          break;
        case ( $acsii >=76 && $acsii <= 86 ):
          $resta = 47 + $acsii - 75;
          break;
        case ( $acsii >=87 && $acsii <= 90 ):
          $resta = 47 + $acsii - 86;
          break;
        default:
          //Si es un símbolo
          $resta = $acsii;
          break;
      }
    }
    $nueva_clave .= chr( $resta );
  }
  return $nueva_clave;
}

/*
|---------------------------------------------------------------------------------------------------
| Retorna un array con el código cita y el código validador
|---------------------------------------------------------------------------------------------------
*/
function get_codigos_cita( $full_codigo ){
  $c_validador = substr( $full_codigo, -4, 4);
  $c_cita = str_replace( $c_validador, '', $full_codigo );
  return array(
    'c_cita' => $c_cita,
    'c_validador' => $c_validador,
  );
}

/*
|---------------------------------------------------------------------------------------------------
| Envío mensajes por celular
|---------------------------------------------------------------------------------------------------

function enviar_mensaje_celular( $numero_cel, $mensaje = '' ){
  $smsMensaje = get_settings_file( 'sms-mensaje.json' );
  if( ! is_array( $smsMensaje ) ){
    return null;
  }
  $enviado = false;
  if( isset( $smsMensaje['activo'] ) && $smsMensaje['activo'] && $numero_cel ){
    $objSms = new \SmsGateway( $smsMensaje['client_email'], $smsMensaje['client_password'] );
    $resultado = $objSms->sendMessageToNumber( $numero_cel, $mensaje, $smsMensaje['client_id'] );//numero a enviar, mensaje , id dispositivo
    $enviado = $resultado['response']['success'];
  }
  return $enviado;
}*/


function my_array_sort($array, $on, $order=SORT_ASC){

    $new_array = array();
    $sortable_array = array();

    if (count($array) > 0) {
        foreach ($array as $k => $v) {
            if (is_array($v)) {
                foreach ($v as $k2 => $v2) {
                    if ($k2 == $on) {
                        $sortable_array[$k] = $v2;
                    }
                }
            } else {
                $sortable_array[$k] = $v;
            }
        }

        switch ($order) {
            case SORT_ASC:
                asort($sortable_array);
                break;
            case SORT_DESC:
                arsort($sortable_array);
                break;
        }

        foreach ($sortable_array as $k => $v) {
            $new_array[$k] = $array[$k];
        }
    }

    return $new_array;
}