<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlayerController extends Controller
{
    public function index()
    {
        $data = array();
        return view('player.dashboard', $data);
    }

    public function playGame()
    {
        return view('player.sabong');
    }
}
