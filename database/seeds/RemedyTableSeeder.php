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

    }
}
