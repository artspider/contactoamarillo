<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Http;

use App\Models\Expert;
use App\Models\Tag;
use App\Models\Expert_Tag;
use App\Models\Categoria;
use App\Models\Subcategoria;
use App\Models\Subcategoria_Tag;

class CreateService extends Component
{
    public $categorias;
    public $categoriaId;
    public $subcategorias;
    public $subcategoriaId;
    public $tags;

    public function mount()
    {
        $this->categorias = Categoria::all();
    }

    public function render()
    {
        return view('livewire.create-service',[
            'categorias' => $this->categorias,
            'subcategorias' => $this->subcategorias
        ]);
    }

    public function updatedcategoriaId()
    {
        $categoria_seleccioada = Categoria::find($this->categoriaId);
        $this->subcategorias = $categoria_seleccioada->subcategorias()->get();
        logger('subcategorias');
        logger($this->subcategorias);
    }

    public function updatedsubcategoriaId()
    {
        $subcategoria_seleccionada = Subcategoria::find($this->subcategoriaId);
        $this->tags = $subcategoria_seleccionada->tags()->get();
        logger($this->tags);
    }
}
