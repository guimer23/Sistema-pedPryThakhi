<!DOCTYPE html>
<html lang="es">
<!-- initial head -->
<?php include "Views/Template/head.php" ;?>
<!-- head End -->
    <body>
        <!-- Top Bar Start -->
        <?php include "Views/Template/topbar.php";?>
        <!-- Top Bar End -->

        <div class="page-wrapper">

          <!-- Left Sidenav -->
        <?php include "Views/Template/sidenav.php" ;?>
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
                                <h4 class="page-title">Google Maps</h4>
                            </div><!--end page-title-box-->
                        </div><!--end col-->
                    </div>
                    <!-- end page title end breadcrumb -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="mt-0 header-title">Markers</h4>
                                    <p class="text-muted mb-3">Example of google maps.</p>
                                    <div id="gmaps-markers" class="gmaps"></div>
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div> <!-- end col -->
                    </div> <!-- end row -->

                </div><!-- container -->

                <?php include "Views/Template/footer.php" ;?>
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
        <?php include "Views/Template/js.php";?>


    </body>
</html>
