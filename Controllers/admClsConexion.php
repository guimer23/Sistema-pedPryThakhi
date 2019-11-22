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

	private $servidor="localhost";
	private $usuario="root";
	private $pass="";
	private $bd="administracionthakhi";
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
