<?php 
session_start();
$usuario = $_SESSION['DEV'];
$estado= false;
if(isset($usuario)){
    $estado= true;
}

if($estado){
    /* Aqui va el codigo si esta logeado*/
}
else{
/* No logeado*/
header("Location: ../index.php"); /* Abre el archivo index.php o el login podria ser*/
}
?>