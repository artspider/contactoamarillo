<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Http\Request;

class UploadFoto extends Component
{
    use WithFileUploads;

    private $photo;

    public function mount(Request $request)
    {
        $this->photo = $request->file('file');
        $request->validate([
            'file' => 'image|max:1024', // 1MB Max
        ]);
        
        logger($this->photo);
        $this->photo->store('photos');
    }
    public function render()
    {        
        return view('livewire.upload-foto');
    }
}
