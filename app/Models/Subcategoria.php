<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subcategoria extends Model
{
    protected $fillable = [
        'name', 'categoria_id'
    ];

    public function tags()
    {
        return $this->belongsToMany('App\Models\tag', 'subcategoria_tag')->withTimestamps()->orderBy('name');
    }

    public function categorias()
    {
        return $this->belongsTo('App\Models\categoria');
    }
}
