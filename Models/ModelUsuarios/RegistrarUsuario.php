<?php
require_once("../../Controllers/Conexion.php");
require_once("../../Controllers/Usuarios.php");

$obj = new Usuario();

	$datos=array();


					$datos[0]=$_POST['nombre'];
          $datos[1]=$_POST['correo'];
          $datos[2]=$_POST['usuario'];
          $datos[3]=$_POST['clave'];
          $datos[4]="1"; //estado

					echo $obj->RegistrarUsuario($datos);


 ?>
