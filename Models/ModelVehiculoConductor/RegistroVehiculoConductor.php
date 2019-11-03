<?php
require_once("../../Controllers/Conexion.php");
require_once("../../Controllers/VehiculoConductor.php");

$obj = new VehiculoConductor();

$datos=array(
$_POST['idconductor'],
$_POST['idvehiculo']);

echo $obj->RegistrarVehiculoConductor($datos);


 ?>
