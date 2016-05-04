<?php

use Illuminate\Database\Seeder;

class remedyIngredientsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('remedy_ingredients')->truncate();
        DB::table('remedy_ingredients')->insert([
            'remedyId' => 1,
            'medicinalPlantId' => 1,
            'medicinalPlantName' => 'Ngải cứu',
            'dosage'=> '16'
        ]);
        DB::table('remedy_ingredients')->insert([
            'remedyId' => 1,
            'medicinalPlantId' => 2,
            'medicinalPlantName' => 'Tía tô',
            'dosage'=> '16'
        ]);
        DB::table('remedy_ingredients')->insert([
            'remedyId' => 2,
            'medicinalPlantId' => 3,
            'medicinalPlantName' => 'Nhọ Nồi',
            'dosage'=> ''
        ]);

        DB::table('remedy_ingredients')->insert([
            'remedyId' => 3,
            'medicinalPlantId' => 7,
            'medicinalPlantName' => 'Lược vàng',
            'dosage'=> '50'
        ]);

        DB::table('remedy_ingredients')->insert([
            'remedyId' => 4,
            'medicinalPlantId' => 7,
            'medicinalPlantName' => 'Lược vàng',
            'dosage'=> ''
        ]);

        DB::table('remedy_ingredients')->insert([
            'remedyId' => 5,
            'medicinalPlantId' => 5,
            'medicinalPlantName' => 'Đỗ đen',
            'dosage'=> ''
        ]);

        DB::table('remedy_ingredients')->insert([
            'remedyId' => 6,
            'medicinalPlantId' => 6,
            'medicinalPlantName' => 'Đỗ xanh',
            'dosage'=> ''
        ]);
    }
}
