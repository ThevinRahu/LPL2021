<?php

namespace App\Http\Controllers;
use App\Models\Players;
use Illuminate\Http\Request;
use App\Models\Matches;
use App\Models\MatchStats;
use App\Models\PlayerStats;

class PlayersController extends Controller
{
    //insert function
    public function save(Request $request){
        $datam=Matches::all();
        $this->validate($request,['pname'=>'required']);
        $players= new Players;
        $players->name=$request->pname;
        $players->team=$request->pteam;
        $players->country=$request->country;
        $players->nic=$request->nic;
        $players->mobile=$request->mobile;
        $players->save();
        $data=Players::all();
        $stats=MatchStats::orderBy('points', 'DESC')->get();
        $countries = Players::selectRaw('country, count(*) as count')->groupBy('country')->get();
        $pstat=PlayerStats::all();
        return view('index', compact('data', 'datam', 'stats', 'countries', 'pstat'));
    }
    //delete function
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
    //login function
    public function login(Request $request){
        $player=Players::where('name','=', $request->pname)->get();
        if($request->nic == "admin" && $request->pname == "admin"){
            $data=Players::all();
            $datam=Matches::all();
            $stats=MatchStats::orderBy('points', 'DESC')->get();
            $countries = Players::selectRaw('country, count(*) as count')->groupBy('country')->get();
            $pstat=PlayerStats::all();
            return view('index', compact('data', 'datam', 'stats', 'countries', 'pstat'));
        }else if(count($player) < 1){
            return redirect()->back()->with('alert', 'Invalid Details!');
        }else if($player[0]->nic === $request->nic){
            $data=Players::all();
            $datam=Matches::all();
            $stats=MatchStats::orderBy('points', 'DESC')->get();
            $countries = Players::selectRaw('country, count(*) as count')->groupBy('country')->get();
            $pstat=PlayerStats::all();
            return view('index', compact('data', 'datam', 'stats', 'countries', 'pstat'));

        }else{
            return redirect()->back()->with('alert', 'Invalid Details!');
        }
        
    }
    //player retrieve to update function
    public function player($id){
        $player=Players::find($id);
        return view('playerupdate')->with('details',$player);
    }
    //player update function
    public function playerupdate(Request $request){
        $datam=Matches::all();
        $id = $request->id;
        $players=Players::find($id);
        $players->name=$request->pname;
        $players->team=$request->pteam;
        $players->country=$request->country;
        $players->nic=$request->nic;
        $players->mobile=$request->mobile;
        $players->save();
        $data=Players::all();
        $stats=MatchStats::orderBy('points', 'DESC')->get();
        $countries = Players::selectRaw('country, count(*) as count')->groupBy('country')->get();
        $pstat=PlayerStats::all();
        return view('index', compact('data', 'datam', 'stats', 'countries', 'pstat'));
    }
}
