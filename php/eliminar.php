<?php

    $id = $_GET['id'];
    include_once "conexion.php";

    //Eliminar Registro de la DB
    $consultaDelete = "DELETE FROM registros WHERE id='".$id."'";
    $resultadoDelete = mysqli_query($conexion, $consultaDelete);

    if($resultadoDelete){
        echo "<script>alert('Los Datos Se Eliminaron con Éxito')</script>";
        header("Location: tablaAdmin.php");
    } else{
        echo "<script>alert('Los Datos No Se Eliminaron Satisfactoriamente')</script>";
        header("Location: tablaAdmin.php");
    }

?>