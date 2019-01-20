<?php

use Illuminate\Database\Seeder;

class AdvertisementsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('advertisements')->delete();
        
        \DB::table('advertisements')->insert(array (
            0 => 
            array (
                'id' => 8,
                'client_name' => 'shop',
                'image' => 'shop_364x90_1541412458.jpg',
                'position' => 1,
                'price' => 600000,
                'total' => 600000,
                'date_start' => '2018-11-04',
                'date_end' => '2018-12-04',
                'created_at' => '2018-11-05 17:07:38',
                'updated_at' => '2018-11-05 17:42:00',
            ),
            1 => 
            array (
                'id' => 9,
                'client_name' => 'shop2',
                'image' => 'images_1541418976.png',
                'position' => 1,
                'price' => 600000,
                'total' => 1200000,
                'date_start' => '2018-11-04',
                'date_end' => '2019-01-04',
                'created_at' => '2018-11-05 18:56:16',
                'updated_at' => '2018-11-05 18:56:16',
            ),
            2 => 
            array (
                'id' => 10,
                'client_name' => 'shop3',
                'image' => 'tải xuống_1541419203.jpg',
                'position' => 2,
                'price' => 300000,
                'total' => 300000,
                'date_start' => '2018-11-04',
                'date_end' => '2018-12-04',
                'created_at' => '2018-11-05 19:00:03',
                'updated_at' => '2018-11-05 19:00:03',
            ),
            3 => 
            array (
                'id' => 11,
                'client_name' => 'shop4',
                'image' => 'images_1541419376.jpg',
                'position' => 2,
                'price' => 300000,
                'total' => 600000,
                'date_start' => '2018-11-04',
                'date_end' => '2019-01-04',
                'created_at' => '2018-11-05 19:00:26',
                'updated_at' => '2018-11-05 19:03:13',
            ),
            4 => 
            array (
                'id' => 12,
                'client_name' => 'shop5',
            'image' => 'tải xuống (2)_1541423495.jpg',
                'position' => 2,
                'price' => 300000,
                'total' => 300000,
                'date_start' => '2018-11-04',
                'date_end' => '2018-12-04',
                'created_at' => '2018-11-05 20:11:35',
                'updated_at' => '2018-11-05 20:11:35',
            ),
        ));
        
        
    }
}