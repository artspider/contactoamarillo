<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Expert_Tag extends Model
{

  protected $table = 'expert_tag';

  protected $fillable = [
    'expert_id', 'tag_id',
  ];

  
}