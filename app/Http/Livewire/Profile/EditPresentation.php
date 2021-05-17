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
            $this->quien_soy = $profile->quien_soy;
        }else{
            $this->quien_soy = "";
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
        return view('livewire.profile.edit-presentation',[
            'quien_soy' => $this->quien_soy
        ]);
    }

    public function updatePresentation()
    {
        if($this->profile_id){            
            $profile = Perfil::find($this->profile_id);
            $profile->quien_soy = $this->quien_soy;
        }else{
            $profile = new Perfil();
            $profile->fecha_nacimiento = today();
            $profile->quien_soy = $this->quien_soy;
            $profile->expert_id = $this->expert_id;
        }
        $profile->save();
        $this->profile_id = $profile->id;
        $this->emit('success','Se han actualizado tus datos');
        $this->emit('profileId',$profile->id);
    }
}
