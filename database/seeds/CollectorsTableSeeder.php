<?php

use Illuminate\Database\Seeder;

class CollectorsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('collectors')->delete();
        
        \DB::table('collectors')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Huy',
                'email' => 'xhtxlof@gmail.com',
                'password' => '$2y$10$2DkF0l.BTTQkL.NvIuB5n.T2nfSull6.Abl/lQ7zLhqzyBETulPwy',
                'created_at' => '2018-10-25 18:14:02',
                'updated_at' => '2018-10-25 18:14:02',
            ),
        ));
        
        
    }
}