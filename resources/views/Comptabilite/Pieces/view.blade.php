@extends('layouts.comptable')

@section('content')

 



<div class="content-header row mb-1">
          <div class="content-header-left col-md-6 col-12 mb-2">
            <h3 class="content-header-title">Les Pièces Comptables</h3>
            <div class="row breadcrumbs-top">
              <div class="breadcrumb-wrapper col-12">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="index.html">Comptabilite</a>
                  </li>
                  <li class="breadcrumb-item "><a href="#">Pièces comptables</a>
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
			  <div class="col-md-12 col-sm-12 text-center text-center">
                <h2>Pièces comptables</h2>
   
             
              

            </div>
		</div>
		<!--/ Invoice Company Details -->

		<!-- Invoice Customer Details -->
		 <div id="invoice-customer-details" class="row pt-2">
            
            <div class="col-md-6 col-sm-12 text-center text-md-left">
               <div class="col-md-6 col-sm-12 ">
                <h4 class="card-title"> Date : {{ $art->date_pieces }}</h4>
             
                  </div>
              
            </div>
            <div class="col-md-6 col-sm-12 text-center text-md-right">
              
             <div class="col-md-10 pull-right">
                            <div class="form-group">
                             <h4 class="card-title" style="    text-align: left;"> Journal: {{ $art->journal }}</h4>
                            
                            </div>
                             
                          </div>
     


                          
                          
               
            </div>
            <div class="col-md-6 col-sm-12 text-center text-md-right">  </div>
             <div class="col-md-6 col-sm-12 text-center text-md-right">
              
             <div class="col-md-10 pull-right">
                            <div class="form-group">
                             <h4 class="card-title" style="    text-align: left;"> Référence: {{ $art->Réf }}</h4>
                            
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
					     
					      <th   class="text-left">Compte</th> 
                          <th class="text-left">Partenaire </th>
                          <th class="text-left">Libellé </th>
                          <th class="text-left">Débit</th>
					      <th class="text-left">Crédit </th>
					    </tr>
					  </thead>
					  <tbody>
					  	   @foreach($art->comptepiece as $ass)
						
 
					    <tr>
					      <th class="text-left" >{{ $ass -> compte->code  }} {{ $ass -> compte->nom  }}</th>
					      <td class="text-left" >
					      	{{ $ass->client->name   }}
					      								  
					      </td>
					      <td class="text-left">{{ $ass -> Libellé  }} </td>
					      <td class="text-left">{{ $ass ->Debit  }} MAD
					      </td>
					      <td class="text-left">{{ $ass ->Credit  }} MAD</td>
					    </tr>
					       @endforeach


					    <tr class="bg-success white" >
					      <th class="text-left" ></th>
					      <td class="text-left" >
					      	
					      								  
					      </td>
					      <td class="text-left"> </td>
					      <td class="text-left">{{ $art->Total }} MAD
					      </td>
					      <td class="text-left">{{ $art->Total }} MAD</td>
					    </tr>
					   
					    
					  </tbody>
					</table>
				</div>
			</div>
			
		</div>

		<!-- Invoice Footer -->
		<div id="invoice-footer">
			<div class="row">
				<div class="col-md-7 col-sm-12">
					
				</div>
				<div class="col-md-5 col-sm-12 text-center">
					<form method="POST" action="/updatepiecesppst/{{ $art->id }}">
						   <input type="hidden" name="_token" value="{{ csrf_token() }}">
					<button type="button"  onclick="location.href='http://erp.test/Comptabilite/pdf/ec/{{ $art -> id  }}'"  class="btn btn-info btn-m my-1"><i class="la  la-file-zip-o" ></i>Imprimer</button>

					
					<button type="submit" class="btn btn-success btn-m my-1"><i class="la la-check "></i> 
          			 Publier
        				</button>
        				</form>
				</div>

			</div>
		</div>
		<!--/ Invoice Footer -->

	</div>
</section>

  

@endsection