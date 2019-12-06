<?php

class Conectar
{
	//conexion a base de datos remoto
	//private $servidor="administracionthakhi.cpjqcso8bbco.us-east-2.rds.amazonaws.com";
	//base de datos local
	//private $servidor="localhost";
	//usuario remoto
	//private $usuario="admin";
	//usuario local
	//private $usuario="root";
	//contrseña remoto
	//private $pass="Sistemas.123";
	//contraseña local
	//private $pass="Sistemas.123";

	private $servidor="184.107.137.250";
	private $usuario="thakhi_thakhi";
	private $pass="Sistemas.123";
	private $bd="thakhi_administracionthakhi";

<<<<<<< HEAD
//private $servidor="localhost";
//private $usuario="root";
//private $pass="";
//private $bd="administracionthakhi";

=======
private $servidor="localhost";
private $usuario="root";
private $pass="";
private $bd="administracionthakhi1";
>>>>>>> 8ae34e387e2d0cc78f69fdcd0440efb2ede149e7
	function conexion()
	{
		$conexion=mysqli_connect($this->servidor,
						$this->usuario,
						$this->pass,
						$this->bd);
		return $conexion;
	}

}

?>
