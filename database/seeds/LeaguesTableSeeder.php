<?php

use Illuminate\Database\Seeder;

class LeaguesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('leagues')->delete();
        
        \DB::table('leagues')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Premier League',
                'created_at' => '2018-10-09 21:22:05',
                'updated_at' => '2018-10-09 21:22:05',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Serie-A',
                'created_at' => '2018-10-09 21:22:05',
                'updated_at' => '2018-10-09 21:22:05',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Bundesliga',
                'created_at' => '2018-10-09 21:22:05',
                'updated_at' => '2018-10-09 21:22:05',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'La Liga',
                'created_at' => '2018-10-09 21:22:05',
                'updated_at' => '2018-10-09 21:22:05',
            ),
        ));
        
        
    }
}