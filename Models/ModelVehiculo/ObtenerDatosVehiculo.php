<?php

require_once("../../Controllers/Conexion.php");
require_once("../../Controllers/Vehiculo.php");

	$obj= new Vehiculo();


	$code=$_POST['codigo'];

	echo json_encode($obj->ObtenDatosVehiculo($code));

 ?>
