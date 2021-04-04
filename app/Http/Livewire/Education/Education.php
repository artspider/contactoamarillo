<?php

namespace App\Http\Livewire\Education;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use App\Models\Expert;
use App\Models\Titulo;

class Education extends Component
{
    public $educacion;
    public $escuela_id;
    public $escuela;
    public $carrera;
    public $fecha_terminacion;
    public $sigue_estudiando=0;
    public $showAddEducation = true;
    public $showDropdown = false;
    public $expert_id;
    public $showEditing=false;

    protected $listeners = [
        'refreshCarreras' => 'incrementCarreras',
        'eliminarcarrera' => 'functionDelCarrera',
        'doresets' => 'resets_'
    ];

    public function incrementCarreras()
    {
        logger('Refresh carreras');
        session()->flash('success', 'Se actualizaron tus datos');        
        $this->loadEducacion();
        $this->showAddEducation = false;
        //return redirect()->to('expert/education');
    }

    public function functionDelCarrera($key)
    {
        logger('Eliminar carrera');
        logger($key);
        $this->educacionDelete($key);
    }

    public function mount()
    {
        $this->loadEducacion();
    }

    public function render()
    {
        logger('render eductaion');
        return view('livewire.education.education',[
            'educacion' => $this->educacion
        ]);
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
    public function educacionUpdate()
    {
        logger('en el educacion Update');
        $escuela = Titulo::find($this->escuela_id);

        $data = $this->validate([
        'escuela' => 'required|min:4',
        'carrera' => 'required|min:7',
        'fecha_terminacion' => 'required|min:4|max:4',
        ]);

        $escuela->escuela = $data['escuela'];
        $escuela->carrera = $data['carrera'];
        $escuela->fecha_terminacion = $data['fecha_terminacion'];
        $escuela->sigue_estudiando = $this->sigue_estudiando;
        $escuela->save();

        $this->loadEducacion();
        session()->flash('success', 'Se actualizaron tus datos');
        $this->resets_();
        $this->showEditing=false;
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
        $this->loadEducacion();
        session()->flash('success', 'Se actualizaron tus datos');
        $this->resets_();
    }

    public function educacionDelete($escuela_id)
    {
        logger('La escuela a eliminar es: ' . $escuela_id);
        $escuela = Titulo::find($escuela_id);
        try{
            $escuela->delete();            
        }catch(\Exception $e){
            session()->flash('error', 'Ocurrio un error. Vuelve a intentar');
        }
        logger('tratando de eliminar');
        $this->loadEducacion();
        $this->resets_();
  }

  public function toEditForm($escuela_id)
  {
    $this->escuela_id = $escuela_id;
    $escuela = Titulo::find($escuela_id);
    $this->escuela = $escuela->escuela;
    $this->carrera = $escuela->carrera;
    $this->fecha_terminacion = $escuela->fecha_terminacion;
    $this->sigue_estudiando = $escuela->sigue_estudiando;
  }

  public function resets_()
  {
    $this->escuela = null;
    $this->carrera = null;
    $this->fecha_terminacion = null;
    $this->sigue_estudiando = 0;
  }

  public function hydrate()
  {
      logger('En el hidrate');
     
  }

  public function dehydrate()
  {
    logger('En el dehidrate');
    
  }
}
