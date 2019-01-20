<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('categories')->delete();
        
        \DB::table('categories')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Anh',
                'alias' => 'anh',
                'created_at' => '2018-09-28 18:48:35',
                'updated_at' => '2018-09-28 18:48:35',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Việt Nam',
                'alias' => 'viet-nam',
                'created_at' => '2018-09-28 18:48:35',
                'updated_at' => '2018-09-28 18:48:35',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Tây Ban Nha',
                'alias' => 'tay-ban-nha',
                'created_at' => '2018-09-28 18:48:35',
                'updated_at' => '2018-09-28 18:48:35',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Ý',
                'alias' => 'y',
                'created_at' => '2018-09-28 18:48:35',
                'updated_at' => '2018-09-28 18:48:35',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Đức',
                'alias' => 'duc',
                'created_at' => '2018-09-28 18:48:35',
                'updated_at' => '2018-09-28 18:48:35',
            ),
            5 => 
            array (
                'id' => 7,
                'name' => 'Champions League',
                'alias' => 'champions-league',
                'created_at' => '2018-09-28 18:49:46',
                'updated_at' => '2018-09-28 18:49:46',
            ),
            6 => 
            array (
                'id' => 8,
                'name' => 'Chuyển Nhượng',
                'alias' => 'chuyen-nhuong',
                'created_at' => '2018-09-28 18:49:46',
                'updated_at' => '2018-09-28 18:49:46',
            ),
        ));
        
        
    }
}