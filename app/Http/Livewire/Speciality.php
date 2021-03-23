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
        
    }
    
    public function mount()
    {   $this->categorias = Categoria::all();
        $user = Auth::user();
        $expert = $user->usable;
        $this->expert_id = $expert->id;
        if(empty($expert->especialidad)){
            logger('vacio');
            $this->totalcat = 0;
            $this->specialities = null;
        }else{
            logger('Se cargo especialidad: ');
            logger($expert->especialidad);
            $this->specialities = explode(",",$expert->especialidad);
            $this->totalcat = count($this->specialities);
        }            
    }
    
    public function render()
    {
        return view('livewire.speciality',[
            'specialities' => $this->specialities
        ]);
    }

    public function updatedCategoriaId() {  
        logger($this->totalcat);
        if($this->totalcat >= 3) {
            logger("MAs de 3");
            $this->emit('totalcaterror','Hasta 3 Categorias solamente');
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
            $this->totalcat = count($this->specialities);
            $this->emit('success','Se actualizaron tus datos');
        }
        $this->emit('refreshSubareaView');
    }

    public function removeSelected($key)
    {
        logger('remove:');
        logger($key);
        unset($this->specialities[$key]);
        $this->totalcat = count($this->specialities);
        $expert = Expert::find($this->expert_id);
        $expert->especialidad = implode(",",$this->specialities);
        $expert->save();
        $this->emit('success','Se actualizaron tus datos');
        $this->emit('refreshSubareaView');
    }
    
}
