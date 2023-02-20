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
			<a class="administracion" href="index.php">Cerrar sesión </a>
		</div>
	
	</header>


	<main><!--Contenedor del cuerpo de la pagina-->
		<div class="containerCover">
			<div class="cover">

				<!--Formulario ingresar resultados COVID-->
				<div class="containerC">
				<a class="botonCambiarAdmin" href="administracion2.php">INGRESAR RESULTADOS</a>
    			<form class="cita" autocomplete="off" name="agregarLabo" method="POST" style="margin-bottom: 65px;">

					<h1>Agregar laboratorista</h1>

	       			<div class="inputInfo">
	            	<label class="inputInfo">Nombre completo:</label>
	            	<input type="text" id="nombre" name="nombreLabo">
	        		</div>

	        		<div class="inputInfo">
			        <label class="inputInfo">Fecha de nacimiento:</label>
			        <input type="date" name="fechaLabo">
			    	</div>

			    	<div class="inputInfo">
			        <label class="inputInfo">Genero:</label>
			        <label class="radioInfo">MASCULINO</label> <input type="radio" name="generoLabo" value="MASCULINO">
			        <label class="radioInfo">FEMENINO</label> <input type="radio" name="generoLabo" value="FEMENINO">
			        </div>

			        <div class="inputInfo">
			        <label class="inputInfo">Domicilio:</label>
			        <input type="text" name="domicilioLabo">
			        </div>

	        		<div class="inputInfo">
			        <label class="inputInfo">Nacionalidad:</label>
			        <input type="text" name="nacionalidadLabo">
			        </div>

			        <div class="inputInfo">
			        <label class="inputInfo">Teléfono:</label>
			        <input type="text" name="telefonoLabo">
			        </div>

			        <div class="inputInfo">
			        <label class="inputInfo">CURP:</label>
			        <input type="text" name="CURPLabo">
			        </div>

			        <div class="inputInfo">
			        <label class="inputInfo">RFC:</label>
			        <input type="text" name="RFCLabo">
			        </div>

			        <div class="inputInfo">
			        <label class="inputInfo">Número de seguro social:</label>
			        <input type="text" name="NSSLabo">
			        </div>

			        <div class="inputInfo">
			        <label class="inputInfo">Clave de acceso:</label>
			        <input type="text" name="claveLabo">
			        </div>

			    	<div class="enviarCita">
			    		<input type="submit" name="enviarAgregarLabo" value="Ingersar">
			    	</div>
			    	
  		 		</form>
  		 		</div>


			</div>
		</div>

	</main>

	<script src="js/script.js"></script>
	<?php 
	//La inclusion del archivo guardar.php
	include("guardar.php");
	?>

</body>
</html>
