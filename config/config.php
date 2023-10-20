<?php

$dbHost = "localhost";
$dbUser = "root";
$dbPassword = "";
$dbName = "gestion_empleados";

// Conexión a la base de datos
$conn = mysqli_connect($dbHost, $dbUser, $dbPassword, $dbName);

if (!$conn) {
    die("Error de conexión: " . mysqli_connect_error());
}
?>

