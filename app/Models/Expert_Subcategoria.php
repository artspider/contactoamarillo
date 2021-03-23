<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Expert_Subcategoria extends Model
{

  protected $table = 'expert_subarea';

  protected $fillable = [
    'expert_id', 'subarea_id',
  ];
}