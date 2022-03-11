<?php

namespace App\Http\Controllers;
use App\Models\PlayerStats;
use Illuminate\Http\Request;

class PlayerStatController extends Controller
{   public function savebat(Request $request){
        $playerstat = new PlayerStats;
        $playerstat->name=$request->ppname;
        $playerstat->team=$request->ppteam;
        $playerstat->score=$request->score;
        $playerstat->bat=1;
        $playerstat->save();
        return view('welcome');
}
public function savebowl(Request $request){
        $playerstat = new PlayerStats;
        $playerstat->name=$request->pppname;
        $playerstat->team=$request->pppteam;
        $playerstat->score=$request->scoreb;
        $playerstat->bowl=1;
        $playerstat->save();
        return view('welcome');
}

}
