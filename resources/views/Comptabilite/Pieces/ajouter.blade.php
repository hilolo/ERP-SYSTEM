@extends('layouts.comptable')

@section('content')


<style type="text/css">
  

.select2-results__option { 
  font-size: 10px;

}


</style>


<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://www.malot.fr/bootstrap-datetimepicker/bootstrap-datetimepicker/css/bootstrap-datetimepicker.css">
<script type="text/javascript" src="https://www.malot.fr/bootstrap-datetimepicker/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js"></script>


 

  


<form method="POST"  action="/insertpieces">
        {{ csrf_field() }}
  


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
                   <li class="breadcrumb-item active"><a href="#"> Ajouter Pièces comptable</a>
                  </li>
                  
                </ol>
              </div>
            </div>
          </div>
        

          
        </div>

   


<section class="card" style="font-size: 10px;">
    <div id="invoice-template"  class="card-body">
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
                <h4 class="card-title"> Date</h4>
               <div class="input-group">
                         
        
          <div class="input-append date form_datetime">
    <input size="16" type="text"  class="form-control datetimepicker-input" name="datee" required=""  value="" readonly>
    <span class="add-on"><i class="icon-th"></i></span>
</div>
  

                        </div>


                  </div>
              



            </div>
            <div class="col-md-6 col-sm-12 text-center text-md-right">
              
             <div class="col-md-6 pull-right">
                            <div class="form-group">
                             <h4 class="card-title" style="    text-align: left;"> Journal</h4>
                              <select id="projectinput5" name="a2" class="form-control">
                                <option value="Opérations diverses" selected=""  >Opérations diverses (MAD)</option>
                                <option value="Factures fournisseur">Factures fournisseur (MAD)</option>
                                <option value="Factures clients">Factures clients (MAD)</option>
                                <option value="Différence de change">Différence de change (MAD)</option>
                                <option value="Banque">Banque (MAD)</option>
                                <option value="Liquidités">Liquidités (MAD)</option>
                                <option value="Journal de taxes de comptabilité de trésorerie">Journal de taxes de comptabilité de trésorerie (MAD)</option>
                              </select>
                            </div>
                             
                          </div>
     


                          
                          
               
            </div>
<div class="col-md-6 col-sm-12 text-center text-md-right">  </div>
             <div class="col-md-6 col-sm-12 text-center text-md-right">
              
             <div class="col-md-6 pull-right">
                            <div class="form-group">
                             <h4 class="card-title" style="    text-align: left;"> Référence</h4>
                                 <div class="form-group">
                 
                  <input type="text" id="companyName" class="form-control" placeholder="Référence" name="ref">
                </div>

                            </div>
                             
                          </div>
                           
            </div>

        </div>
        <!--/ Invoice Customer Details -->

     
        <div id="invoice-items-details" class="pt-2">
            <div class="row">
                <div class="table-responsive col-sm-12 repeater" class="table-responsive "  >
                    <table class="table"  data-repeater-list="car">
                      <thead >
                        <tr>
                          
                          <th   class="text-left">Compte</th>
                          <th class="text-left">Partenaire</th>
                          <th class="text-left">Libellé </th>
                            <th class="text-left">Débit </th>       
                             <th class="text-left">Crédit </th>                     
                        
                       
                           <th class="text-left">Ligne</th>


                        </tr>
                      </thead>
                      <tbody data-repeater-item>
                        <tr >
                          
                          <td style="width:30%" >
                         

              <select class="js-example-basic-single select2 form-control" onchange="getval(this);"   id="countries1" name="state1">
                  
                  {{ $filesq }} 
                    @foreach($filesq as $as)
                    <option value="{{ $as->id }}">{{ $as->code }}  {{ $as->nom }} </option>
                  
                    @endforeach
                  </select>
                  
                          </td>
                         <td style="width:30%" >
                         

              <select class="js-example-basic-single2 select2 form-control" onchange="getval(this);"   id="countries2" name="state2">
                  <option ></option>
                    @foreach($filesqq as $as)
                    <option value="{{ $as->id }}">  {{ $as->name }} </option>
                  
                    @endforeach
                  </select>
                  
                          </td>
                          <td class="text-left"><input style="width:120px;"  type="text"  class="form-control" id="libelle" value="1"   name="libelle"></td>

                          <td class="text-left"><input style="width:80px;"  type="number"  class="form-control" id="debit" value="1"  required="debit" value="0"  name="debit"></td>

                          <td class="text-left"><input style="width:80px;"  type="number"  class="form-control" id="credit" value="1"  required="credit" value="0" name="credit"></td>
                       
                        

                          <td class="text-left">
                          <button type="button" class="btn btn-icon btn-danger mr-1 mb-1 text-center" data-repeater-delete=""> <i class="ft-x"></i>
                                                </button></td>

                                              

                        </tr>

                       
                       
                      </tbody>

                    </table>
                    <input data-repeater-create type="button" id="repeater-button" class="btn btn-icon btn-success  mr-1 mb-1" value=" + Ajouter une ligne "/>
                     

                </div>
            </div>
          
        </div>



        <!-- Invoice Footer -->
        <div id="invoice-footer">
            <div class="row">
                
                <div class="col-md-6 col-sm-12 text-center">
                    <button type="submit" value="btn1" name="btn1" class="btn btn-info btn-m my-1"><i class="la la-paper-plane-o"></i> 
            Sauvegarder
        </button>
         
        <button type="button" class="btn btn-warning btn-m my-1"><i class="la  la-backward"></i> 
            Annuler
        </button>
                </div>
            </div>
        </div>
        <!--/ Invoice Footer -->

    </div>
</section>
   </form>

<script type="text/javascript">

    $(".form_datetime").datetimepicker({
      format: 'yyyy-mm-dd',
    autoclose: true,
    minuteStep: 1,
    maxView: 4,
    minView: 2,
    
       
    }); 

    //$('.form_datetime').datetimepicker('remove');

</script> 
<p id="demo"></p>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>


<script type="text/javascript">
    $(document).ready(function () {
        


$('.repeater').repeater({

    isFirstItemUndeletable: false,
    initEmpty: false,

    ready: function () {
        $('.select2').select2({
          
        });
    },
    show: function () {
        $(this).slideDown();

         $('.select2-container').remove();
        $('.select2').select2({
           
        });
    },
    hide: function () {
        $(this).slideUp();
    },
});
 });


</script>






 
<script type="text/javascript">
 
    $("#repeater-button").click(function(){
        setTimeout(function(){
            
            $(".select2").select2({
                
            });    
                  
        }, 300);
    });    
 
</script>




@endsection

