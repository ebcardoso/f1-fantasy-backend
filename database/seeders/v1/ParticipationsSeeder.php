<?php

namespace Database\Seeders\v1;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class ParticipationsSeeder extends Seeder
{
    public function run()
    {
        //Alfa Romeo
        DB::table('participations')->insert([
            'races_id' => 1,
            'drivers_id' => 3, //Bottas
            'constructors_id' => 1
        ]);
        
        DB::table('participations')->insert([
            'races_id' => 1,
            'drivers_id' => 27, //Zhou
            'constructors_id' => 1
        ]);
        
        //Alpha Tauri
        DB::table('participations')->insert([
            'races_id' => 1,
            'drivers_id' => 5, //Gasly
            'constructors_id' => 2
        ]);
        
        DB::table('participations')->insert([
            'races_id' => 1,
            'drivers_id' => 22, //Tsunoda
            'constructors_id' => 2
        ]);
        
        //Alpine
        DB::table('participations')->insert([
            'races_id' => 1,
            'drivers_id' => 2, //Alonso
            'constructors_id' => 3
        ]);
        
        DB::table('participations')->insert([
            'races_id' => 1,
            'drivers_id' => 14, //Ocon
            'constructors_id' => 3
        ]);
        
        //Aston Martin
        DB::table('participations')->insert([
            'races_id' => 1,
            'drivers_id' => 25, //Vettel
            'constructors_id' => 4
        ]);
        
        DB::table('participations')->insert([
            'races_id' => 1,
            'drivers_id' => 21, //Stroll
            'constructors_id' => 4
        ]);
        
        //Ferrari
        DB::table('participations')->insert([
            'races_id' => 1,
            'drivers_id' => 11, //Leclerc
            'constructors_id' => 5
        ]);
        
        DB::table('participations')->insert([
            'races_id' => 1,
            'drivers_id' => 19, //Sainz
            'constructors_id' => 5
        ]);
        
        //Haas
        DB::table('participations')->insert([
            'races_id' => 1,
            'drivers_id' => 20, //Schumacher
            'constructors_id' => 6
        ]);
        
        DB::table('participations')->insert([
            'races_id' => 1,
            'drivers_id' => 12, //Mazepin
            'constructors_id' => 6
        ]);
        
        //Mercedes
        DB::table('participations')->insert([
            'races_id' => 1,
            'drivers_id' => 18, //Russell
            'constructors_id' => 7
        ]);
        
        DB::table('participations')->insert([
            'races_id' => 1,
            'drivers_id' => 7, //Hamilton
            'constructors_id' => 7
        ]);
        
        //McLaren
        DB::table('participations')->insert([
            'races_id' => 1,
            'drivers_id' => 13, //Norris
            'constructors_id' => 8
        ]);
        
        DB::table('participations')->insert([
            'races_id' => 1,
            'drivers_id' => 17, //Ricciardo
            'constructors_id' => 8
        ]);
        
        //Red Bull
        DB::table('participations')->insert([
            'races_id' => 1,
            'drivers_id' => 24, //Verstappen
            'constructors_id' => 9
        ]);
        
        DB::table('participations')->insert([
            'races_id' => 1,
            'drivers_id' => 15, //Pérez
            'constructors_id' => 9
        ]);
        
        //Williams
        DB::table('participations')->insert([
            'races_id' => 1,
            'drivers_id' => 10, //Latifi
            'constructors_id' => 10
        ]);
        
        DB::table('participations')->insert([
            'races_id' => 1,
            'drivers_id' => 1, //Albon
            'constructors_id' => 10
        ]);
    }
}
