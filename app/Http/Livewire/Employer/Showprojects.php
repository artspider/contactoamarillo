<?php

namespace App\Http\Livewire\Employer;

use Livewire\Component;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Collection;

use App\Models\Employer;
use App\Models\Proyect;
use App\Models\Order;

class Showprojects extends Component
{
    public $projects;
    public $orders;

    public function updateProjects()
    {
        $user = Auth::user();
        $employer = $user->usable;        
        $this->projects = $employer->projects()->get();
        $this->orders = $employer->orders()->get();
    }

    public function mount()
    {
        $this->updateProjects();        
    }

    public function render()
    {
        return view('livewire.employer.showprojects',[
            'projects' => $this->projects,
            'orders' => $this->orders
        ])
        ->layout('components.contacto-amarillo.employer-layout');
    }
}
