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
