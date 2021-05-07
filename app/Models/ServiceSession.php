<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceSession {
    use HasFactory;

    public $id;
    public $titulo;
    public $categoria_id;
    public $subcategoria_id;
    public $expert_id;
    public $precio;
    public $tiempo_de_entrega;
    public $producto_a_entregar;
    public $descripcion;
    public $step;

    public function __construct($oldService){
        if($oldService){
            $this->id = $oldService->id;
            $this->titulo = $oldService->titulo;
            $this->categoria_id = $oldService->categoria_id; 
            $this->subcategoria_id = $oldService->subcategoria_id;
            $this->expert_id = $oldService->expert_id;
            $this->precio = $oldService->precio;
            $this->tiempo_de_entrega = $oldService->tiempo_de_entrega;
            $this->producto_a_entregar = $oldService->producto_a_entregar;
            $this->descripcion = $oldService->descripcion;
            $this->step = $oldService->step;
        }else {
            $this->id = null;
            $this->titulo = null;
            $this->categoria_id = null; 
            $this->subcategoria_id = null;
            $this->expert_id = null;
            $this->precio = null;
            $this->tiempo_de_entrega = null;
            $this->producto_a_entregar = null;
            $this->descripcion = "";
            $this->step = 1;
        }
    }


}
