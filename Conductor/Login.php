<?php

$con=new mysqli("184.107.137.250","thakhi_thakhi","Sistemas.123","thakhi_administracionthakhi");

$st_check=$con->prepare("select * from admcontconductor where CONemail=? and CONclave=?");
$st_check->bind_param("ss",$_GET["CONemail"],$_GET["CONclave"]);
$st_check->execute();
$rs=$st_check->get_result();

if($rs->num_rows>0){
    $arr=array();
    while($row=$rs->fetch_assoc()){
        array_push($arr, $row);
    }
    echo json_encode($arr);
}
else{
    echo 0;
}