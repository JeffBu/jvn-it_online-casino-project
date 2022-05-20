<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GameRoom;

class PlayerController extends Controller
{
    public function index()
    {
        $gamerooms = GameRoom::all();
        $data = array(
            'gamerooms' => $gamerooms,
        );
        return view('player.dashboard', $data);
    }

    public function playGame()
    {
        return view('player.sabong');
    }

    public function playBaccarat(Request $request)
    {
        $gameroom = GameRoom::findOrFail($request->game_id);

        return view('player.baccarat_temp', $gameroom);
    }
}
