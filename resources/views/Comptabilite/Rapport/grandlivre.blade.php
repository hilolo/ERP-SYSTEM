@extends('layouts.comptable')

@section('content')








<div class="content-header row mb-1">
          <div class="content-header-left col-md-6 col-12 mb-2">
            <h3 class="content-header-title"> Grand livre </h3>
            <div class="row breadcrumbs-top">
              <div class="breadcrumb-wrapper col-12">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="index.html">Comptabilite</a>
                  </li>
                  <li class="breadcrumb-item "><a href="#">Grand livre</a>
                  </li>
                  
                  
                </ol>
              </div>
            </div>
          </div>
        

          
        </div>

         

        

                        
                        <div class="card-content">
                            <div class="table-responsive ">
                                <table class="table alt-pagination customer-wrapper dataTable no-footer hidden" id="dataTables-example"  style="width:100%">
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
               
           

         
         

         


    
         

<section id="accordion">
   
    <div class="row">
        <div class="col-lg-12 col-xl-12">
           
            <div id="accordionWrapa1" role="tablist" aria-multiselectable="true">


                <div class="card">
                      @foreach ($orders as $as)

                    <div id="heading1" class="card-header" role="tab">
                        <a data-toggle="collapse" href="#accordion{{ $as[0]->compte_id }}" aria-expanded="false" aria-controls="accordion1" class="card-title lead collapsed blue-grey">     {{ $as[0]->compte->code }}  {{ $as[0]->compte->nom }} </a>
                    </div>
                    <div id="accordion{{ $as[0]->compte_id }}" role="tabpanel" data-parent="#accordionWrapa1" aria-labelledby="heading{{ $as[0]->compte_id }}" class="collapse" style="">
                        <div class="card-content">
                            <div class="card-body">
                               <div class="row">
    <div class="col-12">
        <div class="card">



            <div class="card-content collapse show">
              
            
                <div class="table-responsive">
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                
                                <th scope="col">Date</th>
                                <th scope="col">Libellé</th>
                                <th scope="col">Partenaire</th>
                                 <th scope="col">Débit </th>
                                  <th scope="col">Crédit</th>
                            </tr>
                        </thead>
                        <tbody>
                               @foreach($as as $aq)
                            <tr>
                               
                                <td>{{ $as[0]->date_pieces }}</td>
                                <td>{{ $as[0]->Libell }}</td>
                                <td>{{ $as[0]->client->name }}</td>
                                <td>{{ $as[0]->Debit }} MAD</td>
                                <td>{{ $as[0]->Credit }} MAD</td>
                            </tr>

                              @endforeach
                      
                        </tbody>
                    </table>
                </div>

                
               
            </div>
        </div>
    </div>
</div>
   
                            </div>
                        </div>
                    </div>

                          @endforeach


                   
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
            dom: 'Bfrtip',
buttons: [
//'copy', 'csv', 'excel', 'pdf', 'print'


 { extend: 'print',text: 'Imprimer', className: 'btn btn-sm btn-danger box-shadow-1 mr-1 mb-1',  exportOptions: {
                }  },

                 { extend: 'excel',text: 'Excel Format', className: 'btn btn-sm btn-danger box-shadow-1 mr-1 mb-1',  exportOptions: {
                }  }
                ],
            ajax: 'http://erp.test/Comptabilite/Grandlivre/data',
            "pageLength": 50,
             columns: [
            {data: 'date_pieces'},
            {data: 'name'},
            {data: 'Libellé'},
            {data: 'Debit'},
            {data: 'Credit'}

       ]
        });



  //your code here
});
        
           
     
  
</script>




@endsection

