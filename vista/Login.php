<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../img/icono.png">
    <title>Login</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" type="text/css" href="../css/css/all.min.css">
</head>
<?php
session_start();
if (!empty($_SESSION['us_tipo'])) {
    header('Location: ../controlador/LoginControler.php');
}
else{
session_destroy();
?>
<body>
    <img class="wave" src="../img/wave.png" alt="">
    <div class="contenedor">
        <div class="img">
            <img src="../img/undraw_home_cinema_l7yl.svg" alt="">
        </div>
        <div class="contenido-login">
            <form action="../controlador/LoginControler.php" method="post">
                <img src="../img/pngwing.com.png" alt="">
                <h2>Cine Muke</h2>
                <div class="input-div dni">
                    <div class="i">
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="div">
                        <h5>DNI</h5>
                        <input type="text" name="user" class="input" required> 
                    </div>
                </div>
                <div class="input-div pass">
                    <div class="i">
                        <i class="fas fa-lock"></i>
                    </div>
                    <div class="div">
                        <h5>Contraseña</h5>
                        <input type="password" name="pass" class="input" required>
                    </div>
                </div>
                <div class="options-02">
                    <a href="Register.php">Crea una cuenta</a>
                </div>
                <input type="submit" class="btn" value="Iniciar Sesion">
               
            </form>
     </div>
    </div>
</body>
<script src="../js/login.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" charset="utf-8"></script>
</html>
<?php
}
?>