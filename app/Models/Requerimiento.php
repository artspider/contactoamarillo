<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Requerimiento extends Model
{
    use HasFactory;    

    protected $fillable = [
        'requerimiento', 'service_id',
    ];

    public function Services()
    {
      return $this->belongsTo('App\Models\Service');
    }
}
