<?php

namespace App\Http\Controllers;

use App\Models\BaccaratGame;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class HomeController extends Controller
{
    public function index()
    {
        return View::make('main.landing_page');
    }

    public function getCurrentGame(Request $request)
    {
        $room_id = $request->room_id;

        $current_game = BaccaratGame::where('baccarat_game_room_id', 1)->latest()->first();

        return $current_game;
    }

    //=============================for tests=============================
    public function baccaratGame()
    {
        return View::make('main.baccarat_temp');
    }

    public function adminBaccarat()
    {
        return View::make('main.admin-baccarat_temp');
    }
    //=============================for tests=============================

}
