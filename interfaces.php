<?php
// 8.- PHP Orientado a Objetos - Interfaces


interface auto
{
    public function encender();
    public function apagar();
}

interface gasolina extends auto
{
    public function vaciarTanque();
    public function llenarTanque($cant);

}

class deportivo implements gasolina
{
    //   public function ver(){
    //       echo "hola";
    //   }

    private $estado = false;
    private $tanque = 0;

    public function estado()
    {
        if ($this->estado) {
            # code...
            print "El auto esta encendido y tiene". $this->tanque ." de litros en el tanque. <br>";
        } else {
            # code...
            print "El auto esta apagando <br>";
        }

    }

    public function encender()
    {
        if ($this->estado) {
            # code...
            print "No puedes encender el auto 2 veces <br>";

        } else {
            # code...
            if($this->tanque <= 0){
                print "Usted no puede encender el auto porque el tanque esta vacio <br>";

            }else{
                print "Auto encendido <br>";
            $this->estado = true;
            }
            
        }

    }

    public function apagar()
    {
        if ($this->estado) {
            # code...
            print "Auto apagado <br>";
            $this->estado = false;

        } else {
            # code...
            print "El auto esta apagado <br>";
            // $this->estado = true;
        }

    }

    public function vaciartanque()
    {
        $this->tanque = 0;

    }

    public function llenarTanque($cant)
    {
        $this->tanque = $cant;

    }

    //  Metodo propio de la clase
    public function usar($km){
        if ($this->estado) {
            # code...
            $reducir = $km / 3;
            $this->tanque = $this->tanque . $reducir; 
            if ($this->estado <= 0) 
                $this->estado = false;
                # code...
            } else {
                # code...
                print "El auto esta apagado y no se puede usar <br>";
            }
        }
        
    
}

// instanciando al objeto
$objDeportivo = new deportivo();
// $objDeportivo->ver();

$objDeportivo->llenarTanque(100);
$objDeportivo->encender();

//metodo para usar el auto 
$objDeportivo->usar(20);
$objDeportivo->estado();




?>