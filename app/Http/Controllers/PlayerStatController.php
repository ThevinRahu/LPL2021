<?php

namespace App\Http\Controllers;
use App\Models\PlayerStats;
use App\Models\Players;
use App\Models\Matches;
use App\Models\MatchStats;
use Illuminate\Http\Request;

class PlayerStatController extends Controller
{   
        //save batting stat function
        public function savebat(Request $request){
        $playerstat = new PlayerStats;
        $playerstat->name=$request->ppname;
        $playerstat->team=$request->ppteam;
        $playerstat->score=$request->score;
        $playerstat->bat=1;
        $playerstat->save();
        $data=Players::all();
        $datam=Matches::all();
        $stats=MatchStats::orderBy('points', 'DESC')->get();
        $countries = Players::selectRaw('country, count(*) as count')->groupBy('country')->get();
        $pstat=PlayerStats::all();
        return view('index', compact('data', 'datam', 'stats', 'countries', 'pstat'));
}

//save bowling function
public function savebowl(Request $request){
        $playerstat = new PlayerStats;
        $playerstat->name=$request->pppname;
        $playerstat->team=$request->pppteam;
        $playerstat->score=$request->scoreb;
        $playerstat->bowl=1;
        $playerstat->save();
        $data=Players::all();
        $datam=Matches::all();
        $stats=MatchStats::orderBy('points', 'DESC')->get();
        $countries = Players::selectRaw('country, count(*) as count')->groupBy('country')->get();
        $pstat=PlayerStats::all();
        return view('index', compact('data', 'datam', 'stats', 'countries', 'pstat'));
}

}
