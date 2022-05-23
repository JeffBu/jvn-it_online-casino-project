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
        return View::make('player.baccarat_temp');
    }

    public function sabongGame()
    {
        return View::make('player.sabong');
    }

    public function adminBaccarat()
    {
        return View::make('gamemaster.admin-baccarat_temp');
    }

    public function adminSabong()
    {
        return View::make('admin-sabong_temp');
    }

    public function adminDashboard()
    {
        return View::make('admin-dashboard_temp');
    }

    public function coinsWallet()
    {
        return View::make('coins-wallet_temp');
    }

    public function dashboardPage()
    {
        return View::make('player.dashboard');
    }

    public function loginPage()
    {
        return View::make('auth.login');
    }

    public function registerPage()
    {
        return View::make('auth.register');
    }
    //=============================for tests=============================

}
