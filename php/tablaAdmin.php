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
        elseif($_SESSION['userrol'] == 'Cliente'){
            header("location: tabla.php");
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
    <link rel="stylesheet" href="../css/homeAdmin.css">
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
                    <th>Contraseña:</th>
                    <th>Rol:</th>
                    <th>Ver:</th>
                    <th>Editar:</th>
                    <th>Activo:</th>
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
                    <td><?php echo $row['contrasenia']; ?></td>
                    <td><?php echo $row['rol']; ?></td>
                    <td><?php echo $row['lectura']; ?></td>
                    <td><?php echo $row['escritura']; ?></td>
                    <td><?php echo $row['status']; ?></td>
                    <td>
                        <button class="actualizar">
                            <?php echo "<a href='editarAdmin.php?id=".$row['id']."'>Editar</a>"; ?>
                            <i class="fa-solid fa-pencil"></i>
                        </button>
                    </td>
                    <td>
                        <button class="eliminar">
                            <?php echo "<a href='eliminar.php?id=".$row['id']."' onclick='return confirmar()'>Eliminar</a>"; ?>
                            <i class="fa-solid fa-eraser"></i>
                        </button>
                    </td>
                </tr>
                    
                <?php 
                    }
                    mysqli_free_result($resultado);
                ?>
                
            </table>
        </div>

        <div class="volver">
            <a href="../panelAdmin.php" class="btn">
                Regresar
                <i class="fa-solid fa-circle-chevron-left"></i>
            </a>
        </div>

    </div>

    <script src="../js/script.js"></script>

</body>
</html>

<?php
        }
    }

    //echo "Hay Sesión y el Rol es: <b>".$_SESSION['userrol']."</b>";
?>