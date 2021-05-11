<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attachment extends Model
{
    use HasFactory;

    protected $fillable = [
        'ruta', 'activity_id',
    ];

    public function activity()
    {
      return $this->belongsTo('App\Models\Activity');
    }
}
