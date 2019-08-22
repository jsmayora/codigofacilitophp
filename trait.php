<?php
// 11.- PHP Orientado a Objetos - Traits
trait persona2
{
    public $nombre;

    public function mostrarNombre()
    {
        echo $this->nombre;
    }

    abstract public function asignarNombre($nombre);

}

trait trabajador
{
    protected function mensaje(){
        echo "mi nombre es:\n";
    }

    protected function hola(){
        echo "Es del trabajor";
    }
}

class persona
{
    //  uso de trait
    //  tiene orden de presedenfia
    use persona2 , trabajador;

    public function asignarNombre($nombre)
    {
        $this->nombre = self::mensaje() . $nombre;
    }

    public function hola(){
        echo "es de la clase";
    }

}

$objPersona = new persona();
$objPersona->asignarNombre("Tulio");
$objPersona->mostrarNombre();