<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Http;

use App\Models\Expert;
use App\Models\Categoria;
use App\Models\Subcategoria;


class SpecialityBlock extends Component
{
    public $expert_id;
    public $categorias;
    public $CategoriaId = 1;
    public $totalcat = 0;
    public $specialities = [];
    public $subcategories = [];
    public $subcategoriesFromModel = [];

    protected $listeners = [
        'refreshSubareaView' => 'updateSubareaView',
        'toggleSubareaModel' => 'toggleSubarea'
    ];

    public function pageLoaded()
    {
        logger('cargadoxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx');
        $this->getSubareas();
    }

    public function updateSubareaView()
    {   
        logger('en el updat sub area');
        $this->subcategories = [];
        $user = Auth::user();
        $expert = $user->usable;
        $this->expert_id = $expert->id;
        //El experto tiene áreas de especialidad?
        if(empty($expert->especialidad)){
            logger('vacio');
            $this->totalcat = 0;
            $this->specialities = null;
            $this->subcategories = null;
        }else{
            //Se cargan las subcategorias y se muestran en la vista
            // specialities es solo un array intermedio
            $this->specialities = explode(",",$expert->especialidad);
            $this->totalcat = count($this->specialities);
            for ($i=0; $i < $this->totalcat; $i++) {                 
                $cat = Categoria::where('nombre',$this->specialities[$i])->first();
                $subcat = $cat->subcategorias->pluck('name');
                foreach ($subcat as $key => $item) {
                    array_push($this->subcategories,$item);
                }
            }
            logger($this->subcategories);
        }        
    }

    public function getSubareas()
    {
        $expert = Expert::find($this->expert_id);
        $subareas =$expert->subcategorias->pluck('name');
        foreach ($subareas as $key => $item) {
            array_push($this->subcategoriesFromModel,$item);
            logger('la subcategoria en el modelo');
            logger($item);
            $idinview = array_search($item,$this->subcategories);
            logger($idinview);
            logger('el key a enviar es:');
            logger($idinview);
            $this->emit('subcatselected', $idinview);
        }
    }

    public function mount()
    {
        $this->updateSubareaView();
    }

    public function render()
    {
        dd($this->subcategories);
        return view('livewire.speciality-block',[
            'subcategories' => $this->subcategories
        ]);
    }

    public function toggleSubarea($key)
    {
        $expert = Expert::find($this->expert_id);
        $subareaName = $this->subcategories[$key];
        $idinModel = array_search($subareaName, $this->subcategoriesFromModel);        
        if(false !== $idinModel){
            logger("quita del modelo: ");
            logger($this->subcategoriesFromModel[$idinModel]);            
            $subcat = Subcategoria::where('name',$this->subcategoriesFromModel[$idinModel])->first();
            $expert->subcategorias()->detach($subcat->id);
            unset($this->subcategoriesFromModel[$idinModel]);
        }else{
            logger("agregar al modelo: ");
            logger($key);
            logger($this->subcategories[$key]);            
            $subcat = Subcategoria::where('name',$this->subcategories[$key])->first();
            $expert->subcategorias()->attach($subcat->id);
            array_push($this->subcategoriesFromModel,$this->subcategories[$key]);
        }
        
        
        /* $this->getSubareas(); */
        
        
        /* $expert = Expert::find($this->expert_id);
        $expert->subcategorias()->attach(); */
    }

}
