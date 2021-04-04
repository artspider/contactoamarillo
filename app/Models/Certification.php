<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Certification extends Model
{
    use HasFactory;

    protected $fillable = [
        'certificado', 'emisor', 'anio_de_emision', 'url', 'expert_id'
    ];

    public function expert()
    {
      return $this->belongsTo('App\Models\Expert');
    }
}
