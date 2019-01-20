<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('posts')->delete();
        
        \DB::table('posts')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'Cứ mù quáng với Kante thế, sao không dùng Fabregas đi Sarri !',
                'summary' => '<p>Trong trận đấu với West Ham, N\'Golo Kante đã bộc lộ nhiều hạn chế trong vai trò tiền vệ lệch phải, thế nhưng HLV Sarri vẫn kiên quyết nói không với Cesc Fabregas.</p>',
                'body' => '<p>Sau loạt trận trong khuôn khổ vòng 6 Premier League diễn ra vào hai ngày thứ bảy và chủ nhật vừa qua, Chelsea đã chính thức bị West Ham cắt đứt mạch toàn thắng với một trận hòa 0-0 đầy thất vọng. Chứng kiến màn trình diễn của diễn của thầy trò Maurizio Sarri, không khó để nhận ra "điểm đen" của họ trên sân London Stadiom không ai khác chính là N\'Golo Kante. Nói về những gì cựu sao Leicester đã làm ngày hôm qua, tất cả đều gói gọn trong hai từ: thất vọng. Công bằng mà nói, Kante là một tiền vệ đẳng cấp. Nhắc đến cầu thủ người Pháp, người ta sẽ nghĩ ngay đến một "chiếc máy quét" hoạt động không biết mệt mỏi, có mặt tại mọi điểm nóng để giúp đội nhà giành lại quyền kiểm soát bóng. Huyền thoại Patrick Vieira đã từng mô tả Kante là "ước mơ của mọi HLV" khi chứng kiến sự siêng năng và tinh thần hỗ trợ đồng đội của cầu thủ này. Còn Paul Pogba, ngôi sao của Manchester United từng phải thốt lên rằng cầu thủ 27 tuổi thi đấu trên sân như thể có tới 15 lá phổi. Trong sơ đồ 3-4-3 của HLV tiền nhiệm Antonio Conte, Kante không nghi ngờ gì chính là mắt xích quan trọng nhất. Thế nhưng với Sarri-ball thì ngược lại hoàn toàn. Đã bao giờ bạn tự hỏi vì sao khi đã có trong tay "niềm mơ ước của mọi HLV" rồi, Chelsea vẫn phải chi ra tới 57 triệu bảng Anh để đem về Jorginho. Đó là bởi vị trí tiền vệ phòng ngự trong hệ thống Sarri-ball không chỉ yêu cầu khả năng đánh chặn, thu hồi bóng mà còn đòi hỏi người đảm nhiệm phải có một khối óc thực sự sáng tạo, một nhãn quang chiến thuật thực sự sắc bén để có thể thành mắt xích khởi đầu cho các đợt tấn công. Và Jorginho làm được điều đó, còn Kante thì không. Đáng ra với việc Jorginho cập bến Stamford Bridge, Kante nên bị đưa lên băng ghế dự bị. Thế nhưng có lẽ bởi những gì anh đã thể hiện từ ngày chuyển tới khoác áo đội bóng thành tây London cũng như tại kỳ World Cup 2018 vừa qua là quá đỗi ấn tượng, HLV Sarri đang có phần mù quáng tin tưởng tiền vệ này. Ông để Jorginho chiếm chỗ của Kante, nhưng lại "bù" cho số 7 vị trí tiền vệ lệch phải. Thế nhưng sau khởi đầu tương đối khả quan, Kante đang dần bộc lộ nhiều hạn chế. Anh thường xuyên có những pha bóng chuyền ngang ở khu vực giữa sân - dễ khiến cho đối thủ cướp bóng và tiến hành phản công, dứt điểm thiếu hiệu quả đồng thời thiếu đi những đường chuyền mang tính đột biến cao. Nhìn vào các thông số thống kê sau trận, Chelsea kiểm soát bóng tới 72%, tung ra 17 cú sút nhưng lại chỉ có 6 cú đi trúng cầu môn. Sự bế tắc trước một hàng phòng ngự theo kiểu xe buýt hai tầng của West Ham là điều quá dễ để nhìn ra. The Blues có một hàng công cực mạnh siêu sao Eden Hazard. Sau trận đấu, nhiều CĐV hẳn đã tặc lưỡi với nhau rằng "ngày hôm nay, đôi chân của tiền đạo người Bỉ bỗng dưng hết phép". Thế nhưng, nguyên nhân sâu xa đến từ nơi hàng tiền vệ khi mà tam tấu nơi tuyến hai chỉ biết chuyền qua chuyền lại, đặc biệt là Kante. Vậy thì câu hỏi đặt ra lúc này là, sao Sarri cứ mãi đày đọa Fabregas thế nhỉ?</p>',
                'image' => 'sei_24279276-c038-e1534185952368_1537973447.jpg',
                'views' => 12,
                'categories_id' => 1,
                'user_id' => 7,
                'Breaking_news' => 1,
                'created_at' => '2018-10-13 19:25:58',
                'updated_at' => '2018-10-02 18:51:09',
            ),
            1 => 
            array (
                'id' => 2,
                'title' => '"Những áp lực sẽ hủy hoại Mourinho và Manchester United"',
                'summary' => 'Cựu thuyền trưởng ĐT Anh tin rằng Manchester United sẽ rất khó nằm trong top bốn sau khi kết thúc mà giải năm nay nếu không tập trung.',
                'body' => 'Sau 3 chiến thắng liên tiếp trên mọi đấu trường,Jose Mourinho và các học trò đã bị tân binh Wolves cầm chân ngay trên sân nhà với trận hòa 1-1. Kết quả này khiến Quỷ đỏ mới chỉ kiếm được 10 điểm sau 6 vòng đấu và xếp thứ 7 trên BXH. 

Đáng chú ý, nội bộ Manchester United tiếp tục dậy sóng vì mối quan hệ giữa "Người đặc biệt" và Paul Pogba. Cầu thủ người Pháp đã công khai chỉ trích lối chơi của nhà cầm quân 55 tuổi. Theo Sam Allardyce, M.U cần phải sớm cải thiện tình hình nếu không muốn bị văng khỏi top bốn vào cuối mùa.

Như thường lệ luôn có bất ngờ ở những vòng đấu đầu tiên, ở mùa giải năm nay đó là Watford. Trong khi đó, đội bóng đáng phải lo lắng nhất trong top 6 có lẽ là Manchester United. Sẽ là cuộc chiến thực sự nếu họ không tập trung cho mục tiêu top bốn", chiến lược gia 63 tuổi chia sẻ.

"Tôi nghĩ điều này sẽ hủy hoại Jose Mourinho và M.U, nhưng thực ra còn hơi sớm để nói. Có những dấu hiệu cho thấy họ đang đi đúng hướng, bằng chứng là trận thắng dễ dàng ở Champions League. Nhưng có lẽ trận đấu đó đã làm ảnh hưởng đến vài cầu thủ", "Big Sam" nói thêm.

Jose Mourinho và các học trò sẽ tiếp tục được thi đấu trên sân nhà Old Trafford với cuộc tiếp đón Derby County ở vòng 3 Carabao Cup. Nhà cầm quân người Bồ Đào Nha sẽ có cơ hội tái ngộ cậu học trò cũ Frank Lampard trên cương vị HLV trưởng. ',
                'image' => 'wolves2-1713.jpg',
                'views' => 6,
                'categories_id' => 1,
                'user_id' => 7,
                'Breaking_news' => 1,
                'created_at' => '2018-10-13 19:26:02',
                'updated_at' => '2018-10-29 17:50:05',
            ),
            2 => 
            array (
                'id' => 3,
                'title' => '3 điều rút ra sau trận Arsenal - Everton: Pháo đã lên nòng',
                'summary' => 'Cùng nhìn lại 3 điểm đáng chú ý sau trận đấu giữa Arsenal và Everton.',
                'body' => '1. Emery đã tìm ra đáp án cho hàng công

Khởi đầu mùa giải, các cổ động viên đã tỏ ra lo lắng về khả năng kết hợp 2 chân sút hàng đầu, Alexandre Lacazette và Pierre-Emerick Aubameyang trên hàng công.

Trước lúc chuyển đến Arsenal, bộ đôi này đã tạo dựng tên tuổi ở vị trí trung phong cắm khi lần lượt thể hiện khả năng săn bàn đáng sợ tại Lyon và Dortmund.

Tuy nhiên, HLV Emery lại không ưa chuộng lối đá sử dụng 2 tiền đạo và điều đó đã khiến cuộc cạnh tranh giành một suất đá chính ở đội bóng thành London bỗng trở nên khốc liệt.

Dù vậy, sau một khoảng thời gian, chiến lược gia người Tây Ban Nha đã tìm ra công thức hoàn hảo nhất cho hàng công Arsenal khi cùng sử dụng cả Lacazette và Aubameyang.

Sự khác biệt chỉ nằm ở chỗ, Lacazette với khả năng xử lý bóng và dứt điểm tốt hơn sẽ được ưu tiên ở vị trí trung phong cắm. Trong khi đó, Aubameyang với tốc độ cùng khả năng tạt cánh ấn tượng sẽ được xuất phát ở biên trái.

Đối đầu West Ham, bộ đôi này đã có những tình huống phối hợp hiệu quả và không ngừng làm khuynh đảo hàng phòng ngự Everton. 

Nếu như tiếp tục duy trì sự ăn ý và khả năng săn bàn đáng gờm này, cặp "song sát" Aubameyang - Lacazette hoàn toàn có thể đưa Arsenal tiến xa hơn trên bảng xếp hạng.

2. Tương lai nào cho Marco Silva?

Mùa giải năm ngoái có thể xem là một khoảng thời gian "hoảng loạn" với The Toffees khi họ phải sử dụng đến 3 huấn luyện viên, Ronaldo Koeman, David Unsworth (tạm quyền) và Sam Allardyce nhưng chỉ kết thúc ở vị trí thứ 8 và không thể tham dự Cúp Châu Âu 2018/19.

Nhằm hướng đến những kết quả thành công hơn, đội bóng vùng Merseyside đã đưa về chiến lược gia trẻ tài năng và đã tạo được tiếng vang ở Premier League, Marco Silva.

Cùng với đó, Everton cũng không ngần ngại chiêu mộ những cầu thủ có tên tuổi như Yerry Mina, Richarlison, Lucas Digne hay mượn về Andre Gomes, Kurt Zouma để tăng cường lực lượng.

Vậy nhưng sau 6 vòng đấu, đoàn quân của HLV Marco Silva chỉ giành được đúng 1 chiến thắng (trước Southampton), hòa 3 (Wolves, Bournemouth, Huddersfield) và để thua 2 (Arsenal, West Ham).

Với những kết quả không mấy ấn tượng trên, Everton đã trôi dạt xuống vị trí thứ 12 và chỉ còn hơn đội đứng thứ 17, West Ham 2 điểm.

Sở hữu lực lượng đáng gờm, chiều sâu đội hình đáng nể cùng tham vọng cạnh tranh suất dự Cúp Châu Âu, nếu như không sớm cải thiện phong độ, nhiều khả năng HLV Marco Silva sẽ phải đối mặt với một tấm trát sa thải thời gian tới.

3. Arsenal đã trở lại?

Sau khoảng thời gian đầu mùa gây thất vọng với 2 trận thua liên tiếp trước Man City (0-2) và Chelsea (2-3), Arsenal đã lấy lại phong độ với chuỗi 5 chiến thắng liên tiếp ở mọi đấu trường.

Các nhân tố trụ cột như Petr Cech, Granit Xhaka, Mesut Ozil, Pierre-Emerick Aubameyang và Alexandre Lacazette thay nhau tỏa sáng đã giúp HLV Emery an tâm hơn phần nào.

Không những thế, sự hòa nhập tốt của các tân binh như Sokratis Papastathopoulos, Matteo Guendouzi hay Lucas Torreira cũng giúp Arsenal có thêm nhiều sự lựa chọn hơn.

Tuy nhiên, mùa giải vẫn còn rất dài và nếu vượt qua "chặng tourmalet" tháng 10-11 cùng khoảng thời gian Giáng Sinh - Năm mới, chúng ta mới có thể đưa ra kết luận chính xác hơn về thực lực thật sự của thầy trò HLV Emery mùa này.',
                'image' => 'arsenal-4-1705.jpg',
                'views' => 4,
                'categories_id' => 1,
                'user_id' => 7,
                'Breaking_news' => 1,
                'created_at' => '2018-10-29 17:48:05',
                'updated_at' => '2018-10-29 17:48:05',
            ),
            3 => 
            array (
                'id' => 4,
                'title' => 'Góc Chelsea: Người hâm mộ đang quá ảo tưởng',
                'summary' => 'Chỉ sau 1 trận hòa, thái độ của NHM Chelsea dành cho Sarri đã thay đổi nhanh đến chóng mặt. Phải chăng các CĐV của The Blues đã quá \'ảo tưởng\' về sức mạnh đội bóng.',
                'body' => 'Kết thúc lượt trận vòng 6 Premier League, chuỗi trận toàn thắng của Chelsea trong mùa giải năm nay đã chính thức khép lại với trận hòa 0-0 trước West Ham. Việc đối thủ là một đội bóng từng thua tới 4/5 vòng đấu trước đó, không quá khó hiểu khi HLV Sarri và các học trò của mình đã phải hứng chịu không ít sự chỉ trích trong những giờ qua.

Thực tế mà nói, đây là một trận đấu không thật sự tốt của Chelsea, đặc biệt là trên hàng công, khi những Hazard, Willian, Giroud,... đều đã có một trận đấu dưới sức và phung phí không ít cơ hội có được. Trong khi đó ở tuyến 2, nhưng Kante, Jorginho, Kovacic cũng chỉ thi đấu ở mức tròn vai chứ, không thể tạo nên nhiều sự đột biến trong lối chơi.


Chelsea không thể thắng, rõ ràng đó là một kết quả tương đối thất vọng đối với họ. Tuy nhiên một trận hòa thực tế vẫn chưa thể nói lên nhiều điều, và cũng chẳng thể xem đó là một thảm họa dành cho thầy trò của HLV Sarri. Cần phải nhớ rằng màn trình diễn của West Ham trong trận Derby London lần này là không hề tệ như những vòng đấu đầu mùa trước đó.

Đã có rất nhiều chỉ trích nhắm thắng vào chuyên môn và tài cầm quân của HLV Sarri trong trận đấu này, đặc biệt là việc sử dụng Kante như một tiền vệ có xu hướng tấn công, trong khi bản thân cầu thủ người Pháp luôn được biết đến như một trong những tiền vệ đánh chặn hay nhất thế giới hiện tại.

Đây thật sự là điều khá hài hước, khi trước đó cũng với những cách sử dụng con người như thế và giành được 5 chiến thắng liên tiếp, Sarri đã được gọi là một nhà cách mạng về mặt chiến thuật, một người đã mang tới cho The Blues một phong cách mới, một điều khiến cho đội bóng này trở nên đáng sợ và đáng xem hơn.

Có lẽ khi đã quá bay bổng với những thành tích tuyệt vời mà HLV Sarri đã có được trước thời điểm đối mặt với West Ham, các CĐV Chelsea đã dần xuất hiện những suy nghĩ hơi thiếu thực tế và phần nào quên đi những khó khăn thực tại mà đội bóng đang phải đối mặt. Có vẻ như họ đã quên rằng Chelsea đã phải đối mặt với một cơn khủng hoảng lớn đến thế nào trong mùa Hè vừa qua, và quan trọng nhất, Sarri cũng chỉ mới tiếp quản đội bóng được vài tháng.

Với những ai đã và đang chỉ trích HLV Sarri sau trận hòa với West Ham vừa qua, có lẽ đã đến lúc họ nên bớt mơ mộng và đối mặt với những thực tại đang diễn ra, đã đến lúc họ phải tiếp tục ủng hộ và tin tưởng vị chiến lược gia người Ý, và cùng ông tiếp tục cuộc hành trình vực dậy Gã khổng lồ một thời của thành London. ',
                'image' => '3a_1-1620.jpg',
                'views' => 6,
                'categories_id' => 1,
                'user_id' => 7,
                'Breaking_news' => 1,
                'created_at' => '2018-10-29 17:45:58',
                'updated_at' => '2018-10-29 17:45:58',
            ),
            4 => 
            array (
                'id' => 5,
                'title' => 'Arsenal: Chỉ đáng sợ với những đội bóng nhỏ mà thôi!',
                'summary' => 'Arsenal tiếp tục nối dài mạch chiến thắng của mình, nhưng 3 điểm có được trước Everton thực sự chưa thuyết phục.',
                'body' => 'Vừa qua, Arsenal không ngoài dự đoán đã tiếp tục kéo dài chuỗi trận bất bại của mình lên con số 5 sau chiến thắng trước các vị khách đến từ thành phố cảng - Everton. Thế nhưng nhìn vào diễn biến trận đấu, rõ ràng 3 điểm giành được của thầy trò Unai Emery là chưa thực sự thuyết phục. 

Vấn đề đầu tiên, đó là thường xuyên dâng cao. Thực chất, đây là một vấn đề mang tính hệ thống nơi các Pháo thủ. Dưới thời tân HLV Unai Emery, Arsenal luôn dâng cao để ép sân, cố gắng để bóng chỉ lăn trên phần sân nhỏ nhất có thể. Thế nhưng lối chơi này có lẽ chỉ phù hợp để đối đầu với những đội bóng nhỏ - những người không có khả năng trừng phạt sai lầm của họ.

Không chỉ trong trận đấu ngày hôm nay, mà mỗi lúc để các đối thủ cướp bóng và thực hiện những đường chọc khe nhanh, hàng thủ dâng lên quá cao của The Gunners lại tỏ rõ sự bất lực và chỉ biết cầu nguyện cho khung thành đang đặt trong thế báo động đỏ của Petr Cech không gặp chuyện gì - điển hình là pha thoát xuống của Dominic Calvert-Lewin ở những phút đầu trận đấu trong khi Mustafi và Nacho Moreal bị bỏ lại phía sau cả "cây số". 

Vấn đề thứ hai, đó là các học trò của cựu thuyền trưởng PSG chơi bóng một cách quá "gắt". Họ thường xuyên phạm lỗi và để Everton có những tình huống đá phạt ở vị trí khá gần với vòng cấm. Tất nhiên, lại một lần nữa chúng ta lại phải nhắc đến khả năng tận dụng cơ hội của đội bóng nửa xanh thành Merseysides. Họ không có những chuyên gia đá phạt, cũng không có những "sát thủ" thực sự trên hàng công.


Thế nhưng nếu như đối thủ trận này của Arsenal không phải The Toffees mà là Chelsea với Eden Hazard - Olivier Giroud hay Tottenham với Christian Eriksen - Harry Kane thì sao? Chưa hết, với một lối đá thiên thể lực như vậy, lại thêm đội hình không phải quá có chiều sâu, liệu Arsenal có bị đuối ở giai đoạn cao điểm Giáng sinh như cái cách mà họ vẫn thể hiện dưới thời HLV tiền nhiệm Arsene Wenger?

Vấn đề cuối cùng, đó là những bàn thắng. Có thể bạn sẽ phải thốt lên, bàn thắng là điều tốt mà, chẳng lẽ cũng có vấn đề ư? Đương nhiên là có. Tình huống lập công nâng tỉ số của Aubameyang thì chẳng cần bàn đến, đó rõ ràng là món quà mà nữ thần may mắn đã ban cho cầu thủ người Gabon khi các trọng tài không phát hiện ra anh đã đứng trong tư thế việt vị.

Thế nhưng còn pha mở điểm của Alexandre Lacazette thì sao? Đó rõ ràng là một siêu phẩm, nhưng mang dấu ấn cá nhân của chân sút này nhiều hơn là dấu ấn chiến thuật của Unai Emery - những pha ban bật xé toang hàng phòng ngự đối thủ. Nhìn đường kiến tạo của Aaron Ramsey mà xem, trước khi quyết định cứa lòng, trước mắt số 9 vẫn là một rừng những cái bóng áo đen.  ',
                'image' => '_n0y08570-1558.jpg',
                'views' => 0,
                'categories_id' => 1,
                'user_id' => 7,
                'Breaking_news' => 1,
                'created_at' => '2018-10-13 19:26:06',
                'updated_at' => '2018-09-24 19:06:23',
            ),
            5 => 
            array (
                'id' => 6,
                'title' => '"Liverpool nên biết sợ Chelsea và Man City là vừa"',
                'summary' => 'Hai vòng đấu sắp tới của Premier League, Liverpool sẽ lần lượt phải chạm trán với hai đối thủ đáng gờm, Chelsea và Man City.',
                'body' => 'Đoàn quân của HLV Jurgen Klopp đang có một khởi đầu tuyệt vời ở mùa giải năm nay khi đã giành 6 chiến thắng liên tiếp ở Premier League. 

Trong khi đó, cả Man City và Chelsea đều đã có những làn vấp ngã khi lần lượt để Wolves và West Ham cầm hòa.

Với kết quả đó, hai kình địch "áo xanh" hiện đang tạm xếp dưới Liverpool với khoảng cách 2 điểm kém hơn. Tuy nhiên, họ sẽ có cơ hội san bằng cách biệt khi lần lượt đối đầu trực tiếp với The Kop ở 2 vòng đấu sắp tới tại Premier League.

Đây sẽ là một thử thách không nhỏ dành cho HLV Jurgen Klopp khi đội bóng vùng Merseyside mới chỉ có thể đánh bại các đối thủ "chiếu dưới" như West Ham, Crystal Palace, Leicester, Brighton và Southampton.

"Ông lớn" duy nhất The Kop phải đối mặt, Tottenham lúc đó lại đang không có phong độ tốt và bị đánh giá thấp về chiều sâu lực lượng.

Mới đây, chiến lược gia danh tiếng ở Premier League, Sam Alladryce đã đưa ra lời nhận định cho giai đoạn sắp tới của Liverpool ở Premier League.

Theo ông, chấn thương của Virgil Van Dijk sẽ khiến The Kop bị suy yếu khá nhiều khi phải đối mặt với Chelsea hay Liverpool.
Trả lời kênh talkSPORT, Sam Alladryce nói: "Tôi nghĩ Liverpool sẽ mất Van Dijk trong khoảng 1 vài tuần sắp tới. Cậu ấy là một nhân tố quan trọng trong chiến thuật của HLV Klopp.

Với việc phải đối mặt với Man City và Chelsea trong giai đoạn tiếp theo, tôi nghĩ, Liverpool nên lo lắng là vừa".

',
                'image' => 'liverpool-3-1537.jpg',
                'views' => 0,
                'categories_id' => 1,
                'user_id' => 7,
                'Breaking_news' => 0,
                'created_at' => '2018-10-13 19:26:08',
                'updated_at' => '2018-09-24 19:06:23',
            ),
            6 => 
            array (
                'id' => 7,
                'title' => 'Man Utd "ngầm" thử việc cựu sao mai Newcastle United',
                'summary' => 'Quỷ đỏ được cho là có ý định chiêu mộ thủ thành trẻ tuổi Paul Woolston.',
                'body' => 'Trưởng thành từ lò đào tạo của Newcastle United, thủ môn sinh năm 1998 đã được mang cho mượn ở nhiều đội bóng khác nhau, trong đó có Darlington FC và Gateshead FC. Tuy nhiên, trong phiên chợ Hè vừa qua Paul Woolston đã chính thức chia tay "Chích chòe" và trở thành cầu thủ tự do.

Vừa qua, thủ môn 20 tuổi đã có mặt trên băng ghế dự bị trong chiến thắng 2-0 của U23 Manchester United trước U23 Middlesbrough. Sự lựa chọn số một trong khung gỗ của đội trẻ Quỷ đỏ vẫn là Matej Kovar, thủ môn năm nay mới 18 tuổi người Cộng hòa Séc.

Tuy nhiên, M.E.N tiết lộ ban huấn luyện M.U muốn tạo sự cạnh tranh cho vị trí thủ môn và Paul Woolston đã được đưa vào tầm ngắm. Bên cạnh hai cái tên nói trên, Manchester United đang sở hữu thủ thành tài năng khác đó là Alex Fojticek. 


Trước đó, M.U đã chiêu mộ Theo Richardson từ Leeds United hồi tháng Giêng năm 2017 để tăng cường cho đội dự bị. Tuy nhiên, Quỷ đỏ cũng đã giải phóng hợp đồng với thủ thành người Anh trong phiên chợ Hè năm nay.

Manchester United cũng đã bán đứt thủ thành Sam Johnstone cho West Brom với mức giá 7,35 triệu euro. Sau khi những Kieran O\'Hara, Dean Henderson và Joel Pereira được mang cho mượn, đội U23 M.U đã thiếu hụt nhân sự ở vị trí thủ môn. ',
                'image' => 'woolston2-1520.jpg',
                'views' => 0,
                'categories_id' => 1,
                'user_id' => 7,
                'Breaking_news' => 0,
                'created_at' => '2018-10-13 19:26:10',
                'updated_at' => '2018-09-24 19:06:23',
            ),
            7 => 
            array (
                'id' => 92,
                'title' => 'Luke Shaw mượn Martial \'đá đểu\' pha chạy đà gây ức chế của Pogba',
                'summary' => '<p><span style="color: #444444; font-family: robotoslab-regular; font-size: 15px; font-weight: bold;">Sau trận thắng 2-1 của Man Utd trước Everton, Luke Shaw đ&atilde; chia sẻ th&ocirc;ng điệp &yacute; nghĩa v&agrave; cũng rất h&agrave;i hước.</span></p>',
                'body' => '<p style="margin: 0px 0px 20px; padding: 0px; list-style: none; outline: 0px; line-height: 24px; box-sizing: border-box; border: 0px; font-size: 15px; vertical-align: top; background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; text-align: justify; font-family: robotoslab-regular;">Tại Old Trafford, Man Utd đ&atilde; c&oacute; m&agrave;n tr&igrave;nh diễn kh&aacute; ấn tượng. Paul Pogba l&agrave; người mở tỉ số cho Quỷ đỏ với c&uacute; s&uacute;t bồi th&agrave;nh c&ocirc;ng sau quả penalty kh&ocirc;ng th&agrave;nh do ch&iacute;nh anh thực hiện. Đặc biệt, Pogba vẫn g&acirc;y ch&uacute; &yacute; với c&aacute;ch chạy đ&agrave; chậm r&atilde;i khiến nhiều người phải ức chế.</p>
<p style="margin: 0px 0px 20px; padding: 0px; list-style: none; outline: 0px; line-height: 24px; box-sizing: border-box; border: 0px; font-size: 15px; vertical-align: top; background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; text-align: justify; font-family: robotoslab-regular;">Anthony Martial l&agrave; người n&acirc;ng tỉ số trận đấu l&ecirc;n 2-0 cho Man Utd trong hiệp 2, trước khi Sigurdsson ghi b&agrave;n thắng cuối c&ugrave;ng của trận đấu từ chấm 11m.</p>
<figure class="expNoEdit" style="padding: 0px; list-style: none; outline: 0px; line-height: 24px; box-sizing: border-box; border: 0px; font-size: 15px; vertical-align: top; background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; width: 630px; text-align: center; font-family: robotoslab-regular; margin: 0px auto 8px !important;"><img style="padding: 0px; list-style: none; outline: 0px; line-height: 24px; box-sizing: border-box; border: 0px; vertical-align: top; background: 0px 0px; object-fit: cover; max-width: 100%; margin: 0px !important; height: auto !important;" src="http://media.bongda.com.vn/files/thach.pham/2018/10/29/gettyimages-1054670570-612x612-0110-1701.jpg" alt="Luke Shaw mượn Martial đ&aacute; đểu pha chạy đ&agrave; g&acirc;y ức chế của Pogba - B&oacute;ng Đ&aacute;" width="612" height="518" />
<figcaption style="margin: 0px; padding: 3px; list-style: none; outline: 0px; line-height: 24px; box-sizing: border-box; border: 0px; vertical-align: top; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-style: italic;">
<h2 class="expEdit" style="margin: 0px; padding: 0px; list-style: none; outline: 0px; line-height: 24px; box-sizing: border-box; border: 0px; font-size: 15px; vertical-align: top; background: 0px 0px; font-weight: 400; display: inline;">&nbsp;Martial đang c&oacute; phong độ tuyệt vời.</h2>
</figcaption>
</figure>
<p style="margin: 0px 0px 20px; padding: 0px; list-style: none; outline: 0px; line-height: 24px; box-sizing: border-box; border: 0px; font-size: 15px; vertical-align: top; background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; text-align: justify; font-family: robotoslab-regular;">Sau trận đấu, Luke Shaw đ&atilde; l&ecirc;n tiếng khen ngợi người đồng đội Martial, v&agrave; ngỏ &yacute; k&ecirc;u gọi tiền đạo người Ph&aacute;p mau ch&oacute;ng gia hạn hợp đồng với Quỷ đỏ. Đồng thời, Shaw kh&ocirc;ng qu&ecirc;n \'đ&aacute; đểu\' Pogba:<em style="margin: 0px 0px 15px; padding: 0px; list-style: none; outline: 0px; line-height: 24px; box-sizing: border-box; border: 0px; vertical-align: top; background: 0px 0px;">&nbsp;"Martial, h&atilde;y trở lại mạnh mẽ hơn nữa v&agrave; gia hạn hợp đồng với Man Utd. Đ&oacute; l&agrave; những điều bạn c&oacute; thể l&agrave;m trong khi Pogba chạy đ&agrave; thực hiện penalty."</em></p>
<div id="ads_55" class="adv" style="margin: 0px; padding: 0px; list-style: none; outline: 0px; line-height: 24px; box-sizing: border-box; border: 0px; font-size: 15px; vertical-align: top; background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; text-align: center; overflow: hidden; font-family: robotoslab-regular;">
<div class="e" style="margin: 0px; padding: 0px; list-style: none; outline: 0px; line-height: 24px; box-sizing: border-box; border: 0px; vertical-align: top; background: 0px 0px;">&nbsp;</div>
</div>
<div class="new_relation_top pkg in-article-related-news" style="margin: 0px -10px 10px; padding: 0px 10px; list-style: none; outline: 0px; line-height: 24px; box-sizing: border-box; border: 0px #bababa; font-size: 15px; vertical-align: top; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; position: relative; font-family: robotoslab-regular;">&nbsp;</div>
<figure class="expNoEdit" style="padding: 0px; list-style: none; outline: 0px; line-height: 24px; box-sizing: border-box; border: 0px; font-size: 15px; vertical-align: top; background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; width: 630px; text-align: center; font-family: robotoslab-regular; margin: 0px auto 8px !important;"><img style="padding: 0px; list-style: none; outline: 0px; line-height: 24px; box-sizing: border-box; border: 0px; vertical-align: top; background: 0px 0px; object-fit: cover; max-width: 100%; margin: 0px !important; height: auto !important;" src="http://media.bongda.com.vn/files/thach.pham/2018/10/29/44963650_720654321638679_3628005260577996800_n-1656.jpg" alt="Luke Shaw mượn Martial đ&aacute; đểu pha chạy đ&agrave; g&acirc;y ức chế của Pogba - B&oacute;ng Đ&aacute;" width="745" height="853" />
<figcaption style="margin: 0px; padding: 3px; list-style: none; outline: 0px; line-height: 24px; box-sizing: border-box; border: 0px; vertical-align: top; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-style: italic;">
<h2 class="expEdit" style="margin: 0px; padding: 0px; list-style: none; outline: 0px; line-height: 24px; box-sizing: border-box; border: 0px; font-size: 15px; vertical-align: top; background: 0px 0px; font-weight: 400; display: inline;">&nbsp;Th&ocirc;ng điệp Luke Shaw gửi đến Martial v&agrave; Pogba.</h2>
</figcaption>
</figure>
<p style="margin: 0px 0px 20px; padding: 0px; list-style: none; outline: 0px; line-height: 24px; box-sizing: border-box; border: 0px; font-size: 15px; vertical-align: top; background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; text-align: justify; font-family: robotoslab-regular;">Sau trận thắng, HLV Mourinho cũng đ&atilde; l&ecirc;n tiếng khen ngợi bộ đ&ocirc;i Shaw v&agrave; Martial:&nbsp;<em style="margin: 0px 0px 15px; padding: 0px; list-style: none; outline: 0px; line-height: 24px; box-sizing: border-box; border: 0px; vertical-align: top; background: 0px 0px;">"T&ocirc;i hạnh ph&uacute;c với sự tiến bộ của Martial, của Luke Shaw. Họ đ&atilde; c&oacute; những thời điểm kh&oacute; khăn, v&agrave; g&acirc;y kh&oacute; khăn cho ch&iacute;nh t&ocirc;i, bởi t&ocirc;i muốn nhiều hơn ở họ, muốn họ đi đến giới hạn.</em></p>
<p style="margin: 0px 0px 20px; padding: 0px; list-style: none; outline: 0px; line-height: 24px; box-sizing: border-box; border: 0px; font-size: 15px; vertical-align: top; background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; text-align: justify; font-family: robotoslab-regular;"><em style="margin: 0px 0px 15px; padding: 0px; list-style: none; outline: 0px; line-height: 24px; box-sizing: border-box; border: 0px; vertical-align: top; background: 0px 0px;">Cuối c&ugrave;ng, bạn đ&atilde; nhận được phần thưởng xứng đ&aacute;ng khi kh&ocirc;ng từ bỏ v&agrave; c&oacute; được người hỗ trợ, bổ sung cho những điểm yếu của m&igrave;nh.&nbsp;Luke Shaw đ&atilde; mạnh mẽ hơn, v&agrave; những người như vậy đ&atilde; gi&uacute;p cho Martial.&nbsp;B&acirc;y giờ, cậu ấy đ&atilde; xuất sắc hơn nhiều."</em></p>',
                'image' => 'gettyimages-1054670570-612x612-0110-1701_1540809819.jpg',
                'views' => 2,
                'categories_id' => 1,
                'user_id' => 7,
                'Breaking_news' => 0,
                'created_at' => '2018-10-29 17:45:49',
                'updated_at' => '2018-10-29 17:45:49',
            ),
            8 => 
            array (
                'id' => 9,
                'title' => '"Torreira chỉ giỏi thôi à? Xin lỗi, phải nói là cậu ấy quá hay"',
                'summary' => 'Fan Arsenal vô cùng phấn khích khi tân binh 26 triệu bảng lần đầu góp mặt trong đội hình xuất phát.',
                'body' => 'Tối qua, Arsenal tiếp tục đà trở lại ngoạn mục bằng chiến thắng thứ 5 liên tiếp. Nối tiếp thắng lợi 4-2 trong ngày ra quân Europa League, Pháo Thủ thể hiện phong độ ấn tượng và tận dụng tối đa điểm tựa Emirates để hạ gục Everton 2-0. 

Góp công lớn trong màn trình diễn vừa qua không thể bỏ qua tân binh Lucas Torreira. Trong lần đầu được HLV Unai Emery bố trí đá chính tại Premier League, tuyển thủ Uruguay đã không phụ sự kỳ vọng từ ông thầy. Thi đấu vững vàng, quyết liệt, cày ải khắp mặt sân, Torreira là nhân tố quan trọng giúp Pháo Thủ kiểm soát thế trận, với thời lượng có bóng áp đảo 66%.

Trên mạng xã hội Twitter, rất nhiều lời ca ngợi được gửi đến Số 11. 

Tài khoản @Orangeiceman10 nhận định: "Torreira quá quan trọng với đội bóng lúc này."

@Patrick Timmons cùng chung quan điểm: "Torreira bị chấn thương sau trận đấu Europa League giữa tuần và chỉ có 2 ngày nghỉ. Cậu ấy vẫn chơi trọn vẹn cả trận hôm nay. Đúng là một chiến binh."
@Abubakar Hussein phấn khích: "Torreira chỉ giỏi thôi à? Xin lỗi, phải nói là cậu ấy quá hay. Cậu ấy cày ải khắp sân, một cầu thủ hàng đầu."

@Letha Laca còn liên tưởng: "Trận đầu tiên Torreira xuất phát từ đầu và Arsenal có lần giữ sạch lưới đầu tiên. Tôi không nghĩ đây là sự trùng hợp."',
                'image' => 'lucas-torreira-football3651-1449.jpg',
                'views' => 0,
                'categories_id' => 1,
                'user_id' => 7,
                'Breaking_news' => 0,
                'created_at' => '2018-10-13 19:26:12',
                'updated_at' => '2018-09-24 19:06:23',
            ),
            9 => 
            array (
                'id' => 24,
                'title' => '"Trung vệ thép" Vũ Như Thành hết lời khen ngợi đàn em Tiến Dũng',
                'summary' => ' Chia sẻ trên kênh truyền hình mới đây, cựu trung vệ ĐTQG Việt Nam Vũ Như Thành dành những lời có cánh cho đàn em Bùi Tiến Dũng nơi hàng thủ U23 Việt Nam.',
                'body' => 'Trả lời truyền thông mới đây, trung vệ thép một thời của ĐTQG Việt Nam - Vũ Như Thành đã dành nhiều lời có cánh cho đàn em trung vệ U23 Việt Nam Bùi Tiến Dũng. Thực tế, thành công của bóng đá Việt Nam trong thời gian qua, HLV Park Hang-seo sử dụng khá nhiều chiến thuật phòng ngự phản công. Đặc biệt là VCK U23 châu Á khi U23 Việt Nam giành ngôi Á quân, hàng thủ của đoàn quân áo đỏ chơi cực kỳ ấn tượng.
Một trong những bức tường thép nơi hàng thủ chính là trung vệ Bùi Tiến Dũng. Khi nói về người đàn em chơi bóng trong thời gian qua, Thành "kếu" cho biết: “Những gì cậu ấy thể hiện trong hai năm qua thật tuyệt vời." Nói thêm về những gì Tiến Dũng đã thể hiện trong màu áo U23 Việt Nam ở VCK U23 châu Á và mới đây là ASIAD 2018, nhà vô địch AFF cup 2008 cho hay: "Tiến Dũng có nhiều điểm khác so với tôi thời trước. Cậu ấy có những tố chất thậm chí còn tốt hơn. Quan sát em ấy chơi bóng, tôi cảm nhận Tiến Dũng giống như một chàng cán bộ trên sân. Đó là một người bản lĩnh, trách nhiệm, dường như được sinh ra để trở thành đội trưởng CLB.

Hai năm qua, Tiến Dũng đã tiến bộ rất nhiều qua từng trận đấu. Từ khả năng bao quát cho đến đọc tình huống. Ngày nào đó, em sẽ phát triển hơn để trở thành trung vệ số 1 của Việt Nam.”

Thực tế, nhìn lại chặng đường U23 Việt Nam có mặt ở bán kết ASAID 2018, trung vệ Bùi Tiến Dũng là cầu thủ chơi trọn vẹn 90 phút trong 5 trận ra quân của U23 Việt Nam. Đọc tình huống cực tốt, tranh chấp tay đôi quyết liệt, Tiến Dũng, Đình Trọng và Duy Mạnh là những gương mặt được HLV Park Hang-seo tin tưởng nhất trong màu áo U23 Việt Nam.
Hiện tại CLB Viettel của trung vệ Bùi Tiến Dũng đã chạm 1 tay vào ngôi vô địch giải hạng nhất Quốc gia 2018, điều này đồng nghĩa năm 2019 Viettel sẽ thăng hạng V-League. Tuy nhiên, trước mắt người hâm mộ bóng đá Việt Nam chờ đợi một kỳ AFF cup 2018 thành công với cá nhân Tiến Dũng và ĐTQG Việt Nam.

',
                'image' => '39217567_1851212408281121_6642136910032535552_n-1500.jpg',
                'views' => 0,
                'categories_id' => 2,
                'user_id' => 7,
                'Breaking_news' => 1,
                'created_at' => '2018-10-13 19:26:13',
                'updated_at' => '2018-09-24 19:18:15',
            ),
            10 => 
            array (
                'id' => 23,
                'title' => 'VCK U16 Châu Á 2018: HLV Indonesia nói gì trước "đại chiến" với Việt Nam
',
                'summary' => 'Tạo nên cú sốc khi đánh bại U16 Iran trận ra quân, ở lượt trận thứ hai VCK U16 châu Á, HLV Fachry Husaini của Indonesia đầy quyết tâm đánh bại U16 Việt Nam.',
                'body' => 'Ngay ở trận đấu ra quân, U16 Indonesia đã gây cú sốc cực lớn tại VCK U16 châu Á khi đánh bại Đương kim Á quân U16 Iran với tỉ số 2-0. Ở lượt trận còn lại của bảng C, U16 Việt Nam lại gây thất vọng lớn, dù được đánh giá cao hơn U16 Ấn Độ tuy nhiên kết thúc hai hiệp thi đấu chính thức, thầy trò HLV Vũ Hồng Việt chấp nhận thất bại 1-0. 

Lượt trận thứ 2 của bảng C, U16 Việt Nam sẽ chạm trán U16 Indonesia. Trước cuộc so tài với U16 Việt Nam, HLV Fachry Husaini của Indonesia cho biết: "U16 Indonesia và Việt Nam hiểu rõ điểm mạnh và điểm yếu của nhau. Việt Nam đã có một vài sự thay đổi về lực lượng nhưng phong cách chơi bóng và chiến thuật không khác nhiều so với giải Nhựa Tiền Phong Cup 2017, Nhật Bản-ASEAN Jenesys Cup 2018 và giải vô địch U16 AFF Cup 2018. Dù U16 Việt Nam đã thua Ấn Độ ở trận ra quân, nhưng tôi sẽ không nói nhiều về kết quả trận đấu đó."Thực tế, nhà cầm quân 53 tuổi của Indonesia đã quá hiểu U16 Việt Nam khi 3 lần gần đây nhất hai đội đã chạm trán nhau. Thực tế, U16 Indonesia đang rất tự tin sau chiến thắng 2-0 trước Iran và họ tự tin về sức mạnh của mình ở trận đấu gặp Việt Nam: "Chúng tôi có phong cách chơi bóng riêng của chúng tôi và nó phụ thuộc rất nhiều vào nền tảng thể lực sung mãn của các cầu thủ. Muốn giành chiến thắng trước Việt Nam thì chúng tôi phải thực sự tập trung vào trận đấu," HLV Fachry Husaini  nói về sức mạnh của Indonesia.
Trận đấu giữa U16 Indonesia và U16 Việt Nam sẽ diễn ra vào lúc 19h45 ngày 24/09 trên sân Bukit Jalil, Malaysia. Trắng tay ở trận ra quân gặp Ấn Độ xem như trận đấu gặp U16 Indonesia sẽ là trận đấu sinh tử với thầy trò HLV Vũ Hồng Việt. ',
                'image' => 'u16-vit-nam-vs-u16-india_1kz7iauezabub1i1wdtgb2ppir-2144.jpg',
                'views' => 0,
                'categories_id' => 2,
                'user_id' => 7,
                'Breaking_news' => 1,
                'created_at' => '2018-10-13 19:26:16',
                'updated_at' => '2018-09-24 19:18:15',
            ),
            11 => 
            array (
                'id' => 22,
                'title' => 'Thể Công, để nhớ một thời ta đã quên',
                'summary' => 'Có một tên tuổi tưởng đã mất đi vĩnh viễn, nhưng may thay những hậu duệ của họ vẫn còn đó và đang chiến đấu cho ngày về của một huyền thoại.',
                'body' => 'Trong một thập kỷ gần đây của V-League, CLB Hà Nội và Becamex Bình Dương là 2 đại diện nổi bật nhất, giành nhiếu thành tích nhất. Tuy nhiên, nếu nói đến bề dày lịch sử cùng truyền thống hào hùng thì họ chắc chắn không bằng được cái tên: Thể Công.

Nhắc đến Thể Công, đâu đó trong tiềm thức xưa cũ của những người hâm mộ bóng đá Việt Nam bất chợt thức giấc, cái tên mà đã quá lâu rồi họ không được nghe. Đó đã từng là một thế lực của bóng đá Việt Nam, nhưng lại bị khai tử vào năm 2009 bởi sự thay da đổi thịt của đời sống bóng đá khiến cho mô hình hoạt động của Thể Công không còn phù hợp.
Thành lập vào năm 1954 theo chỉ định của Chủ nhiệm Tổng cục Chính trị vào lúc đó là Nguyễn Chí Thanh, đoàn công tác Thể dục Thể thao Quân đội vốn được gọi nhiều bằng cái tên Thể Công là một phần lịch sử không thể tách rời của bóng đá Việt Nam. Nếu chúng ta từng mơ về những đội bóng tại Anh với lịch sử lâu đời cùng hàng loạt thế hệ cầu thủ, CĐV nối tiếp nhau, thì Thể Công chính là hình mẫu như vậy ở Việt Nam.

Thập niên 70, 80 đội bóng này sở hữu Vương Tiến Dũng, Vũ Mạnh Hải, Đỗ Mạnh Dũng hay đặc biệt là tiền đạo lừng danh Nguyễn Cao Cường. Thập niên 90 lại chứng kiến sự nở rộ các tài năng bóng đá là trụ cột trên ĐTQG: Trương Việt Hoàng, Đặng Phương Nam, Triệu Quang Hà và nổi bật nhất trong số đó phải kể đến Nguyễn Hồng Sơn - biệt danh Sơn "công chúa", với hình ảnh ăn mừng giơ tay chào đậm chất người lính.

Trong suốt lịch sử của mình, Thể Công vô địch 18 lần giải VĐQG (5 lần tại giải VĐQG khi Việt Nam thống nhất và 13 lần giải vô địch hạng A miền Bắc), điều mà chưa đội bóng nào hiện nay tới gần chứ đừng nói là làm được. Tuy nhiên chính tính chất đặc thù của đội bóng này khiến họ không thể tồn tại được sau năm 2009.
Thời điểm đó, các CLB tại Việt Nam đang trong giai đoạn chuyển đổi từ đội bóng của nhà nước sang mô hình cổ phần hóa bóng đá, thành lập doanh nghiệp cổ phần để sở hữu CLB, đây cũng là mô hình phát triển thể thao chuyên nghiệp trên toàn cầu. Đứng trước thách thức đó, lại là đội bóng trực thuộc Bộ Quốc phòng, Thể Công không thể nào tự chuyển đổi được.

Đến ngày 22-9-2009, Bộ Quốc phòng đã ký quyết định xóa tên Thể Công, phần lớn cầu thủ khi ấy chuyển về đầu quân cho Lam Sơn Thanh Hóa, chính thức khép lại một huyền thoại của bóng đá Việt Nam. Nhưng kết thúc đôi khi không phải là chấm dứt, mà nó để mở ra một kỷ nguyên mới của Thể Công, kỷ nguyên của sự chuyên nghiệp hóa.

Đội hai của Thể Công khi ấy được chuyển giao cho Tập đoàn Viễn thông quân đội Viettel quản lí và tham gia giải hạng Nhất quốc gia 2010 với tên gọi dưới tên gọi Trung tâm bóng đá Viettel, đây cũng là tiền đề để mùa tới cái tên Thể Công chuẩn bị được trở lại.
Hiện tại Viettel với sự chuẩn bị suốt 8 năm qua của mình, họ đã có trong tay một trung tâm đào tạo bóng đá trẻ hàng đầu Việt Nam với hai sản phẩm tiêu biểu là Bùi Tiến Dũng và Nguyễn Trọng Đại, đội một lại đang chơi rất ổn định tại giải hàng Nhất. Chỉ cần 3 điểm trước Bình Phước nữa thôi thì Viettel sẽ chắc chắn giành suất lên chơi tại V-League 2019.

Chủ quản đội bóng là Tập đoàn Viễn thông quân đội cũng đã cam kết là sẽ lấy lại cái tên Thể Công đầy hào hùng, khi đó người hâm mộ bóng đá sẽ lại chứng kiến "Cơn lốc đỏ" huyền thoại xuất hiện trở lại ở sân chơi cao nhất Việt Nam.',
                'image' => '4674-2115.jpg',
                'views' => 0,
                'categories_id' => 2,
                'user_id' => 7,
                'Breaking_news' => 1,
                'created_at' => '2018-10-13 19:26:17',
                'updated_at' => '2018-09-24 19:18:15',
            ),
            12 => 
            array (
                'id' => 21,
                'title' => 'U16 nữ Việt Nam lọt vào vòng hai giải bóng đá U16 nữ châu Á 2019',
                'summary' => 'Dù để thua chủ nhà U16 nữ Bangladesh với tỉ số 0-2 ở lượt trận cuối cùng, nhưng U16 Việt Nam vẫn giành vé tham dự vòng loại thứ hai với tư cách là 1 trong 2 đội xếp thứ Nhì có thành tích tốt nhất.',
                'body' => 'Sau 3 lượt trận đầu tiên, cả 2 đội Việt Nam và Bangladesh đều đang có cùng 9 điểm và các chỉ số phụ với 3 trận toàn thắng. Đội giành chiến thắng trong trận quyết đấu này sẽ chính thức giành tấm vé lọt vào vòng loại thứ 2. Chính vì vậy, cả 2 đội đã nhập cuộc với sự tập trung cao độ cùng đội hình mạnh nhất của mình.

Trước đội chủ nhà vừa có thể hình đồng đều, kỹ thuật tốt và lối chơi sức mạnh, các cầu thủ nữ Việt Nam nhanh chóng triển khai đội hình kèm người chặt chẽ và tổ chức tấn công từ giữa sân. Nhưng cũng ngay từ những phút đầu, các cầu thủ chủ nhà đã khẳng định sức mạnh và sự nguy hiểm của mình ở những pha phối hợp bên hành lang cánh trái trước khi tạt bóng vào. Rất may các pha dứt điểm của đối phương chưa đủ dứt khoát để làm khó thủ thành Kiều Oanh.

Thế trận sau đó liên tục được đẩy lên với tốc độ cao. Trong khi đội bóng áo đỏ cố gắng đẩy cao đội hình bằng các pha phối hợp từ trung lộ thì đội chủ nhà tiếp tục tỏ ra nguy hiểm ở các tình huống tranh cướp bóng và phản công nhanh. Ở phút cuối cùng của hiệp 1, trong tình huống lộn xộn trước khung thành U16 nữ Việt Nam, thủ môn Kiều Oanh mắc sai lầm bắt bóng trượt để số 10 Tohura đệm bóng vào lưới, mở tỉ số 1-0 cho U16 nữ Bangladesh.

Sang hiệp 2, dù đang bị dẫn trước nhưng các cầu thủ U16 nữ Việt Nam vẫn tiếp tục bình tĩnh cầm bóng, tìm cách đưa bóng lên tiếp cận khung thành đối phương hòng tìm bàn gỡ. Mặc dù vậy, thể lực suy giảm là một phần nguyên nhân khiến các đường phối hợp của đội bóng áo đỏ không còn sắc nét.

Phút 63, từ tình huống phạt góc bên cánh phải, thủ thành Kim Oanh phán đoán sai băng ra sớm tạo cơ hội để Akhikhatun ghi bàn ở khoảng cách gần, nhân đôi cách biệt cho chủ nhà.

Sau 2 bàn thắng, các cầu thủ chủ nhà chủ động chơi thấp hơn hòng bảo toàn tỉ số. Mặc dù ban huấn luyện cố gắng điều chỉnh nhân sự nhưng với thể lực suy giảm rõ rệt, các cầu thủ U16 nữ Việt Nam đã không thể tạo bất ngờ, đành chấp nhận thua 0-2 trước đội chủ nhà chơi tốt hơn. Với 3 trận thắng cùng hiệu số +23, U16 nữ Việt Nam chính thức giành vé tham dự vòng loại thứ 2 khi là 1 trong 2 đội đứng thứ 2 có thành tích tốt nhất.

Như vậy, vòng loại thứ 2 giải bóng đá U16 nữ châu Á 2019 đã xác định 8 đội giành quyền tham dự gồm Trung Quốc (nhất bảng A), Lào (nhất bảng B), Iran (nhất bảng C), Australia (nhất bảng D), Myanmar (nhất bảng E), Bangladesh (nhất bảng F) cùng 2 đội đứng thứ nhì có thành tích cao nhất Thái Lan (bảng C - chủ nhà VCK) và Việt Nam (bảng F).

Các trận đấu vòng loại thứ 2 sẽ diễn ra từ 23/2/2019. 8 đội bóng vượt qua vòng loại thứ nhất tiếp tục được chia làm 2 bảng, thi đấu vòng tròn 1 lượt tính điểm xếp hạng xác định 4 đội nhất, nhì tại mỗi bảng giành quyền tham dự VCK cùng 3 đội có thứ hạng cao nhất tại VCK U16 nữ châu Á 2017 gồm CHDCND Triều Tiên, Hàn Quốc và Nhật Bản.

Theo kế hoạch, đội tuyển U16 nữ Việt Nam sẽ quay trở về nước vào ngày 24/9. Dự kiến, thầy trò HLV Mai Lan sẽ có mặt tại sân bay quốc tế Nội Bài lúc 21h cùng ngày, kết thúc đợt tập trung thứ 2 trong năm 2018.

',
                'image' => '42362281_10156752129654675_8188769914815774720_o-1-2351.jpg',
                'views' => 0,
                'categories_id' => 2,
                'user_id' => 7,
                'Breaking_news' => 1,
                'created_at' => '2018-10-13 19:26:19',
                'updated_at' => '2018-09-24 19:18:15',
            ),
            13 => 
            array (
                'id' => 20,
                'title' => 'HLV Park Hang-seo trở lại Việt Nam chuẩn bị "gặt vàng" AFF Cup',
                'summary' => 'Sau thời gian nghỉ ngơi cùng gia đình tại Hàn Quốc, HLV Park Hang-seo sẽ quay trở lại Việt Nam vào ngày 27/09 tới để chuẩn bị cho AFF Cup vào cuối năm nay.',
                'body' => 'Kết thúc ASIAD 18, HLV Park Hang-seo đã trở lại Hàn Quốc và có kỳ nghỉ bên gia đình. Vào ngày 27/09 tới, thầy Park trở lại Việt Nam và bắt tay ngay vào nhiệm vụ chuẩn bị cho AFF Cup 2018, đây là giải đấu được người hâm mộ Việt Nam đặt rất nhiều kỳ vọng sau chiến tích của U23 Việt Nam.

Trong thời gian nghỉ ngơi ở quê nhà, HLV Park Hang-seo đã nhận được sự quan tâm đặc biệt của giới truyền thông xứ Kim chi bởi đóng góp của ông cho bóng đá Việt Nam trong thời gian qua. Đặc biệt là công của U23 Việt Nam tại VCK U23 châu Á và ASIAD 2018.


Sau khi quay trở lại Việt Nam, HLV Park Hang-seo và cộng sự sẽ bắt tay ngay vào công việc khi sẽ dự khán các khán đài V-League ở 3 trận còn lại để tìm kiếm thêm những nhân tố mới, theo dõi và đánh giá phong độ cầu thủ tuyển chọn vào ĐT Việt Nam. Theo như kế hoạch ban đầu mà HLV Park Hang-seo đã thống nhất trước đó với VFF, ĐT Việt Nam sẽ triệu tập 30 cầu thủ chuẩn bị cho AFF Cup 2018. 

Dự kiến, ĐT Việt Nam sẽ hội quân từ ngày 11/10 tại Hà Nội. Ngày 13/10, thầy trò HLV Park Hang-seo sẽ lên đường sang Hàn Quốc để tập huấn 2 tuần tại Trung tâm Paju. Trong chuyến tập huấn này, ĐT Việt Nam sẽ được bố trí 3 trận thi đấu giao hữu với các đối thủ chất lượng ở xứ Kim chi.
Kết thúc chuyến tập huấn, ĐT Việt Nam sẽ quay trở lại Việt Nam để tiếp tục thi đấu một trận giao hữu quốc tế được dự kiến diễn ra vào ngày 02 hoặc 03/11. Hiện tại, VFF đang liên hệ mời một số đội bóng mạnh của Tây Á hoặc châu Á sang thi đấu giao hữu với ĐT Việt Nam trước ngày lên đường tham dự AFF Cup.

Sau đó, thầy trò HLV Park Hang-seo sẽ hành quân sang Lào để đá trận ra quân ở AFF Cup 2018 với đội chủ nhà vào ngày 08/11. Tại giải đấu này, ĐT Việt Nam nằm ở bảng A gồm Lào, Campuchia, Myanmar, Malaysia. Các đội thi đấu vòng tròn tính điểm. Tổng số trận mỗi đội phải đá là 4 trận, 2 trận trên sân nhà và 2 trận trên sân khách. AFF sẽ có một lễ bốc thăm để phân định các trận đấu tổ chức ở đâu. 2 đội đứng nhất và nhì mỗi bảng sẽ vào đá bán kết. Bán kết và chung kết sẽ được diễn ra trên sân khách và sân nhà.',
                'image' => 'tien_phong_park_hang_seo_asiad_18_a_uojo-0016.jpg',
                'views' => 4,
                'categories_id' => 2,
                'user_id' => 7,
                'Breaking_news' => 1,
                'created_at' => '2018-10-13 19:26:20',
                'updated_at' => '2018-10-02 18:51:12',
            ),
            14 => 
            array (
                'id' => 19,
                'title' => 'Sự thật về lý do chính khiến Xuân Trường mất phong độ tại ASIAD 2018',
                'summary' => ' Theo trợ lý ngôn ngữ Lê Huy Khoa, việc Xuân Trường mất suất đá chính tại ASIAD 2018 là do anh đã "quên" với cách đá mà HLV Park Hang-seo đã xây dựng ở U23 Việt Nam,',
                'body' => 'Tại ASIAD 2018, dù là cầu thủ được đánh giá rất quan trọng trong lối chơi của U23 Việt Nam nhưng Xuân Trường đá chính đúng duy nhất một trận, còn lại anh phải ngồi dự bị hoặc không được ra sân vì lý do phong độ.
Để lý giải cho phong độ không tốt của học trò cưng tại HAGL, HLV Dương Minh Ninh cho rằng Xuân Trường đã bị viêm mũi dẫn đến mất ngủ, qua đó không có được trạng thái thi đấu tốt nhất. Thực tế sau khi trở về từ ASIAD 2018, tiền vệ này cũng đã trải qua ca phẫu thuật để điều trị căn bệnh này.

Tuy nhiên trong một buổi talkshow mới đây, trợ lý ngôn ngữ của HLV Park Hang-seo là ông Lê Huy Khoa đã nêu ra vấn đề của Xuân Trường tại ASIAD 2018:  "Xuân Trường chơi rất hay ở giải U23 châu Á hồi đầu năm, vì khi đó, cậu ấy mới trở về từ Hàn Quốc, đang quen với lối đá tại Gangwon vốn có những nét tương đồng với lối chơi mà HLV Park Hang-seo áp dụng cho U23 Việt Nam.

Tuy nhiên, khi về đá cho HAGL tại V-League, Xuân Trường quay trở lại chơi theo trường phái giữ bóng. Đến khi cùng U23 Việt Nam dự ASIAD, cậu ấy đã quên mất cách đá như hồi đầu năm nên gặp vấn đề trong việc thích nghi với lối chơi của thầy Park".

Cũng theo trợ lý ngôn ngữ Lê Huy Khoa, HLV Park Hang-seo đang rất quan tâm đến vấn đề của Xuân Trường và tin rằng, thời gian còn lại trong quá trình chuẩn bị cho AFF Cup 2018 là quãng thời gian vừa đủ để tiền vệ HAGL kịp thích nghi lại lối đá mà thầy Park đang xây dựng.

"Trước khi lên đường trở về Hàn Quốc nghỉ ngơi, ông Park dặn tôi nhắc nhở động viên Xuân Trường và một số cầu thủ. Tôi đánh giá Xuân Trường là cầu thủ chuyên nghiệp nên chuyện lấy lại phong độ sẽ không phải là vấn đề lớn. Từ thất bại ở trận tranh HCĐ cho đến những mục tiêu tiếp theo, HLV Park Hang-seo đã có đầy đủ kế hoạch để giúp bóng đá Việt Nam giành được thành tích tốt nhất." ông Huy Khoa chốt lại.

Hiện tại, Xuân Trường vẫn chưa thể ra sân tại V-League sau khi trải qua ca phẫu thuật viêm mũi. Người hâm mộ phố Núi đang rất mong chờ sự trở lại của Trường "híp" để giúp HAGL vượt qua giai đoạn khó khăn.',
                'image' => 'xuan-truong-tinh-chuyen-tieu-phau-dut-bo-nguyen-nhan-khien-anh-choi-te-tai-asiad-2018-2-bb-baaaculgnl-0019.jpg',
                'views' => 0,
                'categories_id' => 2,
                'user_id' => 7,
                'Breaking_news' => 0,
                'created_at' => '2018-10-13 19:26:22',
                'updated_at' => '2018-09-24 19:18:15',
            ),
            15 => 
            array (
                'id' => 18,
                'title' => '"Petr Cech lấy lại phong độ như thời ở Chelsea vì 1 người"',
                'summary' => 'Huyền thoại Liverpool, Jamie Carragher sau khi chứng kiến màn trình diễn ấn tượng của thủ thành Arsenal, Petr Cech đã cho rằng, sở dĩ cầu thủ người Séc lấy lại phong độ như thời ở Chelsea vì sự giúp đỡ đến từ cái tên sau đây.',
                'body' => 'Đối đầu Everton trong khuôn khổ vòng 6 Premier League, Arsenal đã có một trận đấu khá vất vả khi liên tiếp phải đối mặt với những pha phản công sắc sảo đến từ đội bóng vùng Merseyside.

Tuy nhiên, với phản xạ xuất sắc của thủ thành Petr Cech, anh đã liên tiếp từ chối các cơ hội của Theo Walcott, Richarlison hay Gylfi Sidgursson và giúp Pháo thủ có lần đầu tiên giữ sạch lưới tại Premier League 2018/19.

Chứng kiến màn trình diễn "lên đồng" của "người nhện" Arsenal, cựu trung vệ Liverpool, Jamie Carragher mới đây đã trổ tài kiến giải về phong độ ấn tượng của Cech.

Dẫn theo tờ Express, Carragher cho biết: "Tôi nghĩ Cech trong những trận đấu vừa qua đang dần cho thấy sự hiệu quả tựa như lúc anh ấy còn ở Chelsea.


Cech đã lấy lại phản xạ nhanh nhẹn, khả năng chọn vị trí thông minh và đặc biệt hơn, anh ấy giờ đây còn biết cản phá bằng chân.

Tôi nghĩ chính HLV đã yêu cầu anh ấy phải hoàn thiện kỹ năng đó nhiều hơn. Nếu bạn nhìn vào màn trình diễn của Cech lúc trước, bạn sẽ biết anh ấy không giỏi chơi chân lắm.

Thế nhưng, anh ấy bây giờ đã tiến bộ và tôi nghĩ sự xuất hiện của Leno đã thôi thúc Cech tập luyện để lấy lại phong độ như thời còn ở Chelsea".',
                'image' => 'cech-2-1434.jpg',
                'views' => 0,
                'categories_id' => 2,
                'user_id' => 7,
                'Breaking_news' => 0,
                'created_at' => '2018-10-13 19:26:24',
                'updated_at' => '2018-09-24 19:08:53',
            ),
            16 => 
            array (
                'id' => 25,
                'title' => 'Suýt thắng Uruguay, HLV Hoàng Anh Tuấn nói gì?',
                'summary' => ' Dù để U19 Uruguay lội ngược dòng, nhưng HLV Hoàng Anh Tuấn vẫn tỏ ra rất hài lòng với những gì học trò đã làm được trước đối thủ được đánh giá rất mạnh.',
                'body' => 'U19 Uruguay đã thể hiện sức mạnh ấn tượng với 2 chiến thắng liên tiếp trước Bờ Biển Ngà và Qatar. Tuy nhiên trước U19 Việt Nam, đại diện rất mạnh của Nam Mỹ lại trải qua hiệp 1 bị lép vế. U19 Việt Nam dù kiểm soát bóng không nhiều nhưng lại tạo ra được các cơ hội sắc bén hơn hẳn so với đối phương. Thậm chí ở cuối hiệp 1, U19 Việt Nam còn có được bàn mở tỷ số.
Tuy nhiên, các cầu thủ trẻ Việt Nam không thể kết thúc trận đấu với 3 điểm. U19 Uruguay lật ngược tình thế ở hiệp 2 với 2 bàn thắng trong chưa đầy 10 phút. Chung cuộc, U19 Uruguay thắng ngược U19 Việt Nam với tỷ số 2-1.

Dù vậy, HLV Hoàng Anh Tuấn vẫn tỏ ra rất hài lòng về màn thể hiện của các học trò:  “U19 Uruguay là một đội bóng có chất lượng cao, vậy nên trước trận đấu chúng tôi không đặt nặng vấn đề thắng thua, mà cần phải thể hiện hết những gì mình có. Tôi hài lòng về tinh thần thi đấu và sự gắn kết của các cầu thủ, đặc biệt là trong hiệp 1. Tuy vậy, đội vẫn cần phải cải thiện khả năng duy trì sự tập trung, đặc biệt là khi phải đối mặt với sức ép cực lớn từ các đối thủ mạnh.

Kết quả thắng thua không quan trọng bởi U19 Việt Nam đang trong giai đoạn chuẩn bị cho VCK U19 châu Á. Cần hiểu rằng, được thi đấu với một đội bóng chất lượng cao như U19 Uruguay, chắc chắn chúng ta sẽ gặt hái được nhiều bổ ích.”
Ở trận đấu diễn ra cùng giờ, chủ nhà U19 Qatar nhận thất bại 0-1 trước U19 Bờ Biển Ngà. Tuy nhiên, họ vẫn xếp ở vị trí nhì bảng do hơn U19 Việt Nam và U19 Bờ Biển Ngà ở chỉ số phụ.

Sau giải đấu này, U19 Việt Nam sẽ về nước tiếp tục tập luyện chuẩn bị cho VCK U19 châu Á sẽ diễn ra vào tháng 10/2018 tại Indonesia. Trong thời gian tới, khi giải Hạng Nhất kết thúc, HLV Hoàng Anh Tuấn sẽ có trong tay lực lượng mạnh nhất với sự bổ sung của những cầu thủ Hà Nội B hay Viettel để hướng tới đấu trường châu lục.',
                'image' => 'hlv-u19-viet-nam-noi-gi-khi-thua-nguoc-dang-tiec-u19-uruguay-u19-012-1537670753-width529height353-1039.jpg',
                'views' => 0,
                'categories_id' => 2,
                'user_id' => 7,
                'Breaking_news' => 0,
                'created_at' => '2018-10-13 19:26:25',
                'updated_at' => '2018-09-24 19:18:15',
            ),
            17 => 
            array (
                'id' => 26,
                'title' => 'Nam Định muốn thắng HAGL để nuôi hy vọng trụ hạng',
                'summary' => 'Trước trận đấu với HAGL ở vòng 24, HLV Nguyễn Văn Sỹ và các học trò đang tỏ ra rất quyết tâm để đánh bại HAGL nhằm nuôi hy vọng trụ hạng ở mùa giải năm nay.',
                'body' => 'Tiếp đón HAGL ở vòng 24 trên sân nhà Thiên Trường là cơ hội không thể tốt hơn để Nam Định có thể giành trọn 3 điểm nhằm tiếp tục nuôi hy vọng trụ hạng hay ít nhất là tấm vé dự play-off bởi lẽ, thầy trò HLV Dương Minh Ninh đang trải qua những trận đấu đầy thất vọng.

Trong 5 trận đấu gần nhất, Công Phượng và các đồng đội đã nhận đến 4 trận thua cùng số lần để lọt lưới nhiều nhất tính đến thời điểm hiện tại.


Hàng thủ đang là vấn đề nan giải đối với HLV Dương Minh Ninh vì sai lầm cứ lặp đi lặp lại liên tục, qua đó khiến họ rơi xuống vị trí thứ 11 trên bảng xếp hạng và vẫn có khả năng đá play-off.

Trong khi đó, dù gặp rất nhiều khó khăn nhưng Nam Định vẫn chưa buông xuôi khi các học trò HLV Nguyễn Văn Sỹ luôn thi đấu rất quyết tâm ở những trận đấu còn lại. Ở hai trận làm khách được dự báo khó khăn trước FLC Thanh Hóa và Hải Phòng, đội bóng thành Nam vẫn kiếm được hai trận hòa, đó là kết quả không hề tồi chút nào.

Vì vậy, trước cuộc chạm trán với HAGL, HLV Nguyễn Văn Sỹ đã không giấu mong muốn có được chiến thắng để tạo đà tâm lý cho học trò trước 2 trận quan trọng còn lại: "HAGL có dàn cầu thủ trẻ chất lượng và dù được đá trên sân nhà, chúng tôi vẫn sẽ rất thận trọng. Cố gắng chắt chiu từng cơ hội, hy vọng chiến thắng sẽ đến với Nam Định.

Trận này có tính chất quyết định đến chiếc vé trụ hạng của Nam Định. Giải chỉ còn 3 vòng nữa hạ màn nên phải chắt chiu và tập trung vào trận đấu của mình, chứ không vừa đá vừa ngóng về phía trận có sự góp mặt của Sài Gòn FC.”
Ở phía đối diện, dù sở hữu trong đội hình nhiều cầu thủ trẻ chất lượng như Công Phượng, Văn Toàn, Minh Vương...nhưng HLV Dương Minh Ninh vẫn "cầu" có được một trận hòa: "HAGL hiện xa dần với mục tiêu đặt ra ở đầu mùa giải. Chúng tôi phải rút kinh nghiệm ở trận đấu không tốt vừa qua. Vì đây là danh dự của câu lạc bộ. Mục tiêu của đội bóng ở trận đấu gặp đội Nam Định là thi đấu tốt và giành ít nhất 1 điểm.”

Do các giải vô địch quốc gia bị hoãn nên các trận đấu ở vòng 24 vẫn chưa được diễn ra. Thời gian và ngày thi đấu sẽ được VPF công bố sau.

',
                'image' => 'mtk2njuznjbfmtyxnjuwnzq4nta3mta2of84mzgzmzgymzk0otg1nzg5mtmyx19kdxlhbmg-0010.jpg',
                'views' => 0,
                'categories_id' => 2,
                'user_id' => 7,
                'Breaking_news' => 0,
                'created_at' => '2018-10-13 19:26:27',
                'updated_at' => '2018-09-24 19:18:15',
            ),
            18 => 
            array (
                'id' => 27,
                'title' => 'Sở hữu 7 tuyển thủ U23 Việt Nam, vì sao HAGL vẫn gây thất vọng?',
                'summary' => 'Phát triển năng lực cầu thủ vốn là chuyện riêng của từng đội bóng. Nhưng khi đội bóng ấy sở hữu gần chục tuyển thủ quốc gia trong đội hình, đấy là vấn đề của cả nền bóng đá.',
                'body' => 'Phát triển năng lực cầu thủ vốn là chuyện riêng của từng đội bóng. Nhưng khi đội bóng ấy sở hữu gần chục tuyển thủ quốc gia trong đội hình, đấy là vấn đề của cả nền bóng đá.
Khoảng trống đào tạo trẻ

Nói về HAGL, không thể không nhắc tới CLB Hà Nội. Hai đội bóng này đều có lò đào tạo trẻ lừng danh, đều sở hữu những mầm non chất lượng, có chính sách trọng dụng các các cầu thủ trẻ tại V-League. Dùng CLB Hà Nội làm hệ quy chiếu, chúng ta sẽ hiểu tại sao HAGL mãi lẹt đẹt dù đã đầu tư rất nhiều tiền của và thời gian.

Năm 2007, HAGL tuyển sinh lứa cầu thủ đầu tiên cho Học viện HAGL JMG. Từ hàng nghìn thí sinh trên cả nước, lò đào tạo của bầu Đức tuyển được 25 học viên cho 2 khóa đầu tiên của. Số còn lại được đưa vào lớp Năng khiếu mà Minh Vương là đại diện tiêu biểu. Hai lứa cầu thủ ấy được duy trì ổn định, không có nhiều biến động cho tới ngày hôm nay.

Điểm mạnh của họ là sự ổn định, lối chơi ăn ý sau nhiều năm gắn bó cùng nhau. Điểm yếu là sau quá trình tuyển chọn ban đầu, tính đào thải của lò JMG không cao. Những Công Phượng, Xuân Trường, Tuấn Anh không phải cạnh tranh và lo lắng nhiều về vị trí của mình tại lò đào tạo.

Ở chiều ngược lại, CLB Hà Nội có một hệ thống đào tạo trẻ khổng lồ. Ngoài Trung tâm bóng đá trẻ do HLV Triệu Quang Hà thành lập vào năm 2006, đội bóng bầu Hiển có những cơ sở chân rết (VSH) tại Cửa Lò (Nghệ An). Ở tuổi 13 và 15, họ cũng nhận thêm người từ đội trẻ của Sở thể dục thể thao Hà Nội đóng tại Gia Lâm (Duy Mạnh, Quang Hải, Đình Trọng đều là người lò này).

Do quân số đông, quá trình đào thải ở lò đào tạo trẻ Hà Nội rất khốc liệt. Từ lúc còn nhỏ, Quang Hải, Duy Mạnh đã phải cạnh tranh quyết liệt với các đồng đội nhí.

Lứa trẻ của Hà Nội cũng sớm được làm quen với môi trường thi đấu thực sự, sớm được cạnh tranh tại các giải trẻ. Các đội trẻ Hà Nội góp mặt ở hệ thống giải quốc gia ngay từ lứa U11. Đặc biệt, từ lứa U19, CLB Hà Nội dành sự quan tâm rất lớn. Đội U19 Hà Nôi đã có mặt ở 5 trận chung kết quốc gia gần nhất, vô địch 3 lần. Đội U21 Hà Nội có mặt ở 3 trận chung kết gần nhất, vô địch 2 lần.

Ở chiều ngược lại, lứa Công Phượng, Xuân Trường không dự bất kỳ giải trẻ quốc gia nào. Năm 2013, đội trẻ JMG mới lần đầu tiên dự một giải đấu giao hữu - Sanix Cup tại Nhật Bản. Trước đó, họ chỉ tập chân trần, rèn kỹ thuật suốt 5 năm đào tạo đầu tiên. Sau tuổi 15, họ mới được tập giày và đá sân 11.

Hai định hướng đào tạo khác nhau tạo ra 2 lứa cầu thủ khác nhau. Khi những chàng trai trẻ HAGL có mặt tại V-League, đó mới là giải đấu quốc nội đầu tiên trong sự nghiệp của họ. Thời điểm ấy, những người như Quang Hải, Duy Mạnh đã có trong tủ kính cả một bộ sưu tập danh hiệu.

Nói như HLV Phạm Minh Đức, cầu thủ trẻ Hà Nội khác cầu thủ trẻ Gia Lai ở chỗ “họ đã cạnh tranh từ nhỏ, đã quen với chiến thắng”, là những nhà vô địch từ trong trứng nước.

Vì sao Xuân Trường phải làm đội trưởng ở tuổi 20?

Khi HAGL đôn lứa trẻ lên V-League ở mùa giải 2015, băng đội trưởng vốn được trao cho Lương Xuân Trường. Sau này, tấm băng ấy được đổi sang Tuấn Anh rồi lại tới tay Công Phượng. Năm ấy, cả 3 mới tròn 20 tuổi.

4 năm từ đó tới nay, tấm băng ấy đã liên tục đổi chủ nhưng vẫn xoay quanh 3 cái tên ở trên. Người Gia Lai rõ ràng không thể hài lòng với một đội trưởng quá trẻ. Nhưng sau cuộc thanh trừng công thần cuối mùa giải 2014, họ không còn cái tên nào đẳng cấp hơn, dày dạn hơn trong đội hình. Trước Xuân Trường, đội trưởng tiền nhiệm của HAGL là Dương Văn Pho. Năm 2014, Văn Pho 30 tuổi.

Tại đội bóng thủ đô, Quang Hải, Duy Mạnh, Văn Hậu chưa từng phải mang băng thủ quân. Cầu thủ dày dạn bậc nhất trong đội hình CLB Hà Nội là Nguyễn Văn Quyết mới chính thức tiếp quản tấm băng đội trưởng từ mùa giải trước.

Khi HAGL đối đầu CLB Hà Nội hôm 19/9 vừa qua, đội hình của Gia Lai chỉ có 3 người trên 23 tuổi. Đó là Văn Anh, Zeba Josip và Văn Tiến - tất cả đều không phải trụ cột. Bên kia chiến tuyến, tân vương V-League có 4 người trên 25 tuổi là Văn Quyết, Thành Lương, Văn Công và Oseni. Công Phượng (23 tuổi) và Văn Quyết (27 tuổi) là đội trưởng của 2 đội ở trận đó.

Vì Gia Lai không có những đàn anh dày dạn, Xuân Trường, Công Phượng phải nhận lấy mọi trách nhiệm. Họ phải gánh vác quá nhiều khi tuổi đời, tuổi nghề còn quá trẻ. Vì ít kinh nghiệm, họ dễ gặp thất bại. Công Phượng, Xuân Trường phải sắm quá nhiều vai trong đội bóng: vừa làm trụ cột, vừa làm ngôi sao, là cầu thủ trẻ nhưng cũng phải là thủ lĩnh, còn đang học hỏi nhưng đã phải chỉ bảo cho người khác.

Nói như Đỗ Hùng Dũng: “HAGL và Hà Nội lên tuyển đều đóng góp 8-9 người như nhau, nhưng tại sao Hà Nội đầu bảng còn HAGL không vào được tốp đầu? Không phải chênh lệch chuyên môn vì tuyển thủ quốc gia thì đều cùng đẳng cấp.”

“Nhưng ở HAGL, vai trò của Xuân Trường, Công Phượng giống như Văn Quyết, Thành Lương. Có điều Trường và Phượng còn ít tuổi, kinh nghiệm chưa dạn dày, xung quanh toàn bạn ngang tuổi, nói sao người ta thấm hết và hiểu hết được.”

HAGL nhìn đâu cũng thấy vấn đề

Con người là nền tảng đầu tiên cho mọi đội bóng. HAGL không xử lý tốt vấn đề nhân sự. Hệ lụy là vô số vấn đề từ đấy đã phát sinh.

Nội binh HAGL quá trẻ và ít kinh nghiệm. Họ có thể chơi rất tốt ở mặt trận tấn công nhưng sự già dặn, chút khôn ngoan ở tuyến phòng ngự là điều họ không có. 4 năm qua, đội bóng phố núi đều thuộc nhóm phòng ngự kém nhất V-League. Mùa này, họ đã để thủng lưới 49 bàn sau 23 trận - nhiều hơn tất cả tại V-League.

Lối chơi độc đáo của HAGL cũng tạo thành vật cản cho họ trên con đường tìm kiếm các ngoại binh chất lượng. Không cầu thủ ngoại nào gắn bó với Gia Lai quá một mùa bóng. Rất nhiều trường hợp phải rời phố núi chỉ sau nửa mùa giải. Rimario Gordon Allando là ví dụ mới nhất. Anh không thích nghi được với lối chơi ban bật nhỏ ở Gia Lai nhưng đã tỏa sáng rực rỡ ngay khi gia nhập một CLB tốp đầu là Thanh Hóa.
Điều kỳ lạ là chính những cầu thủ HAGL ấy khi lên tuyển vẫn chơi rất hay. Công Phượng là ngôi sao của U23 Việt Nam suốt vài năm qua, Văn Thanh là hậu vệ cánh hay nhất đội tuyển, Xuân Trường từng giành Quả bóng bạc 2016.

Phong độ của họ ở tuyển quốc gia là bằng chứng cho thấy họ thực sự có tài, có tiềm năng và cần được tạo điều kiện phát triển trước khi quá muộn (họ đều đã 22, 23 tuổi).

Thực tế cho thấy, nhiều cầu thủ HAGL đã tiến bộ vượt bậc khi được chuyển tới thi đấu trong một môi trường mới, có các đàn anh kinh nghiệm nâng đỡ. Xuân Trường giành Quả bóng bạc trong thời gian khoác áo Incheon United, Lương Hoàng Nam thể hiện được mình khi cho mượn ở Long An, Lê Phạm Thành Long thậm chí còn được gọi lên Olympic Việt Nam nhờ màn trình diễn ở Hải Phòng.

Phát triển năng lực cầu thủ vốn là chuyện riêng của từng đội bóng. Nhưng khi đội bóng ấy sở hữu gần chục tuyển thủ quốc gia trong đội hình, đấy là vấn đề của cả nền bóng đá.',
                'image' => 'ha-06-1027.jpg',
                'views' => 0,
                'categories_id' => 2,
                'user_id' => 7,
                'Breaking_news' => 0,
                'created_at' => '2018-10-13 19:26:28',
                'updated_at' => '2018-09-24 19:18:15',
            ),
            19 => 
            array (
                'id' => 28,
                'title' => 'Messi từ chối bắt tay trọng tài; HLV Barca mỉa mai BLĐ La Liga',
                'summary' => 'Hậu vệ của Barca - Lenglet đã phải nhận thẻ đỏ rời sân trong trận đấu với Girona. Tuy nhiên nạn nhân của pha bóng này lại lên tiếng xin lỗi Lenglet.',
                'body' => 'Phút thứ 36, Clement Lenglet và Pere Pons cùng lao vào tranh chấp bóng, hai cầu thủ cùng ngã ra sân và bước đầu trọng tài Gil Manzano xác định lỗi thuộc về Pons. Tuy nhiên sau khi xem lại pha bóng từ công nghệ VAR, vị vua áo đen đã thay đổi quyết định rút thẻ đỏ truất quyền thi đấu của Lenglet và cho Girona được hưởng đá phạt.

Sau trận đấu, Pere Pons cũng khá bất ngờ về quyết định này: "Vâng, tôi đã nhận một pha cùi chỏ nhưng khi tôi đứng dậy, tôi đã xin lỗi Lenglet và đưa tay đề nghị giúp anh ấy đứng dậy, tôi nghĩ đó là lỗi của tôi. Tôi còn không cảm giác đã bị cùi chỏ của anh ấy chạm phải".

Thủ quân của Barca - Lionel Messi đã rất bất mãn với quyết định này và anh từ chối bắt tay với trọng tài Manzano khi trận đấu kết thúc. HLV Valverde cũng lên tiếng mỉa mai công tác trọng tài: "Đây là lần đầu tiên một nạn nhân lên tiếng xin lỗi người chơi xấu mình."',
                'image' => '3-1617.jpg',
                'views' => 1,
                'categories_id' => 3,
                'user_id' => 7,
                'Breaking_news' => 1,
                'created_at' => '2018-10-13 19:26:30',
                'updated_at' => '2018-10-04 16:56:46',
            ),
            20 => 
            array (
                'id' => 29,
                'title' => 'Nếu siêu sao MU này đến, trụ cột Barca sẽ ra đi',
                'summary' => 'Truyền thông Tây Ban Nha vừa cập nhật tin tức liên quan đến tình hình ở Barcelona.',
                'body' => 'Thị trường chuyển nhượng mùa hè đóng cửa, Barca vẫn biết cách làm loạn làng túc cầu. Đội bóng Catalan tiếp tục đẩy căng thẳng với Manchester United lên đỉnh điểm khi cương quyết không buông tha thương vụ Pogba. Ban lãnh đạo CLB lên đủ kế hoạch để chèo kéo ngôi sao người Pháp.
Vừa qua, tờ Mirror tiết lộ Barca tiếp tục âm mưu cuỗm mất tiền vệ người Pháp. Điều quan trọng, lần này, đương kim vô địch La Liga sẽ đích thân ra mặt và công khai theo đuổi tuyển thủ 25 tuổi. Ban lãnh đạo đội bóng Catalan sẽ cử người đại diện trực tiếp dự khán cũng như theo dõi màn trình diễn của Pogba qua từng trận đấu cho đến hết mùa giải.

Mới đây, truyền thông Tây Ban Nha tiếp tục cập nhật tin tức liên quan đến thương vụ trên. Theo đó, tờ Don Balon tiết lộ vì kế hoạch chiêu mộ Pogba, nội bộ "Blaugrana" bắt đầu nảy sinh bất đồng. Cụ thể, Philippe Coutinho cho hay một trong những trụ cột của đương kim vô địch La Liga tỏ ra bất mãn với thượng tầng CLB. Người đó chính là tiền vệ Croatia, Ivan Rakitic. 

Hơn ai hết, ngôi sao 30 tuổi biết rằng Barca sẽ dùng mọi cách để có được chữ ký của cầu thủ 25 tuổi. Anh thừa hiểu vị trí của bản thân sẽ bị đe dọa nếu Paul Pogba xuất hiện ở sân Camp Nou. Không những vậy, Rakitic còn thẳng thắn tuyên bố, chỉ cần siêu sao 89 triệu bảng đến Tây Ban Nha, anh sẽ cương quyết chia tay đại diện La Liga.

Điều tiền vệ Croatia lo lắng không phải không có cơ sở. Một trong những lý do khiến gã khổng lồ Catalan muốn có Pogba là vì anh sẽ cùng Vidal tái hiện bộ đôi tiền vệ lừng lẫy một thời ở Juventus. Chưa kể, cộng với sự hỗ trợ của Busquets, Barca sẽ sở hữu tuyến giữa thượng thừa, gần như hoàn hảo. Và hiển nhiên, ở đó, không còn chỗ cho tài năng của Ivan Rakitic.

Chưa dừng lại ở đó, vừa qua, tờ Don Balon còn cho hay dù tỏ ra không mấy quan tâm đến phát ngôn của người đứng đầu "Blaugrana", tuy nhiên, Rakitic vẫn có gì đó không cam tâm. Ngôi sao Croatia bắt đầu có sự dao động trong suy nghĩ cũng như có thể sớm cân nhắc việc rời đội bóng Catalan.

Trong khi đó, tờ Le10Sport tiết lộ Giám đốc thể thao CLB, Antero Henrique vẫn ôm mộng chèo kéo ngôi sao Croatia vào kỳ chuyển nhượng sắp tới. Đại diện Ligue 1 không tìm được cái tên nào phù hợp hơn với đội nhà ngoài tiền vệ 30 tuổi. ',
                'image' => 'messirakitic-cropped_1qodgd3hbhjh317biopagzp0vo-1358.jpg',
                'views' => 0,
                'categories_id' => 3,
                'user_id' => 7,
                'Breaking_news' => 1,
                'created_at' => '2018-10-13 19:26:31',
                'updated_at' => '2018-09-24 19:29:43',
            ),
            21 => 
            array (
                'id' => 30,
                'title' => 'Nếu không là Firmino, xin hãy là Timo Werner',
                'summary' => 'Barca đang có kế hoạch đẩy Luis Suarez đi ngay trong kỳ CNMĐ sắp tới. Nếu tiền đạo này rời đi, trong ba cái tên thuộc danh sách sơ bộ, ai sẽ là người được chọn?',
                'body' => 'Như tờ Don Balon mới đây đã đưa tin, tiền đạo Luis Suarez nhiều khả năng sẽ bị giới chức Camp Nou thanh lý ngay trong kỳ CNMĐ này.

Nguyên nhân ai cũng biết, đó là phong độ trồi sụt của cầu thủ mang áo số 9. Chưa rõ thực hư ra sao, thế nhưng trong trường hợp không có được sự phục vụ của chân sút người Uruguay, HLV Ernesto Valverde nên lựa chọn ai để lấp đầy khoảng trống anh để lại?

Harry Kane

Cái tên đầu tiên trong những phương án thay thế được GĐTT Eric Abidal đưa ra, đó là Harry Kane. Tài năng, bản lĩnh của cầu thủ người Anh rõ ràng không phải bàn cãi.

Không chỉ đóng vai trò thủ lĩnh dẫn dắt Tottenham bước trên con đường trở thành một thế lực tại xứ sở sương mù, anh còn là chủ nhân của danh hiệu Chiếc Giày Vàng World Cup.

Dẫu vậy, phong cách thi đấu như một trung phong thuần túy của Kane không thích hợp lắm với lối chơi của Barcelona thời điểm hiện tại.

Thêm vào đó, ở kỳ CNMH vừa qua, đội bóng thành Bắc London không hề mang về thêm bất kỳ một tân binh nào nên nhiều khả năng họ sẽ chẳng chịu nhả ngôi sao lớn nhất của mình.
Roberto Firmino

Kỹ thuật, tốc độ, khả năng ban bật một chạm tốt cùng với lối chơi khá tự do - tiền đạo người Brazil thường xuyên có những tình huống lùi xuống để nhận bóng rồi thực hiện phối hợp cùng Salah và Mane.

Xét thuần túy về mặt chuyên môn, Firmino - người đang giúp The Kop bay cao, chính là cái tên phù hợp nhất với "gã khổng lồ" xứ Catalan lúc này.

Nếu có được sự phục vụ của Firmino, không chỉ Messi mà cả Coutinho cũng sẽ có thêm một đối tác ăn ý khi cả hai đã từng có những năm tháng làm đồng đội của nhau trong màu áo Liverpool.

Lối đá hoa mỹ tương tự nhau, cùng có khả năng chia lửa trong nhiệm vụ châm ngòi, cùng sở hữu những pha bóng khuấy đảo hàng phòng ngự đối phương, cùng sắc bén, nhạy cảm khi xâm nhập khu cấm địa - rõ ràng sự kết hợp giữa chủ nhân 5 QBV và vị "độc nhãn tướng quân" của đội chủ sân Anfield sẽ rất đáng để chờ đợi.

Timo Werner

Cái tên cuối cùng trong danh sách là Timo Werner. Không mạnh ở khả năng phát động tấn công, không sở hữu những tình huống đi bóng hoa mỹ, và cũng không mang nhiều "DNA Barca" như Firmino, thế nhưng cầu thủ người Đức nhiều khả năng sẽ là mục tiêu khả dĩ nhất cho "gã khổng lồ" xứ Catalan lúc này.

Werner với sở trường xử lý bóng ngắn, cùng sự nguy hiểm đặc biệt trong những tình huống phản công nhờ tốc độ "ánh sáng" chính là thứ mà Barca đang còn thiếu. 
Nếu đặt lên bàn cân so sánh với người đồng nghiệp đến từ Brazil, Werner còn nhiều điều yếu điểm cần cải thiện. Tuy nhiên ở tuổi 22, thời gian cho chân sút người Đức là rất nhiều.

Và trên tất cả, mức giá 60 triệu Euro của anh sẽ "vừa miếng" với giới chức Camp Nou hơn so với 80 triệu của Firmino hay 150 triệu của Kane (theo số liệu của Transfermarkt).',
                'image' => '_n0y08570-0217.jpg',
                'views' => 0,
                'categories_id' => 3,
                'user_id' => 7,
                'Breaking_news' => 1,
                'created_at' => '2018-10-13 19:26:32',
                'updated_at' => '2018-09-24 19:29:43',
            ),
            22 => 
            array (
                'id' => 31,
                'title' => '5 điểm nhấn Barcelona 2-2 Girona: Thảm họa Pique; 10 phút tai hại của Valverde
',
                'summary' => 'Barcelona đã bị chấm dứt chuỗi trận toàn thắng bởi Girona. Hãy cùng điểm lại 5 điểm nhấn sau trận.',
                'body' => 'Ernesto Valverde nỗ lực xoay vòng

Mùa trước, Barcelona thất bại tại Champions League có một phần nguyên nhân vì Valverde chỉ sử dụng gần như 11 cầu thủ trong suốt mùa giải, khiến thể lực của họ hao mòn dần. Để tránh đi vào vết xe đổ nói trên, Valverde đang tích cực xoay vòng đội hình Barca.

Đêm qua, ông thực hiện 4 sự thay đổi so với trận gặp PSV. Cả 3 tân binh Clement Lenglet, Arturo Vidal, Arthur đều có lần đầu tiên đá chính trong màu áo Barcelona kể từ đầu mùa giải. Nhìn chung đây là nỗ lực thay đổi đáng khen của Valverde.


Chiếc thẻ đỏ tai hại

Bước ngoặt dẫn đến trận hòa của Barcelona chính là khoảnh khắc \'xốc nổi\' của trung vệ Lenglet. Đó là một pha bóng rất bình thường, Lenglet đã ngăn cản thành công đối thủ bằng chân nhưng không hiểu vì lý do gì anh lại cố gắng vung cùi chỏ vào mặt cầu thủ Girona.

Rõ ràng đó là pha bóng cố ý của Lenglet. Anh nhận thức được mình đã làm gì, thế nên trung vệ người Pháp mới giả vờ bị đau sau pha va chạm hòng thoát tội. Lenglet đã đánh lừa thành công trọng tài nhưng vẫn còn đó công nghệ VAR. Việc anh bị đuổi khỏi sân đã tạo tiền đề cho Girona vùng lên.

Chậm 10 phút, mất 2 điểm

Thời điểm Lenglet bị đuổi khỏi sân là phút 35, ai cũng hiểu Barcelona cần Umtiti vào sân để đảm bảo an toàn cho hàng phòng ngự. Valverde cũng hiểu điều này, nhưng ông quyết định kéo Busquets xuống đá tạm trung vệ bởi vì Umtiti cần có thời gian làm nóng. Cầu thủ người Pháp sẽ được tung vào sân đầu hiệp hai.

Quyết định có phần cứng nhắc của Valverde khiến tuyến giữa Barca bị lép vế so với Girona trong 10 phút cuối hiệp một. Hậu quả, đội khách đã có được bàn thắng ở phút 45.

Thảm họa Pique

Pique là người ghi bàn gỡ hòa để mang về 1 điểm cho Barcelona. Tuy nhiên, trước đó, anh đã có màn trình diễn thảm họa, mắc lỗi chính trong 2 bàn thua của đội nhà.

Bàn đầu tiên, Pique mất tập trung để Stuani thoát xuống dứt điểm tung lưới Ter Stegen. Bàn thứ 2, anh quá chậm chạp, để Portu vượt qua dù là người xuất phát trước. Ở tuổi 31, trung vệ TBN cho thấy anh không còn ở đỉnh cao phong độ.

Tuyệt vời Girona

Cầm hòa thành công Barcelona trong trận derby, Girona đang chễm trệ ở vị trí thứ 6 trên BXH. Họ đang có thành tích 2 thắng, 2 hòa, 1 thua sau 5 vòng. Đáng chú ý, Girona đã bất bại trong 3 trận gần nhất.

Nhìn Girona thi đấu, chúng ta thấy được họ là một tập thể đoàn kết, giàu sức chiến đấu. \'Đặc sản\' này hoàn toàn có thể giúp đội bóng xứ Catalunya bay cao trong mùa giải năm nay.',
                'image' => '1038618614-612x612-1126.jpg',
                'views' => 0,
                'categories_id' => 3,
                'user_id' => 7,
                'Breaking_news' => 1,
                'created_at' => '2018-10-13 19:26:34',
                'updated_at' => '2018-09-24 19:29:43',
            ),
            23 => 
            array (
                'id' => 32,
                'title' => 'Chuyên gia Guillem Balague XÁC NHẬN thông tin sốc về tương lai Pogba',
                'summary' => 'Mới đây, chuyên gia bóng đá Tây Ban Nha, Guillem Balague đã có những chia sẻ bất ngờ về thương vụ Barca và Pogba.',
                'body' => 'Cái tên Pogba chưa bao giờ bị lãng quên trên các mặt báo quốc tế. Ngôi sao người Pháp tiếp tục trở thành tâm điểm của truyền thông sau trận hòa bẽ bàng của Manchester United. Từ người hùng Champions League, tiền vệ 25 tuổi trở thành người gián tiếp khiến đội nhà đánh rơi 3 điểm trên sân nhà.
Dẫu vậy, cổ động viên MU vẫn có thể yên lòng vì thái độ thi đấu có phần biến chuyển tích cực từ tuyển thủ số 6. Vừa qua, Pogba còn bày tỏ tình cảm trân trọng với đại diện Premier League: "Tôi vô cùng hạnh phúc vì có thể ghi bàn và mang lại kết quả tích cực cho đội bóng. Nếu tôi có thể kiến tạo, lập công, làm mọi thứ giúp đỡ MU trong mọi hoàn cảnh thì thật tuyệt vời".

Thế nhưng, cổ động viên nửa đỏ thành Manchester vui chưa được bao lâu thì mới đây, chuyên gia bóng đá Tây Ban Nha, Guillem Balague bất ngờ đưa tin không mấy hay ho liên quan đến tương lai Pogba. Cụ thể, cây bút của Sky Sports xác nhận Ban lãnh đạo Barcelona đã liên lạc với thượng tầng "Quỷ đỏ" để chiêu mộ ngôi sao 25 tuổi trong kỳ chuyển nhượng mùa đông.

Không những vậy, Balague còn khẳng định đương kim vô địch La Liga đang tiến hành thương thảo hợp đồng với Pogba. Tuy nhiên, hiện tại, "Blaugrana" vẫn chưa thể ngay lập tức kích nổ bom tấn 89 triệu bảng. Đại diện xứ bò tót  gặp khó khăn về vấn đề tài chính.

"Tôi đã chứng kiến Pogba thi đấu trong màu áo MU suốt thời gian qua. Cậu ấy đã thể hiện phong độ đặc biệt xuất sắc và dần trở thành trụ cột của đội nhà. Nhưng, nếu Pogba tiếp tục chơi tốt ở mùa này, tôi nghĩ cậu ấy nên gia nhập một CLB khác".

"Barcelona đang thật sự quan tâm đến cậu ấy. Song, hiện tại, đội bóng Catalan không có đủ tiềm lực kinh tế để đáp ứng số tiền của Man United cũng như mức lương Pogba yêu cầu. Trừ khi Barca đem đến thật nhiều tiền, nếu không Pogba sẽ chẳng dễ dàng rời MU. Barca vẫn tiếp tục theo dõi xem thái độ của Pogba và mức phí nửa đỏ thành Manchester muốn có", chuyên gia xứ bò tót chia sẻ.

Trước đó, tờ Mirror tiết lộ Barca tiếp tục âm mưu cuỗm mất tiền vệ người Pháp. Điều quan trọng, lần này, đương kim vô địch La Liga sẽ đích thân ra mặt và công khai theo đuổi tuyển thủ 25 tuổi. Cụ thể, Ban lãnh đạo đội bóng Catalan sẽ cử người đại diện trực tiếp dự khán cũng như theo dõi màn trình diễn của Pogba qua từng trận đấu cho đến hết mùa giải.',
                'image' => 'pog-0939.jpg',
                'views' => 1,
                'categories_id' => 3,
                'user_id' => 7,
                'Breaking_news' => 1,
                'created_at' => '2018-10-13 19:26:35',
                'updated_at' => '2018-10-01 19:15:18',
            ),
            24 => 
            array (
                'id' => 33,
                'title' => 'Tân binh nhận thẻ đỏ, Barcelona toát \'mồ hôi hột\' tại Camp Nou',
                'summary' => 'Tưởng chừng như sẽ dễ dàng có được chiến thắng trước Girona, nhưng một tình huống \'xốc nổi\' của Lenglet đã khiến Barca gặp vô vàn khó khăn.',
                'body' => 'Bước vào trận derby xứ Catalunya, HLV Ernesto Valverde đã quyết định xoay vòng cầu thủ bởi lịch thi đấu dày đặc mà Barcelona đang trải qua. So với cuộc chiến giữa tuần trước PSV, chỉ bộ 3 trên hàng công Dembele, Suarez, Messi được giữ lại. Tuyến giữa, Arthur cùng Vidal có lần đầu tiên đá chính cho Barca trong mùa giải chính thức. Phía dưới, Lenglet và Semedo thay thế cho Umtiti và Sergi Roberto.

Với lợi thế sân nhà, Barcelona ngay lập tức tràn lên phần sân Girona sau tiếng còi khai cuộc tạo nên sức ép mãnh liệt. Phút thứ 12, cơ hội nguy hiểm đầu tiên xuất hiện với Barca. Nhận bóng từ đồng đội, Messi đi bóng vượt qua 3 cầu thủ Girona trước khi tung cú dứt chéo góc hiểm hóc. Bóng vượt khỏi tầm với thủ môn Bono nhưng lại đi chệch cột dọc trong gang tấc.

Dù vậy, Messi cũng không cần phải đợi quá lâu để được ăn mừng bàn mở tỉ số. Phút 19, Semedo cùng Vidal phối hợp ăn ý bên cánh phải, tiền vệ Chile căng ngang vào trong cho Messi. Thủ quân Barca \'nhanh như cắt\' đệm bóng cần thành tung lưới Girona.

Đang nắm giữ hoàn toàn thế trận sau bàn thắng dẫn trước, tai họa bỗng ập xuống đầu Barca bởi một tình huống \'xốc nổi\' của tân binh Lenglet. Trong tình huống truy cản một cầu thủ Girona, Lenglet lại \'ngứa tay\' tung cùi chỏ vào mặt đối thủ. Đây là tình huống hoàn toàn cố ý của Lenglet, nhờ VAR trợ giúp, trọng tài đã quyết định rút thẻ đỏ trực tiếp đuổi trung vệ Barca khỏi sân, đồng hồ khi đó điểm phút 35.


Thi đấu hơn người, Girona liền tận dụng cơ hội dâng lên tìm bàn gỡ hòa và họ đã có thành quả ở phút cuối cùng hiệp một. Girona tạt bóng vào vòng cấm, Gerard Pique xử lý bất cẩn để bóng đến chân Christian Stuani. Số 7 đội khách nhanh chóng chớp thời cơ tung chân hạ gục thủ môn Ter Stegen. Hiệp một kết thúc với tỉ số hòa 1-1.

Ngay đầu hiệp hai, Barcelona đã phải nhận thêm cú sốc đến từ Girona. Phút 51, Pique tiếp tục mắc sai lầm, anh không thể đua tốc độ cùng Portu sau một pha chọc khe dù xuất phát trước. Số 9 Girona thoát xuống đối mặt thủ môn nhưng Ter Stegen đã xuất sắc cản phá cú dứt điểm. Dù vậy, ở pha đá bồi sau đó của Stuani, không có cơ hội chủ thủ thành người Đức. Girona vươn lên dẫn trước ở trận derby.

Đây đã có thể là một đêm ác mộng dành cho Pique nếu Barcelona thất bại. Tuy nhiên, với nỗ lực chuộc tội, trung vệ TBN đã không để điều đó xảy ra. Phút 63, trong một tình huống lên tham gia tấn công, Pique có pha đánh đầu cận thành san bằng tỉ số 2-2.

Những phút còn lại, đội chủ nhà điên cường tấn công để giành trọn 3 điểm. Dù vậy, 11 người của Girona đã không cho 10 người Barcelona có được điều hoàn thành mong muốn.

Để Girona cầm chân trong trận derby, Barcelona giờ đây đã bị Real bắt kịp. Cả hai đội có cùng 13 điểm sau 5 trận. Đây cũng là kết quả hòa đầu tiên sau chuỗi trận toàn thắng trên mọi đấu trường kể từ đầu mùa của Barca.

Chung cuộc: Barcelona 2-2 Girona',
                'image' => '1038578908-612x612-0457.jpg',
                'views' => 0,
                'categories_id' => 3,
                'user_id' => 7,
                'Breaking_news' => 0,
                'created_at' => '2018-10-13 19:26:37',
                'updated_at' => '2018-09-24 19:29:43',
            ),
            25 => 
            array (
                'id' => 34,
                'title' => 'Sau tất cả, Chủ tịch Perez bất ngờ gửi lời cuối cùng đến Zidane và Ronaldo',
                'summary' => 'Mới đây, Chủ tịch Real, Florentino Perez đã có những chia sẻ về HLV Zidane và siêu sao Cristiano Ronaldo.',
                'body' => 'Nhắc tới Real thì không bao giờ hết đề tài để bàn bạc. Dù thời gian đã lâu, câu chuyện về Ronaldo hay Zidane vẫn khiến cổ động viên đội bóng Hoàng gia đau đáu. Với những cống hiến suốt trong nhiều năm, cả 2 trở thành một phần kí ức đẹp đẽ ở thành Madrid.

Vừa qua, Chủ tịch Perez đã chia sẻ lý do để siêu sao người Bồ Đào Nha ra đi. Theo đó, ông tiết lộ Ban lãnh đạo đội nhà chỉ đáp ứng yêu cầu của chân sút số 7. Mới đây, người đứng đầu Kền Kền trắng tiếp tục có những phát biểu về CR7 và cả HLV Zidane. 


"Bố già" không ngần ngại bày tỏ sự biết ơn, sự tôn trọng với những gì Ronaldo cùng Zizou đã đóng góp cho CLB. "Ronaldo chính là người kế thừa xứng đáng của Alfredo Di Stéfano. Trong suốt 9 năm khoác áo Real Madrid, cậu ấy đã tạo nên những cột mốc vinh quang cho cả bản thân lẫn đội nhà. Sự nghiệp lẫy lừng của cậu ấy sẽ được truyền từ đời này sang đời khác. Cậu ấy sẽ là tấm gương tốt nhất cho những ngôi sao khác noi theo. Thật lòng, cảm ơn cậu rất nhiều, Cristiano", Perez phát biểu.

Về phía chiến lược gia người Pháp, ông chủ "Los Blancos" gọi Zizou là lịch sử của CLB. "Một trong những thuyền trưởng vĩ đại nhất Real chính là Zidane. Cậu ấy đã đưa đội nhà 3 lần liên tiếp bước lên ngôi vương ở Champions League và giành hết mọi danh hiệu danh giá. Zidane chính là huyền thoại và một phần lịch sử của Real", Perez xúc động cho biết.

Cuối cùng, người đứng đầu đương kim vô địch Champions League gửi đi thông điệp đầy tình nghĩa và đầy ấm áp. "Tôi chỉ có thể nói tôi cùng Real Madrid vô cùng cảm ơn Zidane cũng như Ronaldo. Cả 2 đều biết rằng nơi đây, thành Madrid mãi mãi là mái nhà của họ", "Bố già" chốt lại.

Dù có vô vàn lùm xùm xung quanh mối quan hệ giữa Perez, Zidane và Ronaldo, tuy nhiên, mọi thứ đều đã là câu chuyện quá khứ. Giờ đây, mỗi người đều hài lòng với lựa chọn của bản thân. CR7 trên đất Italy đang dần quen với cuộc sống bên những đồng đội mới.

Zizou đã sẵn sàng để trở lại băng ghế huấn luyện. Trong khi đó, đội bóng Hoàng gia cũng trải qua ngày tháng mới mẻ với muôn vàn thay đổi nhưng hoàn toàn tích cực. Với những phát ngôn trên đây của "Bố già", không còn căng thẳng hay thù hận, chỉ còn lại những kí ức đẹp đẽ của đôi bên.',
                'image' => 'perez-2306.jpg',
                'views' => 0,
                'categories_id' => 3,
                'user_id' => 7,
                'Breaking_news' => 0,
                'created_at' => '2018-10-13 19:26:38',
                'updated_at' => '2018-09-24 19:29:43',
            ),
            26 => 
            array (
                'id' => 35,
                'title' => 'Messi từ chối bắt tay trọng tài; HLV Barca mỉa mai BLĐ La Liga',
                'summary' => 'Hậu vệ của Barca - Lenglet đã phải nhận thẻ đỏ rời sân trong trận đấu với Girona. Tuy nhiên nạn nhân của pha bóng này lại lên tiếng xin lỗi Lenglet.',
                'body' => 'Phút thứ 36, Clement Lenglet và Pere Pons cùng lao vào tranh chấp bóng, hai cầu thủ cùng ngã ra sân và bước đầu trọng tài Gil Manzano xác định lỗi thuộc về Pons. Tuy nhiên sau khi xem lại pha bóng từ công nghệ VAR, vị vua áo đen đã thay đổi quyết định rút thẻ đỏ truất quyền thi đấu của Lenglet và cho Girona được hưởng đá phạt.

Sau trận đấu, Pere Pons cũng khá bất ngờ về quyết định này: "Vâng, tôi đã nhận một pha cùi chỏ nhưng khi tôi đứng dậy, tôi đã xin lỗi Lenglet và đưa tay đề nghị giúp anh ấy đứng dậy, tôi nghĩ đó là lỗi của tôi. Tôi còn không cảm giác đã bị cùi chỏ của anh ấy chạm phải".

Thủ quân của Barca - Lionel Messi đã rất bất mãn với quyết định này và anh từ chối bắt tay với trọng tài Manzano khi trận đấu kết thúc. HLV Valverde cũng lên tiếng mỉa mai công tác trọng tài: "Đây là lần đầu tiên một nạn nhân lên tiếng xin lỗi người chơi xấu mình."',
                'image' => '3-1617.jpg',
                'views' => 0,
                'categories_id' => 3,
                'user_id' => 7,
                'Breaking_news' => 0,
                'created_at' => '2018-10-13 19:26:40',
                'updated_at' => '2018-09-24 19:29:59',
            ),
            27 => 
            array (
                'id' => 36,
                'title' => 'Nếu siêu sao MU này đến, trụ cột Barca sẽ ra đi',
                'summary' => 'Truyền thông Tây Ban Nha vừa cập nhật tin tức liên quan đến tình hình ở Barcelona.',
                'body' => 'Thị trường chuyển nhượng mùa hè đóng cửa, Barca vẫn biết cách làm loạn làng túc cầu. Đội bóng Catalan tiếp tục đẩy căng thẳng với Manchester United lên đỉnh điểm khi cương quyết không buông tha thương vụ Pogba. Ban lãnh đạo CLB lên đủ kế hoạch để chèo kéo ngôi sao người Pháp.
Vừa qua, tờ Mirror tiết lộ Barca tiếp tục âm mưu cuỗm mất tiền vệ người Pháp. Điều quan trọng, lần này, đương kim vô địch La Liga sẽ đích thân ra mặt và công khai theo đuổi tuyển thủ 25 tuổi. Ban lãnh đạo đội bóng Catalan sẽ cử người đại diện trực tiếp dự khán cũng như theo dõi màn trình diễn của Pogba qua từng trận đấu cho đến hết mùa giải.

Mới đây, truyền thông Tây Ban Nha tiếp tục cập nhật tin tức liên quan đến thương vụ trên. Theo đó, tờ Don Balon tiết lộ vì kế hoạch chiêu mộ Pogba, nội bộ "Blaugrana" bắt đầu nảy sinh bất đồng. Cụ thể, Philippe Coutinho cho hay một trong những trụ cột của đương kim vô địch La Liga tỏ ra bất mãn với thượng tầng CLB. Người đó chính là tiền vệ Croatia, Ivan Rakitic. 

Hơn ai hết, ngôi sao 30 tuổi biết rằng Barca sẽ dùng mọi cách để có được chữ ký của cầu thủ 25 tuổi. Anh thừa hiểu vị trí của bản thân sẽ bị đe dọa nếu Paul Pogba xuất hiện ở sân Camp Nou. Không những vậy, Rakitic còn thẳng thắn tuyên bố, chỉ cần siêu sao 89 triệu bảng đến Tây Ban Nha, anh sẽ cương quyết chia tay đại diện La Liga.

Điều tiền vệ Croatia lo lắng không phải không có cơ sở. Một trong những lý do khiến gã khổng lồ Catalan muốn có Pogba là vì anh sẽ cùng Vidal tái hiện bộ đôi tiền vệ lừng lẫy một thời ở Juventus. Chưa kể, cộng với sự hỗ trợ của Busquets, Barca sẽ sở hữu tuyến giữa thượng thừa, gần như hoàn hảo. Và hiển nhiên, ở đó, không còn chỗ cho tài năng của Ivan Rakitic.

Chưa dừng lại ở đó, vừa qua, tờ Don Balon còn cho hay dù tỏ ra không mấy quan tâm đến phát ngôn của người đứng đầu "Blaugrana", tuy nhiên, Rakitic vẫn có gì đó không cam tâm. Ngôi sao Croatia bắt đầu có sự dao động trong suy nghĩ cũng như có thể sớm cân nhắc việc rời đội bóng Catalan.

Trong khi đó, tờ Le10Sport tiết lộ Giám đốc thể thao CLB, Antero Henrique vẫn ôm mộng chèo kéo ngôi sao Croatia vào kỳ chuyển nhượng sắp tới. Đại diện Ligue 1 không tìm được cái tên nào phù hợp hơn với đội nhà ngoài tiền vệ 30 tuổi. ',
                'image' => 'messirakitic-cropped_1qodgd3hbhjh317biopagzp0vo-1358.jpg',
                'views' => 0,
                'categories_id' => 3,
                'user_id' => 7,
                'Breaking_news' => 0,
                'created_at' => '2018-10-13 19:26:41',
                'updated_at' => '2018-09-24 19:29:59',
            ),
            28 => 
            array (
                'id' => 37,
                'title' => 'Nếu không là Firmino, xin hãy là Timo Werner',
                'summary' => 'Barca đang có kế hoạch đẩy Luis Suarez đi ngay trong kỳ CNMĐ sắp tới. Nếu tiền đạo này rời đi, trong ba cái tên thuộc danh sách sơ bộ, ai sẽ là người được chọn?',
                'body' => 'Như tờ Don Balon mới đây đã đưa tin, tiền đạo Luis Suarez nhiều khả năng sẽ bị giới chức Camp Nou thanh lý ngay trong kỳ CNMĐ này.

Nguyên nhân ai cũng biết, đó là phong độ trồi sụt của cầu thủ mang áo số 9. Chưa rõ thực hư ra sao, thế nhưng trong trường hợp không có được sự phục vụ của chân sút người Uruguay, HLV Ernesto Valverde nên lựa chọn ai để lấp đầy khoảng trống anh để lại?

Harry Kane

Cái tên đầu tiên trong những phương án thay thế được GĐTT Eric Abidal đưa ra, đó là Harry Kane. Tài năng, bản lĩnh của cầu thủ người Anh rõ ràng không phải bàn cãi.

Không chỉ đóng vai trò thủ lĩnh dẫn dắt Tottenham bước trên con đường trở thành một thế lực tại xứ sở sương mù, anh còn là chủ nhân của danh hiệu Chiếc Giày Vàng World Cup.

Dẫu vậy, phong cách thi đấu như một trung phong thuần túy của Kane không thích hợp lắm với lối chơi của Barcelona thời điểm hiện tại.

Thêm vào đó, ở kỳ CNMH vừa qua, đội bóng thành Bắc London không hề mang về thêm bất kỳ một tân binh nào nên nhiều khả năng họ sẽ chẳng chịu nhả ngôi sao lớn nhất của mình.
Roberto Firmino

Kỹ thuật, tốc độ, khả năng ban bật một chạm tốt cùng với lối chơi khá tự do - tiền đạo người Brazil thường xuyên có những tình huống lùi xuống để nhận bóng rồi thực hiện phối hợp cùng Salah và Mane.

Xét thuần túy về mặt chuyên môn, Firmino - người đang giúp The Kop bay cao, chính là cái tên phù hợp nhất với "gã khổng lồ" xứ Catalan lúc này.

Nếu có được sự phục vụ của Firmino, không chỉ Messi mà cả Coutinho cũng sẽ có thêm một đối tác ăn ý khi cả hai đã từng có những năm tháng làm đồng đội của nhau trong màu áo Liverpool.

Lối đá hoa mỹ tương tự nhau, cùng có khả năng chia lửa trong nhiệm vụ châm ngòi, cùng sở hữu những pha bóng khuấy đảo hàng phòng ngự đối phương, cùng sắc bén, nhạy cảm khi xâm nhập khu cấm địa - rõ ràng sự kết hợp giữa chủ nhân 5 QBV và vị "độc nhãn tướng quân" của đội chủ sân Anfield sẽ rất đáng để chờ đợi.

Timo Werner

Cái tên cuối cùng trong danh sách là Timo Werner. Không mạnh ở khả năng phát động tấn công, không sở hữu những tình huống đi bóng hoa mỹ, và cũng không mang nhiều "DNA Barca" như Firmino, thế nhưng cầu thủ người Đức nhiều khả năng sẽ là mục tiêu khả dĩ nhất cho "gã khổng lồ" xứ Catalan lúc này.

Werner với sở trường xử lý bóng ngắn, cùng sự nguy hiểm đặc biệt trong những tình huống phản công nhờ tốc độ "ánh sáng" chính là thứ mà Barca đang còn thiếu. 
Nếu đặt lên bàn cân so sánh với người đồng nghiệp đến từ Brazil, Werner còn nhiều điều yếu điểm cần cải thiện. Tuy nhiên ở tuổi 22, thời gian cho chân sút người Đức là rất nhiều.

Và trên tất cả, mức giá 60 triệu Euro của anh sẽ "vừa miếng" với giới chức Camp Nou hơn so với 80 triệu của Firmino hay 150 triệu của Kane (theo số liệu của Transfermarkt).',
                'image' => '_n0y08570-0217.jpg',
                'views' => 0,
                'categories_id' => 3,
                'user_id' => 7,
                'Breaking_news' => 0,
                'created_at' => '2018-10-13 19:26:42',
                'updated_at' => '2018-09-24 19:29:59',
            ),
            29 => 
            array (
                'id' => 38,
                'title' => '5 điểm nhấn Barcelona 2-2 Girona: Thảm họa Pique; 10 phút tai hại của Valverde
',
                'summary' => 'Barcelona đã bị chấm dứt chuỗi trận toàn thắng bởi Girona. Hãy cùng điểm lại 5 điểm nhấn sau trận.',
                'body' => 'Ernesto Valverde nỗ lực xoay vòng

Mùa trước, Barcelona thất bại tại Champions League có một phần nguyên nhân vì Valverde chỉ sử dụng gần như 11 cầu thủ trong suốt mùa giải, khiến thể lực của họ hao mòn dần. Để tránh đi vào vết xe đổ nói trên, Valverde đang tích cực xoay vòng đội hình Barca.

Đêm qua, ông thực hiện 4 sự thay đổi so với trận gặp PSV. Cả 3 tân binh Clement Lenglet, Arturo Vidal, Arthur đều có lần đầu tiên đá chính trong màu áo Barcelona kể từ đầu mùa giải. Nhìn chung đây là nỗ lực thay đổi đáng khen của Valverde.


Chiếc thẻ đỏ tai hại

Bước ngoặt dẫn đến trận hòa của Barcelona chính là khoảnh khắc \'xốc nổi\' của trung vệ Lenglet. Đó là một pha bóng rất bình thường, Lenglet đã ngăn cản thành công đối thủ bằng chân nhưng không hiểu vì lý do gì anh lại cố gắng vung cùi chỏ vào mặt cầu thủ Girona.

Rõ ràng đó là pha bóng cố ý của Lenglet. Anh nhận thức được mình đã làm gì, thế nên trung vệ người Pháp mới giả vờ bị đau sau pha va chạm hòng thoát tội. Lenglet đã đánh lừa thành công trọng tài nhưng vẫn còn đó công nghệ VAR. Việc anh bị đuổi khỏi sân đã tạo tiền đề cho Girona vùng lên.

Chậm 10 phút, mất 2 điểm

Thời điểm Lenglet bị đuổi khỏi sân là phút 35, ai cũng hiểu Barcelona cần Umtiti vào sân để đảm bảo an toàn cho hàng phòng ngự. Valverde cũng hiểu điều này, nhưng ông quyết định kéo Busquets xuống đá tạm trung vệ bởi vì Umtiti cần có thời gian làm nóng. Cầu thủ người Pháp sẽ được tung vào sân đầu hiệp hai.

Quyết định có phần cứng nhắc của Valverde khiến tuyến giữa Barca bị lép vế so với Girona trong 10 phút cuối hiệp một. Hậu quả, đội khách đã có được bàn thắng ở phút 45.

Thảm họa Pique

Pique là người ghi bàn gỡ hòa để mang về 1 điểm cho Barcelona. Tuy nhiên, trước đó, anh đã có màn trình diễn thảm họa, mắc lỗi chính trong 2 bàn thua của đội nhà.

Bàn đầu tiên, Pique mất tập trung để Stuani thoát xuống dứt điểm tung lưới Ter Stegen. Bàn thứ 2, anh quá chậm chạp, để Portu vượt qua dù là người xuất phát trước. Ở tuổi 31, trung vệ TBN cho thấy anh không còn ở đỉnh cao phong độ.

Tuyệt vời Girona

Cầm hòa thành công Barcelona trong trận derby, Girona đang chễm trệ ở vị trí thứ 6 trên BXH. Họ đang có thành tích 2 thắng, 2 hòa, 1 thua sau 5 vòng. Đáng chú ý, Girona đã bất bại trong 3 trận gần nhất.

Nhìn Girona thi đấu, chúng ta thấy được họ là một tập thể đoàn kết, giàu sức chiến đấu. \'Đặc sản\' này hoàn toàn có thể giúp đội bóng xứ Catalunya bay cao trong mùa giải năm nay.',
                'image' => '1038618614-612x612-1126.jpg',
                'views' => 0,
                'categories_id' => 3,
                'user_id' => 7,
                'Breaking_news' => 0,
                'created_at' => '2018-10-13 19:26:43',
                'updated_at' => '2018-09-24 19:29:59',
            ),
            30 => 
            array (
                'id' => 39,
                'title' => 'Chuyên gia Guillem Balague XÁC NHẬN thông tin sốc về tương lai Pogba',
                'summary' => 'Mới đây, chuyên gia bóng đá Tây Ban Nha, Guillem Balague đã có những chia sẻ bất ngờ về thương vụ Barca và Pogba.',
                'body' => 'Cái tên Pogba chưa bao giờ bị lãng quên trên các mặt báo quốc tế. Ngôi sao người Pháp tiếp tục trở thành tâm điểm của truyền thông sau trận hòa bẽ bàng của Manchester United. Từ người hùng Champions League, tiền vệ 25 tuổi trở thành người gián tiếp khiến đội nhà đánh rơi 3 điểm trên sân nhà.
Dẫu vậy, cổ động viên MU vẫn có thể yên lòng vì thái độ thi đấu có phần biến chuyển tích cực từ tuyển thủ số 6. Vừa qua, Pogba còn bày tỏ tình cảm trân trọng với đại diện Premier League: "Tôi vô cùng hạnh phúc vì có thể ghi bàn và mang lại kết quả tích cực cho đội bóng. Nếu tôi có thể kiến tạo, lập công, làm mọi thứ giúp đỡ MU trong mọi hoàn cảnh thì thật tuyệt vời".

Thế nhưng, cổ động viên nửa đỏ thành Manchester vui chưa được bao lâu thì mới đây, chuyên gia bóng đá Tây Ban Nha, Guillem Balague bất ngờ đưa tin không mấy hay ho liên quan đến tương lai Pogba. Cụ thể, cây bút của Sky Sports xác nhận Ban lãnh đạo Barcelona đã liên lạc với thượng tầng "Quỷ đỏ" để chiêu mộ ngôi sao 25 tuổi trong kỳ chuyển nhượng mùa đông.

Không những vậy, Balague còn khẳng định đương kim vô địch La Liga đang tiến hành thương thảo hợp đồng với Pogba. Tuy nhiên, hiện tại, "Blaugrana" vẫn chưa thể ngay lập tức kích nổ bom tấn 89 triệu bảng. Đại diện xứ bò tót  gặp khó khăn về vấn đề tài chính.

"Tôi đã chứng kiến Pogba thi đấu trong màu áo MU suốt thời gian qua. Cậu ấy đã thể hiện phong độ đặc biệt xuất sắc và dần trở thành trụ cột của đội nhà. Nhưng, nếu Pogba tiếp tục chơi tốt ở mùa này, tôi nghĩ cậu ấy nên gia nhập một CLB khác".

"Barcelona đang thật sự quan tâm đến cậu ấy. Song, hiện tại, đội bóng Catalan không có đủ tiềm lực kinh tế để đáp ứng số tiền của Man United cũng như mức lương Pogba yêu cầu. Trừ khi Barca đem đến thật nhiều tiền, nếu không Pogba sẽ chẳng dễ dàng rời MU. Barca vẫn tiếp tục theo dõi xem thái độ của Pogba và mức phí nửa đỏ thành Manchester muốn có", chuyên gia xứ bò tót chia sẻ.

Trước đó, tờ Mirror tiết lộ Barca tiếp tục âm mưu cuỗm mất tiền vệ người Pháp. Điều quan trọng, lần này, đương kim vô địch La Liga sẽ đích thân ra mặt và công khai theo đuổi tuyển thủ 25 tuổi. Cụ thể, Ban lãnh đạo đội bóng Catalan sẽ cử người đại diện trực tiếp dự khán cũng như theo dõi màn trình diễn của Pogba qua từng trận đấu cho đến hết mùa giải.',
                'image' => 'pog-0939.jpg',
                'views' => 0,
                'categories_id' => 3,
                'user_id' => 7,
                'Breaking_news' => 0,
                'created_at' => '2018-10-13 19:26:45',
                'updated_at' => '2018-09-24 19:29:59',
            ),
            31 => 
            array (
                'id' => 40,
                'title' => 'Tân binh nhận thẻ đỏ, Barcelona toát \'mồ hôi hột\' tại Camp Nou',
                'summary' => 'Tưởng chừng như sẽ dễ dàng có được chiến thắng trước Girona, nhưng một tình huống \'xốc nổi\' của Lenglet đã khiến Barca gặp vô vàn khó khăn.',
                'body' => 'Bước vào trận derby xứ Catalunya, HLV Ernesto Valverde đã quyết định xoay vòng cầu thủ bởi lịch thi đấu dày đặc mà Barcelona đang trải qua. So với cuộc chiến giữa tuần trước PSV, chỉ bộ 3 trên hàng công Dembele, Suarez, Messi được giữ lại. Tuyến giữa, Arthur cùng Vidal có lần đầu tiên đá chính cho Barca trong mùa giải chính thức. Phía dưới, Lenglet và Semedo thay thế cho Umtiti và Sergi Roberto.

Với lợi thế sân nhà, Barcelona ngay lập tức tràn lên phần sân Girona sau tiếng còi khai cuộc tạo nên sức ép mãnh liệt. Phút thứ 12, cơ hội nguy hiểm đầu tiên xuất hiện với Barca. Nhận bóng từ đồng đội, Messi đi bóng vượt qua 3 cầu thủ Girona trước khi tung cú dứt chéo góc hiểm hóc. Bóng vượt khỏi tầm với thủ môn Bono nhưng lại đi chệch cột dọc trong gang tấc.

Dù vậy, Messi cũng không cần phải đợi quá lâu để được ăn mừng bàn mở tỉ số. Phút 19, Semedo cùng Vidal phối hợp ăn ý bên cánh phải, tiền vệ Chile căng ngang vào trong cho Messi. Thủ quân Barca \'nhanh như cắt\' đệm bóng cần thành tung lưới Girona.

Đang nắm giữ hoàn toàn thế trận sau bàn thắng dẫn trước, tai họa bỗng ập xuống đầu Barca bởi một tình huống \'xốc nổi\' của tân binh Lenglet. Trong tình huống truy cản một cầu thủ Girona, Lenglet lại \'ngứa tay\' tung cùi chỏ vào mặt đối thủ. Đây là tình huống hoàn toàn cố ý của Lenglet, nhờ VAR trợ giúp, trọng tài đã quyết định rút thẻ đỏ trực tiếp đuổi trung vệ Barca khỏi sân, đồng hồ khi đó điểm phút 35.


Thi đấu hơn người, Girona liền tận dụng cơ hội dâng lên tìm bàn gỡ hòa và họ đã có thành quả ở phút cuối cùng hiệp một. Girona tạt bóng vào vòng cấm, Gerard Pique xử lý bất cẩn để bóng đến chân Christian Stuani. Số 7 đội khách nhanh chóng chớp thời cơ tung chân hạ gục thủ môn Ter Stegen. Hiệp một kết thúc với tỉ số hòa 1-1.

Ngay đầu hiệp hai, Barcelona đã phải nhận thêm cú sốc đến từ Girona. Phút 51, Pique tiếp tục mắc sai lầm, anh không thể đua tốc độ cùng Portu sau một pha chọc khe dù xuất phát trước. Số 9 Girona thoát xuống đối mặt thủ môn nhưng Ter Stegen đã xuất sắc cản phá cú dứt điểm. Dù vậy, ở pha đá bồi sau đó của Stuani, không có cơ hội chủ thủ thành người Đức. Girona vươn lên dẫn trước ở trận derby.

Đây đã có thể là một đêm ác mộng dành cho Pique nếu Barcelona thất bại. Tuy nhiên, với nỗ lực chuộc tội, trung vệ TBN đã không để điều đó xảy ra. Phút 63, trong một tình huống lên tham gia tấn công, Pique có pha đánh đầu cận thành san bằng tỉ số 2-2.

Những phút còn lại, đội chủ nhà điên cường tấn công để giành trọn 3 điểm. Dù vậy, 11 người của Girona đã không cho 10 người Barcelona có được điều hoàn thành mong muốn.

Để Girona cầm chân trong trận derby, Barcelona giờ đây đã bị Real bắt kịp. Cả hai đội có cùng 13 điểm sau 5 trận. Đây cũng là kết quả hòa đầu tiên sau chuỗi trận toàn thắng trên mọi đấu trường kể từ đầu mùa của Barca.

Chung cuộc: Barcelona 2-2 Girona',
                'image' => '1038578908-612x612-0457.jpg',
                'views' => 0,
                'categories_id' => 3,
                'user_id' => 7,
                'Breaking_news' => 0,
                'created_at' => '2018-10-13 19:26:46',
                'updated_at' => '2018-09-24 19:29:59',
            ),
            32 => 
            array (
                'id' => 41,
                'title' => 'Sau tất cả, Chủ tịch Perez bất ngờ gửi lời cuối cùng đến Zidane và Ronaldo',
                'summary' => 'Mới đây, Chủ tịch Real, Florentino Perez đã có những chia sẻ về HLV Zidane và siêu sao Cristiano Ronaldo.',
                'body' => 'Nhắc tới Real thì không bao giờ hết đề tài để bàn bạc. Dù thời gian đã lâu, câu chuyện về Ronaldo hay Zidane vẫn khiến cổ động viên đội bóng Hoàng gia đau đáu. Với những cống hiến suốt trong nhiều năm, cả 2 trở thành một phần kí ức đẹp đẽ ở thành Madrid.

Vừa qua, Chủ tịch Perez đã chia sẻ lý do để siêu sao người Bồ Đào Nha ra đi. Theo đó, ông tiết lộ Ban lãnh đạo đội nhà chỉ đáp ứng yêu cầu của chân sút số 7. Mới đây, người đứng đầu Kền Kền trắng tiếp tục có những phát biểu về CR7 và cả HLV Zidane. 


"Bố già" không ngần ngại bày tỏ sự biết ơn, sự tôn trọng với những gì Ronaldo cùng Zizou đã đóng góp cho CLB. "Ronaldo chính là người kế thừa xứng đáng của Alfredo Di Stéfano. Trong suốt 9 năm khoác áo Real Madrid, cậu ấy đã tạo nên những cột mốc vinh quang cho cả bản thân lẫn đội nhà. Sự nghiệp lẫy lừng của cậu ấy sẽ được truyền từ đời này sang đời khác. Cậu ấy sẽ là tấm gương tốt nhất cho những ngôi sao khác noi theo. Thật lòng, cảm ơn cậu rất nhiều, Cristiano", Perez phát biểu.

Về phía chiến lược gia người Pháp, ông chủ "Los Blancos" gọi Zizou là lịch sử của CLB. "Một trong những thuyền trưởng vĩ đại nhất Real chính là Zidane. Cậu ấy đã đưa đội nhà 3 lần liên tiếp bước lên ngôi vương ở Champions League và giành hết mọi danh hiệu danh giá. Zidane chính là huyền thoại và một phần lịch sử của Real", Perez xúc động cho biết.

Cuối cùng, người đứng đầu đương kim vô địch Champions League gửi đi thông điệp đầy tình nghĩa và đầy ấm áp. "Tôi chỉ có thể nói tôi cùng Real Madrid vô cùng cảm ơn Zidane cũng như Ronaldo. Cả 2 đều biết rằng nơi đây, thành Madrid mãi mãi là mái nhà của họ", "Bố già" chốt lại.

Dù có vô vàn lùm xùm xung quanh mối quan hệ giữa Perez, Zidane và Ronaldo, tuy nhiên, mọi thứ đều đã là câu chuyện quá khứ. Giờ đây, mỗi người đều hài lòng với lựa chọn của bản thân. CR7 trên đất Italy đang dần quen với cuộc sống bên những đồng đội mới.

Zizou đã sẵn sàng để trở lại băng ghế huấn luyện. Trong khi đó, đội bóng Hoàng gia cũng trải qua ngày tháng mới mẻ với muôn vàn thay đổi nhưng hoàn toàn tích cực. Với những phát ngôn trên đây của "Bố già", không còn căng thẳng hay thù hận, chỉ còn lại những kí ức đẹp đẽ của đôi bên.',
                'image' => 'perez-2306.jpg',
                'views' => 0,
                'categories_id' => 3,
                'user_id' => 7,
                'Breaking_news' => 0,
                'created_at' => '2018-10-13 19:26:47',
                'updated_at' => '2018-09-24 19:29:59',
            ),
            33 => 
            array (
                'id' => 42,
                'title' => '\'Đục nước béo cò\', PSG tiếp tục ôm mộng với Barca',
                'summary' => 'Truyền thông nước Pháp vừa cập nhật tin tức liên quan đến kế hoạch chuyển nhượng của PSG.',
                'body' => 'Với tiềm lực tài chính từ các ông chủ Ả Rập, PSG chưa bao giờ là cái tên hết nóng trên thị trường chuyển nhượng. Thế nhưng, mùa hè qua, không chỉ tương lai các trụ cột bị đe dọa, CLB còn liên tục thất bại trong việc chiêu mộ các ngôi sao đình đám.

hải kể đến nhất chính là thương vụ Ivan Rakitic. Đại diện nước Pháp đã đề nghị mức lương gần như gấp đôi ở Barca, 8 triệu euro cho Rakitic. Thậm chí, nếu tiền vệ Barca muốn nâng hoặc thêm điều kiện, đội bóng cũng sẽ cân nhắc đáp ứng. Song, ngôi sao số 4 quyết từ chối. Đây là cái tát đau đớn vào niềm kiêu hãnh cũng như bộ mặt của đội chủ sân "Công viên các Hoàng tử".

Mới đây, truyền thông nước Pháp bất ngờ đưa tin về kế hoạch chuyển nhượng của PSG liên quan đến Ivan Rakitic. Cụ thể, tờ Le10Sport tiết lộ Giám đốc thể thao CLB, Antero Henrique vẫn ôm mộng chèo kéo ngôi sao Croatia vào kỳ chuyển nhượng sắp tới. Đại diện Ligue 1 không tìm được cái tên nào phù hợp hơn với đội nhà ngoài tiền vệ 30 tuổi. 

Điều quan trọng nhất, thông tin trên được đăng tải sau khi Chủ tịch Barcelona, ông Bartomeu lấp lửng về về khả năng gia hạn hợp đồng với ngôi sao 30 tuổi. Ông thẳng thắn cho biết hoàn cảnh hiện tại của đội nhà khó lòng đáp ứng nguyện vọng của Rakitic.

Chưa dừng lại ở đó, vừa qua, tờ Don Balon còn cho hay dù tỏ ra không mấy quan tâm đến phát ngôn của người đứng đầu "Blaugrana", tuy nhiên, Rakitic vẫn có gì đó không cam tâm. Ngôi sao Croatia bắt đầu có sự dao động trong suy nghĩ cũng như có thể sớm cân nhắc việc rời đội bóng Catalan.

Ngoài ra, Ban lãnh đạo đương kim vô địch nước Pháp còn sẵn sàng tham gia cuộc đua tranh giành chữ ký ngôi sao trẻ Ajax, Frenkie de Jong. Lý do khiến PSG phải gấp rút lên danh sách cho kỳ chuyển nhượng là vì tương lai mập mờ của Rabiot. Với những hỗn loạn gần đây, thượng tầng đội nhà có dấu hiệu buông bỏ và sớm chấp nhận viễn cảnh mất đi trụ cột quan trọng.

Đại diện Ligue sẽ phải cạnh tranh khốc liệt với Barca, Real, Tottenham, Chelsea lẫn Manchester United nếu muốn sở hữu De Jong. Phòng trừ trường hợp xấu nhất xảy ra, Giám đốc cũng lên kế hoạch B gồm Milinkovic-Savic (Lazio), N\'Golo Kanté (Chelsea) và Stanislav Lobotka (Celtic).',
                'image' => 'ivan-rakitic-683026-1824.jpg',
                'views' => 0,
                'categories_id' => 3,
                'user_id' => 7,
                'Breaking_news' => 0,
                'created_at' => '2018-10-13 19:26:48',
                'updated_at' => '2018-09-24 19:29:59',
            ),
            34 => 
            array (
                'id' => 43,
                'title' => 'Khi Cristiano Ronaldo trở thành \'con rối\' trong cuộc chiến thị trường',
                'summary' => 'Thành tích của Cristiano Ronaldo vẫn chưa thể làm các fan hài lòng nhưng với các nhà tài phiệt thì họ thắng lớn từ lâu rồi.',
                'body' => 'Cristiano Ronaldo đến Juventus thật sự là một bất ngờ với các CĐV. Công bằng mà nói 3 bàn thắng ở Serie A của anh hiện tại vẫn chưa thể làm các tifosi hài lòng. Họ kỳ vọng CR7 phải hơn thế. Nhưng bỏ qua các vấn đề chuyên môn về bóng đá thì thương hiệu của siêu sao người Bồ Đào Nha là đòn bẩy kinh tế vô cùng lớn.
Juventus bỏ tiền tấn để có được Ronaldo từ Real Madrid nhưng họ chẳng lo chuyện lỗ vì thương hiệu của CR7 sẽ mau chóng giúp CLB hoàn vốn. Nhưng đâu chỉ có Juve muốn làm giàu từ Ronaldo. Hiện tại nếu xét về mặt lợi ích kinh tế của các nhãn hàng hợp tác với Juve thì họ đang hả hê vì thương vụ này bất chấp CĐV lo ngại.


Các thương hiệu đang tài trợ cho Juve như hãng xe Fiat Chrysler Automobile (áo đấu ghi tên Jeep), Adidas, Allianz và cả Samsung cũng lên hương nhờ CR7. Việc Ronaldo đến Juve là cách để các nhãn hàng tranh giành thị phần ở châu Âu. Với Adidas thì họ đã tài trợ từ khi CR7 ở Real nên sẽ chẳng thay đổi nhiều, nhưng các hãng còn lại sẽ có lợi rất lớn.

Thứ nhất, xét đến hãng xe Fiat Chrysler Automobile, từ lâu họ đã hoạt động mạnh mẽ ở thị trường Mỹ rồi nên cuộc bùng nổ ở châu Âu sẽ là mục tiêu vàng. Eric Smallwood, chủ tịch Apex Marketing Group thì cho đây là một khoản lợi nhuận lớn so với 20 triệu USD mà Fiat tài trợ hàng năm cho Juventus, theo trang Sports Pro.

Chỉ riêng thương hiệu xe Jeep được in trên áo đấu của Juve thì CEO của hãng, ông Sergio Marchionne, muốn đẩy con số này lên đến 3,3 triệu vào năm 2022. Muốn hoàn thành mục tiêu này nhanh thì họ cần có một cú hích trong thương hiệu của CR7 đẩy thật nhanh.

Theo Chris Chaney, phó chủ tịch công ty Strategic Vision thì: "Sự tự do và phiêu lưu, sự phóng khoáng mà Jeep đại diện, nó thu hút tất cả mọi người, nhưng nó đặc biệt hấp dẫn với những khách mua xe mới thuộc khu vực các nước nói tiếng Bồ Đào Nha.”

Thứ hai là nhãn hàng Samsung, họ đang rất cần thị trường châu Âu. Theo báo cáo tài chính của các hãng smartphone tại châu Âu thì doanh số sụt giảm đến 6,3% ở quý 1 năm 2018 so với cùng kỳ năm trước. 

Samsung vẫn duy trì vị trí số 1, bán hơn 15 triệu máy, nhưng giảm 15% so với năm ngoái. Để duy trì vị trí số 1 của họ thì rất cần có một cú hích và dĩ nhiên hiệu ứng Ronaldo cũng sẽ giải được bài toán này phần nào. 

Nhìn chung, thị trường châu Âu là mục tiêu duy nhất để những đại gia muốn có được từ thương vụ Ronaldo. Vậy nên dù anh thi đấu thế nào thì các nhãn hàng đã có được thắng lợi ban đầu rồi. ',
                'image' => 'cristiano-ronaldo-juventus-salary-681x454-1138.jpg',
                'views' => 0,
                'categories_id' => 4,
                'user_id' => 7,
                'Breaking_news' => 1,
                'created_at' => '2018-10-13 19:26:49',
                'updated_at' => '2018-09-24 19:38:53',
            ),
            35 => 
            array (
                'id' => 44,
                'title' => 'Ronaldo nhận đặc ân, fan Juventus giận sôi máu',
                'summary' => 'Tuy thành tích của Cristiano Ronaldo tại Juventus đang được cải thiện qua từng ngày, nhưng điều đó vẫn còn vài điểm khiến các CĐV thành Turin không hài lòng.',
                'body' => 'Sau khi từ chối lên tuyển trong loạt trận quốc tế hồi đầu tháng này để tập trung toàn bộ thời gian cho Juventus, thành tích của CR7 đã bắt đầu có những dấu hiểu chuyển biến tích cực rất rõ trong các trận đấu gần đây.
Sau khi ghi cú đúp vào lưới Sassuolo, đêm qua ngôi sao người Bồ Đào Nha tiếp tục đóng góp thêm một pha lập công để mang về thắng lợi 2-0 cho Juventus trước Frosinone tại vòng 5 Serie A. Với kết quả này, các nhà đương kim vô địch của giải đấu vẫn đang là đội bóng duy nhất toàn thắng trong mùa giải năm nay.

Mặc dù vậy, có một điều ở Ronaldo vẫn khiến không ít CĐV khó tính cảm thấy không thật sự hài lòng, đó chính là việc anh đang bắt đầu nhận luôn trách nhiệm đá phạt của những chuyên gia sút phạt như Pjanic hay Dybala.',
                'image' => '3a_1-1044.jpg',
                'views' => 0,
                'categories_id' => 4,
                'user_id' => 7,
                'Breaking_news' => 1,
                'created_at' => '2018-10-13 19:26:51',
                'updated_at' => '2018-09-24 19:38:53',
            ),
            36 => 
            array (
                'id' => 45,
                'title' => '5 điểm nhấn Frosinone 0-2 Juventus: Bức tường màu vàng và đẳng cấp siêu sao',
                'summary' => 'Bianconeri đã phải đối mặt một đối thủ ngoan cường, nhưng vẫn giải quyết thành công bởi những cái tên chất lượng trong đội hình.',
                'body' => 'Đẳng cấp của CR7 là bất biến

Công bằng mà nói, Cristiano Ronaldo không thật sự có một trận đấu hoàn hảo. Tính đến trước phút 81, CR7 đã bỏ lỡ ít nhất 4 cơ hội và chắc chắn sẽ là tâm điểm chỉ trích sau trận nếu Juventus mất điểm.

Dù vậy, như rất nhiều lần trong quá khứ, áp lực bủa vây có thể nghiền nát bất kỳ cái tên nào lại hoàn toàn vô dụng trước Ronaldo. Khi Bianconeri cần anh nhất, CR7 vẫn hoàn tất nhiệm vụ tối thượng: ghi bàn định đoạt kết cục.

Một tình huống chọn vị trí khôn ngoan và chớp thời cơ nhạy bén là quá đủ để Ronaldo biến tất cả thất vọng trước đó lùi sâu vào dĩ vãng. Thực tế cho thấy Frosinone đã hoàn toàn suy sụp tinh thần sau bàn mở tỷ số của CR7.

Thử nghiệm bất thành

Rodrigo Bentancur, Juan Cuadrado và Daniele Rugani là 3 thay đổi đáng chú ý trong đội hình xuất phát của Juve trận này. Mặc dù vậy, bỏ qua Rugani không phải hoạt động quá nhiều bởi Frosinone lùi sâu phòng ngự, 2 cái tên còn lại cũng rất nhạt nhòa.

Bentancur biến mất trong 56 phút góp mặt trên sân, còn Cuadrado chỉ khiến người ta đặt dấu hỏi vì sao Max Allegri gượng ép anh đá trái sở trường và bỏ qua Joao Cancelo, một hậu vệ phải đích thực với số lần tạo cơ hội nhiều nhất Serie A tính đến trước Vòng 5.

Thay đổi bước ngoặt

Quyết định tung Federico Bernardeschi vào sân đầu hiệp hai của Allegri là cột mốc biến chuyển thế trận của Juve. Có sự biến ảo của Số 33, Bianconeri rũ bỏ vẻ bế tắc và trở nên sắc sảo hơn hẳn. 
Phút 59, lẽ ra Bernardeschi đã có một đường kiến tạo, nếu Ronaldo không phung phí pha nhả bóng khôn ngoan trong vòng cấm của anh. Dù vậy, Bernardeschi vẫn kịp ghi dấu ấn đậm nét bằng pha xử lý đẳng cấp, ấn định thắng lợi 2-0 cho đội nhà ở những phút bù giờ.

Bức tường màu vàng Frosinone

Biết mình biết ta, HLV Moreno Longo đã bố trí một đội hình lùi thấp với 8 bóng áo vàng án ngữ thường trực ở phạm vi 25-35 mét trước khung thành Sportiello. Tập trung và hiệu quả, sự lăn xả giúp hàng phòng ngự đội chủ nhà liên tiếp đẩy lùi các đợt vây hãm của đối phương.

Tiếc cho Frosinone, bao công phu trong phần lớn thời gian trận đấu đã đổ vỡ chỉ vì một khoảnh khắc lóe sáng cá nhân phía Bianconeri. 

Dybala chìm đắm trong bóng tối

Trận thứ 2 liên tiếp đá chính trở lại tại Serie A, đóng góp của Paulo Dybala vẫn là con số không tròn trĩnh. Không ai còn nhận ra một sát thủ từng làm mưa làm gió với 22 bàn mùa trước. Nghiêm trọng hơn, Dybala khó lòng giữ được vị trí thời gian tới trước sự nổi lên mạnh mẽ của Bernardeschi.',
                'image' => '12-0542.jpg',
                'views' => 0,
                'categories_id' => 4,
                'user_id' => 7,
                'Breaking_news' => 1,
                'created_at' => '2018-10-13 19:26:51',
                'updated_at' => '2018-09-24 19:38:53',
            ),
            37 => 
            array (
                'id' => 46,
                'title' => 'Đánh bại tất cả, Barca CHỐT thương vụ Rabiot',
                'summary' => ' Truyền thông Tây Ban Nha vừa cập nhật tin tức nóng liên quan đến thương vụ Rabiot của Barcelona.',
                'body' => 'Tình hình chuyển nhượng của các CLB tiếp tục trở thành đề tài nóng hổi của truyền thông quốc tế. Sau khi phiên chợ hè đóng cửa, tất cả đều chuẩn bị sẵn sàng kế hoạch cho mùa giải sau. Một lần nữa, cái tên Barcelona khiến làng túc cầu nhốn nháo vì thương vụ Adrien Rabiot.

Thời gian qua, diện La Liga liên tục quấy nhiễu nội bộ đương kim vô địch nước Pháp. Hết khiến Chủ tịch Al Khelaifi gần như phát điên vì tương lai của tiền vệ số 25, thì vừa qua tuyển thủ 23 tuổi còn trở mặt, quyết ân đoạn nghĩa tuyệt với PSG.

Chưa kể, vừa qua, tờ Sport.es tiết lộ, Ban lãnh đạo Barca đã gửi thông báo đến ngôi sao 23 tuổi. Gã khổng lồ Catalan lần này không ngần ngại khẳng định Rabiot chính là mục tiêu hàng đầu của đội nhà ở kỳ chuyển nhượng mùa đông.

Mới đây, truyền thông Tây Ban Nha tiếp tục cập nhật tin tức nóng hổi liên quan đến thương vụ trên. Cụ thể, tờ Mundo Deportivo cho hay thượng tầng "Blaugrana" đã ra quyết định cuối cùng với tương lai của tiền vệ người Pháp. Theo đó, bản hợp đồng cùng những thương thảo sẽ kết thúc vào tháng 10 tới đây.

Cũng theo tờ báo Catalan, đương kim vô địch La Liga đã giữ liên lạc trực tiếp với ngôi sao số 25 tuổi suốt thời gian qua và không ngừng tác động đến quyết định của anh. Hôm nay (22/9), phía Barca và Rabiot được cho rằng đã hoàn tất các thỏa thuận cơ bản cho tương lai vào tháng 7 năm sau. Dù chưa chính thông báo, tuy nhiên, đây có thể coi là nền tảng vững chắc cho mối quan hệ của 2 bên. 

Giống như Parisunited.net đưa tin trước đó, nhờ Giám đốc kỹ thuật Eric Abidal, CLB cùng mẹ Rabiot đã đàm phán xong hợp đồng. Tất cả đều sắp xếp ổn thỏa và hiện tại chỉ còn vấn đề thời gian.

Ngoài ra, tờ Mundo Deportivo còn cho rằng HLV Tuchel chính là nguyên nhân dẫn đến tình trạng hỗn loạn ở sân "Công viên các Hoàng tử". Sự ưu ái, tin tưởng quá mức của chiến lược gia người Đức đang làm hư Rabiot. Thay vì cứng rắn, ông lại coi ngôi sao 23 tuổi là trụ cột đội nhà và để anh liên tục được ra sân thi đấu trong đội hình xuất phát. Chính điều đó tạo nên sự coi thường trong cách nhìn nhận của Rabiot và khiến anh không ngừng làm loạn dù Ban lãnh đạo PSG hết sức nhún nhường.',
                'image' => 'adrien-rabiot-1430.jpg',
                'views' => 0,
                'categories_id' => 4,
                'user_id' => 7,
                'Breaking_news' => 1,
                'created_at' => '2018-10-13 19:26:53',
                'updated_at' => '2018-09-24 19:38:53',
            ),
            38 => 
            array (
                'id' => 47,
                'title' => '4 lý do cho thấy Ronaldo sẽ trở thành Vua phá lưới tại Serie A',
                'summary' => 'Siêu sao người Bồ Đào Nha dù đã 33 tuổi nhưng không thể phủ nhận anh vẫn là một trong những tiền đạo hàng đầu trên thế giới vào thời điểm này.',
                'body' => 'Dĩ nhiên, Juventus chấp nhận bỏ ra số tiền 100 triệu bảng để ký hợp đồng với Cristiano Ronaldo, mục đích được hiểu rằng họ muốn giải cơn khát danh hiệu Champions League sau 22 năm mòn mỏi. Nhưng với một người tham vọng như tiền đạo người Bồ Đào Nha, có lẽ anh không chấp nhận bỏ qua việc ghi bàn tại Serie A. Và sau đây là một vài lý do chứng minh CR7 có thể đoạt danh hiệu Vua phá lưới tại Ý mùa này.

1. Ronaldo đã giải toả được sức ép sau khởi đầu chậm chạp

Sau một vài trận tịt ngòi, người ta đã bắt đầu nghi ngờ về khả năng hoà nhập của siêu sao sinh năm 1985. Nhưng ngay lập tức anh đã đáp trả bằng cú đúp vào lưới Sassuolo cách đây một tuần. Dĩ nhiên, hai pha lập công đó đem về 3 điểm tiếp theo cho các nhà ĐKVĐ Serie A.

Đây không phải lần đầu tiên trong sự nghiệp Ronaldo có khởi đầu chậm chạp. Thực tế cho thấy rằng ngay cả khi anh chơi cho Man Utd ở thời điểm sung sức thì bàn thắng chỉ đến sau những bước chạy đà tệ hại đầu mùa giải. Vì lý do đó, 2 bàn thắng cho đến thời điểm này là hoàn toàn bình thường.

2. Ronaldo đang là tiền đạo cắm của Juventus

Kể từ khi thể lực không cho phép anh rê dắt bóng một cách thường xuyên, Ronaldo tiến hoá thành một số 9 đúng nghĩa. Không cần xuất hiện quá nhiều ở các điểm nóng nhưng CR7 luôn sẵn sàng kết liễu đối phương bằng những pha bóng một chạm. Đó là lý do vì sao Gareth Bale nói rằng Real Madrid đoàn kết hơn khi không có Ronaldo.

Bây giờ mọi thứ vẫn không thay đổi, Ronaldo nghiễm nhiên phải là chủ công của Juventus. Anh đơn giản là một sự khác biệt so với Mario Mandzukic hay những cầu thủ tấn công khác của \'Lão bà\'. Vì lẽ đó, việc cạnh tranh với những chân sút hàng đầu tại Serie A là điều hoàn toàn nằm trong tầm tay Ronaldo.

3. Ronaldo đã chứng minh được khả năng săn bàn đáng kinh ngạc

Nếu có bất cứ nghi ngờ nào về Ronaldo thì đó không phải là khả năng đánh hơi bàn thắng. Đội trưởng ĐT Bồ Đào Nha luôn là \'gã sát thủ\' ở bất cứ đâu anh đến. Và người duy nhất mà chúng ta có thể đem ra so sánh ở đây chỉ có thể là Lionel Messi.

Serie A không phải sân chơi quá cao cấp giống như Champions League hay thậm chí là La Liga hoặc Premier League. Vì vây, chẳng có lý do gì ngăn cản Ronaldo trở thành chân sút hàng đầu ở đây cả. 

4. Juventus đang điều chỉnh mọi thứ để giúp Ronaldo toả sáng

Ronaldo từng chơi cạnh những đối tác rất giỏi trong việc \'làm nền\', đó là Carlos Tevez, Wayne Rooney, Karim Benzema... Dù khởi đầu chậm chạp tại Juventus nhưng bây giờ dường như những Douglas Costa hay Juan Cuadrado đã hiểu được phong cách chơi bóng của người đàn anh siêu sao.
Tất cả những cầu thủ khác tại Juventus chưa bao giờ hết ngưỡng mộ tinh thần cầu tiến, sự chuyên nghiệp của Ronaldo. Vì vậy, không khó hiểu nếu như họ sẽ dốc hết sức lực để giúp tiền đạo sinh năm 1985 toả sáng thêm nhiều lần nữa ở mùa giải này.',
                'image' => 'cristiano-ronaldo-mario-mandzukic-juventus_vfopc4evkf1azfocr7lgve9k-1227.jpg',
                'views' => 1,
                'categories_id' => 4,
                'user_id' => 7,
                'Breaking_news' => 1,
                'created_at' => '2018-10-13 19:26:54',
                'updated_at' => '2018-10-01 19:15:21',
            ),
            39 => 
            array (
                'id' => 48,
                'title' => 'Thẻ đỏ ở Mestalla: Quả báo cho Ronaldo?',
                'summary' => 'Mới đây, truyền thông Italy đã có những chia sẻ khó tin về chiếc thẻ đỏ của Ronaldo trong trận đấu với Real Madrid.',
                'body' => 'Champions League vừa đi qua lượt trận đầu tiên đã có không ít chấn động xảy ra. Nếu trên đất Anh, đương kim vô địch Premier League, Manchester City bất ngờ bị đả bại tại sân nhà, thì ở Tây Ban Nha, siêu sao Ronaldo nhận thẻ đỏ chỉ sau 29 phút ra sân.

Ngay lập tức, truyền thông quốc tế cùng làng túc cầu phản ứng vô cùng dữ dội với tình huống đầy tranh cãi của CR7. Hầu hết, tất cả đều đứng về phía chân sút 33 tuổi, đồng thời tỏ ra khó hiểu với quyết định của trọng tài.


Mới đây, khi mọi chuyện vẫn chưa có dấu hiệu lắng xuống, truyền thông Italy tiếp tục có những phát ngôn khó tin về sự kiện trên. Theo đó, báo giới xứ sở mỳ ống cho rằng chiếc thẻ đỏ của Ronaldo như một hệ quả tất yếu của việc rời khỏi đội bóng Hoàng gia.

Cụ thể, trên trang nhất, nhật báo Corriere dello Sport giật tít: "Ronaldo ngay lập tức nhận ra rằng cậu ấy không còn nhận được sự bảo bọc của Real Madrid". Qua đó để chỉ ra một nghịch cảnh mà tiền đạo số 7 đang phải đối diện trong màu áo đại diện Serie A. CR7 đã quen với việc được trọng tài ưu ái vì có Kền Kền trắng bệ đỡ nhưng với Juventus thì không.
Chưa dừng lại ở đó, tờ báo Italy còn nhắc lại hình ảnh Buffon bật khóc hồi tháng 4 vừa qua để khẳng định cuộc sống thật công bằng. Ronaldo đang chịu đựng những gì anh cùng đội bóng cũ đã gây ra cho "Lão bà" tại bán kết Champions League. Thời điểm đó, trong khi Juve đang nắm lợi thế khi dẫn trước 3-0, trọng tài đã thổi phạt đền đầy tranh cãi cho Real, chính CR7 đã thực hiện quả penalty và tiếp tay loại đội bóng Italy khỏi giải đấu.

"Vào tháng 4, Ronaldo đã mặc kệ pha phạm lỗi của Bianconeri để sút thành công quả 11m đầy tranh cãi. Và giờ đây, anh ấy bị đuổi khỏi sân vì 1 tình huống thiếu công bằng. Đó chính là nghịch cảnh của Champions League. Lúc ấy, chẳng ai quên được hình ảnh Buffon khóc tức tưởi và thứ 4 vừa qua, Ronaldo rời Mestalla trong nước mắt. 2 màu áo và 2 sự khác biệt quá lớn", Corriere dello Sport phân tích rõ ràng.

Đúng với những chia sẻ của tờ báo xứ sở mỳ ống, có vẻ như chân sút người Bồ Đào Nha đang chịu quả báo vì những gì đã qua ở Champions League. Dù Ronaldo đã làm tất cả để cắt đứt mọi thứ với Real Madrid, tuy nhiên, mối lương duyên đẹp đẽ kết thúc không trọn vẹn vẫn đang ám ảnh tiền đạo số 7. Trong niềm vui chiến thắng hôm ấy, thứ chân sút 33 tuổi không ngờ nhất chính là việc chuyển đến khoác áo Juve và phải trả nợ cho hành động của mình.',
                'image' => 'cristiano-ronaldo-valencia-juventus-champions-league_19c8xrmixboiu14dq7vaxuf7e8-0550.jpg',
                'views' => 0,
                'categories_id' => 4,
                'user_id' => 7,
                'Breaking_news' => 0,
                'created_at' => '2018-10-13 19:26:55',
                'updated_at' => '2018-09-24 19:38:53',
            ),
            40 => 
            array (
                'id' => 49,
                'title' => 'Có phải kỷ nguyên Hamsik tại Napoli đã đến hồi sụp đổ?',
                'summary' => 'Mới đây tờ Gazzetta dello Sport đã tiết lộ rằng những đóng góp của Marek Hamsik cho Napoli đang ngày càng giảm trong hai mùa giải gần đây.',
                'body' => 'Như đã biết, Hamsik thực sự không chỉ là huyền thoại ở cấp độ ĐTQG với những người dân quê hương mình, mà anh còn là một cầu thủ vĩ đại với các cổ động viên Napoli. Trong quãng thời gian 11 năm kéo dài từ mùa bóng 2007 đến nay, cầu thủ người Slovakia vẫn luôn là đầu tàu dẫn dắt Gli Azzurri vượt qua mọi sóng gió. Qua 503 trận đấu trên mọi đấu trường, anh đã ghi cho mình tổng cộng 120 bàn thắng - con số phải nói là rất ấn tượng với một cầu thủ không phải là tiền đạo, hơn nữa còn thi đấu ở một môi trường bóng đá nổi tiếng với nghệ thuật phòng ngự như Italia. 

Thế nhưng trong hai mùa giải gần nhất, những đóng góp của Hamsik đã giảm đi rất nhiều. Mùa 2016-17, anh có 15 pha lập công. Và con số này chỉ còn 7 ở mùa bóng vừa qua. Theo tờ Gazzetta, với việc tầm ảnh hưởng của cầu thủ mang áo số 17 bị co hẹp đi trông thấy, HLV Carlo Ancelotti buộc lòng phải để Napoli thi đấu với sơ đồ 4-4-2.


Và mặc cho đã cố gắng rất nhiều, thế nhưng có vẻ như tương lai của tiền vệ sinh năm 1987 tại Naples là không mấy sáng sủa, nhất là khi có thông tin cho rằng cựu thuyền trưởng Real muốn Hamsik thi đấu ở vị trí tiền vệ phòng ngự vốn trái với sở trường của ngôi sao này. 

Có lẽ, đã đến lúc anh nên tìm một bến đỗ mới cho sự nghiệp chuẩn bị sang sườn dốc bên kia của mình. ',
                'image' => '_n0y08570-2354.jpg',
                'views' => 0,
                'categories_id' => 4,
                'user_id' => 7,
                'Breaking_news' => 0,
                'created_at' => '2018-10-13 19:26:57',
                'updated_at' => '2018-09-24 19:38:53',
            ),
            41 => 
            array (
                'id' => 50,
                'title' => 'Douglas Costa phải ngồi ngoài một tháng vì chấn thương kép',
                'summary' => ' Juventus xác nhận sẽ mất Douglas Costa trong một tháng vì chấn thương mắt cá chân và tổn thương ở vùng đùi phải.',
                'body' => 'Trong trận đấu với Valencia ở đấu trường Champions League mới đây, Douglas Costa buộc phải rời sân chỉ vài phút sau khi được tung vào từ băng ghế dự bị. 

Trước đó, cầu thủ người Brazil đã phải nhận án phạt cấm thi đấu 4 trận ở đấu trường Serie A sau khi có những hành vi bạo lực và phi thể thao với Federico di Francesco của Sassuolo cuối tuần trước. Án phạt này khiến Costa vắng mặt tại Serie A cho đến cuối tháng 10. Anh sẽ phải ngồi ngoài trong các trận gặp Frosinone, Bologna, Napoli và Udinese.

Sau khi kiểm tra kĩ lưỡng, đội ngũ y tế của Juventus kết luận Douglas Costa bị dính cùng lúc hai chấn thương khá nghiêm trọng đó là bong gân mắt cá chân và tổn thương đùi phải. Theo đó, cầu thủ 28 tuổi sẽ phải nghỉ thi đấu ít nhất một tháng, tức là anh có thể trở lại chơi bóng khi tháng 10 sắp kết thúc và chắc chắn sẽ bỏ lỡ trận đấu với Young Boys vào ngày 2 tháng 10.

Bên cạnh đó, các bác sĩ cũng kết luận người đồng đội Sami Khedira dính chấn thương cơ đùi trái, phải ngồi ngoài khoảng 3 tuần. HLV Max Allegri chắc chắn sẽ phải đau đầu với bài toán nhân sự trong trận gặp Napoli cuối tháng 9 này.',
                'image' => 'costa-e-khedira-out-638x425-2209.jpg',
                'views' => 0,
                'categories_id' => 4,
                'user_id' => 7,
                'Breaking_news' => 0,
                'created_at' => '2018-10-13 19:26:58',
                'updated_at' => '2018-09-24 19:38:53',
            ),
            42 => 
            array (
                'id' => 51,
                'title' => 'James Rodriguez chói sáng, Bayern đẩy Schalke chìm trong khủng hoảng',
                'summary' => 'Tiền vệ James Rodriguez đã có màn trình diễn chói sáng góp vào thắng lợi 2-0 của Bayern Munich trước Schalke 04 trong trận cầu ở vòng 4 Bundesliga.',
                'body' => 'Tiếp Hùm xám tại Veltins-Arena, Schalke khó thể tự tin bởi họ vẫn chưa giành điểm số nào sau 3 vòng đầu. Cũng khá dễ hiểu khi đội chủ nhà để các vị khách lấn át từ những phút đầu. Bàn thắng cũng đến sớm với Bayern Munich. Người ghi bàn là James Rodriguez ở phút thứ 8 với cú đánh đầu từ quả đá phạt góc của Joshua Kimmich.

Các học trò của HLV Niko Kovac tiếp tục duy trì thế trận tốt sau đó. Tuy nhiên, họ thiếu may mắn để có được bàn thắng thứ 2 trước khi hiệp 1 khép lại.

Sau giờ nghỉ, rồi Bayern cũng có bàn thắng nới rộng cách biệt. James mang về cho đội khách quả đá 11m sau pha đi bóng lắt léo. Trên chấm phạt đền, Robert Lewandowski đã dễ dàng đánh bại thủ môn Fahrmann.

Thời gian còn lại, Bayern chủ động thi đấu chậm lại và vẫn giữ được sự chủ động. Trong khi đó, Schalke cố gắng gây sức ép để tìm bàn gỡ song bất thành.

Với thắng lợi 2-0, Bayern tiếp tục ngự trị trên đỉnh Bundesliga với 12 điểm tuyệt đối sau 4 vòng đấu. Trái lại, Schalke vẫn đứng bét bảng khi chưa có nổi điểm nào.',
                'image' => '2-0736.jpg',
                'views' => 0,
                'categories_id' => 5,
                'user_id' => 7,
                'Breaking_news' => 1,
                'created_at' => '2018-10-13 19:27:00',
                'updated_at' => '2018-09-24 19:53:39',
            ),
            43 => 
            array (
                'id' => 52,
                'title' => 'Franck Ribery: "Tôi sẽ chơi bóng đến năm 38 tuổi"',
                'summary' => 'Lão tướng Bayern Munich Franck Ribery tuyên bố sẽ chơi bóng đỉnh cao đến năm 38 tuổi.',
                'body' => 'Franck Ribery gia nhập Bayern Munich vào tháng mùa hè năm 2007, mới đây anh vừa gia hạn hợp đồng cùng nhà ĐKVĐ Bundesliga để gắn bó với sân Allianz Arena tới hết mùa giải 2018-19. Tuy nhiên như thế là chưa đủ với cầu thủ chạy cánh 35 tuổi này.
Ở cuộc chạm trán với VfB Stuttgart vòng 2 vừa qua chân sút người Pháp đã chính thức vượt qua cột mốc 250 trận tại giải đấu cao nhất nước Đức. Nhân dịp này tờ Kicker đã có buổi phỏng vấn với Ribery về cuộc đời cũng như sự nghiệp của anh tại Hùm xám xứ Bavaria.

Tại đây, Ribery cho biết mong muốn chơi bóng đỉnh cao đến năm 38 tuổi nhưng cũng thừa nhận rất khó duy trì việc cày ải từ trận này qua trận khác.

"Tôi muốn chơi đến năm 38 tuổi," Ribery nói với kicker: "Sẽ thật điên rồ khi tôi cứ chơi hết trận này đến trận khác." 

Chân sút của Bayern Munich cho biết HLV Niko Kovac là người có thể giúp anh làm được điều đó bằng cách tính toán khả năng ra sân của anh.

"Ông ấy sẽ đặt tôi ra một bên. Tôi chẳng có vấn đề gì với điều đó cả. Ông ấy biết tôi có thể ra sân bao lâu và lúc nào."

Nói về tân HLV Niko Kovac, Ribery chia sẻ: "Niko có cá tính để làm HLV của một đội bóng lớn."

"Ông ấy có những phẩm chất tuyệt vời. Bạn có thể thấy được điều đó qua cách ông dẫn dắt và nói chuyện với chúng tôi. Ông ấy phân tích tính cách của tất cả các thành viên và có phương pháp ứng xử riêng với từng người. Nó là thứ vô giá."

Trước câu hỏi ngày nào đó nghỉ hưu, Ribery có nghĩ đến việc ở lại Bayern bằng một cương vị khác, lão tướng 35 tuổi khẳng định: "CLB này là gia đình tôi. Tôi có thể quay lại đây."',
                'image' => 'niko-kovac-01-0338.jpg',
                'views' => 0,
                'categories_id' => 5,
                'user_id' => 7,
                'Breaking_news' => 1,
                'created_at' => '2018-10-13 19:27:01',
                'updated_at' => '2018-09-24 19:53:39',
            ),
            44 => 
            array (
                'id' => 53,
                'title' => 'Bị chọc giận, Bayern Munich hạ sát đối thủ không thương tiếc',
                'summary' => ' Bayern Munich là không thể cản ở Bundesliga tới thời điểm này.',
                'body' => 'HLV Niko Kovac đã thực hiện tới 4 sự thay đổi so với vòng đấu trước khi Sile, Rafinha, Tolisso và Grabry ra sân ngay từ đầu thay cho Hummels, Alaba, Goretzka và Ribery trong trận đấu gặp Bayer Leverkusen trên sân nhà Allianz Arena.

Tuy nhiên, Hùm xám đã sớm bị dội gáo nước lạnh khi Bayer Leverkusen sớm có bàn mở tỷ số ngay từ phút thứ 5. Cụ thể, tận dụng thời cơ được hưởng 11m do Thiago để bóng chạm tay trong vòng cấm, Wendell đã sút thành công mở tỷ số cho Bayer Leverkusen.


Bàn thua như khiến Bayern Munich bừng tỉnh và họ đã nhanh chóng xốc lại đội hình. Đẳng cấp của Bayern Munich được thể hiện khi họ sút tung lưới Bayer Leverkusen 2 lần liên tiếp từ phút thứ 10 đến 19 do công lần lượt của Corentin Tolisso và Arjen Robben.

Gần như Bayern Munich không cho đối thủ một cơ hội nào tiếp cận khung thành của thủ thành Manuel Neuer. Suốt cả trận, Bayern Munich giành kiểm soát bóng lên tới 76%. Họ thực hiện số đường chuyền gần gấp 4 lần Bayer Leverkusen (831 so với 259) và tung ra tổng cộng 15 pha dứt điểm so với 3 của Bayer Leverkusen.

Đáng lý ra Bayern Munich đã có thể sớm giải quyết được Bayer Leverkusen nếu các chân sút của họ chắt chiu cơ hội hơn. Dù vậy, Bayern Munich cũng có được bàn thắng ấn định tỷ số được ghi do công của James Rodriguez với cú đánh đầu chuẩn xác. Trước đó, Bayer Leverkusen chỉ thi đấu với 10 người từ phút 80 bởi Bellarabi dính thẻ đỏ.

Thắng trận, Bayern Munich giành 9 điểm tuyệt đối sau 3 vòng đấu và tiếp tục dẫn đầu BXH Bundesliga. Ngược lại, Leverkusen chưa thể ngăn cơn khủng hoảng khi không có nổi 1 điểm nào sau 3 trận.

Đội hình thi đấu:

Bayern Munich: Neuer, Kimmich, Boateng, Sule, Rafinha (Alaba, 82’), Thiago, Tolisso (James, 42’), Robben, Muller, Gnabry (Javi Martinez, 59’), Lewandowski.

Bayer Leverkusen: Hradecky, Dragovic, Sven Bender, Tah, Jedvaj, Kohr, Lars Bender (Brandt, 27’), Wendell, Bailey (Paulinho, 83’), Volland (Bellarabi, 73’), Havertz.

Bàn thắng

Bayern Munich: Tolisso (10\'), Robben (19\'), James Rodriguez (89\')

Bayer Leverkusen: Wendell (5\', pen)

Thẻ đỏ:

Bayer Leverkusen: Bellarabi (80\')',
                'image' => 'as-0034.jpg',
                'views' => 1,
                'categories_id' => 5,
                'user_id' => 7,
                'Breaking_news' => 1,
                'created_at' => '2018-10-13 19:27:02',
                'updated_at' => '2018-10-01 19:15:24',
            ),
            45 => 
            array (
                'id' => 54,
                'title' => 'Thomas Mueller đáp trả những phê phán: Tôi còn đủ phong độ',
                'summary' => 'Hai tháng sau thất bại của tuyển Đức ở Nga cũng như đón nhận những chỉ trích về phong độ gần đây, Thomas Mueller đã lên tiếng khi trả lời phỏng vấn trên Sportbild.',
                'body' => 'Bài phỏng vấn do phóng viên Christian Falk thực hiện và được ra mắt bạn đọc đúng dịp sinh nhật anh lần thứ 29 trên Tạp chí Sportbild số 37 phiên bản toàn châu Âu.

* Mueller, ở Bundesliga hiện nay với hai bàn thắng, anh đang là chân sút Đức có phong độ nhất. Những bàn thắng này quan trọng như thế nào đối với anh sau một mùa Hè thất vọng?

Mueller: Sau World Cup, chúng tôi đã lật từng hòn đá lên để phân tích đến chi tiết, quan trọng hơn nữa đối với tôi, rằng chúng tôi đã có một khởi đầu rất tốt ở Bundesliga. Tất nhiên, tôi đã phải chịu rất nhiều phê phán, và đây là cơ hội để chỉ ra rằng tôi vẫn còn đủ phong độ.

* Khác với đội tuyển, ở Bayern anh có thể chơi ở vị trí trung tâm sau mũi nhọn và nó đã có tác động như thế nào lên thành tích của anh?

Mueller: Tôi có những điểm mạnh và điểm yếu rất rõ ràng. Nếu như tôi có thể chơi núp sau cầu thủ trung phong và dùng tốc độ di chuyển sâu vào vòng cấm là lúc tôi có thể phát huy tối đa thế mạnh của mình. Tôi có khả năng di chuyển nhiều, đó là điều cần thiết hiện nay. Chính vì thế, đây là vị trí tôi yêu thích nhất.

* Anh có thấy vui khi huấn luyện viên Kovac cũng nhận ra điều này và ấn định trong nội bộ, rằng anh sẽ thi đấu ở đó không?

Mueller: Trận đầu tiên đã chứng tỏ một điều rằng không những huấn luyện viên nhận ra điều đó mà tôi thi đấu cũng tốt hơn. Sự vắng mặt của đồng đội nhiều khi cũng làm cho tôi phải ra đá cánh. Khi cần, tôi cũng có thể chơi ở đó nhưng trung tâm là nơi tôi thấy dễ chịu nhất.

* Sau khi Mesut Oezil từ giã đội tuyển, vị trí tiền vệ trung tâm bị bỏ trống, thêm nữa Đức cũng đang rất cần một chân sút săn bàn. Liệu đây có phải là một tiền đề để Thomas Mueller sẽ có một phong độ tốt hơn không?

Mueller: Về căn bản, lối chơi của chúng tôi đã thay đổi sau khi không còn Oezil. Trong tương lai, sẽ không có một chiến thuật nhất định nào, mà là sẽ do nhiều cầu thủ chia nhau đảm nhiệm cùng một khu vực. Hàng tiền vệ công của Đức hiện nay có rất nhiều cầu thủ giỏi.

Hai trận gặp Pháp và Peru đã chỉ ra một thực tế rằng, chúng tôi phải thi đấu với mỗi đối thủ bằng một cách khác nhau. Huấn luyện viên đội tuyển muốn biến ảo hơn nữa, chính vì thế mỗi trận ông sẽ đưa vào sân những tuýt cầu thủ khác nhau. Và nếu có một chỗ trống nào đó để lại, nó chỉ cho phép chúng tôi có nhiều phương án hơn thôi - kể cả đối với tôi.

* Loew đã nhiều lần nhấn mạnh, rằng ông sẽ tiếp tục xử dụng bộ khung Neuer, Boateng, Hummels, Kroos và anh nhưng mọi người lại trung tâm của những chỉ trích.

Mueller: Nếu lắng nghe cuộc tranh luận ầm ĩ về thảm bại mùa Hè vừa qua thì nó không đúng lắm với thực tế. Nhìn vào đội hình hiện nay người ta đã không nhận ra rằng, thực ra chỉ còn 5 cầu thủ đã theo đội bóng từ rất lâu. Phần còn lại về cơ bản đã được trẻ hóa và thay đổi rất nhiều. Đồng thời trong khoảng thời gian 10 tuần từ World Cup đến trận ra quân trở lại gặp Pháp và Peru cũng không thể có ngay 10 gương mặt mới mọc ngay từ dưới đất lên được. Nhưng tôi có hiểu, tại sao những câu hỏi lại cứ xoáy vào đó.

* Anh có thấy ngạc nhiên khi nhiều người chóng chán và mau mất tin tưởng ở anh đến như vậy không?

Mueller: Trong bóng đá hiện nay không ai còn tính đến những cống hiến trong quá khứ, huấn luyện viên đã làm đúng khi ông chỉ suy nghĩ về những cầu thủ hiện tại và tương lai có thể giúp được gì. Đối với tôi hay với tất cả những cầu thủ khác cũng vậy: Không ai có mặt trong đội tuyển chỉ vì trong quá khứ anh ta đã giúp đội bóng giành được một danh hiệu nào đó.

* Anh cũng như Neuer, Boateng, Hummels hay Kroos là người đại diện phát ngôn ở đội tuyển. Anh thấy sao khi gần đây Bierhoff kêu gọi hãy trao cơ hội cho những gương mặt trẻ?

Mueller: Chúng tôi có rất nhiều cầu thủ trẻ nhưng nhiều kinh nghiệm. Tôi đã nghĩ đến lứa 95 như Kimmich, Goretzka, Süle hay Ter Stegen, người đã từng vô địch Champions League với Barcelona. Đây là điều quan trọng, khi chúng tôi lắng nghe ý kiens của những cầu thủ trẻ chứ không thể hoàn toàn dựa theo thế hệ già rồi tự ý quyết định tất cả. Tôi hoan nghênh những cầu thủ trẻ khi họ được gia nhập vào đội ngũ này. Và chuyện này hoàn toàn không phụ thuộc vào những trao đổi giữa chúng tôi vẫn thường xuyên diễn ra.

* Các anh có bàn tới việc đội bóng bị chia phe cánh không?

Mueller: Có, chúng tôi có nói tới. Nhưng chúng tôi cũng hiểu được rằng: Mỗi cầu thủ có một cuộc sống riêng và mỗi người theo đuổi một phong cách sống khác nhau. Chúng tôi đã nói rất rõ ràng với nhau về những chuyện này, rằng nó có phải là nguyên nhân chia rẽ và làm ảnh hưởng đén bầu không khí chung hay không. Theo như chúng tôi nhìn nhận thì không, nhưng hình như từ ngoài thì người ta lại thấy khác. Chúng tôi vẫn tin rằng, chúng tôi có một bầu không khí lành mạnh trong nội bộ, phong cách sống khác nhau không hề ảnh hưởng gì tới điều đó.

* Về đầu tóc của anh, chúng ta phải nói lại chuyện phong cách sống một chút. Bao nhiêu năm nay anh vẫn như vậy trong khi nhiều cầu thủ khác kể cả đi thi đấu World Cup cũng mang cả thợ cắt tóc riêng đi theo để có một kiểu đầu mới.

Mueller: Thật thà mà nói, tự tôi cũng bực lắm khi tóc tôi nhìn cứ như cỏ dại thế này. Thứ Hai này tôi có lịch hẹn đi cắt tóc rồi, đáng ra tôi đã phải đi từ cách đây hai tuần. Tôi cũng không quá chú ý đến đầu tóc mình, những cầu thủ khác thì có thể nhiều hơn chút - thế cũng ok.

* Anh đúng là "Khoai Tây" (*), như cách người ta gọi những cầu thủ người Đức trong đội tuyển?

Mueller: Tôi thấy những từ như "Khoai Tây" hay "Thổ dân mọi" người ta đã làm quá nó lên. Tôi không nhận thấy thế. Hồi còn Lukas Podolsky anh ấy thường hay có những câu như vậy, anh ấy như cái loa của đội bóng, lúc nào cũng có một biệt danh cho ai đó. Nhưng tất cả chỉ là vui vẻ và thân thiết, chúng tôi không thấy thế là sỉ nhục. Để cho một đội bóng vui vẻ người ta cũng cần những yếu tố như vậy.

* Anh gần đây có phải làm quen với việc, Loew bắt đầu đi tuần phòng vào lúc 12 giờ đêm không?

Mueller: Chúng tôi là những cầu thủ đội tuyển, không phải trẻ con. Nhưng chúng tôi cũng cần những quy định rõ ràng - như tất cả mọi người thôi. Tôi thấy đó là chuyện bình thường khi 12 giờ đêm phải tắt đèn. Không ai thấy đó là mới cả, và kể cả không có quy định đó tất cả cũng phải tự giác vì các cầu thủ phải tự chịu trách nhiệm, ngày hôm sau đầy đủ tinh thần để mang lại phong độ cần thiết.
* Toni Kroos gần đây nhắc nhở Leroy Sane. Một mặt anh khen chất lượng cậu ấy tuyệt vời, mặt khác phê phán về tiếng nói cơ thể của cầu thủ tiềm năng nhất Đức này hiện nay. Phải chăng đây là cách làm mới của những cầu thủ trụ cột?

Mueller: Chúng tôi luốn cố gắng gây những ấn tượng tích cực lên những cầu thủ trẻ. Leroy là một tài năng đặc biệt thiên phú vô cùng hiếm hoi ở Đức hiện nay mà lại thể hiện quá ít, không ai có tốc độ như vậy cả. Chính vì thế mà chúng tôi muốn cậu ấy phải trở thành một thứ vũ khí lợi hại trong đội bóng và tỏa sáng khi thi đấu cho đội tuyển. Trận gặp Pháp, dù chỉ ra sân ít phút những cậu ấy đã chứng tỏ điều này. Tôi nghĩ, Leroy cũng đã trưởng thành, tôi tin vào cậu ấy trong tương lai.

* Vì sao Sane lại gây sự chú ý thế?

Mueller: Leroy có những năng khiếu bẩm sinh mà người ta phải chú ý đến. Không phải ngẫu nhiên mà cậu ấy lại được bầu là cầu thủ trẻ xuất sắc nhất Premier League mùa bóng vừa qua. Ở Anh, Leroy đã thể hiện một phóng độ tuyệt vời, ở đội tuyển thì chưa được như vậy, kể cả trước World Cup. Nhưng không phải vì thế mà chất lượng của cậu ấy giảm đi. Nhiệm vụ của chúng tôi là, giúp Leroy có phong độ cao nhất khi thi đấu cho đội tuyển. Đó cũng là đòi hỏi cho tất cả không riêng gì Leroy.

* Loew tuyên bố Joshua Kimmich trong tương lai sẽ chơi ở vị trí số 6. Anh có nghĩ là chuyện đó cũng xảy ra ở Munich không?

Mueller: Tôi nghĩ, Josh ở Bayern vẫn là hậu vệ phải, chúng tôi không có nhiều hậu vệ cánh như tiền vệ.

* Trên đấu trường Champions League, Bayern đã rất có thể gặp những đối thủ khác ở vòng bảng khó nhằn hơn Benfica Lissabon, Ajax Amsterdam và AEK Athen. Nỗi đau khi bị Real loại mùa trước ở trận bán kết vẫn còn trong anh chứ?

Mueller: World Cup mùa Hè vừa qua và cả trận bị Real loại thiếu may mắn sẽ là động lực thúc đẩy chúng tôi, nó sẽ giải phóng năng lượng cho đội bóng. Chúng tôi biết, mùa bóng vừa qua chúng tôi có cơ hội. Chính vì thế, chúng tôi lại bắt đầu một mùa giải với những ý chí bao lâu nay, bên cạnh đó chúng tôi còn có một huấn luyện viên mới, trẻ và tham vọng.

* Hai lần bị Real loại đúng là thiếu may mắn...

Mueller: Kể cả trận tứ kết mùa trước nữa cũng vậy. Sau đó, cả hai lần Real đều đoạt Cup. Chỉ một điều đó thôi cũng chứng tỏ rằng chúng tôi đã rất có thể cũng có cơ hội. Chúng tôi chưa bao giờ rời quá xa điều lớn lao này. Hy vọng năm nay trong khoảng thời gian từ tháng 3-5 chúng tôi có một đội hình đấy đủ. Lúc đó mọi chuyện là rất có thể.',
                'image' => 'thomas-mueller-02-1952.jpg',
                'views' => 0,
                'categories_id' => 5,
                'user_id' => 7,
                'Breaking_news' => 1,
                'created_at' => '2018-10-13 19:27:04',
                'updated_at' => '2018-09-24 19:53:39',
            ),
            46 => 
            array (
                'id' => 56,
                'title' => 'Franck Ribery: "Tôi sẽ chơi bóng đến năm 38 tuổi"',
                'summary' => 'Lão tướng Bayern Munich Franck Ribery tuyên bố sẽ chơi bóng đỉnh cao đến năm 38 tuổi.',
                'body' => 'Franck Ribery gia nhập Bayern Munich vào tháng mùa hè năm 2007, mới đây anh vừa gia hạn hợp đồng cùng nhà ĐKVĐ Bundesliga để gắn bó với sân Allianz Arena tới hết mùa giải 2018-19. Tuy nhiên như thế là chưa đủ với cầu thủ chạy cánh 35 tuổi này.
Ở cuộc chạm trán với VfB Stuttgart vòng 2 vừa qua chân sút người Pháp đã chính thức vượt qua cột mốc 250 trận tại giải đấu cao nhất nước Đức. Nhân dịp này tờ Kicker đã có buổi phỏng vấn với Ribery về cuộc đời cũng như sự nghiệp của anh tại Hùm xám xứ Bavaria.

Tại đây, Ribery cho biết mong muốn chơi bóng đỉnh cao đến năm 38 tuổi nhưng cũng thừa nhận rất khó duy trì việc cày ải từ trận này qua trận khác.

"Tôi muốn chơi đến năm 38 tuổi," Ribery nói với kicker: "Sẽ thật điên rồ khi tôi cứ chơi hết trận này đến trận khác." 

Chân sút của Bayern Munich cho biết HLV Niko Kovac là người có thể giúp anh làm được điều đó bằng cách tính toán khả năng ra sân của anh.

"Ông ấy sẽ đặt tôi ra một bên. Tôi chẳng có vấn đề gì với điều đó cả. Ông ấy biết tôi có thể ra sân bao lâu và lúc nào."

Nói về tân HLV Niko Kovac, Ribery chia sẻ: "Niko có cá tính để làm HLV của một đội bóng lớn."

"Ông ấy có những phẩm chất tuyệt vời. Bạn có thể thấy được điều đó qua cách ông dẫn dắt và nói chuyện với chúng tôi. Ông ấy phân tích tính cách của tất cả các thành viên và có phương pháp ứng xử riêng với từng người. Nó là thứ vô giá."

Trước câu hỏi ngày nào đó nghỉ hưu, Ribery có nghĩ đến việc ở lại Bayern bằng một cương vị khác, lão tướng 35 tuổi khẳng định: "CLB này là gia đình tôi. Tôi có thể quay lại đây."',
                'image' => 'niko-kovac-01-0338.jpg',
                'views' => 0,
                'categories_id' => 5,
                'user_id' => 7,
                'Breaking_news' => 1,
                'created_at' => '2018-10-13 19:27:05',
                'updated_at' => '2018-09-24 19:54:07',
            ),
            47 => 
            array (
                'id' => 59,
                'title' => 'Karius phá vỡ im lặng về sai lầm ở Champions League và lý do rời Liverpool',
                'summary' => 'Thủ thành Loris Karius đã lên tiếng về những khó khăn anh phải đối mặt suốt thời gian qua.',
                'body' => 'Ở trận chung kết Champions League mùa giải vừa qua, Karius mắc 2 sai lầm khó dung thứ, qua đó biếu không cho Real Madrid 2 bàn thắng, đồng thời khiến Liverpool ôm hận. Kể từ thời điểm đó, phong độ của Karius sa sút thảm hại và anh buộc phải chuyển tới khoác áo Besiktas sau sự xuất hiện của Alisson Becker tại sân Anfield.

Chia sẻ với báo giới về màn trình diễn thảm họa trước Real Madrid, Karius thừa nhận: "Tôi vẫn không thể giải thích vì sao tôi mắc sai lầm ở trận chung kết đó. Tôi cần phải lấy lại sự tự tin và quên đi quá khứ."

Về cú giật chỏ của Sergio Ramos, Karius cho hay: "Tôi không biết anh ấy có cố ý hay không. Chỉ có Ramos mới biết được chính xác mình đã làm gì. Tôi cảm thấy hơi choáng và ngã xuống sân nhưng vẫn muốn tiếp tục thi đấu."

Về lý do chia tay Liverpoll, Karius khẳng định: "Tôi không có vấn đề gì với Jurgen Klopp. Chúng tôi có mối quan hệ khá tốt. Không một ai ở Liverpool bảo tôi phải rời đội bóng. Chỉ là tôi đang ở độ tuổi cần được ra sân nhiều hơn. Sau khi Alisson đến, tôi quyết định gia nhập Besiktas."',
                'image' => 'z-2039.jpg',
                'views' => 4,
                'categories_id' => 7,
                'user_id' => 7,
                'Breaking_news' => 1,
                'created_at' => '2018-10-22 16:33:20',
                'updated_at' => '2018-10-29 17:49:56',
            ),
            48 => 
            array (
                'id' => 60,
                'title' => 'Neymar - Ronaldo: Cậu bé dỗi hờn và người đàn ông thép',
                'summary' => 'Nếu như Neymar vừa trải qua trận đấu thảm họa trong màu áo PSG, thì Cristiano Ronaldo còn cay đắng hơn khi trình làng Champions League mùa bóng mới bằng một thẻ đỏ.',
                'body' => 'Loạt trận mở màn Champions League quả là một thời cơ tuyệt vời để những cá nhân lớn trong tập thể như Cristiano Ronaldo, Neymar, Lionel Messi, Paul Pogba ghi điểm trong mắt người hâm mộ.

Nhà báo Henry Winter của The Times từng phân tích thế này: “Khi một giải đấu lớn cỡ Champions League đã đi vào guồng, đa phần CĐV sẽ có xu hướng nhìn vào kết quả của tập thể chứ không còn dành sự chú ý đặc biệt cho cá nhân nào nữa.

Vậy nên, các những cá nhân siêu sao thường chọn những trận đấu đặc biệt như trận mở màn, lượt về bán kết, chung kết để nỗ lực hơn trong việc ghi dấu ấn cá nhân. Nó giống như một hình thức thông báo với thế giới về sự xuất hiện của mình và quan trọng hơn là xác tín tư cách ngôi sao.”

Những áp lực vô hình trên vai Ronaldo, Neymar

Dựa trên phân tích này có thể phần nào lý giải được tâm lý của Neymar và Cristiano Ronaldo - 2 cầu thủ luôn có khát vọng cháy bỏng được thế giới tôn vinh - ở loạt trận mở màn Champions League mùa bóng mới. Họ chịu áp lực (một phần do họ tự tạo ra) phải thể hiện mình khác biệt so với tất cả.

Trong trận đấu giữa PSG và Liverpool, Neymar chơi bóng như thể “phá game”. Phong cách rườm rà, ngôi sao, chậm chạp của anh làm tan nát lối chơi của PSG và có thể coi đây là nguyên nhân trực tiếp dẫn tới thế trận kém cỏi của đại gia Pháp. Đó còn là trận đấu mà chúng ta được chiêm ngưỡng một hình ảnh đầy nghịch lý: Neymar bị James Milner khóa cứng suốt cả trận đấu.

Trong khi, PSG phải chi ra số tiền chưa từng xuất hiện trong lịch sử bóng đá: 222 triệu euro để rước Neymar về sân Công viên các Hoàng tử thì Liverpool có được Milner với giá 0 bảng. Cuộc đối đầu giữa cầu thủ bị Man City đẩy đi như hàng thải và ngôi sao được PSG mang về để thay đổi lịch sử PSG diễn ra đầy mỉa mai, khi Neymar càng cố “làm màu” thì càng bị sự đơn giản của Milner hạ gục.

Chỉ một ngày sau khoảnh khắc Neymar nằm rạp dưới chân ngôi sao 0 bảng Milner, thêm một bi kịch nữa đến với “hội cầu thủ elite” khi Cristiano Ronaldo dính thẻ đỏ trong trận ra mắt người hâm mộ Juventus tại Champions League.

Tạm gạt đi chuyện trọng tài Felix Brych đúng hay sai khi rút thẻ đỏ trực tiếp cho CR7, người hâm mộ có thể cảm nhận rất rõ áp lực phải tự thể hiện bản thân của Ronaldo đã phần nào đó đẩy anh tới những hành động - mà dựa vào đó ông Felix Brych rút thẻ đỏ tặng anh.

Có chút gì thật cay đắng với Ronaldo khi cả 2 lần gần nhất anh bật khóc rời sân, đội bóng của anh đều thắng. Juventus chẳng cần Ronaldo vẫn hạ Valencia 2-0 ngay tại “tổ dơi”. Bồ Đào Nha cũng chẳng cần CR7 trên sân để vô địch EURO 2016. Đối với một cầu thủ có tự tôn cao như Ronaldo thì đây là một nỗi đau.

Khi trẻ con và đàn ông đá bóng

Ronaldo - Neymar, 2 siêu sao đại diện cho 2 thế hệ. Và rồi bánh xe số phận đẩy họ tới cùng bi kịch trong loạt trận mở màn Champions League 2018/19. Cho đến khi có cơ hội được chứng kiến Ronaldo và Neymar cũng phải hứng chịu những áp lực mới thấy huyền thoại và người thường hơn nhau ở bản lĩnh.

Chiếc thẻ đỏ có phần nặng tay mà trọng tài Brych tặng cho Ronaldo khiến anh đổ sụp xuống sân và khóc CR7 uất ức, nhưng anh không sụp đổ. Kết thúc trận đấu, Ronaldo trở lại mặt sân và kéo một số đồng đội đứng dậy, gương mặt vẫn đầy khí thế chia vui với các anh em.

Còn Neymar như một chú bé dỗi hờn, dù thất bại của PSG, anh hoàn toàn xứng đáng chịu một phần trách nhiệm. Neymar từ chối trả lời phỏng vấn và cũng không buồn lắng nghe lời khuyên can của giới chuyên môn về phong cách chơi bóng quá rườm rà của mình. Tôi là số 1, là riêng, là duy nhất. Neymar có lẽ đang nghĩ vậy.

Nhìn lại cả sự nghiệp, cuộc đời Ronaldo chưa bao giờ vắng bóng những trận sóng to, gió lớn. CR7 không ít lần bị dìm xuống đáy, nhưng anh luôn mạnh mẽ ngoi lên trở lại. Thời còn nhỏ, Ronaldo bị bắt nạt vì chất giọng địa phương khó nghe của mình.

Đến khi gia nhập MU, anh bị chê bai đỏm dáng, rườm rà. Thế rồi khi mọi chuyện bắt đầu tốt lên, Ronaldo lại dính vụ scandal nháy mắt sau chiếc thẻ đỏ của Wayne Rooney, khiến anh trở thành kẻ thù của nước Anh.

Sang tới Real, Ronaldo lập tức bị đặt lên cái bập bênh mà đầu bên kia là Messi, cùng những tin đồn về đời tư phức tạp. Nhưng càng dìm, Ronaldo lại vươn lên mạnh mẽ hơn. Cứ sau mỗi cú ngã, chúng ta lại thấy Ronaldo trở lại hoàn thiện hơn, mạnh mẽ hơn trước đó.

Ronaldo chưa bao giờ ngại tuyên chiến với thử thách. Anh đã tung hoành ở cả Premier League, La Liga và tiếp tục chọn môi trường Serie A khắc nghiệt để thách thức giới hạn của bản thân, thay vì chọn một đội bóng Trung Quốc và sống nhàn hạ với mức lương có thể lên tới 1 triệu euro mỗi tuần.

Trong khi đó, Neymar gia nhập PSG vì giấc mơ “thằng chột làm vua xứ mù”. Hàng tuần anh vẫn múa may, rườm rà, thừa thãi trong các trận đấu tại Ligue 1. Tiếc rằng, giải đấu này chưa đủ thách thức để ngăn Neymar lại. Nhưng World Cup và Champions League thì khác. 2 “con ngáo ộp” này đã tặng cho Neymar nhiều cái tát.

Kỳ lạ thay, anh vẫn chưa bừng tỉnh. Đó là sự khác biệt cơ bản giữa đàn ông và trẻ con đá bóng, giữa một cầu thủ vĩ đại và một tài năng khó lớn.',
                'image' => 'rrn-02-1739.jpg',
                'views' => 0,
                'categories_id' => 7,
                'user_id' => 7,
                'Breaking_news' => 1,
                'created_at' => '2018-10-13 19:27:08',
                'updated_at' => '2018-09-24 20:00:53',
            ),
            49 => 
            array (
                'id' => 61,
                'title' => 'Chỉ một cầu thủ ở cùng đẳng cấp với Lionel Messi',
                'summary' => ' Có lẽ sự tranh cãi về việc Mo Salah hay Griezmann đang ở chung đẳng cấp với siêu sao người Argentina nên dừng lại ở đây.',
                'body' => 'UEFA Champions League đã trở lại và chúng ta được chứng kiến cuộc gặp gỡ đỉnh cao giữa Liverpool và PSG tại Anfield, nơi mà đội chủ nhà chỉ có thể kết liễu gã nhà giàu đến từ Ligue 1 bằng bàn thắng muộn màng của \'độc nhãn tướng quân\' Roberto Firmino.

Trong pha ăn mừng cuồng nhiệt của huấn luyện viên Jurgen Klopp, người ta nhìn thấy Mohamed Salah trút giận lên chai nước. Đương nhiên, hành động đó ngay lập tức được lan truyền trên khắp các mặt báo và thực tế thì nó phải như vậy.

Trong cùng một tuần lễ, tiền đạo Antoine Griezmann tuyên bố rằng anh đang ngồi \'chung mâm\' với Lionel Messi và Cristiano Ronaldo. Một sự đáp trả mạnh mẽ những câu nói của Sergio Ramos khi trung vệ này có vẻ giống với Andres Iniesta hay Xavi - những người có đầy đủ các danh hiệu nhưng không thể giành quả bóng vàng.

Cả Salah và Griezmann đều cần phải rời vị trí của họ... nơi mà ánh sáng danh vọng cá nhân không được tìm thấy, và họ cũng phải nhận ra bộ đôi huyền thoại Rô-Si đã thống trị bóng đá trong hơn một thập kỷ qua. Cuộc cạnh tranh này thú vị đến nỗi mà chưa bao giờ lịch sử từng được chứng kiến trước đây.

Messi là hiện thân của sự hoàn hảo mà có lẽ chỉ Michael Jordan (huyền thoại bóng rổ) mới sở hữu. Tuy nhiên, chúng ta cũng không cảm thấy phiền khi có những cuộc thảo luận cho rằng Ronaldo xứng đáng được đứng cạnh tiền đạo người Argentina.

Lý do được đưa ra là vì từ góc độ hiệu quả, rõ ràng tân binh của Juventus là người duy nhất có thể theo kịp với GOAT của đất nước vũ điệu Tango. Tỷ lệ chiến thắng của Ronaldo là quá tuyệt vời và đáng để bất cứ ai ngưỡng mộ. Anh nuôi dưỡng sự cạnh tranh liên tục trong nhiều năm, dù có lúc Messi 4 lần liên tiếp đứng trên đỉnh thế giới.

Siêu sao sinh năm 1985 đã đến với Serie A, nghĩa là anh cũng không còn ở lại Tây Ban Nha để cạnh tranh trực tiếp với Messi. Nhưng sân chơi Champions League vẫn là điều gì đó tuyệt hảo để cho họ thoả sức vùng vẫy giống như 223 bàn thắng của cả hai ở giải đấu danh giá này.

Dĩ nhiên, Ronaldo bây giờ đã 33 tuổi và có lẽ anh không còn nhiều thời gian cạnh tranh với người đồng nghiệp trẻ trung hơn, nhưng thực tế mà nói, chẳng có ai ngoài CR7 có thể ngồi chung mâm với Messi cả. Đó là sự thật hiển nhiên!',
                'image' => 'skysports-cristiano-ronaldo-lionel-messi-la-liga-fixtures_4007124-1043.jpg',
                'views' => 0,
                'categories_id' => 7,
                'user_id' => 7,
                'Breaking_news' => 1,
                'created_at' => '2018-10-13 19:27:09',
                'updated_at' => '2018-09-24 20:00:53',
            ),
            50 => 
            array (
                'id' => 62,
                'title' => '\'Ronaldo bị thẻ đỏ vì trọng tài thích tưởng tượng\'',
                'summary' => 'HLV đội tuyển Trung Quốc, ông Marcello Lippi lên tiếng đòi lại công bằng cho Cristiano Ronaldo sau tấm thẻ đỏ ở Champions League.',
                'body' => 'Ở trận vòng bảng Champions League 2018-19 giữa Valencia và Juventus, Cristiano Ronaldo bất ngờ nhận thẻ đỏ sau tình huống va chạm với Jieson Mirillo. Đưa ra quan điểm, HLV Lippi khẳng định hành động của ngôi sao người Bồ Đào Nha chưa đủ để trọng tài chính Felix Brych ra án phạt cao nhất.

“Ronaldo nhận thẻ đỏ từ một người thích tưởng tượng. Bạn không thể mạo hiểm ra án phạt điên rồ trong tình huống chẳng có gì nghiêm trọng như vậy. Không chỉ một, Ronaldo có thể bị cấm thi đấu đến hai trận,” HLV Lippi chỉ trích trọng tài Brych trên Goal.

Huấn luyện viên giúp đội tuyển Italy vô địch World Cup 2006 tiếp lời: “Bây giờ, UEFA nên đưa ra tuyên bố họ hoàn toàn sai. Không thể quay đầu vì Ronaldo chắc chắn bị treo giò một trận. Nhưng sẽ rất vô lý nếu UEFA tăng án phạt cho CR7. Ngoài ra, UEFA nên đưa ngay công nghệ VAR vào các trận đấu ở Champions League.”

Suốt sự nghiệp cầm quân lừng lẫy của mình, HLV Lippi từng giữ cương vị thuyền trưởng ở Juventus, giai đoạn 1994-1996 và 2001-2004. Ông tin rằng với sự góp mặt của Ronaldo ở mùa này, “Lão phu nhân” sẽ cạnh tranh sòng phẳng danh hiệu vô địch Champions League.

“Từ vài năm trước, Juventus đã nằm trong top các CLB mạnh nhất châu Âu. Bây giờ, họ có thể tranh chức vô địch với Real Madrid, Barcelona, Bayern Munich, PSG và Manchester United. Hãy nhìn giọt nước mắt của Ronaldo, cậu ấy thật sự khao khát giúp Juventus làm nên chuyện ở sân chơi này,” HLV Lippi khẳng định.

Hiện ban kỷ luật UEFA tiến hành mổ băng tình huống dẫn đến thẻ đỏ của Ronaldo ở trận Valencia. Trong trường hợp bị kết vào lỗi hành vi nghiêm trọng, Ronaldo sẽ bị treo giò thêm một hoặc hai trận. Điều này đồng nghĩa với việc CR7 không còn cơ hội chạm trán MU ở Old Trafford.

Trước khi Ronaldo nhận thẻ đỏ, một cầu thủ khác trong đội hình Juventus khiến làng túc cầu dậy sóng là Douglas Costa. Theo đó, tiền vệ người Brazil đã nhổ nước bọt, húc đầu và đánh nguội Di Francesco (Sussuolo), nên bị Serie A treo giò 4 trận. HLV Lippi cho rằng Costa xứng đáng bị trừng trị.

“Costa đã sai ở tình huống đó, án phạt đưa ra và cậu ấy không còn cách nào khác ngoài việc im lặng. Trong bất kỳ hoàn cảnh nào, chúng ta phải biết cách kiềm chế bản thân,” HLV Lippi kết luận.',
                'image' => 'ronaldo-the-do-02-0000.jpg',
                'views' => 0,
                'categories_id' => 7,
                'user_id' => 7,
                'Breaking_news' => 1,
                'created_at' => '2018-10-13 19:27:10',
                'updated_at' => '2018-09-24 20:00:53',
            ),
            51 => 
            array (
                'id' => 63,
                'title' => 'Lionel Messi - Sát thủ trước chấm đá phạt',
                'summary' => 'Sự nguy hiểm của Lionel Messi đang được cấp tiến theo thời gian. Bây giờ, ngay cả khi đối mặt với hàng rào, số 10 vẫn có giải pháp hữu hiệu.
',
                'body' => 'Sự tinh quái của Leo khiến HLV Mark Van Bommel của PSV phải cẩn trọng. Ngay cả trong những tình huống đối mặt với sút phạt, hàng rào của đội bóng Hà Lan dựng lên cũng được sắp xếp kỹ lưỡng. Họ bố trí thêm một cầu thủ quỳ gối, trốn sau hàng rào để đề phòng nguy cơ Messi đá chìm

Theo Marca, Carlos đã ghi 25 bàn từ các tình huống sút phạt. Thống kê này của Pirlo và Ronaldo lần lượt là 43 và 56. David Beckham và Ronaldinho đã ghi 65 và 66 bàn từ chấm cố định.

PSV cẩn thận không bao giờ thừa. Cách đây 1 tháng, Leo vừa ghi bàn vào lưới Alaves ở giải La Liga bằng cú đá phạt chìm. Chiến thuật của đội bóng Hà Lan rất tốt, nhưng Messi lại quá xuất sắc. Anh không phạm bất kỳ sai sót nào trong tình huống sút phạt thành bàn.

Messi bây giờ đứng trong hàng ngũ bậc thầy sút phạt, cùng Roberto Carlos, Andrea Pirlo, Cristiano Ronaldo, hay David Beckham. Ở tuổi 31, Leo đã ghi 42 bàn từ những tình huống sút phạt, trong đó 36 bàn được thực hiện khi khoác áo Barcelona, và 6 bàn còn lại trong màu áo đội tuyển Argentina.

Nói Messi là bậc thầy sút phạt không có gì quá lời. Cao, thấp, sệt hay chính diện của khung thành, Leo ở bất kỳ góc sút nào đều có thể ra lệnh để trái bóng đi theo chủ đích của mình. Mặc cho trái bóng được đặt vị trí nào, khi số 10 là người đứng trước bóng, thủ môn đối diện bắt đầu lo lắng.

Trước đây, lúc Ronaldinho hay Zlatan Ibrahimovic còn khoác áo Barca, Leo hiếm khi thực hiện pha dứt điểm. Bàn đầu tiên của Messi từ chấm sút phạt là năm 2008, trận gặp Atletico Madrid ở La Liga. Anh dứt điểm tinh quái nhờ tận dụng hàng rào đối phương chưa được dựng xong.

Mãi 1 năm sau, khi Barca đụng Dynamo Kyiv tại Champions League, Messi mới sút phạt thành bàn trở lại. Kể từ giây phút đó, Leo trở thành bậc thầy sút phạt. Tất cả nhờ Diego Maradona bởi vào tháng 2/2009, "Cậu bé vàng" hướng dẫn cho Leo những kỹ năng cần thiết để sút phạt nguy hiểm.

"Hãy đặt quả bóng vào đây và lắng nghe tôi. Đừng sút quá nhanh vì nếu không trái bóng sẽ không biết được cậu muốn gì", Maradona khuyên Messi ở sân Velodrome của Marseille. Tiếp đó, huyền thoại người Argentina vuốt bóng, tạo ra đường cong hoàn hảo trước sự ngưỡng mộ của Messi.

Sau cuộc gặp gỡ định mệnh ấy, Messi đã điền thêm kỹ thuật sút phạt vào một trong những tố chất tài năng của mình. Tại La Liga, từ Iker Casillas đến Jan Oblak, những thủ môn hàng đầu thế giới sau này đều từng một hoặc hai lần trở thành nạn nhân của Leo trước các tình huống cố định.

Thời gian qua, thế giới liên tục bồi đắp cho quan điểm, Ronaldo là thiên tài nhờ tập luyện, còn Messi là thiên tài bẩm sinh. Điều đó không đúng. Khả năng sút phạt của Leo không tự nhiên mà có. Siêu sao người Argentina phải trải qua nhiều năm luyện tập mới trở thành ngòi nổ đáng gờm.

"Mãi tới năm 2005, Messi cũng không được thực hiện nhiều cú sút phạt lúc chơi cho đội trẻ Barca", Roger Giribet, đồng đội cũ của Barca ở lò La Masia, kể với báo Goal.com. Còn cựu giám đốc của La Masia Albert Benaiges bảo rằng học viện không chú trọng nhiều vào kỹ năng sút phạt.

Ông Benaiges chia sẻ thêm, các cầu thủ tại La Masia vẫn được hướng dẫn sú phạt, nhưng đây không phải tiêu chí hàng đầu được các HLV hướng tới trong việc chỉ dạy. Còn theo Roger Giribet, hai đồng đội Victor Vazquez và Juanjo Clausi mới là những chân sút phạt cừ khôi tại La Masia.

Bằng chứng trên đủ cho thấy Messi cũng như mọi cầu thủ khác, luôn phải tập luyện chăm chỉ mới có thể sở hữu kỹ thuật thượng hạng.',
                'image' => 'lionel-messi-03-1949.jpg',
                'views' => 0,
                'categories_id' => 7,
                'user_id' => 7,
                'Breaking_news' => 1,
                'created_at' => '2018-10-13 19:27:12',
                'updated_at' => '2018-09-24 20:00:53',
            ),
            52 => 
            array (
                'id' => 64,
                'title' => 'Zidane chuẩn bị tái xuất, lộ diện điểm đến không ngờ',
                'summary' => ' Zinedine Zidane sắp trở lại, và điểm đến của vị chiến lược gia người Pháp sẽ chẳng phải là một đội bóng quá nổi tiếng tại châu Âu.',
                'body' => 'Sau khi giúp Real Madrid bảo vệ thành công ngôi vương tại Champions League trong mùa giải năm ngoái, Zinedine Zidane đã chủ động rời khỏi cương vị thuyền trưởng của Los Blancos sau khi xảy ra những mâu thuẫn với các lãnh đạo của đội.

Cho đến thời điểm hiện tại, vị chiến lược gia người Pháp vẫn chưa nhận lời dẫn dắt cho bất cứ đội bóng nào, dù đã có không ít đội bóng lớn như Man Utd, Juventus,...


Theo những động thái bất ngờ mới đây, trong lúc các đội bóng khác đang có dấu hiệu chững lại trong việc tiếp cận Zidane, thì cựu tuyển thủ Anh và đồng thời cũng là ông chủ của Inter Miami lại đang đẩy mạnh việc liên hệ với người đồng đội cũ.

Cụ thể Beckham đã đề nghị Zidane đến Mỹ đảm nhận vai trò HLV cho đội bóng của mình. Theo giới thạo tin tại Mỹ, Zidane cũng đang rất hài lòng với lời đề nghị này, khi ông đang muốn tạm xa lánh những áp lực quá lớn tại châu Âu để tìm chút trải nghiệm mới trên nước Mỹ.

Ngoài Zidane, Beckham cũng đang triển khai xây dựng một siêu đội hình cho Inter Miami với những ngôi sao như Wayne Rooney, Sergio Ramos,...',
                'image' => '3a_1-1028.jpg',
                'views' => 0,
                'categories_id' => 8,
                'user_id' => 7,
                'Breaking_news' => 1,
                'created_at' => '2018-10-13 19:27:13',
                'updated_at' => '2018-09-24 20:05:29',
            ),
            53 => 
            array (
                'id' => 65,
                'title' => 'Sarri khởi đầu quá tốt, Chelsea hứa tặng thêm 3 \'bom tấn\'',
                'summary' => 'Lãnh đạo của Chelsea đã chấp nhận mạnh tay chi tiền trong tháng Giêng tới, sau khi quá ấn tượng với khởi đầu của HLV Maurizio Sarri.',
                'body' => 'Tính đến trước trận đấu với West Ham tại vòng 6 Premier League, Chelsea đã toàn thắng trong cả 6 trận đã đấu. Đây rõ ràng là một thành tích mà không nhiều người dám nghĩ tới trước, khi tài năng của HLV Sarri vẫn bị coi nhẹ khá nhiều dù đã có được những thành công nhất định tại Napoli.

Trước những ấn tượng quá lớn của vị chiến lược gia người Italia, lãnh đạo Chelsea cũng đã đồng ý sẽ hỗ trợ tối đa trong kỳ chuyển nhượng mùa Đông để ông có thể tiếp tục xây dựng được một đội hình ưng ý nhất theo ý mình.

Cụ thể Chelsea đã thông qua yêu cầu chiêu mộ thêm 3 tân binh của HLV Sarri. Theo đó trung vệ Daniele Rugani sẽ là người được nhắm tới đầu tiên để thay thế cho Gary Caill - người có khả năng rất cao sẽ ra đi vào tháng Giêng.

Cái tên tiếp theo mà The Blues muốn nhắm tới chính tài năng trẻ Federico Chiesa của Fiorentina. Đây có thể là một phương án thay thế lâu dài dành cho Morata, chàng tiền đạo đang chơi rất tệ trong mùa giải năm nay.

Cầu thủ cuối cùng mà HLV Sarri muốn đem về Chelsea trong tháng Giêng đó chính là tiền vệ Nicolo Barella. Được biết cầu thủ 21 tuổi này cũng đang là mục tiêu được cả Liverpool và Tottenham dành sự quan tâm rất lớn trong thời gian qua.',
                'image' => '3a_1-2035.jpg',
                'views' => 0,
                'categories_id' => 8,
                'user_id' => 7,
                'Breaking_news' => 1,
                'created_at' => '2018-10-13 19:27:14',
                'updated_at' => '2018-09-24 20:05:29',
            ),
            54 => 
            array (
                'id' => 66,
                'title' => 'Ibrahimovic XÁC NHẬN khả năng tái xuất Châu Âu',
                'summary' => '"Gã du mục" vẫn chưa có ý định kết thúc hành trình bất tận của mình.',
                'body' => 'Kể từ khi chuyển sang Mỹ đầu quân cho Los Angeles Galaxy, Zlatan Ibrahimovic như một cơn lốc cuốn phăng Giải nhà nghề Mỹ MLS. Siêu sao Thụy Điển nhanh chóng hòa nhập với môi trường mới và liên tiếp đóng góp những bàn thắng siêu phẩm. Gần đây, Ibrahimovic đã chính thức cán mốc 500 bàn thắng trong sự nghiệp sau pha bay người dứt điểm bằng gót chân điệu nghệ.

Bùng nổ tại Mỹ nhưng Ibrahimovic không khẳng định tương lai lâu dài tại xứ sở Cờ Hoa. Thay vào đó, anh vẫn ấp ủ khả năng trở lại Châu Âu chơi bóng, mà cụ thể là trong màu áo đội bóng quê nhà, Malmo. Trong bài phỏng vấn mới đây, Ibrahimovic còn tiết lộ Malmo đã chính thức liên hệ với anh.

Tôi đã nhận được một lời đề nghị [từ Malmo]." The Sun dẫn lời Ibrahimovic. "Họ muốn tôi trở về nhà và kết thúc sự nghiệp ở đó. Tôi vẫn bỏ ngỏ khả năng trở lại và đoạt chiếc cúp vô địch còn thiếu."

Ibrahimovic bắt đầu sự nghiệp thi đấu chuyên nghiệp tại Malmo giai đoạn 1999-2001. Dù vậy, đội bóng Thụy Điển và Manchester United là 2 bến đỗ nơi chân sút lừng danh chưa từng giành chức VĐQG ở giải đấu tham dự. Ngoài ra, Ibrahimovic đã giành được danh hiệu VĐQG ở mọi nơi anh từng khoác áo, bao gồm Ajax, Inter Milan, Barcelona, AC Milan và Paris Saint-Germain. ',
                'image' => 'nintchdbpict000295280814-e1537618990694-1938.jpg',
                'views' => 0,
                'categories_id' => 8,
                'user_id' => 7,
                'Breaking_news' => 1,
                'created_at' => '2018-10-13 19:27:15',
                'updated_at' => '2018-09-24 20:05:29',
            ),
            55 => 
            array (
                'id' => 67,
                'title' => 'Huyền thoại Arsenal: "Ozil sẽ bị bán vào tháng Giêng"',
                'summary' => ' Huyền thoại Arsenal cho rằng tiền vệ Mesut Ozil sẽ rời Pháo thủ vào tháng Giêng.',
                'body' => 'Sau khi chứng kiến màn trình diễn nhạt nhòa của Mesut Ozil trong giai đoạn đầu mùa, huyền thoại của Arsenal, cầu thủ nằm trong top 28 cầu thủ vĩ đại nhất Pháo thủ, Charlie Nicholas đã đưa ra nhận định của mình về tiền vệ người Đức.

Phát biểu trên tờ Metro, cựu tiền đạo Arsenal cho biết: "Nếu Ozil vẫn không cải thiện được phong độ và các đội bóng khác vẫn ngỏ ý muốn có cậu ấy, Arsenal nên để cậu ấy ra đi.

Tôi thấy Fenerbahce và một số câu lạc bộ khác đang quan tâm đến Ozil. Tôi không biết tiềm lực tài chính của họ thế nào nhưng với một số ông chủ Trung Quốc, mọi chuyện có vẻ không thành vấn đề. 

Vấn đề của Ozil không chỉ là lương, các đội bóng muốn có cậu ấy còn phải chuẩn bị một đội ngũ y tế đủ tốt để chăm lo cho chấn thương của cậu ấy nữa. Xem ra việc đó sẽ ngốn một khoản tiền rất lớn.

Tôi nghĩ với một huấn luyện viên mới, ông ấy sẽ khá vất vả để có thể sử dụng Ozil. Và nếu tình hình không được thuận lợi, nhiều khả năng, vị chiến lược gia đó sẽ nói: "Cậu chơi không đủ tốt và cậu sẽ phải rời đội bóng của chúng tôi".',
                'image' => 'ozil-3-1237.jpg',
                'views' => 0,
                'categories_id' => 8,
                'user_id' => 7,
                'Breaking_news' => 1,
                'created_at' => '2018-10-13 19:27:16',
                'updated_at' => '2018-09-24 20:05:29',
            ),
            56 => 
            array (
                'id' => 68,
                'title' => 'Chán chường Morata, HLV Sarri lên kế hoạch tậu sao 85 triệu bảng',
                'summary' => 'Khá thất vọng sau màn trình diễn của Alvaro Morata trong trận đấu với PAOK, HLV Maurizio Sarri đã nhen nhóm kế hoạch chiêu mộ một tiền đạo đẳng cấp.',
                'body' => 'Alvaro Morata đã có một trận đấu đáng quên với những con số thống kê tệ hại với 6/7 cú sút không trúng đích cùng một lối đá không có gì sáng tạo. Đây không phải lần đầu tiên cựu tiền đạo Real Madrid tịt ngòi theo kiểu này và sau trận đấu với PAOK, anh đã hứng chịu nhiều chỉ trích.

Màn trình diễn của tiền đạo người Tây Ban Nha kể từ đầu mùa giải (chỉ mới ghi 1 bàn sau 6 lần ra sân), HLV Maurizio Sarri đã bắt đầu nghĩ đến kế hoạch tìm người thay thế. Cụ thể, theo tờ Football Fancast, vị chiến lược gia 59 tuổi đã nhắm đến một tiền đạo đẳng cấp đang trong biên chế của Inter Milan.

Cái tên này không mấy xa lạ, đó chính là tiền đạo Mauro Icardi - cây săn bàn lợi hại của đại diện Serie A trong những năm gần đây. Chiều lòng HLV Sarri, Chelsea cũng đã duyệt chi 85 triệu bảng để xúc tiến thương vụ này hoàn tất ngay trong phiên chợ Đông sắp tới

Cập bến Inter từ Sampdoria với giá 6,5 triệu euro từ mùa Hè 2013, tính đến thời điểm này, Icardi đã ghi tổng cộng 108 bàn thắng sau 186 lần ra sân cho Nerazzurri.

',
                'image' => 'a-1832.jpg',
                'views' => 0,
                'categories_id' => 8,
                'user_id' => 7,
                'Breaking_news' => 1,
                'created_at' => '2018-10-13 19:27:18',
                'updated_at' => '2018-09-24 20:05:29',
            ),
            57 => 
            array (
                'id' => 76,
                'title' => 'Manchester United - Kiếm tiền giỏi, nhưng đá bóng phải hay',
                'summary' => '<p>Trong ngày đạt kỷ lục mới về doanh thu, Manchester United tiếp tục thể hiện phong độ đáng thất vọng trên sân cỏ. Đến bao giờ, vị thế đích thực của MU mới trở lại?</p>',
            'body' => '<p>Sau trận hòa thất vọng trước đội bóng mới lên hạng Wolverhampton ở vòng 6 Premier League, cúp Liên đoàn Anh được cho là cơ hội để MU lấy lại tự tin. “Quỷ Đỏ” được chơi ở Old Trafford và chỉ gặp đội bóng hạng nhất Derby County. Frank Lampard từng là tiền vệ xuất sắc của nước Anh, nhưng chỉ như “gã học việc” khi chuyển sang cương vị HLV. Về mọi mặt, MU đều vượt trội.</p><p>Dù vậy, sau 90 phút, người ta không thể nhận ra MU đang chơi trên sân nhà hay đất khách. Old Trafford ngày hôm nay chỉ có chưa đầy 40.000 khán giả vì họ xem cúp Liên đoàn Anh không phải là giải đấu quan trọng. Nếu không có cú đánh đầu trong tình huống mang tính cầu may từ Marouane Fellaini, MU đã bị loại sau 90 phút.</p><p>Fellaini ghi bàn, Mourinho ăn mừng điên cuồng và thực hiện hành động “suỵt”, ý ám chỉ những người chê bai mình hãy câm lặng. Nhưng khi trận đấu kéo dài đến loạt sút luân lưu, “Quỷ đỏ” cũng không thể đánh bại Derby County vì cú sút hỏng của Phil Jones “. Hai trận liền, Old Trafford chìm trong bóng tối.</p><p><strong>Ông vua kiếm tiền, nhưng rất tệ trên sân cỏ</strong></p><p>Trước trận tiếp đón Derby County, ban lãnh đạo MU vui mừng công bố mức doanh thu kỷ lục CLB sau mùa giải 2017/18. Theo đó,Quỷ đỏ” dù trắng tay, song thu về đến 590 triệu bảng. Về khoản kiếm tiền, sẽ còn rất lâu vị thế của MU mới bị một đội bóng nào đó tại xứ sở sương mù vượt qua.</p><p>Ngày càng “ăn nên, làm ra” ở khía cạnh thương mại, nhưng trên sân cỏ, thành tích của đội bóng do Jose Mourinho dẫn dắt trượt dốc không phanh. Trên bảng xếp hạng Premier League 2018-19 sau 6 vòng, MU đã rơi xuống vị trí thứ 7 - tệ nhất trong những CLB được xếp vào diện ông lớn của nước Anh.</p><p>Ngay ở trận ra quân cúp Liên đoàn Anh 2018, MU cũng bị loại bởi đối thủ có mức doanh thu chỉ tầm 35 triệu bảng/năm (số liệu từ BBC). Những ông chủ đang mỉm cười vì MU duy trì hình ảnh “con gà đẻ trứng vàng” mỗi năm. Trong khi đó, nỗi thất vọng về phong độ của “Quỷ đỏ” đã lên mức đỉnh điểm.</p><p>Về nội bộ, Mourinho và Pogba hục hặc nhau. Bên ngoài, huyền thoại, cũng là CĐV nhiệt thành của MU, như Gary Neville cũng không thể kìm chế cảm xúc khi nhìn đội bóng cũ trượt dốc.</p><p>Neville nói với&nbsp;Sky Sports: <i>“Không thể tin được đó là màn trình diễn của một đội bóng lớn. MU xứng đáng thất bại”.</i> Chính Mourinho cũng tức giận: <i>“Có thắng theo cách như vậy cũng không vui”.</i></p><p>Tình cảnh hiện tại của MU cũng là thực tế chung từ lúc Sir Alex Ferguson không còn giữ cương vị. MU có thể là thương hiệu rất lớn trên thương trường, mỗi năm nhận hàng chục bản hợp đồng tài trợ béo bở. Nhưng trên sân cỏ, “Quỷ đỏ” giờ đây chỉ nằm ở hạng khá trên bình diện châu Âu.</p><p>5 năm qua, đội chủ sân Old Trafford không vô địch Premier League, chưa một lần vượt quá ranh giới của vòng 16 đội Champions League. Thậm chí, khi BBC, ESPN,… đánh giá các ứng viên cho chức vô địch Champions League, Man City, Liverpool mới là đại diện của nước Anh bên cạnh Real Madrid, Barcelona, Bayern Munich, Juventus thay vì MU.</p><p>Như nhận định của cựu HLV Sir Alex, một đội bóng vô địch Premier League phải thua không quá 5 trận. Chỉ sau 6 vòng, MU thất bại đến 2 lần. Cơ hội nào cho thầy trò Mourinho lật ngược thế cờ khi Liverpool, Man City đang chơi quá hay? Với Champions League, MU trước hết phải vượt qua bảng đấu có sự góp mặt của Juventus và Valencia.</p><p>Thất bại ở cúp Liên đoàn Anh báo hiệu cho một mùa giải trắng tay tiếp theo của MU. Xem ra, chỉ còn duy nhất FA Cup là giải đấu MU có thể hy vọng, dù đến tháng 1/2019 mới bắt đầu chơi trận đầu tiên.</p><p><strong>Cần một giám đốc thể thao&nbsp;</strong></p><p>So với nhiều CLB hàng đầu ở châu Âu, MU chưa từng có giám đốc thể thao. ESPN nhận định lý do xuất phát từ việc đội chủ sân Old Trafford muốn phát triển theo mô hình dài hạn, mà ở đó tầm ảnh hưởng của HLV sẽ lớn hơn cả. Dù vậy, điều này chỉ hợp với thời điểm “Máy sấy tóc” còn tại vị.</p><p>Qua ba đời HLV từ David Moyes, Louis van Gaal và Mourinho, tất cả đều không cho thấy mình là số 1 ở sân Old Trafford. Giám đốc điều hành Ed Woodward là người giữ nhiều quyền lực ở MU, nhưng ông nổi tiếng với khả năng làm kinh tế, hơn là chuyên môn trong bóng đá.</p><p>Sự trùng hợp nằm ở chỗ từ khi Ed Woodward giữ ghế thay David Gill, MU làm ăn ngày càng có lãi, nhưng hình ảnh trên sân ngày một đi xuống.</p><p>Đó là lý do MU có thể sẽ ráo riết săn đón một giám đốc thể thao trong thời gian tới. Người này sẽ đảm nhận chuyên môn về bóng đá, là cầu nối giữa chủ tịch, giám đốc điều hành và HLV để tìm ra tiếng nói chung. Giám đốc thể thao sẽ giúp HLV vạch ra chiến lược dài hạn để MU không bị bỏ lại trong tương lai.</p><p>Hàng loạt ứng viên đã được “Quỷ Đỏ” đặt vào tầm ngắm, trong đó có Edwin Van der Sar (đang giữ vai trò tương tự ở Ajax), Luis Campos (cộng sự cũ của Mourinho ở Porto) và Andrea Berta (giám đốc thể thao Atletico Madrid). Daily Mail cho hay Berta là phương án được MU ưu tiên hàng đầu, bởi sự đóng góp của ông ở Atletico đặc biệt ấn tượng.</p><p>Giỏi kiếm tiền, nhưng cũng là đội bóng xuất sắc trên sân cỏ, đó mới là hình ảnh CĐV MU trông đợi. Khi nhận ra thế giới không thể có Sir Alex thứ hai, cách tốt nhất cho MU chính là thay đổi cả chiến lược trước khi quá muộn.</p>',
                'image' => 'manchester-united-01-2100_1537973745.jpg',
                'views' => 1,
                'categories_id' => 1,
                'user_id' => 7,
                'Breaking_news' => 0,
                'created_at' => '2018-10-15 21:00:00',
                'updated_at' => '2018-10-15 21:00:00',
            ),
            58 => 
            array (
                'id' => 85,
                'title' => 'De Gea ra điều kiện để ở lại Man Utd: Không phải vì tiền hay danh hiệu',
                'summary' => '<p>Vào lúc này, Man Utd đang rất nhọc nhằn trong việc giữ chân David de Gea.</p>',
                'body' => '<p>Hợp đồng của De Gea với Man Utd sẽ kết thúc vào cuối mùa này. Dù đội chủ sân Old Trafford có quyền kích hoạt điều khoản gia hạn 1 năm, nhưng họ vẫn có lí do để lo lắng, nhất là khi thủ môn người Tây Ban Nha đang được PSG theo đuổi sát sao.</p><p>Đã có thông tin cho biết Man Utd sẵn sàng để cho De Gea hưởng mức lương cực khủng, tuy nhiên, đây không phải là vấn đề được thủ thành 27 này quan tâm cho lắm. Theo ESPN, De Gea sẽ chấp nhận ở lại Old Trafford nếu những người bạn thân của anh, Juan Mata và Ander Herrera vẫn tiếp tục gắn bó với câu lạc bộ.</p><p>Đó cũng là điều dễ hiểu, bởi 3 người đồng hương Mata, Herrera và De Gea thật sự rất thân thiết. Họ vẫn luôn sát cánh bên nhau trên sân tập, phòng thay đồ hay khi ra ngoài.</p><p>Cũng như De Gea, cả Mata lẫn Herrera đều ở năm cuối trong hợp đồng với Quỷ đỏ và đang gặp khúc mắc trong việc gia hạn hợp đồng với Man Utd.</p>',
                'image' => 'degea56-1320-1457_1539677531.jpg',
                'views' => 8,
                'categories_id' => 1,
                'user_id' => 5,
                'Breaking_news' => 0,
                'created_at' => '2018-10-16 15:16:58',
                'updated_at' => '2018-11-05 17:03:47',
            ),
            59 => 
            array (
                'id' => 93,
                'title' => 'Real thua thảm, CĐV chỉ trích cái tên này là "trò cười" so với Ronaldo',
                'summary' => '<p><span style="color: #444444; font-family: robotoslab-regular; font-size: 15px; font-weight: bold;">C&aacute;c cổ động vi&ecirc;n Real vẫn chưa thể n&agrave;o "ti&ecirc;u h&oacute;a" nỗi nhớ Ronaldo v&agrave; trận thua 1-5 trước Barca c&agrave;ng khiến họ th&ecirc;m đau đớn khi nh&igrave;n v&agrave;o những c&aacute;i t&ecirc;n hiện tại tr&ecirc;n h&agrave;ng c&ocirc;ng.</span></p>',
                'body' => '<figure class="expNoEdit" style="padding: 0px; list-style: none; outline: 0px; line-height: 24px; box-sizing: border-box; border: 0px; font-size: 15px; vertical-align: top; background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; width: 630px; text-align: center; font-family: robotoslab-regular; margin: 0px auto 8px !important;"><img style="padding: 0px; list-style: none; outline: 0px; line-height: 24px; box-sizing: border-box; border: 0px; vertical-align: top; background: 0px 0px; object-fit: cover; max-width: 100%; margin: 0px !important; height: auto !important;" src="http://media.bongda.com.vn/files/trong.le/2018/10/29/bale-2-0720.jpg" alt="Real thua thảm, CĐV chỉ tr&iacute;ch c&aacute;i t&ecirc;n n&agrave;y l&agrave; " width="665" height="450" />
<figcaption style="margin: 0px; padding: 3px; list-style: none; outline: 0px; line-height: 24px; box-sizing: border-box; border: 0px; vertical-align: top; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-style: italic;">
<h2 class="expEdit" style="margin: 0px; padding: 0px; list-style: none; outline: 0px; line-height: 24px; box-sizing: border-box; border: 0px; font-size: 15px; vertical-align: top; background: 0px 0px; font-weight: 400; display: inline;">Được kỳ vọng sẽ trở th&agrave;nh sự thay thế xứng đ&aacute;ng d&agrave;nh cho Ronaldo tr&ecirc;n h&agrave;ng c&ocirc;ng, thế nhưng, m&agrave;n tr&igrave;nh diễn của Gareth Bale khi đối đầu Barca l&agrave; hết sức nhạt nh&ograve;a.&nbsp;</h2>
</figcaption>
</figure>
<figure class="expNoEdit" style="padding: 0px; list-style: none; outline: 0px; line-height: 24px; box-sizing: border-box; border: 0px; font-size: 15px; vertical-align: top; background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; width: 630px; text-align: center; font-family: robotoslab-regular; margin: 0px auto 8px !important;"><img style="padding: 0px; list-style: none; outline: 0px; line-height: 24px; box-sizing: border-box; border: 0px; vertical-align: top; background: 0px 0px; object-fit: cover; max-width: 100%; margin: 0px !important; height: auto !important;" src="http://media.bongda.com.vn/files/trong.le/2018/10/29/bale-1-0715.jpg" alt="Real thua thảm, CĐV chỉ tr&iacute;ch c&aacute;i t&ecirc;n n&agrave;y l&agrave; " width="680" height="452" />
<figcaption style="margin: 0px; padding: 3px; list-style: none; outline: 0px; line-height: 24px; box-sizing: border-box; border: 0px; vertical-align: top; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-style: italic;">
<h2 class="expEdit" style="margin: 0px; padding: 0px; list-style: none; outline: 0px; line-height: 24px; box-sizing: border-box; border: 0px; font-size: 15px; vertical-align: top; background: 0px 0px; font-weight: 400; display: inline;">Thậm ch&iacute;, anh c&ograve;n được xem l&agrave; một trong những nguy&ecirc;n nh&acirc;n dẫn đến chuỗi th&agrave;nh t&iacute;ch ghi b&agrave;n tệ hại của Kền kền trắng m&ugrave;a n&agrave;y.&nbsp;</h2>
</figcaption>
</figure>
<div id="ads_55" class="adv" style="margin: 0px; padding: 0px; list-style: none; outline: 0px; line-height: 24px; box-sizing: border-box; border: 0px; font-size: 15px; vertical-align: top; background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; text-align: center; overflow: hidden; font-family: robotoslab-regular;">
<div class="e" style="margin: 0px; padding: 0px; list-style: none; outline: 0px; line-height: 24px; box-sizing: border-box; border: 0px; vertical-align: top; background: 0px 0px;">
<div id="GaxVideoInreadPlayerWrapper" style="margin: 0px; padding: 0px; list-style: none; outline: 0px; line-height: 24px; box-sizing: border-box; border: 0px; vertical-align: top; background: 0px 0px; display: inline-block; height: 0px; overflow: hidden;">&nbsp;</div>
</div>
</div>
<div class="new_relation_top pkg in-article-related-news" style="margin: 0px -10px 10px; padding: 0px 10px; list-style: none; outline: 0px; line-height: 24px; box-sizing: border-box; border: 0px #bababa; font-size: 15px; vertical-align: top; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; position: relative; font-family: robotoslab-regular;">&nbsp;</div>
<figure class="expNoEdit" style="padding: 0px; list-style: none; outline: 0px; line-height: 24px; box-sizing: border-box; border: 0px; font-size: 15px; vertical-align: top; background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; width: 630px; text-align: center; font-family: robotoslab-regular; margin: 0px auto 8px !important;"><img style="padding: 0px; list-style: none; outline: 0px; line-height: 24px; box-sizing: border-box; border: 0px; vertical-align: top; background: 0px 0px; object-fit: cover; max-width: 100%; margin: 0px !important; height: auto !important;" src="http://media.bongda.com.vn/files/trong.le/2018/10/29/bale-6-0715.jpg" alt="Real thua thảm, CĐV chỉ tr&iacute;ch c&aacute;i t&ecirc;n n&agrave;y l&agrave; " width="660" height="219" />
<figcaption style="margin: 0px; padding: 3px; list-style: none; outline: 0px; line-height: 24px; box-sizing: border-box; border: 0px; vertical-align: top; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-style: italic;">
<h2 class="expEdit" style="margin: 0px; padding: 0px; list-style: none; outline: 0px; line-height: 24px; box-sizing: border-box; border: 0px; font-size: 15px; vertical-align: top; background: 0px 0px; font-weight: 400; display: inline;">Chứng kiến m&agrave;n tr&igrave;nh diễn của Bale, một cổ động vi&ecirc;n đ&atilde; ng&aacute;n ngẩm n&oacute;i rằng: "Họ n&oacute;i Gareth Bale sẽ thay thế Ronaldo. T&ocirc;i nghĩ tr&ograve; cười g&igrave; thế n&agrave;y".&nbsp;</h2>
</figcaption>
</figure>
<figure class="expNoEdit" style="padding: 0px; list-style: none; outline: 0px; line-height: 24px; box-sizing: border-box; border: 0px; font-size: 15px; vertical-align: top; background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; width: 630px; text-align: center; font-family: robotoslab-regular; margin: 0px auto 8px !important;"><img style="padding: 0px; list-style: none; outline: 0px; line-height: 24px; box-sizing: border-box; border: 0px; vertical-align: top; background: 0px 0px; object-fit: cover; max-width: 100%; margin: 0px !important; height: auto !important;" src="http://media.bongda.com.vn/files/trong.le/2018/10/29/bale-3-0715.jpg" alt="Real thua thảm, CĐV chỉ tr&iacute;ch c&aacute;i t&ecirc;n n&agrave;y l&agrave; " width="660" height="272" />
<figcaption style="margin: 0px; padding: 3px; list-style: none; outline: 0px; line-height: 24px; box-sizing: border-box; border: 0px; vertical-align: top; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-style: italic;">
<h2 class="expEdit" style="margin: 0px; padding: 0px; list-style: none; outline: 0px; line-height: 24px; box-sizing: border-box; border: 0px; font-size: 15px; vertical-align: top; background: 0px 0px; font-weight: 400; display: inline;">"Gareth Bale đ&atilde; thực sự đi xuống. Premier League l&agrave; khoảng thời gian đẹp nhất trong sự nghiệp của cậu ấy c&ograve;n b&acirc;y giờ, Bale thi đấu thật nhạt nh&ograve;a".&nbsp;</h2>
</figcaption>
</figure>
<figure class="expNoEdit" style="padding: 0px; list-style: none; outline: 0px; line-height: 24px; box-sizing: border-box; border: 0px; font-size: 15px; vertical-align: top; background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; width: 630px; text-align: center; font-family: robotoslab-regular; margin: 0px auto 8px !important;"><img style="padding: 0px; list-style: none; outline: 0px; line-height: 24px; box-sizing: border-box; border: 0px; vertical-align: top; background: 0px 0px; object-fit: cover; max-width: 100%; margin: 0px !important; height: auto !important;" src="http://media.bongda.com.vn/files/trong.le/2018/10/29/bale-4-0715.jpg" alt="Real thua thảm, CĐV chỉ tr&iacute;ch c&aacute;i t&ecirc;n n&agrave;y l&agrave; " width="660" height="282" />
<figcaption style="margin: 0px; padding: 3px; list-style: none; outline: 0px; line-height: 24px; box-sizing: border-box; border: 0px; vertical-align: top; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-style: italic;">
<h2 class="expEdit" style="margin: 0px; padding: 0px; list-style: none; outline: 0px; line-height: 24px; box-sizing: border-box; border: 0px; font-size: 15px; vertical-align: top; background: 0px 0px; font-weight: 400; display: inline;">"Trong suy nghĩ của cậu ấy, Bale tin m&igrave;nh xuất sắc hơn Ronaldo. Nhưng c&oacute; một sự thật l&agrave; cậu ấy c&ograve;n chẳng thể tiệm cận Ronaldo".&nbsp;&nbsp;</h2>
</figcaption>
</figure>
<figure class="expNoEdit" style="padding: 0px; list-style: none; outline: 0px; line-height: 24px; box-sizing: border-box; border: 0px; font-size: 15px; vertical-align: top; background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; width: 630px; text-align: center; font-family: robotoslab-regular; margin: 0px auto 8px !important;"><img style="padding: 0px; list-style: none; outline: 0px; line-height: 24px; box-sizing: border-box; border: 0px; vertical-align: top; background: 0px 0px; object-fit: cover; max-width: 100%; margin: 0px !important; height: auto !important;" src="http://media.bongda.com.vn/files/trong.le/2018/10/29/bale-7-0715.jpg" alt="Real thua thảm, CĐV chỉ tr&iacute;ch c&aacute;i t&ecirc;n n&agrave;y l&agrave; " width="660" height="304" />
<figcaption style="margin: 0px; padding: 3px; list-style: none; outline: 0px; line-height: 24px; box-sizing: border-box; border: 0px; vertical-align: top; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-style: italic;">
<h2 class="expEdit" style="margin: 0px; padding: 0px; list-style: none; outline: 0px; line-height: 24px; box-sizing: border-box; border: 0px; font-size: 15px; vertical-align: top; background: 0px 0px; font-weight: 400; display: inline;">"UHM! Hiển nhi&ecirc;n Real Madrid kh&ocirc;ng cần Ronaldo. Bale, Asensio, Modric v&agrave; Benzema c&oacute; thể l&agrave;m tốt c&ocirc;ng việc m&agrave;, hahaha".&nbsp;</h2>
</figcaption>
</figure>
<figure class="expNoEdit" style="padding: 0px; list-style: none; outline: 0px; line-height: 24px; box-sizing: border-box; border: 0px; font-size: 15px; vertical-align: top; background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; width: 630px; text-align: center; font-family: robotoslab-regular; margin: 0px auto 8px !important;"><img style="padding: 0px; list-style: none; outline: 0px; line-height: 24px; box-sizing: border-box; border: 0px; vertical-align: top; background: 0px 0px; object-fit: cover; max-width: 100%; margin: 0px !important; height: auto !important;" src="http://media.bongda.com.vn/files/trong.le/2018/10/29/bale-8-0715.jpg" alt="Real thua thảm, CĐV chỉ tr&iacute;ch c&aacute;i t&ecirc;n n&agrave;y l&agrave; " width="660" height="275" />
<figcaption style="margin: 0px; padding: 3px; list-style: none; outline: 0px; line-height: 24px; box-sizing: border-box; border: 0px; vertical-align: top; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-style: italic;">
<h2 class="expEdit" style="margin: 0px; padding: 0px; list-style: none; outline: 0px; line-height: 24px; box-sizing: border-box; border: 0px; font-size: 15px; vertical-align: top; background: 0px 0px; font-weight: 400; display: inline;">"Bale đang thi đấu ng&agrave;y một đi xuống nhưng bạn sẽ chẳng bao giờ nghe về điều đ&oacute;. Bale đang l&agrave; cầu thủ được bảo vệ nhất thế giới b&oacute;ng đ&aacute;. Nhưng nếu mọi chuyện cứ tiếp tục, di sản sự nghiệp của anh ấy rốt cuộc cũng chỉ c&oacute; thế".&nbsp; &nbsp;</h2>
</figcaption>
</figure>
<figure class="expNoEdit" style="padding: 0px; list-style: none; outline: 0px; line-height: 24px; box-sizing: border-box; border: 0px; font-size: 15px; vertical-align: top; background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; width: 630px; text-align: center; font-family: robotoslab-regular; margin: 0px auto 8px !important;"><img style="padding: 0px; list-style: none; outline: 0px; line-height: 24px; box-sizing: border-box; border: 0px; vertical-align: top; background: 0px 0px; object-fit: cover; max-width: 100%; margin: 0px !important; height: auto !important;" src="http://media.bongda.com.vn/files/trong.le/2018/10/29/bale-5-0715.jpg" alt="Real thua thảm, CĐV chỉ tr&iacute;ch c&aacute;i t&ecirc;n n&agrave;y l&agrave; " width="660" height="677" />
<figcaption style="margin: 0px; padding: 3px; list-style: none; outline: 0px; line-height: 24px; box-sizing: border-box; border: 0px; vertical-align: top; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-style: italic;">
<h2 class="expEdit" style="margin: 0px; padding: 0px; list-style: none; outline: 0px; line-height: 24px; box-sizing: border-box; border: 0px; font-size: 15px; vertical-align: top; background: 0px 0px; font-weight: 400; display: inline;">"B&acirc;y giờ h&atilde;y nhớ l&uacute;c mọi người n&oacute;i Bale c&oacute; thể đứng dậy&nbsp;v&agrave; thay thế Ronaldo".&nbsp;</h2>
</figcaption>
</figure>',
                'image' => 'bale-2-0720_1540810304.jpg',
                'views' => 2,
                'categories_id' => 3,
                'user_id' => 5,
                'Breaking_news' => 0,
                'created_at' => '2018-10-29 17:51:44',
                'updated_at' => '2018-10-30 15:43:12',
            ),
            60 => 
            array (
                'id' => 94,
                'title' => 'Dư âm đại chiến Man City - Tottenham: 5 điều cần biết',
                'summary' => '<p><span style="color: #444444; font-family: robotoslab-regular; font-size: 15px; font-weight: bold;">Rạng s&aacute;ng nay, Riyad Mahrez đ&atilde; ghi b&agrave;n thắng duy nhất mang về chiến thắng cho Manchester City. V&agrave; đ&acirc;y l&agrave; năm điều r&uacute;t ra sau trận đấu.</span></p>',
                'body' => '<p style="margin: 0px 0px 20px; padding: 0px; list-style: none; outline: 0px; line-height: 24px; box-sizing: border-box; border: 0px; font-size: 15px; vertical-align: top; background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; text-align: justify; font-family: robotoslab-regular;"><strong style="margin: 0px 0px 15px; padding: 0px; list-style: none; outline: 0px; line-height: 24px; box-sizing: border-box; border: 0px; vertical-align: top; background: 0px 0px;">Khu&ocirc;n mặt của Pochettino</strong></p>
<p style="margin: 0px 0px 20px; padding: 0px; list-style: none; outline: 0px; line-height: 24px; box-sizing: border-box; border: 0px; font-size: 15px; vertical-align: top; background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; text-align: justify; font-family: robotoslab-regular;">C&aacute;ch đ&acirc;y &iacute;t l&acirc;u, đ&iacute;ch th&acirc;n HLV&nbsp;Mauricio Pochettino từng l&ecirc;n tiếng thừa nhận m&ugrave;a giải năm nay mang đến cho &ocirc;ng một thứ cảm gi&aacute;c tồi tệ nhất từ trước đến giờ. C&oacute; thể hiểu được điều n&agrave;y&nbsp;khi m&agrave;&nbsp;Tottenham Hotspur đ&atilde; trải qua một khởi đầu cực k&eacute;m cỏi tại Champions League với 2 trận to&agrave;n thua trước Inter Milan v&agrave; Barcelona cũng như việc khai trương SVĐ White Hart Lane sau khi được đại tu bị dời lại đến 2019.</p>
<figure class="expNoEdit" style="padding: 0px; list-style: none; outline: 0px; line-height: 24px; box-sizing: border-box; border: 0px; font-size: 15px; vertical-align: top; background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; width: 630px; text-align: center; font-family: robotoslab-regular; margin: 0px auto 8px !important;"><img style="padding: 0px; list-style: none; outline: 0px; line-height: 24px; box-sizing: border-box; border: 0px; vertical-align: top; background: 0px 0px; object-fit: cover; max-width: 100%; margin: 0px !important; height: auto !important;" src="http://media.bongda.com.vn/files/tu.dao/2018/10/30/_n0y08570-1141.jpg" alt="Dư &acirc;m đại chiến Man City - Tottenham: 5 điều cần biết - B&oacute;ng Đ&aacute;" width="1024" height="768" />
<figcaption style="margin: 0px; padding: 3px; list-style: none; outline: 0px; line-height: 24px; box-sizing: border-box; border: 0px; vertical-align: top; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-style: italic;">
<h2 class="expEdit" style="margin: 0px; padding: 0px; list-style: none; outline: 0px; line-height: 24px; box-sizing: border-box; border: 0px; font-size: 15px; vertical-align: top; background: 0px 0px; font-weight: 400; display: inline;">C&oacute; vẻ như Pochettino đang kh&ocirc;ng hạnh ph&uacute;c.</h2>
</figcaption>
</figure>
<p style="margin: 0px 0px 20px; padding: 0px; list-style: none; outline: 0px; line-height: 24px; box-sizing: border-box; border: 0px; font-size: 15px; vertical-align: top; background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; text-align: justify; font-family: robotoslab-regular;">Trong bối cảnh n&agrave;y, một trận thắng trước nh&agrave; ĐKVĐ&nbsp;<a class="hyperlink" style="margin: 0px; padding: 0px; list-style: none; outline: 0px; line-height: 24px; box-sizing: border-box; text-decoration-line: none; vertical-align: baseline; background: 0px 0px; cursor: pointer; color: #099adb; display: inline !important;" href="http://www.bongda.com.vn/Manchester+City-search/" target="_blank" rel="noopener">Manchester City</a>&nbsp;c&oacute; thể gi&uacute;p &iacute;ch rất nhiều. Thế nhưng thực tế, Spurs đ&atilde; thất bại v&agrave;&nbsp;n&oacute;&nbsp;chỉ l&agrave;m chiến lược gia người Argentina cảm thấy mệt mỏi hơn m&agrave; th&ocirc;i. Điều n&agrave;y đặc biệt "nguy hiểm" khi gần đ&acirc;y giới truyền th&ocirc;ng li&ecirc;n tục đưa tin&nbsp;<a class="hyperlink" style="margin: 0px; padding: 0px; list-style: none; outline: 0px; line-height: 24px; box-sizing: border-box; text-decoration-line: none; vertical-align: baseline; background: 0px 0px; cursor: pointer; color: #099adb; display: inline !important;" href="http://www.bongda.com.vn/pochettino-dang-dat-nhung-vien-gach-dau-tien-tai-real-madrid-d470606.html" target="_blank" rel="noopener">Real Madrid đang muốn mang &ocirc;ng về</a>&nbsp;tiếp quản chiếc ghế m&agrave; Lopetegui để lại. Hiển nhi&ecirc;n, kh&ocirc;ng c&oacute; lửa l&agrave;m sao c&oacute; kh&oacute;i.</p>
<div id="ads_55" class="adv" style="margin: 0px; padding: 0px; list-style: none; outline: 0px; line-height: 24px; box-sizing: border-box; border: 0px; font-size: 15px; vertical-align: top; background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; text-align: center; overflow: hidden; font-family: robotoslab-regular;">
<div class="e" style="margin: 0px; padding: 0px; list-style: none; outline: 0px; line-height: 24px; box-sizing: border-box; border: 0px; vertical-align: top; background: 0px 0px;">&nbsp;</div>
</div>
<div class="new_relation_top pkg in-article-related-news" style="margin: 0px -10px 10px; padding: 0px 10px; list-style: none; outline: 0px; line-height: 24px; box-sizing: border-box; border: 0px #bababa; font-size: 15px; vertical-align: top; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; position: relative; font-family: robotoslab-regular;">&nbsp;</div>
<p style="margin: 0px 0px 20px; padding: 0px; list-style: none; outline: 0px; line-height: 24px; box-sizing: border-box; border: 0px; font-size: 15px; vertical-align: top; background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; text-align: justify; font-family: robotoslab-regular;"><strong style="margin: 0px 0px 15px; padding: 0px; list-style: none; outline: 0px; line-height: 24px; box-sizing: border-box; border: 0px; vertical-align: top; background: 0px 0px;">Mặt s&acirc;n ảnh hướng lớn đến m&agrave;n tr&igrave;nh diễn của cả hai đội</strong></p>
<p style="margin: 0px 0px 20px; padding: 0px; list-style: none; outline: 0px; line-height: 24px; box-sizing: border-box; border: 0px; font-size: 15px; vertical-align: top; background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; text-align: justify; font-family: robotoslab-regular;">Tottenham vẫn đang l&agrave; một kẻ "v&ocirc; gia cư", bởi thế họ mới phải gặp City tại Wembley, nơi m&agrave; chỉ 24 giờ trước c&ograve;n diễn ra trận b&oacute;ng bầu dục giữa&nbsp;Philadelphia Eagles v&agrave;&nbsp;Jacksonville Jaguars. Mặt cỏ bị xới l&ecirc;n, k&egrave;m theo những đường kẻ c&ugrave;ng logo NFL vẫn c&ograve;n hiện r&otilde; đ&atilde; ảnh hưởng rất lớn tới chất lượng chuy&ecirc;n m&ocirc;n của trận đấu. Chuy&ecirc;n gia của đ&agrave;i BBC Radio 5 thậm ch&iacute; c&ograve;n nhận định mặt cỏ n&agrave;y kh&ocirc;ng xứng đ&aacute;ng l&agrave;m nơi diễn ra một trận đấu của Premier League. C&ograve;n Erik Lamela, anh ho&agrave;n to&agrave;n c&oacute; thể đổ lỗi cho mặt s&acirc;n khi kh&ocirc;ng thể mang về b&agrave;n thắng muộn cho đội nh&agrave;.</p>
<figure class="expNoEdit" style="padding: 0px; list-style: none; outline: 0px; line-height: 24px; box-sizing: border-box; border: 0px; font-size: 15px; vertical-align: top; background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; width: 630px; text-align: center; font-family: robotoslab-regular; margin: 0px auto 8px !important;"><img style="padding: 0px; list-style: none; outline: 0px; line-height: 24px; box-sizing: border-box; border: 0px; vertical-align: top; background: 0px 0px; object-fit: cover; max-width: 100%; margin: 0px !important; height: auto !important;" src="http://media.bongda.com.vn/files/tu.dao/2018/10/30/_n0y08570-2127-1141.jpg" alt="Dư &acirc;m đại chiến Man City - Tottenham: 5 điều cần biết - B&oacute;ng Đ&aacute;" width="640" height="365" />
<figcaption style="margin: 0px; padding: 3px; list-style: none; outline: 0px; line-height: 24px; box-sizing: border-box; border: 0px; vertical-align: top; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-style: italic;">
<h2 class="expEdit" style="margin: 0px; padding: 0px; list-style: none; outline: 0px; line-height: 24px; box-sizing: border-box; border: 0px; font-size: 15px; vertical-align: top; background: 0px 0px; font-weight: 400; display: inline;">Mặt s&acirc;n xấu của Wembley ảnh hưởng rất nhiều đến chất lượng trận đấu.</h2>
</figcaption>
</figure>
<p style="margin: 0px 0px 20px; padding: 0px; list-style: none; outline: 0px; line-height: 24px; box-sizing: border-box; border: 0px; font-size: 15px; vertical-align: top; background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; text-align: justify; font-family: robotoslab-regular;"><strong style="margin: 0px 0px 15px; padding: 0px; list-style: none; outline: 0px; line-height: 24px; box-sizing: border-box; border: 0px; vertical-align: top; background: 0px 0px;">The Citizens chơi qu&aacute; "mượt"</strong></p>
<p style="margin: 0px 0px 20px; padding: 0px; list-style: none; outline: 0px; line-height: 24px; box-sizing: border-box; border: 0px; font-size: 15px; vertical-align: top; background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; text-align: justify; font-family: robotoslab-regular;">Bất chấp mặt s&acirc;n rất xấu thế nhưng dường như City &iacute;t bị ảnh hưởng hơn so với Tottenham, đặc biệt l&agrave; ở b&agrave;n thắng đầu ti&ecirc;n. Từ đường ph&aacute;t b&oacute;ng của Ederson, c&uacute; đ&aacute;nh đầu hụt của&nbsp;Kieran Trippier đ&atilde; tạo điều kiện để Raheem Sterling c&oacute; một pha solo "thần th&aacute;nh" trước khi căng b&oacute;ng cực "ngọt" gi&uacute;p Riyah Mahrez dễ d&agrave;ng s&uacute;t tung lưới thủ th&agrave;nh Hugo Lloris. Sau khi ghi b&agrave;n, cựu tiền vệ Leicester đ&atilde; c&oacute; một h&agrave;nh động rất đẹp khi chỉ tay l&ecirc;n trời nhằm tưởng nhớ tới &ocirc;ng chủ cũ&nbsp;Vichai Srivaddhanaprabha - người đ&atilde; kh&ocirc;ng may&nbsp;<a class="hyperlink" style="margin: 0px; padding: 0px; list-style: none; outline: 0px; line-height: 24px; box-sizing: border-box; text-decoration-line: none; vertical-align: baseline; background: 0px 0px; cursor: pointer; color: #099adb; display: inline !important;" href="http://www.bongda.com.vn/chu-tich-vichai-di-that-roi-bau-khong-khi-tan-thuong-bao-trum-leicester-d470644.html" target="_blank" rel="noopener">tử nạn trong vụ rơi trực thăng</a>&nbsp;h&ocirc;m thứ bảy vừa qua.</p>
<p style="margin: 0px 0px 20px; padding: 0px; list-style: none; outline: 0px; line-height: 24px; box-sizing: border-box; border: 0px; font-size: 15px; vertical-align: top; background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; text-align: justify; font-family: robotoslab-regular;"><strong style="margin: 0px 0px 15px; padding: 0px; list-style: none; outline: 0px; line-height: 24px; box-sizing: border-box; border: 0px; vertical-align: top; background: 0px 0px;">Man City vẫn cần Silva</strong></p>
<p style="margin: 0px 0px 20px; padding: 0px; list-style: none; outline: 0px; line-height: 24px; box-sizing: border-box; border: 0px; font-size: 15px; vertical-align: top; background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; text-align: justify; font-family: robotoslab-regular;">Với David Silva, c&oacute; vẻ như d&ugrave; mặt s&acirc;n tệ hại của Wembley hay thảm cỏ mượt m&agrave; tr&ecirc;n Etihad với anh cũng chẳng c&oacute; g&igrave; kh&aacute;c biệt. Ch&agrave;ng trai người T&acirc;y Ban Nha vẫn di chuyển một c&aacute;ch thanh tho&aacute;t đồng thời l&agrave;m chủ tuyến giữa một c&aacute;ch chắc chắn, qua đ&oacute; g&oacute;p phần kh&ocirc;ng nhỏ v&agrave;o chiến thắng ng&agrave;y h&ocirc;m nay của c&aacute;c vị kh&aacute;ch.&nbsp;&nbsp;</p>
<p style="margin: 0px 0px 20px; padding: 0px; list-style: none; outline: 0px; line-height: 24px; box-sizing: border-box; border: 0px; font-size: 15px; vertical-align: top; background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; text-align: justify; font-family: robotoslab-regular;"><strong style="margin: 0px 0px 15px; padding: 0px; list-style: none; outline: 0px; line-height: 24px; box-sizing: border-box; border: 0px; vertical-align: top; background: 0px 0px;">Mối lo lực lượng</strong></p>
<figure class="expNoEdit" style="padding: 0px; list-style: none; outline: 0px; line-height: 24px; box-sizing: border-box; border: 0px; font-size: 15px; vertical-align: top; background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; width: 630px; text-align: center; font-family: robotoslab-regular; margin: 0px auto 8px !important;"><img style="padding: 0px; list-style: none; outline: 0px; line-height: 24px; box-sizing: border-box; border: 0px; vertical-align: top; background: 0px 0px; object-fit: cover; max-width: 100%; margin: 0px !important; height: auto !important;" src="http://media.bongda.com.vn/files/tu.dao/2018/10/30/5aa7d6f4526855b291000004-1142.jpg" alt="Dư &acirc;m đại chiến Man City - Tottenham: 5 điều cần biết - B&oacute;ng Đ&aacute;" width="640" height="410" />
<figcaption style="margin: 0px; padding: 3px; list-style: none; outline: 0px; line-height: 24px; box-sizing: border-box; border: 0px; vertical-align: top; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-style: italic;">
<h2 class="expEdit" style="margin: 0px; padding: 0px; list-style: none; outline: 0px; line-height: 24px; box-sizing: border-box; border: 0px; font-size: 15px; vertical-align: top; background: 0px 0px; font-weight: 400; display: inline;">Liệu Pochettino c&oacute; quyết định mạo hiểm với chiếc c&uacute;p khả dĩ nhất của m&igrave;nh?</h2>
</figcaption>
</figure>
<p style="margin: 0px 0px 20px; padding: 0px; list-style: none; outline: 0px; line-height: 24px; box-sizing: border-box; border: 0px; font-size: 15px; vertical-align: top; background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; text-align: justify; font-family: robotoslab-regular;">Dư &acirc;m thất bại vẫn chưa ngu&ocirc;i, Pochettino lại tiếp tục phải đối mặt với b&agrave;i to&aacute;n c&acirc;n đối lực lượng vốn cực kỳ "eo hẹp" của Tottenham khi chỉ hai ng&agrave;y nữa, họ sẽ lại bước v&agrave;o trận derby th&agrave;nh London với West Ham trong khu&ocirc;n khổ c&uacute;p Li&ecirc;n đo&agrave;n Anh.&nbsp;</p>
<p style="margin: 0px 0px 20px; padding: 0px; list-style: none; outline: 0px; line-height: 24px; box-sizing: border-box; border: 0px; font-size: 15px; vertical-align: top; background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; text-align: justify; font-family: robotoslab-regular;">Kể từ khi ngồi l&ecirc;n chiếc ghế quyền lực ở Wembley, d&ugrave; được c&ocirc;ng nhận t&agrave;i năng thế nhưng vị HLV 46 tuổi n&agrave;y vẫn chưa gi&agrave;nh được một danh hiệu n&agrave;o cả. Vậy th&igrave; liệu &ocirc;ng c&oacute; n&ecirc;n mạo hiểm cho c&aacute;c trụ cột nghỉ ngơi v&agrave; chấp nhận mạo hiểm với danh hiệu khả dĩ nhất của m&igrave;nh, đặc biệt&nbsp;l&agrave; khi r&otilde; r&agrave;ng để c&oacute; được hai chiếc c&uacute;p c&ograve;n lại l&agrave; kh&oacute; khăn hơn rất nhiều?</p>',
                'image' => '_n0y08570-1141_1540890258.jpg',
                'views' => 4,
                'categories_id' => 1,
                'user_id' => 7,
                'Breaking_news' => 0,
                'created_at' => '2018-10-30 16:04:18',
                'updated_at' => '2018-11-16 15:05:48',
            ),
        ));
        
        
    }
}