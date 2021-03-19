<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;


class Expert extends Model
{
    use Notifiable;

    //
    protected $fillable = [
      'nombre', 'paterno', 'materno', 'telefono', 'profesion', 'especialidad', 'cedula', 'universidad', 'ciudad', 'estado', 'facebook', 'instagram', 'twitter', 'habilidades', 'email', 'user_id',
  ];

  public function orders()
    {
        return $this->hasMany('App\Models\order')->latest();
    }

    public function tags()
    {
        return $this->belongsToMany('App\Models\tag', 'expert_tag')->withTimestamps()->orderBy('name');
    }

    public function languages()
    {
        return $this->belongsToMany('App\Models\language', 'expert_language')->orderBy('language');
    }

    public function membersihps()
    {
        return $this->hasOne('App\Models\membership');
    }

    public function titulos()
    {
      return $this->hasMany('App\Models\titulo');
    }

    public function trabajos()
    {
      return $this->hasMany('App\Models\trabajo');
    }

    public function users()
    {
      return $this->morphOne('App\Models\User', 'usable');
    }

    public function scopeProfesion($query, $profesion)
    {
      if($profesion)
        return $query->where('profesion', 'LIKE', "%$profesion%")
                   ->orWhere('especialidad', 'LIKE', "%$profesion%");
    }

    public function scopeCiudad($query, $ciudad)
    {
      if($ciudad)
        return $query->Where('ciudad', 'LIKE', "%$ciudad%");
    }
}
