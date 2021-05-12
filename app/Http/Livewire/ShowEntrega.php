<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Storage;

use App\Models\Order;
use App\Models\Entrega;

class ShowEntrega extends Component
{
    public $attachments;
    public $order;

    protected $listeners = ['newDelivery'];

    public function newDelivery($order_id){
        $this->order = Order::find($order_id);
        $this->attachments = $this->order->entregas;
    }

    public function mount($id)
    {
        $this->order = Order::find($id);
        $this->attachments = $this->order->entregas;
        logger($this->attachments);
    }

    public function render()
    {
        return view('livewire.show-entrega',[
            'attachments' => $this->attachments
        ]);
    }

    public function download($file)
    {       
        return Storage::disk('public')->download('storage/' . $file['ruta']);
    }
}
