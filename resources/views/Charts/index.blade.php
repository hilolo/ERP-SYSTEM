@extends('layouts.off')

@section('content')




<div class="content-header row mb-1">
          <div class="content-header-left col-md-6 col-12 mb-2">
            <h3 class="content-header-title">Tableau de bord</h3>
            <div class="row breadcrumbs-top">
              <div class="breadcrumb-wrapper col-12">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="index.html">Ventes</a>
                  </li>
                  <li class="breadcrumb-item active"><a href="#">Tableau de bord</a>
                  </li>

                  
                </ol>
              </div>
            </div>
          </div>
      

          
        </div>

<div class="row">
          <div class="col-xl-4 col-lg-6 col-12">
            <div class="card pull-up">
              <div class="card-content">
                <div class="card-body">
                  <div class="media d-flex">
                    <div class="media-body text-left">
                      <h3 class="info">{{ $total1 }}</h3>
                      <h6>Devis / Bon de Commande</h6>
                    </div>
                    <div>
                      <i class="icon-basket-loaded info font-large-2 float-right"></i>
                    </div>
                  </div>
                  <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                    <div class="progress-bar bg-gradient-x-info" role="progressbar" style="width: 100%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-4 col-lg-6 col-12">
            <div class="card pull-up">
              <div class="card-content">
                <div class="card-body">
                  <div class="media d-flex">
                    <div class="media-body text-left">
                      <h3 class="warning">{{ $total2 }}</h3>
                      <h6>Facture Payé</h6>
                    </div>
                    <div>
                      <i class="icon-pie-chart warning font-large-2 float-right"></i>
                    </div>
                  </div>
                  <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                    <div class="progress-bar bg-gradient-x-warning" role="progressbar" style="width: {{$aaq}}%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-4 col-lg-6 col-12">
            <div class="card pull-up">
              <div class="card-content">
                <div class="card-body">
                  <div class="media d-flex">
                    <div class="media-body text-left">
                      <h3 class="success">{{ $total3 }}</h3>
                      <h6>Client</h6>
                    </div>
                    <div>
                      <i class="icon-user-follow success font-large-2 float-right"></i>
                    </div>
                  </div>
                  <div style="height: 22px">
                   
                  </div>
                </div>
              </div>
            </div>
          </div>
    
        </div>


<div class="card">
              <div class="card-header">
                <h4 class="card-title text-center">Total des transactions</h4>
              </div>
              <div class="card-content collapse show">
                <div class="card-body pt-0">
                  <div class="row">
                    <div class="col-md-6 col-12 border-right-blue-grey border-right-lighten-5 text-center">
                      <h6 class="danger text-bold-600"></h6>
                      <h4 class="font-large-2 text-bold-400"> {{$orders[0]->total_sales}} MAD  </h4>
                      <p class="blue-grey lighten-2 mb-0">Devis/Bon Commande</p>
                    </div>
                    <div class="col-md-6 col-12 text-center">
                      <h6 class="success text-bold-600">{{$perc}} %</h6>
                      <h4 class="font-large-2 text-bold-400">{{$orders2[0]->total_sales}} MAD </h4>
                      <p class="blue-grey lighten-2 mb-0">Payé</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>


            <div class="row match-height">
          <div class="col-xl-7 col-12" id="ecommerceChartView">
            <div class="card card-shadow" style="height: 418px;">
               {!! $chart->html() !!}
              
            </div>
          </div>
          <div class="col-xl-5 col-lg-12">
            <div class="card" style="height: 418px;">
              <div class="card-header">
                <h4 class="card-title">Nouvelles Devis</h4>
                <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                <div class="heading-elements">
                 
                </div>
              </div>
              <div class="card-content">
                <div id="new-orders" class="media-list position-relative ps-container ps-theme-default" data-ps-id="ee7cdc29-cb50-aec0-2f09-52b5181aff94">
                  <div class="table-responsive">
                    <table id="new-orders-table" class="table table-hover table-xl mb-0">
                      <thead>
                        <tr>
                          <th class="border-top-0">Ref</th>
                          <th class="border-top-0">Client</th>
                          <th class="border-top-0">Total</th>
                        </tr>
                      </thead>
                      <tbody>

                        @foreach($deviss as $as)
                        <tr>
                          <td class="text-truncate"> SO-0000{{ $as->id }}</td>
                           <td class="text-truncate">{{ $as->client->name }}</td>
                          <td class="text-truncate">{{ $as->Total }} MAD</td>
                        </tr>
                         @endforeach

                     
                     
                      </tbody>
                    </table>
                  </div>
                <div class="ps-scrollbar-x-rail" style="left: 0px; bottom: 3px;"><div class="ps-scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps-scrollbar-y-rail" style="top: 0px; right: 3px;"><div class="ps-scrollbar-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></div>
              </div>
            </div>
          </div>
        </div>





<br><br><br>


{!! Charts::scripts() !!}
{!! $chart->script() !!}


@endsection

