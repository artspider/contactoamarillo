<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

use App\Models\Employer;
use App\Models\Service;
use App\Models\Subcategoria;

class SearchDropdown extends Component
{
    public $search;
    public $showDelete = false;

    public function render()
    {        
        return view('livewire.search-dropdown');
    }

    public function updatedSearch()
    {
        if(strlen($this->search) > 1){
            $this->showDelete = true;
        }else{
            $this->showDelete = false;
        }
    }

    public function cleanSearch()
    {
        $this->search = "";
        $this->showDelete = false;
    }

    public function doSearch()
    {
        return redirect()->to('employer/searchresult/'.$this->search);
    }
}
