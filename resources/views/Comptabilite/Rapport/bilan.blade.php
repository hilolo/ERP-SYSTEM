@extends('layouts.comptable')

@section('content')








<div class="content-header row mb-1">
          <div class="content-header-left col-md-6 col-12 mb-2">
            <h3 class="content-header-title"> Bilan </h3>
            <div class="row breadcrumbs-top">
              <div class="breadcrumb-wrapper col-12">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="index.html">Comptabilite</a>
                  </li>
                  <li class="breadcrumb-item "><a href="#">Bilan </a>
                  </li>
                  
                  
                </ol>
              </div>
            </div>
          </div>
        

          
        </div>

         

        

               
           

         
         

         
<a class="btn btn-secondary buttons-print btn-sm btn-danger box-shadow-1 mr-1 mb-1" tabindex="0" aria-controls="dataTables-example" onClick="printdiv('elem');"  style="margin-left: 20px"><span>Imprimer</span></a>

    
         

<section id="accordion">
   
     <div class="col-12">
        <div class="card">



            <div class="card-content collapse show" id="elem">
              
            
              <div class="table-responsive">
                    <table class="table">
                        <thead class="hidden">
                            <tr>
                                <th>Firstname</th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="bg-secondary white">
                                <td>ACTIFS</td>
                                <td></td>
                                <td></td>
                                <td> </td>
                               
                                <td class="font-weight-bold" >  @if($actif[0]->total_sales == null)  0 MAD @else
                                  {{ $actif[0]->total_sales }} 
                                MAD @endif</td>
                            </tr>
                            <tr class="bg-success white" >
                                <td></td>
                                <td> Actif immobilisé</td>
                                <td></td>
                                <td>  </td>
                                <td class="font-weight-bold" >  @if($immo[0]->total_sales == null)  0 MAD @else
                                  {{ $immo[0]->total_sales }} 
                                MAD @endif </td>
                            </tr>
                              <tr>
                                <td></td>
                                <td> </td>
                                <td>immobilisations incoporelles </td>
                                <td>  </td>
                                <td class="font-weight-bold" >  @if($immo1[0]->total_sales == null)  0 MAD @else
                                  {{ $immo1[0]->total_sales }} 
                                MAD @endif </td>
                            </tr>
                             <tr>
                                <td></td>
                                <td> </td>
                                <td> immobilisations corporelles </td>
                                <td>  </td>
                                <td class="font-weight-bold" >  @if($immo2[0]->total_sales == null)  0 MAD @else
                                  {{ $immo2[0]->total_sales }} 
                                MAD @endif </td>
                            </tr>

                             <tr>
                                <td></td>
                                <td> </td>
                                <td>immobilisations financières </td>
                                <td>  </td>
                                <td class="font-weight-bold" >  @if($immo3[0]->total_sales == null)  0 MAD @else
                                  {{ $immo3[0]->total_sales }} 
                                MAD @endif </td>
                            </tr>
                             <tr class="bg-success white" >
                                <td></td>
                                <td> Actif circulant </td>
                                <td> </td>
                                <td>  </td>
                                <td class="font-weight-bold" >  @if($circulant[0]->total_sales == null)  0 MAD @else
                                  {{ $circulant[0]->total_sales }} 
                                MAD @endif </td>
                            </tr>
                             <tr>
                                <td></td>
                                <td> </td>
                                <td> Etat  </td>
                                <td>  </td>
                                <td class="font-weight-bold" >  @if($circulant1[0]->total_sales == null)  0 MAD @else
                                  {{ $circulant1[0]->total_sales }} 
                                MAD @endif </td>
                            </tr>

                             <tr>
                                <td></td>
                                <td> </td>
                                <td>Divers créanciers  </td>
                                <td>  </td>
                                <td class="font-weight-bold" >  @if($circulant2[0]->total_sales == null)  0 MAD @else
                                  {{ $circulant2[0]->total_sales }} 
                                MAD @endif </td>
                            </tr>
                          

                             <tr class="bg-secondary white">
                                <td>PASSIF</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td class="font-weight-bold" >      @if($passif[0]->total_sales == null)  0 MAD @else
                                  {{ $passif[0]->total_sales }} 
                                MAD @endif
                              </td>
                            </tr>
                            <tr class="bg-success white" >
                                <td></td>
                                <td> Capitaux propres</td>
                                <td></td>
                                <td>  </td>
                                <td class="font-weight-bold" >    @if($Capitaux[0]->total_sales == null)  0 MAD @else  {{ $Capitaux[0]->total_sales }}  MAD
                                    @endif
                                 </td>
                            </tr>
                             <tr>
                                <td></td>
                                <td> </td>
                                <td>Capital</td>
                                <td>  </td>
                                <td class="font-weight-bold" >   @if($Capitaux1[0]->total_sales == null) 0 MAD @else {{ $Capitaux1[0]->total_sales }} MAD 
                                    @endif
                                </td>
                            </tr>


                              <tr class="bg-success white" >
                                <td></td>
                                <td> Dettes</td>
                                <td></td>
                                <td>  </td>
                                <td class="font-weight-bold" > @if($Dette[0]->total_sales == null)  0 MAD @else {{ $Dette[0]->total_sales }} 
                                MAD
                                @endif
                                 </td>
                            </tr>
                                 <tr>
                                <td></td>
                                <td> </td>
                                <td>Emprunt</td>
                                <td>  </td>
                                <td class="font-weight-bold" > @if($Dette1[0]->total_sales == null)  0 MAD @else
                                  {{ $Dette1[0]->total_sales }} 
                                MAD @endif

                                 </td>
                            </tr>
                             <tr>
                                <td></td>
                                <td> </td>
                                <td> Dettes Fournisseurs</td>
                                <td>  </td>
                                <td class="font-weight-bold" > @if($Dette2[0]->total_sales == null)  0 MAD @else

                                  {{ $Dette2[0]->total_sales }} MAD @endif </td>
                            </tr>
                            
                       
                        
                        </tbody>
                    </table>
                </div>

                
              
            </div>
        </div>
    </div>
   
</section>
 <br><br><br> <br><br><br>



<script type="text/javascript">
  function printdiv(printpage)
{
var headstr = "<html><head><title>AIEE</title></head><body>";
var footstr = "</body>";
var newstr = document.all.item(printpage).innerHTML;
var oldstr = document.body.innerHTML;
document.body.innerHTML = headstr+newstr+footstr;
window.print();
document.body.innerHTML = oldstr;
return false;
}


</script>
@endsection

