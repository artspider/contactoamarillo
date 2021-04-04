<?php

namespace App\Http\Livewire\Createservice;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Rules\MaxWordsRule;
use Session;

use App\Models\Service;
use App\Models\ServiceSession;

class Precio extends Component
{
    public $tiempoDeEntregaId;
    public $tiempoDeEntrega;
    public $entregables;
    public $precio;
    public $serviceId;
    public $step;

    public $tiempoDeEntregaData = ['1 Día', '2 Días', '3 Días', '4 Días', '5 Días', '6 Días', '7 Días', '10 Días', '14 Días', '21 Días', '30 Días', '45 Días',
                                   '60 Días', '90 Días'];

    public function mount()
    {
        $oldService = Session::has('service') ? Session::get('service') : null;
        if(isset($oldService)){
            $this->serviceId = $oldService->id;
            $this->tiempoDeEntrega = $oldService->tiempo_de_entrega;
            $this->entregables = $oldService->producto_a_entregar;
            $this->precio = $oldService->precio;
            $this->step =  $oldService->step;
        }else{
            $this->emit('error','Debes crear primero tu servicio');
        }
    }

    public function render()
    {
        return view('livewire.createservice.precio');
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
        $this->emit('success','Se ha actualizado tu registro');
        $this->emit('updatestep',$this->step);
    }
}
