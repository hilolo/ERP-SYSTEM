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
                  <li class="breadcrumb-item active"><a href="#">Clients</a>
                  </li>

                  
                </ol>
              </div>
            </div>
          </div>
           <div class="col-xl-6 col-md-6 col-6">
         <div class="float-right">
                        <a class="btn btn-sm btn-danger box-shadow-2 round btn-min-width pull-right white" href="/Vente/AjouterClient">
                            <i class="ft-plus white"></i>Nouveau client
                        </a>
                    </div>
      </div>

          
        </div>

                    <section id="simple-user-cards" class="row">
 

    @foreach($Clients as $as)
    <div class="col-xl-3 col-md-6 col-12">
        
        <div class="card">
            <div class="text-center">
                <div class="card-body">
                    <img src="{{ Storage::url($as->path_img)}}" class="rounded-circle  height-150" alt="Card image">
                </div>
                <div class="card-body">
                  <a href="/Vente/{{$as->id}}/View">  <h4 class="card-title"> {{ $as->name }}</h4> </a>
                    <h6 class=" card-subtitle text-muted success">$76,456.00</h6>

                     
                </div>
           
            </div>
        </div>
         
    </div>
       @endforeach
     
     
</section>


@endsection

