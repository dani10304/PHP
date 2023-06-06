<?php

class Cliente{

    //no hay constructor, al crear instancia con new, se usa un constructor por defecto

    //atributo, propiedad
    public $nombre="juan";//no se define el tipo de dato
    private $apellidos="lopez";
    var $ciudad="madrid"; // sin modificador de acceso, qué es? public
    //método
    public function saludar(){
        echo "<p>hola qué tal</p>";
    }


}//cierra class



