<?php
/*
|---------------------------------------------------------------------------------------------------
| Constantes
|---------------------------------------------------------------------------------------------------
*/

$settings = $container->get('settings');

define( 'ABSPATH', dirname( dirname( dirname(__FIle__) ) ) );
define( 'APP_PATH',  ABSPATH . '/app');

define( 'CONNECTION_SIJ',  'bd_personas' );
define( 'CONNECTION_LOGIN',  'bd_personas' );

?>