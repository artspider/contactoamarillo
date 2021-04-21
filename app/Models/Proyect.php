<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proyect extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'description', 'delivery_time', 'budget', 'status', 'category_id', 'subcategory_id', 'employer_id'
    ];

    public function employer()
    {
        return $this->belongsTo('App\Models\Employer');
    }

    public function categoria()
    {
        return $this->belongsTo('App\Models\Categoria');
    }

    public function subcategoria()
    {
        return $this->belongsTo('App\Models\Subcategoria');
    }
}
