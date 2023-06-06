<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>La liga</h2>
    <?php
    require('jugador.php');
    $jugador=new Jugador("benzema","rm",33,1000);
    $jugador->verJugador();
    $jugador->renovarJugador();
    $jugador->calcularFicha();
    ?>
</body>
</html>