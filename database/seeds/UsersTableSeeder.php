<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Role;
use App\User;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
  /**
  * Run the database seeds.
  *
  * @return void
  */
  public function run()
  {
    $user = new User();
    $user->name = 'Administrador';
    $user->email = 'admin@utpl.edu.ec';
    $user->email_verified_at = now();
    $user->password = Hash::make('admin');
    $user->remember_token = str_random(10);
    if($user->save()){
      $role = Role::where('slug','admin')->first();
      $user->roles()->attach($role->id);
    }

    $user = new User();
    $user->name = 'Profesor';
    $user->email = 'profesor@utpl.edu.ec';
    $user->email_verified_at = now();
    $user->password = Hash::make('profesor');
    $user->remember_token = str_random(10);
    if($user->save()){
      $role = Role::where('slug','profesor')->first();
      $user->roles()->attach($role->id);
    }

    $user = new User();
    $user->name = 'Estudiante';
    $user->email = 'estudiante@utpl.edu.ec';
    $user->email_verified_at = now();
    $user->password = Hash::make('estudiante');
    $user->remember_token = str_random(10);
    if($user->save()){
      $role = Role::where('slug','estudiante')->first();
      $user->roles()->attach($role->id);
    }
    $user = new User();
    $user->name = 'Erika Pila';
    $user->email = 'eppila1@utpl.edu.ec';
    $user->email_verified_at = now();
    $user->cedula ='1724523640';
    $user->password = Hash::make('eppila1');
    $user->remember_token = str_random(10);
    if($user->save()){
      $role = Role::where('slug','admin')->first();
      $user->roles()->attach($role->id);
    }
    $user = new User();
    $user->name = 'Andrea Villalba';
    $user->email = 'avillalba@utpl.edu.ec';
    $user->email_verified_at = now();
    $user->cedula ='1720731320';
    $user->password = Hash::make('avillalba');
    $user->remember_token = str_random(10);
    if($user->save()){
      $role = Role::where('slug','profesor')->first();
      $user->roles()->attach($role->id);
    }
    $user = new User();
    $user->name = 'Juan Pablo Cabezas';
    $user->email = 'jpcabezas@utpl.edu.ec';
    $user->email_verified_at = now();
    $user->cedula ='1724476997';
    $user->password = Hash::make('jpcabezas');
    $user->remember_token = str_random(10);
    if($user->save()){
      $role = Role::where('slug','estudiante')->first();
      $user->roles()->attach($role->id);
    }
    $user = new User();
    $user->name = 'Luis Ordonez';
    $user->email = 'lordonez@utpl.edu.ec';
    $user->email_verified_at = now();
    $user->cedula ='1725351736';
    $user->password = Hash::make('lordonez');
    $user->remember_token = str_random(10);
    if($user->save()){
      $role = Role::where('slug','estudiante')->first();
      $user->roles()->attach($role->id);
    }
    $user = new User();
    $user->name = 'Diana Ortiz';
    $user->email = 'odiana@utpl.edu.ec';
    $user->email_verified_at = now();
    $user->cedula ='1721022661';
    $user->password = Hash::make('odiana');
    $user->remember_token = str_random(10);
    if($user->save()){
      $role = Role::where('slug','estudiante')->first();
      $user->roles()->attach($role->id);
    }
    $user = new User();
    $user->name = 'Gabriel Paredes';
    $user->email = 'gparedes@utpl.edu.ec';
    $user->email_verified_at = now();
    $user->cedula ='1726025008';
    $user->password = Hash::make('gpardo');
    $user->remember_token = str_random(10);
    if($user->save()){
      $role = Role::where('slug','profesor')->first();
      $user->roles()->attach($role->id);
    }
    $user = new User();
    $user->name = 'Nataly Quintana';
    $user->email = 'nquintana@utpl.edu.ec';
    $user->email_verified_at = now();
    $user->cedula ='1757504491';
    $user->password = Hash::make('nquintana');
    $user->remember_token = str_random(10);
    if($user->save()){
      $role = Role::where('slug','estudiante')->first();
      $user->roles()->attach($role->id);
    }
    $user = new User();
    $user->name = 'Paola Romero';
    $user->email = 'promero@utpl.edu.ec';
    $user->email_verified_at = now();
    $user->cedula ='1726551599';
    $user->password = Hash::make('promero');
    $user->remember_token = str_random(10);
    if($user->save()){
      $role = Role::where('slug','estudiante')->first();
      $user->roles()->attach($role->id);
    }
    $user = new User();
    $user->name = 'Daniela Salazar';
    $user->email = 'dsalazar@utpl.edu.ec';
    $user->email_verified_at = now();
    $user->cedula ='1725006322';
    $user->password = Hash::make('dsalazar');
    $user->remember_token = str_random(10);
    if($user->save()){
      $role = Role::where('slug','profesor')->first();
      $user->roles()->attach($role->id);
    }
    $user = new User();
    $user->name = 'Nancy Lopez';
    $user->email = 'nlopez@utpl.edu.ec';
    $user->email_verified_at = now();
    $user->cedula ='1713955951';
    $user->password = Hash::make('nlopez');
    $user->remember_token = str_random(10);
    if($user->save()){
      $role = Role::where('slug','estudiante')->first();
      $user->roles()->attach($role->id);
    }
    $user = new User();
    $user->name = 'Felipe Teran';
    $user->email = 'fteran@utpl.edu.ec';
    $user->email_verified_at = now();
    $user->cedula ='1714835087';
    $user->password = Hash::make('fteran');
    $user->remember_token = str_random(10);
    if($user->save()){
      $role = Role::where('slug','profesor')->first();
      $user->roles()->attach($role->id);
    }

$user = new User();
$user->name = 'Francisco Aguirre';
$user->email = 'faguirre@utpl.edu.ec';
$user->email_verified_at = now();
$user->cedula ='1721348942';
$user->password = Hash::make('faguirre');
$user->remember_token = str_random(10);
if($user->save()){
$role = Role::where('slug','estudiante')->first();
$user->roles()->attach($role->id);
}

$user = new User();
$user->name = 'Byron Dominguez';
$user->email = 'bdominguez@utpl.edu.ec';
$user->email_verified_at = now();
$user->cedula ='1716288517';
$user->password = Hash::make('bdominguez');
$user->remember_token = str_random(10);
if($user->save()){
$role = Role::where('slug','profesor')->first();
$user->roles()->attach($role->id);
}

$user = new User();
$user->name = 'Jorge Dueñas';
$user->email = 'jduenas@utpl.edu.ec';
$user->email_verified_at = now();
$user->cedula ='1717278590';
$user->password = Hash::make('jduenas');
$user->remember_token = str_random(10);
if($user->save()){
$role = Role::where('slug','estudiante')->first();
$user->roles()->attach($role->id);
}

$user = new User();
$user->name = 'Freddy Duque';
$user->email = 'fduque@utpl.edu.ec';
$user->email_verified_at = now();
$user->cedula ='1721582599';
$user->password = Hash::make('fduque');
$user->remember_token = str_random(10);
if($user->save()){
$role = Role::where('slug','profesor')->first();
$user->roles()->attach($role->id);
}

$user = new User();
$user->name = 'Ricardo Fajardo';
$user->email = 'rfajardo@utpl.edu.ec';
$user->email_verified_at = now();
$user->cedula ='1723563324';
$user->password = Hash::make('rfajardo');
$user->remember_token = str_random(10);
if($user->save()){
$role = Role::where('slug','estudiante')->first();
$user->roles()->attach($role->id);
}

$user = new User();
$user->name = 'Jorge Flores';
$user->email = 'jflores@utpl.edu.ec';
$user->email_verified_at = now();
$user->cedula ='1721104857';
$user->password = Hash::make('jflores');
$user->remember_token = str_random(10);
if($user->save()){
$role = Role::where('slug','profesor')->first();
$user->roles()->attach($role->id);
}

$user = new User();
$user->name = 'Fabian Garcia';
$user->email = 'fgarcia@utpl.edu.ec';
$user->email_verified_at = now();
$user->cedula ='0502501505';
$user->password = Hash::make('fgarcia');
$user->remember_token = str_random(10);
if($user->save()){
$role = Role::where('slug','estudiante')->first();
$user->roles()->attach($role->id);
}

$user = new User();
$user->name = 'David Hurtado';
$user->email = 'dhurtado@utpl.edu.ec';
$user->email_verified_at = now();
$user->cedula ='0850035684';
$user->password = Hash::make('dhurtado');
$user->remember_token = str_random(10);
if($user->save()){
$role = Role::where('slug','profesor')->first();
$user->roles()->attach($role->id);
}

$user = new User();
$user->name = 'Cristian Jarrin';
$user->email = 'cjarrin@utpl.edu.ec';
$user->email_verified_at = now();
$user->cedula ='1717265936';
$user->password = Hash::make('cjarrin');
$user->remember_token = str_random(10);
if($user->save()){
$role = Role::where('slug','estudiante')->first();
$user->roles()->attach($role->id);
}

$user = new User();
$user->name = 'Jaime Mejia';
$user->email = 'jmejia@utpl.edu.ec';
$user->email_verified_at = now();
$user->cedula ='0401356035';
$user->password = Hash::make('jmejia');
$user->remember_token = str_random(10);
if($user->save()){
$role = Role::where('slug','estudiante')->first();
$user->roles()->attach($role->id);
}

$user = new User();
$user->name = 'Gabriel Ortega';
$user->email = 'gortega@utpl.edu.ec';
$user->email_verified_at = now();
$user->cedula ='1718324948';
$user->password = Hash::make('gortega');
$user->remember_token = str_random(10);
if($user->save()){
$role = Role::where('slug','profesor')->first();
$user->roles()->attach($role->id);
}

$user = new User();
$user->name = 'Enrique Calero';
$user->email = 'ecalero@utpl.edu.ec';
$user->email_verified_at = now();
$user->cedula ='1720074127';
$user->password = Hash::make('ecalero');
$user->remember_token = str_random(10);
if($user->save()){
$role = Role::where('slug','estudiante')->first();
$user->roles()->attach($role->id);
}
  }
}
