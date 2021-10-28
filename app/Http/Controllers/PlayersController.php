<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Player;

class PlayersController extends Controller
{
    public function __construct(Request $request)
	{
		$this->request = $request;
	}

    public function index(){
        $player = Player::all();
        return view('player', ['player' => $player]);
    }

    public function addplayer(){
        if($this->request->method() == 'POST'){
            $alert = request() -> validate([
                'fullname' => 'required',
                'age' => 'required|numeric',
                'height' => 'required|numeric',
                'weight' => 'required|numeric'
            ]);

            $players = new Player;
            $players->fullname = $this->request->get('fullname');
            $players->age = $this->request->get('age');
            $players->height = $this->request->get('height');
            $players->weight = $this->request->get('weight');
            if($players -> save()){
                echo 'Success';
            }
        }
        return view('addplayer');
    }

    public function editplayer(Player $players){
        if($this->request->method() == 'POST'){
            $alert = request() -> validate([
                'fullname' => 'required',
                'age' => 'required|numeric',
                'height' => 'required|numeric',
                'weight' => 'required|numeric'
            ]);

            $players->fullname = $this->request->get('fullname');
            $players->age = $this->request->get('age');
            $players->height = $this->request->get('height');
            $players->weight = $this->request->get('weight');
            if($players -> save()){
                return redirect('/');
            }
        }
        return view('editplayer', ['players' => $players]);
    }

    public function destroy(Player $players){
        $players->delete();
        return redirect('/');
    }
}
