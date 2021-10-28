<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Stats;

class StatsController extends Controller
{
    public function __construct(Request $request)
	{
		$this->request = $request;
	}

    public function index(){
        $stats = Stats::all();
        return view('stats', ['stats' => $stats]);
    }

    public function addstats(){
        if($this->request->method() == 'POST'){
            $alert = request() -> validate([
                'id' => 'required|integer',
                'points' => 'required|numeric',
                'average_points' => 'required|numeric',
                'games' => 'required|numeric',
                'duration' => 'required|numeric'
            ]);

            $stats = new Stats;
            $stats->player_id = $this->request->player_id;
            $stats->points = $this->request->get('points');
            $stats->average_points = $this->request->get('average_points');
            $stats->games = $this->request->get('games');
            $stats->duration = $this->request->get('duration');
            $stats->active = $this->request->has('active');
            if($stats -> save()){
                echo 'Success';
            }
        }
        return view('addstats', ['player_id' => $this->request->player_id]);
    }

    public function editstats(Stats $stats){
        if($this->request->method() == 'POST'){
            $alert = request() -> validate([
                'points' => 'required|numeric',
                'average_points' => 'required|numeric',
                'games' => 'required|numeric',
                'duration' => 'required|numeric'
            ]);

            $stats->player_id = $this->request->id;
            $stats->fullname = $this->request->get('points');
            $stats->age = $this->request->get('average_points');
            $stats->height = $this->request->get('games');
            $stats->weight = $this->request->get('duration');
            $stats->active = $this->request->has('active');
            if($stats -> save()){
                return redirect('stats/');
            }
        }
        return view('editstats', ['stats' => $stats]);
    }

    public function destroy(Stats $stats){
        $stats->delete();
        return redirect('stats/');
    }
}
