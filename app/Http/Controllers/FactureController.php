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
class FactureController extends Controller
{
   
 public function index()
    {

    	
        return view('Facture.index');
    }

     public function pdf()
    {
    	
    	 $art=Devis::find('1');
    	
        return view('Facture.FactureVente',compact('art'));
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

              return view('Boncommande.index');

        
     
   			 }


}
