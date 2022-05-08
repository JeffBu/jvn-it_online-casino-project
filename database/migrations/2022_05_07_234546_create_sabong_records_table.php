<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSabongRecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sabong_records', function (Blueprint $table) {
            $table->id();
            $table->foreignId('game_room_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->tinyInteger('result');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sabong_records');
    }
}
