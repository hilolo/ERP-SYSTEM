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
                  <li class="breadcrumb-item "><a href="#"> Client</a>
                  </li>
                  
                  
                </ol>
              </div>
            </div>
          </div>

           <div class="col-xl-6 col-md-6 col-6">
         <div class="float-right">

                       
                        <form action="/SupprimerClient/{{ $art->id }}" method="POST">
                             {{ csrf_field() }}
                              <a class="btn btn-sm btn-info box-shadow-2 round btn-min-width pull-right white" href="/Vente/{{ $art->id }}/ModifierClient" >
                            <i class="ft-plus white"></i>Modifier 
                        </a>
                    
                        <button style="margin-right: 10px;" type="submit" class="btn btn-sm btn-danger box-shadow-2 round btn-min-width pull-right white" >
                                    <i class="ft-plus white"></i> Supprimer
                                </button>


                        </form>
                    </div>
      </div>

          
        </div>




<div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title" id="bordered-layout-colored-controls">Ajouter Client</h4>
                    <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
               
                </div>
                <div class="card-content collpase show">
                    <div class="card-body">
                      
                        <form class="form form-horizontal form-bordered">
                            <div class="form-body">
                                <h4 class="form-section"><i class="la la-eye"></i> À propos de Client</h4>


                
               <div class="row match-height">
    <div class="col-lg-6">
          <div class="card">
            <div class="text-center">
                <div class="card-body">
                   <div class="form-group row last mx-auto" style="margin-top: 30px;">
                                            <label class="col-md-3 label-control" for="userinput3">Nom</label>
                                            <div class="col-md-9">
                                                <input type="text" id="userinput3" value="{{ $art->name }}" class="form-control border-primary " placeholder="Username" name="username" readonly>
                                            </div>
                                        </div>
                </div>
              
            </div>
        </div>



    </div>
     <div class="col-lg-6">
         <div class="card">
            <div class="text-center">
                <div class="card-body">
                    <img src="{{ Storage::url($art->path_img)}}" class="rounded-circle  height-150" alt="Card image">
                </div>
              
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
                                                <input class="form-control border-primary" type="email" value="{{ $art->email }}" placeholder="email" id="userinput5" readonly>
                                            </div>
                                        </div>

                                        <div class="form-group row mx-auto">
                                            <label class="col-md-3 label-control" for="userinput6">Adresse</label>
                                            <div class="col-md-9">
                                                <input class="form-control border-primary" value="{{ $art->adresse }}" type="url" placeholder="http://" id="userinput6" readonly>
                                            </div>
                                        </div>

                                        <div class="form-group row mx-auto last">
                                            <label class="col-md-3 label-control">Téléphone</label>
                                            <div class="col-md-9">
                                                <input class="form-control border-primary" value="{{ $art->Telephone }}" type="tel" placeholder="Contact Number" id="userinput7" readonly>
                                            </div>
                                        </div>



                                     

                                    </div>
                                    <div class="col-md-6">
                                        
                                        <div class="form-group row mx-auto last">
                                            <label class="col-md-3 label-control">N° TVA</label>
                                            <div class="col-md-9">
                                                <input class="form-control border-primary" value="{{ $art->NTVA }}"   placeholder="Contact Number" id="userinput7" readonly>
                                            </div>
                                        </div>

                                        <div class="form-group row mx-auto last">
                                            <label class="col-md-3 label-control">Site web</label>
                                            <div class="col-md-9">
                                               <input class="form-control border-primary" value="{{ $art->Site_web }}" type="url" placeholder="http://" id="userinput6" readonly>
                                            </div>
                                        </div>

                                         <div class="form-group row mx-auto last">
                                            <label class="col-md-3 label-control">FAX</label>
                                            <div class="col-md-9">
                                                <input class="form-control border-primary" value="{{ $art->FAX }}"  type="tel" placeholder="Contact Number" id="userinput7" readonly>
                                            </div>
                                        </div>

                                      


                                    </div>
                                </div>
                            </div>

                            
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
   


  
</section>

                   
@endsection

