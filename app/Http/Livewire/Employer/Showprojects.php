<?php

namespace App\Http\Livewire\Employer;

use Livewire\Component;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Collection;

use App\Models\Employer;
use App\Models\Proyect;

class Showprojects extends Component
{
    public $projects;

    public function updateProjects()
    {
        $user = Auth::user();
        $employer = $user->usable;        
        $this->projects = $employer->projects()->get(); 
    }

    public function mount()
    {
        $this->updateProjects();        
    }

    public function render()
    {
        return view('livewire.employer.showprojects',[
            'projects' => $this->projects
        ])
        ->layout('components.contacto-amarillo.employer-layout');
    }
}
