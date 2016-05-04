<?php

use Illuminate\Database\Seeder;

class RemedyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('remedies')->truncate();

        $remedy = new \VMN\Article\Remedy();
        $remedy->title          = 'Bài thuốc giúp an thai từ ngải cứu';
        $remedy->description    = 'nếu thấy có hiện tượng đau bụng, ra máu, dùng 16gr lá ngải cứu, 16gr lá tía tô, sắc cùng với 600ml nước, sắc còn 100ml.';
        $remedy->note           = 'Ngải cứu không có tác dụng kích thích với tử cung có thai nên không gây sảy thai.';
        $remedy->usage          = 'Chia làm 3-4 lần uống/ngày';
        $remedy->utility        = 'An thai';
        $remedy->ratingPoint    = 3;
        $remedy->ratingTime     = 1;
        $remedy->ingredients    = "Ngải cứu:1, Tía tô:2";
        $remedy->thumbnailUrl   = 'ImgSample/tiacmnto.png';
        $remedy->imgUrl         = json_encode(['ImgSample/tiacmnto.png','ImgSample/ngai-cuu1.jpg','ImgSample/tiato2.jpg']);
        $remedy->author         = 'shinji';
        $remedy->save();

        $remedy1 = new \VMN\Article\Remedy();
        $remedy1->title          = 'Chữa tiểu ra máu bằng nhọ nồi';
        $remedy1->description    = 'Cỏ nhọ nồi nướng trên miếng ngói sạch cho khô, tán bột';
        $remedy1->note           = 'Dùng 2 chỉ (8g) với nước cơm';
        $remedy1->usage          = 'Chia làm nhiều lần dùng trong ngày';
        $remedy1->utility        = 'Chữa tiểu ra máu';
        $remedy1->ratingPoint    = 3;
        $remedy1->ratingTime     = 1;
        $remedy1->ingredients    = "Nhọ nồi:3";
        $remedy1->thumbnailUrl   = 'ImgSample/nhonoi2.jpg';
        $remedy1->imgUrl         = json_encode(['ImgSample/nhonoi2.jpg','ImgSample/nuocCom.jpg']);
        $remedy1->author         = 'shinji';
        $remedy1->save();

        $remedy2 = new \VMN\Article\Remedy();
        $remedy2->title          = 'Chữa đau dạ dày bằng lược vàng';
        $remedy2->description    = '50gr lá lược vàng tươi giã nất chắt lấy  nước cốt và một giọt mật gấu ăn sống';
        $remedy2->note           = 'có thể ăn cả bã lược vàng cũng tốt';
        $remedy2->usage          = '1 ngày dùng một lần lúc đói liên tục trong 1 tháng';
        $remedy2->utility        = 'Chữa đau dạ dày';
        $remedy2->ratingPoint    = 3;
        $remedy2->ratingTime     = 2;
        $remedy2->ingredients    = "Lực vàng:7";
        $remedy2->thumbnailUrl   = 'ImgSample/mat-gau-16.jpg';
        $remedy2->imgUrl         = json_encode(['ImgSample/mat-gau-16.jpg','ImgSample/luocvang.jpg']);
        $remedy2->author         = 'tiennm';
        $remedy2->save();

        $remedy3 = new \VMN\Article\Remedy();
        $remedy3->title          = 'Chữa sưng chân răng và nhức răng bằng lược vàng';
        $remedy3->description    = 'Bị sưng mộng răng, nhức nhối, má xưng như lên quai bị... Dùng 3 lá lược vàng nhai kĩ nuốt nước, còn bã đẩy nhẹ vào chỗ chân răng đau ngậm';
        $remedy3->note           = 'có thể ăn cả bã lược vàng cũng tốt';
        $remedy3->usage          = 'Một ngày làm 3 lần như vậy (sáng, trưa, tối) trước lúc ăn cơm. Làm trong 3 ngày';
        $remedy3->utility        = 'Chữa sưng chân răng và nhức răng';
        $remedy3->ratingPoint    = 5;
        $remedy3->ratingTime     = 2;
        $remedy3->ingredients    = "Lược vàng:7";
        $remedy3->thumbnailUrl   = 'ImgSample/luocvang1.jpg';
        $remedy3->imgUrl         = json_encode(['ImgSample/luocvang1.jpg','ImgSample/luocvang.jpg']);
        $remedy3->author         = 'tiennm';
        $remedy3->save();

        $remedy4 = new \VMN\Article\Remedy();
        $remedy4->title          = 'Trị mất ngủ với đậu đen';
        $remedy4->description    = 'Đậu đen rang nóng cho vào 1 cái túi đen để gối đầu';
        $remedy4->note           = '';
        $remedy4->usage          = 'Để túi đậu đen rang nóng dưới gối, khi nguội lại thay';
        $remedy4->utility        = 'Trị mất ngủ';
        $remedy4->ratingPoint    = 5;
        $remedy4->ratingTime     = 2;
        $remedy4->ingredients    = "Đỗ đen:5";
        $remedy4->thumbnailUrl   = 'ImgSample/dodenrang.jpg';
        $remedy4->imgUrl         = json_encode(['ImgSample/dodenrang.jpg','ImgSample/doden21.jpg','ImgSample/doden.jpg']);
        $remedy4->author         = 'tiennm';
        $remedy4->save();

        $remedy5 = new \VMN\Article\Remedy();
        $remedy5->title          = 'Gây nôn khi ngộ độc thức ăn';
        $remedy5->description    = 'Ngâm đậu xanh trong nước cho đến khi đậu nở, nghiền nát đậu hòa với nước ngâm';
        $remedy5->note           = '';
        $remedy5->usage          = 'Uống trực tiếp';
        $remedy5->utility        = 'Gây nôn';
        $remedy5->ratingPoint    = 5;
        $remedy5->ratingTime     = 2;
        $remedy5->ingredients    = "Đỗ xanh:6";
        $remedy5->thumbnailUrl   = 'ImgSample/doxanhngam.jpg';
        $remedy5->imgUrl         = json_encode(['ImgSample/doxanhngam.jpg','ImgSample/doxanh.jpg']);
        $remedy5->author         = 'tiennm';
        $remedy5->save();

        $remedy6 = new \VMN\Article\Remedy();
        $remedy6->title          = 'Chữa tiêu chảy với mã đề và rau má';
        $remedy6->description    = 'Mã đề tươi 1-2 nắm, rau má tươi 1 nắm, cỏ nhọ nồi tươi 1 nắm. Sắc đặc';
        $remedy6->note           = '';
        $remedy6->usage          = 'uống ngày một thang';
        $remedy6->utility        = 'chữa tiêu chảy';
        $remedy6->ratingPoint    = 6;
        $remedy6->ratingTime     = 2;
        $remedy6->ingredients    = "Mã đề:15, Rau má:16, Nhọ nồi:3";
        $remedy6->thumbnailUrl   = 'ImgSample/made_rauma.jpg';
        $remedy6->imgUrl         = json_encode(['ImgSample/made_rauma.jpg','ImgSample/made.jpg', 'ImgSample/rauma.jpg']);
        $remedy6->author         = 'tiennm';
        $remedy6->save();

    }
}
