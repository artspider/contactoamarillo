<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use Illuminate\Support\Str;

class Adjunto extends Model
{
    use HasFactory;

    protected $fillable = [
        'ruta', 'filename', 'order_id',
    ];

    public function order()
    {
      return $this->belongsTo('App\Models\Order');
    }

    public function getTypeAttribute(){
        $path_info = pathinfo($this->filename);
        return $path_info['extension'];
      }
}
