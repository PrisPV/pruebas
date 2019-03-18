<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
  /**
  * Seed the application's database.
  *
  * @return void
  */
  public function run()
  {
    //Ejecuta los seeders
    $this->call(RolesTableSeeder::class);
    $this->call(PermissionsTableSeeder::class);
    $this->call(UsersTableSeeder::class);
    $this->call(AreaSeeder::class);
    $this->call(AsignaturasTableSeeder::class);
    $this->call(Area_AsignaturaTableSeeder::class);
    $this->call(Asignatura_UserTableSeeder::class);
    $this->call(Permission_RoleTableSeeder::class);
    $this->call(CuestionariosTableSeeder::class);
    $this->call(PreguntasTableSeeder::class);
    $this->call(OpcionesTableSeeder::class);
  }
}
