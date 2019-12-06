<?php

$con=new mysqli("184.107.137.250","thakhi_thakhi","Sistemas.123","thakhi_administracionthakhi");

$st=$con->prepare("select E.ENTid,E.ENTdescripcion,E.ENTtipo,V.CONdni,E.ENTfechahora,C.CLInombre,C.CLIapellido,E.ENTprecio,E.ENTestado".
        " from admenttentrega E,admclitcliente C,admvectvehiculo_conductor V ".
        " where (V.VECid = E.VECid AND C.CLIdni = E.CLIdni) AND E.ENTid=?");
$st->bind_param("i",$_GET["ENTid"]);
$st->execute();
$rs=$st->get_result();
$arr=array();
while($row=$rs->fetch_assoc()){
    array_push($arr, $row);
}
echo json_encode($arr);