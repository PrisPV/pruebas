<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Asignatura extends Model
{
  /**
  * The attributes that are mass assignable.
  *
  * @var array
  */
  protected $fillable = [
    'nombre',
    'area_id'
  ];

  public function areas()
  {
    return $this->belongsToMany('App\Areas');
  }

  public function users()
  {
    return $this->belongsToMany('App\User');
  }

  public function cuestionarios(){
    return $this->hasMany('App\Cuestionario');
  }
}
