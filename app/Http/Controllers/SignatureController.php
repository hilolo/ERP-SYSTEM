<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Devis;
use App\Entreprise;
use Storage;
use App\Clients;
use App\Msgdevis;
use DateTime;


class SignatureController extends Controller
{



      public function index($id)
    {    

       $art=Devis::find($id);
       $entr=Entreprise::find('1');
       
        return view('Devis.esignature',compact('art','entr'));
    
    }


       public function insert(Request $request,$id)
    {    
         $dt = new DateTime();

              $art=Devis::find($id);
           $art->date_confirmation=$dt->format('Y-m-d H:i:s');
            $art->type='2';
            $art->etat='Bon de commande';
            


             $art->save();



          $image = $request->devode;  // your base64 encoded
           $name = $request->qraar;

        $image = str_replace('data:image/png;base64,', '', $image);
        $image = str_replace(' ', '+', $image);
        $imageName = str_random(10).'.'.'png';
         Storage::disk('public')->put($imageName,base64_decode($image));


             $msg= new Msgdevis();
        $msg->status="Validé Devis => Bon De commande ";
        $msg->devis_id= $id;
        $msg->name= "Client :" . auth()->user()->name;
        $msg->pathupp=$imageName;
        $msg->save();

         return redirect('/');


     
    
    }
}
