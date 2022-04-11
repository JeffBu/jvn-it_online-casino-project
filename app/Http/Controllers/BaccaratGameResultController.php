<?php

namespace App\Http\Controllers;

use App\Models\BaccaratGameResult;
use Carbon\Carbon;
use Illuminate\Http\Request;

class BaccaratGameResultController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return BaccaratGameResult::insertGetId([
            'baccarat_game_id' => $request->id,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BaccaratGameResult  $baccaratGameResult
     * @return \Illuminate\Http\Response
     */
    public function show(BaccaratGameResult $baccaratGameResult)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BaccaratGameResult  $baccaratGameResult
     * @return \Illuminate\Http\Response
     */
    public function edit(BaccaratGameResult $baccaratGameResult)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BaccaratGameResult  $baccaratGameResult
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BaccaratGameResult $baccaratGameResult)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BaccaratGameResult  $baccaratGameResult
     * @return \Illuminate\Http\Response
     */
    public function destroy(BaccaratGameResult $baccaratGameResult)
    {
        //
    }

    public function updateGameResult(Request $request)
    {
        $baccaratGameResult = BaccaratGameResult::findOrFail($request->id);
        return $baccaratGameResult->update([$request->column => $request->data]);
    }

    public function getGameResult(Request $request)
    {
        return BaccaratGameResult::where('baccarat_game_id' , $request->id)->latest()->first();
    }
}
