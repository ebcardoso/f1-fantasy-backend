<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableFantasyMember extends Migration
{
    public function up()
    {
        Schema::create('fantasy_league_member', function (Blueprint $table) {
            $table->id();
            $table->foreignId('fantasy_league_id')
                    ->references('id')
                    ->on('fantasy_league');
            $table->foreignId('user_id')
                    ->references('id')
                    ->on('users');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('fantasy_league_member');
    }
}
