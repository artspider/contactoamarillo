<?php

namespace App\Http\Livewire\Createservice;

use Livewire\Component;
use Illuminate\Http\Request;
use Session;

use App\Models\Imagen;
use App\Models\Service;

class Galeria extends Component
{
    public $imagenes;
    public $serviceId;

    protected $listeners = [
        'deleteImage' => 'removeImage',
        'updateImage' => 'updateImages'
    ];

    public function updateImages()
    {
        logger('update images');
        $service = Service::find($this->serviceId);        
        $this->imagenes = $service->imagenes()->get();
    }

    public function mount()
    {
        $oldService = Session::has('service') ? Session::get('service') : null;
        if(isset($oldService)){
            $this->serviceId = $oldService->id;            
            $this->step =  $oldService->step;
            $this->updateImages($this->serviceId);
        }else{
            $this->emit('error','Debes crear primero tu servicio');
        }       
    }

    public function render()
    {
        return view('livewire.createservice.galeria');
    }

    public function saveIamgenes()
    {        
        $this->updateImages($this->serviceId);
        session()->forget('service');
        $this->emit('success','Se actualizo tu galeria');
        $this->step = 5;
        $this->emit('updatestep',$this->step);
    }

    public function removeImage($key)
    {
        $image = Imagen::find($key);
        try{
            $image->delete();
            $this->emit('success','Se elimino tu registro');
            $this->updateImages($this->serviceId);
        }catch(\Exception $e){
            $this->emit('deleteerror','No se pudo eliminar el registro');
        }
    } 

    public function saveIamgenesBack(){
        $service = Service::find($this->serviceId);
        $this->step = 3;
        $service_session = new ServiceSession($service);
        $service_session->step = $this->step;
        Session::put('service', $service_session);
    }
}
