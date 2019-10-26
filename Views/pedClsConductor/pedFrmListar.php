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
    <link rel="shortcut icon" href="favicon.ico">

    <!-- App css -->
    <link href="../../Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="../../Assets/css/icons.css" rel="stylesheet" type="text/css" />
    <link href="../../Assets/css/metisMenu.min.css" rel="stylesheet" type="text/css" />
    <link href="../../Assets/css/style.css" rel="stylesheet" type="text/css" />

</head>
<!-- head End -->
    <body>
        <!-- Top Bar Start -->
        <div class="topbar">

          <div class="topbar-left">
              <a href="" class="logo">
                  <span>
                      <img src="../../Assets/images/logo-sm.png" alt="logo-small" class="logo-sm">
                  </span>
                  <span>
                      <img src="../../Assets/images/logo-dark.png" alt="logo-large" class="logo-lg">
                  </span>
              </a>
          </div>

          <nav class="navbar-custom">
              <ul class="list-unstyled topbar-nav float-right mb-0">
                  <li class="dropdown notification-list">
                      <a class="nav-link dropdown-toggle arrow-none waves-light waves-effect" data-toggle="dropdown" href="#" role="button"
                          aria-haspopup="false" aria-expanded="false">
                          <i class="dripicons-bell noti-icon"></i>
                          <span class="badge badge-danger badge-pill noti-icon-badge">2</span>
                      </a>
                      <div class="dropdown-menu dropdown-menu-right dropdown-lg">
                          <!-- item-->
                          <h6 class="dropdown-item-text">
                              Notificaciones (18)
                          </h6>
                          <div class="slimscroll notification-list">
                              <!-- item-->
                              <a href="javascript:void(0);" class="dropdown-item notify-item active">
                                  <div class="notify-icon bg-success"><i class="mdi mdi-cart-outline"></i></div>
                                  <p class="notify-details">La orden Nº 0023 fue entregado con éxito.<small class="text-muted">Dummy text of the printing and typesetting industry.</small></p>
                              </a>
                              <!-- item-->
                              <a href="javascript:void(0);" class="dropdown-item notify-item">
                                  <div class="notify-icon bg-warning"><i class="mdi mdi-message"></i></div>
                                  <p class="notify-details">Nuevo mensaje recibido<small class="text-muted">You have 87 unread messages</small></p>
                              </a>
                          </div>
                          <!-- All-->
                          <a href="javascript:void(0);" class="dropdown-item text-center text-primary">
                              Ver todo <i class="fi-arrow-right"></i>
                          </a>
                      </div>
                  </li>

                  <li class="dropdown">
                      <a class="nav-link dropdown-toggle waves-effect waves-light nav-user" data-toggle="dropdown" href="#" role="button"
                          aria-haspopup="false" aria-expanded="false">
                          <img src="../../Assets/images/users/user-4.jpg" alt="profile-user" class="rounded-circle"/>
                          <span class="ml-1 nav-user-name hidden-sm">Guimer <i class="mdi mdi-chevron-down"></i> </span>
                      </a>
                      <div class="dropdown-menu dropdown-menu-right">
                          <a class="dropdown-item" href="#"><i class="dripicons-user text-muted mr-2"></i> Perfil</a>
                          <a class="dropdown-item" href="#"><i class="dripicons-gear text-muted mr-2"></i> Configuraciones</a>
                          <a class="dropdown-item" href="#"><i class="dripicons-lock text-muted mr-2"></i> Bloquear pantalla</a>
                          <div class="dropdown-divider"></div>
                          <a class="dropdown-item" href="#"><i class="dripicons-exit text-muted mr-2"></i> Cerrar sesión</a>
                      </div>
                  </li>
              </ul><!--end topbar-nav-->

              <ul class="list-unstyled topbar-nav mb-0">
                  <li>
                      <button class="button-menu-mobile nav-link waves-effect waves-light">
                          <i class="dripicons-menu nav-icon"></i>
                      </button>
                  </li>
                  <li class="hide-phone app-search">
                      <form role="search" class="">
                          <input type="text" placeholder="Buscar . . ." class="form-control">
                          <a href=""><i class="fas fa-search"></i></a>
                      </form>
                  </li>
              </ul>
          </nav>

        </div>
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
                                <h4 class="mt-0 header-title">Información Conductor</h4>
                                <form class="form-parsley" action="#">
                                    <div class="form-group">
                                        <label>Min Length</label>
                                        <input type="text" class="form-control" required
                                        data-parsley-minlength="6" placeholder="Min 6 chars."/>
                                    </div><!--end form-group-->

                                    <div class="form-group">
                                        <label>Max Length</label>
                                        <input type="text" class="form-control" required
                                                    data-parsley-maxlength="6" placeholder="Max 6 chars."/>
                                    </div><!--end form-group-->

                                    <div class="form-group">
                                        <label>Range Length</label>
                                        <input type="text" class="form-control" required
                                                    data-parsley-length="[5,10]"
                                                    placeholder="Text between 5 - 10 chars length"/>
                                    </div><!--end form-group-->

                                    <div class="form-group">
                                        <label>Min Value</label>
                                        <input type="text" class="form-control" required
                                        data-parsley-min="6" placeholder="Min value is 6"/>
                                    </div><!--end form-group-->

                                    <div class="form-group">
                                        <label>Max Value</label>
                                        <input type="text" class="form-control" required
                                        data-parsley-max="6" placeholder="Max value is 6"/>
                                    </div><!--end form-group-->

                                    <div class="form-group">
                                        <label>Range Value</label>
                                        <input class="form-control" required type="text" min="6"
                                                    max="100" placeholder="Number between 6 - 100"/>
                                    </div><!--end form-group-->

                                    <div class="form-group">
                                        <label>Regular Exp</label>
                                        <input type="text" class="form-control" required
                                            data-parsley-pattern="#[A-Fa-f0-9]{6}"
                                            placeholder="Hex. Color"/>
                                    </div><!--end form-group-->

                                    <div class="form-group">
                                        <label>Min check</label>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck1" data-parsley-multiple="groups"
                                                    data-parsley-mincheck="2">
                                            <label class="custom-control-label" for="customCheck1">And this</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck2" data-parsley-multiple="groups"
                                                    data-parsley-mincheck="2">
                                            <label class="custom-control-label" for="customCheck2">Can't check this</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck3" data-parsley-multiple="groups"
                                                    data-parsley-mincheck="2">
                                            <label class="custom-control-label" for="customCheck3">This too</label>
                                        </div>
                                    </div><!--end form-group-->

                                    <div class="form-group mb-0">
                                        <button type="submit" class="btn btn-primary waves-effect waves-light">
                                            Submit
                                        </button>
                                        <button type="reset" class="btn btn-danger waves-effect m-l-5">
                                            Cancel
                                        </button>
                                    </div><!--end form-group-->
                                </form><!--end form-->
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
