<?php
date_default_timezone_set('America/Lima');
\Kint::$max_depth = 0;

return array(
  'settings' => array(
    'displayErrorDetails' => true, // set to false in production
    'addContentLengthHeader' => false, // Allow the web server to send the content-length header

    //Twig settings
    'view' => array(
      'template_path' => __DIR__ . '/Views',
      'twig' => array(
        'cache' => __DIR__ . '/../cache/twig',
        'debug' => true,
        'auto_reload' => true,
      ),
    ),

    //Monolog settings
    'logger' => array(
      'name' => 'slim-app',
      'path' => isset($_ENV['docker']) ? 'php://stdout' : __DIR__ . '/../logs/app.log',
      'level' => \Monolog\Logger::DEBUG,
    ),
  ),
);