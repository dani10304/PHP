<?php

class Producto{

    //propiedades
    private string $nombre="camisa";
    private int $unidades;
    private float $precio;
    private bool $descuento;

    //constructor

    public function __construct($nombre,$unidades,$precio,$descuento){
        $this->nombre=$nombre;
        $this->unidades=$unidades;
        $this->precio=$precio;
        $this->descuento=$descuento;
    }

    //getter - setter (encapsulamiento)
    //gestionar el acceso a las propiedades.

    public function setNombre(string $nombre){
        if($nombre=='admin'){
            echo "nombre no válido";
        }else{
        $this->nombre=$nombre; //almacenar un nombre en la propiedad de la clase
        }
    }
    public function getNombre(){
        return $this->nombre;
    }

    //otros métodos
    public function consultarProducto(){
        echo "<p>Info del producto ".$this->nombre."</p>"; //$this para acceder a propiedades dentro de su clase
       // echo "<p>Unidades del producto ".$this->unidades."</p>"; //genera fatal error si la propiedad NO está inicializada. ahí importante usar isset
    }

    public function calcularTotal(){
        $total=$this->unidades*$this->precio*1.21;
        if($this->descuento)//si descuento es true, se cumple la condición
        {
          // $total = $total*0.93;
           $total*=0.93; //funciona

        }
       
        echo "<p>Total ".round($total,2)." €</p>";//no pones $this porque es una variable local
    }


}//cierra class Producto