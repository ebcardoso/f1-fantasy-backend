<?php

namespace Database\Seeders\v1;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class ConstructorsSeeder extends Seeder
{
    public function run()
    {
        DB::table('constructors')->insert([
            'name' => 'Alfa Romeo' ,
            'country' => 'ITA',
            'founded_in' => '2019',
            'engine' => 'Ferari',
            'color_primary' => '#C22636',
            'color_secondary' => '#01804F',
            'url_logo' => 'https://www.razaoautomovel.com/wp-content/uploads/2015/11/alfa-romeo.png',
            'url_icon' => 'https://www.razaoautomovel.com/wp-content/uploads/2015/11/alfa-romeo.png',
            'created_at' => Carbon::now(new \DateTimeZone('America/Sao_Paulo'))->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now(new \DateTimeZone('America/Sao_Paulo'))->format('Y-m-d H:i:s')
        ]);
        
        DB::table('constructors')->insert([
            'name' => 'Alpha Tauri' ,
            'country' => 'ITA',
            'founded_in' => '2020',
            'engine' => 'Red Bull',
            'color_primary' => '#2B4562	',
            'color_secondary' => '#FFFFFF',
            'url_logo' => 'https://upload.wikimedia.org/wikipedia/pt/archive/8/8b/20210802203849%21Logotipo_da_Scuderia_AlphaTauri.png',
            'url_icon' => 'https://live.planetf1.com/content/images/uploads/teams/profile/2020/21462.png',
            'created_at' => Carbon::now(new \DateTimeZone('America/Sao_Paulo'))->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now(new \DateTimeZone('America/Sao_Paulo'))->format('Y-m-d H:i:s')
        ]);

        DB::table('constructors')->insert([
            'name' => 'Alpine' ,
            'country' => 'FRA',
            'founded_in' => '2021',
            'engine' => 'Renault',
            'color_primary' => '#0090FF',
            'color_secondary' => '#F596C8',
            'url_logo' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/3/32/Alpine_logo.png/640px-Alpine_logo.png',
            'url_icon' => 'https://live.planetf1.com/content/images/uploads/teams/profile/2020/21566.png',
            'created_at' => Carbon::now(new \DateTimeZone('America/Sao_Paulo'))->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now(new \DateTimeZone('America/Sao_Paulo'))->format('Y-m-d H:i:s')
        ]);
        
        DB::table('constructors')->insert([
            'name' => 'Aston Martin' ,
            'country' => 'UK',
            'founded_in' => '2021',
            'engine' => 'Mercedes',
            'color_primary' => '#156E48',
            'color_secondary' => '#000000',
            'url_logo' => 'https://logoeps.com/wp-content/uploads/2013/07/aston-martin-eps-vector-logo.png',
            'url_icon' => 'https://logoeps.com/wp-content/uploads/2013/07/aston-martin-eps-vector-logo.png',
            'created_at' => Carbon::now(new \DateTimeZone('America/Sao_Paulo'))->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now(new \DateTimeZone('America/Sao_Paulo'))->format('Y-m-d H:i:s')
        ]);

        DB::table('constructors')->insert([
            'name' => 'Ferrari' ,
            'country' => 'ITA',
            'founded_in' => '1950',
            'engine' => 'Ferrari',
            'color_primary' => '#ED1C24',
            'color_secondary' => '#FFF200',
            'url_logo' => 'https://www.voltperformance.com.br/imgsite/carros/ferrari-logo.png',
            'url_icon' => 'https://www.voltperformance.com.br/imgsite/carros/ferrari-logo.png',
            'created_at' => Carbon::now(new \DateTimeZone('America/Sao_Paulo'))->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now(new \DateTimeZone('America/Sao_Paulo'))->format('Y-m-d H:i:s')
        ]);

        DB::table('constructors')->insert([
            'name' => 'Haas' ,
            'country' => 'USA',
            'founded_in' => '2016',
            'engine' => 'Ferrari',
            'color_primary' => '#FFFFFF',
            'color_secondary' => '#FFFFFF',
            'url_logo' => 'https://www.kindpng.com/picc/m/410-4101631_file-haas-f1-team-logo-svg-wikipedia-formula.png',
            'url_icon' => 'http://as01.epimg.net/img/comunes/fotos/fichas/equipos/large/4277.png',
            'created_at' => Carbon::now(new \DateTimeZone('America/Sao_Paulo'))->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now(new \DateTimeZone('America/Sao_Paulo'))->format('Y-m-d H:i:s')
        ]);

        DB::table('constructors')->insert([
            'name' => 'Mercedes' ,
            'country' => 'GER',
            'founded_in' => '2010',
            'engine' => 'Mercedes',
            'color_primary' => '#949398',
            'color_secondary' => '#03BFB5',
            'url_logo' => 'https://www.kindpng.com/picc/m/142-1427087_mercedes-logo-png-transparent-png.png',
            'url_icon' => 'https://www.kindpng.com/picc/m/142-1427087_mercedes-logo-png-transparent-png.png',
            'created_at' => Carbon::now(new \DateTimeZone('America/Sao_Paulo'))->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now(new \DateTimeZone('America/Sao_Paulo'))->format('Y-m-d H:i:s')
        ]);

        DB::table('constructors')->insert([
            'name' => 'McLaren' ,
            'country' => 'UK',
            'founded_in' => '1963',
            'engine' => 'Mercedes',
            'color_primary' => '#FF7B08',
            'color_secondary' => '#000000',
            'url_logo' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/e/ed/McLaren_Automotive_logo.svg/1920px-McLaren_Automotive_logo.svg.png',
            'url_icon' => 'http://assets.stickpng.com/thumbs/580b57fcd9996e24bc43c492.png',
            'created_at' => Carbon::now(new \DateTimeZone('America/Sao_Paulo'))->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now(new \DateTimeZone('America/Sao_Paulo'))->format('Y-m-d H:i:s')
        ]);
        
        DB::table('constructors')->insert([
            'name' => 'Red Bull' ,
            'country' => 'Austria',
            'founded_in' => '2005',
            'engine' => 'Red Bull',
            'color_primary' => '#000B8D',
            'color_secondary' => 'E21B4D',
            'url_logo' => 'https://upload.wikimedia.org/wikipedia/pt/archive/c/c6/20220211230033%21Logotipo_da_Red_Bull_Racing.png',
            'url_icon' => 'https://pimpmycarroca.com/wp-content/uploads/2019/10/logo-red-bull.png',
            'created_at' => Carbon::now(new \DateTimeZone('America/Sao_Paulo'))->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now(new \DateTimeZone('America/Sao_Paulo'))->format('Y-m-d H:i:s')
        ]);
        
        DB::table('constructors')->insert([
            'name' => 'Williams' ,
            'country' => 'UK',
            'founded_in' => '1978',
            'engine' => 'Mercedes',
            'color_primary' => '#0082FA',
            'color_secondary' => '#0082FA',
            'url_logo' => 'https://motorsportengineer.net/wp-content/uploads/2021/01/williams-racing_stacked_rgb-1024x323-1.png',
            'url_icon' => 'https://soymotor.com/sites/default/files/imagenes/equipo/logo-williams-f1-2021.png',
            'created_at' => Carbon::now(new \DateTimeZone('America/Sao_Paulo'))->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now(new \DateTimeZone('America/Sao_Paulo'))->format('Y-m-d H:i:s')
        ]);
    }
}
