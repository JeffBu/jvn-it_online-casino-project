<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BaccaratGameResult extends Model
{
    use HasFactory;

    protected $table = 'baccarat_game_results';

    protected $fillable = [
        'baccarat_game_id',
        'player_hand',
        'banker_hand',
        'result',
        'is_nat_9',
        'is_nat_6'
    ];


}
