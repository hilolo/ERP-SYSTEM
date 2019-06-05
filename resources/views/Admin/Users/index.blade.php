@extends('layouts.admin')

@section('content')
<section id="content-types">


	<div class="row match-height">
		<div class="col-xl-3 col-md-6 col-sm-12">
			<div class="card">
				<div class="card-content">
					<div class="text-center">
					<img class=" img-fluid" height="80" width="80" src="/storage/clients/logo.png" alt="Card image cap">
				</div>
					<div class="card-body">
						<h4 class="card-title">Card title</h4>
						<p class="card-text">Icing powder caramels macaroon. Toffee sugar plum brownie pastry gummies jelly.</p>
						<a href="#" class="btn btn-outline-primary">Edité</a>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xl-8 col-md-6 col-sm-12">
			<div class="card" >
				<div class="card-content">
					<div class="card-body">
							 <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="card">
                        
                        <div class="card-content">
                            <div class="table-responsive ">
                                <table class="table alt-pagination customer-wrapper dataTable no-footer" id="dataTables-example">
                                    <thead>
                                        <tr>
                                         <td>Nom</td>
                                        <td >Email</td>
                                        <td>Droit</td>
                                        
                                        </tr>
                                    </thead>
                                  
                                </table>
                            </div>
                            
                        </div>
                    </div>
                    <!--End Advanced Tables -->
                </div>
				</div>
			</div>
		</div>
		
	</div>


</section>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
<script type="text/javascript">
    

   $(document).ready(function () {
    $('#dataTables-example').DataTable({
         "language": 
                        {
                             "url": "//cdn.datatables.net/plug-ins/1.10.9/i18n/French.json"
                            }

                            ,processing: false,

     
            ajax: 'http://erp.test/Vente/Articles/Data',
            "pageLength": 50,
             columns: [
            {data: 'name'},
            {data: 'prix'},
            {data: 'tva'},
            {data: 'code_barre'},
             {data: 'action', name: 'action', orderable: false, searchable: false},

       ]
        });



  //your code here
});
        
           
     
  
</script>

@endsection

