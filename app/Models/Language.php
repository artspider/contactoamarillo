<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    protected $fillable = [
        'language', 'level',
    ];

    public function experts()
    {
      return $this->belongsToMany('App\Models\expert');
    }
}