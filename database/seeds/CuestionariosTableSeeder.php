<?php

use Illuminate\Database\Seeder;

class CuestionariosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cuestionarios')->insert([
            'descripcion'=>'Autoevaluación 1',
            'intentos'=>'3',
            'fecha_limite'=>'2019-03-31 23:55:00',
            'hora_limite'=>'23:55:00',
            'estado'=>'Activo',
            'user_id'=>'14',
            'asignatura_id'=>'2',
            'created_at'=> now(),
            'updated_at'=> now(),
        ]);

        DB::table('cuestionarios')->insert([
            'descripcion'=>'Cuestionario Unidad 1',
            'intentos'=>'3',
            'fecha_limite'=>'2019-03-31 23:55:00',
            'hora_limite'=>'23:55:00',
            'estado'=>'Activo',
            'user_id'=>'14',
            'asignatura_id'=>'8',
            'created_at'=> now(),
            'updated_at'=> now(),
        ]);
        DB::table('cuestionarios')->insert([
            'descripcion'=>'Autoevaluación 1',
            'intentos'=>'3',
            'fecha_limite'=>'2019-03-31 23:55:00',
            'hora_limite'=>'23:55:00',
            'estado'=>'Activo',
            'user_id'=>'5',
            'asignatura_id'=>'6',
            'created_at'=> now(),
            'updated_at'=> now(),
        ]);
        DB::table('cuestionarios')->insert([
            'descripcion'=>'Cuestionario Unidad 1',
            'intentos'=>'3',
            'fecha_limite'=>'2019-03-31 23:55:00',
            'hora_limite'=>'23:55:00',
            'estado'=>'Inactivo',
            'user_id'=>'18',
            'asignatura_id'=>'7',
            'created_at'=> now(),
            'updated_at'=> now(),
        ]);
        DB::table('cuestionarios')->insert([
            'descripcion'=>'Autoevaluación 1',
            'intentos'=>'3',
            'fecha_limite'=>'2019-03-31 23:55:00',
            'hora_limite'=>'23:55:00',
            'estado'=>'Inactivo',
            'user_id'=>'9',
            'asignatura_id'=>'5',
            'created_at'=> now(),
            'updated_at'=> now(),
        ]);
    }
}
