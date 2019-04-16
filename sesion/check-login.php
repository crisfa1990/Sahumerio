<?php
session_start();
include 'conn.php';	
$email = $_POST['email']; 
$password = $_POST['password'];
$result = mysqli_query($conn, "SELECT Email, Password, Name FROM users WHERE Email = '$email'");
$row = mysqli_fetch_assoc($result);
$hash = $row['password'];

if (password_verify($_POST['password'], $hash)) {	
	$_SESSION['loggedin'] = true;
	$_SESSION['name'] = $row['Name'];
	$_SESSION['start'] = time();
	$_SESSION['expire'] = $_SESSION['start'] + (1 * 60) ;						
	echo "<div class='alert alert-success' role='alert'><strong>Bienvenido!</strong> $row[Name]
	<p><a href='edit-profile.php'>Editar perfil</a></p>	
	<p><a href='logout.php'>Cerrar sesión</a></p></div>";	
} else {
	echo "<div class='alert alert-danger' role='alert'>El email o el password son incorrectos.
	<p><a href='login.html'><strong>Por favor, intenta de nuevo.</strong></a></p></div>";			
}	
?>			
