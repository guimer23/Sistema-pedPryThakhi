<?php

class VehiculoConductor
{


    public function RegistrarVehiculoConductor($datos)
    {
      $c= new Conectar();
      $conexion=$c->conexion();
      $sql="INSERT INTO admvectvehiculo_conductor (CONdni,VEHid,VECestado)
      values('$datos[0]',
            '$datos[1]',
          '$datos[2]')";

        return mysqli_query($conexion,$sql);
    }

}



 ?>
