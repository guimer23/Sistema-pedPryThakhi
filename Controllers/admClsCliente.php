<?php


class Clientes
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

  public function RegistrarCliente($datos)
  {
    $c= new Conectar();
    $conexion=$c->conexion();
    $sql="INSERT INTO admclitcliente (CLIdni,CLInombre,CLIapellido,CLIcelular,CLIemail,CLIclave,CLIlatitud,CLIlongitud,CLIfoto)
    values('$datos[0]',
          '$datos[1]',
          '$datos[2]',
          '$datos[3]',
          '$datos[4]',
          '$datos[5]',
          '$datos[6]',
          '$datos[7]',
          '$datos[8]')";

      return mysqli_query($conexion,$sql);
  }

}


 ?>
