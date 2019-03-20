<?php

use Illuminate\Database\Seeder;

class Area_AsignaturaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return voarea_fk
     */
    public function run()
    {
        //AREA TÈCNICA
        DB::table('area_asignatura')->insert([
            'area_fk'=>'1',
            'asignatura_fk'=>'1',
        ]);
        DB::table('area_asignatura')->insert([
            'area_fk'=>'1',
            'asignatura_fk'=>'2',
        ]);
        DB::table('area_asignatura')->insert([
            'area_fk'=>'1',
            'asignatura_fk'=>'3',
        ]);
        DB::table('area_asignatura')->insert([
            'area_fk'=>'1',
            'asignatura_fk'=>'4',
        ]);
        DB::table('area_asignatura')->insert([
            'area_fk'=>'1',
            'asignatura_fk'=>'5',
        ]);
        DB::table('area_asignatura')->insert([
            'area_fk'=>'1',
            'asignatura_fk'=>'6',
        ]);
        DB::table('area_asignatura')->insert([
            'area_fk'=>'1',
            'asignatura_fk'=>'7',
        ]);
        DB::table('area_asignatura')->insert([
            'area_fk'=>'1',
            'asignatura_fk'=>'8',
        ]);
        DB::table('area_asignatura')->insert([
            'area_fk'=>'1',
            'asignatura_fk'=>'9',
        ]);
        DB::table('area_asignatura')->insert([
            'area_fk'=>'1',
            'asignatura_fk'=>'10',
        ]);
        //AREA BIOLÒGICA Y BIOMÈDICA
        DB::table('area_asignatura')->insert([
            'area_fk'=>'2',
            'asignatura_fk'=>'1',
        ]);
        DB::table('area_asignatura')->insert([
            'area_fk'=>'2',
            'asignatura_fk'=>'2',
        ]);
        //AREA ADMINISTRATIVA
        DB::table('area_asignatura')->insert([
            'area_fk'=>'3',
            'asignatura_fk'=>'1',
        ]);
        DB::table('area_asignatura')->insert([
            'area_fk'=>'3',
            'asignatura_fk'=>'2',
        ]);
        //AREA SOCIOHUMANISTICA
        DB::table('area_asignatura')->insert([
            'area_fk'=>'4',
            'asignatura_fk'=>'1',
        ]);
        DB::table('area_asignatura')->insert([
            'area_fk'=>'4',
            'asignatura_fk'=>'2',
        ]);
    }
}
