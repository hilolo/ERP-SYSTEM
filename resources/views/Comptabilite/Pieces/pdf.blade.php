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
    * {
        font-family: Verdana, Arial, sans-serif;
    }
    table{
        font-size: x-small;
    }
    tfoot tr td{
        font-weight: bold;
        font-size: x-small;
    }
    .gray {
        background-color: lightgray
    }

</style>
  <!-- END Custom CSS-->
</head>



       
<body class="horizontal-layout horizontal-menu horizontal-menu-padding 2-columns   menu-expanded"
data-open="click" data-menu="horizontal-menu" data-col="2-columns">

  <table width="100%">
    <tr>
        <td valign="top"><img src="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/logo/logo.png" alt="" width="150"/></td>
        <td align="right">
            <h3>Shinra Electric power company</h3>
            <pre>
                Company representative name
                Company address
                Tax ID
                phone
               
            </pre>
        </td>
    </tr>

  </table>
       


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
        
        
        </div>



         <div id="invoice-customer-details" class="row pt-2">
            <div class="col-md-6 col-sm-12 text-center text-md-right">
              
             <div class="col-md-10 pull-right">
                            <div class="form-group">
                             <h4 class="card-title" style="    text-align: left;"> Journal: {{ $art->journal }}</h4>
                            
                            </div>
                             
                          </div>
     


                          
                          
               
            </div>
              </div>

 <div id="invoice-customer-details" class="row pt-2">
      
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

		
		<!--/ Invoice Footer -->

	</div>
</section>

  
  </body>

  <!-- BEGIN VENDOR JS-->





</body>
</html>