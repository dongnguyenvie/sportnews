<?php

use Illuminate\Database\Seeder;

class ScoresTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('scores')->delete();
        
        \DB::table('scores')->insert(array (
            0 => 
            array (
                'id' => 1,
                'week' => 8,
                'team1' => 'Brighton & Hove Albion',
                'team2' => 'West Ham',
                'goals' => '1 - 0',
                'status' => 'HT',
                'league_id' => 1,
                'created_at' => '2018-10-11 21:38:34',
                'updated_at' => '2018-10-11 21:38:34',
            ),
            1 => 
            array (
                'id' => 2,
                'week' => 8,
                'team1' => 'Burnley',
                'team2' => 'Huddersfield Town',
                'goals' => '1 - 1	',
                'status' => 'FT',
                'league_id' => 1,
                'created_at' => '2018-10-11 21:38:34',
                'updated_at' => '2018-10-11 21:38:34',
            ),
            2 => 
            array (
                'id' => 3,
                'week' => 8,
                'team1' => 'Crystal Palace',
                'team2' => 'Wolverhampton Wanderers	',
                'goals' => '0 - 1',
                'status' => 'FT',
                'league_id' => 1,
                'created_at' => '2018-10-11 21:38:34',
                'updated_at' => '2018-10-11 21:38:34',
            ),
            3 => 
            array (
                'id' => 4,
                'week' => 8,
                'team1' => 'Leicester City',
                'team2' => 'Everton',
                'goals' => '1 - 2',
                'status' => 'FT',
                'league_id' => 1,
                'created_at' => '2018-10-11 21:38:34',
                'updated_at' => '2018-10-11 21:38:34',
            ),
            4 => 
            array (
                'id' => 5,
                'week' => 8,
                'team1' => 'Tottenham',
                'team2' => 'Cardiff City	',
                'goals' => '1 - 0',
                'status' => 'FT',
                'league_id' => 1,
                'created_at' => '2018-10-11 21:38:34',
                'updated_at' => '2018-10-11 21:38:34',
            ),
            5 => 
            array (
                'id' => 6,
                'week' => 8,
                'team1' => 'Watford	',
                'team2' => 'AFC Bournemouth	',
                'goals' => '0 - 4',
                'status' => 'FT',
                'league_id' => 1,
                'created_at' => '2018-10-11 21:38:34',
                'updated_at' => '2018-10-11 21:38:34',
            ),
            6 => 
            array (
                'id' => 7,
                'week' => 8,
                'team1' => 'Manchester United',
                'team2' => 'Newcastle',
                'goals' => '3 - 2',
                'status' => 'FT',
                'league_id' => 1,
                'created_at' => '2018-10-11 21:38:34',
                'updated_at' => '2018-10-11 21:38:34',
            ),
            7 => 
            array (
                'id' => 8,
                'week' => 8,
                'team1' => 'Fulham',
                'team2' => 'Arsenal',
                'goals' => '1 - 5',
                'status' => 'FT',
                'league_id' => 1,
                'created_at' => '2018-10-11 21:38:34',
                'updated_at' => '2018-10-11 21:38:34',
            ),
            8 => 
            array (
                'id' => 9,
                'week' => 8,
                'team1' => 'Southampton',
                'team2' => 'Chelsea',
                'goals' => '0 - 3',
                'status' => 'FT',
                'league_id' => 1,
                'created_at' => '2018-10-11 21:38:34',
                'updated_at' => '2018-10-11 21:38:34',
            ),
            9 => 
            array (
                'id' => 10,
                'week' => 8,
                'team1' => 'Liverpool',
                'team2' => 'Manchester City	',
                'goals' => '0 - 0',
                'status' => 'FT',
                'league_id' => 1,
                'created_at' => '2018-10-11 21:38:34',
                'updated_at' => '2018-10-11 21:38:34',
            ),
            10 => 
            array (
                'id' => 11,
                'week' => 8,
                'team1' => 'Torino',
                'team2' => 'Frosinone',
                'goals' => '3 - 2	',
                'status' => 'FT',
                'league_id' => 2,
                'created_at' => '2018-10-11 21:42:16',
                'updated_at' => '2018-10-11 21:42:16',
            ),
            11 => 
            array (
                'id' => 12,
                'week' => 8,
                'team1' => 'Cagliari',
                'team2' => 'Bologna',
                'goals' => '2 - 0',
                'status' => 'FT',
                'league_id' => 2,
                'created_at' => '2018-10-11 21:42:16',
                'updated_at' => '2018-10-11 21:42:16',
            ),
            12 => 
            array (
                'id' => 13,
                'week' => 8,
                'team1' => 'Udinese',
                'team2' => 'Juventus',
                'goals' => '0 - 2',
                'status' => 'FT',
                'league_id' => 2,
                'created_at' => '2018-10-11 21:42:16',
                'updated_at' => '2018-10-11 21:42:16',
            ),
            13 => 
            array (
                'id' => 14,
                'week' => 8,
                'team1' => 'Empoli',
                'team2' => 'Roma',
                'goals' => '0 - 2	',
                'status' => 'FT',
                'league_id' => 2,
                'created_at' => '2018-10-11 21:42:16',
                'updated_at' => '2018-10-11 21:42:16',
            ),
            14 => 
            array (
                'id' => 15,
                'week' => 8,
                'team1' => 'Genoa',
                'team2' => 'Parma',
                'goals' => '1 - 3	',
                'status' => 'FT',
                'league_id' => 2,
                'created_at' => '2018-10-11 21:42:16',
                'updated_at' => '2018-10-11 21:42:16',
            ),
            15 => 
            array (
                'id' => 16,
                'week' => 8,
                'team1' => 'Atalanta',
                'team2' => 'Sampdoria',
                'goals' => '0 - 1	',
                'status' => 'FT',
                'league_id' => 2,
                'created_at' => '2018-10-11 21:42:16',
                'updated_at' => '2018-10-11 21:42:16',
            ),
            16 => 
            array (
                'id' => 17,
                'week' => 8,
                'team1' => 'Milan',
                'team2' => 'Chievo	',
                'goals' => '3 - 1	',
                'status' => 'FT',
                'league_id' => 2,
                'created_at' => '2018-10-11 21:42:16',
                'updated_at' => '2018-10-11 21:42:16',
            ),
            17 => 
            array (
                'id' => 18,
                'week' => 8,
                'team1' => 'Napoli',
                'team2' => 'Sassuolo',
                'goals' => '2 - 0	',
                'status' => 'FT',
                'league_id' => 2,
                'created_at' => '2018-10-11 21:42:16',
                'updated_at' => '2018-10-11 21:42:16',
            ),
            18 => 
            array (
                'id' => 19,
                'week' => 8,
                'team1' => 'SPAL',
                'team2' => 'Internazionale',
                'goals' => '1 - 2	',
                'status' => 'FT',
                'league_id' => 2,
                'created_at' => '2018-10-11 21:42:16',
                'updated_at' => '2018-10-11 21:42:16',
            ),
            19 => 
            array (
                'id' => 20,
                'week' => 8,
                'team1' => 'Lazio',
                'team2' => 'Fiorentina',
                'goals' => '1 - 0	',
                'status' => 'FT',
                'league_id' => 2,
                'created_at' => '2018-10-11 21:42:16',
                'updated_at' => '2018-10-11 21:42:16',
            ),
            20 => 
            array (
                'id' => 21,
                'week' => 7,
                'team1' => 'Werder Bremen	',
                'team2' => 'Wolfsburg',
                'goals' => '2 - 0	',
                'status' => 'FT',
                'league_id' => 3,
                'created_at' => '2018-10-11 21:45:29',
                'updated_at' => '2018-10-11 21:45:29',
            ),
            21 => 
            array (
                'id' => 22,
                'week' => 7,
                'team1' => 'Borussia Dortmund	',
                'team2' => 'Augsburg	',
                'goals' => '4 - 3	',
                'status' => 'FT',
                'league_id' => 3,
                'created_at' => '2018-10-11 21:45:29',
                'updated_at' => '2018-10-11 21:45:29',
            ),
            22 => 
            array (
                'id' => 23,
                'week' => 7,
                'team1' => 'Hannover 96',
                'team2' => 'Stuttgart',
                'goals' => '3 - 1	',
                'status' => 'FT
',
                'league_id' => 3,
                'created_at' => '2018-10-11 21:45:29',
                'updated_at' => '2018-10-11 21:45:29',
            ),
            23 => 
            array (
                'id' => 24,
                'week' => 7,
                'team1' => 'Mainz ',
                'team2' => 'Hertha BSC	',
                'goals' => '0 - 0	',
                'status' => 'FT
',
                'league_id' => 3,
                'created_at' => '2018-10-11 21:45:29',
                'updated_at' => '2018-10-11 21:45:29',
            ),
            24 => 
            array (
                'id' => 25,
                'week' => 7,
                'team1' => 'Fortuna Düsseldorf	',
                'team2' => 'Schalke 04	',
                'goals' => '0 - 2	',
                'status' => 'FT
',
                'league_id' => 3,
                'created_at' => '2018-10-11 21:45:29',
                'updated_at' => '2018-10-11 21:45:29',
            ),
            25 => 
            array (
                'id' => 26,
                'week' => 7,
                'team1' => 'Bayern München	',
                'team2' => 'Borussia M\'gladbach	',
                'goals' => '0 - 3	',
                'status' => 'FT',
                'league_id' => 3,
                'created_at' => '2018-10-11 21:45:29',
                'updated_at' => '2018-10-11 21:45:29',
            ),
            26 => 
            array (
                'id' => 27,
                'week' => 7,
                'team1' => 'Freiburg',
                'team2' => 'Bayer Leverkusen	',
                'goals' => '0 - 0	',
                'status' => 'FT
',
                'league_id' => 3,
                'created_at' => '2018-10-11 21:45:29',
                'updated_at' => '2018-10-11 21:45:29',
            ),
            27 => 
            array (
                'id' => 28,
                'week' => 7,
                'team1' => 'Hoffenheim	',
                'team2' => 'Eintracht Frankfurt	',
                'goals' => '1 - 2	',
                'status' => 'FT',
                'league_id' => 3,
                'created_at' => '2018-10-11 21:45:29',
                'updated_at' => '2018-10-11 21:45:29',
            ),
            28 => 
            array (
                'id' => 29,
                'week' => 7,
                'team1' => 'RB Leipzig	',
                'team2' => 'Nürnberg',
                'goals' => '6 - 0	',
                'status' => 'FT',
                'league_id' => 3,
                'created_at' => '2018-10-11 21:45:29',
                'updated_at' => '2018-10-11 21:45:29',
            ),
            29 => 
            array (
                'id' => 30,
                'week' => 8,
                'team1' => 'Athletic Club	',
                'team2' => 'Real Sociedad	',
                'goals' => '1 - 3	',
                'status' => 'FT
',
                'league_id' => 4,
                'created_at' => '2018-10-11 21:48:22',
                'updated_at' => '2018-10-11 21:48:22',
            ),
            30 => 
            array (
                'id' => 31,
                'week' => 8,
                'team1' => 'Girona',
                'team2' => 'Eibar',
                'goals' => '2 - 3	',
                'status' => 'FT
',
                'league_id' => 4,
                'created_at' => '2018-10-11 21:48:22',
                'updated_at' => '2018-10-11 21:48:22',
            ),
            31 => 
            array (
                'id' => 32,
                'week' => 8,
                'team1' => 'Getafe',
                'team2' => 'Levante	',
                'goals' => '0 - 1	',
                'status' => 'FT
',
                'league_id' => 4,
                'created_at' => '2018-10-11 21:48:22',
                'updated_at' => '2018-10-11 21:48:22',
            ),
            32 => 
            array (
                'id' => 33,
                'week' => 8,
                'team1' => 'Deportivo Alavés	',
                'team2' => 'Real Madrid	',
                'goals' => '1 - 0	',
                'status' => 'FT',
                'league_id' => 4,
                'created_at' => '2018-10-11 21:48:22',
                'updated_at' => '2018-10-11 21:48:22',
            ),
            33 => 
            array (
                'id' => 34,
                'week' => 8,
                'team1' => 'Leganés',
                'team2' => 'Rayo Vallecano	',
                'goals' => '1 - 0	',
                'status' => 'FT',
                'league_id' => 4,
                'created_at' => '2018-10-11 21:48:22',
                'updated_at' => '2018-10-11 21:48:22',
            ),
            34 => 
            array (
                'id' => 35,
                'week' => 8,
                'team1' => 'Real Valladolid	',
                'team2' => 'Huesca',
                'goals' => '1 - 0	',
                'status' => 'FT',
                'league_id' => 4,
                'created_at' => '2018-10-11 21:48:22',
                'updated_at' => '2018-10-11 21:48:22',
            ),
            35 => 
            array (
                'id' => 36,
                'week' => 8,
                'team1' => 'Atlético Madrid	',
                'team2' => 'Real Betis	',
                'goals' => '1 - 0	',
                'status' => 'FT',
                'league_id' => 4,
                'created_at' => '2018-10-11 21:48:22',
                'updated_at' => '2018-10-11 21:48:22',
            ),
            36 => 
            array (
                'id' => 37,
                'week' => 8,
                'team1' => 'Espanyol',
                'team2' => 'Villarreal',
                'goals' => '3-1',
                'status' => 'FT',
                'league_id' => 4,
                'created_at' => '2018-10-11 21:48:22',
                'updated_at' => '2018-10-11 21:48:22',
            ),
            37 => 
            array (
                'id' => 38,
                'week' => 8,
                'team1' => 'Sevilla',
                'team2' => 'Celta Vigo	',
                'goals' => '2 - 1	',
                'status' => 'FT',
                'league_id' => 4,
                'created_at' => '2018-10-11 21:48:22',
                'updated_at' => '2018-10-11 21:48:22',
            ),
            38 => 
            array (
                'id' => 39,
                'week' => 8,
                'team1' => 'Valencia',
                'team2' => 'Barcelona',
                'goals' => '1 - 1	',
                'status' => 'FT',
                'league_id' => 4,
                'created_at' => '2018-10-11 21:48:22',
                'updated_at' => '2018-10-11 21:48:22',
            ),
        ));
        
        
    }
}