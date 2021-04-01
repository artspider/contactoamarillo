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
    public $step;

    public $tiempoDeEntregaData = ['1 Día', '2 Días', '3 Días', '4 Días', '5 Días', '6 Días', '7 Días', '10 Días', '14 Días', '21 Días', '30 Días', '45 Días',
                                   '60 Días', '90 Días'];
    
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
        return view('livewire.create-service',[
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
        if(in_array($key, $this->arraytags)) {
            unset($this->arraytags[array_search($key, $this->arraytags)]);
        }else{
            array_push($this->arraytags, $key);
        }
        logger($this->arraytags);        
    } 

    public function saveOverview()
    {
        $expert = Auth::user();

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
        $service->descripcion = "";
        $service->save();
        $this->serviceId = $service->id;
        
        foreach($this->arraytags as $tag) {
            $service->tags()->attach($tag);
        }
        $this->step = 2;

        $service_session = new ServiceSession($service);
        $service_session->step = $this->step;
        Session::put('service', $service_session);
    }

    public function savePrecio()
    {
        $service = Service::find($this->serviceId);
        $validatedData = $this->validate([
            'tiempoDeEntrega' => ['required'],
            'entregables' => ['required','min:25', new MaxWordsRule(10)],
            'precio' => ['required']
        ]);

        $service->tiempo_de_entrega = $this->tiempoDeEntrega;
        $service->producto_a_entregar = $this->entregables;
        $service->precio = $this->precio;
        $service->save();
        $this->step = 3;

        $service_session = new ServiceSession($service);
        $service_session->step = $this->step;
        Session::put('service', $service_session);
    }

    public function saveDescripcion()
    {
        $service = Service::find($this->serviceId);
        $validatedData = $this->validate([
            'descripcion' => ['required','min:25', new MaxWordsRule(10)],
        ]);
        
        $service->descripcion = $this->descripcion;
        $service->save();
        $this->step = 4;

        $service_session = new ServiceSession($service);
        $service_session->step = $this->step;
        Session::put('service', $service_session);
    }

    public function saveIamgenes()
    {
        session()->forget('service');
        return redirect()->to('/services');
    }

    public function savePrecioBack(){
        $this->step = 1;
    }
    
    public function saveDescripcionBack(){
        $service = Service::find($this->serviceId);
        $this->step = 2;
        $service_session = new ServiceSession($service);
        $service_session->step = $this->step;
        Session::put('service', $service_session);
    }
    
    public function saveIamgenesBack(){
        $service = Service::find($this->serviceId);
        $this->step = 3;
        $service_session = new ServiceSession($service);
        $service_session->step = $this->step;
        Session::put('service', $service_session);
    }
}
