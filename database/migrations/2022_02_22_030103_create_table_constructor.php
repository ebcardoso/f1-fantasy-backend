<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableConstructor extends Migration
{
    public function up()
    {
        Schema::create('constructor', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('founded_in');
            $table->string('country');
            $table->string('engine');
            $table->string('color_primary');
            $table->string('color_primary');
            $table->string('url_logo')->nullable();
            $table->string('url_icon')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('constructor');
    }
}
