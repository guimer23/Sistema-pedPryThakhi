<?php

  // Archivo de Conexión a la Base de Datos
  //include('conexion.php');

  require_once("../../Controllers/admClsConexion.php");
  $c = new Conectar();
  $conexion = $c->conexion();

  // Listamos las direcciones con todos sus datos (lat, lng, dirección, etc.)
  $result = mysqli_query($conexion,  "SELECT  vhi.VEHid, vhi.CONdni,co.CONnombre,co.CONapellido,co.CONcelular,vehi.VEHplaca,  vhi.VEClatitud,vhi.VEClongitud FROM admvectvehiculo_conductor as vhi
  inner join admcontconductor as co
  on vhi.condni= co.CONdni
  inner join admvehtvehiculo as vehi
  on vhi.VEHid=vehi.VEHid");

  // Creamos una tabla para listar los datos
  echo "<div class='table-responsive'>";

  echo "<div class='row'>
  <div class='col-12'>
      <div class='card'>
          <div class='card-body'>
              <h4 class='header-title mt-0'>Detalles de Monitoreo de Entregas</h4>
              <div class='table-responsive dash-social'>
  <table class='table' id='TablaMonitorear'>
          <thead class='thead-light'>
            <tr>
                <th scope='col'>#</th>
                <th scope='col'>DNI</th>
                <th scope='col'>Nombres y Apellidos</th>
                <th scope='col'>Celular</th>
                <th scope='col'>Placa Vehículo</th>
                <th class='text-center' scope='col'>Estado</th>

            </tr>
            </thead>
            <tbody>";

  while ($row = mysqli_fetch_array($result)) {
      echo "<tr>";
      echo "<td scope='col'>". $row['VEHid'] ."</td>";
      echo "<td scope='col'>" . $row['CONdni'] . "</td>";
      echo "<td scope='col'>" . preg_replace('/\\\\u([\da-fA-F]{4})/', '&#x\1;', $row['CONnombre']." ".$row['CONapellido']) . "</td>";
      echo "<td scope='col'>" . $row['CONcelular'] . "</td>";
      echo "<td scope='col'>" . $row['VEHplaca'] . "</td>";
      echo "<td class='text-center'><h5><span class='badge badge-success'>Activo</span></h5></td>";
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
