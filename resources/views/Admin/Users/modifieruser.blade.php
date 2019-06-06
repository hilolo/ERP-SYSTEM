@extends('layouts.admin')

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
                   <li class="breadcrumb-item active"><a href="#"> Ajouter Client</a>
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
                    <h4 class="card-title" id="bordered-layout-colored-controls">Ajouter Client</h4>
                    <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
               
                </div>
                <div class="card-content collpase show">
                    <div class="card-body">
                      
           <form class="form form-horizontal form-bordered" method="post"  action="/updateuser/{{ $art->id }}" enctype="multipart/form-data">
             {{ csrf_field() }}
                            <div class="form-body">
                                <h4 class="form-section"><i class="la la-eye"></i> À propos Utlisatuer</h4>


                
    

                               

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group row mx-auto">
                                            <label class="col-md-3 label-control" for="userinput5">Name</label>
                                            <div class="col-md-9">
                                                <input class="form-control border-primary" value="{{ $art->name }}" name="name" placeholder="email" id="userinput5">
                                            </div>
                                        </div>

                                        <div class="form-group row mx-auto">
                                            <label class="col-md-3 label-control" for="userinput6">E-Mail Address</label>
                                            <div class="col-md-9">
                                                <input class="form-control border-primary" type="email"  value="{{ $art->email }}"  name="email"  userinput6">
                                            </div>
                                        </div>

                                      



                                     

                                    </div>
                                    <div class="col-md-6">
                                        
                                        <div class="form-group row mx-auto last">
                                            <label class="col-md-3 label-control">Password</label>
                                            <div class="col-md-9">
                                                <input class="form-control border-primary" value="********" type="Password" name="password" id="userinput7">
                                            </div>
                                        </div>

                                       


                                      


                                    </div>
                                       

                                </div>
                                 <h4 class="form-section"><i class="ft-mail"></i> Informations Sur les droits d'accès</h4>


                                 <div class="card-body">
                                              <fieldset class="checkboxsas" >
                                                
                                                 @if($art->Vente == "0")
                                                  <label>
                                                   
                                                    <input type="checkbox" value="1" name="Vente" >
                                                   Vente
                                                              </label>
                                                       @else


                                                    <input type="checkbox" value="1" name="Vente" checked="">
                                                   Vente
                                                              </label>

                                                        @endif        


                                              </fieldset>

                                              <fieldset class="checkbox">

                                                   @if($art->Achat == "0")
                                                  <label>
                                                   
                                                    <input type="checkbox" value="1" name="Achat" >
                                                   Achat
                                                              </label>
                                                    @else


                                                    <input type="checkbox" value="1" name="Achat" checked="">
                                                   Achat
                                                              </label>
                                                        @endif  
                                                       
                                              </fieldset>
                                               
                                               <fieldset class="checkbox">
                                                 @if($art->Comptable == "0")
                                                  <label>
                                                   
                                                    <input type="checkbox" value="1" name="Comptable" >
                                                   Comptabilité
                                                              </label>
                                                      
                                                        @else        

                                                    <input type="checkbox" value="1" name="Comptable" checked="">
                                                   Comptabilité
                                                              </label>

                                                         @endif  
                                              </fieldset>
                                             
                                          </div>



                            </div>

                            <div class="form-actions text-right">
                                <button type="button" class="btn btn-warning mr-1">
                                    <i class="ft-x"></i> Cancel
                                </button>
                                <button type="submit" class="btn btn-primary">
                                    <i class="la la-check-square-o"></i> Enregistrer
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

