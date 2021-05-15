<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;

use App\Models\Expert;
use App\Models\Tag;

class AlgoliaSearch extends Component
{
    public $search;
    public $resultsInSpeciality;
    public $resultsInSkills;
    public $showDelete = false;

    public function render()
    {
        $r=[];
        $results = [];
        $tags = [];
        if(($this->search != "") and ($this->search != " "))
        {
            /* $tags = Tag::with('experts')->name($this->search)->get(); */
            $tags = Tag::with('experts')
                ->select('id','name')
                ->selectRaw('
                    match(name) 
                    against(? in natural language mode) as score', [$this->search])
                ->whereRaw('
                    match(name) 
                    against(? in natural language mode) > 0.0000001', [$this->search])
                ->get();

            $results = $tags->pluck('experts')->unique('id')->collapse();
            logger($results);

            $expertsWithProfesion = Expert::select('id','nombre','especialidad','created_at')
                ->selectRaw('
                    match(especialidad) 
                    against(? in natural language mode) as score', [$this->search])
                ->whereRaw('
                    match(especialidad) 
                    against(? in natural language mode) > 0.0000001', [$this->search])
                ->get();
            logger('Expertos con profesion:' . $expertsWithProfesion);
            $r = $results->merge($expertsWithProfesion);
            $r = collect($r)->unique('id');
            logger('Lo que encontro en la busqueda' . $r);
        }
        return view('livewire.algolia-search',[
            'results' => $r
        ])
        ->layout('components.contacto-amarillo.employer-layout');
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
        $this->showDelete = false;
    }
}
