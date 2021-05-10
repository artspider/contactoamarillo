<?php

namespace App\Http\Livewire;

use Livewire\Component;

use Illuminate\Support\Facades\Auth;
use App\Notifications\newMsjToEmployer;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

use App\Models\Employer;
use App\Models\Expert;
use App\Models\Message;

class Notificaciones extends Component
{
    public $expert;
    public $employer;
    public $messages;
    public $message;
    public $contacts;
    public $employerId;
    public $expertId;
    public $selected;
    public $employerName;

    public function updateData($id)
    {
        $arr_contacts=[];
        $this->message = "";
        
        foreach ( $this->expert->messages as $message) {
            if(!in_array($message->employer()->first(),$arr_contacts)){
                array_push($arr_contacts, $message->employer()->first());
            }            
        }
        
        if(!empty($arr_contacts[$id]))
        {
            $this->contacts = $arr_contacts;
            $this->selected = $this->contacts[$id];
            $employer = Employer::find($this->selected->id);
            $this->employerName = explode(" ",$employer->nombre);
            logger($this->selected);
            $this->messages = DB::table('messages')->where('employer_id','=',$this->selected->id)->where('expert_id','=',$this->expert->id)->get();
            
        };
    }

    public function mount($expertId)
    {
        $user = Auth::user();
        $this->expert = $user->usable;
        $this->updateData(0);         
    }

    public function render()
    {
        return view('livewire.notificaciones',[
            'messages' => $this->messages,
            'contacts' =>  $this->contacts
        ])
        ->layout('components.layouts.master');
    }

    public function selectSender($contact)
    {
        $employer_id = (array_search($contact['id'],array_column($this->contacts,'id')));
        $this->updateData($employer_id);
    }

    public function sendMessage()
    {
        
        $newMessage = new Message;
        $newMessage->descripcion = $this->message;
        
        $newMessage->fecha_entrega = carbon::now();
        
        $newMessage->employer_id = $this->selected->id;
        $newMessage->expert_id = $this->expert->id;
        $newMessage->sender = 2;
        $newMessage->save();

        $employer_id = (array_search($this->selected->id,array_column($this->contacts,'id')));        
        $this->updateData($employer_id);
    }
}
