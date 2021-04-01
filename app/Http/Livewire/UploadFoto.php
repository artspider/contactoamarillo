<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Http\Request;
use Session;

use App\Models\Service;
use App\Models\Imagen;

class UploadFoto extends Component
{
    use WithFileUploads;

    private $photo;

    public function mount(Request $request)
    {
        $this->photo = $request->file('file');
        $request->validate([
            'file' => 'image|max:2048', // 2MB Max
        ]);

        $oldService = Session::has('service') ? Session::get('service') : null;
        if(isset($oldService)){
            $url_foto = $this->photo->store('fotos', 'public');
            $image = new Imagen();
            $image->ruta = str_replace("public","storage", $url_foto); 
            $image->service_id = $oldService->id;
            $image->save();
        }        
    }

    public function render()
    {        
        return view('livewire.upload-foto');
    }
}
