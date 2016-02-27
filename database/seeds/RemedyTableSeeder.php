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
        DB::table('medicinal_plants')->truncate();

        $remedy = new \VMN\Article\Remedy();
        $remedy->title          = 'Bài thuốc chữa viêm đại tràng từ nghệ và ngải cứu';
        $remedy->ingredients    = '1- Mật lợn tươi: 1 cái (lợn có trọng lượng từ 70kg đến 100kg).
                                    2- Nghệ vàng tươi: 02 lạng
                                    3- Mật ong: 30ml
                                    4- Ngải cứu tươi: 5 bó to ( Tương đương với khoảng 500g).';
        $remedy->description    = 'Nghệ tươi và ngải cứu rửa sạch, cắt nhỏ cho vào máy xay sinh tố xay cùng với 0,5 lít nước thật nhuyễn. Sau đó lọc qua vải phin lấy nước. Bã bỏ đi. Mật lợn lọc lấy nước (Vì mật lợn hay có sạn sỏi bên trong). Cho tất cả phần nước hỗn hợp nghệ + ngải cứu + nước mật lợn+ mật ong vào môt nồi, quấy đều, đun nhỏ lửa để cô lại thành cao. Cho phần cao đó vào một cái lọ bảo quản trong ngăn mát tủ lạnh để sử dụng dần.';
        $remedy->note           = 'Để tránh mất thời gian và đủ lượng dùng, ta nên làm một lần với tỷ lệ trên cho 4 hoặc 5 cái mật lợn.';
        $remedy->usage          = 'chữa viêm đại tràng';
        $remedy->utility        = 'Mỗi ngày 2 lần: Sáng và tối, uống vào trước bữa ăn 30 phút. Liều lượng mỗi lần 1 viên to như hạt lạc là đủ.';
        $remedy->ratingPoint    = 3;
        $remedy->thumbnailUrl   = '1.jpg';
        $remedy->imgUrl         = json_encode(['1.jpg','2.jpg']);
        $remedy->save();

    }
}
