<?php
// 12.- PHP Orientado a Objetos - Namespaces

//   forma 1 de llamar a las clases de la carpeta api
// llamar al nombre de espacio
// require_once("api/models/persona.php");
// require_once("api/controllers/personasController.php");

//  llamando las clase del modelo
// models\persona::hola();

//  llamando la la clase del controlador
// controllers\persona::hola();


//   forma 2 de llamar a las clases de la carpeta api
// llamar al nombre de espacio
spl_autoload_register(function($clase){
 $ruta =  "api/" . str_replace("\\", "/", $clase) . ".php";
 if (is_readable($ruta)) {
     # code...
     require_once $ruta;
 } else {
     # code...
     echo "el archivo no existe";
 }
 
}); 

//  llamando las clase del modelo
models\persona::hola();

//  llamando la la clase del controlador
controllers\personascontrollers::hola();
?>
