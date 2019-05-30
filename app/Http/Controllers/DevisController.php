<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Clients;
use App\Articles;
use App\Devis;
use App\Devisarticles;
use DB; 
use DateTime;
class DevisController extends Controller
{
   public function index()
    {
    	
    	
        return view('Devis.index');
    }

     public function insert(Request $request)
    {
//dd($request->all());

      if ($request->isMethod('post')){

        if($request->btn1 == 'btn1'){
            //dd($request->file('filee'));
         
            $dt = new DateTime();
            $ar= new Devis();
        
            $ar->client_id=$request->input('state');
            $ar->condition_paiment=$request->input('a2');
            $ar->type='1';
            $ar->etat='Devis';

            $ar->date_devis=$dt->format('Y-m-d H:i:s');
            
            $files = Devis::latest()->first();
             $ar->save();

            

            $total =0;
            $totalht=0;
            $totaltva=0;
             foreach ($request->get('car') as $shipmentDetails) {
                $arq= new Devisarticles();
    $piecesNumber = $shipmentDetails['state2'];
     $piecesNumber2 = $shipmentDetails['descrption'];
      $piecesNumber3 = $shipmentDetails['Qte'];

    $files = Devis::latest()->first();
                        
             $arq->article_id=$piecesNumber;
             $QAA=Articles::find($piecesNumber);
             $AR=1;
             $ARt=1;
            if($QAA->tva == '1'){
                 $AR=1;
                 $ARt=0;
                }
            if($QAA->tva == '2'){
                 $AR=1.07;
                 $ARt=0.07;
                }   

            if($QAA->tva == '3'){
                 $AR=1.1;
                 $ARt=0.1;
                }

            if($QAA->tva == '4'){
                 $AR=1.17;
                 $ARt=0.17;
                }  

             if($QAA->tva == '5'){
                 $AR=1.2;
                 $ARt=0.2;
                }  
            $AR2=$QAA->prix;

            $arq->devis_id=$files->id;
            $arq->descr=$piecesNumber2;
            $arq->qte=$piecesNumber3;
            $arq->soustotal=($AR*$AR2)*$piecesNumber3;

            $totalht+=$AR2*$piecesNumber3;
            $totaltva+=($AR2*$ARt)*$piecesNumber3;
            $total= $totalht+$totaltva;

                $arq->save();

                        }

        $arRRR=  Devis::find($files->id);
        $arRRR->Montant=$totalht;
        $arRRR->Taxe= $totaltva;
        $arRRR->Total= $total;
        $arRRR->save();

                        




         

            return redirect('/Vente/Devis');


        }
        else{


            $dt = new DateTime();
            $ar= new Devis();


            $ar->date_confirmation=$dt->format('Y-m-d H:i:s');
            $ar->type='2';
            $ar->etat='Bon de commande';
            
        
            $ar->client_id=$request->input('state');
            $ar->condition_paiment=$request->input('a2');
           

            $ar->date_devis=$dt->format('Y-m-d H:i:s');
            
            $files = Devis::latest()->first();
             $ar->save();

            

            $total =0;
            $totalht=0;
            $totaltva=0;
             foreach ($request->get('car') as $shipmentDetails) {
                $arq= new Devisarticles();
    $piecesNumber = $shipmentDetails['state2'];
     $piecesNumber2 = $shipmentDetails['descrption'];
      $piecesNumber3 = $shipmentDetails['Qte'];

    $files = Devis::latest()->first();
                        
             $arq->article_id=$piecesNumber;
             $QAA=Articles::find($piecesNumber);
             $AR=1;
             $ARt=1;
            if($QAA->tva == '1'){
                 $AR=1;
                 $ARt=0;
                }
            if($QAA->tva == '2'){
                 $AR=1.07;
                 $ARt=0.07;
                }   

            if($QAA->tva == '3'){
                 $AR=1.1;
                 $ARt=0.1;
                }

            if($QAA->tva == '4'){
                 $AR=1.17;
                 $ARt=0.17;
                }  

             if($QAA->tva == '5'){
                 $AR=1.2;
                 $ARt=0.2;
                }  
            $AR2=$QAA->prix;

            $arq->devis_id=$files->id;
            $arq->descr=$piecesNumber2;
            $arq->qte=$piecesNumber3;
            $arq->soustotal=($AR*$AR2)*$piecesNumber3;

            $totalht+=$AR2*$piecesNumber3;
            $totaltva+=($AR2*$ARt)*$piecesNumber3;
            $total= $totalht+$totaltva;

                $arq->save();

                        }

        $arRRR=  Devis::find($files->id);
        $arRRR->Montant=$totalht;
        $arRRR->Taxe= $totaltva;
        $arRRR->Total= $total;
        $arRRR->save();

                        




         

            return redirect('/Vente/Devis');








         }

       }

          
        

    

   


  
       

    

   


    }



      public function data()
            {
        
        
             /*$users = Devis::select(['id', 'type', 'condition_paiment','Total'])->where('type', '=', '0');
             $users2 = Devis::all();*/

             $articles =DB::table('clients')
             ->join('devis', 'devis.client_id', '=', 'clients.id')
             //->where('devis.type', '1')
             ->get();
              

                      return datatables()->of( $articles)
                ->editColumn('id', function( $user) {
                    return 'SO-0000' . $user->id . '';
                })
                 ->editColumn('Total', function( $user) {
                    return '' . $user->Total . ' MAD';
                })
                 ->addColumn('action', function ($user) {
                return '
             
                            <div class="btn-group mr-1 mb-1 text-center">
                                        <button type="button" class="btn btn-info"><i class="la la-check"></i></button>
                                        <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <span class="sr-only">Toggle Dropdown</span>
                                        </button>
                                        <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(46px, 40px, 0px);">
                                            <a class="dropdown-item" href="'. route('edeetu', $user->id).'">Confirmer</a>
                                           
                                         
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Imprimer</a>
                                        </div>
                                    </div>
                        ';
            })
                  ->addColumn('action2', function ($user) {
                return '
              <div class="btn-group mr-1 mb-1 text-center">
                       
                          <a href="/Vente/Devis/'. $user->id .'/View"><i class="la la-eye success"></i> </a>
                          </div>

                 <div class="btn-group mr-1 mb-1 text-center">
                          <a href="'. route('deletedevis', $user->id) .'"><i class="la la-trash danger"></i> </a>
                          </div>
                        ';
            })
              ->rawColumns(['action' => 'action2','action2' => 'action2'])     
                     ->make(true);
                }

      public function storeaf()
    {		
    	$filesq = Articles::all();
        $filesqq = Clients::all();
        
        if($ar = Devis::latest()->first() == null)
            {
                $files="1";
            }
            else
                {
           $ar = Devis::latest()->first();
            $files=$ar->id;
            }
    	
  

        return view('Devis.ajouter',compact('files','filesq','filesqq' ));


    }

         public function destroy($id)
         {   

         $share = Devis::find($id);
         $share->delete();

        return view('Devis.index');
        }



        public function View($id)
         {      
        $art=Devis::find($id);

        return view('Devis.view',compact('art'));
        }


         public function updatev(Request $request,$id)
         {     

          $ar= Devis::find($id);

           $dt = new DateTime();
            
         

            $ar->date_confirmation=$dt->format('Y-m-d H:i:s');
            $ar->type='2';
            $ar->etat='Bon de commande';
            


             $ar->save();
        return view('Devis.index');
        }


   

}
