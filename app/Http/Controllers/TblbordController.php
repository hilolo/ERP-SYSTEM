<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Charts;
use App\Devis;
use App\Clients;
use DB;

class TblbordController extends Controller
{
    

     public function index1()
    {



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
               


    
  
    $users = Devis::where(DB::raw("(DATE_FORMAT(created_at,'%Y'))"),date('Y'))->where('type','1')
    				->get();


        $chart = Charts::database($users, 'area', 'highcharts')
			      ->title("Les Devis mensuel ")
			      ->elementLabel("Total Devis")
			      ->dimensions(1000, 500)
			      ->responsive(true)
			      ->groupByMonth(date('Y'), true);

  	 return view('Charts.index',compact('chart','deviss','total1','total2','total3','orders','orders2','perc','aaq'));
      
    }


}
