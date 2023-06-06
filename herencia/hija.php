<?php
require_once('padre.php');
class Hija extends Padre{ //herencia simple

    //propiedades
    public string $nombre;
    public int $unidades;
    public float $precio;
    public bool $existencias;

    //constructor
    public function __construct($n,$u,$p,$e){
        $this->nombre=$n;
        $this->unidades=$u;
        $this->precio=$p;
        $this->existencias=$e;

    }//cierra constructor

    //getter - setter : encapsulamiento

    //métodos
    //sobrecarga, overload con parámetros predeterminados
    public function verHija(string $dato="un ejemplo"){
        if($dato=="un ejemplo"){
            echo "<p>esto es un ejemplo</p>";
        }
        else{
        echo("<h3>Datos de la clase hija</h3>");
        echo("<h3>Nombre ".$this->nombre."</h3>");
        echo("<h3>Unidades ".$this->unidades."</h3>");
        echo("<h3>Precio ".$this->precio."</h3>");
        echo("<h3>Existencias ".$this->existencias."</h3>");
        }
    }//cierra verHija

    

    //sobreescritura - override:dos métodos iguales en padre e hija :herencia
    public function saludarPadre(){
        echo("<p>hola desde el padre, pero estoy en hija</p>");
    }

}//cierra la clase