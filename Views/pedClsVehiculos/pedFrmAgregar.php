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

    <style>
          .thumb {
            height: 300px;
            border: 1px solid #000;
            margin: 10px 5px 0 0;
          }
    </style>


    <script>
      colorPicker.addEventListener("input", actualizarPrimero, false);
      colorPicker.addEventListener("change", watchColorPicker, false);

      function watchColorPicker(event) {
        document.querySelectorAll("p").forEach(function(p) {
          p.style.color = event.target.value;
        });
      }
    </script>



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
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">Sistema</a></li>
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">Vehículo</a></li>
                                        <li class="breadcrumb-item active">Agregar</li>
                                    </ol>
                                </div>
                                <h4 class="page-title">Agregar / Editar Vehículo</h4>
                            </div><!--end page-title-box-->
                        </div><!--end col-->
                    </div>
                    <!-- end page title end breadcrumb -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                  <div class="row clearfix">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Placa <span class="text-danger"></span></label>
                                                <input class="form-control" type="text" placeholder="Ingresa Nro Placa">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Marca <span class="text-danger"></span></label>
                                                <input class="form-control" type="text">
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label>Modelo <span class="text-danger"></span></label>
                                                <input class="form-control" type="text">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row clearfix">
                                          <div class="col-md-3">
                                              <div class="form-group">
                                                  <label>Color <span class="text-danger"></span></label>
                                                  <input class="form-control" type="text">
                                                  <input type="color" value="#ff0000">
                                              </div>
                                          </div>
                                          <div class="col-md-4">
                                              <div class="form-group">
                                                  <label>SOAT <span class="text-danger"></span></label>
                                                  <input class="form-control" type="text">
                                              </div>
                                          </div>
                                          <div class="col-md-5">
                                              <div class="form-group">
                                                  <label>Año de Fabricacion <span class="text-danger"></span></label>
                                                  <input class="form-control" type="date">
                                              </div>
                                          </div>
                                      </div>
                                      <div class="row clearfix">
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label>Foto <span class="text-danger"></span></label>
                                                    <input id="files" class="form-control" type="file" name="files[]" accept=".pdf,.jpg,.png" multiple/>
                                                    <output id="list"><img id="list" width="200%" height="200%" src=""/></output>



                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                              <input name="file-input" id="file-input" type="file" />
                                                <br />
                                                  <img id="imgSalida" width="50%" height="50%" src="" />
                                            </div>
                                            <div class="col-md-4">
                                                <label>Estado <span class="text-danger"></span></label>
                                                <div class="form-group">
                                                    <select name="Estado" class="form-control">
                                                        <option value="">- Seleccionar -</option>
                                                        <option value="Activo">Activo</option>
                                                        <option value="Inactivo">Inactivo</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row clearfix text-right  ">
                                            <div class="col-md-12 ">
                                                <button class="btn btn-primary btn-icon-split" type="submit">
                                                    <span class="icon text-white-50">
                                                        <i class="fas fa-save"></i>
                                                    </span>
                                                    <span class="text">Guardar</span>
                                                </button>
                                            </div>
                                        </div>

                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div> <!-- end col -->
                    </div> <!-- end row -->
                    <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card-box">
                                    </div>
                                </div>
                            </div>
                        </div>
                </div><!-- container -->

                <?php include "../Template/footer.php" ;?>
                <!--end footer-->
            </div>
            <!-- end page content -->
        </div>
        <!-- end page-wrapper -->

        <script>
        $(window).load(function(){

$(function() {
$('#file-input').change(function(e) {
    addImage(e);
   });

   function addImage(e){
    var file = e.target.files[0],
    imageType = /image.*/;

    if (!file.type.match(imageType))
     return;

    var reader = new FileReader();
    reader.onload = fileOnload;
    reader.readAsDataURL(file);
   }

   function fileOnload(e) {
    var result=e.target.result;
    $('#imgSalida').attr("src",result);
   }
  });
});

        </script>

        <script>
              function archivo(evt) {
                  var files = evt.target.files; // FileList object

                  // Obtenemos la imagen del campo "file".
                  for (var i = 0, f; f = files[i]; i++) {
                    //Solo admitimos imágenes.
                    if (!f.type.match('image.*')) {
                        continue;
                    }

                    var reader = new FileReader();

                    reader.onload = (function(theFile) {
                        return function(e) {
                          // Insertamos la imagen
                         document.getElementById("list").innerHTML = ['<img class="thumb" src="', e.target.result,'" title="', escape(theFile.name),'"/>'].join('');
                        };
                    })(f);

                    reader.readAsDataURL(f);
                  }
              }

              document.getElementById('files').addEventListener('change', archivo, false);
      </script>



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
