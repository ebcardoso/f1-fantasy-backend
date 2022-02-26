<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\v1\ConstructorsSeeder;
use Database\Seeders\v1\DriversSeeder;
use Database\Seeders\v1\SeasonsSeeder;
use Database\Seeders\v1\RacesSeeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            ConstructorsSeeder::class,
            DriversSeeder::class,
            SeasonsSeeder::class,
            RacesSeeder::class,
        ]);
    }
}
