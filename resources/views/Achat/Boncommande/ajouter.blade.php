@extends('layouts.achat')

@section('content')

<form method="POST"  action="/insertDemandePrix">
        {{ csrf_field() }}
  


<div class="content-header row mb-1">
          <div class="content-header-left col-md-6 col-12 mb-2">
            <h3 class="content-header-title">Bon de Commands</h3>
            <div class="row breadcrumbs-top">
              <div class="breadcrumb-wrapper col-12">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="index.html">Achat</a>
                  </li>
                  <li class="breadcrumb-item "><a href="#">Demande de Prix</a>
                  </li>
                   <li class="breadcrumb-item active"><a href="#"> Ajouter Bon de Command</a>
                  </li>
                  
                </ol>
              </div>
            </div>
          </div>
        

          
        </div>

   


<section class="card">
    <div id="invoice-template"  class="card-body">
        <!-- Invoice Company Details -->
        <div id="invoice-company-details" class="row">
            <div class="col-md-6 col-sm-12 text-center text-md-left">
             
            </div>
            <div class="col-md-6 col-sm-12 text-center text-md-right">
                <h2>Bon de Command</h2>
   
                <p class="pb-3"># SO-0000{{ $files }}</p>
              

            </div>
        </div>

        <!--/ Invoice Company Details -->

        <!-- Invoice Customer Details -->
        <div id="invoice-customer-details" class="row pt-2">
            
            <div class="col-md-6 col-sm-12 text-center text-md-left">
               <div class="col-md-6 col-sm-12 ">
                <h4 class="card-title"> Client</h4>
              <select class="js-example-basic-single2 select2 form-control "   id="countries3" name="state">
                  <option ></option>
                  @foreach($filesqq as $as)
                    <option value="{{ $as->id }} ">{{ $as->name }} </option>
                    @endforeach
                  </select>
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
                          
                          <th   class="text-left">Article</th>
                          <th class="text-left">descrption</th>
                          <th class="text-left">Qte </th>
                          
                        
                       
                           <th class="text-left">Ligne</th>


                        </tr>
                      </thead>
                      <tbody data-repeater-item>
                        <tr >
                          
                          <td style="width:30%" >
                         

              <select class="js-example-basic-single select2 form-control" onchange="getval(this);"   id="countries2" name="state2">
                  <option ></option>
                    @foreach($filesq as $as)
                    <option value="{{ $as->id }} ">{{ $as->name }} || {{ $as->prix }} MAD</option>
                  
                    @endforeach
                  </select>
                  
                          </td>
                          <td class="text-left">
                            
                            <textarea id="issueinput8" rows="2" class="form-control" name="descrption" placeholder="comments" data-toggle="tooltip" data-trigger="hover" style="font-size: 9px" data-placement="top" data-title="Comments" data-original-title="" title="" aria-describedby="tooltip369596"></textarea>


                          </td>
                          <td class="text-left"><input style="width:60px;"  type="number"  class="form-control" id="Qte" value="1"  required="Qte"  name="Qte"></td>
                          
                       
                        

                          <td class="text-left">
                          <button type="button" class="btn btn-icon btn-danger mr-1 mb-1 text-center" data-repeater-delete=""> <i class="ft-x"></i>
                                                </button></td>

                                              

                        </tr>

                       
                       
                      </tbody>

                    </table>
                    <input data-repeater-create type="button" id="repeater-button" class="btn btn-icon btn-success  mr-1 mb-1" value=" + Ajouter Article "/>
                     

                </div>
            </div>
          
        </div>



        <!-- Invoice Footer -->
        <div id="invoice-footer">
            <div class="row">
                
                <div class="col-md-6 col-sm-12 text-center">
                    <button type="submit" value="btn2" name="btn2" class="btn btn-info btn-m my-1"><i class="la la-paper-plane-o"></i> 
            Confirmer Bon de commande
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


<p id="demo"></p>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>

<script type="text/javascript">
  
function getval(sel)
{
    /*alert(sel);
    document.getElementById("demo").innerHTML = 5 + 6;
    alert(sel.options[sel.selectedIndex].text);*/

}

</script>
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

