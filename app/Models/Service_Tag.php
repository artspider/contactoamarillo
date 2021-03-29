<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service_Tag extends Model
{
    use HasFactory;

    protected $table = 'service_tag';

    protected $fillable = [
        'service_id', 'tag_id',
    ];
}
