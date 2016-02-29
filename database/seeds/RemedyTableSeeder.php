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
        $remedy->usage          = 'An thai';
        $remedy->utility        = 'Chia làm 3-4 lần uống/ngày';
        $remedy->ratingPoint    = 3;
        $remedy->thumbnailUrl   = '1.jpg';
        $remedy->imgUrl         = json_encode(['1.jpg','2.jpg']);
        $remedy->save();

    }
}
