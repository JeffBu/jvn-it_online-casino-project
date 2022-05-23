<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GameRoom;
use App\Models\SabongRecords;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class GameMasterController extends Controller
{
    public function index()
    {
        $gamerooms = GameRoom::all();
        $data = array(
            'gamerooms' => $gamerooms,
        );
        return view('gamemaster.dashboard', $data);
    }

    public function createGameRoom(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'feed_source' => 'required'
        ]);

        if($validator->fails()){
            return redirect()->back()
            ->withErrors($validator)
            ->withInput();
        }

        $validated = $validator->valid();

        DB::transaction(function () use($validated) {
            GameRoom::create([
                'game_master_id' => 1,
                'game_id' => $validated['game_id'],
                'feed_source' => $validated['feed_source'],
                'low_raise_enabled' => $validated['low_raise_enabled'] ??  0,
                'common_table_enabled' => $validated['common_table_enabled'] ?? 0,
                'high_stakes_enabled' => $validated['high_stakes_enabled'] ?? 0,
                'status' => 0
            ]);
        });

        return redirect()->route('operator-home');
    }

    public function viewGameRoom(Request $request)
    {
        $gameroom = GameRoom::findOrFail($request->game_room_id);
        if($gameroom->game_id == 1){
            return view('gamemaster.admin-sabong')->with(['gameroom' => $gameroom]);
        }

        return view('gamemaster.admin-baccarat_temp')->with(['gameroom' => $gameroom]);
    }

    public function  updateGameRoomStatus(Request $request)
    {
        $gameroom = GameRoom::findOrFail($request->game_room_id);

        $gameroom->update([
            'status' => $request->status
        ]);

        if($gameroom->save()){
            return 1;
        }


    }

    public function createSabongRecord(Request $request)
    {
        $gameroom = GameRoom::findorFail($request->game_room_id);

        SabongRecords::create([
            'game_room_id' => $gameroom->id,
            'result' => $request->result
        ]);

        return 1;
    }
}
