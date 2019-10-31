<?php

class Conectar
{

	private $servidor="localhost";
	private $usuario="root";
	private $pass="";
	private $bd="administracion";

	function conexion()
	{
		$conexion=mysqli_connect($this->servidor,
						$this->usuario,
						$this->pass,
						$this->bd);
		return $conexion;


	}
}


/*
$c=new Conectar();
$conexion=$c->conexion();

$var="admin";
$sql="SELECT * 	FROM admusutusuario  where USUusuario = '$var'";
//echo mysqli_fetch_array($conexion,$sql);



$bol=0;
$result=mysqli_query($conexion,$sql);
if(mysqli_num_rows($result) > 0){
			echo "si existe 1";

		}else{
			echo "no existe ";
		}

*/
 ?>
