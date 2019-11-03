<?php

class VehiculoConductor
{


    public function RegistrarVehiculoConductor($datos)
    {
      $c= new Conectar();
      $conexion=$c->conexion();
      $sql="INSERT INTO admmoctmoto_conductor (CONid,MOTid)
      values('$datos[0]',
            '$datos[1]')";

        return mysqli_query($conexion,$sql);
    }

}



 ?>
