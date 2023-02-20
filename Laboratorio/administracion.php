<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>ScienceLab</title>
	<script src="https://kit.fontawesome.com/8aeddd2dcd.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>


<body>

	<header><!--Contenedor del menu-->
		<div class="containerMenu">
			<div class="logo">
				<form action="index.php">
				<button class="logo">
				<img src="images/logo3.png">
				</form>
				</button>
				<form action="index.php">
				<button class="logo">
				<h1>ScienceLab</h1>
				</form>
				</button>
			</div>
		</div>
	
	</header>


	<main><!--Contenedor del cuerpo de la pagina-->
		<div class="containerCover">
			<div class="cover">

				<!--Formulario login-->
				<div class="containerC">
				<form class="cita" autocomplete="off" name="login" method="POST" style="margin-bottom: 200px;">
					<h1>Acceso de administración</h1>

	       			<div class="inputInfo">
	            	<label class="inputInfo">Nombre del laboratorista:</label>
	            	<input type="text" id="nombreAdmin" name="nombreAdmin">
	        		</div>

	       			<div class="inputInfo">
	            	<label class="inputInfo">Clave de acceso:</label>
	            	<input type="password" id="claveAdmin" name="claveAdmin">
	        		</div>

			    	<div class="enviarCita">
			    		<input type="submit" name="enviarLogin" value="Indentificarse">
			    	</div>

  		 		</form>
  		 		</div>
			</div>
		</div>

	</main>

	<script src="js/script.js"></script>
	<?php 
	//La inclusion del archivo login.php
	include("login.php");
	?>

</body>
</html>
