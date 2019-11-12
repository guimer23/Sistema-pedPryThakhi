<?php

class Entregas
{

  public function agregaImagen($datos){
      $c=new Conectar();
      $conexion=$c->conexion();

      $fecha=date('Y-m-d');

        $sql="INSERT into admimgtimagen (
                      IMGnombre,
                      IMGruta,
                      IMGfechaSubida)
                values ('$datos[0]',
                    '$datos[1]',
                    '$fecha')";
      $result=mysqli_query($conexion,$sql);
      return mysqli_insert_id($conexion);
    }

  public function RegistroEntrega($datos)
  {
    $fecha=date('Y-m-d');

    $c= new Conectar();
    $conexion=$c->conexion();
    $sql="INSERT INTO admenttentrega (ENTdescripcion,ENTtipo,VECid,ENTfechahora,CLIdni,ENTprecio,ENTestado,ENTfoto)
    values('$datos[0]',
            '$datos[1]',
            '$datos[2]',
            '$datos[3]',
            '$datos[4]',
            '$datos[5]',
            '$datos[6]',
            '$datos[7]')";

      return mysqli_query($conexion,$sql);
  }
}


 ?>
