<?php

namespace App\Http\Livewire\Profile;
use Illuminate\Support\Facades\Auth;

use App\Models\Expert;
use App\Models\Perfil;

use Livewire\Component;

class EditPresentation extends Component
{
    public $expert;
    public $expert_id;
    public $profile_id;
    public $quien_soy;

    public function updateModel()
    {        
        if($this->profile_id){
            $profile = Perfil::find($this->profile_id);            
            $this->quien_soy = $profile->quien_soy;
        }else{
            $this->quien_soy = "";
        }        
    }

    public function mount()
    {
        $user = Auth::user();
        $expert = $user->usable;
        $profile = $expert->perfiles()->first();
        $this->profile_id = $profile->id; 
        $this->updateModel();
    }

    public function render()
    {
        return view('livewire.profile.edit-presentation',[
            'quien_soy' => $this->quien_soy
        ]);
    }

    public function updatePresentation()
    {
        if($this->profile_id){            
            $profile = Perfil::find($this->profile_id)->first();
            $profile->quien_soy = $this->quien_soy;
        }else{
            dd('new');
            $profile = new Perfil();
            $profile->quien_soy = $this->quien_soy;
        }
        $profile->save();
        $this->profile_id = $profile->id;
        $this->emit('success','Se han actualizado tus datos');
    }
}
