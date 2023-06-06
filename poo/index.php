<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Programación orientada a objetos en PHP</h2>
    <a href="https://www.php.net/manual/en/language.oop5.php">POO en PHP</a>
    <hr>
    <h3>Clases en PHP</h3>
    <?php
    require_once('cliente.php');
    $cliente= new Cliente(); //instanciar
    $cliente->saludar(); //llamar a un método
    echo $cliente->nombre; //sin $ en la propiedad ****
    // echo $cliente->apellidos; //genera fatal error porque la propiedad es private
    var_dump($cliente->ciudad); //si funciona, es porque en PHP no indicar visibilidad es public por defecto
    $cliente->nombre="marta"; //setear, modificar el contenido de la propiedad
    echo($cliente->nombre); //leer, la propiedad se ha modificado
   
    ?>
    <h3>Clases y encapsulamiento. getter/setter</h3>
    <?php
    require_once('producto.php');
   // $producto= new Producto(); //en php si hay un constructor en la clase, NO se puede usar el constructor predeterminado
    // $producto->nombre; //genera error porque la propiedad nombre es private. Sólo puedes acceder a ella por getter y setter
    
    $producto=new Producto("pantalón a rayas",15,9.95,False);
    
    $producto->consultarProducto();//debe funcionar porque la función es public
    $producto->calcularTotal();
    
    $producto->setNombre('camisa de moda, verde de flores');//modificación de la propiedad con setter
    $producto->consultarProducto();
    ?>
</body>
</html>