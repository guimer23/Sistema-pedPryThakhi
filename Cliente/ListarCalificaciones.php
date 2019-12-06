<?php

$con=new mysqli("184.107.137.250","thakhi_thakhi","Sistemas.123","thakhi_administracionthakhi");

$st=$con->prepare("select * from admcaltcalificar where CONdni=?");
$st->bind_param("s",$_GET["CONdni"]);
$st->execute();
$rs=$st->get_result();
$arr=array();
while($row=$rs->fetch_assoc()){
    array_push($arr, $row);
}
echo json_encode($arr);