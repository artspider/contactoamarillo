<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Notifications\newMsjToExpert;
use Carbon\Carbon;

use App\Models\Service;
use App\Models\Profile;
use App\Models\Expert;
use App\Models\Message;

class ShowService extends Component
{
    public $service;
    public $profile;
    public $expert;
    public $message;

    protected $rules = [
        'message' => 'required|min:6'
    ];

    public function mount($id)
    {
        $this->service = Service::find($id);
        $expert = Expert::find($this->service->expert_id);
        $this->profile = $expert->perfiles;
    }
    public function render()
    {
        return view('livewire.show-service',[
            'profile' => $this->profile,
            'service' => $this->service
        ])
        ->layout('components.contacto-amarillo.employer-layout');
    }

    public function sendExpertId($expertId)
    {
        $this->expert = Expert::find($expertId);
    }

    public function sendMsgToExpert()
    {    
        $this->validate(); 
            
        $user = Auth::user();
        $employer = $user->usable;
        $msj = collect(["id" => $employer->id, "name" => $employer->nombre, 'picture' => $employer->url_image, "message" => $this->message]);
        
        $newMessage = new Message;
        $newMessage->descripcion = $this->message;
       
        $newMessage->fecha_entrega = carbon::now();
        $newMessage->expert_id = $this->expert->id;
        $newMessage->employer_id = $employer->id;
        $newMessage->sender = 1;
        $newMessage->save();

        $this->expert->notify(new newMsjToExpert($msj));
        $this->emit('success', 'Tu mensaje se ha enviado');
        logger('saliendo de SendMsgToExpert');        
    }
}
