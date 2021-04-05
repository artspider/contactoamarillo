<?php

namespace App\Http\Livewire\Profile;

use Livewire\Component;

use Khsing\World\World;

class EditPersonals extends Component
{
    public $coutries;
    public $states;
    public $cities;
    public $country;

    public function mount()
    {
        $this->countries = World::Countries()->sortBy('name');
        $this->states = null;
    }
    
    public function render()
    {
        return view('livewire.profile.edit-personals',[
            'countries' => $this->countries,
            'states' => $this->states,
            
        ]);
    }

    public function updatedCountry($country)
    {
        logger($country);
        dd($country->has_divisions);
    }
}
