<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Clients;
use App\Compte;
use App\Devis;
use DB; 
use DateTime;
use PDF;

class PiecesController extends Controller
{
      public function index()
    {    	

           
        return view('Comptabilite.Pieces.index');
    
    }


      public function storeaf()
    {

    	$filesq = Compte::all();
        $filesqq = Clients::all();
        
        if($ar = Devis::all()->last() == null)
            {
                $files="1";
            }
            else
                {
           $ar = Devis::all()->last();
            $files=($ar->id)+1;
            }
    	


        return view('Comptabilite.Pieces.ajouter',compact('files','filesq','filesqq' ));


    }


}
