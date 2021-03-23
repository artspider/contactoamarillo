<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    //

    protected $fillable = [
      'name',
    ];

    public function experts()
    {
      return $this->belongsToMany('App\Models\Expert');
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
}
