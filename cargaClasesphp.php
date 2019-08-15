<?php
// 10.- PHP Orientado a Objetos - Autoload

// formma 1
function autoload($clase){
    // incluye la clase que se encuentra en la carpeta clases
    // forma 1
    include "clases" ."/". $clase . ".php";

    //  forma 2
    // $archivo = "clase" . "/". $clase . "php";
    // include_once($archivo);
}

// formma 2

spl_autoload_register("autoload");

//  instanciando la clase
persona::mostrar("Hola mundo");
echo "<br>";
auto::mostrar("heall");


?>