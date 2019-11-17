<?php
require_once("../../Controllers/admClsConexion.php");
require_once("../../Controllers/admClsVehiculo.php");

$obj = new Vehiculo();

$estado=$_POST['estado'];
$var="";
if($estado=="Activo"){
 // $datos[6]="A";
 $var="A";
}
  else {

$var="I";
}
	$datos=array();
  $datos[0]=$_POST['es'];
  $datos[1]=$_POST['placa'];
  $datos[2]=$_POST['marca'];
  $datos[3]=$_POST['modelo'];
  $datos[4]=$_POST['color'];
  $datos[5]=$_POST['ano'];
  $datos[6]=$_POST['soat'];
  $datos[7]=$var;
	echo $obj->ActualizaVehiculo($datos);

 ?>
