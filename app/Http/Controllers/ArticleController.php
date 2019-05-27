<?php

namespace App\Http\Controllers;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Http\Request;
use App\Articles;

class ArticleController extends Controller
{
     public function index()
    {
    	//$files = Clients::orderBy('created_at','DESC')->paginate(30);
        return view('Article.index');
    }

      public function storeaf()
    {
        return view('Article.ajouter');


    }

    public function data()
        {
            $users = Articles::select(['id', 'name', 'prix', 'tva', 'code_barre', 'etat']);


      return datatables()->of( $users)
        ->addColumn('action', function ($user) {
                return '

             
       
                      
                       <a href="/Vente/' .$user->id. '/ModifierArticle" >  <i class="la la-pencil-square success"></i></a> 
                          
                    <a href="'. route('aa', $user->id) .'"><i class="la la-trash danger"></i> </a>
                      
                        

          

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
            return redirect('/Vente/Articles');
        }
         }

         public function update(Request $request,$id)
          {
       
       
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
            return back();
        


            }


         public function updateaf($id)
          {
             $art=Articles::find($id);
            return view('Article.modifier',compact('art'));
          }

          public function destroy($id)
    {
      $share = Articles::find($id);
     $share->delete();

      return redirect('/Vente/Articles');
     
    }



   
}
