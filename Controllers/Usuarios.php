<?php

class Usuario
{

  public  function Login($datos)
  {
    $c=new Conectar();
			$conexion=$c->conexion();

			//$password=sha1($datos[1]);

			$_SESSION['username']=$datos;

		//	$_SESSION['Nivel']=self::TraeCodigo($datos);
      //$var="admin";
			$sql="SELECT * 	FROM admusutusuario where USUusuario=$datos";

			$result=mysqli_query($conexion,$sql);
      if(mysqli_num_rows($result) > 0){
    				return 1;
    			}else{
    				return 0;
    			}
  }
}


 ?>
