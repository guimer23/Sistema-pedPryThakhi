<?php

$con=new mysqli("184.107.137.250","thakhi_thakhi","Sistemas.123","thakhi_administracionthakhi");

$st=$con->prepare("update admvectvehiculo_conductor set VEClatitud=?,VEClongitud=? where CONdni=?");
$st->bind_param("dds",$_GET["VEClatitud"],$_GET["VEClongitud"],$_GET["CONdni"]);
$st->execute();
