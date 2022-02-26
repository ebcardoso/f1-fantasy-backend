<?php

namespace Database\Seeders\v1;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class SeasonsSeeder extends Seeder
{
    public function run()
    {
        DB::table('seasons')->insert([
            'name' => 'F1-2022',
            'status' => 1,
            'created_at' => Carbon::now(new \DateTimeZone('America/Sao_Paulo'))->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now(new \DateTimeZone('America/Sao_Paulo'))->format('Y-m-d H:i:s')
        ]);
    }
}
