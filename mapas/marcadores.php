<?php

  // Archivo de Conexión a la Base de Datos
  include('conexion.php');

  // Listamos las direcciones con todos sus datos (lat, lng, dirección, etc.)
  $result = mysqli_query($con, "SELECT vhi.CONdni,co.CONnombre,vhi.VEClatitud,vhi.VEClongitud FROM admvectvehiculo_conductor as vhi
  inner join admcontconductor as co
  on vhi.condni= co.CONdni");

  // Seleccionamos los datos para crear los marcadores en el Mapa de Google serian direccion, lat y lng
  while ($row = mysqli_fetch_array($result)) {
      echo '["' . $row['CONdni'] . '", '.row['CONnombre'].','.row['VEClatitud']. ', ' .$row['VEClongitud'].'],';
  }
?>
