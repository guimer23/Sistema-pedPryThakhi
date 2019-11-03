<?php

class Usuario
{

  public  function Login($datos)
  {
    $c=new Conectar();
			$conexion=$c->conexion();

			//$password=sha1($datos[1]);

			$_SESSION['usu']=$datos[0];

		//	$_SESSION['Nivel']=self::TraeCodigo($datos);
    //  $var="admin";
			$sql="SELECT * 	FROM admusutusuario where USUusuario='$datos[0]' and  USUpassword = '$datos[1]'";

			$result=mysqli_query($conexion,$sql);
      if(mysqli_num_rows($result)>0){
    				return 1;
    			}else{
    				return 0;
    			}
  }

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

public function RegistrarUsuario($datos)
{
  $c= new Conectar();
  $conexion=$c->conexion();
  $sql="INSERT INTO admusutusuario (usunombre,USUemail,USUusuario,USUpassword,USUestado)
  values('$datos[0]',
        '$datos[1]',
        '$datos[2]',
        '$datos[3]',
        '$datos[4]')";

    return mysqli_query($conexion,$sql);
}
}


 ?>
