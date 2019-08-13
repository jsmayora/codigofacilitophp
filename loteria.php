<?php 
// 4.- PHP Orientado a Objetos - Constructores & Destructores
// la function __construct() y function __destruct() deben ser publicas y no deben retrnar nada
class loteria{
	//  Atributos
	public $numero ;
	public $intentos ;
	public $resultado = false;
	

	// Metodos
	public function __construct($numero, $intentos){

		$this->numero = $numero;
		$this->intentos = $intentos;
	}

	public function sortear(){
		$minimo = $this->numero / 2;
		$maximo = $this->numero * 2;
		
		for ($i = 0; $i < $this->intentos; $i++) { 
			# 
			$int = rand($minimo,$maximo);
			self::intentos($int);
		}
	}


	public function intentos($int){
		if ($int == $this->numero) {

			# code...
			echo " <br>" . $int . " == " . $this->numero . "</br><br>"; 
			$this->resultado = true;
		} else {
			# 
			echo $int . " != " . $this->numero . "<br>";
		}
		

	}
	

	public function __destruct(){
		if ($this->resultado) {
			# code...
			echo " Felicidades, has ganado en " . $this->intentos . " intentos "; 

		} else {
			# code...
			echo " Que lastima, has perdido en " . $this->intentos . " intentos "; 
		}
		

	}
}

//  Instanciando el objLoteria
$objLoteria = new loteria(10,10);
$objLoteria->sortear();


?>