<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Clients;
use App\Articles;
use App\Devis;
use App\Devisarticles;
use App\Facturesv;
use DateTime;
use DB;
use PDF;

class FactureaController extends Controller
{
    //

   
      public function index()
    {
        
  
        return view('Facture.index');
    }


    public function download($id)
    {
        
    
        $art=Facturesv::find($id);
    $pdf = PDF::loadView('Facture.FactureVente',compact('art'));

      return $pdf->download( 'FAC|00' .$art->number . '|'.$art->year .'.pdf');
      
    }

     public function pdf($id)
    {
    	


        $art=Facturesv::find($id);
    $pdf = PDF::loadView('Facture.FactureVente',compact('art'));

        //return $pdf->download('invoice.pdf');
    return $pdf->stream();
    	
    }



 
        public function insert(Request $request,$id)
    		{
       
      
    		

        	$dt = new DateTime();
        	$year=$dt->format("Y");
        
        
        	$users = DB::table('facturesv')->Orderby('created_at', 'desc')
        	->where('year',$year)
        	->limit(1)->get();
        	if($users->isEmpty()){
        			$number=1;
        			
        		}
        	else {	$number=$users[0]->number+1;}


        	$arRRR= new Facturesv();
        	$arRRR->year=$year;
 			$arRRR->number=$number;
 			$arRRR->devis_id=$id;
 			$arRRR->date_facture=$dt->format('Y-m-d H:i:s');
 			 $arRRR->save();

 			$xx= Devis::find($id);
 			$xx->type='3';
            $xx->etat='done';
            $xx->save();

              return view('Facture.index');

        
     
   			 }


             public function data()
            {
        
        
             /*$users = Devis::select(['id', 'type', 'condition_paiment','Total'])->where('type', '=', '0');
             $users2 = Devis::all();*/

              $articles =DB::table('facturesv')
             ->join('devis', 'devis.id', '=', 'facturesv.devis_id')
             ->join('clients', 'clients.id', '=', 'devis.client_id')
             ->where('devis.type', '3')
             ->select('facturesv.id AS tag_name', 'facturesv.*','clients.*','devis.*')

             ->get();
              

                      return datatables()->of( $articles)
                ->editColumn('id', function( $user) {
                    return 'SO-0000' . $user->id . '';
                })
                 ->editColumn('number', function( $user) {
                    return 'FAC/00' . $user->number . '/' . $user->year  . '';
                })
               
                  ->addColumn('action', function ($user) {
                return '
              <div class="btn-group mr-1 mb-1 text-center">
                       
                          <a href="/Vente/Facture/pdf/'. $user->tag_name .'"><i class="la la-eye success"></i> </a>
                        </div> 
                           <div class="btn-group mr-1 mb-1 text-center">
                          <a href="/Vente/Facture/pdfd/'. $user->tag_name .'"><i class="la la-download  info"></i> </a>
                          </div> 



                        ';
            })
              ->rawColumns(['action' => 'action2'])     
                     ->make(true);


                }






}

