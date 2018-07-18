<?php
require 'vendor/autoload.php';

$poesia = new \App\PoesiaBinaria();

$poesia->logout();
header('Location: index1.php');