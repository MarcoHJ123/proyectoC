<?php
require 'vendor/autoload.php';

$poesia = new \App\PoesiaBinaria();

if ($poesia->login())
  {
    echo 'Logged in as ' . $poesia->getName(). "(".$poesia->getId().")";
    header('Location: index1.php');
  }