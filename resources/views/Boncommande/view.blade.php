@extends('layouts.off')

@section('content')

 


<div class="content-header row mb-1">
          <div class="content-header-left col-md-6 col-12 mb-2">
            <h3 class="content-header-title">Bon de commandes</h3>
            <div class="row breadcrumbs-top">
              <div class="breadcrumb-wrapper col-12">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="index.html">Ventes</a>
                  </li>
                  <li class="breadcrumb-item active"><a href="#">Bon de commandes</a>
                  </li>

                  
                </ol>
              </div>
            </div>
          </div>
      

          
        </div>

       


<section class="card">
    <div id="invoice-template" class="card-body">
        <!-- Invoice Company Details -->
        <div id="invoice-company-details" class="row">
            <div class="col-md-6 col-sm-12 text-center text-md-left">
                
            </div>
            <div class="col-md-6 col-sm-12 text-center text-md-right">
                 <h2>Bon de Commande</h2>
                 <p class="pb-3"># SO-0000{{ $art->id }}</p>
                <input type="text" class="hidden" name="">
            </div>
        </div>
        <!--/ Invoice Company Details -->

        <!-- Invoice Customer Details -->
         <div id="invoice-customer-details" class="row pt-2">
            
            <div class="col-md-6 col-sm-12 text-center text-md-left">
               <div class="col-md-6 col-sm-12 ">
                <h4 class="card-title"> Client : {{ $art->client->name }}</h4>
             
                  </div>
              
            </div>
            <div class="col-md-6 col-sm-12 text-center text-md-right">
              
             <div class="col-md-7 pull-right">
                            <div class="form-group">
                             <h4 class="card-title" style="    text-align: left;"> Date de confirmation: {{ $art->date_confirmation }}</h4>
                            
                            </div>
                             
                          </div>
     


                          
                          
               
            </div>
        </div>

        <!--/ Invoice Customer Details -->

        <!-- Invoice Items Details -->
        <div id="invoices" class="pt-2">
            <div class="row">
                <div class="table-responsive col-sm-12">
                    <table class="table">
                      <thead>
                        <tr>
                         
                          <th   class="text-left">Article</th> 
                          <th class="text-left">Quantité </th>
                          <th class="text-left">Prix </th>
                          <th class="text-left">TVA</th>
                          <th class="text-left">Sous-total </th>
                        </tr>
                      </thead>
                      <tbody>
                           @foreach($art->devisarticle as $ass)
                        
 
                        <tr>
                          <th class="text-center" >{{ $ass -> article->name  }}</th>
                          <td class="text-left" >

                                
                              {{ $ass ->qte }}


                          </td>
                          <td class="text-left">{{ $ass -> article ->prix  }} MAD</td>
                          <td class="text-left">
                        @if($ass->article->tva == 1)
                            Exonere de TVA VENTES
                            @endif
                            @if($ass->article->tva == 2)
                             TVA 7% VENTES
                            @endif
                            @if($ass->article->tva == 3)
                                 TVA 10% VENTES
                            @endif
                            @if($ass->article->tva == 4)
                           TVA 17% VENTES
                            @endif
                            @if($ass->article->tva == 5)
                             TVA 20% VENTES 
                            @endif
                          </td>
                          <td class="text-left">{{ $ass ->soustotal  }} MAD</td>
                        </tr>
                           @endforeach
                       
                        
                      </tbody>
                    </table>
                </div>
            </div>
            <div class="row">
                <div class="col-md-7 col-sm-12 text-center text-md-left">
                    
                    <div class="row">
                        <div class="col-md-8">
                            
                        </div>
                    </div>
                </div>
                <div class="col-md-5 col-sm-12">
                    <p class="lead">Total</p>
                    <div class="table-responsive">
                        <table class="table">
                          <tbody>
                            <tr>
                                <td> Montant HT</td>
                                <td class="text-right"> {{ $art -> Montant  }} MAD </td>
                            </tr>
                            <tr>
                                <td>Taxes </td>
                                <td class="text-right pink">{{ $art -> Taxe  }} MAD</td>
                            </tr>
                            <tr>
                                <td class="text-bold-800">Total</td>
                                <td class="text-bold-800 text-right"> {{ $art -> Total  }} MAD</td>
                            </tr>
                         
                          </tbody>
                        </table>
                    </div>
                
                </div>
            </div>
        </div>

        <!-- Invoice Footer -->
        <div id="invoice-footer">
            <div class="row">
                <div class="col-md-7 col-sm-12">
                    
                </div>
                <div class="col-md-5 col-sm-12 text-center">
                    <form method="POST" action="/updateDevis/{{ $art->id }}">
                           <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <button type="button"  onclick="location.href='http://erp.test/Vente/Boncommande/print/{{ $art -> id  }}'"   class="btn btn-info btn-m my-1"><i class="la  la-file-zip-o"></i>Imprimer</button>

                    
                   
                        </form>
                </div>

            </div>
        </div>
        <!--/ Invoice Footer -->

          <div class="card">
            <div class="card-content">
                <div class="card-body">
                  
                    <div class="product-content tab-content px-1 pt-1">
                      
                        <div  class="tab-pane active" id="comment">
                            
                            <div class="media-list media-bordered">

                                           
                                  @foreach($art2 as $as)
                                <div class="media">
                                  
                                    <div class="media-body">
                                        <h5 class="media-heading mb-0 text-bold-600">
                                          {{ $as->name }}
                                           
                                        </h5>
                                        <div class="media-notation mb-1">
                                          {{ $as->created_at }}
                                           
                                        </div>
                                        {{ $as->status }}
                                       
                                    </div>
                                </div>
                                  @endforeach
                                
                               
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

  

@endsection