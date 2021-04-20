<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'titulo',
        'categoria_id',
        'subcategoria_id',
        'expert_id',
        'precio',
        'tiempo_de_entrega',
        'producto_a_entregar'
    ];

    public function expert()
    {
      return $this->belongsTo('App\Models\Expert');
    }

    public function categoria()
    {
      return $this->belongsTo('App\Models\Categoria');
    }

    public function tags()
    {
        return $this->belongsToMany('App\Models\Tag', 'service_tag')->withTimestamps()->orderBy('name');
    }

    public function requerimientos()
    {
      return $this->hasMany('App\Models\Requerimiento');
    }

    public function faqs()
    {
      return $this->hasMany('App\Models\Faq');
    }

    public function videos()
    {
      return $this->hasMany('App\Models\Video');
    }

    public function imagenes()
    {
      return $this->hasMany('App\Models\Imagen');
    }

    public function orders()
    {
        return $belongsTo('App\Models\Order');
    }

}
