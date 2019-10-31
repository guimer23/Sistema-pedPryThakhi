<?php
require_once("../../Controllers/Conexion.php");
require_once("../../Controllers/Conductor.php");

$obj = new Conductores();

	$datos=array();
  $nombreImg=$_FILES['imagen']['name'];
	$rutaAlmacenamiento=$_FILES['imagen']['tmp_name'];
	$carpeta='../../Fotos/';
	$rutaFinal=$carpeta.$nombreImg;

	$datosImg=array($nombreImg,$rutaFinal);

		if(move_uploaded_file($rutaAlmacenamiento, $rutaFinal)){
				$idimagen=$obj->agregaImagen($datosImg);

				if($idimagen > 0){

					$datos[0]=$_POST['celular'];
          $datos[1]=$_POST['clave'];
          $datos[2]=$_POST['nombre'];
          $datos[3]=$_POST['apellidos'];
					$datos[4]=$idimagen;
					$datos[5]=$_POST['correo'];
					$datos[6]=$_POST['licencia'];
          $datos[7]="1";
					echo $obj->RegistrarConductor($datos);
				}else{
					echo 0;
				}

		}

 ?>
