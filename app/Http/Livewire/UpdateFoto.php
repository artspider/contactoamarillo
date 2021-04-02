<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Http\Request;
use Session;

use App\Models\Imagen;
use App\Models\Service;

class UpdateFoto extends Component
{
    use WithFileUploads;

    private $photo;

    public function mount(Request $request, $id)
    {
        $this->photo = $request->file('file');
        $request->validate([
            'file' => 'image|max:2048', // 2MB Max
        ]);

        $service = Service::find($id);
        $url_foto = $this->photo->store('fotos', 'public');
        $image = new Imagen();
        $image->ruta = str_replace("public","storage", $url_foto);
        $image->service_id = $service->id;
        $image->save();
        logger('emit foto');
        $this->emit('success','Se elimino tu registro');
        $this->emit('updateImage', $service->id);
    }

    public function render()
    {
        return view('livewire.update-foto');
    }
}
