<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Storage;

use App\Models\Expert;
use App\Models\Order;
use App\Models\Activity;
use App\Models\Adjunto;

use Livewire\WithFileUploads;

class ShowOrder extends Component
{
    use WithFileUploads;

    public $order;
    public $deliver_date;
    public $activities;
    public $activitiesm;
    public $message;
    public $is_disabled="disabled";
    public $filenameToSendButton="disabled";
    public $attachments;
    public $boxfile=null;
    public $fileToSend;
    public $filenameToSend;

    protected $listeners = ['fileToSend'];

    public function fileToSend($filename)
    {
        $this->filenameToSend = $filename;
        $this->filenameToSendButton = "enabled";
    }

    public function updateData()
    {
        $this->message = "";
        $this->is_disabled= "disabled";
        $this->attachments=null;
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
        logger($this->boxfile);
        logger('show order');
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

        if(!empty($this->attachments)){
            foreach ($this->attachments as $attachment) {
                $attach = $attachment->store('attachments','public');
               
                $newAttach = new Adjunto;
                $newAttach->ruta = str_replace("public","storage", $attach);
                $newAttach->order_id = $this->order->id;
                $newAttach->filename = 'File'.$this->order->id. $newActivity->id.'.'.$attachment->extension();
                $newAttach->save();
            }
            $this->emit('newAttachment',$this->order->id);
        }        
      
        if($result){
            $message = Activity::latest()->first();
            $this->updateData();
        }
    }

    public function entregaAttach()
    {
        if(!empty($this->fileToSend)){
          $attach = $fileToSend->store('attachments','public');
          $newDelivery = new Entrega;
          $newDelivery->ruta = str_replace("public","storage", $attach);
          $newDelivery->order_id = $this->order->id;
          $newDelivery->filename = 'File'.$this->order->id. $newActivity->id.'.'.$attachment->extension();
          $newDelivery->save();
        }
        $this->emit('newAttachment',$this->order->id); 
    }

    public function updatedMessage()
    {
        logger(strlen($this->message));
        if(strlen($this->message) < 1){
            $this->is_disabled="disabled";
        }else{
            $this->is_disabled="enabled";
        }
    }

    public function cleanInputfileToSend()
    {
        
        $this->fileToSend = null;
        $this->filenameToSend = "";
        $this->filenameToSendButton = "disabled";
    }
}
