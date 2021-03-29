<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faq extends Model
{
    use HasFactory;

    protected $fillable = [
        'pregunta',
        'respuesta',
        'service_id',
    ];

    public function services()
    {
      return $this->belongsTo('App\Models\Service');
    }
}
