<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use Illuminate\Support\Str;

class Order extends Model
{

  protected $fillable = [
    'descripcion', 'titulo', 'status', 'fecha_entrega', 'precio_acordado', 'calificacion_empleador', 'calificacion_experto', 'resena', 'expert_id', 'employer_id', 'ok_expert', 'ok_employer',
  ];

  protected $dates = [
    'created_at',
  ];

    public function expert()
    {
        return $this->belongsTo('App\Models\Expert');
    }

    public function employer()
    {
        return $this->belongsTo('App\Models\Employer');
    }

    public function getDayNameAttribute(){
      $weekMap = [
        0 => 'DOM ',
        1 => 'LUN',
        2 => 'MAR',
        3 => 'MIE',
        4 => 'JUE',
        5 => 'VIE',
        6 => 'SAB',
      ];
      $order_date = Carbon::parse($this->created_at);
      $dayOfTheWeek = $order_date->dayOfWeek;
      $weekday = $weekMap[$dayOfTheWeek];
      return $weekday;
    }

    public function getMonthNameAttribute(){
      $monthMap = [
        1 => 'ENE',
        2 => 'FEB',
        3 => 'MAR',
        4 => 'ABR',
        5 => 'MAY',
        6 => 'JUN',
        7 => 'JUL',
        8 => 'AGO',
        9 => 'SEP',
        10 => 'OCT',
        11 => 'NOV',
        12 => 'DIC',
      ];

      $order_date = Carbon::parse($this->created_at);
      $month = $order_date->month;
      $mothName = $monthMap[$month];

      return $mothName;
    }

    public function getDayAttribute(){
      $order_date = Carbon::parse($this->created_at);
      return $order_date->day;
    }

    public function getDescriptionShortAttribute(){
      return Str::limit($this->descripcion,60);
    }

    public function getStatusNameAttribute(){
      $statusMap = [
        0 => 'PENDIENTE',
        1 => 'EN MARCHA',
        2 => 'TERMINADO',
        4 => 'CANCELADO',
        5 => 'DEVUELTO',
      ];

      return $statusMap[$this->status];
    }

    public function services(){
      $this->hasOne('App\Models\Service');
    }

    public function experts(){
      $this->hasOne('App\Models\Expert');
    }

    public function employers(){
      $this->hasOne('App\Models\Employer');
    }

    public function activities()
    {
        return $this->hasMany('App\Models\Activity')->oldest();
    }

    public function adjuntos()
    {
        return $this->hasMany('App\Models\Adjunto');
    }

}
