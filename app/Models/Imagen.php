<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Imagen extends Model
{
    use HasFactory;

    protected $table = 'imagenes';

    protected $fillable = [
        'ruta', 'service_id',
    ];

    public function services()
    {
      return $this->belongsTo('App\Models\Service');
    }
}
