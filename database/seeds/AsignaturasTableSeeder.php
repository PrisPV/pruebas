<?php

use Illuminate\Database\Seeder;
use App\Asignatura;


class AsignaturasTableSeeder extends Seeder
{
  /**
  * Run the database seeds.
  *
  * @return void
  */
  public function run()
  {
    Asignatura::create([
      'nombre'=>'Informática Básica',
    ]);
    Asignatura::create([
      'nombre'=>'Expresión Oral',
    ]);
    Asignatura::create([
      'nombre'=>'Teoría de Automatas',
    ]);
    Asignatura::create([
      'nombre'=>'Programación Estructurada',
    ]);
    Asignatura::create([
      'nombre'=>'Economía y Finanzas',
    ]);
    Asignatura::create([
      'nombre'=>'Inteligencia Artificial',
    ]);
    Asignatura::create([
      'nombre'=>'Base de datos avanzada',
    ]);
    Asignatura::create([
      'nombre'=>'Ingenería de Requisitos',
    ]);
    Asignatura::create([
      'nombre'=>'Sistemas Operativos',
    ]);
    Asignatura::create([
      'nombre'=>'Control de Calidad',
    ]);
  }
}
