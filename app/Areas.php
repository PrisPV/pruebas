<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Areas extends Model
{
    protected $fillable = [
        'area',
      ];
      public function asignaturas(){
        return $this->hasMany('App\Asignatura');
      }
}
