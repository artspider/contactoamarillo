<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use Illuminate\Support\Str;

class Activity extends Model
{

    protected $fillable = [
        'message',
        'order_id',
        'sender',
    ];

    protected $dates = [
        'created_at',
      ];

    public function order(){
        $this->hasOne('App\Models\Order');
    }

    public function getShortDateAttribute(){
        $order_date = Carbon::parse($this->created_at);
        return $order_date->isoFormat('D MMMM YYYY, h:mm a');
      }
}
