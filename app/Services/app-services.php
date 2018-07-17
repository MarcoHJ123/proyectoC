<?php

/*
|---------------------------------------------------------------------------------------------------
| Views - Twig
|---------------------------------------------------------------------------------------------------
*/
$container['view'] = function( $container ){
  $settings = $container->get('settings');
  $view = new Slim\Views\Twig($settings['view']['template_path'], $settings['view']['twig']);
  // Add extensions
  $view->addExtension(new Slim\Views\TwigExtension($container->get('router'), $container->get('request')->getUri()));
  $view->addExtension(new Twig_Extension_Debug());//For dump() function
  $view->addExtension(new App\Includes\TwigRoutesExtension($container->get('router'), $container->get('request')->getUri()));

  return $view;
};

/*
|---------------------------------------------------------------------------------------------------
| Flash Messages - Slim Flash
|---------------------------------------------------------------------------------------------------
*/
$container['flash'] = function( $c ) {
  return new \Slim\Flash\Messages();
};


/*
|---------------------------------------------------------------------------------------------------
| Sessión Helper
|---------------------------------------------------------------------------------------------------
*/
$container['session'] = function ( $container ) {
  return new \SlimSession\Helper;
};
