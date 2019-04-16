<?php
session_start();
include '../extend/header.php';
?>
    <title>Editar perfil</title>
    </head>
    <body>
    <?php
        if (isset($_SESSION['loggedin'])) {  
        } else {
        echo " <div class='alert alert-danger' role='alert'>
        <h4>Necesitas iniciar sesión para ingresar aquí.</h4>
        <p><a href='../login.html'>Inicia sesión aquí.</a></p></div>";
        exit;
        }
    $now = time();     //Para conocer el tiempo de conexion de un usuario      
    if ($now > $_SESSION['expire']) {
        session_destroy();
        echo "<div class='alert alert-danger' role='alert'>
        <h4>Tu sesión ha expirado.</h4>
        <p><a href='../login.html'>Inicia sesión aquí.</a></p></div>";
        exit;
        }
    ?>
    <div class="container">
        <p>Bienvenido: <?php echo $_SESSION['name']; ?></p>
        <h3>Editar tu perfil</h3>
        <ul>
            <li>Cambiar imagen</li>
            <li>Cambiar biografía</li>
            <li>Cambiar contraseña</li>
            <li>etc;</li>
        </ul>
        <p><a href="logout.php">Cerrar sesión</a></p>
    </div>

	<?php include "script/scripts.php" ?>

	</body>
</html>