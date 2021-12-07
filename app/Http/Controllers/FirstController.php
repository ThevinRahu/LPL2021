<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\PlayersController;
use App\Models\Players;
use App\Models\PlayerStats;
use App\Models\Matches;
use App\Models\MatchStats;

class FirstController extends Controller
{
    public function first(){
        $data=Players::all();
        $datam=Matches::all();
        $stats=MatchStats::orderBy('points', 'DESC')->get();
        $countries = Players::selectRaw('country, count(*) as count')->groupBy('country')->get();
        //return view('index')->with('data',$data);
        $pstat=PlayerStats::all();
        return view('index', compact('data', 'datam', 'stats', 'countries', 'pstat'));
    }
}
