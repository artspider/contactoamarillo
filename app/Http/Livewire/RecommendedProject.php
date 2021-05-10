<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

use App\Models\Expert;
use App\Models\Proyect;

class RecommendedProject extends Component
{
    public $recommendedProject;

    public function mount()
    {
        $user = Auth::user();
        $expert = $user->usable;
        $projects = Proyect::all();
        $expertSubareas = $expert->subcategorias;
        
        foreach($expertSubareas as $subarea)
        {
            foreach($projects as $project)
            {
                if($project->subcategoria_id == $subarea->id)
                {
                    $this->recommendedProject = $project;
                }
            }
        }
    }
    public function render()
    {
        return view('livewire.recommended-project');
    }
}
