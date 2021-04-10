<?php

namespace App\Http\Livewire\Profile;
use Illuminate\Support\Facades\Auth;

use App\Models\Expert;
use App\Models\Perfil;

use Livewire\Component;

class EditSocials extends Component
{
    public $expert;
    public $expert_id;
    public $profile_id;
    public $facebook;
    public $twitter;
    public $dribbble;
    public $github;

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
            $this->facebook = $profile->facebook;
            $this->twitter = $profile->twitter;
            $this->dribbble = $profile->dribbble;
            $this->github = $profile->github;
        }else{
            $this->facebook = "";
            $this->twitter = "";
            $this->dribbble = "";
            $this->github = "";
        }
    }

    public function mount()
    {
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
        return view('livewire.profile.edit-socials');
    }

    public function updateSocials()
    {
        if($this->profile_id){            
            $profile = Perfil::find($this->profile_id)->first();
            $profile->facebook = $this->facebook;
            $profile->twitter = $this->twitter;
            $profile->dribbble = $this->dribbble;
            $profile->github = $this->github;
        }else{
            $profile = new Perfil();
            $profile->facebook = $this->facebook;
            $profile->twitter = $this->twitter;
            $profile->dribbble = $this->dribbble;
            $profile->github = $this->github;
        }
        $profile->save();
        $this->profile_id = $profile->id;
        $this->emit('success','Se han actualizado tus datos');
        $this->emit('updateProfile',$profile->id);
    }
}
