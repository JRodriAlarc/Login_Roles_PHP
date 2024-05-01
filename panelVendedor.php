<?php

    session_start();
    $usuario = $_SESSION['username'];

    if(!isset($usuario)){
        header("location: index.php");
    }else{

        if($_SESSION['userrol'] == 'Administrador'){
            header("location: panelAdmin.php");
        } 
        elseif($_SESSION['userrol'] == 'Cliente'){
            header("location: panel.php");
        }
        else{

        ?>

        <!DOCTYPE html>
        <html lang="es">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="shortcut icon" href="img/2726000.png">
            <script src="https://kit.fontawesome.com/8a7c80030f.js" crossorigin="anonymous"></script>
            <link rel="stylesheet" href="css/all.min.css">
            <link rel="stylesheet" href="css/homeVendedor.css">
            <title>Panel Vendedor</title>
        </head>
        <body>

            <div class="container">

                <div class="form">
                    <h1>Bienvenido:</h1>
                    <h2> <?php echo "$usuario"; ?> </h2>
                    <h3>Esta es tu Cuenta de Vendedor</h3>

                    <a href="php/tablaVendedor.php">
                        <button>
                            <span>Editar Registros</span>
                            <i class="fa-regular fa-pen-to-square"></i>
                        </button>
                    </a>

                    <a href="php/salir.php">
                        <button>
                            <span>Cerrar Sesión</span>
                            <i class="fa-solid fa-house-lock"></i>
                        </button>
                    </a>
                </div>  

            </div>

        </body>
        </html>

        <?php
        
        }
    }
?>