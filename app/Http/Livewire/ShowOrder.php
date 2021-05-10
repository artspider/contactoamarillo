<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

use App\Models\Expert;
use App\Models\Order;
use App\Models\Activity;

class ShowOrder extends Component
{
    public $order;
    public $deliver_date;
    public $activities;
    public $activitiesm;
    public $message;
    public $is_disabled="disabled";

    public function updateData()
    {
        $this->message = "";
        $this->is_disabled= "disabled";
        //$this->activitiesm = DB::table('activities')->where('order_id','=',$this->order->id)->get();        
    }

    public function mount($id)
    {
        $this->order = Order::find($id);
        $this->deliver_date = Carbon::createFromDate($this->order->fecha_entrega)->isoFormat('D MMMM YYYY');
        $this->updateData();
    }

    public function render()
    {
        $this->activitiesm = DB::table('activities')->where('order_id','=',$this->order->id)->get();
        return view('livewire.show-order',[
            'order' => $this->order,
            'activities' => $this->activities,
            'activitiesm' => $this->activitiesm
        ])
        ->layout('components.layouts.master');
    }

    public function sendMessage()
    {    
        
        $newActivity = new Activity;
        $newActivity->message = $this->message;        
        $newActivity->order_id = $this->order->id;        
        $newActivity->sender = 2; //El experto envía mensaje             
      
        $result = $newActivity->save();
      
        if($result){
            $message = Activity::latest()->first();
            $this->updateData();
        }
    }

    public function updatedMessage()
    {
        if(strlen($this->message) < 3){
            $this->is_disabled="disabled";
        }else{
            $this->is_disabled="enabled";
        }
    }
}
