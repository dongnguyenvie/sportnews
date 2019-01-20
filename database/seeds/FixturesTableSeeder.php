<?php

use Illuminate\Database\Seeder;

class FixturesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('fixtures')->delete();
        
        \DB::table('fixtures')->insert(array (
            0 => 
            array (
                'id' => 1,
                'date' => '20/10/2018',
                'team1' => 'Chelsea',
                'team2' => 'Manchester United',
                'time' => '05:00 PM',
                'league_id' => 1,
                'created_at' => '2018-10-11 20:16:20',
                'updated_at' => '2018-10-11 20:16:20',
            ),
            1 => 
            array (
                'id' => 2,
                'date' => '20/10/2018',
                'team1' => 'AFC Bournemouth',
                'team2' => 'Southampton',
                'time' => '07:30 PM',
                'league_id' => 1,
                'created_at' => '2018-10-11 20:16:20',
                'updated_at' => '2018-10-11 20:16:20',
            ),
            2 => 
            array (
                'id' => 3,
                'date' => '20/10/2018',
                'team1' => 'Cardiff City',
                'team2' => 'Fulham',
                'time' => '07:30 PM',
                'league_id' => 1,
                'created_at' => '2018-10-11 20:16:20',
                'updated_at' => '2018-10-11 20:16:20',
            ),
            3 => 
            array (
                'id' => 4,
                'date' => '20/10/2018',
                'team1' => 'Manchester City',
                'team2' => 'Burnley',
                'time' => '07:30 PM',
                'league_id' => 1,
                'created_at' => '2018-10-11 20:16:20',
                'updated_at' => '2018-10-11 20:16:20',
            ),
            4 => 
            array (
                'id' => 5,
                'date' => '20/10/2018',
                'team1' => 'Newcastle',
                'team2' => 'Brighton & Hove Albion',
                'time' => '07:30 PM',
                'league_id' => 1,
                'created_at' => '2018-10-11 20:16:20',
                'updated_at' => '2018-10-11 20:16:20',
            ),
            5 => 
            array (
                'id' => 6,
                'date' => '20/10/2018',
                'team1' => 'West Ham',
                'team2' => 'Tottenham',
                'time' => '07:30 PM',
                'league_id' => 1,
                'created_at' => '2018-10-11 20:16:20',
                'updated_at' => '2018-10-11 20:16:20',
            ),
            6 => 
            array (
                'id' => 7,
                'date' => '20/10/2018',
                'team1' => 'Wolverhampton Wanderers',
                'team2' => 'Watford',
                'time' => '07:30 PM',
                'league_id' => 1,
                'created_at' => '2018-10-11 20:16:20',
                'updated_at' => '2018-10-11 20:16:20',
            ),
            7 => 
            array (
                'id' => 8,
                'date' => '20/10/2018',
                'team1' => 'Huddersfield Town',
                'team2' => 'Liverpool',
                'time' => '10:00 PM',
                'league_id' => 1,
                'created_at' => '2018-10-11 20:16:20',
                'updated_at' => '2018-10-11 20:16:20',
            ),
            8 => 
            array (
                'id' => 9,
                'date' => '20/10/2018',
                'team1' => 'Everton',
                'team2' => 'Crystal Palace',
                'time' => '08:30 PM',
                'league_id' => 1,
                'created_at' => '2018-10-11 20:16:20',
                'updated_at' => '2018-10-11 20:16:20',
            ),
            9 => 
            array (
                'id' => 10,
                'date' => '20/10/2018',
                'team1' => 'Arsenal',
                'team2' => 'Leicester City',
                'time' => '12:30 AM',
                'league_id' => 1,
                'created_at' => '2018-10-11 20:16:20',
                'updated_at' => '2018-10-11 20:16:20',
            ),
            10 => 
            array (
                'id' => 11,
                'date' => '20/10/2018',
                'team1' => 'Roma',
                'team2' => 'SPAL',
                'time' => '06:30 PM',
                'league_id' => 2,
                'created_at' => '2018-10-11 21:19:54',
                'updated_at' => '2018-10-11 21:19:54',
            ),
            11 => 
            array (
                'id' => 12,
                'date' => '20/10/2018',
                'team1' => 'Juventus',
                'team2' => 'Genoa',
                'time' => '09:30 PM',
                'league_id' => 2,
                'created_at' => '2018-10-11 21:19:54',
                'updated_at' => '2018-10-11 21:19:54',
            ),
            12 => 
            array (
                'id' => 13,
                'date' => '20/10/2018',
                'team1' => 'Udinese',
                'team2' => 'Napoli',
                'time' => '12:00 AM',
                'league_id' => 2,
                'created_at' => '2018-10-11 21:19:54',
                'updated_at' => '2018-10-11 21:19:54',
            ),
            13 => 
            array (
                'id' => 14,
                'date' => '20/10/2018',
                'team1' => 'Frosinone',
                'team2' => 'Empoli',
                'time' => '04:00 PM',
                'league_id' => 2,
                'created_at' => '2018-10-11 21:19:54',
                'updated_at' => '2018-10-11 21:19:54',
            ),
            14 => 
            array (
                'id' => 15,
                'date' => '20/10/2018',
                'team1' => 'Bologna',
                'team2' => 'Torino',
                'time' => '06:30 PM',
                'league_id' => 2,
                'created_at' => '2018-10-11 21:19:54',
                'updated_at' => '2018-10-11 21:19:54',
            ),
            15 => 
            array (
                'id' => 16,
                'date' => '20/10/2018',
                'team1' => 'Chievo',
                'team2' => 'Atalanta',
                'time' => '06:30 PM',
                'league_id' => 2,
                'created_at' => '2018-10-11 21:19:54',
                'updated_at' => '2018-10-11 21:19:54',
            ),
            16 => 
            array (
                'id' => 17,
                'date' => '20/10/2018',
                'team1' => 'Parma',
                'team2' => 'Lazio',
                'time' => '06:30 PM',
                'league_id' => 2,
                'created_at' => '2018-10-11 21:19:54',
                'updated_at' => '2018-10-11 21:19:54',
            ),
            17 => 
            array (
                'id' => 18,
                'date' => '20/10/2018',
                'team1' => 'Fiorentina',
                'team2' => 'Cagliari',
                'time' => '09:30 PM',
                'league_id' => 2,
                'created_at' => '2018-10-11 21:19:54',
                'updated_at' => '2018-10-11 21:19:54',
            ),
            18 => 
            array (
                'id' => 19,
                'date' => '20/10/2018',
                'team1' => 'Internazionale',
                'team2' => 'Milan',
                'time' => '12:00 AM',
                'league_id' => 2,
                'created_at' => '2018-10-11 21:19:54',
                'updated_at' => '2018-10-11 21:19:54',
            ),
            19 => 
            array (
                'id' => 20,
                'date' => '20/10/2018',
                'team1' => 'Sampdoria',
                'team2' => 'Sassuolo',
                'time' => '12:00 AM',
                'league_id' => 2,
                'created_at' => '2018-10-11 21:19:54',
                'updated_at' => '2018-10-11 21:19:54',
            ),
            20 => 
            array (
                'id' => 21,
                'date' => '20/10/2018',
                'team1' => 'Eintracht Frankfurt',
                'team2' => 'Fortuna Düsseldorf',
                'time' => '1:30AM',
                'league_id' => 3,
                'created_at' => '2018-10-11 21:27:17',
                'updated_at' => '2018-10-11 21:27:17',
            ),
            21 => 
            array (
                'id' => 22,
                'date' => '20/10/2018',
                'team1' => 'Nürnberg',
                'team2' => 'Hoffenheim',
                'time' => '20:30PM',
                'league_id' => 3,
                'created_at' => '2018-10-11 21:27:17',
                'updated_at' => '2018-10-11 21:27:17',
            ),
            22 => 
            array (
                'id' => 23,
                'date' => '20/10/2018',
                'team1' => 'Bayer Leverkusen',
                'team2' => 'Hannover 96',
                'time' => '20:30PM',
                'league_id' => 3,
                'created_at' => '2018-10-11 21:27:17',
                'updated_at' => '2018-10-11 21:27:17',
            ),
            23 => 
            array (
                'id' => 24,
                'date' => '20/10/2018',
                'team1' => 'Stuttgart',
                'team2' => 'Borussia Dortmund',
                'time' => '20:30PM',
                'league_id' => 3,
                'created_at' => '2018-10-11 21:27:17',
                'updated_at' => '2018-10-11 21:27:17',
            ),
            24 => 
            array (
                'id' => 25,
                'date' => '20/10/2018',
                'team1' => 'Augsburg',
                'team2' => 'RB Leipzig',
                'time' => '20:30PM',
                'league_id' => 3,
                'created_at' => '2018-10-11 21:27:17',
                'updated_at' => '2018-10-11 21:27:17',
            ),
            25 => 
            array (
                'id' => 26,
                'date' => '20/10/2018',
                'team1' => 'Wolfsburg',
                'team2' => 'Bayern München',
                'time' => '20:30PM',
                'league_id' => 3,
                'created_at' => '2018-10-11 21:27:17',
                'updated_at' => '2018-10-11 21:27:17',
            ),
            26 => 
            array (
                'id' => 27,
                'date' => '20/10/2018',
                'team1' => 'Schalke 04',
                'team2' => 'Werder Bremen',
                'time' => '23:30PM',
                'league_id' => 3,
                'created_at' => '2018-10-11 21:27:17',
                'updated_at' => '2018-10-11 21:27:17',
            ),
            27 => 
            array (
                'id' => 28,
                'date' => '21/10/2018',
                'team1' => 'Hertha BSC',
                'team2' => 'Freiburg',
                'time' => '20:30PM',
                'league_id' => 3,
                'created_at' => '2018-10-11 21:27:17',
                'updated_at' => '2018-10-11 21:27:17',
            ),
            28 => 
            array (
                'id' => 29,
                'date' => '21/10/2018',
                'team1' => 'Borussia M\'gladbach',
                'team2' => 'Mainz 05	',
                'time' => '23:00PM',
                'league_id' => 3,
                'created_at' => '2018-10-11 21:27:17',
                'updated_at' => '2018-10-11 21:27:17',
            ),
            29 => 
            array (
                'id' => 30,
                'date' => '20/10/2018',
                'team1' => 'Celta Vigo',
                'team2' => 'Deportivo Alavés',
                'time' => '12:30 AM',
                'league_id' => 4,
                'created_at' => '2018-10-11 21:30:52',
                'updated_at' => '2018-10-11 21:30:52',
            ),
            30 => 
            array (
                'id' => 31,
                'date' => '20/10/2018',
                'team1' => 'Real Madrid',
                'team2' => 'Levante	',
                'time' => '04:30 PM',
                'league_id' => 4,
                'created_at' => '2018-10-11 21:30:52',
                'updated_at' => '2018-10-11 21:30:52',
            ),
            31 => 
            array (
                'id' => 32,
                'date' => '20/10/2018',
                'team1' => 'Valencia',
                'team2' => 'Leganés',
                'time' => '07:45 PM',
                'league_id' => 4,
                'created_at' => '2018-10-11 21:30:52',
                'updated_at' => '2018-10-11 21:30:52',
            ),
            32 => 
            array (
                'id' => 33,
                'date' => '20/10/2018',
                'team1' => 'Villarreal',
                'team2' => 'Atlético Madrid	',
                'time' => '10:00 PM',
                'league_id' => 4,
                'created_at' => '2018-10-11 21:30:52',
                'updated_at' => '2018-10-11 21:30:52',
            ),
            33 => 
            array (
                'id' => 34,
                'date' => '20/10/2018',
                'team1' => 'Barcelona',
                'team2' => 'Sevilla',
                'time' => '12:15 AM',
                'league_id' => 4,
                'created_at' => '2018-10-11 21:30:52',
                'updated_at' => '2018-10-11 21:30:52',
            ),
            34 => 
            array (
                'id' => 35,
                'date' => '20/10/2018',
                'team1' => 'Rayo Vallecano',
                'team2' => 'Getafe',
                'time' => '03:30 PM',
                'league_id' => 4,
                'created_at' => '2018-10-11 21:30:52',
                'updated_at' => '2018-10-11 21:30:52',
            ),
            35 => 
            array (
                'id' => 36,
                'date' => '20/10/2018',
                'team1' => 'Eibar',
                'team2' => 'Athletic Club',
                'time' => '07:45 PM',
                'league_id' => 4,
                'created_at' => '2018-10-11 21:30:52',
                'updated_at' => '2018-10-11 21:30:52',
            ),
            36 => 
            array (
                'id' => 37,
                'date' => '20/10/2018',
                'team1' => 'Huesca',
                'team2' => 'Espanyol',
                'time' => '10:00 PM',
                'league_id' => 4,
                'created_at' => '2018-10-11 21:30:52',
                'updated_at' => '2018-10-11 21:30:52',
            ),
            37 => 
            array (
                'id' => 38,
                'date' => '20/10/2018',
                'team1' => 'Real Betis',
                'team2' => 'Real Valladolid',
                'time' => '12:15 AM',
                'league_id' => 4,
                'created_at' => '2018-10-11 21:30:52',
                'updated_at' => '2018-10-11 21:30:52',
            ),
            38 => 
            array (
                'id' => 39,
                'date' => '20/10/2018',
                'team1' => 'Real Sociedad',
                'team2' => 'Girona',
                'time' => '12:30 AM',
                'league_id' => 4,
                'created_at' => '2018-10-11 21:30:52',
                'updated_at' => '2018-10-11 21:30:52',
            ),
            39 => 
            array (
                'id' => 40,
                'date' => 'updated',
                'team1' => 'qwe',
                'team2' => 'qwe',
                'time' => 'qwe',
                'league_id' => 1,
                'created_at' => '2018-10-12 14:59:53',
                'updated_at' => '2018-10-12 15:04:57',
            ),
        ));
        
        
    }
}