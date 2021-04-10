<?php

namespace App\Http\Livewire\Profile;

use Livewire\Component;
use Khsing\World\World;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Auth;

use App\Models\Expert;
use App\Models\Perfil;

class EditPersonals extends Component
{
    public $countries;
    public $country;
    public $states;
    public $state;
    public $cities;
    public $city;
    public $birthday;
    public $profile_id;
    public $expert_id;

    protected $listeners = ['profileId'];

    public function profileId($id)
    {
        $this->profile_id = $id;
        $this->updateModel();
    }

    public function updateModel()
    {        
        if($this->profile_id){
            $profile = Perfil::find($this->profile_id);            
            $this->country = $profile->pais;
            if($profile->estado){
                $this->state = $profile->estado;
            }
            $this->birthday = $profile->fecha_nacimiento;
        }        
    }

    public function mount()
    {
        $this->countries = World::Countries()->sortBy('name');
        $user = Auth::user();
        $expert = $user->usable;
        $this->expert_id = $expert->id;
        $profile = $expert->perfiles()->first();
        if($profile){
            $this->profile_id = $profile->id;
        }
        $this->updateModel();
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
        $this->country = $country;        
        if($country === 'Mexico'){
            $this->states = Http::get('https://api-sepomex.hckdrk.mx/query/get_estados?token=ce7a8e55-adf9-4c74-94af-c8353ef51944')['response']['estado'];
        }        
    }

    public function updatePersonals()
    {        
        if($this->profile_id){
                    
            $profile = Perfil::find($this->profile_id)->first();
            $profile->pais = $this->country;
            if($this->state){
                $profile->estado = $this->state;
            }
            $profile->fecha_nacimiento = $this->birthday;
        }else{
            
            $profile = new Perfil();
            $profile->pais = $this->country;
            if($this->state){
                $profile->estado = $this->state;
            }
            $profile->fecha_nacimiento = $this->birthday;
            $profile->expert_id = $this->expert_id;
        }
        $profile->save();
        $this->profile_id = $profile->id;
        $this->emit('success','Se han actualizado tus datos');
        $this->emit('updateProfile',$profile->id);
    }
}
