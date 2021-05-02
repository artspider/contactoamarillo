<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perfil extends Model
{
    use HasFactory;

    protected $table = 'perfiles';

    protected $fillable = [
        'fecha_nacimiento',
        'pais',
        'estado',
        'ciudad',
        'facebook',
        'twiter',
        'dribbble',
        'github',
        'curriculum_path',
        'quien_soy',
        'expert_id'
    ];

    public function experts()
    {
        return $this->belongsTo('App\Models\Expert');
    }

    public function expert()
    {
        return $this->belongsTo('App\Models\Expert');
    }
}
