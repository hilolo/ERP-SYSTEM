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


        

    

   


    }

      public function data()
            {
        
        
             /*$users = Devis::select(['id', 'type', 'condition_paiment','Total'])->where('type', '=', '0');
             $users2 = Devis::all();*/

             $articles =DB::table('clients')
             ->join('devis', 'devis.client_id', '=', 'clients.id')
             ->get();
              

                      return datatables()->of( $articles)
                      ->editColumn('id', function( $user) {
                    return 'SO-0000' . $user->id . '';
                })
                     ->make(true);
                }

      public function storeaf()
    {		
    	$filesq = Articles::all();
        $filesqq = Clients::all();
    	$files = Devis::latest()->first();
    

        return view('Devis.ajouter',compact('files','filesq','filesqq' ));


    }


}
