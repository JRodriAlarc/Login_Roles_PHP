<?php

    include_once "conexion.php";
    $datos = "SELECT * FROM registros";

    session_start();
    $usuario = $_SESSION['username'];

    if(!isset($usuario)){
        header("location: ../index.php"); 
    }else{

        if($_SESSION['userrol'] == 'Vendedor'){
            header("location: tablaVendedor.php");
        } 
        elseif($_SESSION['userrol'] == 'Administrador'){
            header("location: tablaAdmin.php");
        }
        else{

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../img/2726000.png">
    <script src="https://kit.fontawesome.com/8a7c80030f.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/all.min.css">
    <link rel="stylesheet" href="../css/home.css">
    <title>Base de Datos</title>
</head>
<body>
    
    <div class="container">
        <div class="container-table">
            <table class="tabla">
                <caption>Usuarios Registrados en la Base de Datos:</caption>
                <tr>
                    <!--<th>Id</th>-->
                    <th>Nombre:</th>
                    <th>Email:</th>
                    <th>Telefono:</th>
                    <th>Rol:</th>
                    <!--<th>Opciones:</th>-->
                </tr>
                
                <?php 
                
                    $resultado = mysqli_query($conexion, $datos); 
                    
                    while($row = mysqli_fetch_assoc($resultado)){
                ?>

                <tr>
                    <!--<td><?php echo $row['id']; ?></td>-->
                    <td><?php echo $row['nombre']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['telefono']; ?></td>
                    <td><?php echo $row['rol']; ?></td>
                </tr>
                    
                <?php 
                    }
                    mysqli_free_result($resultado);
                ?>
                
            </table>
        </div>

        <div class="volver">
            <a href="../panel.php" class="btn">
                Regresar
                <i class="fa-solid fa-circle-chevron-left"></i>
            </a>
        </div>

    </div>

</body>
</html>

<?php
        }
    }

    //echo "Hay Sesión y el Rol es: <b>".$_SESSION['userrol']."</b>";
?>