@extends('layouts.off')

@section('content')
<div class="content-header row mb-1">
          <div class="content-header-left col-md-6 col-12 mb-2">
            <h3 class="content-header-title">Articles</h3>
            <div class="row breadcrumbs-top">
              <div class="breadcrumb-wrapper col-12">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="index.html">Achat</a>
                  </li>
                  <li class="breadcrumb-item active"><a href="#">Articles</a>
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
                    <h4 class="card-title">Les Articles</h4>
                    <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                 
                </div>
                
         <div class="float-right" style="margin-right: 15px;">
                        <a class="btn btn-sm btn-danger box-shadow-2 round btn-min-width pull-right white" href="/Achat/AjouterArticle">
                            <i class="ft-plus white"></i>Nouveau Article
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
                                         <td>Nom</td>
                                        <td >prix</td>
                                        <td>TVA</td>
                                        <td>code_barre</td>
                                        <td>etat</td>
                                        <td  >action</td>
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
            ajax: 'http://erp.test/Achat/Articles/Data',
            "pageLength": 50,
             columns: [
            {data: 'name'},
            {data: 'prix'},
            {data: 'tva'},
            {data: 'code_barre'},
            {data: 'etat'},
             {data: 'action', name: 'action', orderable: false, searchable: false},

       ]
        });



  //your code here
});
        
           
     
  
</script>

@endsection

