<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

       // dd(auth()->user()->Achat);

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
 


}
