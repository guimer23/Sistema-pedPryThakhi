<?php

session_start();

require_once("../../Controllers/Conexion.php");
require_once("../../Controllers/Usuarios.php");

$obj = new Usuario();


$datos= array($usu=$_POST['usu'],$_POST['userpassword']);



echo $obj->Login($datos);


 ?>
