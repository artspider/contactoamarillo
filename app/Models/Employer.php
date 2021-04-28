<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Employer extends Model
{
    use Notifiable;

  protected $fillable = [
    'nombre', 'paterno', 'materno', 'ciudad', 'estado', 'telefono',
  ];

    public function projects()
    {
        return $this->hasMany('App\Models\Proyect');
    }
    
    public function orders()
    {
        return $this->hasMany('App\Models\Order');
    }

    public function users()
    {
      return $this->morphOne('App\Models\User', 'usable');
    }

    public function messages()
    {
      return $this->hasMany('App\Models\Message');
    }
}
