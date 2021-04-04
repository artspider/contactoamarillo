<?php

namespace App\Http\Livewire\Createservice;

use Livewire\Component;
use App\Rules\MaxWordsRule;
use Illuminate\Http\Request;
use Session;

use App\Models\Service;
use App\Models\ServiceSession;

class Descripcion extends Component
{
    public $serviceId;
    public $descripcion;

    protected $listeners = [
        'servicedescription' => 'saveDescripcion',
    ]; 

    public function mount()
    {
        $oldService = Session::has('service') ? Session::get('service') : null;
        if(isset($oldService)){
            $this->serviceId = $oldService->id;
            $this->descripcion = $oldService->descripcion;
            $this->step =  $oldService->step;
        }else{
            $this->emit('error','Debes crear primero tu servicio');
        }
    }

    public function render()
    {
        return view('livewire.createservice.descripcion');
    }

    public function saveDescripcion($delta)
    {
        $service = Service::find($this->serviceId);
        $this->descripcion = $delta;
        $validatedData = $this->validate([
            'descripcion' => ['required','min:25', new MaxWordsRule(10)],
        ]);
        
        $service->descripcion = $this->descripcion;
        $service->save();
        $this->step = 4;

        $service_session = new ServiceSession($service);
        $service_session->step = $this->step;
        Session::put('service', $service_session);        
        $this->emit('success','Se ha actualizado tu registro');
        $this->emit('updatestep',$this->step);
    }

    public function saveDescripcionBack(){
        $service = Service::find($this->serviceId);
        $this->step = 2;
        $service_session = new ServiceSession($service);
        $service_session->step = $this->step;
        Session::put('service', $service_session);
        $this->emit('updatestep',$this->step);
    }
}
