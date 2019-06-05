<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Clients;
use App\Articles;
use App\Demandep;

use App\Facturea;
use DateTime;
use DB;
use PDF;
use RealRashid\SweetAlert\Facades\Alert;

class FactureaController extends Controller
{
    //

   
      public function index()
    {
        
        
        return view('Achat.Facture.index');
    }


    public function download($id)
    {
        
    
        $art=Facturea::find($id);
    $pdf = PDF::loadView('Achat.Facture.FactureVente',compact('art'));

      return $pdf->download( 'FAC|00' .$art->number . '|'.$art->year .'.pdf');
      
    }

     public function pdf($id)
    {
    	


        $art=Facturea::find($id);
    $pdf = PDF::loadView('Achat.Facture.FactureVente',compact('art'));

        //return $pdf->download('invoice.pdf');
    return $pdf->stream();
    	
    }



 
        public function insert(Request $request,$id)
    		{
       
      
    		  

        	$dt = new DateTime();
        	$year=$dt->format("Y");
        
        
        	$users = DB::table('facturea')->Orderby('created_at', 'desc')
        	->where('year',$year)
        	->limit(1)->get();
        	if($users->isEmpty()){
        			$number=1;
        			
        		}
        	else {	$number=$users[0]->number+1;}


        	$arRRR= new Facturea();
        	$arRRR->year=$year;
 			$arRRR->number=$number;
 			$arRRR->demandep_id=$id;
 			$arRRR->date_facture=$dt->format('Y-m-d H:i:s');
 			 $arRRR->save();

 			$xx= Demandep::find($id);
 			$xx->type='3';
            $xx->etat='done';
            $xx->save();


             alert('Message','Nouveau Facture Ajouter', 'success');
              return view('Achat.Facture.index');

        
     
   			 }


             public function data()
            {
        
        
             /*$users = Devis::select(['id', 'type', 'condition_paiment','Total'])->where('type', '=', '0');
             $users2 = Devis::all();*/

              $articles =DB::table('facturea')
             ->join('demandep', 'demandep.id', '=', 'facturea.demandep_id')
             ->join('clients', 'clients.id', '=', 'demandep.client_id')
             ->where('demandep.type', '3')
             ->select('facturea.id AS tag_name', 'facturea.*','clients.*','demandep.*')

             ->get();
              

                      return datatables()->of( $articles)
                ->editColumn('id', function( $user) {
                    return 'PO-0000' . $user->id . '';
                })
                 ->editColumn('number', function( $user) {
                    return 'FAC/00' . $user->number . '/' . $user->year  . '';
                })
               
                  ->addColumn('action', function ($user) {
                return '
              <div class="btn-group mr-1 mb-1 text-center">
                       
                          <a href="/Achat/Facture/pdf/'. $user->tag_name .'"><i class="la la-eye success"></i> </a>
                        </div> 
                           <div class="btn-group mr-1 mb-1 text-center">
                          <a href="/Achat/Facture/pdfd/'. $user->tag_name .'"><i class="la la-download  info"></i> </a>
                          </div> 



                        ';
            })
              ->rawColumns(['action' => 'action2'])     
                     ->make(true);


                }






}

