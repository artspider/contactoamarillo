<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\Employer;
use App\Models\Expert;
use App\Models\Message;

class ShowUnread extends Component
{
    private $xuser;
    public $unreadMessages;

    public function mount()
    {
        $user = Auth::user();
        $type = $user->type;
        $this->xuser = $user->usable;
        $messages = $this->xuser->messages()->where('status', 0)->where('sender','<>',$type)->get();
        $this->unreadMessages = count($messages);
    }
    public function render()
    {
        return <<<'blade'
            <div>
                <p class="text-center ml-1 bg-main-yellow hover:text-gray-300 rounded-full text-xs w-6 h-6 p-1">
                {!!$this->unreadMessages!!}
                </p>
            </div>
        blade;
    }
}
