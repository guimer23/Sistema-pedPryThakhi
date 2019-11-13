<?php
require_once("../../Controllers/admClsConexion.php");
require_once("../../Controllers/admClsEntregas.php");

$obj = new Entregas();

	$datos=array();
	$nombreImg=$_FILES['imagen']['name'];
	$rutaAlmacenamiento=$_FILES['imagen']['tmp_name'];
	$carpeta='../../Fotos/';
	$rutaFinal=$carpeta.$nombreImg;
	$datosImg=array($nombreImg,$rutaFinal);

	if(move_uploaded_file($rutaAlmacenamiento, $rutaFinal)){
			$idimagen=$obj->agregaImagen($datosImg);

			$estado=$_POST['estado'];
	  	$var="";
		if($estado=="Activo"){
			 // $datos[6]="A";
			 $var="A";

			}
				else {
			// code...$datos[6]="A";
			$var="I";
		}
			if($idimagen > 0){

					$datos[0]=$_POST['descripcion'];
					$datos[1]=$_POST['tipo'];
          $datos[2]=$_POST['conductor'];
          $datos[3]=$_POST['fecha'];
          $datos[4]=$_POST['cliente'];
          $datos[5]=$_POST['precio'];
          $datos[6]="A";
					$datos[7]=7;
					//console.log($datos);
					echo $obj->RegistroEntrega($datos);
				}else{
					echo 0;
				}

		}


 ?>
