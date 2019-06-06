<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Entreprise;
use App\User;
use Illuminate\Support\Facades\Hash;

class AdminstrateurController extends Controller
{

  public function __construct()
    {
        $this->middleware('auth');
}
    public function index()
    {
        
        $art=Entreprise::find('1');
        return view('Admin.Users.index',compact('art'));
    }
   
     

       public function treeview()
    {
       $art = User::all()->where('type','2');
        return view('Admin.Users.treeview',compact('art'));
    }


     public function updateaf($id)
    {
    	$art=Entreprise::find($id);
        return view('Admin.Users.ajouter',compact('art'));
    }

    public function ajouteruser()
    {
     
        return view('Admin.Users.ajouteruser');
    }


      public function mmodiferuser($id)
    {
        $art=User::find($id);
        return view('Admin.Users.modifieruser',compact('art'));
    }

     public function destroy($id)
    {

        $art=User::find($id);
        $art->delete();
       alert('Message',' Utilisateur a etait Supprimer avec succès', 'success');
           return redirect('/Admin');
    }

     public function updateuser(Request $request,$id)
    {


      

           
            $ar=User::find($id);
        
            $ar->name=$request->input('name');
            $ar->email=$request->input('email');


            $ar->password=Hash::make($request->input('password'));
             $ar->type='2';
             if($request->input('Vente') == '1')
            $ar->Vente=$request->input('Vente');
          else  $ar->Vente='0';

             if($request->input('Achat') == '1')
             $ar->Achat=$request->input('Achat');
          else  $ar->Achat='0';

              if($request->input('Comptable') == '1')
              $ar->Comptable=$request->input('Comptable');
          else  $ar->Comptable='0';

           
           
             $ar->save();

         

        alert('Message',' Utilisateur a etait Modifier avec succès', 'success');
           return redirect('/Admin');



      
    }



    public function insertuser(Request $request)
    {


      

            $ar= new User();
        
            $ar->name=$request->input('name');
            $ar->email=$request->input('email');


            $ar->password=Hash::make($request->input('password'));
             $ar->type='2';
             if($request->input('Vente') == '1')
            $ar->Vente=$request->input('Vente');
          else  $ar->Vente='0';

             if($request->input('Achat') == '1')
             $ar->Achat=$request->input('Achat');
          else  $ar->Achat='0';

              if($request->input('Comptable') == '1')
              $ar->Comptable=$request->input('Comptable');
          else  $ar->Comptable='0';

           
           
             $ar->save();

         

        alert('Message','Nouveau Utilisateur a etait ajouté avec succès', 'success');
           return redirect('/Admin');



      
    }


     public function update(Request $request)
    {
       
       
        	$file = $request->file('filee');



           
            $ar=  Entreprise::find('1');
           
           
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
             alert('Message',' Les Information de Votre Entreprise sont Modifier avec succès', 'success');
            return redirect('/Admin');
        
    }

  
   public function data()
        {
            $users = User::all()->where('type','2');


      return datatables()->of( $users)
        ->addColumn('action', function ($user) {
            $p='';$pr='';$pq='';

          if($user->Vente == '1'){
              $p='<span class="badge badge-warning mb-1">Vente</span>';
          }
          if($user->Achat == '1'){
              $pr=' <span class="badge badge-success mb-1">Achat</span>';
          }
          if($user->Comptable  == '1'){
              $pq='  <span class="badge badge-info mb-1">Comptable</span>';
          }


                return '                    
                     ' .  $p  . '
                     
                      ' .  $pr  . '

                       ' .  $pq  . '
                     
                        ';
            })
        ->addColumn('action2', function ($user) {
                return '

             
       
                      
                       <a href="/Admin/' .$user->id . '/Modiferuser" >  <i class="la la-pencil-square success"></i></a> 
                          
                    <a href="'. route('suppuser', $user->id) .'" onclick="return checkDelete()  " ><i class="la la-trash danger"></i> </a>
                      
                        

          

                        ';
            })
            ->rawColumns(['action' => 'action2','action2' => 'action2'])   

     ->make(true);
        }



    

    
     public function View($id)
    {
    	$art=Entreprise::find($id);
        return view('Clients.view',compact('art'));
    }

   
}
