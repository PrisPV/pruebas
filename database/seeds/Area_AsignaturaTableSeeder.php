<?php

use Illuminate\Database\Seeder;

class Area_AsignaturaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('area_asignatura')->insert([
            'area_id'=>'1',
            'asignatura_fk'=>'1',
        ]);
        DB::table('area_asignatura')->insert([
            'area_id'=>'1',
            'asignatura_fk'=>'2',
        ]);
        DB::table('area_asignatura')->insert([
            'area_id'=>'1',
            'asignatura_fk'=>'3',
        ]);
        DB::table('area_asignatura')->insert([
            'area_id'=>'1',
            'asignatura_fk'=>'4',
        ]);
    }
}
