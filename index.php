<?php

//Incluyo los archivos necesarios
require("./controller/Controller.php");

//Instancio el controlador
$controller = new Controller;

if (isset($_GET['op'])) {

  $opcion = $_GET['op'];

  if ($opcion == "crear") {
    $controller->Acceder();
  } elseif ($opcion == "correcto") {
    $controller->AccederDashboard();
  } elseif ($opcion == "olv") {
    $controller->RecuperarCuenta();
  } else {
    $controller->Index();
  }
} else {

  //Llamo al método por defecto del controlador
  $controller->Index();
}
