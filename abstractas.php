<?php
// 9.- PHP Orientado a Objetos - Clases & Metodos abstractos

abstract class molde
{

    abstract public function ingresarNombre($nombre);
    abstract public function obtenerNombre();
}

class persona extends molde
{

    private $mensaje = "Hola gente de pp";
    private $nombre = "";

    public function mostrar()
    {
        print $this->mensaje;
    }

    public function ingresarNombre($nombre, $username= "cf")
    {
        $this->nombre = $nombre ."\n". $username;
    }

    public function obtenerNombre()
    {
        print $this->nombre;

    }
}

$objPersona = new persona();
// $objPersona->mostrar();
$objPersona->ingresarNombre("tt", "ee");
$objPersona->obtenerNombre();
