<?php

class Proveedor{

    //propiedades, atributos
    public $nombre;
    public $ciudad;
    //constructor
    public function __construct(string $nombre,string $ciudad){
        $this->nombre=$nombre;
        $this->ciudad=$ciudad;
    }
    //getter y setter

    //métodos
    public function hacerPedido(){
        echo("<p>Pedido realizado al proveedor ".$this->nombre."</p>");
       
    }

}//cierra clase


