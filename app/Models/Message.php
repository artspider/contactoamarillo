<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function employer()
    {
        return $this->belongsTo('App\Models\Employer');
    }

    public function expert()
    {
        return $this->belongsTo('App\Models\Expert');
    }
}
