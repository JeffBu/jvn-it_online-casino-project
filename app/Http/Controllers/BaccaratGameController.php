<?php

namespace App\Http\Controllers;

use App\Models\BaccaratGame;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class BaccaratGameController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return View::make('games.baccarat');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return BaccaratGame::insertGetId([
            'baccarat_game_room_id' => 1,
            'status' => 0,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BaccaratGame  $baccaratGame
     * @return \Illuminate\Http\Response
     */
    public function show(BaccaratGame $baccaratGame)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BaccaratGame  $baccaratGame
     * @return \Illuminate\Http\Response
     */
    public function edit(BaccaratGame $baccaratGame)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BaccaratGame  $baccaratGame
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BaccaratGame $baccaratGame)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BaccaratGame  $baccaratGame
     * @return \Illuminate\Http\Response
     */
    public function destroy(BaccaratGame $baccaratGame)
    {
        //
    }

    public function updateStatus(Request $request)
    {
        $game =  BaccaratGame::findOrFail($request->id);

        return $game->update(['status' => $request->status]);
    }
}
