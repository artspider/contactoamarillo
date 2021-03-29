<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Collection;

use App\Models\Expert;
use App\Models\Service;

class Services extends Component
{
    public $services;

    public function mount()
    {
        $this->services = Service::all();
    }
    public function render()
    {
        return view('livewire.services',[
            'services' => $this->services
        ]);
    }
}
