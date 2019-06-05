@extends('layouts.admin')

@section('content')



<div class="content-header row mb-1">
          <div class="content-header-left col-md-6 col-12 mb-2">
            <h3 class="content-header-title">Entreprise</h3>
            <div class="row breadcrumbs-top">
              <div class="breadcrumb-wrapper col-12">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="index.html">Entreprise</a>
                  </li>
                  <li class="breadcrumb-item active"><a href="#">Config</a>
                  </li>

                  
                </ol>
              </div>
            </div>
          </div>
           <div class="col-xl-6 col-md-6 col-6">
         <div class="float-right">
                        <a class="btn btn-sm btn-danger box-shadow-2 round btn-min-width pull-right white" href="/Vente/AjouterClient">
                            <i class="ft-plus white"></i>Edit Societer
                        </a>
                    </div>
      </div>

          
        </div>


<section id="horizontal-form-layouts">
  <div class="row">
      <div class="col-md-12">
          <div class="card">
              <div class="card-header">
                  <h4 class="card-title" id="horz-layout-basic">Entreprise</h4>
                  <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
              <div class="heading-elements">
                      <ul class="list-inline mb-0">
                          <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                          <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                          <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                          <li><a data-action="close"><i class="ft-x"></i></a></li>
                      </ul>
                  </div>
              </div>
              <div class="card-content collpase show">
                  <div class="card-body">
            <div class="card-text">
       
            </div>
                        <form class="form form-horizontal form-bordered" method="post"  action="/insertentreprise" enctype="multipart/form-data">
             {{ csrf_field() }}
                        <div class="form-body">
                          <h4 class="form-section"><i class="ft-user"></i> Entreprise Info</h4>
                          <div class="form-group row">
                                <label class="col-md-3 label-control" for="projectinput1">Nom de la société</label>
                                <div class="col-md-9 mx-auto">
                                  <input type="text" id="projectinput1" class="form-control" placeholder="First Name" name="name">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3 label-control" for="projectinput2"> Adresse</label>
                  <div class="col-md-9 mx-auto">
                                  <input type="text" id="projectinput2" class="form-control" placeholder="Rue" name="rue">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-3 label-control" for="projectinput3"></label>
                                <div class="col-md-9 mx-auto">
                                  <input type="text" id="projectinput3" class="form-control" placeholder="Ville" name="ville">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-3 label-control" for="projectinput4"> </label>
                                <div class="col-md-9 mx-auto">
                                  <input type="text" id="projectinput4" class="form-control" placeholder="Code Postal" name="postal">
                                </div>
                            </div>

                <h4 class="form-section"><i class="ft-clipboard"></i> Entreprsie</h4>

                       

                            <div class="form-group row">
                  <label class="col-md-3 label-control" for="projectinput5">Site Web  </label>
                  <div class="col-md-9 mx-auto">
                                  <input type="text" id="projectinput5" class="form-control" name="siteweb">
                                </div>
                            </div>

                            <div class="form-group row">
                  <label class="col-md-3 label-control" for="projectinput5">Téléphone</label>
                  <div class="col-md-9 mx-auto">
                                  <input type="text" id="projectinput5" class="form-control"  name="tele">
                                </div>
                            </div>

                            <div class="form-group row">
                  <label class="col-md-3 label-control" for="projectinput5">Courriel</label>
                  <div class="col-md-9 mx-auto">
                                  <input type="text" id="projectinput5" class="form-control"  name="email">
                                </div>
                            </div>

                              <div class="form-group row">
                  <label class="col-md-3 label-control" for="projectinput5">N° TVA</label>
                  <div class="col-md-9 mx-auto">
                                  <input type="text" id="projectinput5" class="form-control"name="ntva">
                                </div>
                            </div>



                <div class="form-group row">
                  <label class="col-md-3 label-control">Logo</label>
                  <div class="col-md-9 mx-auto">
                    <label id="projectinput8" class="file center-block">
                      <input type="file" id="filee" name="filee"> 
                      <span class="file-custom"></span>
                    </label>
                  </div>
                </div>

                
              </div>

                          <div class="form-actions">
                              <button type="button" class="btn btn-warning mr-1">
                                <i class="ft-x"></i> Cancel
                              </button>
                              <button type="submit" class="btn btn-primary">
                                  <i class="la la-check-square-o"></i> Editer
                              </button>
                          </div>
                      </form>
                  </div>
              </div>
          </div>
      </div>
  </div>





</section>

      

@endsection

