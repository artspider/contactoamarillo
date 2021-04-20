<?php

namespace App\Http\Livewire\Employer;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Rules\MaxWordsRule;

use App\Models\Employer;
use App\Models\Categoria;
use App\Models\Subcategoria;
use App\Models\Proyect;

class Publishproyect extends Component
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

    protected $rules = [
        'description' => 'required|min:15',
        'categoria' => 'required',
        'subcategoria' => 'required',
        'delivery_time' => 'required',
        'budget' => 'required',
    ];

    public function mount()
    {
        $this->categorias = Categoria::all();
        $this->delivery_time=7;
    }

    public function render()
    {
        return view('livewire.employer.publishproyect',[
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
        
        $proyect = new Proyect();
        $user = Auth::user();
        $employer = $user->usable;

        if(isset(Proyect::latest()->first()->id)){
            $proyect->title = $employer->id . "project" . Proyect::latest()->first()->id;
        }else{
            $proyect->title = $employer->id . "project00";
        }
        /* try{
            $valor = Proyect::latest()->first()->id;
            $proyect->title = $employer->id . "project" . Proyect::latest()->first()->id;
        }catch(exeption $e){
            $proyect->title = $employer->id . "project00";
        } */
        
        
        
        $proyect->description = $this->description;
        $proyect->delivery_time = $this->delivery_time;
        $proyect->budget = $this->budget;
        $proyect->status = "no_iniciado";        
        $proyect->category_id = $this->categoriaId;
        $proyect->subcategory_id = $this->subcategoriaId;
        $proyect->employer_id = $employer->id;

        $proyect->save();
        $this->emit('showmessagesuccess');
        return redirect()->to('/employer/showprojects');
    }
}
