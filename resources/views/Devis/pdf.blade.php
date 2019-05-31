<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<head>
<meta charset="utf-8">  
  <title>ERP</title>
  <link rel="apple-touch-icon" href="{{ asset('app-assets/images/ico/apple-icon-120.png') }}">
  <link rel="shortcut icon" type="image/x-icon" href="{{ asset('app-assets/images/ico/favicon.ico') }}">

 

  <!-- BEGIN VENDOR CSS-->
  <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/vendors.css') }}">

  






  <!-- END VENDOR CSS-->
  <!-- BEGIN MODERN CSS-->
  <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/app.css') }}">

  <!-- BEGIN Custom CSS-->
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">


  <style type="text/css">

  .navbar-dark.navbar-horizontal {
    background: #42729a;
}

.modal-header {
    border-bottom: 0px solid #98A4B8;
  }
.modal-footer {
   
    border-top: 0px solid #98A4B8;
}
.moduless{

  font-size: 10px;
  
}

.btn-float.btn-float-lg i + span {
    font-size: 0.8rem;
}

</style>
  <!-- END Custom CSS-->
</head>



       
<body class="horizontal-layout horizontal-menu horizontal-menu-padding 2-columns   menu-expanded"
data-open="click" data-menu="horizontal-menu" data-col="2-columns">

<section class="card">
	<div id="invoice-template" class="card-body">
		<!-- Invoice Company Details -->
		<div id="invoice-company-details" class="row">
			<div class="col-md-6 col-sm-12 text-center text-md-left">
				
			</div>
			<div class="col-md-6 col-sm-12 text-center text-md-right">
				 <h2>Devis</h2>
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
           
        </div>

         <div id="invoice-customer-details" class="row pt-2">

 <div class="col-md-6 col-sm-12 text-center text-md-right">
              
             <div class="col-md-10 pull-right">
                            <div class="form-group">
                             <h4 class="card-title" style="    text-align: left;"> Conditions de paiement: {{ $art->condition_paiment }}</h4>
                            
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
	
		<!--/ Invoice Footer -->

	</div>
</section>


  </body>

  <!-- BEGIN VENDOR JS-->





</body>
</html>
