<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Clients;


class ClientsController extends Controller
{
      public function index()
    {
      $files = Clients::orderBy('created_at','DESC')->where('module', 1)->paginate(30);
        return view('Clients.index',['Clients' => $files]);
    }
      public function insert(Request $request)
    {
       
        if ($request->isMethod('post')){
        	//dd($request->file('filee'));
        	$file = $request->file('filee');

            $ar= new Clients();
        
            $ar->type=$request->input('colorRadio');
 			$ar->name=$request->input('name');

            $ar->email=$request->input('email');
            $ar->adresse=$request->input('Adresse');
            $ar->Telephone=$request->input('tele');
            $ar->NTVA=$request->input('ntva');
            $ar->Site_web=$request->input('site');
            $ar->FAX=$request->input('fax');
            $ar->module=1;
           if ($request->hasFile('filee')){
          	$ar->path_img=$file->storeAs('public/clients',$file->getClientOriginalName()) ;
          }

            $ar->save();
            return redirect('/Vente/Clients');
        }
    }

     public function update(Request $request,$id)
    {
       
       
        	$file = $request->file('filee');

            $ar= Clients::find($id);
        
            $ar->type=$request->input('colorRadio');
 			$ar->name=$request->input('name');

            $ar->email=$request->input('email');
            $ar->adresse=$request->input('Adresse');
            $ar->Telephone=$request->input('tele');
            $ar->NTVA=$request->input('ntva');
            $ar->Site_web=$request->input('site');
            $ar->FAX=$request->input('fax');
            
           if ($request->hasFile('filee')){
          	$ar->path_img=$file->storeAs('public/clients',$file->getClientOriginalName()) ;
          }

            $ar->save();
            return redirect('/Vente/'.$id.'/View');
        
    }

     public function storeaf(Request $request)
    {
        return view('Clients.ajouter');
    }


     public function updateaf($id)
    {
    	$art=Clients::find($id);
        return view('Clients.modifier',compact('art'));
    }

    
     public function View($id)
    {
    	$art=Clients::find($id);
        return view('Clients.view',compact('art'));
    }

     public function destroy($id)
    {
      $share = Clients::find($id);
     $share->delete();

      return redirect('/Vente/Clients');
     
    }

}
