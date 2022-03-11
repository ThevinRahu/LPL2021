<?php

namespace App\Http\Controllers;
use App\Models\Players;
use Illuminate\Http\Request;
use App\Models\Matches;
use App\Models\MatchStats;
use App\Models\PlayerStats;

class PlayersController extends Controller
{
    public function save(Request $request){
        $datam=Matches::all();
        $this->validate($request,['pname'=>'required']);
        $players= new Players;
        $players->name=$request->pname;
        $players->team=$request->pteam;
        $players->country=$request->country;
        $players->save();
        $data=Players::all();
        $stats=MatchStats::orderBy('points', 'DESC')->get();
        $countries = Players::selectRaw('country, count(*) as count')->groupBy('country')->get();
        $pstat=PlayerStats::all();
        return view('index', compact('data', 'datam', 'stats', 'countries', 'pstat'));
    }
    public function delete($id){
        $player=Players::find($id);
        $player->delete();
        $data=Players::all();
        $datam=Matches::all();
        $stats=MatchStats::orderBy('points', 'DESC')->get();
        $countries = Players::selectRaw('country, count(*) as count')->groupBy('country')->get();
        $pstat=PlayerStats::all();
        return view('index', compact('data', 'datam', 'stats', 'countries', 'pstat'));
    }
}
