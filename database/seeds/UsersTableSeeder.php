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

        $user = new \VMN\Contracts\Auth\Credential();
        $user->name         = 'Rikky';
        $user->email        = 'sonvl@vnvalley.com';
        $user->password     = Hash::make('sonvl');
        $user->role         = 'mod';
        $user->avatar       = 'assets/img/default/avatar.jpg';
        $user->save();
        $user1 = new \VMN\Contracts\Auth\Credential();
        $user1->name        = 'TienNM';
        $user1->email       = 'tiennmse02545@fpt.edu.vn';
        $user1->password    = Hash::make('tiennm');
        $user1->role        = 'mod';
        $user1->avatar      = 'assets/img/default/avatar.jpg';
        $user1->save();
        $user2 = new \VMN\Contracts\Auth\Credential();
        $user2->name        = 'shinji';
        $user2->email       = 'waynerooney_hotboysanco@yahoo.com';
        $user2->password    = Hash::make('tiennm');
        $user2->role        = 'member';
        $user2->avatar      = 'assets/img/default/avatar.jpg';
        $user2->save();
    }
}
