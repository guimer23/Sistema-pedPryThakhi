<?php

$con=new mysqli("184.107.137.250","thakhi_thakhi","Sistemas.123","thakhi_administracionthakhi");

$st=$con->prepare("update admclitcliente set CLIlatitud=?,CLIlongitud=? where CLIdni=?");
$st->bind_param("dds",$_GET["CLIlatitud"],$_GET["CLIlongitud"],$_GET["CLIdni"]);
$st->execute();
