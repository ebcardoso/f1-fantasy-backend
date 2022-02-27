<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableParticipations extends Migration
{
    public function up()
    {
        Schema::create('participations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('drivers_id')
                    ->references('id')
                    ->on('drivers');
            $table->foreignId('constructors_id')
                    ->references('id')
                    ->on('constructors');
            $table->foreignId('races_id')
                    ->references('id')
                    ->on('races');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('participations');
    }
}
