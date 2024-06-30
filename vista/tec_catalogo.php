<?php
session_start();
if ($_SESSION['us_tipo']==2) {
    
?>
    <link rel="shortcut icon" href="../img/icono.png">
    <title>Tec | Inicio</title>
    <?php
    include_once 'Layouts/Nav.php';
    ?>

</head>
<body>
    <h1>Hola tecnico</h1>
    <a href="../Controlador/Logout.php">Cerrar Sesion</a>
</body>
</html>

<?php
  include_once 'Layouts/Footer.php';
}
else{
    header('Location: ../vista/Login.php');
    
}
?>