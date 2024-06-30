<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../img/icono.png">
    <title>Registro</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
<link rel="stylesheet" type="text/css" href="../css/style2.css">
<link rel="stylesheet" type="text/css" href="../css/css/all.min.css">
</head>
<body>
<img class="wave" src="../img/wave.png" alt="">
    <div class="contenedor">
        <div class="img">
            <img src="../img/undraw_home_cinema_l7yl.svg" alt="">
        </div>
        <div class="contenido-login">
            <form action="../modelo/RegUsu.php" method="post">
                <img src="../img/pngwing.com.png" alt="">
                <h2>Registro</h2>
                 <!--nombres-->
                 <div class="input-div dni">
                    <div class="i">
                        <i class="fas fa-id-card"></i>
                        
                    </div>
                    <div class="div">
                        <h5>Nombres</h5>
                        <input type="text" name="nombre" class="input" required> 
                    </div>
                </div>
                 <!--apellidos-->
                 <div class="input-div dni">
                    <div class="i">
                        <i class="fas fa-id-card"></i>
                    </div>
                    <div class="div">
                        <h5>Apellidos</h5>
                        <input type="text" name="apellido" class="input" required> 
                    </div>
                </div>
                <!--edad-->
                <div class="input-div dni">
                    <div class="i">
                     <i class="fas fa-id-card"></i>
                    </div>
                    <div class="div">
                        <h5>Edad</h5>
                        <input type="text" name="edad" class="input" required> 
                    </div>
                </div>
                <!--usuario-->
                <div class="input-div dni">
                    <div class="i">
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="div">
                        <h5>DNI</h5>
                        <input type="text" name="user" class="input" required> 
                    </div>
                </div>
                <!--Contraseña-->
                <div class="input-div pass">
                    <div class="i">
                        <i class="fas fa-lock"></i>
                    </div>
                    <div class="div">
                        <h5>Contraseña</h5>
                        <input type="password" name="pass" class="input" required>
                    </div>
                </div>
                <!--Email-->
                <div class="input-div ema">
                    <div class="i">
                        <i class="fas fa-users"></i>
                     
                    </div>
                    <div class="div">
                        <h5>Tipo de Usuario</h5>
                        <input type="text" name="tipo" class="input" required> 
                    </div>
                </div>
                
                <div >
               </div>
               <div class="button-Regi">
             <input type="submit" class="btn" value="Registrarse">
              </div>
         </form>
         
         </div>
    </div>

    <!--<form class="signup-form" action="" method="post">
        <i class="fas fa-user-plus"></i>
        <input class="user-input" type="text" name="" placeholder="Username" required>
        <input class="user-input" type="email" name="" placeholder="Email Address" required>
        <input class="user-input" type="password" name="" placeholder="Password" required>
        <input class="btn" type="submit" name="" value="SIGN UP">
        <div class="options-02">
          <p>Already Registered? <a href="#">Sign In</a></p>
        </div>
      </form>-->
</body>
<script src="../js/login.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" charset="utf-8"></script>
</html>