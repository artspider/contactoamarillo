<?php

namespace App\Http\Livewire\Editservice;

use Livewire\Component;

use App\Models\Service;

class Precio extends Component
{
    public $tiempoDeEntregaId;
    public $tiempoDeEntrega;
    public $entregables;
    public $precio;
    public $serviceId;

    public $tiempoDeEntregaData = ['1 Día', '2 Días', '3 Días', '4 Días', '5 Días', '6 Días', '7 Días', '10 Días', '14 Días', '21 Días', '30 Días', '45 Días',
                                   '60 Días', '90 Días'];

    public function mount($id)
    {
        $service = Service::find($id);
        $this->serviceId = $service->id;
        $this->tiempoDeEntrega = $service->tiempo_de_entrega;
        $this->entregables = $service->producto_a_entregar;
        $this->precio = $service->precio;
    }

    public function render()
    {
        return view('livewire.editservice.precio');
    }

    public function savePrecio()
    {
        $service = Service::find($this->serviceId);
        $service->tiempo_de_entrega = $this->tiempoDeEntrega;
        $service->producto_a_entregar = $this->entregables;
        $service->precio =  $this->precio;
        $service->save();

        $this->emit('success','Se actualizaron tus datos');
    }
}
