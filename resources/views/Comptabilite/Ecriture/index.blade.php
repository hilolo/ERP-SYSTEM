@extends('layouts.comptable')


@section('content')
<div class="content-header row mb-1">
          <div class="content-header-left col-md-6 col-12 mb-2">
            <h3 class="content-header-title">Les Écritures comptables</h3>
            <div class="row breadcrumbs-top">
              <div class="breadcrumb-wrapper col-12">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="index.html">Comptabilite</a>
                  </li>
                  <li class="breadcrumb-item active"><a href="#">Les Écritures comptables</a>
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
                    <h4 class="card-title">Les Écritures comptables</h4>
                    <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                 
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
                                        <td>Date</td>
                                        <td >Pièce comptable</td>
                                        <td>Journal</td>
                                        <td>Référence</td>
                                        <td>Libellé</td>
                                   
                                        <td>Debit</td>
                                         <td>Credit</td>
                                          
                                        
                                        </tr>
                                    </thead>

                                       <tfoot>
                                          <tr class="bg-success white">
                                          <th></th>
                                           <th></th>
                                          <th></th>
                                          <th></th>
                                          <th></th>
                                          <th class="text-left">{{ $debit  }} MAD</th>
                                          <th class="text-left">{{ $credit  }} MAD</th>
                                      </tr>
                                  </tfoot>

                                  
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
            "searching": false,
             "lengthChange": false,
               "paging": false,
               "info": false,  
              "order": [[ 1, "desc" ]],
            dom: 'Bfrtip',
buttons: [
//'copy', 'csv', 'excel', 'pdf', 'print'


 { extend: 'pdf',text: 'Telecharger Les Écritures comptables',title: 'Écritures comptables', footer: true , className: 'btn btn-sm btn-danger box-shadow-1 mr-1 mb-1' }
                ],
            ajax: 'http://erp.test/Comptabilite/ex/Data',
            "pageLength": 50,
             columns: [
              {data: 'date_pieces'},
            {data: 'name'},
            {data: 'journal'},
            {data: 'ref'},
            {data: 'Libellé'},{data: 'Debit'},{data: 'Credit'},

             
             

       ]
        });



  //your code here
});
        
           
     
  
</script>

@endsection

