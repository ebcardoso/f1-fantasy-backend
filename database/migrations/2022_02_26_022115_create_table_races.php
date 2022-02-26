<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableRaces extends Migration
{
    public function up()
    {
        Schema::create('races', function (Blueprint $table) {
            $table->id();
            $table->foreignId('seasons_id')
                    ->references('id')
                    ->on('seasons');
            $table->string('name');
            $table->string('circuit_name');
            $table->string('country');
            $table->string('url_country_flag');
            $table->string('city');
            $table->string('date');
            $table->integer('order_of_realization');
            $table->integer('status');
            $table->bigInteger('driver_p1_id')->nullable();
            $table->bigInteger('driver_p2_id')->nullable();
            $table->bigInteger('driver_p3_id')->nullable();
            $table->bigInteger('driver_p4_id')->nullable();
            $table->bigInteger('driver_p5_id')->nullable();
            $table->bigInteger('driver_bestlap_id')->nullable();
            $table->bigInteger('driver_driveroftheday_id')->nullable();
            $table->bigInteger('driver_speedtrap_id')->nullable();
            $table->bigInteger('driver_overtakes_id')->nullable();
            $table->bigInteger('constructor_bestpit_id')->nullable();
            $table->integer('num_safetycars')->nullable();
            $table->integer('win_num_of_pits')->nullable();
            $table->integer('win_tyre')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('races');
    }
}
