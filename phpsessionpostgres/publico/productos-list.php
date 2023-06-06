<?php
require_once('../config/db.php');

$stmt = $conn->query("SELECT * FROM productos");
while ($row = $stmt->fetch()) {
    echo $row['nombre']."<br />\n";
}