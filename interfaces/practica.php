<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Ejercicio práctico de intefaces</h2>
    <p>
    Nuestro cliente nos ha pedido desarrollar un videojuego.
El cliente me pide unos items, insights... :
-combate
-ganar/perder
-niveles
Lo muestras / pruebas en practica.php, pero la info
está en las clases.
Nuestro equipo plantea dos versiones de juego:
1. "educativa". combate... preguntas de física y química
dos jugadores, combaten contra 10 preguntas al azar
si uno gana, pasa al siguiente nivel y reta a otro jugador

2. "lúdica". combate... dos personajes que luchan karate.
el ganador, pasa el siguiente nivel y reta a otro jugador

Solución.
clases - interfaces

demo del juego
juego1.combatir()
juego1.resultado()
juego1.pasarNivel()

lo mismo juego2

juego1, juego2 : son instancias de clase
clase Juego : propiedades, constrcutor, metodos,..

por si queremos otros juegos diferentes, mejor 
los items del cleinte los metemos en una interace
interface Requisitos... combatir, resultado, pasarNivel



    </p>
</body>
</html>