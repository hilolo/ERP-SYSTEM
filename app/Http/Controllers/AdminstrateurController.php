<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Entreprise;
use App\User;

class AdminstrateurController extends Controller
{
    public function index()
    {
        
        //treee Users
        return view('Admin.Users.index');
    }
     public function storeaf()
    {
        
        return view('Admin.Users.ajouter');
    }

     public function updateaf($id)
    {
    	$art=Entreprise::find($id);
        return view('Admin.Users.ajouter',compact('art'));
    }
   

     public function insert(Request $request)
    {
       
       
        	$file = $request->file('filee');

           // $ar= Entreprise::find($id);
                $ar= new Entreprise();
           
 			$ar->name=$request->input('name');

            $ar->email=$request->input('email');
            $ar->ville=$request->input('ville');
            $ar->rue=$request->input('rue');
            $ar->postal=$request->input('postal');
            $ar->Site_web=$request->input('siteweb');
            $ar->Telephone=$request->input('tele');

            $ar->NTVA=$request->input('ntva');
            
            
           if ($request->hasFile('filee')){
          	$ar->logo=$file->storeAs('public/logo',$file->getClientOriginalName()) ;
          }

            $ar->save();
            return redirect('/Admin');
        
    }

  
   public function data()
        {
            $users = User::all();


      return datatables()->of( $users)
        ->addColumn('action', function ($user) {
                return '

             
       
                      
                       <a href="/Achat/' .$user->id. '/ModifierArticle"  >  <i class="la la-pencil-square success"></i></a> 
                          
                    <a href="'. route('deleteartac', $user->id) .'" onclick="return checkDelete()  " ><i class="la la-trash danger"></i> </a>
                      
                        

          

                        ';
            })

     ->make(true);
        }



    

    
     public function View($id)
    {
    	$art=Entreprise::find($id);
        return view('Clients.view',compact('art'));
    }

   
}
