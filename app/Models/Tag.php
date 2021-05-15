<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Tag extends Model
{
    use Searchable;

    protected $fillable = [
      'name',
    ];

    public function experts()
    {
      return $this->belongsToMany('App\Models\Expert');
    }

    public function expert()
    {
      return $this->belongsTo('App\Models\Expert');
    }

    public function services()
    {
      return $this->belongsToMany('App\Models\Service');
    }

    public function subcategoria()
    {
      return $this->belongsToMany('App\Models\Subcategoria');
    }

    public function scopeName($query, $name)
    {
      if($name)
        return $query->where('name', 'LIKE', "%$name%");
    }

    public function scopeOrName($query, $name)
    {
      if($name)
        return $query->orWhere('name', 'LIKE', "%$name%");
    }

    public function scopeAtributos($query, $atributos)
    {
      if($atributos)
        return $query->where('name', 'LIKE', "%$atributos%");
    }
}
