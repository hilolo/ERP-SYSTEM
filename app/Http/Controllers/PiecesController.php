<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Clients;
use App\Compte;
use App\Pieces;
use App\Comptepiece;
use DB; 
use DateTime;
use PDF;
use Redirect;
use RealRashid\SweetAlert\Facades\Alert;

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
        
       
    	


        return view('Comptabilite.Pieces.ajouter',compact('filesq','filesqq' ));


    }


    public function insert(Request $request)
    {
        


        
        $debit=0;
        $credit=0;
        foreach ($request->get('car') as $shipmentDetails) {

        $piecesNumber = $shipmentDetails['debit'];
        $piecesNumber2 = $shipmentDetails['credit'];
        
       
        $debit+=$piecesNumber;
        $credit+=$piecesNumber2;
        }


        if( $debit !=  $credit  ){
            Alert::warning('Warning', 'Impossible de créer une pièce non balancée.')->showCancelButton('Ok', '#42729a');
             return Redirect::back()->withInput();
         }else{

                  
        $dt = new DateTime();
        $year=$dt->format("Y");
    
    
        $users = DB::table('pieces')->Orderby('created_at', 'desc')
        ->where('year',$year)
        ->limit(1)->get();
        if($users->isEmpty()){
                $number=1;
                
            }
        else {  $number=$users[0]->number+1;}



        $ar= new Pieces();
        $ar->Réf=$request->input('ref');
        
        $ar->year=$year;
        $ar->number=$number;
        $ar->journal=$request->input('a2');
        $ar->date_pieces=$request->input('datee');
        $ar->type='1';
        $ar->save();

        $files = Pieces::latest()->first();

        $debit=0;
        $credit=0;
        foreach ($request->get('car') as $shipmentDetails) {

        $piecesNumber = $shipmentDetails['debit'];
        $piecesNumber2 = $shipmentDetails['credit'];
        $piecesNumber3 = $shipmentDetails['libelle'];
        $compte = $shipmentDetails['state1'];
        $client = $shipmentDetails['state2'];

        $qr= new Comptepiece();
        $qr->ref=$request->input('ref');
        $qr->Libellé=$piecesNumber3;
        $qr->date_pieces=$request->input('datee');
        $qr->name='PC/000'.$number .'/'.$year.'';
        $qr->journal=$request->input('a2');
        $qr->client_id=$client;
        $qr->compte_id=$compte;
        $qr->pieces_id=$files->id;
        $qr->Debit=$piecesNumber;
        $qr->Credit=$piecesNumber2;
         $qr->type='1';
        $qr->save();


        $debit+=$piecesNumber;
        $credit+=$piecesNumber2;
        }

        

        $arRRR=  Pieces::find($files->id);
        $arRRR->Total= $debit;
        $arRRR->save();
        alert('Message',' Pièces Comptables Ajouté  avec succès', 'success');
       return view('Comptabilite.Pieces.index');


        }


    }


        public function data()
            {
        
        
             /*$users = Devis::select(['id', 'type', 'condition_paiment','Total'])->where('type', '=', '0');
             $users2 = Devis::all();*/

             $articles =DB::table('pieces')
            ->whereIn('pieces.type', ['1'])
             ->get();
              

                      return datatables()->of( $articles)
                ->editColumn('year', function( $user) {
                    return 'PC/000' . $user->number . '/' . $user->year .  '' ;
                })
                ->editColumn('Total', function( $user) {
                    return '' . $user->Total . ' MAD' ;
                })
                 ->addColumn('action', function ($user) {
                return '
             
                            <div class="btn-group mr-1 mb-1 text-center">
                                        <button type="button" class="btn btn-info"><i class="la la-check"></i></button>
                                        <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <span class="sr-only">Toggle Dropdown</span>
                                        </button>
                                        <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(46px, 40px, 0px);">
                                            <a class="dropdown-item" href="'. route('edeetu', $user->id).'">Confirmer</a>
                                           
                                         
                                            
                                    </div>
                        ';
            })
                  ->addColumn('action2', function ($user) {
                return '
              <div class="btn-group mr-1 mb-1 text-center">
                       
                          <a href="/Comptabilite/Piècescomptables/'. $user->id .'/View"><i class="la la-eye success"></i> </a>
                          </div>

                 <div class="btn-group mr-1 mb-1 text-center">
                          <a href="'. route('deletepieceq', $user->id) .'" onclick=" checkDelete()"><i class="la la-trash danger"></i> </a>
                          </div>

                          <div class="btn-group mr-1 mb-1 text-center">
                          <a href="'. route('validatep', $user->id) .'" onclick=" validate()"><i class="la la-check-square"></i> </a>
                          </div>

                           <div class="btn-group mr-1 mb-1 text-center">
                              <a href="'. route('pdfdvqq', $user->id).'"><i class="la la-file-archive-o info"></i> </a>
                          
                        </div>

                            
                                    

                        ';
            })
              ->rawColumns(['action' => 'action2','action2' => 'action2'])     
                     ->make(true);


                }



                  public function data2()
            {
        
        
             /*$users = Devis::select(['id', 'type', 'condition_paiment','Total'])->where('type', '=', '0');
             $users2 = Devis::all();*/

             $articles =DB::table('pieces')
             ->whereIn('pieces.type', ['2'])
             ->get();
              

                      return datatables()->of( $articles)
                ->editColumn('year', function( $user) {
                    return 'PC/000' . $user->number . '/' . $user->year .  '' ;
                })
                  ->editColumn('Total', function( $user) {
                    return '' . $user->Total . ' MAD' ;
                })
                 ->addColumn('action', function ($user) {
                return '
             
                            <div class="btn-group mr-1 mb-1 text-center">
                                        <button type="button" class="btn btn-info"><i class="la la-check"></i></button>
                                        <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <span class="sr-only">Toggle Dropdown</span>
                                        </button>
                                        <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(46px, 40px, 0px);">
                                            <a class="dropdown-item" href="'. route('edeetu', $user->id).'">Confirmer</a>
                                           
                                         
                                            
                                    </div>
                        ';
            })
                  ->addColumn('action2', function ($user) {
                return '
                <div class="btn-group mr-1 mb-1 text-center">
                       
                          <a href="/Comptabilite/Piècescomptables/'. $user->id .'/View"><i class="la la-eye success"></i> </a>
                          </div>

                 <div class="btn-group mr-1 mb-1 text-center">
                          <a href="'. route('deletepieceq', $user->id) .'" onclick=" checkDelete2()"><i class="la la-trash danger"></i> </a>
                          </div>

                              <div class="btn-group mr-1 mb-1 text-center">
                       
                         <a href="'. route('pdfdvqq', $user->id).'"><i class="la la-file-archive-o info"></i> </a>
                        </div>

                         

                        ';
            })
              ->rawColumns(['action' => 'action2','action2' => 'action2'])     
                     ->make(true);


                }


       public function destroy($id)
         {   

         $share = Pieces::find($id);
         $share->delete();

        alert('Message',' Pièces Comptables Supprimer  avec succès', 'success');

        
           return redirect('/Comptabilite/Piecescomptables');
        }


          public function updatev(Request $request,$id)
         {     

          $ar= Pieces::find($id);

           $dt = new DateTime();
            

            $ar->type='2';
            $ar->date_pieces=$dt->format('Y-m-d');
            

             $ar->save();

             DB::table('comptepiece')
        ->where('pieces_id',$id)
        ->update(array(
                  'type'=>'2'
         ));


        alert('Message',' Pièces Comptables Publié  avec succès', 'success');
     return view('Comptabilite.Pieces.index');

        }


          public function View($id)
         {      


        $art=Pieces::find($id);


        return view('Comptabilite.Pieces.view',compact('art'));
        }

         public function pdf($id)
    {
     
       $art=Pieces::find($id);
    $pdf = PDF::loadView('Comptabilite.Pieces.pdf',compact('art'));

        //return $pdf->download('invoice.pdf');
    return $pdf->stream();

    }





}