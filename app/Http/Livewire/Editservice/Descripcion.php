<?php

namespace App\Http\Livewire\Editservice;

use Livewire\Component;

use App\Models\Service;

class Descripcion extends Component
{
    public $serviceId;
    public $descripcion;

    protected $listeners = [
        'servicedescription' => 'saveDescripcion',
    ];    

    public function mount($id)
    {
        $service = Service::find($id);
        $this->serviceId = $service->id;
        $this->descripcion = $service->descripcion;
    }
    public function render()
    {
        return view('livewire.editservice.descripcion',[
            'descripcion' => $this->descripcion
        ]);
    }

    public function saveDescripcion($delta)
    {
        $service = Service::find($this->serviceId);
        $service->descripcion = $delta;
        try{
            $service->save();
            $this->descripcion = $delta;
            $this->emit('showquill',1);
            $this->emit('success','Se actualizaron tus datos');
        }catch(Exception $error){
            $this->emit('error','Hubo un error');
        }
        
    }
}
