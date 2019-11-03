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

    public function ObtenDatosVehiculo($codigo){

          $c= new Conectar();
          $conexion=$c->conexion();
          $sql ="SELECT ad.MOTid,ad.motmarca,ad.motplaca,ad.MOTmodelo,ad.MOTcolor,ad.MOTsoat,ad.MOTanio_fabricacion,ad.MOTfoto,ad.MOTestado,img.ruta from admmottmoto as ad
          inner join imagenes as img
          on ad.MOTfoto=img.id_imagen
          where ad.MOTid='$codigo'";

          $resultado =mysqli_query($conexion,$sql);
          $ver=mysqli_fetch_row($resultado);
          $datos=array(
            'Codigo'=>$ver[0],
            'Marca'=>$ver[1],
            'Placa'=> $ver[2],
            'Modelo'=>$ver[3],
            'Color'=>$ver[4],
            'Soat'=> $ver[5],
            'Fabricacion'=>$ver[6],
            'Foto'=> $ver[7],
            'Estado'=> $ver[8],
              'Foto'=> $ver[9],
              );

          return $datos;

    }


}



 ?>
