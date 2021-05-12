<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

use App\Models\Activity;
use App\Models\Adjunto;
use App\Models\Entrega;
use App\Models\Expert;
use App\Models\Order;

use Livewire\WithFileUploads;

class ShowOrder extends Component
{
    use WithFileUploads;

    public $activities;
    public $activitiesm;
    public $attachments;    
    public $boxfile=null;
    public $delivery_number;
    public $deliver_date;
    public $fileToSend;
    public $filenameToSend;
    public $filenameToSendButton="disabled";    
    public $is_disabled="disabled";
    public $message;
    public $order;
    public $tab=1;

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
        $this->delivery_number = $this->order->entrega + 1;
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
          $attach = $this->fileToSend->store('attachments','public');
          $newDelivery = new Entrega;
          $newDelivery->ruta = str_replace("public","storage", $attach);
          $newDelivery->order_id = $this->order->id;
          if(isset(pathinfo($this->filenameToSend)['extension'])){
              //tiene extension
              $newDelivery->filename = $this->filenameToSend;
          }else if(!isset(pathinfo($this->filenameToSend)['extension'])){
               //no tiene extension
                $path_info = pathinfo($attach);
                $newDelivery->filename = $this->filenameToSend.'.'.$path_info['extension'];
          }
          $newDelivery->message = "";
          $newDelivery->entrega = $this->delivery_number;
          $newDelivery->save();
        }
        $this->fileToSend = null;
        $this->filenameToSend = "";
        $this->filenameToSendButton = "disabled";
        $this->emit('newDelivery',$this->order->id); 
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

    public function updatedFilenameToSend()
    {
        if(strlen($this->filenameToSend) < 1 || empty($this->fileToSend)){
            $this->filenameToSendButton="disabled";
        }else{
            $this->filenameToSendButton="enabled";
        }
    }

    public function cleanInputfileToSend()
    {        
        $this->fileToSend = null;
        $this->filenameToSend = "";
        $this->filenameToSendButton = "disabled";
    }

    public function saveDelivery(){
        $this->order->entrega = $this->delivery_number;
        $this->order->save();

        $newActivity = new Activity;
        $newActivity->message = "DeliveritNow: ¡Se ha hecho una entrega! Ve al apartado de entregas y revisa lo que se te ha enviado. La orden se marcará como completada en 3 días.";
        $newActivity->order_id = $this->order->id;        
        $newActivity->sender = 2; //El experto envía mensaje
        $result = $newActivity->save();

        if($result){
            $message = Activity::latest()->first();
            $this->updateData();
        }

        $this->emit('success', '¡Has realizado la entrega satisfactoriamente!');
        $this->tab=1;
    }
}
