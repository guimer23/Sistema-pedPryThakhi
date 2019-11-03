<?php
require_once("../../Controllers/Conexion.php");
require_once("../../Controllers/Vehiculo.php");

$obj = new Vehiculo();

	$datos=array();
  $nombreImg=$_FILES['imagen']['name'];
	$rutaAlmacenamiento=$_FILES['imagen']['tmp_name'];
	$carpeta='../../Fotos/';
	$rutaFinal=$carpeta.$nombreImg;

	$datosImg=array($nombreImg,$rutaFinal);

		if(move_uploaded_file($rutaAlmacenamiento, $rutaFinal)){
				$idimagen=$obj->agregaImagen($datosImg);

				if($idimagen > 0){

					$datos[0]=$_POST['marca'];
          $datos[1]=$_POST['placa'];
          $datos[2]=$_POST['modelo'];
          $datos[3]=$_POST['color'];
          $datos[4]=$_POST['soat'];
          $datos[5]=$_POST['ano'];
					$datos[6]=$idimagen;
          $datos[7]="1";
					echo $obj->RegistrarVehiculo($datos);
				}else{
					echo 0;
				}

		}

 ?>
