<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Charts;
use App\Devis;
use App\Clients;
use DB;
use DateTime;
use App\Demandep;

class Tblbord2Controller extends Controller
{

     public function index()
    {


/*
    $deviss = Devis::where('type','1')
    ->paginate(5);


    $total1 = Devis::whereIn('type', [1,2])->count();
    $total2 = Devis::where('type', 3)->count();
    $total3 = Clients::where('Module', 1)->count();

    $aaq=round($total2/$total1 *100, 2);

    $orders = DB::table('devis')
            ->whereIn('type', [1,2])
            ->select(DB::raw('SUM(Total) as total_sales'))
               // ->groupBy('department')
               // ->havingRaw('SUM(price) > ?', [2500])
                ->get();


    $orders2 = DB::table('devis')
            ->whereIn('type', [3])
            ->select(DB::raw('SUM(Total) as total_sales'))
               // ->groupBy('department')
               // ->havingRaw('SUM(price) > ?', [2500])
                ->get();

        $perc=round(($orders2[0]->total_sales/$orders[0]->total_sales) *100, 2);
               


    
  
   

*/
         

    			

               	$dt = new DateTime();
        	$month=$dt->format("m"); 
        	


    	$moinsc = DB::table('demandep')
    	->whereIn('type', [1,2])
    	->whereMonth('date_demandep', '=', $month+0)
    	->select(DB::raw("SUM(Total) as count"))
        ->get();




    	$moinsc2 = DB::table('demandep')
    	->whereIn('type', [1,2])
    	->whereMonth('date_demandep', '=', $month-1)
    	->select(DB::raw("SUM(Total) as count"))
        ->get();



    		/*	$rev = DB::table('devis')
                ->groupBy(DB::raw('MONTH(date_devis) '))->get([
                            DB::raw('YEAR(date_devis) as year'),
                            DB::raw('MONTHNAME(date_devis) as month'),
                            DB::raw('SUM(Total) as total')
                        ]);	*/

                	$charts = DB::table('demandep')
                	->whereIn('type', [1,2])
                ->select( DB::raw('SUM(Total) as total'),  DB::raw(' MONTH(date_demandep) month'))
			->groupby('month')
			->get();


			//dd($charts);

                        //dd($rev);	

    				//dd($users);
        $chart = Charts::create('bar', 'highcharts')
			 ->title('Demande de Prix mensuel ')
			 ->elementLabel("Total En MAD")
    		->labels($charts->pluck('month'))
    		->values($charts->pluck('total'))
   			 ->dimensions(1000,500)
   			 ->responsive(true);


			$total1 = DB::table('demandep')
                	->whereIn('type', [3])
                ->select( DB::raw('SUM(Total) as total'))
			->get();
			
	


 	$total2 = Demandep::whereIn('type', [1,2])->count();
    $total3 = Demandep::where('type', 3)->count();
    $total4 = Clients::where('Module', 2)->count();


			   

  	 return view('Achat.Charts.index',compact('chart','moinsc','moinsc2','total1','total2','total3','total4'));
      
    }


}
