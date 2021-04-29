<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Collection;
use App\Notifications\newMsjToEmployer;
use Carbon\Carbon;

use App\Models\Employer;
use App\Models\Proyect;
use App\Models\Message;

class Jobsbag extends Component
{
    public $projects;
    public $expert;
    public $employer;
    public $message;
    public $employerId;

    protected $rules = [
        'message' => 'required|min:6'
    ];

    public function updateProjects()
    {
        $user = Auth::user();
        $expert = $user->usable;        
        $this->projects = Proyect::all(); 
    }

    public function mount()
    {
        $this->updateProjects();
    }

    public function render()
    {
        return view('livewire.jobsbag',[
        'projects' => $this->projects
        ])->layout('components.layouts.master');
    }

    public function sendEmployerId($employer_id)
    {
        $this->employer =  Employer::find($employer_id);
    }

    public function sendMsgToEmployer()
    {    
        $this->validate(); 
            
        $user = Auth::user();
        $expert = $user->usable;
        $msj = collect(["id" => $expert->id, "name" => $expert->nombre, 'picture' => $expert->url_image, "message" => $this->message]);
        
        $newMessage = new Message;
        $newMessage->descripcion = $this->message;
       
        $newMessage->fecha_entrega = carbon::now();
        $newMessage->expert_id = $expert->id;
        $newMessage->employer_id = $this->employer->id;
        $newMessage->sender = 2;
        $newMessage->save();

        $this->employer->notify(new newMsjToEmployer($msj));
        $this->emit('success', 'Tu mensaje se ha enviado');
        logger('saliendo de SenMsgToExpert');        
    }


}
