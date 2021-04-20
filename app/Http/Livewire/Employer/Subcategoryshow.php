<?php

namespace App\Http\Livewire\Employer;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

use App\Models\Expert;
use App\Models\Categoria;
use App\Models\Subcategoria;
use App\Models\Service;

class Subcategoryshow extends Component
{
    public $expert_id;
    public $categoria;
    public $subcategorias;
    public $subcatselected;
    public $subcategoria_=null;
    public $services;

    public function mount($id)
    {
        $this->categoria = Categoria::find($id);
        $this->subcategorias = $this->categoria->subcategorias;
        $this->subcatselected=0;
        $this->services = null;
    }

    public function render()
    {
        return view('livewire.employer.subcategoryshow',[
            'subcategorias' => $this->subcategorias
        ])
        ->layout('components.contacto-amarillo.employer-layout');
    }

    public function subcatclicked($id)
    {
        $this->services = null;
        $this->subcategoria_ = null;
        $this->subcategoria_ = Subcategoria::find($id);        
        $this->subcatselected = $id;
        $this->services = Service::where('subcategoria_id','=',$id)->get();
        
    }
}
