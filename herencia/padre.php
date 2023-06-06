<?php
abstract class Padre{//no puede instanciarse Padre
    //sus métodos se pueden usar en herencia

public function saludarPadre(){
    echo("<p>hola desde el padre</p>");
}

}//cierra class