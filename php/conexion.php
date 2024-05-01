<?php

$host = "localhost";
$usuario = "root";
$clave = "";
$database = "usuarios";

$conexion = mysqli_connect($host, $usuario, $clave, $database);

if($conexion){
    echo "<script>console.log('Conectado Correctamente');</script>";
} else {
    echo "<script>console.log('No se pudo Conectar');</script>";
    die("Conexión Fallida");
}

?>