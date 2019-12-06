<?php

$con=new mysqli("184.107.137.250","thakhi_thakhi","Sistemas.123","thakhi_administracionthakhi");

$st_check=$con->prepare("select * from admclitcliente where CLIdni=?");
$st_check->bind_param("s", $_GET["CLIdni"]);
$st_check->execute();
$rs=$st_check->get_result();
if($rs->num_rows>0){
    echo 0;
}
else{
    $st=$con->prepare("insert into admclitcliente(CLIdni,CLInombre,CLIapellido,CLIcelular,CLIemail,CLIclave) values(?,?,?,?,?,?)");
    $st->bind_param("ssssss",$_GET["CLIdni"],$_GET["CLInombre"],$_GET["CLIapellido"],$_GET["CLIcelular"],$_GET["CLIemail"],$_GET["CLIclave"]);
    $st->execute();
    echo 1;
}