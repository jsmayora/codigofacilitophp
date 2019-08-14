<?php 
//  5.- PHP Orientado a Objetos - Modificadores de acceso
class facebook{
	// Atributos
	public $nombre;
	public $edad;
	private $pass;
	// protected $pass; // contraseña
	
	// Metodos
	public function __construct($nombre, $edad,$pass){
		$this->nombre = $nombre;
		$this->edad = $edad;
		$this->pass = $pass;
		// echo "llego";exit;

	}

	public function verInformacion(){
		echo "Nombre: "   . $this->nombre  .  "<br>";
		echo "Edad: "     . $this->edad .  "<br>";
		echo "Password: " . $this->pass .  "<br>";
	}

	// Metodo para cambiar la clave
	private function cambiarPass($pass){
		$this->pass = $pass;

	}

}

$objFacebook = new facebook("juan",20,"123");

$objFacebook->verInformacion();

?>