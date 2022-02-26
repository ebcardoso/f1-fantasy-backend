<?php

namespace Database\Seeders\v1;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class DriversSeeder extends Seeder
{
    public function run()
    {
        DB::table('drivers')->insert([
            'first_name' => 'Alexander',
            'last_name' => 'Albon',
            'birth_date' => '1996-03-23',
            'name_abbreviation' => 'ALB',
            'number' => '23',
            'country' => 'Tailândia',
            'country_abbreviation' => 'TAI',
            'url_country_flag' => 'https://cdn.countryflags.com/thumbs/thailand/flag-button-round-250.png',
            'url_photo' => 'https://reverent-galileo-c1a4aa.netlify.app/Images/albprofile.png',
            'created_at' => Carbon::now(new \DateTimeZone('America/Sao_Paulo'))->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now(new \DateTimeZone('America/Sao_Paulo'))->format('Y-m-d H:i:s')
        ]);

        DB::table('drivers')->insert([
            'first_name' => 'Fernando',
            'last_name' => 'Alonso',
            'birth_date' => '1981-07-29',
            'name_abbreviation' => 'ALO',
            'number' => '14',
            'country' => 'Espanha',
            'country_abbreviation' => 'ESP',
            'url_country_flag' => 'https://cdn.countryflags.com/thumbs/spain/flag-button-round-250.png',
            'url_photo' => 'https://e0.365dm.com/f1/drivers/256x256/h_full_6.png',
            'created_at' => Carbon::now(new \DateTimeZone('America/Sao_Paulo'))->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now(new \DateTimeZone('America/Sao_Paulo'))->format('Y-m-d H:i:s')
        ]);

        DB::table('drivers')->insert([
            'first_name' => 'Valtteri',
            'last_name' => 'Bottas',
            'birth_date' => '1989-08-28',
            'name_abbreviation' => 'BOT',
            'number' => '77',
            'country' => 'Finlância',
            'country_abbreviation' => 'FIN',
            'url_country_flag' => 'https://cdn.countryflags.com/thumbs/finland/flag-button-round-250.png',
            'url_photo' => 'https://www.f1fantasytracker.com/Images/Drivers/2019/Bottas.png',
            'created_at' => Carbon::now(new \DateTimeZone('America/Sao_Paulo'))->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now(new \DateTimeZone('America/Sao_Paulo'))->format('Y-m-d H:i:s')
        ]);

        DB::table('drivers')->insert([
            'first_name' => 'Pietro',
            'last_name' => 'Fittipaldi',
            'birth_date' => '1996-06-25',
            'name_abbreviation' => 'FIT',
            'number' => '51',
            'country' => 'Brasil',
            'country_abbreviation' => 'BRA',
            'url_country_flag' => 'https://cdn.countryflags.com/thumbs/brazil/flag-button-round-250.png',
            'url_photo' => 'https://images.motorsportstats.com/large/driverProfilePicture/driverProfilePicture-67c0c49a-2d62-4418-8452-dad452565534.jpg',
            'created_at' => Carbon::now(new \DateTimeZone('America/Sao_Paulo'))->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now(new \DateTimeZone('America/Sao_Paulo'))->format('Y-m-d H:i:s')
        ]);

        DB::table('drivers')->insert([
            'first_name' => 'Pierre',
            'last_name' => 'Gasly',
            'birth_date' => '1996-02-07',
            'name_abbreviation' => 'GAS',
            'number' => '10',
            'country' => 'França',
            'country_abbreviation' => 'FRA',
            'url_country_flag' => 'https://cdn.countryflags.com/thumbs/france/flag-button-round-250.png',
            'url_photo' => 'https://www.f1fantasytracker.com/Images/Drivers/Gasly.png',
            'created_at' => Carbon::now(new \DateTimeZone('America/Sao_Paulo'))->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now(new \DateTimeZone('America/Sao_Paulo'))->format('Y-m-d H:i:s')
        ]);

        DB::table('drivers')->insert([
            'first_name' => 'Antonio',
            'last_name' => 'Giovinazzi',
            'birth_date' => '1993-12-14',
            'name_abbreviation' => 'GIO',
            'number' => '99',
            'country' => 'Itália',
            'country_abbreviation' => 'ITA',
            'url_country_flag' => 'https://cdn.countryflags.com/thumbs/italy/flag-button-round-250.png',
            'url_photo' => 'https://www.f1fantasytracker.com/Images/Drivers/Giovinazzi.png',
            'created_at' => Carbon::now(new \DateTimeZone('America/Sao_Paulo'))->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now(new \DateTimeZone('America/Sao_Paulo'))->format('Y-m-d H:i:s')
        ]);

        DB::table('drivers')->insert([
            'first_name' => 'Lewis',
            'last_name' => 'Hamilton',
            'birth_date' => '1985-01-07',
            'name_abbreviation' => 'HAM',
            'number' => '44',
            'country' => 'Reino Unido',
            'country_abbreviation' => 'GBR',
            'url_country_flag' => 'https://cdn.countryflags.com/thumbs/united-kingdom/flag-button-round-250.png',
            'url_photo' => 'https://www.f1fantasytracker.com/Images/Drivers/2020/Hamilton.png',
            'created_at' => Carbon::now(new \DateTimeZone('America/Sao_Paulo'))->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now(new \DateTimeZone('America/Sao_Paulo'))->format('Y-m-d H:i:s')
        ]);

        DB::table('drivers')->insert([
            'first_name' => 'Nico',
            'last_name' => 'Hulkenberg',
            'birth_date' => '1987-08-19',
            'name_abbreviation' => 'HUL',
            'number' => '27',
            'country' => 'Alemanha',
            'country_abbreviation' => 'ALE',
            'url_country_flag' => 'https://cdn.countryflags.com/thumbs/germany/flag-button-round-250.png',
            'url_photo' => 'https://www.ilblogdellosportivo.it/wp-content/uploads/2016/02/hulkenberg.png',
            'created_at' => Carbon::now(new \DateTimeZone('America/Sao_Paulo'))->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now(new \DateTimeZone('America/Sao_Paulo'))->format('Y-m-d H:i:s')
        ]);

        DB::table('drivers')->insert([
            'first_name' => 'Robert',
            'last_name' => 'Kubica',
            'birth_date' => '1984-12-07',
            'name_abbreviation' => 'KUB',
            'number' => '88',
            'country' => 'Polônia',
            'country_abbreviation' => 'POL',
            'url_country_flag' => 'https://cdn.countryflags.com/thumbs/poland/flag-button-round-250.png',
            'url_photo' => 'https://e0.365dm.com/f1/drivers/h_full_803.png',
            'created_at' => Carbon::now(new \DateTimeZone('America/Sao_Paulo'))->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now(new \DateTimeZone('America/Sao_Paulo'))->format('Y-m-d H:i:s')
        ]);

        DB::table('drivers')->insert([
            'first_name' => 'Nicholas',
            'last_name' => 'Latifi',
            'birth_date' => '1995-06-29',
            'name_abbreviation' => 'LAT',
            'number' => '6',
            'country' => 'Canadá',
            'country_abbreviation' => 'CAN',
            'url_country_flag' => 'https://cdn.countryflags.com/thumbs/canada/flag-button-round-250.png',
            'url_photo' => 'https://www.f1fantasytracker.com/Images/Drivers/Latifi.png',
            'created_at' => Carbon::now(new \DateTimeZone('America/Sao_Paulo'))->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now(new \DateTimeZone('America/Sao_Paulo'))->format('Y-m-d H:i:s')
        ]);

        DB::table('drivers')->insert([
            'first_name' => 'Charles',
            'last_name' => 'Leclerc',
            'birth_date' => '1997-10-16',
            'name_abbreviation' => 'LEC',
            'number' => '16',
            'country' => 'Monaco',
            'country_abbreviation' => 'MON',
            'url_country_flag' => 'https://cdn.countryflags.com/thumbs/monaco/flag-button-round-250.png',
            'url_photo' => 'https://www.f1fantasytracker.com/Images/Drivers/Leclerc.png',
            'created_at' => Carbon::now(new \DateTimeZone('America/Sao_Paulo'))->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now(new \DateTimeZone('America/Sao_Paulo'))->format('Y-m-d H:i:s')
        ]);

        DB::table('drivers')->insert([
            'first_name' => 'Nikita',
            'last_name' => 'Mazepin',
            'birth_date' => '1999-03-02',
            'name_abbreviation' => 'MAZ',
            'number' => '9',
            'country' => 'Rússia',
            'country_abbreviation' => 'RUS',
            'url_country_flag' => 'https://cdn.countryflags.com/thumbs/russia/flag-button-round-250.png',
            'url_photo' => 'https://www.f1fantasytracker.com/Images/Drivers/Mazepin.png',
            'created_at' => Carbon::now(new \DateTimeZone('America/Sao_Paulo'))->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now(new \DateTimeZone('America/Sao_Paulo'))->format('Y-m-d H:i:s')
        ]);

        DB::table('drivers')->insert([
            'first_name' => 'Lando',
            'last_name' => 'Norris',
            'birth_date' => '1999-11-13',
            'name_abbreviation' => 'NOR',
            'number' => '4',
            'country' => 'Reino Unido',
            'country_abbreviation' => 'GBR',
            'url_country_flag' => 'https://cdn.countryflags.com/thumbs/united-kingdom/flag-button-round-250.png',
            'url_photo' => 'https://www.f1fantasytracker.com/Images/Drivers/Norris.png',
            'created_at' => Carbon::now(new \DateTimeZone('America/Sao_Paulo'))->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now(new \DateTimeZone('America/Sao_Paulo'))->format('Y-m-d H:i:s')
        ]);

        DB::table('drivers')->insert([
            'first_name' => 'Esteban',
            'last_name' => 'Ocon',
            'birth_date' => '1996-09-17',
            'name_abbreviation' => 'OCO',
            'number' => '31',
            'country' => 'França',
            'country_abbreviation' => 'FRA',
            'url_country_flag' => 'https://cdn.countryflags.com/thumbs/france/flag-button-round-250.png',
            'url_photo' => 'https://e1.365dm.com/f1/drivers/256x256/h_full_1471.png',
            'created_at' => Carbon::now(new \DateTimeZone('America/Sao_Paulo'))->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now(new \DateTimeZone('America/Sao_Paulo'))->format('Y-m-d H:i:s')
        ]);

        DB::table('drivers')->insert([
            'first_name' => 'Sergio',
            'last_name' => 'Pérez',
            'birth_date' => 'PER',
            'name_abbreviation' => '1990-01-26',
            'number' => '11',
            'country' => 'Mexico',
            'country_abbreviation' => 'MEX',
            'url_country_flag' => 'https://cdn.countryflags.com/thumbs/mexico/flag-button-round-250.png',
            'url_photo' => 'https://e1.365dm.com/f1/drivers/256x256/h_full_902.png',
            'created_at' => Carbon::now(new \DateTimeZone('America/Sao_Paulo'))->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now(new \DateTimeZone('America/Sao_Paulo'))->format('Y-m-d H:i:s')
        ]);

        DB::table('drivers')->insert([
            'first_name' => 'Oscar',
            'last_name' => 'Piastri',
            'birth_date' => '2001-04-06',
            'name_abbreviation' => 'PIA',
            'number' => '00',
            'country' => 'Austrália',
            'country_abbreviation' => 'AUS',
            'url_country_flag' => 'https://cdn.countryflags.com/thumbs/australia/flag-button-round-250.png',
            'url_photo' => 'https://pbs.twimg.com/profile_images/1374760405327880193/06idc8V6_400x400.jpg',
            'created_at' => Carbon::now(new \DateTimeZone('America/Sao_Paulo'))->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now(new \DateTimeZone('America/Sao_Paulo'))->format('Y-m-d H:i:s')
        ]);

        DB::table('drivers')->insert([
            'first_name' => 'Daniel',
            'last_name' => 'Ricciardo',
            'birth_date' => '1989-07-01',
            'name_abbreviation' => 'RIC',
            'number' => '3',
            'country' => 'Austrália',
            'country_abbreviation' => 'AUS',
            'url_country_flag' => 'https://cdn.countryflags.com/thumbs/australia/flag-button-round-250.png',
            'url_photo' => 'https://www.thesportsdb.com/images/media/player/cutout/j6uc0d1623322593.png',
            'created_at' => Carbon::now(new \DateTimeZone('America/Sao_Paulo'))->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now(new \DateTimeZone('America/Sao_Paulo'))->format('Y-m-d H:i:s')
        ]);

        DB::table('drivers')->insert([
            'first_name' => 'George',
            'last_name' => 'Russell',
            'birth_date' => '1998-02-15',
            'name_abbreviation' => 'RUS',
            'number' => '63',
            'country' => 'Reino Unido',
            'country_abbreviation' => 'GBR',
            'url_country_flag' => 'https://cdn.countryflags.com/thumbs/united-kingdom/flag-button-round-250.png',
            'url_photo' => 'https://www.f1fantasytracker.com/Images/Drivers/Russell.png',
            'created_at' => Carbon::now(new \DateTimeZone('America/Sao_Paulo'))->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now(new \DateTimeZone('America/Sao_Paulo'))->format('Y-m-d H:i:s')
        ]);

        DB::table('drivers')->insert([
            'first_name' => 'Carlos',
            'last_name' => 'Sainz',
            'birth_date' => '1994-09-01',
            'name_abbreviation' => 'SAI',
            'number' => '55',
            'country' => 'Espanha',
            'country_abbreviation' => 'ESP',
            'url_country_flag' => 'https://cdn.countryflags.com/thumbs/spain/flag-button-round-250.png',
            'url_photo' => 'https://www.f1fantasytracker.com/Images/Drivers/Sainz.png',
            'created_at' => Carbon::now(new \DateTimeZone('America/Sao_Paulo'))->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now(new \DateTimeZone('America/Sao_Paulo'))->format('Y-m-d H:i:s')
        ]);

        DB::table('drivers')->insert([
            'first_name' => 'Mick',
            'last_name' => 'Schumacher',
            'birth_date' => '1999-03-22',
            'name_abbreviation' => 'MSC',
            'number' => '47',
            'country' => 'Alemanha',
            'country_abbreviation' => 'ALE',
            'url_country_flag' => 'https://cdn.countryflags.com/thumbs/germany/flag-button-round-250.png',
            'url_photo' => 'https://e1.365dm.com/f1/drivers/256x256/h_full_1517.png',
            'created_at' => Carbon::now(new \DateTimeZone('America/Sao_Paulo'))->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now(new \DateTimeZone('America/Sao_Paulo'))->format('Y-m-d H:i:s')
        ]);

        DB::table('drivers')->insert([
            'first_name' => 'Lance',
            'last_name' => 'Stroll',
            'birth_date' => '1998-10-29',
            'name_abbreviation' => 'STR',
            'number' => '18',
            'country' => 'Canadá',
            'country_abbreviation' => 'CAN',
            'url_country_flag' => 'https://cdn.countryflags.com/thumbs/canada/flag-button-round-250.png',
            'url_photo' => 'https://www.f1fantasytracker.com/Images/Drivers/Stroll.png',
            'created_at' => Carbon::now(new \DateTimeZone('America/Sao_Paulo'))->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now(new \DateTimeZone('America/Sao_Paulo'))->format('Y-m-d H:i:s')
        ]);

        DB::table('drivers')->insert([
            'first_name' => 'Yuki',
            'last_name' => 'Tsunoda',
            'birth_date' => '2000-05-11',
            'name_abbreviation' => 'TSU',
            'number' => '22',
            'country' => 'Japão',
            'country_abbreviation' => 'JAP',
            'url_country_flag' => 'https://cdn.countryflags.com/thumbs/japan/flag-button-round-250.png',
            'url_photo' => 'https://www.f1fantasytracker.com/Images/Drivers/Tsunoda.png',
            'created_at' => Carbon::now(new \DateTimeZone('America/Sao_Paulo'))->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now(new \DateTimeZone('America/Sao_Paulo'))->format('Y-m-d H:i:s')
        ]);

        DB::table('drivers')->insert([
            'first_name' => 'Stoffel',
            'last_name' => 'Vandoorne',
            'birth_date' => '1992-03-26',
            'name_abbreviation' => 'VAN',
            'number' => '2',
            'country' => 'Bélgica',
            'country_abbreviation' => 'BEL',
            'url_country_flag' => 'https://cdn.countryflags.com/thumbs/belgium/flag-button-round-250.png',
            'url_photo' => 'https://a.espncdn.com/combiner/i?img=/i/headshots/rpm/players/full/4626.png',
            'created_at' => Carbon::now(new \DateTimeZone('America/Sao_Paulo'))->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now(new \DateTimeZone('America/Sao_Paulo'))->format('Y-m-d H:i:s')
        ]);

        DB::table('drivers')->insert([
            'first_name' => 'Max',
            'last_name' => 'Verstappen',
            'birth_date' => '1997-09-30',
            'name_abbreviation' => 'VER',
            'number' => '1',
            'country' => 'Holanda',
            'country_abbreviation' => 'HOL',
            'url_country_flag' => 'https://cdn.countryflags.com/thumbs/netherlands/flag-button-round-250.png',
            'url_photo' => 'https://www.f1fantasytracker.com/Images/Drivers/Verstappen.png',
            'created_at' => Carbon::now(new \DateTimeZone('America/Sao_Paulo'))->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now(new \DateTimeZone('America/Sao_Paulo'))->format('Y-m-d H:i:s')
        ]);

        DB::table('drivers')->insert([
            'first_name' => 'Sebastian',
            'last_name' => 'Vettel',
            'birth_date' => '1987-07-03',
            'name_abbreviation' => 'VET',
            'number' => '5',
            'country' => 'Alemanha',
            'country_abbreviation' => 'ALE',
            'url_country_flag' => 'https://cdn.countryflags.com/thumbs/germany/flag-button-round-250.png',
            'url_photo' => 'https://a.espncdn.com/combiner/i?img=/i/headshots/rpm/players/full/864.png',
            'created_at' => Carbon::now(new \DateTimeZone('America/Sao_Paulo'))->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now(new \DateTimeZone('America/Sao_Paulo'))->format('Y-m-d H:i:s')
        ]);

        DB::table('drivers')->insert([
            'first_name' => 'Nyck',
            'last_name' => 'de Vries',
            'birth_date' => '1995-02-06',
            'name_abbreviation' => 'VRI',
            'number' => '21',
            'country' => 'Holanda',
            'country_abbreviation' => 'HOL',
            'url_country_flag' => 'https://cdn.countryflags.com/thumbs/netherlands/flag-button-round-250.png',
            'url_photo' => 'https://cdn-1.motorsport.com/images/amp/0ZRNoNN0/s1000/formula-e-mercedes-benz-launch-2.jpg',
            'created_at' => Carbon::now(new \DateTimeZone('America/Sao_Paulo'))->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now(new \DateTimeZone('America/Sao_Paulo'))->format('Y-m-d H:i:s')
        ]);

        DB::table('drivers')->insert([
            'first_name' => 'Guanyu',
            'last_name' => 'Zhou',
            'birth_date' => '1999-05-30',
            'name_abbreviation' => 'ZHO',
            'number' => '24',
            'country' => 'China',
            'country_abbreviation' => 'CHN',
            'url_country_flag' => 'https://cdn.countryflags.com/thumbs/china/flag-button-round-250.png',
            'url_photo' => 'https://cdn-1.motorsport.com/images/amp/0ZRNoNN0/s1000/formula-e-mercedes-benz-launch-2.jpg',
            'created_at' => Carbon::now(new \DateTimeZone('America/Sao_Paulo'))->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now(new \DateTimeZone('America/Sao_Paulo'))->format('Y-m-d H:i:s')
        ]);
    }
}
