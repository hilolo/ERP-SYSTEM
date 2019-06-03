<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Clients;
use App\Articles;
use App\Devis;
use App\Demandep;
use App\Devisarticlesa;
use DB; 
use DateTime;
use PDF;

class DemandePController extends Controller
{







      public function index()
    {    	
        return view('Achat.DemandeP.index');
    }



     public function pdf($id)
    {
     
        $art=Demandep::find($id);
    $pdf = PDF::loadView('Achat.DemandeP.pdf',compact('art'));

        //return $pdf->download('invoice.pdf');
    return $pdf->stream();

    }





     public function insert(Request $request)
    {
//dd($request->all());

      if ($request->isMethod('post')){

        if($request->btn1 == 'btn1'){
            //dd($request->file('filee'));
         
            $dt = new DateTime();
            $ar= new Demandep();
        
            $ar->client_id=$request->input('state');
            
            $ar->type='1';
            $ar->etat='Demande de prix';

            $ar->date_demandep=$dt->format('Y-m-d H:i:s');
            
            $files = Demandep::latest()->first();
             $ar->save();

            

            $total =0;
            $totalht=0;
            $totaltva=0;
             foreach ($request->get('car') as $shipmentDetails) {
                $arq= new Devisarticlesa();
    $piecesNumber = $shipmentDetails['state2'];
     $piecesNumber2 = $shipmentDetails['descrption'];
      $piecesNumber3 = $shipmentDetails['Qte'];

    $files = Demandep::latest()->first();
                        
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

            $arq->demandep_id=$files->id;
            $arq->descr=$piecesNumber2;
            $arq->qte=$piecesNumber3;
            $arq->soustotal=($AR*$AR2)*$piecesNumber3;

            $totalht+=$AR2*$piecesNumber3;
            $totaltva+=($AR2*$ARt)*$piecesNumber3;
            $total= $totalht+$totaltva;

                $arq->save();

                        }

        $arRRR=  Demandep::find($files->id);
        $arRRR->Montant=$totalht;
        $arRRR->Taxe= $totaltva;
        $arRRR->Total= $total;
        $arRRR->save();

                        




         

            return redirect('/Achat/DemandePrix');


        }
        else{


            $dt = new DateTime();
            $ar= new Demandep();


            $ar->date_confirmation=$dt->format('Y-m-d H:i:s');
            $ar->type='2';
            $ar->etat='Commande fournisseur';
            
        
            $ar->client_id=$request->input('state');
            
           

            $ar->date_demandep=$dt->format('Y-m-d H:i:s');
            
            $files = Demandep::latest()->first();
             $ar->save();

            

            $total =0;
            $totalht=0;
            $totaltva=0;
             foreach ($request->get('car') as $shipmentDetails) {
                $arq= new Devisarticlesa();
    $piecesNumber = $shipmentDetails['state2'];
     $piecesNumber2 = $shipmentDetails['descrption'];
      $piecesNumber3 = $shipmentDetails['Qte'];

    $files = Demandep::latest()->first();
                        
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

            $arq->demandep_id=$files->id;
            $arq->descr=$piecesNumber2;
            $arq->qte=$piecesNumber3;
            $arq->soustotal=($AR*$AR2)*$piecesNumber3;

            $totalht+=$AR2*$piecesNumber3;
            $totaltva+=($AR2*$ARt)*$piecesNumber3;
            $total= $totalht+$totaltva;

                $arq->save();

                        }

        $arRRR=  Demandep::find($files->id);
        $arRRR->Montant=$totalht;
        $arRRR->Taxe= $totaltva;
        $arRRR->Total= $total;
        $arRRR->save();

                        




         

            return redirect('/Achat/DemandePrix');








         }

       }

          
        

    

   


  
       

    

   


    }



      public function data()
            {
        
        
             /*$users = Devis::select(['id', 'type', 'condition_paiment','Total'])->where('type', '=', '0');
             $users2 = Devis::all();*/

             $articles =DB::table('clients')
             ->join('demandep', 'demandep.client_id', '=', 'clients.id')
            ->whereIn('demandep.type', ['1','2'])
             ->get();
              

                      return datatables()->of( $articles)
                ->editColumn('id', function( $user) {
                    return 'PO-0000' . $user->id . '';
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
                                            <a class="dropdown-item" href="'. route('edeetuprix', $user->id).'">Confirmer Commande fournisseur</a>
                                           
                                         
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="'. route('pdfdvprix', $user->id).'">Imprimer</a>
                                        </div>
                                    </div>
                        ';
            })
                  ->addColumn('action2', function ($user) {
                return '
              <div class="btn-group mr-1 mb-1 text-center">
                       
                          <a href="/Achat/DemandePrix/'. $user->id .'/View"><i class="la la-eye success"></i> </a>
                          </div>

                 <div class="btn-group mr-1 mb-1 text-center">
                          <a href="'. route('deletedevisprix', $user->id) .'"><i class="la la-trash danger"></i> </a>
                          </div>

                        ';
            })
              ->rawColumns(['action' => 'action2','action2' => 'action2'])     
                     ->make(true);
                }




      public function storeaf()
    {		
    	$filesq = Articles::all();
        $filesqq = Clients::all()->where('module', 2);
        


        if($ar = Demandep::all()->last() == null)
            {
                $files="1";
             
            }
            else
                {
           $ar =  Demandep::all()->last();
            
            $files=($ar->id)+1;
            }
    	
           

        return view('Achat.DemandeP.ajouter',compact('files','filesq','filesqq' ));


    }

         public function destroy($id)
         {   

         $share = Demandep::find($id);
         $share->delete();

        return view('Achat.DemandeP.index');
        }



        public function View($id)
         {      
        $art=Demandep::find($id);

        return view('Achat.DemandeP.view',compact('art'));
        }


         public function updatev(Request $request,$id)
         {     

          $ar= Demandep::find($id);

           $dt = new DateTime();
            
         

            $ar->date_confirmation=$dt->format('Y-m-d H:i:s');
            $ar->type='2';
            $ar->etat='Commande fournisseur';
            


             $ar->save();
        return view('Achat.DemandeP.index');
        }


}
