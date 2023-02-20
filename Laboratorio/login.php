<?php 
	//Indica que utilizaremos la conexion con la base de datos creada en conexion.php
	include ('conexion.php');

	//esta condicional se ejecuta cuando el boton submit 'enviarLogin' es oprimido
	if (isset($_POST['enviarLogin'])) {

	//Datos a introducir por el laboratorista
	$nombreAdmin = $_POST['nombreAdmin'];
	$nombreAdmin = strtoupper($nombreAdmin);
	$claveAdmin = $_POST['claveAdmin'];
	$claveAdmin = strtoupper($claveAdmin);

	if (strlen($nombreAdmin) >= 1 && strlen($claveAdmin) >= 1) {
	
	$consulta = "SELECT * FROM laboratorista";
	$resultado = mysqli_query($conectar, $consulta);
	if($resultado){
		//Introduce los resultados de la consulta en variables
		while($row = $resultado->fetch_array()){
			$nombre = $row['nombre'];
			$clave = $row['clave'];

			if ($nombre == $nombreAdmin && $clave == $claveAdmin) {
				//Redirecciona al usuario a la pagina de administrador
				header("location: administracion2.php");

			}
	}
	}}else{//Muestra al usuario un mensaje notificandole que ha habido un error al introducir los datos
	echo '<script>alert("ALGO SALIO MAL... VERIFIQUE QUE SU NOMBRE O CLAVE DE ACCESO SON CORRECTOS")</script>';
	}
}



?>