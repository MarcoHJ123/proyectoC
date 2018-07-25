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
