<?php include "header.php" ?>
<body>

<div class="container">
	<?php include 'conn.php';
	
	$checkEmail = "SELECT * FROM users WHERE Email = '$_POST[email]' ";
	$result = $conn->query($checkEmail); 
	$count = mysqli_num_rows($result);
	if ($count == 1) {
	echo "<div class='alert alert-warning' role='alert'>
		<p>El email ya existe en la base de registros.</p>
		<p><a href='login.html'>inicia sesión aquí.</a></p>
		</div>";
	} else {	
		$name = $_POST['name'];
		$email = $_POST['email'];
		$pass = $_POST['password'];
		$passHash = password_hash($pass, PASSWORD_DEFAULT);
		$query = "INSERT INTO users (Name, Email, Password) VALUES ('$name', '$email', '$passHash')";

		if (mysqli_query($conn, $query)) {
			echo "<div class='alert alert-success' role='alert'><h3>Tu cuenta ha sido creada.</h3>
			<a class='btn btn-outline-primary' href='login.html' role='button'>Iniciar sesión.</a></div>";		
		}
		else {
			echo "Error: ".$query."<br>".mysqli_error($conn);
		}	
	}	
	mysqli_close($conn);
	?>
</div>
	<?php include "scripts.php" ?>
</body>
</html>