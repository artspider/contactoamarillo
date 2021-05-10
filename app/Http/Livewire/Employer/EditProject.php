<?php

namespace App\Http\Livewire\Employer;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Rules\MaxWordsRule;

use App\Models\Employer;
use App\Models\Categoria;
use App\Models\Subcategoria;
use App\Models\Proyect;

class EditProject extends Component
{
    public $categorias;
    public $categoriaId;
    public $subcategorias;
    public $subcategoriaId;
    public $categoria;
    public $subcategoria;
    public $employer_id;

    public $title;
    public $description;
    public $delivery_time;
    public $budget;
    public $status;
    public $smodal=false;
    public $catSelected;
    public $subcatSelected;
    public $editProject;
    public $projectId;

    protected $rules = [
        'description' => 'required|min:15',
        'categoria' => 'required',
        'subcategoria' => 'required',
        'delivery_time' => 'required',
        'budget' => 'required',
    ];

    public function mount($id)
    {
        $this->categorias = Categoria::all();
        $project = Proyect::find($id);
        $this->projectId = $project->id;

        $this->description = $project->description;
        $this->delivery_time = $project->delivery_time;
        $this->budget = $project->budget;
        $this->categoriaId = $project->categoria_id;
        $this->catSelected = $project->categoria_id;;
        $this->subcategoriaId = $project->subcategoria_id;
        $this->subcatSelected = $project->subcategoria_id;

        $this->categoria = Categoria::find($this->categoriaId);
        $this->subcategorias = $this->categoria->subcategorias()->get();
        $this->subcategoria = Subcategoria::find($this->subcategoriaId);
        $this->servicetags = $this->subcategoria->tags()->get();
    }

    public function render()
    {
        return view('livewire.employer.edit-project',[
            'categorias' => $this->categorias,
            'subcategorias' => $this->subcategorias
        ])
        ->layout('components.contacto-amarillo.employer-layout');
    }

    public function updatedcategoriaId()
    {
        $this->categoria = Categoria::find($this->categoriaId);
        
        $this->subcategorias = $this->categoria->subcategorias()->get();        
    }

    public function updatedsubcategoriaId()
    {
        $this->subcategoria = Subcategoria::find($this->subcategoriaId);
        $this->servicetags = $this->subcategoria->tags()->get();
    }

    public function saveproyect()
    {
        $this->validate();        
        
        $this->editProject = Proyect::find($this->projectId);
        $this->editProject->description = $this->description;
        $this->editProject->delivery_time = $this->delivery_time;
        $this->editProject->budget = $this->budget;
        $this->editProject->status = "no_iniciado";        
        $this->editProject->categoria_id = $this->categoriaId;
        $this->editProject->subcategoria_id = $this->subcategoriaId;

        $this->editProject->save();
        //$this->emit('success', 'Se creo y publico tu proyecto');
        $this->description = "";
        $this->delivery_time = 7;
        $this->budget = null;
        $this->categoriaId = null;
        $this->subcategoriaId = null;
        $this->smodal = true;
    }

    public function sendMsgAndClose()
    {
        return redirect()->to('/employer/showprojects');
    }
}
