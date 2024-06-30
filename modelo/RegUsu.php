<?php 
include 'Conex.php';
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $edad = $_POST['edad'];
        $user = $_POST['user'];
        $tipo= $_POST['tipo'];
        $pass = $_POST['pass'];

	    $inser = "INSERT INTO usuario(nombre_us, apellidos_us, edad, dni_us, contrasena_us, us_tipo) VALUES ('$nombre','$apellido','$edad','$user','$tipo','$pass')";
	    $resultado = execute($conexion, $inser);
        
        if (!$resultado) {
            echo 'Error';
        }
        else{
            echo 'Si';
        }
        
        mysqli_close($conexion);
?>

