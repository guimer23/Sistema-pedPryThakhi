<?php

session_start();

require_once("../../Controllers/Conexion.php");
require_once("../../Controllers/Usuarios.php");

$obj = new Usuario();


$datos= array(
//$_POST['username']);

$usu=$_POST['username'];

echo $obj->Login($usu);


 ?>
