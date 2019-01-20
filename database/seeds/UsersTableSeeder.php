<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 5,
                'name' => 'Huy',
                'email' => 'huy@gmail.com',
                'level' => 0,
                'password' => '$2y$10$aVdKdR0RlYug0yaS9V9NFujlqGJ447A431C5jeZmmSMwFaVQwakrO',
                'created_at' => '2018-10-04 19:18:03',
                'updated_at' => '2018-10-04 21:25:21',
            ),
            1 => 
            array (
                'id' => 6,
                'name' => 'admin2',
                'email' => 'admin2@gmail.com',
                'level' => 1,
                'password' => '$2y$10$1qfwY/TpTdOPwaZFuB0qleZZguP35RrdA00HQ3kEK2M74tLROLAji',
                'created_at' => '2018-10-04 19:22:57',
                'updated_at' => '2018-10-04 19:22:57',
            ),
            2 => 
            array (
                'id' => 7,
                'name' => 'admin',
                'email' => 'admin@gmail.com',
                'level' => 1,
                'password' => '$2y$10$1qfwY/TpTdOPwaZFuB0qleZZguP35RrdA00HQ3kEK2M74tLROLAji',
                'created_at' => '2018-10-13 18:35:56',
                'updated_at' => '2018-10-13 18:35:56',
            ),
            3 => 
            array (
                'id' => 11,
                'name' => 'advertisor',
                'email' => 'advertisor@gmail.com',
                'level' => 2,
                'password' => '$2y$10$R0YdGaVJaV6koiFtzYJsnOcmL3LrHNxFVun6DUntHWtd.NDouHKdC',
                'created_at' => '2018-11-06 16:01:22',
                'updated_at' => '2018-11-06 16:01:22',
            ),
        ));
        
        
    }
}