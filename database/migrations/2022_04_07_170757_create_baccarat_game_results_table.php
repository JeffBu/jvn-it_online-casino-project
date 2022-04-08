<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBaccaratGameResultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('baccarat_game_results', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignId('baccarat_game_id')->nullable();
            $table->string('player_hand');
            $table->string('banker_hand');
            $table->tinyInteger('result');
            $table->boolean('is_nat_9')->nullable();
            $table->boolean('is_nat_6')->nullable();
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
        Schema::dropIfExists('baccarat_game_results');
    }
}
