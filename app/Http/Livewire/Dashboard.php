<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

use App\Models\Employer;
use App\Models\Expert;
use App\Models\Order;

class Dashboard extends Component
{
    public $projects;
    public $recomended;
    public $nextProjects;
    public $projectsThisMonth;
    public $earnings;
    public $earnThisMonth;
    public $mes;

    public function mount()
    {
        $user = Auth::user();
        $expert = $user->usable;
        $this->projects = $expert->orders;
        $this->nextProjects = $expert->sortorders->take(2);
        $this->earnings = $this->projects->sum('precio_acordado');
        $this->mes=Carbon::now()->month;
        $this->projectsThisMonth = $expert->orders()->whereMonth('created_at',$this->mes)->count();
        $this->earnThisMonth = $expert->orders()->whereMonth('created_at',$this->mes)->sum('precio_acordado');
    }

    public function render()
    {
        return view('livewire.dashboard',[
            'projects' => $this->projects,
            'nextProjects', $this->nextProjects
        ])
        ->layout('components.layouts.master');
    }
}
