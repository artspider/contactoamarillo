<?php

namespace App\Http\Livewire\Editservice;

use Livewire\Component;

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


    public function updateImages($id)
    {
        logger('update images');
        $service = Service::find($id);        
        $this->imagenes = $service->imagenes()->get();
    }

    public function mount($id)
    {
        $this->serviceId = $id;
        $this->updateImages($id);
    }
    
    public function render()
    {
        return view('livewire.editservice.galeria',[
            'imagenes' => $this->imagenes
        ]);
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

    public function updateImage()
    {
        $this->updateImages($this->serviceId);
        $this->emit('success','Se actualizo tu galeria');
    }
}
