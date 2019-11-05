<?php
require_once("../../Controllers/admClsConexion.php");
require_once("../../Controllers/admClsVehiculoConductor.php");

$obj = new VehiculoConductor();

$datos=array(
$_POST['idconductor'],
$_POST['idvehiculo']);
console.log($_POST['idconductor']);
echo $obj->RegistrarVehiculoConductor($datos);


 ?>
