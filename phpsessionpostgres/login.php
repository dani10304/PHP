<?php
require_once('config/db.php');
$n=$_POST['nombre'];
$p=$_POST['password'];

$stmt = $conn->query("SELECT * FROM usuarios");
while ($row = $stmt->fetch()) {
    echo $row['nombre']."<br />\n";
    if($row['nombre']==$n and $row['password']==$p){
        echo ("login ok");
        session_start();
        $_SESSION['token']=session_id();
        break;
        
    }
    else{
        echo (" NO login ok. vuelve a intentarlo");
    }
}