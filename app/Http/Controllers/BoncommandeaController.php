<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Clients;
use App\Articles;
 use App\Demandep;
use App\Devisarticlesa;
use DB; 
use DateTime;
use PDF;

class BoncommandeaController extends Controller
{
     
    public function index()
    {
       
        return view('Achat.Boncommande.index');
    }

     public function pdf($id)
    {
       

        $art=Demandep::find($id);
    $pdf = PDF::loadView('Achat.Boncommande.pdf',compact('art'));

        //return $pdf->download('invoice.pdf');
    return $pdf->stream();

     
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
    	
           

  

        return view('Achat.Boncommande.ajouter',compact('files','filesq','filesqq' ));


    }




     public function data()
            {
        
        
             /*$users = Devis::select(['id', 'type', 'condition_paiment','Total'])->where('type', '=', '0');
             $users2 = Devis::all();*/

             $articles =DB::table('clients')
             ->join('demandep', 'demandep.client_id', '=', 'clients.id')
             ->where('demandep.type', '2')
             ->get();
              

                      return datatables()->of( $articles)
                ->editColumn('id', function( $user) {
                    return 'SO-0000' . $user->id . '';
                })
                  ->editColumn('etat', function( $user) {
                    return 'Commande fournisseur';
                })
                   ->editColumn('Total', function( $user) {
                    return '' . $user->Total . ' MAD';
                })
                 ->addColumn('action', function ($user) {
                return '
                      
                       
                       <a href="'.route('insertfac', $user->id).'" onclick="javascript:return confirm("Are you sure you want to delete this comment?")" ><i class="la la-file-archive-o secondary"></i> </a>
                          </div>
                          
                          
                  
                     
                          
                        ';
            })
                  ->addColumn('action2', function ($user) {
                return '
              <div class="btn-group mr-1 mb-1 text-center">
                       
                          <a href="/Achat/Boncommande/'. $user->id .'/View"><i class="la la-eye success"></i> </a>
                          </div>

                 <div class="btn-group mr-1 mb-1 text-center">
                          <a href="'. route('deletedevisprix', $user->id) .'"><i class="la la-trash danger"></i> </a>
                          </div>

                            <div class="btn-group mr-1 mb-1 text-center">
                          <a href="'. route('imprbondprix', $user->id) .'"><i class="la la-file-text secondary"></i> </a>
                          </div>
                        ';
            })
              ->rawColumns(['action' => 'action2','action2' => 'action2'])     
                     ->make(true);
                }


      public function View($id)
         {      
        $art=Demandep::find($id);

        //a

        return view('Achat.Boncommande.view',compact('art'));
        }


}
