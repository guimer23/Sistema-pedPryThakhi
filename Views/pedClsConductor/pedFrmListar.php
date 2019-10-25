<!DOCTYPE html>
<html lang="es">

<!-- initial head -->
<head>
    <meta charset="utf-8" />
    <title>Proyecto Taky - 2019</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A premium admin dashboard template by Mannatthemes" name="description" />
    <meta content="Mannatthemes" name="author" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- App css -->
    <link href="../../Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="../../Assets/css/icons.css" rel="stylesheet" type="text/css" />
    <link href="../../Assets/css/metisMenu.min.css" rel="stylesheet" type="text/css" />
    <link href="../../Assets/css/style.css" rel="stylesheet" type="text/css" />

</head>
<!-- head End -->
    <body>
        <!-- Top Bar Start -->
        <?php include "../Template/topbar.php";?>
        <!-- Top Bar End -->

        <div class="page-wrapper">

          <!-- Left Sidenav -->
        <?php include "../Template/sidenav.php" ;?>
          <!-- end left-sidenav-->

            <!-- Page Content-->
            <div class="page-content">

              <div class="container-fluid">
                  <!-- Page-Title -->
                  <div class="row">
                      <div class="col-sm-12">
                          <div class="page-title-box">
                              <div class="float-right">
                                  <ol class="breadcrumb">
                                      <li class="breadcrumb-item"><a href="javascript:void(0);">Metrica</a></li>
                                      <li class="breadcrumb-item"><a href="javascript:void(0);">Others</a></li>
                                      <li class="breadcrumb-item active">Google Maps</li>
                                  </ol>
                              </div>
                              <h4 class="page-title">Lista de Conductores</h4>
                          </div><!--end page-title-box-->
                      </div><!--end col-->
                  </div>
                  <!-- end page title end breadcrumb -->
                  <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">

                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div> <!-- end col -->
                  </div> <!-- end row -->

              </div><!-- container -->

                <?php include "../Template/footer.php" ;?>
                <!--end footer-->
            </div>
            <!-- end page content -->
        </div>
        <!-- end page-wrapper -->


        <!-- jQuery  -->
        <!-- google maps api -->
        <!-- Gmaps file -->
        <!-- demo codes -->
        <!-- App js -->
        <!-- jQuery  -->
        <script src="../../Assets/js/jquery.min.js"></script>
        <script src="../../Assets/js/bootstrap.bundle.min.js"></script>
        <script src="../../Assets/js/metisMenu.min.js"></script>
        <script src="../../Assets/js/waves.min.js"></script>
        <script src="../../Assets/js/jquery.slimscroll.min.js"></script>

        <!-- google maps api -->
        <script src="https://maps.google.com/maps/api/js?key=AIzaSyCtSAR45TFgZjOs4nBFFZnII-6mMHLfSYI"></script>
        <!-- Gmaps file -->
        <script src="../../Assets/plugins/gmaps/gmaps.min.js"></script>
        <!-- demo codes -->
        <script src="../../Assets/pages/jquery.gmaps.init.js"></script>

        <!-- App js -->
        <script src="../../Assets/js/app.js"></script>


    </body>
</html>
