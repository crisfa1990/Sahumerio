<?php
$dbhost	= "localhost";	   
$dbuser	= "root";		  
$dbpass	= "";		     
$dbname	= "erpsahumerio";   
 
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
if (!$conn) {
	die("Connection failed: ".mysqli_connect_error());
    }
?>