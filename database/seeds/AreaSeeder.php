<?php

use Illuminate\Database\Seeder;

class AreaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('areas')->insert([
            'name'=>'Área Técnica',
        ]);
        DB::table('areas')->insert([
            'name'=>'Área Biológica y Biomédica',
        ]);
        DB::table('areas')->insert([
            'name'=>'Área Administrativa',
        ]);
        DB::table('areas')->insert([
            'name'=>'Área Sociohumanística',
        ]);
    }
}
