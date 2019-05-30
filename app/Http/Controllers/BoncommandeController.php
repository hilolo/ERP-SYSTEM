<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Clients;
use App\Articles;
use App\Devis;
use App\Devisarticles;
use DB; 
use DateTime;

class BoncommandeController extends Controller
{
   
    public function index()
    {
       
        return view('Boncommande.index');
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
        
  

        return view('Boncommande.ajouter',compact('files','filesq','filesqq' ));


    }




     public function data()
            {
        
        
             /*$users = Devis::select(['id', 'type', 'condition_paiment','Total'])->where('type', '=', '0');
             $users2 = Devis::all();*/

             $articles =DB::table('clients')
             ->join('devis', 'devis.client_id', '=', 'clients.id')
             ->where('devis.type', '2')
             ->get();
              

                      return datatables()->of( $articles)
                ->editColumn('id', function( $user) {
                    return 'SO-0000' . $user->id . '';
                })
                  ->editColumn('etat', function( $user) {
                    return 'A factuer';
                })
                   ->editColumn('Total', function( $user) {
                    return '' . $user->Total . ' MAD';
                })
                 ->addColumn('action', function ($user) {
                return '
                      
                       
                       <a href="/Vente/Devis//View"><i class="la la-file-archive-o secondary"></i> </a>
                          </div>
                          
                          
                  
                     
                          
                        ';
            })
                  ->addColumn('action2', function ($user) {
                return '
              <div class="btn-group mr-1 mb-1 text-center">
                       
                          <a href="/Vente/Boncommande/'. $user->id .'/View"><i class="la la-eye success"></i> </a>
                          </div>

                 <div class="btn-group mr-1 mb-1 text-center">
                          <a href="'. route('deletedevis', $user->id) .'"><i class="la la-trash danger"></i> </a>
                          </div>
                        ';
            })
              ->rawColumns(['action' => 'action2','action2' => 'action2'])     
                     ->make(true);
                }


      public function View($id)
         {      
        $art=Devis::find($id);

        return view('Boncommande.view',compact('art'));
        }



}
