<?php

namespace App\Http\Livewire\Employer;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Notifications\newMsjToExpert;

use App\Models\expert;
use App\Models\tag;
use App\Models\expert_tag;

class ExpertDetail extends Component
{
    public $expert;
    public $expert_id;
    public $profile;
    public $languages;
    public $tags;
    public $titulos;
    public $certifications;
    public $curriculum;

   
    public $about; //descripcion personal y de lo que ofrece al empleador o empresa
    public $educacion;
    public $experiencia;
    public $mensaje;

    public function mount($id)
  {
    $this->expertId = $id;
    $this->expert = Expert::find($id);    
    $this->tags = $this->expert->tags;
    $this->educacion = $this->expert->titulos;
    $this->experiencia = $this->expert->trabajos;
    $this->profile = $this->expert->perfiles;
    $this->languages = $this->expert->languages;

    /* $this->nombre = $expert->nombre;
  $this->telefono;
  $this->profesion;
  $this->especialidad;
  $this->cedula;
  $this->ciudad;
  $this->estado;
  $this->facebook;
  $this->instagram;
  $this->twitter;
  $this->habilidades; //tags
  $this->email;
  $this->foto;
  $this->foto_perfil;
  $this->expert_id;

  $this->tags;
  $this->about; //descripcion personal y de lo que ofrece al empleador o empresa
  public $educacion;
  $this->experiencia; */

  }

    public function render()
    {
        return view('livewire.employer.expert-detail',[
            'expert' => $this->expert,
            'profile' => $this->profile,
            'languages' => $this->languages,
            'tags' => $this->tags,
            'titulos' => $this->titulos
        ])
        ->layout('components.contacto-amarillo.contacto-layout');
    }
}
