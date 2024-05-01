<?php

    include_once "conexion.php";

    session_start();

    if(isset($_SESSION["username"])){
        header("location: ../panel.php");
    }
    
    if(isset($_POST['registrar'])){
        if(strlen($_POST['nameusr']) >= 1 && strlen($_POST['user']) >= 1 && strlen($_POST['phone'] >= 1) && strlen($_POST['password']) && strlen($_POST['rolusr']) >= 1){
            $name = trim ($_POST['nameusr']);
            $email = trim($_POST['user']);
            $telefono = trim($_POST['phone']);
            $password = trim($_POST['password']);
            $rol = trim($_POST['rolusr']);

            if($rol == 'Cliente'){
                $estado = "Si";
                $editar = 'No';
                $ver = 'Si';
            } else{ 
                $estado = "Si";
                $editar = "Si";
                $ver = 'Si';
            }

            $sql="SELECT COUNT(*) AS contar FROM registros WHERE email = '$email'";
            $result = mysqli_query($conexion, $sql);
            $valores = mysqli_fetch_array($result);

            if($valores['contar'] <= 0){

                $consulta = "INSERT INTO registros (nombre, email, telefono, contrasenia, rol, lectura, escritura, status) VALUES ('$name','$email','$telefono','$password', '$rol', '$ver', '$editar', '$estado')";

                $resultado = mysqli_query($conexion, $consulta);

                if($resultado){
                    ?>
                        <div class="form">
                            <h2 class="ok">¡Te has Registrado Correctamente!</h2>
                            <a href="../index.php">
                                <button>
                                    <span>Inicia Sesión</span>
                                    <i class="fa-solid fa-circle-chevron-right"></i>
                                </button>
                            </a>
                        </div>
                    <?php
                } else{

                    ?>
                        <div class="form">
                            <h2 class="bad">¡Upps! Ha ocurrido un error</h2>
                            <a href="registro.php">
                                <button>
                                    <span>Intentalo de Nuevo</span>
                                    <i class="fa-solid fa-circle-chevron-left"></i>
                                </button>
                            </a>
                        </div>
                    <?php
                }
            } else {
                ?>
                    <div class="form">
                        <h2 class="bad">El Correo Electronico ya Existe</h2>
                        <a href="../index.php">
                            <button>
                                <span>Inicia Sesión</span>
                                <i class="fa-solid fa-circle-chevron-right"></i>
                            </button>
                        </a>
                    </div>
                <?php
            }
        } else{
            ?>
                <div class="form">
                    <h2 class="bad">¡Por Favor comleta los Campos!</h2>
                    <a href="registro.php">
                        <button>
                            <span>Intentalo de Nuevo</span>
                            <i class="fa-solid fa-circle-chevron-left"></i>
                        </button>
                    </a>
                </div>
                
            <?php
        }
    }

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
    <title>Guardar Datos</title>
</head>
<body>
    
</body>
</html>