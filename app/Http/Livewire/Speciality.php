<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Http;

use App\Models\Expert;
use App\Models\Categoria;
use App\Models\Subcategoria;
use App\Models\Subcategoria_Tag;

class Speciality extends Component
{
    public $expert_id;
    public $categorias;
    public $CategoriaId = 1;
    public $specialities = [];
    public $totalcat = 0;

    public function load()
    {
        
        
        $this->categorias = Categoria::all();
        $user = Auth::user();
        $expert = $user->usable;
        $this->expert_id = $expert->id;
        if(empty($expert->especialidad)){
            logger('vacio');
            $this->totalcat = 0;
            $this->specialities = null;
        }else{
            logger('con contenido');
            $this->specialities = explode(",",$expert->especialidad);
            $this->totalcat = count($this->specialities);
            session()->flash('success', 'Se actualizaron tus datos');
        }
    }
    
    public function mount()
    {
        $this->load();             
    }
    
    public function render()
    {
        return view('livewire.speciality',[
            'specialities' => $this->specialities
        ]);
    }

    public function updatedCategoriaId() {
        session()->forget(['error', 'success']);
        logger($this->totalcat);
        if($this->totalcat >= 3) {
            logger("MAs de 3");
            session()->flash('error', 'Solo hasta 3 áreas de especialización');
            $this->load();
        }else{
            logger("seleccionaste: ");
            $categoria = Categoria::find($this->CategoriaId);
            logger($categoria->nombre);
            $expert = Expert::find($this->expert_id);
            if(empty($expert->especialidad)){
                logger('vacio');
                array_push($this->specialities,$categoria->nombre);
            }else{
                logger('no vacio');
                if (in_array($categoria->nombre, $this->specialities)) {
                    logger("Existe");
                }else{
                    array_push($this->specialities,$categoria->nombre);
                }            
            } 
            $expert->especialidad = implode(",",$this->specialities);
            $expert->save();
            $this->load();
        }
    }

    public function hydrate(){
        logger('en ele hidrate');
    }
}
