<?php
require_once("../../Controllers/admClsConexion.php");
require_once("../../Controllers/admClsConductor.php");

$obj = new Conductores();

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

					$datos[0]=$_POST['dni'];
          $datos[1]=$_POST['nombre'];
          $datos[2]=$_POST['apellidos'];
          $datos[3]=$_POST['licencia'];
					$datos[4]=$_POST['vigencia'];
					$datos[5]=$_POST['celular'];
					$datos[6]=$_POST['correo'];
					$datos[7]=$_POST['clave'];
						$datos[8]=$_POST['direccion'];
					  $datos[9]=$var;

					echo $obj->ActualizaConductor($datos);

 ?>
