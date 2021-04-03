<?php

namespace App\Http\Livewire\Profile;

use Livewire\Component;

use App\Models\Expert;
use App\Models\Perfil;
use Illuminate\Support\Facades\Auth;

class Main extends Component
{
    public $expert;
    public $profile;
    public $expert_id;

    public function updateModels()
    {

    }

    public function mount()
    {
        $user = Auth::user();
        $expert = $user->usable;
        $this->expert = $expert;
        $this->profile = $expert->perfiles()->first();
        $this->expert_id = $expert->id;
    }

    public function render()
    {
        return view('livewire.profile.main',[
            'expert' => $this->expert,
            'profile' => $this->profile
        ])
        ->layout('components.contacto-amarillo.contacto-layout');
    }
}
