
<?php

require_once("../../Controllers/Conexion.php");
	$c= new Conectar();
		$conexion=$c->conexion();
	$sql="SELECT CONid,CONnombre,CONapellido,CONlicencia,CONemail,CONcelular from admcontconductor ";


$resultado=mysqli_query($conexion,$sql);

?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="shortcut icon" href="../../Assets/images/favicon.ico">

    <!-- DataTables -->
    <link href="../../Assets/plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <link href="../../Assets/plugins/datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <!-- Responsive datatable examples -->
    <link href="../../Assets/plugins/datatables/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />

    <!-- App css -->
    <link href="../../Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="../../Assets/css/icons.css" rel="stylesheet" type="text/css" />
    <link href="../../Assets/css/metisMenu.min.css" rel="stylesheet" type="text/css" />
    <link href="../../Assets/css/style.css" rel="stylesheet" type="text/css" />
</head>
  </head>
  <body>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <a href="pedFrmAgregar.php" class="btn btn-primary px-4 float-right mt-0 mb-3"><i class="mdi mdi-plus-circle-outline mr-2"></i>Agregar Nuevo Conductor</a>
                    <h4 class="header-title mt-0">Detalles de Conductores</h4>
                    <div class="table-responsive dash-social">
                        <table id="datatable" class="table">
                            <thead class="thead-light">
                            <tr>
                              <th>#</th>
                              <th>Nombres y Apellidos</th>
                              <th>Licencia</th>
                              <th>Vigencia de Lic.</th>
                              <th>Correo</th>
                              <th>Celular</th>
                              <th>Acción</th>
                            </tr><!--end tr-->
                            </thead>

                            <tbody>
                              <?php

                          	while ($ver=mysqli_fetch_row($resultado)) :
                          	 	# code...
                          	  ?>
                            <tr>

                              	<td><?php echo  $ver[0]?></td>
                                <td><?php echo  $ver[1]." ".$ver[2]?></td>
                          			<td><?php echo $ver[3]; ?></td>
                              	<td> vigencia</td>
                              	<td><?php echo $ver[4]; ?></td>
                                <td><?php echo $ver[5]; ?></td>
                              <td>
                                <a href="pedFrmAgregar.php" class="mr-2"><i class="fas fa-edit text-info font-16"></i></a>
                                <a href="#"><i class="fas fa-eye text-dark font-16"></i></a>
                              </td>
                            </tr><!--end tr-->

<?php endwhile ?>
                            </tbody>
                        </table>
                    </div>
                </div><!--end card-body-->
            </div><!--end card-->
        </div> <!--end col-->
    </div><!--end row-->

</div><!-- container -->
  </body>
</html>
<script src="../../Assets/js/jquery.min.js"></script>
<script src="../../Assets/js/bootstrap.bundle.min.js"></script>
<script src="../../Assets/js/metisMenu.min.js"></script>
<script src="../../Assets/js/waves.min.js"></script>
<script src="../../Assets/js/jquery.slimscroll.min.js"></script>

<script src="../../Assets/plugins/apexcharts/apexcharts.min.js"></script>
<script src="https://apexcharts.com/samples/assets/irregular-data-series.js"></script>
<script src="https://apexcharts.com/samples/assets/ohlc.js"></script>
<!-- Required datatable js -->
<script src="../../Assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../../Assets/plugins/datatables/dataTables.bootstrap4.min.js"></script>
<script src="../../Assets/plugins/peity-chart/jquery.peity.min.js"></script>

<script src="../../Assets/pages/jquery.ana_customers.inity.js"></script>

<!-- App js -->
<script src="../../Assets/js/app.js"></script>
