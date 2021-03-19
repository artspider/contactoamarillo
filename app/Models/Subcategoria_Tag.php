<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subcategoria_Tag extends Model
{
    protected $table = 'subcategoria_tag';

    protected $fillable = [
        'subcategoria_id', 'tag_id',
    ];
}