@extends('layouts.admin')

@section('content')
<section id="content-types">


	<div class="row match-height">
		<div class="col-xl-3 col-md-6 col-sm-12">
			<div class="card">
				<div class="card-content">
					<div class="text-center">
					<img class=" img-fluid" height="80" width="80" src="{{ Storage::url($art->logo)}}"  alt="Card image cap">
				</div>
					<div class="card-body">
						<h4 class="card-title text-center">{{ $art->name }}</h4>
						<p class="card-text">{{ $art->rue }} {{ $art->ville }} </p>
            <p class="card-text">{{ $art->postal }} </p>
            <p class="card-text">{{ $art->Telephone }} </p>
            <p class="card-text">{{ $art->email }} </p>
             <p class="card-text">{{ $art->Site_web }} </p>
              <p class="card-text"> Numero TVA :{{ $art-> NTVA }} </p>
						<a href="/Admin/EditSocieter/1" class="btn btn-outline-primary">Edité</a>
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
                          
                       <div class="float-right" style="margin-right: 15px;">
                        <a class="btn btn-sm btn-danger box-shadow-2 round btn-min-width pull-right white" href="/Admin/AjouterUser">
                            <i class="ft-plus white"></i>Nouveau Utilisateur
                        </a>
                       </div>


                        <div class="card-content">
                            <div class="table-responsive ">
                                <table class="table alt-pagination customer-wrapper dataTable no-footer" id="dataTables-example">
                                    <thead>
                                        <tr>
                                         <td>Nom</td>
                                        <td >Email</td>
                                        <td>Droit</td>
                                        <td>Action</td>
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


deleted
<section id="tree-examples">

    <div class="row match-height">
        <!-- Default Treeview -->
        <div class="col-md-6 col-sm-6">
            <div class="card" style="height: 694px;">
                <div class="card-header">
                    <h4 class="card-title">Default</h4>
                </div>
                <div class="card-body">
                    <div class="card-body">
                        <div id="default-treeview" class="treeview"><ul class="list-group"><li class="list-group-item node-default-treeview node-selected" data-nodeid="0" style="color:#FFFFFF;background-color:#428bca;"><span class="icon expand-icon ft-minus"></span><span class="icon node-icon"></span>Parent 1</li><li class="list-group-item node-default-treeview" data-nodeid="1" ><span class="indent"></span><span class="icon expand-icon ft-plus"></span><span class="icon node-icon"></span>Child 1</li><li class="list-group-item node-default-treeview" data-nodeid="4" style="color:undefined;background-color:undefined;"><span class="indent"></span><span class="icon"></span><span class="icon node-icon"></span>Child 2</li><li class="list-group-item node-default-treeview" data-nodeid="5" style="color:undefined;background-color:undefined;"><span class="icon"></span><span class="icon node-icon"></span>Parent 2</li><li class="list-group-item node-default-treeview" data-nodeid="6" style="color:undefined;background-color:undefined;"><span class="icon"></span><span class="icon node-icon"></span>Parent 3</li><li class="list-group-item node-default-treeview" data-nodeid="7" style="color:undefined;background-color:undefined;"><span class="icon"></span><span class="icon node-icon"></span>Parent 4</li><li class="list-group-item node-default-treeview" data-nodeid="8" style="color:undefined;background-color:undefined;"><span class="icon"></span><span class="icon node-icon"></span>Parent 5</li></ul></div>
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

     
            ajax: 'http://erp.test/Admin/Users/Data',
            "pageLength": 50,
             columns: [
            {data: 'name'},
            {data: 'email'},
            {data: 'action', name: 'action', orderable: false, searchable: false},
            {data: 'action2', name: 'action', orderable: false, searchable: false}

       ]
        });



  //your code here
});
        
           
     
  
</script>

@endsection

