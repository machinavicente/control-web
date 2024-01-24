<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/login.css">
	<link rel="stylesheet" type="text/css" href="css/responsive.css">
	<link rel="shortcut icon" href="./favicon.ico">
	<title>Sistema de control - Login</title>
</head>
<body>
	<div class="wrapper">
  		<div class="container">
    		<div class="col-left">
     			<div class="login-text">
        			<h2>Control de Arrendameinto Web </h2>
        			<p>Para acceder al sistema debera ingrresar los datos solicitados</p>
      			</div>
    		</div>
   			<div class="col-right">
      			<div class="login-form">
      	  			<h2>ADMINISTRADOR</h2>
      	  			 <?php 
		                include ("../sistema/controlador/controlador_login.php");
		             ?>
        			<form action="" method="POST">
          			
            			<label>Usuario:</label>
            			<input type="text" placeholder="Usuario"  name="Admin_user" required>
            			<div class="imge"></div>

        
            			<label>Contraseña:</label>
            			<input type="password" placeholder="Password" name="Admin_pass" required>
            			<div class="img2"></div>
          					<br>
            			<input type="submit" name="boton" value="Acceder">
        			</form>
      			</div>
    		</div>
  		</div>
 
	</div>
</body>
</html>