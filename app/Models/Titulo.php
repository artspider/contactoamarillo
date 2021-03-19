<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Titulo extends Model
{

  protected $fillable = [
    'escuela',
    'carrera',
    'fecha_terminacion',
    'sigue_estudiando',
    'expert_id',
  ];

  public function expert()
  {
    return $this->belongsTo('App\Models\expert');
  }
}
