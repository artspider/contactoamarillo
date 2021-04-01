<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $fillable = [
        'nombre'
    ];

    public function subcategorias()
    {
        return $this->hasMany('App\Models\Subcategoria')->latest();
    }

    public function services()
    {
        return $this->belongsTo('App\Models\Service');
    }
}
