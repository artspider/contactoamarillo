<?php

namespace App\Http\Livewire\Createservice;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Rules\MaxWordsRule;
use Session;

use App\Models\Expert;
use App\Models\Tag;
use App\Models\Expert_Tag;
use App\Models\Categoria;
use App\Models\Subcategoria;
use App\Models\Subcategoria_Tag;
use App\Models\Service;
use App\Models\ServiceSession;

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
        return view('livewire.createservice.overview',[
            'categorias' => $this->categorias,
            'subcategorias' => $this->subcategorias
        ]);
    }

    public function updatedcategoriaId()
    {
        $categoria_seleccioada = Categoria::find($this->categoriaId);
        $this->subcategorias = $categoria_seleccioada->subcategorias()->get();
        
    }

    public function updatedsubcategoriaId()
    {
        $subcategoria_seleccionada = Subcategoria::find($this->subcategoriaId);
        $this->servicetags = $subcategoria_seleccionada->tags()->get();
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

    public function saveOverview()
    {
        $user = Auth::user();
        $expert = $user->usable;

        if(empty($this->serviceId)){
            $service = new Service();            
        }else{
            $service = Service::find($this->serviceId);            
        }

        $validatedData = $this->validate([
            'titulo' => ['required','min:15',new MaxWordsRule(5)],
            'arraytags' => 'required|min:1',
        ]);
        
        $service->expert_id = $expert->id;
        $service->titulo = $this->titulo;
        $service->categoria_id = $this->categoriaId;
        $service->subcategoria_id = $this->subcategoriaId;
        $service->precio = 0;
        $service->tiempo_de_entrega = 0;
        $service->producto_a_entregar = "";
        $service->descripcion = 'vacio';
        $service->save();
        $this->serviceId = $service->id;
        
        /* foreach($this->arraytags as $tag) {
            $service->tags()->attach($this->arraytags);
        } */
        $service->tags()->attach($this->arraytags);
        $this->step = 2;

        $service_session = new ServiceSession($service);
        $service_session->step = $this->step;
        Session::put('service', $service_session);
        $this->emit('success','Se ha actualizado tu registro');
        $this->emit('updatestep',$this->step);
    }
}
