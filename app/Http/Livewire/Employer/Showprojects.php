<?php

namespace App\Http\Livewire\Employer;

use Livewire\Component;

class Showprojects extends Component
{
    protected $listeners = [
        'showmessagesuccess' => 'showalertsuccess',
    ];

    public function showalertsuccess(){
        $this->emit('success','Se ha creado tu proyecto');
    }
    public function render()
    {
        return view('livewire.employer.showprojects')
        ->layout('components.contacto-amarillo.employer-layout');
    }
}
