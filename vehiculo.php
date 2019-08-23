<?php 
//  6.- PHP Orientado a Objetos - Herencia

class vehiculo {
	// Atributos
	public $motor = false;
	public $marca;
	public $color;


	// Metodos 
	// visibilidad public,protected y private static
	public function estado(){
		if ($this->motor) {
			# code...
			echo "El motor esta encendido <br>";
		} else {
			# code...
			echo "El motor esta apagado <br>";
		}
	}

	public function encender(){
		if ($this->motor) {
			# code...
			echo "Cuidado, el motor ya esta prendido <br>";

		} else {
			# code...
			// instanciar la propiedad motor para saber si el motor esta encendido
			$this->motor = true;
			echo "El motor ahora esta encendido <br>";
			
		}
	}

}
//  instanciando la clase vehiculo

// $objVehiculo = new vehiculo();
// $objVehiculo->estado();
// $objVehiculo->encender();
// $objVehiculo->estado();



class moto extends vehiculo{
	
	public function estadoMoto(){
		// instanciando el metodo estado de la clase vehiculo
		$this->estado();
	}
}

// $objMoto = new moto();
// $objMoto->estadoMoto();

class cuatriMoto extends moto{

}

// Instanciando cuatriMoto

$objCuatriMoto = new cuatriMoto();
$objCuatriMoto->estado();


?>