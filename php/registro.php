<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../img/2726000.png">
    <script src="https://kit.fontawesome.com/8a7c80030f.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/all.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <title>Registro</title>
</head>
<body>
    
    <div class="container">
        
        <form action="guardar.php" method="POST" class="form">
            
            <h1>Bienvenido</h1>
            <h3>Completa tu Información Personal:</h3>

            <label for="nameusr">
                <i class="fa-solid fa-file-signature"></i>
                <input type="text" placeholder="Nombre:" id="nameusr" name="nameusr" required>
            </label>

            <label for="user">
                <i class="fa-solid fa-user"></i>
                <input type="email" placeholder="Email:" id="user" name="user" required>
            </label>
            
            <label for="phone">
                <i class="fa-solid fa-phone"></i>
                <input type="number" placeholder="Telefono:" id="phone" name="phone" required>
            </label>

            <label for="password">
                <i class="fa-solid fa-lock"></i>
                <input type="password" placeholder="Contraseña:" id="password" name="password" required>
            </label>

            <label for="rolusr">
                <i class="fa-solid fa-ticket"></i>
                <select name="rolusr" id="rolusr" required>
                    <option value="">Elige una opción</option>
                    <option value="Administrador">Administrador</option>
                    <option value="Cliente">Cliente</option>
                    <option value="Vendedor">Vendedor</option>
                </select>
            </label>
            
            <div class="buttons">
                <button id="btn_save" name="registrar" class="btn_save" type="submit">
                    <span>Registrarse</span>
                    <i class="fa-solid fa-cloud-arrow-up"></i>
                </button>
            </div>
                  
        </form>

    </div>

</body>
</html>