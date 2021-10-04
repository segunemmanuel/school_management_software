@extends('admin.admin_master')

@section('admin')

<div class="content-wrapper">
    <div class="container-full">

      <!-- Main content -->
      <section class="content">
          <div class="row">
              <div class="col-xl-3 col-6">
                  <div class="overflow-hidden box pull-up">
                      <div class="box-body">							
                          <div class="rounded icon bg-info-light w-60 h-60">
                              <i class="mr-0 text-info font-size-24 mdi mdi-sale"></i>
                          </div>
                          <div>
                              <p class="mt-20 mb-0 text-mute font-size-16">Sales Lost</p>
                              <h3 class="mb-0 text-white font-weight-500">$1,250 <small class="text-danger"><i class="fa fa-caret-down"></i> -0.5%</small></h3>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-xl-3 col-6">
                  <div class="overflow-hidden box pull-up">
                      <div class="box-body">							
                          <div class="rounded icon bg-danger-light w-60 h-60">
                              <i class="mr-0 text-danger font-size-24 mdi mdi-phone-incoming"></i>
                          </div>
                          <div>
                              <p class="mt-20 mb-0 text-mute font-size-16">Inbound Call</p>
                              <h3 class="mb-0 text-white font-weight-500">1,460 <small class="text-danger"><i class="fa fa-caret-up"></i> -1.5%</small></h3>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-xl-3 col-6">
                  <div class="overflow-hidden box pull-up">
                      <div class="box-body">							
                          <div class="rounded icon bg-success-light w-60 h-60">
                              <i class="mr-0 text-success font-size-24 mdi mdi-phone-outgoing"></i>
                          </div>
                          <div>
                              <p class="mt-20 mb-0 text-mute font-size-16">Outbound Call</p>
                              <h3 class="mb-0 text-white font-weight-500">1,700 <small class="text-success"><i class="fa fa-caret-up"></i> +0.5%</small></h3>
                          </div>
                      </div>
                  </div>
              </div>

              <div class="col-xl-3 col-6">
                <div class="overflow-hidden box pull-up">
                    <div class="box-body">							
                        <div class="rounded icon bg-success-light w-60 h-60">
                            <i class="mr-0 text-success font-size-24 mdi mdi-phone-outgoing"></i>
                        </div>
                        <div>
                            <p class="mt-20 mb-0 text-mute font-size-16">Outbound Call</p>
                            <h3 class="mb-0 text-white font-weight-500">1,700 <small class="text-success"><i class="fa fa-caret-up"></i> +0.5%</small></h3>
                        </div>
                    </div>
                </div>
            </div>

              <div class="col-12">
                  <div class="box">
                      <div class="box-header">
                          <h4 class="box-title align-items-start flex-column">
                              New Arrivals
                              <small class="subtitle">More than 400+ new members</small>
                          </h4>
                      </div>
                      <div class="box-body">
                          <div class="table-responsive">
                              <table class="table no-border">
                                  <thead>
                                      <tr class="text-uppercase bg-lightest">
                                          <th style="min-width: 250px"><span class="text-white">products</span></th>
                                          <th style="min-width: 100px"><span class="text-fade">pruce</span></th>
                                          <th style="min-width: 100px"><span class="text-fade">deposit</span></th>
                                          <th style="min-width: 150px"><span class="text-fade">agent</span></th>
                                          <th style="min-width: 130px"><span class="text-fade">status</span></th>
                                          <th style="min-width: 120px"></th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                      <tr>										
                                          <td class="py-8 pl-0">
                                              <div class="d-flex align-items-center">
                                                  <div class="flex-shrink-0 mr-20">
                                                      <div class="bg-img h-50 w-50" style="background-image: url(../images/gallery/creative/img-1.jpg)"></div>
                                                  </div>

                                                  <div>
                                                      <a href="#" class="mb-1 text-white font-weight-600 hover-primary font-size-16">Vivamus consectetur</a>
                                                      <span class="text-fade d-block">Pharetra, Nulla , Nec, Aliquet</span>
                                                  </div>
                                              </div>
                                          </td>
                                          <td>
                                              <span class="text-fade font-weight-600 d-block font-size-16">
                                                  Paid
                                              </span>
                                              <span class="text-white font-weight-600 d-block font-size-16">
                                                  $45,800k
                                              </span>
                                          </td>
                                          <td>
                                              <span class="text-fade font-weight-600 d-block font-size-16">
                                                  Paid
                                              </span>
                                              <span class="text-white font-weight-600 d-block font-size-16">
                                                  $45k
                                              </span>
                                          </td>
                                          <td>
                                              <span class="text-fade font-weight-600 d-block font-size-16">
                                                  Sophia
                                              </span>
                                              <span class="text-white font-weight-600 d-block font-size-16">
                                                  Pharetra
                                              </span>
                                          </td>
                                          <td>
                                              <span class="badge badge-primary-light badge-lg">Approved</span>
                                          </td>
                                          <td class="text-right">
                                              <a href="#" class="mx-5 waves-effect waves-light btn btn-info btn-circle"><span class="mdi mdi-bookmark-plus"></span></a>
                                              <a href="#" class="mx-5 waves-effect waves-light btn btn-info btn-circle"><span class="mdi mdi-arrow-right"></span></a>
                                          </td>
                                      </tr>
                                      <tr>										
                                          <td class="py-8 pl-0">
                                              <div class="d-flex align-items-center">
                                                  <div class="flex-shrink-0 mr-20">
                                                      <div class="bg-img h-50 w-50" style="background-image: url(../images/gallery/creative/img-2.jpg)"></div>
                                                  </div>

                                                  <div>
                                                      <a href="#" class="mb-1 text-white font-weight-600 hover-primary font-size-16">Vivamus consectetur</a>
                                                      <span class="text-fade d-block">Pharetra, Nulla , Nec, Aliquet</span>
                                                  </div>
                                              </div>
                                          </td>
                                          <td>
                                              <span class="text-fade font-weight-600 d-block font-size-16">
                                                  Paid
                                              </span>
                                              <span class="text-white font-weight-600 d-block font-size-16">
                                                  $45,800k
                                              </span>
                                          </td>
                                          <td>
                                              <span class="text-fade font-weight-600 d-block font-size-16">
                                                  Paid
                                              </span>
                                              <span class="text-white font-weight-600 d-block font-size-16">
                                                  $45k
                                              </span>
                                          </td>
                                          <td>
                                              <span class="text-fade font-weight-600 d-block font-size-16">
                                                  Sophia
                                              </span>
                                              <span class="text-white font-weight-600 d-block font-size-16">
                                                  Pharetra
                                              </span>
                                          </td>
                                          <td>
                                              <span class="badge badge-warning-light badge-lg">In Progress</span>
                                          </td>
                                          <td class="text-right">
                                              <a href="#" class="mx-5 waves-effect waves-light btn btn-info btn-circle"><span class="mdi mdi-bookmark-plus"></span></a>
                                              <a href="#" class="mx-5 waves-effect waves-light btn btn-info btn-circle"><span class="mdi mdi-arrow-right"></span></a>
                                          </td>
                                      </tr>
                                      <tr>										
                                          <td class="py-8 pl-0">
                                              <div class="d-flex align-items-center">
                                                  <div class="flex-shrink-0 mr-20">
                                                      <div class="bg-img h-50 w-50" style="background-image: url(../images/gallery/creative/img-3.jpg)"></div>
                                                  </div>

                                                  <div>
                                                      <a href="#" class="mb-1 text-white font-weight-600 hover-primary font-size-16">Vivamus consectetur</a>
                                                      <span class="text-fade d-block">Pharetra, Nulla , Nec, Aliquet</span>
                                                  </div>
                                              </div>
                                          </td>
                                          <td>
                                              <span class="text-fade font-weight-600 d-block font-size-16">
                                                  Paid
                                              </span>
                                              <span class="text-white font-weight-600 d-block font-size-16">
                                                  $45,800k
                                              </span>
                                          </td>
                                          <td>
                                              <span class="text-fade font-weight-600 d-block font-size-16">
                                                  Paid
                                              </span>
                                              <span class="text-white font-weight-600 d-block font-size-16">
                                                  $45k
                                              </span>
                                          </td>
                                          <td>
                                              <span class="text-fade font-weight-600 d-block font-size-16">
                                                  Sophia
                                              </span>
                                              <span class="text-white font-weight-600 d-block font-size-16">
                                                  Pharetra
                                              </span>
                                          </td>
                                          <td>
                                              <span class="badge badge-success-light badge-lg">Success</span>
                                          </td>
                                          <td class="text-right">
                                              <a href="#" class="mx-5 waves-effect waves-light btn btn-info btn-circle"><span class="mdi mdi-bookmark-plus"></span></a>
                                              <a href="#" class="mx-5 waves-effect waves-light btn btn-info btn-circle"><span class="mdi mdi-arrow-right"></span></a>
                                          </td>
                                      </tr>
                                      <tr>										
                                          <td class="py-8 pl-0">
                                              <div class="d-flex align-items-center">
                                                  <div class="flex-shrink-0 mr-20">
                                                      <div class="bg-img h-50 w-50" style="background-image: url(../images/gallery/creative/img-4.jpg)"></div>
                                                  </div>

                                                  <div>
                                                      <a href="#" class="mb-1 text-white font-weight-600 hover-primary font-size-16">Vivamus consectetur</a>
                                                      <span class="text-fade d-block">Pharetra, Nulla , Nec, Aliquet</span>
                                                  </div>
                                              </div>
                                          </td>
                                          <td>
                                              <span class="text-fade font-weight-600 d-block font-size-16">
                                                  Paid
                                              </span>
                                              <span class="text-white font-weight-600 d-block font-size-16">
                                                  $45,800k
                                              </span>
                                          </td>
                                          <td>
                                              <span class="text-fade font-weight-600 d-block font-size-16">
                                                  Paid
                                              </span>
                                              <span class="text-white font-weight-600 d-block font-size-16">
                                                  $45k
                                              </span>
                                          </td>
                                          <td>
                                              <span class="text-fade font-weight-600 d-block font-size-16">
                                                  Sophia
                                              </span>
                                              <span class="text-white font-weight-600 d-block font-size-16">
                                                  Pharetra
                                              </span>
                                          </td>
                                          <td>
                                              <span class="badge badge-danger-light badge-lg">Rejected</span>
                                          </td>
                                          <td class="text-right">
                                              <a href="#" class="mx-5 waves-effect waves-light btn btn-info btn-circle"><span class="mdi mdi-bookmark-plus"></span></a>
                                              <a href="#" class="mx-5 waves-effect waves-light btn btn-info btn-circle"><span class="mdi mdi-arrow-right"></span></a>
                                          </td>
                                      </tr>
                                      <tr>										
                                          <td class="py-8 pl-0">
                                              <div class="d-flex align-items-center">
                                                  <div class="flex-shrink-0 mr-20">
                                                      <div class="bg-img h-50 w-50" style="background-image: url(../images/gallery/creative/img-5.jpg)"></div>
                                                  </div>

                                                  <div>
                                                      <a href="#" class="mb-1 text-white font-weight-600 hover-primary font-size-16">Vivamus consectetur</a>
                                                      <span class="text-fade d-block">Pharetra, Nulla , Nec, Aliquet</span>
                                                  </div>
                                              </div>
                                          </td>
                                          <td>
                                              <span class="text-fade font-weight-600 d-block font-size-16">
                                                  Paid
                                              </span>
                                              <span class="text-white font-weight-600 d-block font-size-16">
                                                  $45,800k
                                              </span>
                                          </td>
                                          <td>
                                              <span class="text-fade font-weight-600 d-block font-size-16">
                                                  Paid
                                              </span>
                                              <span class="text-white font-weight-600 d-block font-size-16">
                                                  $45k
                                              </span>
                                          </td>
                                          <td>
                                              <span class="text-fade font-weight-600 d-block font-size-16">
                                                  Sophia
                                              </span>
                                              <span class="text-white font-weight-600 d-block font-size-16">
                                                  Pharetra
                                              </span>
                                          </td>
                                          <td>
                                              <span class="badge badge-warning-light badge-lg">In Progress</span>
                                          </td>
                                          <td class="text-right">
                                              <a href="#" class="mx-5 waves-effect waves-light btn btn-info btn-circle"><span class="mdi mdi-bookmark-plus"></span></a>
                                              <a href="#" class="mx-5 waves-effect waves-light btn btn-info btn-circle"><span class="mdi mdi-arrow-right"></span></a>
                                          </td>
                                      </tr>
                                  </tbody>
                              </table>
                          </div>
                      </div>
                  </div>  
              </div>
          </div>
      </section>
      <!-- /.content -->
    </div>
</div>

@endsection