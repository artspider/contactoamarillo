<?php

namespace App\Http\Livewire\Employer;

use Livewire\Component;
use App\Models\Service;

class SearchResult extends Component
{
    public $search;

    public function mount($search)
    {
        $this->search = $search;
    }
    public function render()
    {
        $results = Service::search($this->search)->get();
        

        return view('livewire.employer.search-result',[
            'results' => $results
        ])
        ->layout('components.contacto-amarillo.employer-layout');;
    }
}