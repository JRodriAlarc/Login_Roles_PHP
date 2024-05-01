<?php
    include_once "conexion.php";

    session_start();
    $usuario = $_SESSION['username'];

    if(!isset($usuario)){
        header("location: ../index.php"); 
    }else{

        if($_SESSION['userrol'] == 'Administrador'){
            header("location: editarAdmin.php?id=".$_GET['id']);
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
    <link rel="stylesheet" href="../css/homeVendedor.css">
    <title>Actualizar Registro</title>
</head>
<body>

    <?php
        if(isset($_POST['actualizar'])){
            //Button Update
            
            $id = $_POST['idusr'];
            $nombre = $_POST['nameusr'];
            $correo = $_POST['user'];
            $number = $_POST['phone'];
            $contra = $_POST['password'];

            //Actualizar Registros en Base de Datos
            $consultaUpdate = "UPDATE registros SET nombre='".$nombre."', email='".$correo."', telefono='".$number."', contrasenia='".$contra."' WHERE id='".$id."'";
            $resultadoUpdate = mysqli_query($conexion, $consultaUpdate);

            if($resultadoUpdate){
                echo "<script>alert('Los Datos Se Actualizaron Éxitosamente')</script>";
                header("Location: tablaVendedor.php");
            } else{
                echo "<script>alert('Los Datos No Se Actualizaron con Éxito')</script>";
            }

            mysqli_close($conexion);

        }else{
            //No se ha enviado Datos
            $id = $_GET['id'];
            $consultaSelect = "SELECT nombre, email, telefono, contrasenia FROM registros WHERE id='".$id."'";
            $resultadoSelect = mysqli_query($conexion, $consultaSelect);

            $row = mysqli_fetch_assoc($resultadoSelect);
            
            //Datos Obtenidos de la DB
            $nombre = $row['nombre'];
            $correo = $row['email'];
            $number = $row['telefono'];
            $contra = $row['contrasenia'];

            mysqli_close($conexion);
    ?>

    <form action="<?=$_SERVER['PHP_SELF']?>" method="POST" class="form">
            
            <h1>Editar Usuario</h1>
            <h3 class="subtitle">Modifique los Datos de los Usuarios:</h3>

            <input type="hidden" placeholder="Id:" name="idusr" value="<?php echo $id; ?>">

            <label for="nameusr">
                <i class="fa-solid fa-file-signature"></i>
                <input type="text" placeholder="Nombre:" id="nameusr" name="nameusr" value="<?php echo $nombre; ?>">
            </label>

            <label for="user">
                <i class="fa-solid fa-user"></i>
                <input type="email" placeholder="Email:" id="user" name="user" value="<?php echo $correo; ?>">
            </label>
            
            <label for="phone">
                <i class="fa-solid fa-phone"></i>
                <input type="number" placeholder="Telefono:" id="phone" name="phone" value="<?php echo $number; ?>">
            </label>

            <label for="password">
                <i class="fa-solid fa-lock"></i>
                <input type="text" placeholder="Contraseña:" id="password" name="password" value="<?php echo $contra; ?>">
            </label>
            
            <div class="buttons">
                <button class="btn_save"  name="actualizar" id="actualizar" type="submit">
                    <span>Actualizar </span>
                    <i class="fa-regular fa-pen-to-square"></i>
                </button>
            </div>
            
    </form>

    <?php
        
        }

    ?>

</body>
</html>

<?php
        }
    }
?>