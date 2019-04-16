	<?php include "extend/header.php"?>
	<title>Crear un cuenta o iniciar sesión</title>
	<link rel="stylesheet" href="css/custom.css">
  </head>
  <body>
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<h1>Inicio de sesion con PHP</h1>
					<p>Este es un código básico para hacer un inicio de sesión con PHP y MySql</p>		
				</div>	
			</div>
			<div class="row">	
				<div class="col-sm-12 col-md-6 col-lg-6">
					<h3>Crear una cuenta</h3><hr />
					<form method="post" action="create-account.php" method="POST">
						<div class="form-group">				
							<input type="text" class="form-control" name="name" placeholder="Ingresa tu nombre" required>			
						</div>
						<div class="form-group">				
							<input type="email" class="form-control" name="email" aria-describedby="emailHelp" placeholder="Ingresa tu email" required>
						</div>
						<div class="form-group">				
							<input type="password" class="form-control" name="password" placeholder="Ingresa tu contraseña" required>
						</div>
						<button type="submit" class="btn btn-success btn-block">Crear mi cuenta</button>
					</form>		
				</div>		
				<div class="col-sm-12 col-md-6 col-lg-6">
					<h3>Iniciar sesión</h3><hr />
					<p>¿Tienes una cuenta? <a href="login.html" title="Inicia sesión">Inicia sesión aquí</a></p>
				</div>
			</div>
		</div>
	<?php include 'script/scripts.php' ?>
 	</body>
</html>