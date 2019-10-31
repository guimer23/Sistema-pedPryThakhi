<?php
/**
 *
 */
class Vehiculo
{

      public function agregaImagen($datos){
          $c=new Conectar();
          $conexion=$c->conexion();

          $fecha=date('Y-m-d');

            $sql="INSERT into imagenes (
                          nombre,
                          ruta,
                          fechaSubida)
                    values ('$datos[0]',
                        '$datos[1]',
                        '$fecha')";
          $result=mysqli_query($conexion,$sql);
      return mysqli_insert_id($conexion);
    }

    public function RegistrarVehiculo($datos)
    {
      $c= new Conectar();
      $conexion=$c->conexion();
      $sql="INSERT INTO admmottmoto (motmarca,motplaca,MOTmodelo,MOTcolor,MOTsoat,MOTanio_fabricacion,MOTfoto,MOTestado)
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
