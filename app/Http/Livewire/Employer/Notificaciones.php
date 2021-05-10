<?php

namespace App\Http\Livewire\Employer;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Notifications\newMsjToExpert;
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

    public function updateData($id)
    {
        $arr_contacts=[];
        $this->message = "";
        
        foreach ( $this->employer->messages as $message) {
            if(!in_array($message->expert()->first(),$arr_contacts)){
                array_push($arr_contacts, $message->expert()->first());
            }
        }
        if(!empty($arr_contacts[$id]))
        {
            $this->contacts = $arr_contacts;
            $this->selected = $this->contacts[$id];
            logger($this->selected);
            $this->messages = DB::table('messages')->where('expert_id','=',$this->selected->id)->where('employer_id','=',$this->employer->id)->get();
            $unreadMessages = $this->employer->messages()->where('expert_id',$this->selected->id)->where('status',0)->get()->where('sender',2);
            foreach($unreadMessages as $unreadMessage)
            {
                $unreadMessage->status = 1;
                $unreadMessage->save();
            }
        };
    }

    public function mount($employerId)
    {
        $user = Auth::user();
        $this->employer = $user->usable;
        $this->updateData(0);       
    }

    public function render()
    {   
        logger($this->messages);
        return view('livewire.employer.notificaciones',[
            'messages' => $this->messages,
            'contacts' =>  $this->contacts
        ])
        ->layout('components.contacto-amarillo.employer-layout');
    }

    public function selectSender($contact)
    {
        $expert_id = (array_search($contact['id'],array_column($this->contacts,'id')));
        $this->updateData($expert_id);
    }

    public function sendMessage()
    {
        
        $newMessage = new Message;
        $newMessage->descripcion = $this->message;
        
        $newMessage->fecha_entrega = carbon::now();
        
        $newMessage->expert_id = $this->selected->id;
        $newMessage->employer_id = $this->employer->id;
        $newMessage->sender = 1;        
        $newMessage->save();

        $expert_id = (array_search($this->selected->id,array_column($this->contacts,'id')));        
        $this->updateData($expert_id);
    }
}