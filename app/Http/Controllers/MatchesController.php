<?php

namespace App\Http\Controllers;
use App\Models\Matches;
use App\Models\MatchStats;
use Illuminate\Http\Request;

class MatchesController extends Controller
{
    public function save(Request $request){
        $this->validate($request,['matchno'=>'required']);
        $match= new Matches;
        $match->matchno=$request->matchno;
        $match->team1=$request->team1;
        $match->team2=$request->team2;
        $match->save();
        return view('welcome');
    }
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
        return view('welcome');
    }
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
        return view('welcome');
    }
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
        return view('welcome');
    }
    
}
