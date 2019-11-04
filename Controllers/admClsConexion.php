<?php

class Conectar
{

	private $servidor="localhost";
	private $usuario="root";
<<<<<<< HEAD
	private $pass="root";
=======
	private $pass="";
>>>>>>> 1e42fc8d06a99445759572a9a8f459e51f5c2c52
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
