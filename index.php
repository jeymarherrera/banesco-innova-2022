<?php

//Incluyo los archivos necesarios
require("./controller/Controller.php");

//Instancio el controlador
$controller = new Controller;

if (isset($_GET['op']))
{
    $opcion=$_GET['op'];
    if ($opcion=="acceder"){
    //Llamo al método ver pasándole la clave que me están pidiendo en signin
        
    $controller->Ingresar();

    }
    elseif ($opcion=="registrar"){ //falta

      //Llamo al método ver pasándole la clave que me están pidiendo en registro del home
  
      $controller->GuardarDatos();
      }
    elseif ($opcion=="login"){ //falta

    //Llamo al método ver pasándole la clave que me están pidiendo en registro del home

    $controller->Login();
    }
    elseif ($opcion=="permitido"){

        //Llamo al método ver pasándole la clave que me están pidiendo para ingresar al db
    
        $controller->IngresarDashboard();
    } 
    elseif ($opcion=="olvido"){

      //Llamo al método ver pasándole la clave que me están pidiendo para ingresar al db
  
      $controller->RecuperarCuenta();
  } 
    else{

    //Llamo al método por defecto del controlador
        $controller->Index();
    }
}
else{
        //Llamo al método por defecto del controlador
        $controller->Index();
    }
