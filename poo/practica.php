<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Llamar clase Proveedor</h2>
    <?php
    require('proveedor.php');
    $proveedor=new Proveedor("telefonica","sevilla");//instanciar la clase proveedor
    //usando un constructor por defecto
    $proveedor->hacerPedido();
    $proveedor->nombre="Alten";//setter en la propiedad
    echo("<p>El proveedor elegido es ".$proveedor->nombre."</p>");
    echo("<hr>");
    $proveedor2=new Proveedor("indra","madrid");
    $proveedor2->hacerPedido();
    ?>
</body>
</html>