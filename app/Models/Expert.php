<?php

namespace App\Models;

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
        return $this->hasMany('App\Models\Order')->latest();
    }

    public function tags()
    {
        return $this->belongsToMany('App\Models\Tag', 'expert_tag')->withTimestamps()->orderBy('name');
    }

    public function languages()
    {
        return $this->belongsToMany('App\Models\Language', 'expert_language')->orderBy('language');
    }

    public function subcategorias()
    {
        return $this->belongsToMany('App\Models\Subcategoria', 'expert_subarea')->withTimestamps()->orderBy('name');
    }

    public function membersihps()
    {
        return $this->hasOne('App\Models\Membership');
    }

    public function perfiles()
    {
        return $this->hasOne('App\Models\Perfil');
    }

    public function titulos()
    {
      return $this->hasMany('App\Models\Titulo');
    }

    public function certifications()
    {
      return $this->hasMany('App\Models\Certification');
    }

    public function trabajos()
    {
      return $this->hasMany('App\Models\Trabajo');
    }

    public function services()
    {
      return $this->hasMany('App\Models\Service');
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

    public function messages()
    {
      return $this->hasMany('App\Models\Message');
    }
}
