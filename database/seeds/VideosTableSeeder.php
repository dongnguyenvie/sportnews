<?php

use Illuminate\Database\Seeder;

class VideosTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('videos')->delete();
        
        \DB::table('videos')->insert(array (
            0 => 
            array (
                'id' => 1,
            'title' => 'Everton 1-1 (pen 3-4) Southampton',
                'image' => 'everton_t.jpg',
                'link' => 'media-box/video/45684.bdmedia',
                'categories_id' => 1,
                'user_id' => 7,
                'created_at' => '2018-10-13 19:37:24',
                'updated_at' => '2018-10-04 17:09:20',
            ),
            1 => 
            array (
                'id' => 2,
                'title' => 'Pogba phớt lờ Mourinho trong buổi tập của M.U',
                'image' => 'pogba480_t.jpg',
                'link' => 'media-box/video/45675.bdmedia',
                'categories_id' => 1,
                'user_id' => 7,
                'created_at' => '2018-10-13 19:37:27',
                'updated_at' => '2018-10-04 17:09:20',
            ),
            2 => 
            array (
                'id' => 3,
                'title' => 'Hành động đẹp của Luke Shaw sau thất bại khiến fan nức lòng
',
                'image' => 'luke2_t.jpg',
                'link' => 'media-box/video/45667.bdmedia',
                'categories_id' => 1,
                'user_id' => 7,
                'created_at' => '2018-10-13 19:37:28',
                'updated_at' => '2018-10-04 17:09:20',
            ),
            3 => 
            array (
                'id' => 8,
                'title' => 'Aguero thác loạn, rời quán bar cùng 4 chân dài',
                'image' => 'aguero_1542195849.jpg',
                'link' => 'media-box/video/46376.bdmedia',
                'categories_id' => 1,
                'user_id' => 7,
                'created_at' => '2018-11-14 18:44:21',
                'updated_at' => '2018-11-14 18:44:20',
            ),
            4 => 
            array (
                'id' => 9,
                'title' => 'Real bắt đầu triều đại mới với Solari',
                'image' => 'anhsolari_1542196498.jpg',
                'link' => 'media-box/video/46380.bdmedia',
                'categories_id' => 3,
                'user_id' => 7,
                'created_at' => '2018-11-14 18:54:58',
                'updated_at' => '2018-11-14 18:54:58',
            ),
            5 => 
            array (
                'id' => 10,
                'title' => '5 bàn thắng đẹp nhất vòng 12 La Liga: Cú sút sấm sét của sao trẻ Real',
                'image' => 'chuyen-nhuong-real-chuan-bi-day-sao-tre-sang-liverpool_1542196602.jpg',
                'link' => 'media-box/video/46363.bdmedia',
                'categories_id' => 3,
                'user_id' => 7,
                'created_at' => '2018-11-14 18:56:42',
                'updated_at' => '2018-11-14 18:56:42',
            ),
            6 => 
            array (
                'id' => 11,
                'title' => 'Suarez chỉ thẳng mặt Pique sau trận thua Betis',
            'image' => 'tải xuống (5)_1542196678.jpg',
                'link' => 'media-box/video/46360.bdmedia',
                'categories_id' => 3,
                'user_id' => 7,
                'created_at' => '2018-11-14 18:57:58',
                'updated_at' => '2018-11-14 18:57:58',
            ),
            7 => 
            array (
                'id' => 12,
                'title' => 'Celta Vigo 2-4 Real Madrid',
                'image' => '15419794253823_1542196729.jpg',
                'link' => 'media-box/video/46332.bdmedia',
                'categories_id' => 3,
                'user_id' => 7,
                'created_at' => '2018-11-14 18:58:49',
                'updated_at' => '2018-11-14 18:58:49',
            ),
            8 => 
            array (
                'id' => 13,
                'title' => 'Văn Toàn và những pha xé lưới đối thủ tại V-League 2018',
            'image' => 'tải xuống (6)_1542196821.jpg',
                'link' => 'media-box/video/46044.bdmedia',
                'categories_id' => 2,
                'user_id' => 7,
                'created_at' => '2018-11-14 19:00:21',
                'updated_at' => '2018-11-14 19:00:21',
            ),
            9 => 
            array (
                'id' => 14,
                'title' => 'Thủ môn U19 Việt Nam cứu thua không tưởng trước U19 Hàn Quốc',
                'image' => '14731335-338696693152080-52363511362670752-n-1505371600301-92-0-394-487-crop-1505371621392_1542196965.jpg',
                'link' => 'media-box/video/45959.bdmedia',
                'categories_id' => 2,
                'user_id' => 7,
                'created_at' => '2018-11-14 19:02:45',
                'updated_at' => '2018-11-14 19:02:45',
            ),
            10 => 
            array (
                'id' => 15,
                'title' => 'Các cầu thủ Việt Nam thi nhau tặng quà cưới cho Trọng Hoàng',
            'image' => 'tải xuống (7)_1542197044.jpg',
                'link' => 'media-box/video/45922.bdmedia',
                'categories_id' => 2,
                'user_id' => 7,
                'created_at' => '2018-11-14 19:04:04',
                'updated_at' => '2018-11-14 19:04:04',
            ),
            11 => 
            array (
                'id' => 16,
                'title' => 'Bùi Tiến Dũng, Quang Hải chia sẻ kỷ niệm nhớ nhất với mẹ',
                'image' => 'nbz1535528346_1542197099.jpg',
                'link' => 'media-box/video/45902.bdmedia',
                'categories_id' => 2,
                'user_id' => 7,
                'created_at' => '2018-11-14 19:04:59',
                'updated_at' => '2018-11-14 19:04:59',
            ),
            12 => 
            array (
                'id' => 17,
                'title' => 'Sao Dortmund thi đấu toán, chấp khán giả dùng máy tính',
                'image' => 'anhsao_1542197299.jpg',
                'link' => 'media-box/video/46382.bdmedia',
                'categories_id' => 5,
                'user_id' => 7,
                'created_at' => '2018-11-14 19:08:19',
                'updated_at' => '2018-11-14 19:08:19',
            ),
            13 => 
            array (
                'id' => 18,
                'title' => 'Đã thua, Chủ tịch Bayern còn bị CĐV Dortmund hắt bia vào người',
                'image' => '019456438_30300-0943_1542197347.jpg',
                'link' => 'media-box/video/46341.bdmedia',
                'categories_id' => 5,
                'user_id' => 7,
                'created_at' => '2018-11-14 19:09:07',
                'updated_at' => '2018-11-14 19:09:07',
            ),
            14 => 
            array (
                'id' => 19,
                'title' => 'Dortmund 3-2 Bayern Munich',
                'image' => 'reus_1542197387.jpg',
                'link' => 'media-box/video/46305.bdmedia',
                'categories_id' => 5,
                'user_id' => 7,
                'created_at' => '2018-11-14 19:09:47',
                'updated_at' => '2018-11-14 19:09:47',
            ),
            15 => 
            array (
                'id' => 20,
                'title' => 'Reiss Nelson, người đứng sau thành công của Hoffenheim',
            'image' => 'images (1)_1542197444.jpg',
                'link' => 'media-box/video/46185.bdmedia',
                'categories_id' => 5,
                'user_id' => 7,
                'created_at' => '2018-11-14 19:10:44',
                'updated_at' => '2018-11-14 19:10:44',
            ),
            16 => 
            array (
                'id' => 21,
                'title' => 'Khoảnh khắc ngọt ngào của thủ môn Szczesny và bà xã xinh đẹp',
                'image' => 'zesny_1542197634.jpg',
                'link' => 'media-box/video/46368.bdmedia',
                'categories_id' => 4,
                'user_id' => 7,
                'created_at' => '2018-11-14 19:13:54',
                'updated_at' => '2018-11-14 19:13:54',
            ),
            17 => 
            array (
                'id' => 22,
                'title' => 'Điều gì đã xảy ra giữa Ronaldo và Higuain ở trận Milan - Juve',
            'image' => 'tải xuống (8)_1542197687.jpg',
                'link' => 'media-box/video/46342.bdmedia',
                'categories_id' => 4,
                'user_id' => 7,
                'created_at' => '2018-11-14 19:14:47',
                'updated_at' => '2018-11-14 19:14:47',
            ),
            18 => 
            array (
                'id' => 23,
                'title' => 'Ronaldo ghi bàn, Juve hạ đẹp Milan',
            'image' => 'tải xuống (9)_1542197727.jpg',
                'link' => 'media-box/video/46334.bdmedia',
                'categories_id' => 4,
                'user_id' => 7,
                'created_at' => '2018-11-14 19:15:27',
                'updated_at' => '2018-11-14 19:15:27',
            ),
            19 => 
            array (
                'id' => 24,
                'title' => 'Chân dung ông chủ mới 26 tuổi của Inter',
            'image' => 'tải xuống (10)_1542197804.jpg',
                'link' => 'media-box/video/45970.bdmedia"',
                'categories_id' => 4,
                'user_id' => 7,
                'created_at' => '2018-11-14 19:16:44',
                'updated_at' => '2018-11-14 19:16:44',
            ),
        ));
        
        
    }
}