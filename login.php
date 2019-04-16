<?php include 'extend/header.php' ?>
<title>Página de login</title>
<link rel="stylesheet" href="css/custom.css">
<link rel="stylesheet" href="css/bootstrap.min.css"
</head>
  <body>
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">		
				<div class="card">
					<div class="loginBox">
						<img src="images/php-mysql-logo.png" class="img-responsive" alt="PHP MySQL logos">
						<h2>Iniciar sesión</h2>
						<form action="check-login.php" method="post">                           	
							<div class="form-group">									
								<input type="email" class="form-control input-lg" name="email" placeholder="Email" required>        
							</div>							
							<div class="form-group">        
								<input type="password" class="form-control input-lg" name="password" placeholder="Password" required>       
							</div>								    
							<button type="submit" class="btn btn-success btn-block">Iniciar sesión</button>        
							<br>
						</form>
						<hr/><p>Nuevo en sistema de login <a href="index.html" title="Crear una cuenta.">Crear una cuenta.</a></p>								
					</div>	
				</div>
			</div>
		</div>
	</div>
	<?php include 'script/scripts.php' ?>
	</body>
</html>