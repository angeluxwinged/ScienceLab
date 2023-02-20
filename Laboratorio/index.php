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
						<li><a href="index.php" id="selected">Inicio</a></li>
						<li><a href="agendarCita.php">Agendar cita</a></li>
						<li><a href="consultarResultados.php">Consultar resultados</a></li>
						<li><a href="estadisticas.php">Estadísticas</a></li>
				</nav>
			</div>
			<a class="administracion" href="administracion.php">Administración</a>
		</div>
	
	</header>


	<main><!--Contenedor del cuerpo de la pagina-->
		<div class="containerCover">
			<div class="cover">
				<div class="text">
					<h1>ScienceLab es un laboratorio especializado en la prueba de antígenos para la detección de COVID-19 y pruebas de tetrahidrocannabinol (THC)</h1>
					<p>Puede agendar una cita via telefonica o por WhatsApp a nuestro número <b>612-123-4567</b> o mediante la página web haciendo click en el botón de abajo</p>
					<form action="agendarCita.php">
						<input type="submit" name="botonAgendarCita" value="Agendar cita">
					</form>
					
				</div>

				<div class="imagenLabo">
					<img src="images/labo2.png">
				</div>
			</div>
		</div>

	</main>

	<script src="js/script.js"></script>

</body>
</html>
