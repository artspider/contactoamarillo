<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Http;
use Livewire\WithFileUploads;
use App\Rules\MaxWordsRule;
use Illuminate\Http\Request;
use Session;

use App\Models\Expert;
use App\Models\Tag;
use App\Models\Expert_Tag;
use App\Models\Categoria;
use App\Models\Subcategoria;
use App\Models\Subcategoria_Tag;
use App\Models\Service;
use App\Models\ServiceSession;

class CreateService extends Component
{
    use WithFileUploads;

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
    public $tiempoDeEntregaId;
    public $tiempoDeEntrega;
    public $entregables;
    public $precio;
    public $descripcion;
    public $foto;
    public $step = 1;

    protected $listeners = [
        'updatestep' => 'changeStep',
    ]; 

    public function changeStep($step)
    {
        $this->step = $step;
    }

    public function mount()
    {        
        $oldService = Session::has('service') ? Session::get('service') : null;
        if(isset($oldService)){
            logger('hay algo en la sesion');
            $this->serviceId = $oldService->id;
            $this->titulo = $oldService->titulo;
            $this->categoriaId = $oldService->categoria_id;
            $this->subcategoriaId = $oldService->subcategoria_id;            
            $this->tiempoDeEntrega = $oldService->tiempo_de_entrega;
            $this->entregables = $oldService->producto_a_entregar;
            $this->precio = $oldService->precio;
            $this->descripcion = $oldService->descripcion;
            $this->step =  $oldService->step;
        }else{
            logger('nada en la session');
            $this->servicetags = [];
            $this->categorias = Categoria::all();
            $this->step = 1;
        }
        
    }    
    
    public function render()
    {
        return view('livewire.create-service');
    }    

    

    public function savePrecioBack(){
        $this->step = 1;
    }
    
    
    
    
}
