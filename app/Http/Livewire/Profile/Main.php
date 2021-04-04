<?php

namespace App\Http\Livewire\Profile;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

use App\Models\Expert;
use App\Models\Perfil;
use App\Models\Expert_Language;
use App\Models\Certification;
use App\Models\Titulo;
use App\Models\Language;
use App\Models\Tag;

class Main extends Component
{
    public $expert;
    public $expert_id;
    public $profile;
    public $languages;
    public $tags;
    public $titulos;

    public function updateModels($id)
    {
        $expert = Expert::find($id);
        $this->expert = $expert;
        $this->profile = $expert->perfiles()->first();
        $this->languages = $expert->languages()->get();
        $this->tags = $expert->tags;
        $this->titulos = $expert->titulos;
    }

    public function mount()
    {
        $user = Auth::user();
        $expert = $user->usable;
        $this->expert_id = $expert->id;
        $this->updateModels($this->expert_id);
    }

    public function render()
    {
        return view('livewire.profile.main',[
            'expert' => $this->expert,
            'profile' => $this->profile,
            'languages' => $this->languages,
            'tags' => $this->tags,
            'titulos' => $this->titulos
        ])
        ->layout('components.contacto-amarillo.contacto-layout');
    }
}
