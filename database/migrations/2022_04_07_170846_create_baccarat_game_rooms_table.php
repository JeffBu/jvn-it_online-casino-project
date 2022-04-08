<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBaccaratGameRoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('baccarat_game_rooms', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignId('game_room_id')->onUpdate('cascade')->onDelete('cascade')->nullable();
            $table->tinyInteger('stakes_type')->default(1);
            $table->tinyInteger('max_deals')->default(10);
            $table->tinyInteger('current_deal')->default(1);
            $table->bigInteger('total_players')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('baccarat_game_rooms');
    }
}
