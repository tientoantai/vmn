<?php

use Illuminate\Database\Seeder;

class ResetDatabase extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('messages')->truncate();
        DB::table('medicinal_plants_history')->truncate();
        DB::table('medicinal_plants_reports')->truncate();
        DB::table('medicinal_plants_reviews')->truncate();
        DB::table('remedies_history')->truncate();
        DB::table('remedies_reports')->truncate();
        DB::table('remedies_reviews')->truncate();
        DB::table('store_prescriptions')->truncate();
    }
}
