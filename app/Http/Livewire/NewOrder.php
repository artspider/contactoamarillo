<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

use App\Models\Service;
use App\Models\Employer;
use App\Models\Expert;
use App\Models\Message;
use App\Models\Order;

class NewOrder extends Component
{
    public $service;
    public $expert;
    public $employer;
    public $description="";
    public $title="";
    public $message;
    public $fecha_entrega;
    public $dias;
    public $smodal = false;

    protected $messages = [
        'title.required' => 'Debes colocar un título a esta orden.',
        'description.required' => 'Los detalles del servicio deben enviarse al experto.',
    ];

    public function mount($service_id)
    {
        $this->service = Service::find($service_id);
        $this->expert = Expert::find($this->service->expert_id);
        $user = Auth::user();
        $this->employer = $user->usable;
        $tiempo_de_entrega =  explode(" ", $this->service->tiempo_de_entrega);
        $this->dias = Carbon::now()->addDay(intval($tiempo_de_entrega[0]));
        
    }

    public function render()
    {
        return view('livewire.new-order',[
            'service' => $this->service,
            'expert' => $this->expert
        ])
        ->layout('components.contacto-amarillo.employer-layout');
    }

    public function createOrder()
    {
        $validatedData = $this->validate([
            'title' => 'required|min:5',
            'description' => 'required|min:10',
        ]);

        $order = new Order;
        $order->titulo = $this->title;
        $order->descripcion = $this->description;
        $order->status = 1;
        $order->fecha_entrega = $this->dias;
        $order->precio_acordado = $this->service->precio;
        $order->expert_id = $this->expert->id;
        $order->employer_id = $this->employer->id;
        $order->ok_expert = 0;
        $order->ok_employer = 1;
        $order->service_id = $this->service->id;
        if($order->save())
        {
            $this->smodal = true;
        }else{
            $this->emit('error','Algo sali mal, favor de intentar otra vez');
        }
        
    }

    public function sendMsgAndClose()
    {
        $expertName = explode(' ',$this->expert->nombre);
        $newMessage = new Message;
        $newMessage->descripcion = "Hola " . $expertName[0] . " he contratado uno de tus servicios. Consulta tu bandeja de proyectos para más información";
        
        $newMessage->fecha_entrega = carbon::now();
        
        $newMessage->employer_id = $this->employer->id;
        $newMessage->expert_id = $this->expert->id;
        $newMessage->sender = 1;
        $newMessage->save();

        return redirect()->to('/employer/showprojects');
    }
}
