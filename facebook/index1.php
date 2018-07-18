<?php
require 'vendor/autoload.php';

$poesia = new \App\PoesiaBinaria();

if ($poesia->isLogged())
  {
    echo "Identificado como usuario: ".$poesia->getName()."<br/>";
    echo "Tu ID de Facebook es: ".$poesia->getId()."<br/>";
    echo '<a href="logout.php">Cerrar sesi&oacute;n</a>';
    if (isset($_SESSION['more']))
      echo "<br/>Mensaje: ".$_SESSION['more'];
  }
else
  {
    echo "Usuario no identificado. Pulsa <a href='login.php'>aqu&iacute;</a> para entrar";
  }