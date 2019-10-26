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
                  <div class="row">
                      <div class="col-sm-12">
                          <div class="page-title-box">
                              <div class="float-right">
                                  <ol class="breadcrumb">
                                      <li class="breadcrumb-item"><a href="javascript:void(0);">Metrica</a></li>
                                      <li class="breadcrumb-item"><a href="javascript:void(0);">CRM</a></li>
                                      <li class="breadcrumb-item active">Leads</li>
                                  </ol>
                              </div>
                              <h4 class="page-title">Leads</h4>
                          </div><!--end page-title-box-->
                      </div><!--end col-->
                  </div>
                  <!-- end page title end breadcrumb -->


                  <div class="row">
                      <div class="col-12">
                          <div class="card">
                              <div class="card-body">
                                  <button type="button" class="btn btn-primary waves-effect waves-light float-right mb-3" data-toggle="modal" data-animation="bounce" data-target=".bs-example-modal-lg">+ Add New</button>
                                  <h4 class="header-title mt-0 mb-3">All Leads</h4>
                                  <div class="table-responsive">
                                    <table id="example" class="table table-hover">
                                          <thead class="thead-light">
                                          <tr>
                                              <th>Lead</th>
                                              <th>Email</th>
                                              <th>Phone No</th>
                                              <th>Company</th>
                                              <th>Status</th>
                                              <th>Action</th>
                                          </tr><!--end tr-->
                                          </thead>

                                          <tbody>
                                          <tr>
                                              <td><img src="../assets/images/users/user-10.jpg" alt="" class="thumb-sm rounded-circle mr-2">Donald Gardner</td>
                                              <td>xyx@gmail.com</td>
                                              <td>+123456789</td>
                                              <td>Starbucks coffee</td>
                                              <td> <span class="badge badge-soft-purple">New Lead</span></td>
                                              <td>
                                                  <a href="#" class="mr-2"><i class="fas fa-edit text-info font-16"></i></a>
                                                  <a href="#"><i class="fas fa-trash-alt text-danger font-16"></i></a>
                                              </td>
                                          </tr><!--end tr-->
                                          <tr>
                                              <td><img src="../assets/images/users/user-9.jpg" alt="" class="thumb-sm rounded-circle mr-2">Matt Rosales</td>
                                              <td>xyx@gmail.com</td>
                                              <td>+123456789</td>
                                              <td>Mac Donald</td>
                                              <td> <span class="badge badge-soft-purple">New Lead</span></td>
                                              <td>
                                                  <a href="#" class="mr-2"><i class="fas fa-edit text-info font-16"></i></a>
                                                  <a href="#"><i class="fas fa-trash-alt text-danger font-16"></i></a>
                                              </td>
                                          </tr><!--end tr-->
                                          <tr>
                                              <td><img src="../assets/images/users/user-8.jpg" alt="" class="thumb-sm rounded-circle mr-2">Michael Hill</td>
                                              <td>xyx@gmail.com</td>
                                              <td>+123456789</td>
                                              <td>Life Good</td>
                                              <td> <span class="badge badge-soft-danger">Lost</span></td>
                                              <td>
                                                  <a href="#" class="mr-2"><i class="fas fa-edit text-info font-16"></i></a>
                                                  <a href="#"><i class="fas fa-trash-alt text-danger font-16"></i></a>
                                              </td>
                                          </tr><!--end tr-->
                                          <tr>
                                              <td><img src="../assets/images/users/user-7.jpg" alt="" class="thumb-sm rounded-circle mr-2">Nancy Flanary</td>
                                              <td>xyx@gmail.com</td>
                                              <td>+123456789</td>
                                              <td>Flipcart</td>
                                              <td> <span class="badge badge-soft-purple">New Lead</span></td>
                                              <td>
                                                  <a href="#" class="mr-2"><i class="fas fa-edit text-info font-16"></i></a>
                                                  <a href="#"><i class="fas fa-trash-alt text-danger font-16"></i></a>
                                              </td>
                                          </tr><!--end tr-->
                                          <tr>
                                              <td><img src="../assets/images/users/user-6.jpg" alt="" class="thumb-sm rounded-circle mr-2">Dorothy Key</td>
                                              <td>xyx@gmail.com</td>
                                              <td>+123456789</td>
                                              <td>Adidas</td>
                                              <td> <span class="badge badge-soft-primary">Follow Up</span></td>
                                              <td>
                                                  <a href="#" class="mr-2"><i class="fas fa-edit text-info font-16"></i></a>
                                                  <a href="#"><i class="fas fa-trash-alt text-danger font-16"></i></a>
                                              </td>
                                          </tr><!--end tr-->
                                          <tr>
                                              <td><img src="../assets/images/users/user-5.jpg" alt="" class="thumb-sm rounded-circle mr-2">Joseph Cross</td>
                                              <td>xyx@gmail.com</td>
                                              <td>+123456789</td>
                                              <td>Reebok</td>
                                              <td> <span class="badge badge-soft-success">Converted</span></td>
                                              <td>
                                                  <a href="#" class="mr-2"><i class="fas fa-edit text-info font-16"></i></a>
                                                  <a href="#"><i class="fas fa-trash-alt text-danger font-16"></i></a>
                                              </td>
                                          </tr><!--end tr-->

                                          </tbody>
                                      </table>
                                  </div>
                              </div><!--end card-body-->
                          </div><!--end card-->
                      </div><!--end col-->
                  </div><!--end row-->

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
