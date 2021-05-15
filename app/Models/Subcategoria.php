<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;
use Illuminate\Support\Collection;

class Subcategoria extends Model
{
  use Searchable;

    protected $fillable = [
        'name', 'categoria_id'
    ];

    public function experts()
    {
      return $this->belongsToMany('App\Models\Expert');
    }

    public function proyects()
    {
      return $this->hasMany('App\Models\Proyect');
    }

    public function tags()
    {
        return $this->belongsToMany('App\Models\Tag', 'subcategoria_tag')->withTimestamps()->orderBy('name');
    }

    public function categorias()
    {
        return $this->belongsTo('App\Models\Categoria');
    }

}
