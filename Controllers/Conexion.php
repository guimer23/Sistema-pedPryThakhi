<?php
function conectar(){

	$user="root";
	$pass="root";
	$server="localhost";
	$db="administracion";
	$con=mysqli_connect($server,$user,$pass) or die ("Error al conectar a la base de datos".mysqli_connect_error());

	mysqli_selected_db($db,$con);

	return $con;
}
?>
