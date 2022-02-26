<?php

namespace Database\Seeders\v1;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class RacesSeeder extends Seeder
{
    public function run()
    {
        DB::table('races')->insert([
            'seasons_id' => '1',
            'name' => 'GP Bahrain',
            'circuit_name' => 'Bahrain International Circuit',
            'country' => 'Bahrain',
            'url_country_flag' => 'https://cdn.countryflags.com/thumbs/bahrain/flag-button-round-250.png',
            'city' => 'Sakhir',
            'date' => '2022-03-20',
            'order_of_realization' => '1',
            'status' => '1',
            'created_at' => Carbon::now(new \DateTimeZone('America/Sao_Paulo'))->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now(new \DateTimeZone('America/Sao_Paulo'))->format('Y-m-d H:i:s')
        ]);

        DB::table('races')->insert([
            'seasons_id' => '1',
            'name' => 'GP Arábia Saudita',
            'circuit_name' => 'Jeddah Corniche Circuit',
            'country' => 'Arábia Saudita',
            'url_country_flag' => 'https://cdn.countryflags.com/thumbs/saudi-arabia/flag-button-round-250.png',
            'city' => 'Jeddah',
            'date' => '2022-03-27',
            'order_of_realization' => '2',
            'status' => '1',
            'created_at' => Carbon::now(new \DateTimeZone('America/Sao_Paulo'))->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now(new \DateTimeZone('America/Sao_Paulo'))->format('Y-m-d H:i:s')
        ]);

        DB::table('races')->insert([
            'seasons_id' => '1',
            'name' => 'GP Austrália',
            'circuit_name' => 'Albert Park Circuit',
            'country' => 'Austrália',
            'url_country_flag' => 'https://cdn.countryflags.com/thumbs/australia/flag-button-round-250.png',
            'city' => 'Melbourne',
            'date' => '2022-04-10',
            'order_of_realization' => '3',
            'status' => '1',
            'created_at' => Carbon::now(new \DateTimeZone('America/Sao_Paulo'))->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now(new \DateTimeZone('America/Sao_Paulo'))->format('Y-m-d H:i:s')
        ]);
        
        DB::table('races')->insert([
            'seasons_id' => '1',
            'name' => 'GP Emilia Romagna',
            'circuit_name' => 'Imola Circuit',
            'country' => 'Itália',
            'url_country_flag' => 'https://cdn.countryflags.com/thumbs/italy/flag-button-round-250.png',
            'city' => 'Imola',
            'date' => '2022-04-24',
            'order_of_realization' => '4',
            'status' => '1',
            'created_at' => Carbon::now(new \DateTimeZone('America/Sao_Paulo'))->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now(new \DateTimeZone('America/Sao_Paulo'))->format('Y-m-d H:i:s')
        ]);

        DB::table('races')->insert([
            'seasons_id' => '1',
            'name' => 'GP Miami',
            'circuit_name' => 'Miami International Autodrome',
            'country' => 'United States',
            'url_country_flag' => 'https://cdn.countryflags.com/thumbs/united-states-of-america/flag-button-round-250.png',
            'city' => 'Miami',
            'date' => '2022-05-08',
            'order_of_realization' => '5',
            'status' => '1',
            'created_at' => Carbon::now(new \DateTimeZone('America/Sao_Paulo'))->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now(new \DateTimeZone('America/Sao_Paulo'))->format('Y-m-d H:i:s')
        ]);

        DB::table('races')->insert([
            'seasons_id' => '1',
            'name' => 'GP Espanha',
            'circuit_name' => 'Circuit de Barcelona-Catalunya',
            'country' => 'Espanha',
            'url_country_flag' => 'https://cdn.countryflags.com/thumbs/spain/flag-button-round-250.png',
            'city' => 'Montmelò',
            'date' => '2022-05-22',
            'order_of_realization' => '6',
            'status' => '1',
            'created_at' => Carbon::now(new \DateTimeZone('America/Sao_Paulo'))->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now(new \DateTimeZone('America/Sao_Paulo'))->format('Y-m-d H:i:s')
        ]);

        DB::table('races')->insert([
            'seasons_id' => '1',
            'name' => 'GP Mônaco',
            'circuit_name' => 'Circuit de Monaco',
            'country' => 'Mônaco',
            'url_country_flag' => 'https://cdn.countryflags.com/thumbs/monaco/flag-button-round-250.png',
            'city' => 'Monte Carlo',
            'date' => '2022-05-29',
            'order_of_realization' => '7',
            'status' => '1',
            'created_at' => Carbon::now(new \DateTimeZone('America/Sao_Paulo'))->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now(new \DateTimeZone('America/Sao_Paulo'))->format('Y-m-d H:i:s')
        ]);

        DB::table('races')->insert([
            'seasons_id' => '1',
            'name' => 'GP Azerbaijão',
            'circuit_name' => 'Baku City Circuit',
            'country' => 'Azerbaijão',
            'url_country_flag' => 'https://cdn.countryflags.com/thumbs/azerbaijan/flag-button-round-250.png',
            'city' => 'Baku',
            'date' => '2022-06-12',
            'order_of_realization' => '8',
            'status' => '1',
            'created_at' => Carbon::now(new \DateTimeZone('America/Sao_Paulo'))->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now(new \DateTimeZone('America/Sao_Paulo'))->format('Y-m-d H:i:s')
        ]);

        DB::table('races')->insert([
            'seasons_id' => '1',
            'name' => 'GP Canada',
            'circuit_name' => 'Circuit Gilles Villeneuve',
            'country' => 'Canada',
            'url_country_flag' => 'https://cdn.countryflags.com/thumbs/canada/flag-button-round-250.png',
            'city' => 'Montreal',
            'date' => '2022-06-19',
            'order_of_realization' => '9',
            'status' => '1',
            'created_at' => Carbon::now(new \DateTimeZone('America/Sao_Paulo'))->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now(new \DateTimeZone('America/Sao_Paulo'))->format('Y-m-d H:i:s')
        ]);

        DB::table('races')->insert([
            'seasons_id' => '1',
            'name' => 'GP da Grâ Bretanha',
            'circuit_name' => 'Silverstone Circuit',
            'country' => 'United Kingdon',
            'url_country_flag' => 'https://cdn.countryflags.com/thumbs/united-kingdom/flag-button-round-250.png',
            'city' => 'Silverstone',
            'date' => '2022-07-03',
            'order_of_realization' => '10',
            'status' => '1',
            'created_at' => Carbon::now(new \DateTimeZone('America/Sao_Paulo'))->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now(new \DateTimeZone('America/Sao_Paulo'))->format('Y-m-d H:i:s')
        ]);

        DB::table('races')->insert([
            'seasons_id' => '1',
            'name' => 'GP Áustria',
            'circuit_name' => 'Red Bull Ring',
            'country' => 'Áustria',
            'url_country_flag' => 'https://cdn.countryflags.com/thumbs/austria/flag-button-round-250.png',
            'city' => 'Spielberg',
            'date' => '2022-07-10',
            'order_of_realization' => '11',
            'status' => '1',
            'created_at' => Carbon::now(new \DateTimeZone('America/Sao_Paulo'))->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now(new \DateTimeZone('America/Sao_Paulo'))->format('Y-m-d H:i:s')
        ]);

        DB::table('races')->insert([
            'seasons_id' => '1',
            'name' => 'GP França',
            'circuit_name' => 'Circuit Paul Ricard',
            'country' => 'França',
            'url_country_flag' => 'https://cdn.countryflags.com/thumbs/france/flag-button-round-250.png',
            'city' => 'Le Castellet',
            'date' => '2022-07-24',
            'order_of_realization' => '12',
            'status' => '1',
            'created_at' => Carbon::now(new \DateTimeZone('America/Sao_Paulo'))->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now(new \DateTimeZone('America/Sao_Paulo'))->format('Y-m-d H:i:s')
        ]);

        DB::table('races')->insert([
            'seasons_id' => '1',
            'name' => 'GP Hungria',
            'circuit_name' => 'Hungaroring',
            'country' => 'Hungria',
            'url_country_flag' => 'https://cdn.countryflags.com/thumbs/hungary/flag-button-round-250.png',
            'city' => 'Mogyoród',
            'date' => '2022-07-31',
            'order_of_realization' => '13',
            'status' => '13',
            'created_at' => Carbon::now(new \DateTimeZone('America/Sao_Paulo'))->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now(new \DateTimeZone('America/Sao_Paulo'))->format('Y-m-d H:i:s')
        ]);

        DB::table('races')->insert([
            'seasons_id' => '1',
            'name' => 'GP Bélgica',
            'circuit_name' => 'Circuit de Spa-Francorchamps',
            'country' => 'Bélgica',
            'url_country_flag' => 'https://cdn.countryflags.com/thumbs/belgium/flag-button-round-250.png',
            'city' => 'Stavelot',
            'date' => '2022-08-28',
            'order_of_realization' => '14',
            'status' => '1',
            'created_at' => Carbon::now(new \DateTimeZone('America/Sao_Paulo'))->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now(new \DateTimeZone('America/Sao_Paulo'))->format('Y-m-d H:i:s')
        ]);

        DB::table('races')->insert([
            'seasons_id' => '1',
            'name' => 'Gp Holanda',
            'circuit_name' => 'Circuit Zandvoort',
            'country' => 'Holanda',
            'url_country_flag' => 'https://cdn.countryflags.com/thumbs/netherlands/flag-button-round-250.png',
            'city' => 'Zandvoort',
            'date' => '20222-09-04',
            'order_of_realization' => '15',
            'status' => '1',
            'created_at' => Carbon::now(new \DateTimeZone('America/Sao_Paulo'))->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now(new \DateTimeZone('America/Sao_Paulo'))->format('Y-m-d H:i:s')
        ]);

        DB::table('races')->insert([
            'seasons_id' => '1',
            'name' => 'GP Itália',
            'circuit_name' => 'Monza Circuit',
            'country' => 'Itália',
            'url_country_flag' => 'https://cdn.countryflags.com/thumbs/italy/flag-button-round-250.png',
            'city' => 'Monza',
            'date' => '2022-09-11',
            'order_of_realization' => '16',
            'status' => '1',
            'created_at' => Carbon::now(new \DateTimeZone('America/Sao_Paulo'))->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now(new \DateTimeZone('America/Sao_Paulo'))->format('Y-m-d H:i:s')
        ]);

        DB::table('races')->insert([
            'seasons_id' => '1',
            'name' => 'GP Singapura',
            'circuit_name' => 'Marina Bay Street Circuit',
            'country' => 'Singapore',
            'url_country_flag' => 'https://cdn.countryflags.com/thumbs/singapore/flag-button-round-250.png',
            'city' => 'Marina Bay',
            'date' => '2022-10-02',
            'order_of_realization' => '17',
            'status' => '1',
            'created_at' => Carbon::now(new \DateTimeZone('America/Sao_Paulo'))->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now(new \DateTimeZone('America/Sao_Paulo'))->format('Y-m-d H:i:s')
        ]);

        DB::table('races')->insert([
            'seasons_id' => '1',
            'name' => 'GP Japão',
            'circuit_name' => 'Suzuka International Racing Course',
            'country' => 'Japão',
            'url_country_flag' => 'https://cdn.countryflags.com/thumbs/japan/flag-button-round-250.png',
            'city' => 'Suzuka',
            'date' => '2022-10-09',
            'order_of_realization' => '18',
            'status' => '1',
            'created_at' => Carbon::now(new \DateTimeZone('America/Sao_Paulo'))->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now(new \DateTimeZone('America/Sao_Paulo'))->format('Y-m-d H:i:s')
        ]);

        DB::table('races')->insert([
            'seasons_id' => '1',
            'name' => 'GP Estados Unidos',
            'circuit_name' => 'Circuit of the Americas',
            'country' => 'Estados Unidos',
            'url_country_flag' => 'https://cdn.countryflags.com/thumbs/united-states-of-america/flag-button-round-250.png',
            'city' => 'Austin',
            'date' => '2022-10-23',
            'order_of_realization' => '19',
            'status' => '1',
            'created_at' => Carbon::now(new \DateTimeZone('America/Sao_Paulo'))->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now(new \DateTimeZone('America/Sao_Paulo'))->format('Y-m-d H:i:s')
        ]);

        DB::table('races')->insert([
            'seasons_id' => '1',
            'name' => 'GP México',
            'circuit_name' => 'Autódromo Hermanos Rodríguez',
            'country' => 'México',
            'url_country_flag' => 'https://cdn.countryflags.com/thumbs/mexico/flag-button-round-250.png',
            'city' => 'Ciudad de Mexico',
            'date' => '2022-10-30',
            'order_of_realization' => '20',
            'status' => '1',
            'created_at' => Carbon::now(new \DateTimeZone('America/Sao_Paulo'))->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now(new \DateTimeZone('America/Sao_Paulo'))->format('Y-m-d H:i:s')
        ]);

        DB::table('races')->insert([
            'seasons_id' => '1',
            'name' => 'GP São Paulo',
            'circuit_name' => 'Interlagos',
            'country' => 'Brasil',
            'url_country_flag' => 'https://cdn.countryflags.com/thumbs/brazil/flag-button-round-250.png',
            'city' => 'São Paulo',
            'date' => '2022-11-13',
            'order_of_realization' => '21',
            'status' => '1',
            'created_at' => Carbon::now(new \DateTimeZone('America/Sao_Paulo'))->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now(new \DateTimeZone('America/Sao_Paulo'))->format('Y-m-d H:i:s')
        ]);

        DB::table('races')->insert([
            'seasons_id' => '1',
            'name' => 'GP Abu Dhabi',
            'circuit_name' => ' Yas Marina Circuit',
            'country' => 'Emirados Árabes Unidos',
            'url_country_flag' => 'https://cdn.countryflags.com/thumbs/united-arab-emirates/flag-button-round-250.png',
            'city' => 'Abu Dhabi',
            'date' => '2022-11-20',
            'order_of_realization' => '22',
            'status' => '1',
            'created_at' => Carbon::now(new \DateTimeZone('America/Sao_Paulo'))->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now(new \DateTimeZone('America/Sao_Paulo'))->format('Y-m-d H:i:s')
        ]);
    }
}
