<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Clients;
use App\Compte;
use App\Pieces;
use App\Comptepiece;
use DB; 
use DateTime;
use PDF;
use Redirect;
use RealRashid\SweetAlert\Facades\Alert;

class EcrituresController extends Controller
{
       public function index()
    {    	

           $debit = DB::table("comptepiece")->sum('Debit');
           $credit = DB::table("comptepiece")->sum('Credit');
        return view('Comptabilite.Ecriture.index',compact('debit','credit'));
    
    }


    public function data()
            {
        
        
             /*$users = Devis::select(['id', 'type', 'condition_paiment','Total'])->where('type', '=', '0');
             $users2 = Devis::all();*/

             $articles =DB::table('comptepiece')
            ->whereIn('type', ['2'])
             ->get();
             
       
              

                      return datatables()->of( $articles)
                  ->addColumn('action2', function ($user) {
                return '
              <div class="btn-group mr-1 mb-1 text-center">
                       
                          <a href="/Comptabilite/Piècescomptables/'. $user->id .'/View"><i class="la la-eye success"></i> </a>
                          </div>

                 <div class="btn-group mr-1 mb-1 text-center">
                          <a href="'. route('deletepieceq', $user->id) .'" onclick=" checkDelete()"><i class="la la-trash danger"></i> </a>
                          </div>

                          <div class="btn-group mr-1 mb-1 text-center">
                          <a href="'. route('validatep', $user->id) .'" onclick=" validate()"><i class="la la-check-square"></i> </a>
                          </div>

                        ';
            })
              ->rawColumns(['action' => 'action2','action2' => 'action2'])     
                     ->make(true);


                }



}
