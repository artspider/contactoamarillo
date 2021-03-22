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
    

    public function mount()
    {
        $user = Auth::user();
        $expert = $user->usable;
        $this->expert_id = $expert->id;
        if(empty($expert->especialidad)){
            logger('vacio');
            $this->totalcat = 0;
            $this->specialities = null;
            $this->subcategories = null;
        }else{
            logger('Se cargaran subcategorias: ');
            logger($expert->especialidad);
            $this->specialities = explode(",",$expert->especialidad);
            $this->totalcat = count($this->specialities);
            for ($i=0; $i < $this->totalcat; $i++) {                 
                $cat = Categoria::where('nombre',$this->specialities[$i])->first();
                $subcat = $cat->subcategorias->pluck('name');
                foreach ($subcat as $key => $item) {
                    logger('se crga:');
                    logger($item);
                    array_push($this->subcategories,$item);
                }
            }
            logger($this->subcategories);
        } 
    }
    public function render()
    {
        return view('livewire.speciality-block',[
            'subcategories' => $this->subcategories
        ]);
    }
}
