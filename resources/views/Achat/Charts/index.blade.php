@extends('layouts.achat')

@section('content')



<div class="content-header row mb-1">
          <div class="content-header-left col-md-6 col-12 mb-2">
            <h3 class="content-header-title">Tableau de bord</h3>
            <div class="row breadcrumbs-top">
              <div class="breadcrumb-wrapper col-12">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="index.html">Achat</a>
                  </li>
                  <li class="breadcrumb-item active"><a href="#">Tableau de bord</a>
                  </li>

                  
                </ol>
              </div>
            </div>
          </div>
      

          
        </div>


<div class="content-body">
        <!-- Revenue, Hit Rate & Deals -->
        <div class="row">
          <div class="col-xl-8 col-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Les Demandes des prix  </h4>
                <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
               
              </div>
              <div class="card-content collapse show">
                <div class="card-body pt-0">
                  <div class="row mb-1">
                    <div class="col-6 col-md-4">
                      <h5>Mois en cours</h5>
                      <h2 class="success">

                        @if($moinsc[0]->count == null)  0 MAD @else
                                  {{ $moinsc[0]->count }} 
                                MAD @endif



                        </h2>
                    </div>
                    <div class="col-6 col-md-4">
                      <h5>Mois précédente</h5>
                      <h2 class="text-muted">

                           @if($moinsc2[0]->count == null)  0 MAD @else
                                  {{ $moinsc2[0]->count }} 
                                MAD @endif

</h2>
                    </div>
                  </div>
                       {!! $chart->html() !!}

                </div>
              </div>
            </div>
          </div>
           <div class="col-xl-4 col-12">


            <div class="col-lg-12 col-12">
                <div class="card pull-up">
                  <div class="card-content">
                    <div class="card-body">
                      <div class="media d-flex">
                        <div class="media-body text-left">
                          <h6 class="text-muted">Total Facture Payé </h6>
                          <h3>
                             @if($total1[0]->total == null)  0 MAD @else
                                  {{ $total1[0]->total }} 
                                MAD @endif


                            </h3>
                        </div>
                        <div class="align-self-center">
                          <i class="icon-check success font-large-2 float-right"></i>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

                 <div class="col-lg-12 col-12">
                <div class="card pull-up">
                  <div class="card-content">
                    <div class="card-body">
                      <div class="media d-flex">
                        <div class="media-body text-left">
                          <h6 class="text-muted"> Facture Payé </h6>
                          <h3>
                               {{ $total3 }} 
                              


                          </h3>
                        </div>
                        <div class="align-self-center">
                          <i class="icon-docs info font-large-2 float-right"></i>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

                 <div class="col-lg-12 col-12">
                <div class="card pull-up">
                  <div class="card-content">
                    <div class="card-body">
                      <div class="media d-flex">
                        <div class="media-body text-left">
                          <h6 class="text-muted">Demandes des prix/Commande </h6>
                          <h3>  {{ $total2 }} </h3>
                        </div>
                        <div class="align-self-center">
                          <i class="icon-docs info font-large-2 float-right"></i>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

                 <div class="col-lg-12 col-12">
                <div class="card pull-up">
                  <div class="card-content">
                    <div class="card-body">
                      <div class="media d-flex">
                        <div class="media-body text-left">
                          <h6 class="text-muted">Fournisseurs </h6>
                          <h3> {{ $total4}} </h3>
                        </div>
                        <div class="align-self-center">
                          <i class="icon-users secondary font-large-2 float-right"></i>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            
          </div>
         
          
        </div>
        <!--/ Revenue, Hit Rate & Deals -->
        <!-- Emails Products & Avg Deals -->
     
        <!-- Analytics map based session -->
      </div>

      <br>  <br>  <br>


{!! Charts::scripts() !!}
{!! $chart->script() !!}



@endsection

