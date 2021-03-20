<?php

namespace App\Http\Livewire\Education;

use Livewire\Component;
use \Illuminate\Session\SessionManager;
use Illuminate\Support\Facades\Auth;
use App\Models\titulo;

class EducationAdd extends Component
{
    public $escuela;
    public $carrera;
    public $fecha_terminacion;
    public $sigue_estudiando;
    public $expert_id;
    public $educacion;

    public function mount()
    {
        logger('En el mount de Educacion');
        $user = Auth::user();
        $expert = $user->usable;
        $this->expert_id = $expert->id;
        logger('El experto es: ');
        logger($this->expert_id);
        $this->sigue_estudiando = false;
    }
    public function render()
    {
        return view('livewire.education.educationadd');
    }


  public function createCarrera()
  {
    logger('En el create Carrera');
    $data = $this->validate([
      'escuela' => 'required|min:3',
      'carrera' => 'required|min:7',
      'fecha_terminacion' => 'required|size:4'
    ]);

    $estudios = Titulo::create([
      'escuela' => $this->escuela,
      'carrera' => $this->carrera,
      'fecha_terminacion' =>$this->fecha_terminacion,
      'sigue_estudiando' => $this->sigue_estudiando,
      'expert_id' => $this->expert_id,
      'created_at' => now(),
      'updated_at' => now(),
    ]);

    logger($estudios);
    $this->resets_();
    $this->loadEducacion();
    
    $this->emit('refreshCarreras');
    logger('no te pases');
  }

  public function loadEducacion()
    {
        $user = Auth::user();
        $expert = $user->usable;
        $this->expert_id = $expert->id;        
        $this->educacion = $expert->titulos;
        if(count($this->educacion) == 0){
            $this->educacion = null;   
        }
    }

  public function resets_()
  {
    $this->escuela = null;
    $this->carrera = null;
    $this->fecha_terminacion = null;
  }

}
