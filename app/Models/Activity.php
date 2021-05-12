<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Activity extends Model implements HasMedia
{
    use InteractsWithMedia;

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
    
    public function getIsDeliveryAttribute(){
        $message = explode(" ", $this->message);
        if($message == 'DeliveritNow:'){
            return true;
        }
        return false;
    }
    
    public function attachments(){
        return $this->hasMany('App\Models\Attachment');
    }
}
