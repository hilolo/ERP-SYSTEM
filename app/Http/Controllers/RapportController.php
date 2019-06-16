<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Clients;
use App\Compte;
use App\Pieces;
use App\comptepiece;
use DB; 
use DateTime;
use PDF;
use Redirect;
use RealRashid\SweetAlert\Facades\Alert;

class RapportController extends Controller
{
    
      public function index1()
    {    	
    		  $orders = comptepiece::all()->groupBy('compte_id');;
                
           
        return view('Comptabilite.Rapport.grandlivre' ,compact('orders'));
    
    }


       public function index2()
    {    	
    		 // $orders = comptepiece::all()->groupBy('compte_id');;


    	//PASSIIF

    	 $passif =DB::table('comptepiece')
             ->join('compte', 'compte.id', '=', 'comptepiece.compte_id')
            ->whereIn('compte.type', ['Capitaux propres','IDettes du passif circulant'])
             ->select(DB::raw('sum(comptepiece.Debit+comptepiece.Credit) AS total_sales'))
            	//->select(DB::raw('sum(comptepiece.Debit+comptepiece.Credit) AS total_sales'))       
           	->get();


         $Capitaux =DB::table('comptepiece')
             ->join('compte', 'compte.id', '=', 'comptepiece.compte_id')
             ->where('compte.type', 'Capitaux propres')
             ->select(DB::raw('sum(comptepiece.Debit+comptepiece.Credit) AS total_sales'))
            	//->select(DB::raw('sum(comptepiece.Debit+comptepiece.Credit) AS total_sales'))       
           	->get();

           	$Capitaux1 =DB::table('comptepiece')
             ->join('compte', 'compte.id', '=', 'comptepiece.compte_id')
             ->where('compte.nom', 'Capitaux propres')
             ->select(DB::raw('sum(comptepiece.Debit+comptepiece.Credit) AS total_sales'))
            // ->select('facturea.id AS tag_name', 'facturea.*','clients.*','demandep.*')         
           	->get();


           	 $Dette =DB::table('comptepiece')
             ->join('compte', 'compte.id', '=', 'comptepiece.compte_id')
             ->where('compte.type', 'Dettes du passif circulant')
             ->select(DB::raw('sum(comptepiece.Debit+comptepiece.Credit) AS total_sales'))
            	//->select(DB::raw('sum(comptepiece.Debit+comptepiece.Credit) AS total_sales'))       
           	->get();

           		$Dette1 =DB::table('comptepiece')
             ->join('compte', 'compte.id', '=', 'comptepiece.compte_id')
             ->where('compte.nom', 'Emprunts Obligataires')
             ->select(DB::raw('sum(comptepiece.Debit+comptepiece.Credit) AS total_sales'))
            // ->select('facturea.id AS tag_name', 'facturea.*','clients.*','demandep.*')         
           	->get();


           		$Dette2 =DB::table('comptepiece')
             ->join('compte', 'compte.id', '=', 'comptepiece.compte_id')
             ->where('compte.nom', 'Dettes de Financement diverses')
             ->select(DB::raw('sum(comptepiece.Debit+comptepiece.Credit) AS total_sales'))
            // ->select('facturea.id AS tag_name', 'facturea.*','clients.*','demandep.*')         
           	->get();

           		//ACTIF

           	  	$actif =DB::table('comptepiece')
             ->join('compte', 'compte.id', '=', 'comptepiece.compte_id')
             ->whereIn('compte.type', ['Immobilisation Incorporelles','Immobilisation corporelles','Immobilisations Financières','Créances de lactif circulant'])
             ->select(DB::raw('sum(comptepiece.Debit+comptepiece.Credit) AS total_sales'))
            	//->select(DB::raw('sum(comptepiece.Debit+comptepiece.Credit) AS total_sales'))       
           	->get();


           	$immo =DB::table('comptepiece')
             ->join('compte', 'compte.id', '=', 'comptepiece.compte_id')
             ->whereIn('compte.type', ['Immobilisation Incorporelles','Immobilisation corporelles','Immobilisations Financières'])
             ->select(DB::raw('sum(comptepiece.Debit+comptepiece.Credit) AS total_sales'))
            	//->select(DB::raw('sum(comptepiece.Debit+comptepiece.Credit) AS total_sales'))       
           	->get();



           		$immo1 =DB::table('comptepiece')
             ->join('compte', 'compte.id', '=', 'comptepiece.compte_id')
             ->where('compte.type', 'Immobilisation Incorporelles')
             ->select(DB::raw('sum(comptepiece.Debit+comptepiece.Credit) AS total_sales'))
            	//->select(DB::raw('sum(comptepiece.Debit+comptepiece.Credit) AS total_sales'))       
           	->get();

           		$immo2 =DB::table('comptepiece')
             ->join('compte', 'compte.id', '=', 'comptepiece.compte_id')
             ->where('compte.type', 'Immobilisation corporelles')
             ->select(DB::raw('sum(comptepiece.Debit+comptepiece.Credit) AS total_sales'))
            	//->select(DB::raw('sum(comptepiece.Debit+comptepiece.Credit) AS total_sales'))       
           	->get();

           		$immo3 =DB::table('comptepiece')
             ->join('compte', 'compte.id', '=', 'comptepiece.compte_id')
             ->where('compte.type', 'Immobilisations Financières')
             ->select(DB::raw('sum(comptepiece.Debit+comptepiece.Credit) AS total_sales'))
            	//->select(DB::raw('sum(comptepiece.Debit+comptepiece.Credit) AS total_sales'))       
           	->get();

           	  $circulant =DB::table('comptepiece')
             ->join('compte', 'compte.id', '=', 'comptepiece.compte_id')
             ->where('compte.type', 'Créances de lactif circulant')
             ->select(DB::raw('sum(comptepiece.Debit+comptepiece.Credit) AS total_sales'))
            	//->select(DB::raw('sum(comptepiece.Debit+comptepiece.Credit) AS total_sales'))       
           	->get();

           	  	$circulant1 =DB::table('comptepiece')
             ->join('compte', 'compte.id', '=', 'comptepiece.compte_id')
             ->where('compte.nom', 'CEtat, TVA facturée')
             ->select(DB::raw('sum(comptepiece.Debit+comptepiece.Credit) AS total_sales'))
            // ->select('facturea.id AS tag_name', 'facturea.*','clients.*','demandep.*')         
           	->get();

           		$circulant2 =DB::table('comptepiece')
             ->join('compte', 'compte.id', '=', 'comptepiece.compte_id')
             ->where('compte.nom', 'Divers créanciers')
             ->select(DB::raw('sum(comptepiece.Debit+comptepiece.Credit) AS total_sales'))
            // ->select('facturea.id AS tag_name', 'facturea.*','clients.*','demandep.*')         
           	->get();












         
        return view('Comptabilite.Rapport.bilan' ,compact('Capitaux','Capitaux1','Dette','Dette1','Dette2','immo','immo3','immo1','immo2','circulant','circulant1','circulant2','actif' , 'passif') );
    
    }




       public function data1()
    {     
          $orders = comptepiece::all();
                
           return datatables()->of( $orders)
       


     ->make(true);
    
    }




    
}
