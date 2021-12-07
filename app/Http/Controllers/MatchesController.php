<?php

namespace App\Http\Controllers;
use App\Models\Matches;
use App\Models\MatchStats;
use App\Models\PlayerStats;
use App\Models\Players;
use Illuminate\Http\Request;

class MatchesController extends Controller
{
    //matches insert function
    public function save(Request $request){
        $this->validate($request,['matchno'=>'required']);
        $match= new Matches;
        $match->matchno=$request->matchno;
        $match->team1=$request->team1;
        $match->team2=$request->team2;
        $match->save();
        $data=Players::all();
        $datam=Matches::all();
        $stats=MatchStats::orderBy('points', 'DESC')->get();
        $countries = Players::selectRaw('country, count(*) as count')->groupBy('country')->get();
        $pstat=PlayerStats::all();
        return view('index', compact('data', 'datam', 'stats', 'countries', 'pstat'));
    }
    //match win update function
    public function won1($no){
        $match=Matches::where('matchno','=', $no)->get();
        $match[0]->won=$match[0]->team1;
        $match[0]->save();
        $stats=MatchStats::where('team','=',$match[0]->won)->get();
        $stats[0]->won=$stats[0]->won+1;
        $stats[0]->points=$stats[0]->points+2;
        $stats[0]->save();
        $stats2=MatchStats::where('team','=',$match[0]->team2)->get();
        $stats2[0]->lost=$stats2[0]->lost+1;
        $stats2[0]->save();
        $data=Players::all();
        $datam=Matches::all();
        $stats=MatchStats::orderBy('points', 'DESC')->get();
        $countries = Players::selectRaw('country, count(*) as count')->groupBy('country')->get();
        $pstat=PlayerStats::all();
        return view('index', compact('data', 'datam', 'stats', 'countries', 'pstat'));
    }
    //match win update function
    public function won2($no){
        $match=Matches::where('matchno','=', $no)->get();
        $match[0]->won=$match[0]->team2;
        $match[0]->save();
        $stats=MatchStats::where('team','=',$match[0]->won)->get();
        $stats[0]->won=$stats[0]->won+1;
        $stats[0]->points=$stats[0]->points+2;
        $stats[0]->save();
        $stats2=MatchStats::where('team','=',$match[0]->team1)->get();
        $stats2[0]->lost=$stats2[0]->lost+1;
        $stats2[0]->save();
        $data=Players::all();
        $datam=Matches::all();
        $stats=MatchStats::orderBy('points', 'DESC')->get();
        $countries = Players::selectRaw('country, count(*) as count')->groupBy('country')->get();
        $pstat=PlayerStats::all();
        return view('index', compact('data', 'datam', 'stats', 'countries', 'pstat'));
    }
    //match no result update function
    public function nr($no){
        $match=Matches::where('matchno','=', $no)->get();
        $match[0]->won='No Result';
        $match[0]->save();
        $stats=MatchStats::where('team','=',$match[0]->team1)->get();
        $stats[0]->nr=$stats[0]->nr+1;
        $stats[0]->points=$stats[0]->points+1;
        $stats[0]->save();
        $stats2=MatchStats::where('team','=',$match[0]->team2)->get();
        $stats2[0]->nr=$stats2[0]->nr+1;
        $stats2[0]->points=$stats2[0]->points+1;
        $stats2[0]->save();
        $data=Players::all();
        $datam=Matches::all();
        $stats=MatchStats::orderBy('points', 'DESC')->get();
        $countries = Players::selectRaw('country, count(*) as count')->groupBy('country')->get();
        $pstat=PlayerStats::all();
        return view('index', compact('data', 'datam', 'stats', 'countries', 'pstat'));
    }
    //save team
    public function team(Request $request){
        $matchs= new MatchStats;
        $matchs->team=$request->team1;
        $matchs->won=0;
        $matchs->lost=0;
        $matchs->nr=0;
        $matchs->points=0;
        $matchs->save();
        $data=Players::all();
        $datam=Matches::all();
        $stats=MatchStats::orderBy('points', 'DESC')->get();
        $countries = Players::selectRaw('country, count(*) as count')->groupBy('country')->get();
        $pstat=PlayerStats::all();
        return view('index', compact('data', 'datam', 'stats', 'countries', 'pstat'));
    }
    
}
