<?php 
// 7.- PHP Orientado a Objetos - Static

class pagina {
    // atributos
    public $nombre = "Ver";

    public static $url = "www.ver.com";

    // Metodos
    public function bienVenida(){
        // echo "bienvenidos a <b>" .$this->nombre . "</b> la pagina es <b>" .$this->url . "<b><br>";
        // formas para llamar a un atributo de type static
        echo "bienvenidos a <b>" .$nombre . "</b> la pagina es <b>" .
         pagina::$url . "<b><br>";

        // echo "bienvenidos a <b>" .$this->nombre . "</b> la pagina es <b>" .pagina::url . "<b><br>";
    }
    public static function bienVenida2(){
        echo "bienvenidos a " . self::$url;
    }
}

// llamando aun metodo sin instanciar la clase
// pagina::bienVenida2();

pagina::bienVenida();
 ?>