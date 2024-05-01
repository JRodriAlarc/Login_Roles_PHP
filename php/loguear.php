<?php

    require_once 'conexion.php';
    session_start();
    
    $usuario = $_POST['email'];
    $clave = $_POST['password'];

    $query = "SELECT COUNT(*) AS contar FROM registros WHERE email = '$usuario' AND contrasenia = '$clave'";
    $consulta = mysqli_query($conexion, $query);
    $array = mysqli_fetch_array($consulta);


    $estadoCuenta = "SELECT status FROM registros WHERE email = '$usuario'";
    $statusCheck = mysqli_query($conexion, $estadoCuenta);
    $status = mysqli_fetch_assoc($statusCheck);
    #var_dump($status);

    if($status !== null){
        if($status['status'] === 'Si'){

            if($array['contar']>0){
                $_SESSION['username'] = $usuario;
        
                //Verificar el Rol del Correo que se Loguea
                $persona = "SELECT rol FROM registros WHERE email = '$usuario'";
                $verificion = mysqli_query($conexion, $persona);
                $acceso = mysqli_fetch_assoc($verificion);
        
                $_SESSION['userrol'] = $acceso['rol'];
                
                if($acceso['rol'] == 'Cliente'){
                    header("location: ../panel.php");
                } 
                elseif ($acceso['rol'] == 'Vendedor'){
                    header("location: ../panelVendedor.php");
                } 
                elseif ($acceso['rol'] == 'Administrador') {
                    header("location: ../panelAdmin.php");
                }
        
            }else{
                
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
                    <title>Validación</title>
                </head>
                <body>
                
                    <div class="container">
                        <div class="form">
        
                            <h2>El Email o la Contraseña No Coinciden</h2>
                            <a href="../index.php">
                                <button>
                                    <span>Regresar</span>
                                    <i class="fa-solid fa-circle-chevron-left"></i>
                                </button>
                            </a>
        
                        </div>
                    </div>
        
                </body>
                </html>
        
                <?php
        
                echo "<script>alert('El Email o la Contraseña no Coinciden')</script>";
            }
        } else {
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
                    <title>Validación</title>
                </head>
                <body>
                
                    <div class="container">
                        <div class="form">
        
                            <h2>Su cuenta se encuantra deshabilitada,</h2>
                            <h3>comuniquese con el administrador del sitio web</h3>
                            <a href="../index.php">
                                <button>
                                    <span>Regresar</span>
                                    <i class="fa-solid fa-circle-chevron-left"></i>
                                </button>
                            </a>
        
                        </div>
                    </div>
        
                </body>
                </html>

            <?php
        }
    } else{
                
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
            <title>Validación</title>
        </head>
        <body>
        
            <div class="container">
                <div class="form">

                    <h2>El Email o la Contraseña No Coinciden</h2>
                    <a href="../index.php">
                        <button>
                            <span>Regresar</span>
                            <i class="fa-solid fa-circle-chevron-left"></i>
                        </button>
                    </a>

                </div>
            </div>

        </body>
        </html>

        <?php

        echo "<script>alert('El Email o la Contraseña no Coinciden')</script>";
    }

?>