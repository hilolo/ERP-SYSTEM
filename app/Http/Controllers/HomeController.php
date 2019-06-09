<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class HomeController extends Controller
{
    /*
    /**
     * Create a new controller instance.
     *
     * @return void
     */
   // public function __construct()
   // {
   //     $this->middleware('auth');
//}

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {


        if(auth()->user()->type == '1'){
        return redirect('/Admin');
        }
    
    if(auth()->user()->Vente == '1'){
        return redirect('/Vente/Articles');
        }

     if(auth()->user()->Achat == '1'){
        return redirect('/Achat/Articles');
        }


     if(auth()->user()->Comptable == '1'){
        return redirect('/Admin');
        }


        


    }

    public function rejected()
    {

       // dd(auth()->user()->Achat);



        if(auth()->user()->type == '1'){
             Alert::warning('Permission Refusée', 'vous n avez pas le droit d acceder au module ');
        return redirect('/Admin');
        }
    
    if(auth()->user()->Vente == '1'){
         Alert::warning('Permission Refusée', 'vous n avez pas le droit d acceder au module ');
        return redirect('/Vente/Articles');
        }

     if(auth()->user()->Achat == '1'){
         Alert::warning('Permission Refusée', 'vous n avez pas le droit d acceder au module ');
        return redirect('/Achat/Articles');
        }


     if(auth()->user()->Comptable == '1'){
         Alert::warning('Permission Refusée', 'vous n avez pas le droit d acceder au module ');
        return redirect('/Comptabilite/Piecescomptables');
        }


        


    }
 


}
