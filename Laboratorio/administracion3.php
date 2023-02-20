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

				<!--Formulario ingresar resultados THC-->
				<div class="containerC">
    			<a class="botonCambiarAdmin" href="administracion4.php">AGREGAR NUEVO LABORATORISTA</a>
    			<form class="cita" autocomplete="off" name="ingresarResuTHC" method="POST" style="margin-bottom: 55px;">
    				<a class="botonCambiar" href="administracion2.php">CAMBIAR A INGRESAR RESULTADOS COVID</a>

					<h1>Ingresar resultados THC</h1>

					<div class="inputInfo">
	            	<label class="inputInfo">Número de identificador de la cita:</label>
	            	<input type="text" id="idCita" name="idCitaTHC">
	        		</div>

	       			<div class="inputInfo">
	            	<label class="inputInfo">Número de identificador del laboratorista:</label>
	            	<input type="text" id="idLabo" name="idLaboTHC">
	        		</div>

	       			<div class="inputInfo">
	            	<label class="inputInfo">Nombre completo del paciente:</label>
	            	<input type="text" id="nombre" name="nombreTHC">
	        		</div>

	        		<div class="inputInfo">
	            	<label class="inputInfo">Edad:</label>
	            	<input type="text" id="edad" name="edadTHC">
	        		</div>

	        		<div class="inputInfo">
			        <label class="inputInfo">Nacionalidad:</label>
			        <input type="text" name="nacionalidadTHC">
			        </div>

			        <div class="inputInfo">
			        <label class="inputInfo">Genero:</label>
			        <label class="radioInfo">MASCULINO</label> <input type="radio" name="generoTHC" value="MASCULINO">
			        <label class="radioInfo">FEMENINO</label> <input type="radio" name="generoTHC" value="FEMENINO">
			        </div>

			        <div class="inputInfo">
			        <label class="inputInfo">Día en que se genero el resultado:</label>
			        <input type="date" name="fechaTHC">
			    	</div>

			    	<div class="inputInfo">
			        <label class="inputInfo">Hora en la que se genero el resultado:</label>
			        <input type="time" name="horaTHC">
			    	</div>

			    	<div class="inputInfo">
			        <label class="inputInfo">Resultado:</label>
			        <label class="radioInfo">NEGATIVO</label> <input type="radio" name="resultTHC" value="NEGATIVO">
			        <label class="radioInfo">POSITIVO</label> <input type="radio" name="resultTHC" value="POSITIVO">
			        </div>

			        <div class="inputInfo">
	            	<label class="inputInfo">Nombre completo del laboratorista:</label>
	            	<input type="text" id="nombreLabo" name="nombreLaboTHC">
	        		</div>

			    	<div class="enviarCita">
			    		<input type="submit" name="enviarResuTHC" value="Ingersar">
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
