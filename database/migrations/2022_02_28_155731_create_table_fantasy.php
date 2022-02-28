<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableFantasy extends Migration
{
    public function up()
    {
        Schema::create('fantasy_league', function (Blueprint $table) {
            $table->id();
            $table->foreignId('seasons_id')
                    ->references('id')
                    ->on('seasons');
            $table->string('name');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('fantasy_league');
    }
}
