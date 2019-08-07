<?php 
/**
 * clase que tiene los datos de una persona
 */
class persona{
	// Atributos
	public $nombre= array();
	public $apellido= array();


	
	// public function hablar($mensaje)
	// {
	// 	# code...
	// 	echo $mensaje;
	// }
	
	public function guardar($nombre,$apellido){
		$this->nombre[]= $nombre;
		$this->apellido[] = $apellido;
	}

	public function mostrar(){
		for ($i=0; $i < count($this->nombre); $i ++){
			// forma 1
			// $this->formato($this->nombre[$i], $this->apellido[$i]);
			// forma 2
			// self::formato($this->nombre[$i], $this->apellido[$i]);
			// forma 3
			persona::formato($this->nombre[$i], $this->apellido[$i]);
		}
	}

// metodo para mostar lo hecho en guardar datos
	public function formato($nombre,$apellido){
		echo "Nombre: " . $nombre . " | Apellido: " . $apellido . "<br>";
	}
}

// instanciar a una clase para que funciones
$objPersona = new persona();
//  llamando el atributo persona
// echo $objPersona->nombre;

// echo $objPersona->hablar("Saludos desde Crscs");

$objPersona->guardar("Juan","Peres");
$objPersona->guardar("Ana","teresa");
$objPersona->mostrar();
?>