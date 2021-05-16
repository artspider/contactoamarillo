<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Expert;

class ProfileExpert extends Component
{
    public $expert_id;

    public function mount($id)
    {
        $this->expert_id = $id;
    }

    public function render()
    {
        $expert = Expert::find($this->expert_id);
        return view('livewire.profile-expert',[
            'expert' => $expert
        ])
        ->layout('components.contacto-amarillo.employer-layout');
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
        $newMessage->expert_id = $this->expert_id;
        $newMessage->employer_id = $employer->id;
        $newMessage->sender = 1;
        $newMessage->save();

        $this->expert->notify(new newMsjToExpert($msj));
        $this->emit('success', 'Tu mensaje se ha enviado');
        logger('saliendo de SendMsgToExpert');        
    }
}
