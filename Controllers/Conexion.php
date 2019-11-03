<?php

class Conectar
{

	private $servidor="192.168.0.8";
	private $usuario="thakhi";
	private $pass="12345678";
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

 ?>
