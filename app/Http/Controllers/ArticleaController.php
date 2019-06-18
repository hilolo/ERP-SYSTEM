<?php

namespace App\Http\Controllers;

use Yajra\DataTables\Facades\DataTables;
use Illuminate\Http\Request;
use App\Articles;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Auth;

class ArticleaController extends Controller
{

  
  public function __construct()
    {
        $this->middleware('auth');
}

public function index()
    {
        if(auth()->user()->Achat == '1'){
        return view('Achat.Article.index');
      }else   
      {

  
      return redirect('/home2');
      }
    }


      public function storeaf()
    {
        return view('Achat.Article.ajouter');


    }

    public function data()
        {
            $users = Articles::select(['id', 'name', 'prix', 'tva', 'code_barre', 'etat']);


      return datatables()->of( $users)
       ->editColumn('tva', function( $user) {
                 if($user->tva == '1'){
                    return ' Exonere de TVA ACHATS';}
                    if($user->tva == '2'){
                    return 'TVA 7% ACHATS';}
                    if($user->tva == '3'){
                    return ' TVA 10% ACHATS';}
                    if($user->tva == '4'){
                    return 'TVA 17% ACHATS';}
                    if($user->tva == '5'){
                    return 'TVA 20% ACHATS';}

                })
        ->addColumn('action', function ($user) {
                return '

             
       
                      
                       <a href="/Achat/' .$user->id. '/ModifierArticle"  >  <i class="la la-pencil-square success"></i></a> 
                          
                    <a href="'. route('deleteartac', $user->id) .'" onclick="return checkDelete()  " ><i class="la la-trash danger"></i> </a>
                      
                        

          

                        ';
            })

     ->make(true);
        }


      public function insert(Request $request)
    {
       
        if ($request->isMethod('post')){
        	//dd($request->file('filee'));
        	$file = $request->file('filee');

            $ar= new Articles();
        
            $ar->type=$request->input('ttt');
 			      $ar->cat=$request->input('cat');
            $ar->name=$request->input('name');
            $ar->prix=$request->input('prix');
            $ar->tva=$request->input('tva');
            $ar->code_barre=$request->input('code_b');
            

           if ($request->hasFile('filee')){
          	$ar->path_img=$file->storeAs('public/articles',$file->getClientOriginalName()) ;
          }

            $ar->save();
            return redirect('/Achat/Articles');
        }
         }

         public function update(Request $request,$id)
          {
       
        alert('Message','Modification avec succès', 'success');
       //   dd($request->file('filee'));
          $file = $request->file('filee');

            $ar=  Articles::find($id);
        
            $ar->type=$request->input('ttt');
            $ar->cat=$request->input('cat');
            $ar->name=$request->input('name');
            $ar->prix=$request->input('prix');
            $ar->tva=$request->input('tva');
            $ar->code_barre=$request->input('code_b');

           if ($request->hasFile('filee')){
            $ar->path_img=$file->storeAs('public/articles',$file->getClientOriginalName()) ;
          }

            $ar->save();
            return redirect('/Achat/Articles');
        


            }


         public function updateaf($id)
          {
             $art=Articles::find($id);
            return view('Achat.Article.modifier',compact('art'));
          }


          public function destroy($id)
    {
      $share = Articles::find($id);
     $share->delete();
      alert('Message','suppression avec succès', 'success');

      return redirect('/Achat/Articles');
     
    }


}
