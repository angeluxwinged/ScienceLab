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
				<form action="index.html">
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
			<div class="menu">
				<i class="fa-solid fa-bars" id="botonMenu"></i>
				<div id="backMenu"></div>
				<nav id="nav">
					<ul>
						<li><a href="index.php">Inicio</a></li>
						<li><a href="agendarCita.php" id="selected">Agendar cita</a></li>
						<li><a href="consultarResultados.php">Consultar resultados</a></li>
						<li><a href="estadisticas.php">Estadísticas</a></li>
					</ul>
				</nav>
			</div>
			<a class="administracion" href="administracion.php">Administración</a>
		</div>

	</header>


	<main><!--Contenedor del cuerpo de la pagina-->
		<div class="containerCover">
			<div class="cover">

				<!--Formulario cita COVID-->
				<div class="containerC">
				<form class="cita" autocomplete="off" name="citaCOVID" method="POST">
					<a class="botonCambiar" href="agendarCita2.php">CAMBIAR A AGENDAR CITA PARA THC</a> 

					<h1>Agendar cita para prueba COVID</h1>

	       			<div class="inputInfo">
	            	<label class="inputInfo">Nombre completo:</label>
	            	<input type="text" id="nombre" name="nombreCOVID">
	        		</div>

	       			<div class="inputInfo">
	            	<label class="inputInfo">Edad:</label>
	            	<input type="text" id="edad" name="edadCOVID">
	        		</div>

			        <div class="inputInfo">
			        <label class="inputInfo">Genero:</label>
			        <label class="radioInfo">MASCULINO</label> <input type="radio" name="generoCOVID" value="MASCULINO">
			        <label class="radioInfo">FEMENINO</label> <input type="radio" name="generoCOVID" value="FEMENINO">
			        </div>

			        <div class="inputInfo">
			        <label class="inputInfo">Domicilio:</label>
			        <input type="text" name="domicilioCOVID">
			        </div>

			        <div class="inputInfo">
			        <label class="inputInfo">Nacionalidad:</label>
			        <input type="text" name="nacionalidadCOVID">
			        </div>

			        <div class="inputInfo">
			        <label class="inputInfo">Teléfono:</label>
			        <input type="text" name="telefonoCOVID">
			        </div>

			        <div class="inputInfo">
			        <label class="inputInfo">Tipo de prueba:</label>
			        <label class="radioInfo">ANTIGENOS</label> <input type="radio" name="tipoPruebaCOVID" value="ANTIGENOS">
			        <label class="radioInfo">PCR</label> <input type="radio" name="tipoPruebaCOVID" value="PCR">
			        </div>

			        <div class="inputInfo">
			        <label class="inputInfo">Día de la cita:</label>
			        <input type="date" name="fechaCOVID">
			    	</div>

			    	<div class="inputInfo">
			        <label class="inputInfo">Hora de la cita:</label>
			        <select name="horaCOVID">
			        	<option disabled selected>Seleccione hora</option>
			        	<optgroup label="Primer turno">
			        		<option value="07:00:00">7</option>
			        		<option value="08:00:00">8</option>
			        		<option value="09:00:00">9</option>
			        		<option value="10:00:00">10</option>
			        		<option value="11:00:00">11</option>
			        		<option value="12:00:00">12</option>
			        		<option value="13:00:00">1</option>
			        	</optgroup>
			        	<optgroup label="Segundo turno">
			        		<option value="15:00:00">3</option>
			        		<option value="16:00:00">4</option>
			        		<option value="17:00:00">5</option>
			        		<option value="18:00:00">6</option>
			        		<option value="19:00:00">7</option>
			        		<option value="20:00:00">8</option>
			        		<option value="21:00:00">9</option>
			        	</optgroup>
			        </select>
			    	</div>

			    	<div class="enviarCita">
			    		<input type="submit" name="enviarCOVID" value="Agendar cita">
			    	</div>

  		 		</form>
  		 		</div>

  		 		

			</div>
		</div>

	</main>

	<!--La inclusion del archivo script.js-->
	<script src="js/script.js"></script>
	<?php 
	//La inclusion del archivo guardar.php
	include("guardar.php");
	?>

</body>
</html>
