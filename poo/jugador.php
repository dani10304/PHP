<?php

class Jugador{
    //atributos, propiedades
    public $nombre;
    public $equipo;
    public $edad;
    private $salario;
//constructor
    public function __construct($n,$e,$ed,$s){
        $this->nombre=$n;
        $this->equipo=$e;
        $this->edad=$ed;
        $this->salario=$s;

    }//cierra constructor

    public function verJugador(){
        echo("<h2>Ficha de jugador</h2>");
        echo("<p>Nombre : ".$this->nombre."</p>");
        echo("<p>Equipo : ".$this->equipo."</p>");
        echo("<p>Edad : ".$this->edad."</p>");
    }//cierra verJugador

    public function renovarJugador(){
        if($this->edad<28){
            echo("<h2>Renovación para 4 años más</h2>");
        }//cierra if
        elseif($this->edad>=28 && $this->edad<32){
            echo("<h2>Renovación para 2 años únicamente</h2>");
        }
        else{
            echo("<h2>Renovación año a año</h2>");
        }
    }//cierra método

    public function calcularFicha(){
        if($this->equipo=="rm"){ //operador de comparación
            $this->salario*=1.05;
        }
        elseif($this->equipo=="castilla"){
            $this->salario*=1.02;
        }
        else{
            echo("<p>El equipo no es válido</p>");
        }
        echo("<h3>La nueva ficha asciende a ".$this->salario."</h3>");
    }

}//cierra clase