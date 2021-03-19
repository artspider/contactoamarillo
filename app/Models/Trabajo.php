<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Trabajo extends Model
{

    protected $fillable = [
        'empresa',
        'puesto',
        'fecha',
        'expert_id',
      ];

    public function expert()
    {
      return $this->belongsTo('App\Models\Expert');
    }
}
