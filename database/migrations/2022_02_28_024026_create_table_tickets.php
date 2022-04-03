<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableTickets extends Migration
{
    public function up()
    {
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();
            $table->foreignId('races_id')
                    ->references('id')
                    ->on('races');
            $table->foreignId('user_id')
                    ->references('id')
                    ->on('users');
            $table->bigInteger('driver_p1_id')->nullable();
            $table->bigInteger('driver_p2_id')->nullable();
            $table->bigInteger('driver_p3_id')->nullable();
            $table->bigInteger('driver_p4_id')->nullable();
            $table->bigInteger('driver_p5_id')->nullable();
            $table->bigInteger('driver_bestlap_id')->nullable();
            $table->bigInteger('driver_oftheday_id')->nullable();
            $table->bigInteger('driver_speedtrap_id')->nullable();
            $table->bigInteger('driver_overtakes_id')->nullable();
            $table->bigInteger('constructor_bestpit_id')->nullable();
            $table->integer('num_safetycars')->nullable();
            $table->integer('win_num_of_pits')->nullable();
            $table->integer('win_tyre')->nullable();
            $table->integer('num_dnf')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('tickets');
    }
}
