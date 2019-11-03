<?php

	require_once "../../Controllers/Conexion.php";
	require_once "../../Controllers/Conductor.php";

	$obj= new Conductores();
	$idart=$_POST['id'];

	echo json_encode($obj->obtenDatosConductor($idart));

 ?>
