<?php
session_start();
if(isset($_SESSION['token'])){
    require_once('../config/db.php');

    $stmt = $conn->query("INSERT INTO `productos` (`id`, `nombre`, `unidades`, `precio`, `fecha`) VALUES (NULL, 'bufanda', '14', '9.95', '2023-02-24');"); 
    
}
else{
    header('location:../login.html');
}



