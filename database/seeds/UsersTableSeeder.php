<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('credentials')->truncate();

        $admin = new \VMN\Contracts\Auth\Credential();
        $admin->name         = 'iamadmin';
        $admin->email        = 'tientoantai@vmn.com';
        $admin->password     = Hash::make('tiennm');
        $admin->role         = 'admin';
        $admin->status       = 'active';
        $admin->avatar       = 'assets/img/default/avatar.jpg';
        $admin->save();

        $user = new \VMN\Contracts\Auth\Credential();
        $user->name         = 'Rikky';
        $user->email        = 'sonvl@vnvalley.com';
        $user->password     = Hash::make('sonvl');
        $user->role         = 'mod';
        $user->status       = 'active';
        $user->avatar       = 'assets/img/default/avatar.jpg';
        $user->save();
        $user1 = new \VMN\Contracts\Auth\Credential();
        $user1->name        = 'TienNM';
        $user1->email       = 'tiennmse02545@fpt.edu.vn';
        $user1->password    = Hash::make('tiennm');
        $user1->role        = 'mod';
        $user1->status      = 'active';
        $user1->avatar      = 'assets/img/default/avatar.jpg';
        $user1->save();
        
        $user2 = new \VMN\Contracts\Auth\Credential();
        $user2->name        = 'shinji';
        $user2->email       = 'waynerooney_hotboysanco@yahoo.com';
        $user2->password    = Hash::make('tiennm');
        $user2->role        = 'member';
        $user2->status        = 'active';
        $user2->avatar      = 'assets/img/default/avatar.jpg';
        $user2->save();

        $user3 = new \VMN\Contracts\Auth\Credential();
        $user3->name        = 'thoxuanduong';
        $user3->email       = 'dongy@thoxuanduong.com';
        $user3->password    = Hash::make('tiennm');
        $user3->role        = 'store';
        $user3->status      = 'active';
        $user3->avatar      = 'assets/img/default/avatar.jpg';
        $user3->save();

        $user4 = new \VMN\Contracts\Auth\Credential();
        $user4->name        = 'dongyhangcot';
        $user4->email       = 'boymanu94@gmail.com';
        $user4->password    = Hash::make('tiennm');
        $user4->role        = 'store';
        $user4->avatar      = 'assets/img/default/avatar.jpg';
        $user4->status      = 'wait';
        $user4->save();

        $user5 = new \VMN\Contracts\Auth\Credential();
        $user5->name        = 'quynhht';
        $user5->email       = 'quynhhtse02639@fpt.edu.vn';
        $user5->password    = Hash::make('quynhht');
        $user5->role        = 'member';
        $user5->status      = 'active';
        $user5->avatar      = 'assets/img/default/avatar.jpg';
        $user5->save();

        $user6 = new \VMN\Contracts\Auth\Credential();
        $user6->name        = 'khanhtb';
        $user6->email       = 'khanhtbse02764@fpt.edu.vn';
        $user6->password    = Hash::make('khanhtb');
        $user6->role        = 'member';
        $user6->status      = 'active';
        $user6->avatar      = 'assets/img/default/avatar.jpg';
        $user6->save();

        $user7 = new \VMN\Contracts\Auth\Credential();
        $user7->name        = 'dangnh';
        $user7->email       = 'dangnhse02992@fpt.edu.vn';
        $user7->password    = Hash::make('dangnh');
        $user7->role        = 'member';
        $user7->status      = 'active';
        $user7->avatar      = 'assets/img/default/avatar.jpg';
        $user7->save();
    }
}
