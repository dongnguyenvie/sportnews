<?php

use Illuminate\Database\Seeder;

class AdPositionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('ad_positions')->delete();
        
        \DB::table('ad_positions')->insert(array (
            0 => 
            array (
                'id' => 1,
                'position' => 'header',
                'price' => 600000,
                'created_at' => '2018-11-01 21:01:07',
                'updated_at' => '2018-11-02 20:05:50',
            ),
            1 => 
            array (
                'id' => 2,
                'position' => 'side',
                'price' => 300000,
                'created_at' => '2018-11-01 21:01:07',
                'updated_at' => '2018-11-01 21:01:07',
            ),
        ));
        
        
    }
}