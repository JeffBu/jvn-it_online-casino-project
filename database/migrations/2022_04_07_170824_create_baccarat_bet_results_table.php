<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBaccaratBetResultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('baccarat_bet_results', function (Blueprint $table) {
            $table->id();
            $table->foreignId('baccarat_game_id')->nullable();
            $table->foreignId('user_id')->nullable();
            $table->float('bet');
            $table->float('winnings')->default(0);
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
        Schema::dropIfExists('baccarat_bet_results');
    }
}
