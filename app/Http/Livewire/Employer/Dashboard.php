<?php

namespace App\Http\Livewire\Employer;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

use App\Models\Expert;
use App\Models\Categoria;

class Dashboard extends Component
{
    public $expert_id;
    public $categorias;

    public function mount()
    {
        $user = Auth::user();
        $expert = $user->usable;
        $this->expert_id = $expert->id;
        $this->categorias = Categoria::all();
    }
    public function render()
    {
        return view('livewire.employer.dashboard',[
            'categorias' => $this->categorias
        ])
        ->layout('components.contacto-amarillo.employer-layout');
    }
}
