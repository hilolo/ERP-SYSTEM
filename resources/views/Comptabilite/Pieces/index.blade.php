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
                  <li class="breadcrumb-item active"><a href="#">Pièces comptables</a>
                  </li>

                  
                </ol>
              </div>
            </div>
          </div>
      

          
        </div>

       

<section id="complex-header">
  <div class="col-xl-12 col-lg-12">
      <div class="card" >
        <div class="card-header">
          <h4 class="card-title">Les Pièces Comptables</h4>
        </div>
           <div class="float-right" style="margin-right: 15px;">
                        <a class="btn btn-sm btn-danger box-shadow-2 round btn-min-width pull-right white" href="/Comptabilite/Piècescomptables/AjouterPiéces" >
                            <i class="ft-plus white"></i>Nouveau Pièces Comptable
                        </a>
          </div>
        <div class="card-content">
          <div class="card-body">
            <ul class="nav nav-tabs">
              <li class="nav-item">
              <a class="nav-link active" id="baseIcon-tab1" data-toggle="tab" aria-controls="tabIcon1" href="#tabIcon1" aria-expanded="true"><i class="la la-circle"></i>Non Validé</a>
              </li>
              <li class="nav-item">
              <a class="nav-link" id="baseIcon-tab2" data-toggle="tab" aria-controls="tabIcon2" href="#tabIcon2" aria-expanded="false"><i class="la la-check-circle"></i> Comptabilisé</a>
              </li>
             
            </ul>

            <div class="tab-content px-1 pt-1">
              <div role="tabpanel" class="tab-pane active" id="tabIcon1" aria-expanded="true" aria-labelledby="baseIcon-tab1">
                
                <div class="row">
        <div class="col-12">
            <div class="card">
              
                
      
     

                 <div class="card-content collapse show">
                 <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="card">
                        
                        <div class="card-content">
                            <div class="table-responsive ">
                                <table class="table alt-pagination customer-wrapper dataTable no-footer" id="dataTables-example"  style="width:100%">
                                    <thead>
                                        <tr>
                                         <td>Date</td>
                                        <td >Numéro</td>
                                        <td>Référence</td>
                                        <td >Journal</td>
                                        <td >Total</td>
                                        <td >Action</td>
                                      
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
              </div>
              <div class="tab-pane" id="tabIcon2" aria-labelledby="baseIcon-tab2">
              
                <div class="row">
        <div class="col-12">
            <div class="card">
              
                
         
     

                 <div class="card-content collapse show">
                 <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="card">
                        
                        <div class="card-content">
                            <div class="table-responsive ">
                                <table class="table alt-pagination customer-wrapper dataTable no-footer" id="dataTables-example2" style="width:100%">
                                    <thead>
                                        <tr>
                                         <td>Date</td>
                                        <td >Numéro</td>
                                        <td>Référence</td>
                                        <td >Journal</td>
                                        <td >Total</td>
                                        <td >Action</td>
                                      
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
              </div>
             
            </div >
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
            dom: 'Bfrtip',
buttons: [
//'copy', 'csv', 'excel', 'pdf', 'print'


 { extend: 'pdf',text: 'Telecharger La list des Pièces Comptables', className: 'btn btn-sm btn-danger box-shadow-1 mr-1 mb-1',  exportOptions: {
                    columns: [ 0, 1, 2,3 ]
                }  }
                ],
            ajax: 'http://erp.test/Comptabilite/pc/Data',
            "pageLength": 50,
             columns: [
            {data: 'date_pieces'},
            {data: 'year'},
            {data: 'Réf'},
            {data: 'journal'},
            {data: 'Total'},
             {data: 'action2', name: 'action2', orderable: false, searchable: false},

       ]
        });



  //your code here
});
        
           
     
  
</script>


<script type="text/javascript">
    

   $(document).ready(function () {
    $('#dataTables-example2').DataTable({
         "language": 
                        {
                             "url": "//cdn.datatables.net/plug-ins/1.10.9/i18n/French.json"
                            }

                            ,processing: false,

            serverSide: true,
            dom: 'Bfrtip',
buttons: [
//'copy', 'csv', 'excel', 'pdf', 'print'


 { extend: 'pdf',text: 'Telecharger La list des Pièces Comptables', className: 'btn btn-sm btn-danger box-shadow-1 mr-1 mb-1',  exportOptions: {
                    columns: [ 0, 1, 2,3 ]
                }  }
                ],
            ajax: 'http://erp.test/Comptabilite/pc/Data2',
            "pageLength": 50,
             columns: [
            {data: 'date_pieces'},
            {data: 'year'},
            {data: 'Réf'},
            {data: 'journal'},
            {data: 'Total'},
             {data: 'action2', name: 'action2', orderable: false, searchable: false},

       ]
        });



  //your code here
});
        
           
     
  
</script>



<script language="JavaScript" type="text/javascript">
function validate(){
    return confirm('Vous voulez Vraiment Publié la Pièces Comptables?');
}
</script>

<script language="JavaScript" type="text/javascript">
function checkDelete(){
    return confirm('Vous voulez Vraiment Supprimer ?');
}
</script>
<script language="JavaScript" type="text/javascript">
function checkDelete2(){
    return confirm('Vous voulez Vraiment Supprimer ?');
}
</script>
@endsection

