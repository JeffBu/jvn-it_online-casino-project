<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class BaccaratGame extends Model
{
    use HasFactory;

    protected $table = 'baccarat_games';

    protected $fillable = [
        'baccarat_game_room_id',
        'status'
    ];

    protected $date = [
        'deleted_at'
    ];

    public function game_room() : HasOne
    {
        return $this->hasOne(BaccaratGameRoom::class);
    }
}
