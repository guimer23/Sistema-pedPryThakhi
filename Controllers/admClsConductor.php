<?php


class Conductores
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
  public function RegistrarConductor($datos)
  {
    $c= new Conectar();
    $conexion=$c->conexion();
    $sql="INSERT INTO admcontconductor (CONdni,CONnombre,CONapellido,CONlicencia,CONvigencialicencia,CONcelular,CONemail,CONclave,CONdireccion,CONestado,CONfoto)
    values('$datos[0]',
          '$datos[1]',
          '$datos[2]',
          '$datos[3]',
          '$datos[4]',
          '$datos[5]',
          '$datos[6]',
          '$datos[7]',
          '$datos[8]',
          '$datos[9]',
          '$datos[10]')";

      return mysqli_query($conexion,$sql);
  }

  public function obtenDatosConductor($idusuario){

			$c=new conectar();
			$conexion=$c->conexion();

			$sql="SELECT CONid,
              CONnombre,
							CONapellido,
							CONlicencia,
							concelular,
              conclave,
              CONemail,
              CONestado
					from admcontconductor
					where CONid='$idusuario'";
			$result=mysqli_query($conexion,$sql);

			$ver=mysqli_fetch_row($result);

			$datos=array(
						  'id' => $ver[0],
							'nombre' => $ver[1],
							'apellido' => $ver[2],
							'licencia' => $ver[3],
              'celular' => $ver[4],
  						'clave' => $ver[5],
  						'email' => $ver[6]
						);

			return $datos;
		}
}


 ?>
