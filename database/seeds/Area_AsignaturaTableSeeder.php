<?php

use Illuminate\Database\Seeder;

class Area_AsignaturaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return voarea_id
     */
    public function run()
    {
        //AREA TÈCNICA
        DB::table('area_asignatura')->insert([
            'area_id'=>'1',
            'asignatura_id'=>'1',
        ]);
        DB::table('area_asignatura')->insert([
            'area_id'=>'1',
            'asignatura_id'=>'2',
        ]);
        DB::table('area_asignatura')->insert([
            'area_id'=>'1',
            'asignatura_id'=>'3',
        ]);
        DB::table('area_asignatura')->insert([
            'area_id'=>'1',
            'asignatura_id'=>'4',
        ]);
        DB::table('area_asignatura')->insert([
            'area_id'=>'1',
            'asignatura_id'=>'5',
        ]);
        DB::table('area_asignatura')->insert([
            'area_id'=>'1',
            'asignatura_id'=>'6',
        ]);
        DB::table('area_asignatura')->insert([
            'area_id'=>'1',
            'asignatura_id'=>'7',
        ]);
        DB::table('area_asignatura')->insert([
            'area_id'=>'1',
            'asignatura_id'=>'8',
        ]);
        DB::table('area_asignatura')->insert([
            'area_id'=>'1',
            'asignatura_id'=>'9',
        ]);
        DB::table('area_asignatura')->insert([
            'area_id'=>'1',
            'asignatura_id'=>'10',
        ]);
        //AREA BIOLÒGICA Y BIOMÈDICA
        DB::table('area_asignatura')->insert([
            'area_id'=>'2',
            'asignatura_id'=>'1',
        ]);
        DB::table('area_asignatura')->insert([
            'area_id'=>'2',
            'asignatura_id'=>'2',
        ]);
        //AREA ADMINISTRATIVA
        DB::table('area_asignatura')->insert([
            'area_id'=>'3',
            'asignatura_id'=>'1',
        ]);
        DB::table('area_asignatura')->insert([
            'area_id'=>'3',
            'asignatura_id'=>'2',
        ]);
        //AREA SOCIOHUMANISTICA
        DB::table('area_asignatura')->insert([
            'area_id'=>'4',
            'asignatura_id'=>'1',
        ]);
        DB::table('area_asignatura')->insert([
            'area_id'=>'4',
            'asignatura_id'=>'2',
        ]);
    }
}
