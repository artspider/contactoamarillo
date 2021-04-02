<?php

namespace App\Http\Livewire\Editservice;

use Livewire\Component;

use App\Models\Service;
use App\Models\Categoria;
use App\Models\Subcategoria;

class Overview extends Component
{
    public $categorias;
    public $categoriaId;
    public $subcategorias;
    public $subcategoriaId;
    public $serviceId;
    public $titulo;
    public $categoria;
    public $subcategoria;
    public $servicetags;
    public $arraytags = [];

    protected $listeners = [
        'toggletag' => 'updateTags',
    ];

    public function pageLoaded()
    {
        logger('page loaded');
        foreach ($this->servicetags as $tag) {
            $this->emit('subcatselected', $tag->id);
            logger($tag->id);
        }
    }

    public function mount($id)
    {
        $service = Service::find($id);
        $this->serviceId = $service->id;
        $this->categoriaId = $service->categoria_id;
        $this->subcategoriaId = $service->subcategoria_id;
        $this->titulo = $service->titulo;        
        $this->categorias = Categoria::all();
        $this->categoria = Categoria::find($this->categoriaId);       
        $this->subcategorias = $this->categoria->subcategorias()->get();
        $this->servicetags = $service->tags()->get();
        foreach ($this->servicetags as $tag) {
            array_push($this->arraytags, $tag->id);
        }
        logger($this->arraytags);
    }

    public function render()
    {
        return view('livewire.editservice.overview', [
            'categorias' => $this->categorias,
            'subcategorias' => $this->subcategorias,
            'categoriaId' => $this->categoriaId
        ]);
    }

    public function updateTags($key)
    {
        $totalTagsSelected = count($this->arraytags);
       
        if(in_array($key, $this->arraytags)) {
            unset($this->arraytags[array_search($key, $this->arraytags)]);
        }else{
            if( $totalTagsSelected >= 5){
                $this->emit('error','Solo puedes seleccionar 5 o menos');
                $this->emit('subcatselected', $key);
            }else{
                array_push($this->arraytags, $key);
            }         
        }
        logger($this->arraytags);        
    }

    public function updatedcategoriaId()
    {
        $categoria_seleccioada = Categoria::find($this->categoriaId);
        $this->subcategorias = $categoria_seleccioada->subcategorias()->get();
        $this->arraytags = [];
    }

    public function updatedsubcategoriaId()
    {
        $subcategoria_seleccionada = Subcategoria::find($this->subcategoriaId);
        $this->servicetags = $subcategoria_seleccionada->tags()->get();
        $this->arraytags = [];
    }

    public function saveOverview()
    {
        $service = Service::find($this->serviceId);
        $service->titulo = $this->titulo;
        $service->categoria_id = $this->categoriaId;
        $service->subcategoria_id = $this->subcategoriaId;       
        $service->save();
        $service->tags()->detach();
        foreach($this->arraytags as $tag) {
            $service->tags()->attach($tag);
        }
        $this->emit('success','Se actualizaron tus datos');
    }
}
