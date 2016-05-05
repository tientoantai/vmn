<?php

use Illuminate\Database\Seeder;

class StoreTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('herbal_medicine_stores')->truncate();

        $store = new \VMN\Auth\HerbalMedicineStore();
        $store->setAttribute('accountName', 'thoxuanduong');
        $store->setAttribute('email', 'dongy@thoxuanduong.com');
        $store->setAttribute('storename', 'NHÀ THUỐC ĐÔNG Y GIA TRUYỀN THỌ XUÂN ĐƯỜNG');
        $store->setAttribute('address','99 phố Vồi, Huyện Thường Tín, Thành Phố Hà Nội, Việt Nam');
        $store->setAttribute('phonenumber', '04 3385 3321');
        $store->setAttribute('representative', 'Lương y Phùng Tuấn Giang');
        $store->setAttribute('avatar', 'assets/img/default/avatar.jpg');

        $store->save();

        $store1 = new \VMN\Auth\HerbalMedicineStore();
        $store1->setAttribute('accountName', 'dongyhangcot');
        $store1->setAttribute('email', 'boymanu94@gmail.com');
        $store1->setAttribute('storename', 'Nhà Thuốc Đông Y Gia Truyền 15 Hàng Cót - Hà Nội');
        $store1->setAttribute('address','15 Hàng Cót, Hoàn Kiếm, Thành Phố Hà Nội, Việt Nam');
        $store1->setAttribute('phonenumber', '04 8281932');
        $store1->setAttribute('representative', 'Lương y Nguyễn Huy Tiến');
        $store1->setAttribute('avatar', 'assets/img/default/avatar.jpg');

        $store1->save();

        $store2 = new \VMN\Auth\HerbalMedicineStore();
        $store2->setAttribute('accountName', 'vanxuanduong');
        $store2->setAttribute('email', 'boymanu98@gmail.com');
        $store2->setAttribute('storename', 'Nhà Thuốc Đông Y Vạn Xuân Đường - Đống Đa');
        $store2->setAttribute('address','số 18 Ngõ 35 Cát Linh - Đống Đa - Hà Nội');
        $store2->setAttribute('phonenumber', '04.6660.6153');
        $store2->setAttribute('representative', 'Lương y Nguyễn Cường Long');
        $store2->setAttribute('avatar', 'assets/img/default/avatar.jpg');

        $store2->save();

        $store3 = new \VMN\Auth\HerbalMedicineStore();
        $store3->setAttribute('accountName', 'phuchungduong');
        $store3->setAttribute('email', 'boymanu99@gmail.com');
        $store3->setAttribute('storename', 'Nhà Thuốc Đông Y Phúc Hưng Đường');
        $store3->setAttribute('address','111 A1, Nguyễn Quý Đức, Q. Thanh Xuân');
        $store3->setAttribute('phonenumber', '04.66 743 195');
        $store3->setAttribute('representative', 'Dược sỹ Tào Văn Chiến');
        $store3->setAttribute('avatar', 'assets/img/default/avatar.jpg');

        $store3->save();

        $store4 = new \VMN\Auth\HerbalMedicineStore();
        $store4->setAttribute('accountName', 'hoabaoduong');
        $store4->setAttribute('email', 'boymanu96@gmail.com');
        $store4->setAttribute('storename', 'Nhà Thuốc Gia Truyền Việt Nam - Đông y Hoa Bảo Đường');
        $store4->setAttribute('address','ngõ 102, Khuất Duy Tiến, Thanh Xuân, Hà Nội');
        $store4->setAttribute('phonenumber', '0916.309.186');
        $store4->setAttribute('representative', 'Dược sỹ Trương Quân Bảo');
        $store4->setAttribute('avatar', 'assets/img/default/avatar.jpg');

        $store4->save();

        $store5 = new \VMN\Auth\HerbalMedicineStore();
        $store5->setAttribute('accountName', 'danphuong');
        $store5->setAttribute('email', 'boymanu91@gmail.com');
        $store5->setAttribute('storename', 'Nhà Thuốc ĐÔNG Y GIA TRUYỀN ĐAN PHƯƠNG');
        $store5->setAttribute('address','Số nhà 42, BT8, khu đô thị Văn Quán, quận Hà Đông,Hà Nội.');
        $store5->setAttribute('phonenumber', '04 38589358');
        $store5->setAttribute('representative', 'Dược sĩ chuyên sâu y học cổ truyền Nguyễn Thị Phương (Đan Phương).');
        $store5->setAttribute('avatar', 'assets/img/default/avatar.jpg');

        $store5->save();


    }
}
