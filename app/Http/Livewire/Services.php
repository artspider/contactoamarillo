<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Collection;

use App\Models\Expert;
use App\Models\Service;

class Services extends Component
{
    public $services;

    protected $listeners = ['deleteService' => 'removeService'];

    public function updateServices()
    {
        $user = Auth::user();
        $expert = $user->usable;        
        $this->services = $expert->services()->get(); 
    }

    public function mount()
    {
        $this->updateServices();        
    }

    public function render()
    {
        return view('livewire.services',[
            'services' => $this->services
        ]);
    }

    public function createService()
    {
        return redirect()->to('/createservice');
    }

    public function removeService($key)
    {
        $service = Service::find($key);
        try{
            $service->delete();
            $this->emit('success','Se elimino tu registro');
            $this->updateServices();  
        }catch(\Exception $e){
            $this->emit('deleteerror','No se pudo eliminar el registro');
        }
    }
}
