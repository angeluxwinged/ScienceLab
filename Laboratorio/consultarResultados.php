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
			<div class="menu">
				<i class="fa-solid fa-bars" id="botonMenu"></i>
				<div id="backMenu"></div>
				<nav id="nav">
					<ul>
						<li><a href="index.php">Inicio</a></li>
						<li><a href="agendarCita.php">Agendar cita</a></li>
						<li><a href="consultarResultados.php" id="selected">Consultar resultados</a></li>
						<li><a href="estadisticas.php">Estadísticas</a></li>
				</nav>
			</div>
			<a class="administracion" href="administracion.php">Administración</a>
		</div>

	</header>


	<main><!--Contenedor del cuerpo de la pagina-->
		<div class="containerCover">
			<div class="cover">

					<!--Colnsultar resultados COVID-->
					<div class="containerC">
					<form class="consulta" method="POST">
						<a class="botonCambiar" href="consultarResultados2.php">CAMBIAR A CONSULTAR RESULTADOS THC</a> 
						<h1>Consultar resultados COVID</h1>
						<label>Consulte información de sus resultados introduciendo el número que le ha sido proporcionado por el laboratorio</label>
						<div class="consultaInfo">
							<input type="text" name="escConsultaCOVID">
						</div>
						<div class="buscarConsultaInfo">
							<input type="submit" name="buscConsultaCOVID" value="Consultar">
						</div>
					</form>


					
					</div>

			</div>
		</div>

	</main>

	<!--La inclusion del archivo script.js-->
	<script src="js/script.js"></script>
	<?php 
	//La inclusion del archivo obtenerResultados.php
	include("obtenerResultados.php");
	?>

</body>
</html>
