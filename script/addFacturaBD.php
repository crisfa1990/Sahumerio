<?php // Revisar conexion
include 'conn.php';
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
    if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
    }
if(isset($_SESSION['loggedin'])){}
  else {
    echo "<div class='alert alert-danger' role='alert'>
        <h4>Necesitas iniciar sesión para ingresar aquí.</h4>
        <p><a href='login.html'>Inicia sesión aquí.</a></p></div>";
        exit;
  }
  $now = time();           
  if ($now > $_SESSION['expire']) {
      session_destroy();
      echo "<div class='alert alert-danger' role='alert'>
      <h4>Tu sesión ha expirado.</h4>
      <p><a href='login.html'>Inicia sesión aquí</a></p></div>";
      exit;
      }

?>