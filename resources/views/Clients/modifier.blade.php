@extends('layouts.off')

@section('content')
<div class="content-header row mb-1">
          <div class="content-header-left col-md-6 col-12 mb-2">
            <h3 class="content-header-title">Clients</h3>
            <div class="row breadcrumbs-top">
              <div class="breadcrumb-wrapper col-12">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="index.html">Ventes</a>
                  </li>
                  <li class="breadcrumb-item "><a href="#">Clients</a>
                  </li>
                   <li class="breadcrumb-item active"><a href="#"> Modifier Client</a>
                  </li>
                  
                </ol>
              </div>
            </div>
          </div>
        

          
        </div>


        <section id="basic-form-layouts">
   


   




<div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title" id="bordered-layout-colored-controls">Modifier Client</h4>
                    <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
               
                </div>
                <div class="card-content collpase show">
                    <div class="card-body">
                      
                        <form class="form form-horizontal form-bordered" method="POST" action="/updateClient/{{ $art->id }}" enctype="multipart/form-data">
                             
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="form-body">
                                <h4 class="form-section"><i class="la la-eye"></i> À propos de l'utilisateur</h4>


                
               <div class="row match-height">
    <div class="col-lg-6">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">Type Client</h4>
            <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
         
          </div>
            <div class="card-content collapse show">
            <div class="card-body">
              <div class="d-inline-block custom-control custom-radio mr-1">
                <input type="radio" value="1" class="custom-control-input" name="colorRadio" id="radio1">
                <label class="custom-control-label" for="radio1">Particulier</label>
              </div>
              <div class="d-inline-block custom-control custom-radio mr-1">
                <input type="radio" value="0" class="custom-control-input" name="colorRadio" id="radio2" checked="">
                <label class="custom-control-label" for="radio2" checked="">Société
</label>
              </div>
              
            </div>
          </div>
        </div>
    </div>
     <div class="col-lg-6">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">Image</h4>
            <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
         
          </div>
            <div class="card-content collapse show">
            <div class="card-body">
             <div class="form-group">
                                        <label class="sr-only">Select File</label>
                                        <label id="projectinput8" class="file center-block">
                                            <input type="file" id="filee" name="filee">
                                            <span class="file-custom"></span>
                                        </label>
                                    </div>
              
            </div>
          </div>
        </div>
    </div>
  </div>
          
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group row last mx-auto">
                                            <label class="col-md-3 label-control" for="userinput3">Nom</label>
                                            <div class="col-md-9">
                                                <input type="text" id="userinput3" class="form-control border-primary" value="{{ $art->name }}" placeholder="Username" name="name">
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>

                                <h4 class="form-section"><i class="ft-mail"></i> Informations de contact</h4>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group row mx-auto">
                                            <label class="col-md-3 label-control" for="userinput5">Email</label>
                                            <div class="col-md-9">
                                                <input class="form-control border-primary" type="email" value="{{ $art->email }}" name="email" placeholder="email" id="userinput5">
                                            </div>
                                        </div>

                                        <div class="form-group row mx-auto">
                                            <label class="col-md-3 label-control"  for="userinput6">Adresse</label>
                                            <div class="col-md-9">
                                                <input class="form-control border-primary" name="Adresse"  value="{{ $art->adresse }}" placeholder="http://" id="userinput6">
                                            </div>
                                        </div>

                                        <div class="form-group row mx-auto last">
                                            <label class="col-md-3 label-control">Téléphone</label>
                                            <div class="col-md-9">
                                                <input class="form-control border-primary" value="{{ $art->Telephone }}" name="tele" type="tel"  type="tel" placeholder="Contact Number" id="userinput7">
                                            </div>
                                        </div>



                                     

                                    </div>
                                    <div class="col-md-6">
                                        
                                        <div class="form-group row mx-auto last">
                                            <label class="col-md-3 label-control">N° TVA</label>
                                            <div class="col-md-9">
                                                <input class="form-control border-primary"    name="ntva" id="userinput7">
                                            </div>
                                        </div>

                                        <div class="form-group row mx-auto last">
                                            <label class="col-md-3 label-control">Site web</label>
                                            <div class="col-md-9">
                                               <input class="form-control border-primary" value="{{ $art->Site_web }}" name="site" type="url" placeholder="http://" id="userinput6">
                                            </div>
                                        </div>

                                         <div class="form-group row mx-auto last">
                                            <label class="col-md-3 label-control">FAX</label>
                                            <div class="col-md-9">
                                                <input class="form-control border-primary"  value="{{ $art->FAX }}" name="fax"  type="tel" placeholder="Contact Number" id="userinput7">
                                            </div>
                                        </div>

                                      


                                    </div>
                                </div>
                            </div>

                            <div class="form-actions text-right">
                                <button type="button" class="btn btn-warning mr-1">
                                    <i class="ft-x"></i> Cancel
                                </button>
                                <button type="submit" class="btn btn-primary">
                                    <i class="la la-check-square-o"></i> Sauvegarder
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

