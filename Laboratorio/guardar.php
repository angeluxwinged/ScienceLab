<?php 
	//Indica que utilizaremos la conexion con la base de datos creada en conexion.php
	include ('conexion.php');

	//esta condicional se ejecuta cuando el boton submit 'enviarCOVID' es oprimido
	if (isset($_POST['enviarCOVID'])) {

	//Variables cita COVID
	$nombreCOVID = $_POST['nombreCOVID'];
	$nombreCOVID = strtoupper($nombreCOVID);
	$edadCOVID = (int) $_POST['edadCOVID'];
	$generoCOVID = $_POST['generoCOVID'];
	$domicilioCOVID = $_POST['domicilioCOVID'];
	$domicilioCOVID = strtoupper($domicilioCOVID);
	$nacionalidadCOVID = $_POST['nacionalidadCOVID'];
	$nacionalidadCOVID = strtoupper($nacionalidadCOVID);
	$telefonoCOVID = $_POST['telefonoCOVID'];
	$tipoPruebaCOVID = $_POST['tipoPruebaCOVID'];
	$fechaCOVID = $_POST['fechaCOVID'];
	$horaCOVID = $_POST['horaCOVID'];
	$fechaHoraCOVID = $fechaCOVID  . " " . $horaCOVID;

	if (strlen($nombreCOVID) >= 1 && strlen($edadCOVID) >= 1 && strlen($generoCOVID) >= 1 && strlen($nacionalidadCOVID) >= 1 && strlen($telefonoCOVID) >= 1 && strlen($tipoPruebaCOVID) >= 1 && strlen($fechaHoraCOVID) >= 1) {
	
	//Inserta datos en tabla citacovid
	$insertar = "INSERT INTO citacovid VALUES(0,'$nombreCOVID', $edadCOVID, '$generoCOVID', '$domicilioCOVID', '$nacionalidadCOVID', '$telefonoCOVID', '$tipoPruebaCOVID', '$fechaHoraCOVID')";
	$resultado = mysqli_query($conectar, $insertar);

	//Muestra al usuario que se ha generado la cita correctamente
	if($resultado){
	echo '<script>alert("SU CITA SE HA GENERADO EXITOSAMENTE. ACUDA AL LABORATORIO EN EL HORARIO ESTABLECIDO: '.$fechaHoraCOVID.'. ACATAR LAS RECOMENDACIONES DE LAS AUTORIDADES SOBRE LA SANA DISTANCIA, USO DE CUBRE BOCAS Y USO DE GEL ANTIBACTERIAL")</script>';

	}else{//Muestra al usuario que la fecha establecida esta ocupada
	echo '<script>alert("ALGO SALIO MAL... ES POSIBLE QUE EL HORARIO ESTABLECIDO ESTE OCUPADO, INTENTE CON OTRA FECHA U HORA")</script>';

	}}else{//Muestra al usuario que no ha llenado todos los campos
	echo '<script>alert("ALGO SALIO MAL... VERIFIQUE QUE HA LLENADO TODOS LOS CAMPOS")</script>';
}
}


	//esta condicional se ejecuta cuando el boton submit 'enviarCOVID' es oprimido
	if (isset($_POST['enviarTHC'])) {

	//Variables cita THC
	$nombreTHC = $_POST['nombreTHC'];
	$nombreTHC = strtoupper($nombreTHC);
	$edadTHC = (int) $_POST['edadTHC'];
	$generoTHC = $_POST['generoTHC'];
	$domicilioTHC = $_POST['domicilioTHC'];
	$domicilioTHC = strtoupper($domicilioTHC);
	$nacionalidadTHC = $_POST['nacionalidadTHC'];
	$nacionalidadTHC = strtoupper($nacionalidadTHC);
	$telefonoTHC = $_POST['telefonoTHC'];
	$fechaTHC = $_POST['fechaTHC'];
	$horaTHC = $_POST['horaTHC'];
	$fechaHoraTHC = $fechaTHC  . " " . $horaTHC;

	if (strlen($nombreTHC) >= 1 && strlen($edadTHC) >= 1 && strlen($generoTHC) >= 1 && strlen($nacionalidadTHC) >= 1 && strlen($telefonoTHC) >= 1 && strlen($fechaHoraTHC) >= 1) {
	
	//Inserta datos en tabla citathc
	$insertar2 = "INSERT INTO citathc VALUES(0,'$nombreTHC', $edadTHC, '$generoTHC', '$domicilioTHC', '$nacionalidadTHC', '$telefonoTHC', '$fechaHoraTHC')";
	$resultado2 = mysqli_query($conectar, $insertar2);

	//Muestra al usuario que se ha generado la cita correctamente
	if($resultado2){
	echo '<script>alert("SU CITA SE HA GENERADO EXITOSAMENTE. ACUDA AL LABORATORIO EN EL HORARIO ESTABLECIDO: '.$fechaHoraTHC.'. ACATAR LAS RECOMENDACIONES DE LAS AUTORIDADES SOBRE LA SANA DISTANCIA, USO DE CUBRE BOCAS Y USO DE GEL ANTIBACTERIAL")</script>';

	}else{//Muestra al usuario que la fecha establecida esta ocupada
	echo '<script>alert("ALGO SALIO MAL... ES POSIBLE QUE EL HORARIO ESTABLECIDO ESTE OCUPADO, INTENTE CON OTRA FECHA U HORA")</script>';

	}}else{//Muestra al usuario que no ha llenado todos los campos
	echo '<script>alert("ALGO SALIO MAL... VERIFIQUE QUE HA LLENADO TODOS LOS CAMPOS")</script>';

}
}


	//esta condicional se ejecuta cuando el boton submit 'enviarResuCOVID' es oprimido
	if (isset($_POST['enviarResuCOVID'])) {

	//Variables resultados COVID
	$idCitaCOVID = (int) $_POST['idCitaCOVID'];
	$idLaboCOVID = (int) $_POST['idLaboCOVID'];
	$nombreCOVID = $_POST['nombreCOVID'];
	$nombreCOVID = strtoupper($nombreCOVID);
	$edadCOVID = (int) $_POST['edadCOVID'];
	$nacionalidadCOVID = $_POST['nacionalidadCOVID'];
	$nacionalidadCOVID = strtoupper($nacionalidadCOVID);
	$tipoPruebaCOVID = $_POST['tipoPruebaCOVID'];
	$generoCOVID = $_POST['generoCOVID'];
	$fechaCOVID = $_POST['fechaCOVID'];
	$horaCOVID = $_POST['horaCOVID'];
	$horaCOVID = $horaCOVID .":00";
	$fechaHoraCOVID = $fechaCOVID  . " " . $horaCOVID;
	$resultCOVID = $_POST['resultCOVID'];
	$nombreLaboCOVID = $_POST['nombreLaboCOVID'];
	$nombreLaboCOVID = strtoupper($nombreLaboCOVID);

	if (strlen($idCitaCOVID) >= 1 && strlen($idLaboCOVID) >= 1 && strlen($nombreCOVID) >= 1 && strlen($edadCOVID) >= 1 && strlen($nacionalidadCOVID) >= 1 && strlen($tipoPruebaCOVID) >= 1  && strlen($generoCOVID) >= 1 && strlen($fechaHoraCOVID) >= 1 && strlen($resultCOVID) >= 1 && strlen($nombreLaboCOVID) >= 1) {
	
	//Inserta datos en tabla resultpruebacovid
	$insertar = "INSERT INTO resultpruebacovid VALUES(0, $idCitaCOVID, $idLaboCOVID, '$nombreCOVID', $edadCOVID, '$nacionalidadCOVID', '$tipoPruebaCOVID', '$generoCOVID', '$fechaHoraCOVID', '$resultCOVID', '$nombreLaboCOVID')";
	$resultado = mysqli_query($conectar, $insertar);

	//Confirma al administrador que se han guardado los resultados
	if($resultado){
	echo '<script>alert("DATOS GUARDADOS CORRECTAMENTE")</script>';

	}else{//Muestra al administrador que alguno de los campos es incorrecto
	echo '<script>alert("ALGO SALIO MAL... VERIFIQUE QUE LOS DATOS INTRODUCIDOS SON CORRECTOS")</script>';

	}}else{//Muestra al administrador que no ha llenado todos los campos
	echo '<script>alert("ALGO SALIO MAL... VERIFIQUE QUE HA LLENADO TODOS LOS CAMPOS")</script>';
}
}


	//esta condicional se ejecuta cuando el boton submit 'enviarResuTHC' es oprimido
	if (isset($_POST['enviarResuTHC'])) {

	//Variables resultados THC
	$idCitaTHC = (int) $_POST['idCitaTHC'];
	$idLaboTHC = (int) $_POST['idLaboTHC'];
	$nombreTHC = $_POST['nombreTHC'];
	$nombreTHC = strtoupper($nombreTHC);
	$edadTHC = (int) $_POST['edadTHC'];
	$nacionalidadTHC = $_POST['nacionalidadTHC'];
	$nacionalidadTHC = strtoupper($nacionalidadTHC);
	$generoTHC = $_POST['generoTHC'];
	$fechaTHC = $_POST['fechaTHC'];
	$horaTHC = $_POST['horaTHC'];
	$horaTHC = $horaTHC .":00";
	$fechaHoraTHC = $fechaTHC  . " " . $horaTHC;
	$resultTHC = $_POST['resultTHC'];
	$nombreLaboTHC = $_POST['nombreLaboTHC'];
	$nombreLaboTHC = strtoupper($nombreLaboTHC);

	if (strlen($idCitaTHC) >= 1 && strlen($idLaboTHC) >= 1 && strlen($nombreTHC) >= 1 && strlen($edadTHC) >= 1 && strlen($nacionalidadTHC) >= 1 && strlen($generoTHC) >= 1 && strlen($fechaHoraTHC) >= 1 && strlen($resultTHC) >= 1 && strlen($nombreLaboTHC) >= 1) {
	
	//Inserta datos en tabla resultpruebathc
	$insertar = "INSERT INTO resultpruebathc VALUES(0, $idCitaTHC, $idLaboTHC, '$nombreTHC', $edadTHC, '$nacionalidadTHC', '$generoTHC', '$fechaHoraTHC', '$resultTHC', '$nombreLaboTHC')";
	$resultado2 = mysqli_query($conectar, $insertar);

	//Confirma al administrador que se han guardado los resultados
	if($resultado2){
	echo '<script>alert("DATOS GUARDADOS CORRECTAMENTE")</script>';

	}else{//Muestra al administrador que alguno de los campos es incorrecto
	echo '<script>alert("ALGO SALIO MAL... VERIFIQUE QUE LOS DATOS INTRODUCIDOS SON CORRECTOS")</script>';

	}}else{//Muestra al administrador que no ha llenado todos los campos
	echo '<script>alert("ALGO SALIO MAL... VERIFIQUE QUE HA LLENADO TODOS LOS CAMPOS")</script>';
}
}


	//esta condicional se ejecuta cuando el boton submit 'enviarAgregarLabo' es oprimido
	if (isset($_POST['enviarAgregarLabo'])) {

	//Variables agregar laboratorista
	$nombreLabo = $_POST['nombreLabo'];
	$nombreLabo = strtoupper($nombreLabo);
	$fechaLabo = $_POST['fechaLabo'];
	$generoLabo = $_POST['generoLabo'];
	$domicilioLabo = $_POST['domicilioLabo'];
	$domicilioLabo = strtoupper($domicilioLabo);
	$nacionalidadLabo = $_POST['nacionalidadLabo'];
	$nacionalidadLabo = strtoupper($nacionalidadLabo);
	$telefonoLabo = $_POST['telefonoLabo'];
	$CURPLabo = $_POST['CURPLabo'];
	$CURPLabo = strtoupper($CURPLabo);
	$RFCLabo = $_POST['RFCLabo'];
	$RFCLabo = strtoupper($RFCLabo);
	$NSSLabo = $_POST['NSSLabo'];
	$NSSLabo = strtoupper($NSSLabo);
	$claveLabo = $_POST['claveLabo'];
	$claveLabo = strtoupper($claveLabo);

	if (strlen($nombreLabo) >= 1 && strlen($fechaLabo) >= 1 && strlen($generoLabo) >= 1 && strlen($domicilioLabo) >= 1 && strlen($nacionalidadLabo) >= 1 && strlen($telefonoLabo) >= 1 && strlen($CURPLabo) >= 1 && strlen($RFCLabo) >= 1 && strlen($NSSLabo) >= 1 && strlen($claveLabo) >= 1) {
	
	//Inserta datos en tabla laboratorista
	$insertar = "INSERT INTO laboratorista VALUES(0, '$nombreLabo', '$fechaLabo', '$generoLabo', '$domicilioLabo', '$nacionalidadLabo', '$telefonoLabo', '$CURPLabo', '$RFCLabo', '$NSSLabo', '$claveLabo')";
	$resultado2 = mysqli_query($conectar, $insertar);

	//Confirma al administrador que se han guardado los resultados
	if($resultado2){
	echo '<script>alert("LABORATORISTA AGREGADO CORRECTAMENTE")</script>';

	}else{//Muestra al administrador que alguno de los campos es incorrecto
	echo '<script>alert("ALGO SALIO MAL... VERIFIQUE QUE LOS DATOS INTRODUCIDOS SON CORRECTOS")</script>';

	}}else{//Muestra al administrador que no ha llenado todos los campos
	echo '<script>alert("ALGO SALIO MAL... VERIFIQUE QUE HA LLENADO TODOS LOS CAMPOS")</script>';
}
}

?>