<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Storage;

use App\Models\Order;
use App\Models\Adjunto;


class ShowAttachment extends Component
{
    public $attachments;
    public $order;

    protected $listeners = ['newAttachment'];

    public function newAttachment($order_id){
        $this->order = Order::find($order_id);
        $this->attachments = $this->order->adjuntos;
    }

    public function mount($id)
    {
        $this->order = Order::find($id);
        $this->attachments = $this->order->adjuntos;
        logger($this->attachments);
    }

    public function render()
    {
        logger('show attachment');
        return view('livewire.show-attachment',[
            'attachments' => $this->attachments
        ]);
    }

    public function download($file)
    {
       
        return Storage::disk('public')->download('storage/' . $file['ruta']);
    }
}
