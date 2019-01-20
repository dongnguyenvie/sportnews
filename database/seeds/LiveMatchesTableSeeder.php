<?php

use Illuminate\Database\Seeder;

class LiveMatchesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('live_matches')->delete();
        
        \DB::table('live_matches')->insert(array (
            0 => 
            array (
                'id' => 5,
                'title' => 'Arsenal 3-1 Leicester city',
                'summary' => '<p>Trận Đấu Bắt Đầu</p>',
                'image' => 'tag_reuters.com,2018_newsml_RC1DF68CD550_101416489_768x432_1540281478.jpg',
                'body' => '<p><strong>90\' Kết th&uacute;c trận đấu: Arsenal 3-1&nbsp;Leicester city </strong><img class="imso_gf__photo-img" src="https://ssl.gstatic.com/onebox/media/sports/photos/reuters/tag:reuters.com,2018:newsml_RC139AD6FBF0:959554756_768x432.jpg" alt="" /></p><p><strong>80\' Thay người Arsenal: Ozil-Ramsey</strong></p><p><img class="imso_gf__photo-img" src="https://ssl.gstatic.com/onebox/media/sports/photos/reuters/tag:reuters.com,2018:newsml_RC1AAF6677A0:94250751_768x432.jpg" alt="" /></p><p><strong>75\' Thay người Leicester city :Okazaki-Maddison</strong></p><p><strong>69\' Thay người Leicester city :Ghezzal-Pereira</strong></p><p><strong>66\' V&agrave;o Arsenal 3-1&nbsp;Leicester city:Aubameyang&nbsp;ghi b&agrave;n</strong><img class="imso_gf__photo-img" src="https://ssl.gstatic.com/onebox/media/sports/photos/reuters/tag:reuters.com,2018:newsml_RC1778499470:1004244358_768x432.jpg" alt="" /></p><p><strong>65\' The V&agrave;ng Perreira</strong></p><p><strong>64\' Thẻ V&agrave;ng Albringhton&nbsp;</strong></p><p><strong>63\' V&agrave;o Arsenal 2-1&nbsp;Leicester city:Aubameyang&nbsp;ghi b&agrave;n</strong><img class="imso_gf__photo-img" src="https://ssl.gstatic.com/onebox/media/sports/photos/reuters/tag:reuters.com,2018:newsml_RC19E0D8F080:543973732_768x432.jpg" alt="" /></p><p><strong>61\' Thay người Arsenal:Guendouzi - Mkhitaryan,Aubameyang Lichtsteiner</strong><br /><strong>Leicester city :Albringhton-Iheanancho</strong></p><p><strong>Hết Hiệp 1 :&nbsp;Arsenal 1-1&nbsp;Leicester city</strong></p><p><strong>45\' V&agrave;o Arsenal 1-1&nbsp;Leicester city:Ozil ghi b&agrave;n</strong><img class="imso_gf__photo-img" src="https://ssl.gstatic.com/onebox/media/sports/photos/reuters/tag:reuters.com,2018:newsml_RC1469FD9A70:1755036069_768x432.jpg" alt="" /></p><p><strong>35\' Thẻ v&agrave;ng Xhaka</strong></p><p><img class="imso_gf__photo-img" src="https://ssl.gstatic.com/onebox/media/sports/photos/reuters/tag:reuters.com,2018:newsml_RC1EFB1120C0:1470850030_768x432.jpg" alt="" /></p><p><strong>31\' Arsenal 0-1&nbsp;Leicester city:Bellerin Phản lưới nh&agrave;&nbsp;</strong></p><p><img class="imso_gf__photo-img" src="https://ssl.gstatic.com/onebox/media/sports/photos/reuters/tag:reuters.com,2018:newsml_RC110E344790:916972617_768x432.jpg" alt="" width="770" height="433" /></p><p><strong>17\' Thẻ v&agrave;ng Rob Holding</strong></p><p><strong>02:00 Bắt Đầu&nbsp;</strong></p><p><strong>Đội H&igrave;nh Xuất Ph&aacute;t</strong><br /><strong>Arsenal:</strong></p><p>Leno,Bellerin,Mustafi,Holding,Lichtsteiner,Torriera,Xhaka,Mkhitaryan,Ozil,Iwobi,Lacazette<br /><strong>Leicester city:</strong></p><p>Schmeichel,Evans,Maguire,Amartey,Chilwell,Ndidi,Mendy,Periera,Maddison,Vardy,Iheanacho</p>',
                'status' => 1,
                'created_at' => '2018-10-23 14:57:58',
                'updated_at' => '2018-10-30 16:06:32',
            ),
        ));
        
        
    }
}