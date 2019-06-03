@extends('layouts.achat')

@section('content')
<div class="content-header row mb-1">
          <div class="content-header-left col-md-6 col-12 mb-2">
            <h3 class="content-header-title">Les Bon de commandes</h3>
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

<section id="complex-header">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Les Bon de commandes</h4>
                    <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                 
                </div>
                
         <div class="float-right" style="margin-right: 15px;">
                        <a class="btn btn-sm btn-danger box-shadow-2 round btn-min-width pull-right white" href="/Achat/AjouterBoncommande">
                            <i class="ft-plus white"></i>Nouveau Bon de commande
                        </a>
                    </div>
     

                 <div class="card-content collapse show">
                 <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="card">
                        
                        <div class="card-content">
                            <div class="table-responsive ">
                                <table class="table alt-pagination customer-wrapper dataTable no-footer" id="dataTables-example">
                                    <thead>
                                        <tr>
                                        <td>N° de devis</td>
                                        <td >Date du Confirmation</td>
                                        <td>Client</td>
                                        <td>Total</td>
                                        <td>status</td>
                                         <td>Action</td>
                                        <td >Facture</td>
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
            serverSide: true,
              "order": [[ 0, "desc" ]],
            ajax: '/Achat/Devis/Data2',
            "pageLength": 50,
             columns: [
            {data: 'id'},
            {data: 'date_confirmation'},
            {data: 'name'},
            {data: 'Total'},
            {data: 'etat'},
            {data: 'action2', name: 'action2', orderable: false, searchable: false},
             {data: 'action', name: 'action', orderable: false, searchable: false},
             

       ]
        });



  //your code here
});
        
           
     
  
</script>


@endsection

