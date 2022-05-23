<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GameRoom extends Model
{
    use HasFactory;

    protected $fillable = [
        'game_master_id',
        'game_id',
        'feed_source',
        'low_raise_enabled',
        'common_table_enabled',
        'high_stakes_enabled',
        'status'
    ];
}
