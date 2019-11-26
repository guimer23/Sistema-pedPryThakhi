<?php

  // Archivo de Conexión a la Base de Datos 
  include('conexion.php');

  // Listamos las direcciones con todos sus datos (lat, lng, dirección, etc.)
  $result = mysqli_query($con, "SELECT * FROM admvectvehiculo_conductor");

  // Creamos una tabla para listar los datos 
  echo "<div class='table-responsive'>";

  echo "<div class='row'>
  <div class='col-12'>
      <div class='card'>
          <div class='card-body'>                                
              <h4 class='header-title mt-0'>Detalles de Monitoreo de Entregas</h4>
              <div class='table-responsive dash-social'>
  <table class='table' id='TablaMonitorear'>
          <thead class='thead-dark'>
            <tr>
              <th scope='col'>Nombre</th>
              <th scope='col'>Dirección</th>
              <th scope='col'>Latitud</th>
              <th scope='col'>Longitud</th>
              
            </tr>
            </thead>
            <tbody>";

  while ($row = mysqli_fetch_array($result)) {
      echo "<tr>";
      echo "<td scope='col'>" . $row['CONdni'] . "</td>";
      echo "<td scope='col'>" . preg_replace('/\\\\u([\da-fA-F]{4})/', '&#x\1;', $row['VEHid']) . "</td>";
      echo "<td scope='col'>" . $row['VEClatitud'] . "</td>";
      echo "<td scope='col'>" . $row['VEClongitud'] . "</td>";
      
      echo "</tr>";
  }
  echo "</tbody></table>";
  echo "</div>
  </div>
  <!--end card-body-->
</div>
<!--end card-->
</div>
<!--end col-->
</div>";
  echo "</div>";

  