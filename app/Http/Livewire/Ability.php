<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Http;

use App\Models\Expert;
use App\Models\Tag;
use App\Models\Expert_Tag;
use App\Models\Categoria;
use App\Models\Subcategoria;
use App\Models\Subcategoria_Tag;

class Ability extends Component
{
    public $habilidades;
    public $expert_id;
    public $tags;
    public $categorias;
    public $CategoriaId = 1;
    public $subcategorias;
    public $subcategoriaId;
    public $subcategoriaTags;
    public $tagsDisponibles;
    public $listOfTagsToAdd;
    public $listOfTagsToRemove;

    protected $listeners = [
        'refreshHabilidades' => 'actualizaHabilidades',
        'onemoreability' => 'addAbility',
        'onelessability' => 'removeAbility'
    ];

    public function load()
    {
        $this->listOfTagsToAdd = [];
        $this->listOfTagsToRemove = [];
        $this->categorias = Categoria::all();
        $this->tags = Tag::orderBy('name')->get();
    }
    
    public function mount()
    {
        $this->load();        
        $user = Auth::user();
        $expert = $user->usable;
        $this->expert_id = $expert->id;
        $this->habilidades = $expert->tags;
    }

    public function render()
    {
        return view('livewire.ability');
    }

    public function updateAbility(){
        logger('En actualiza Habilidades');
        $user = Auth::user();
        $expert = $user->usable;
        $this->habilidades = $expert->tags;
        if(!empty ( $this->subcategoriaTags )){
            $subcategoryTagsCollection = collect($this->subcategoriaTags->pluck('name','id')->all());
            $expertTagsCollection = collect($this->habilidades->pluck('name', 'id')->all());
            $this->tagsDisponibles = $subcategoryTagsCollection->diffAssoc($expertTagsCollection)->all();
        }
        
    }

    public function addAbility($tag_id)
    {
        $user = Auth::user();
        $expert = $user->usable;
        try{
            $expert->tags()->attach($tag_id);
        }catch(\exception $e){
            session()->flash('error', 'Ocurrio un error. Vuelve a intentar');
            $this->updateAbility();
            return redirect('ability');
        }
        $this->updateAbility();
    }

    public function removeAbility($tag_id)
    {
        $user = Auth::user();
        $expert = $user->usable;
        $expert->tags()->detach($tag_id);
        $this->updateAbility();
    }

    public function addTags()
    {
        logger('En addTags');
        $user = Auth::user();
        $expert = $user->usable;

        //$all_tags = explode(",", $this->tags);


        logger('tag con contenido');
        if(count($this->listOfTagsToRemove) > 0)
        {
        foreach($this->listOfTagsToRemove as $one_tag)
        {
            $expert_tag = $expert->tags()->detach($one_tag);
        }
        $this->habilidades = $expert->tags;
        $this->getAvailableTags();
        $this->listOfTagsToRemove = [];
        }

        if(count($this->listOfTagsToAdd) > 0)
        {
        foreach($this->listOfTagsToAdd as $one_tag)
        {
            logger($one_tag);
            /* $one_tag = ltrim($one_tag);
            if($one_tag != '')
            {
            $tag = Tag::find($one_tag);

            if(!$tag)
            {
            $tag = Tag::create([
                'name' => $one_tag,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
            }}*/

            $expert_tag = Expert_tag::create([
            'expert_id' => $expert->id,
            'tag_id' => $one_tag,
            'created_at' => now(),
            'updated_at' => now(),
            ]);         
        }
        $this->habilidades = $expert->tags;
        $this->getAvailableTags();
        $this->listOfTagsToAdd = [];      
        }
        
        
        session()->flash('message-contactUpdate', 'Se actualizaron tus datos');

        
        
        $this->reset('tags');
        logger('Saliendo de addTags');
        session()->flash('message-addTags', 'Se actualizaron tus datos');
        
    }

    public function addTag($tag_id)
    {
        logger('tag a agregar: ');
        logger($tag_id);
        if (in_array($tag_id, $this->listOfTagsToAdd)) {      
        $key = array_search($tag_id, $this->listOfTagsToAdd);
        unset($this->listOfTagsToAdd[$key]);
        }else{
        array_push($this->listOfTagsToAdd, $tag_id);
        }
        
        logger('lista de tags a agregar');
        logger($this->listOfTagsToAdd);
    }

    public function removeTag($tag_id)
    {
      logger('tag a remover: ');
      logger($tag_id);
      logger('Lista de tags a remover antes: ');
      logger($this->listOfTagsToRemove);
      if (in_array($tag_id, $this->listOfTagsToRemove)) {
        $key = array_search($tag_id, $this->listOfTagsToRemove);
        unset($this->listOfTagsToRemove[$key]);
      }else{
        array_push($this->listOfTagsToRemove, $tag_id);
      }
      logger('lista de tags a remover despues: ');
      logger($this->listOfTagsToRemove);
    }

    public function updatedCategoriaId()
    {
        logger('Se selecciono la categoria: ');
        logger($this->CategoriaId);
        if($this->CategoriaId>0){
            $this->subcategorias = Categoria::find($this->CategoriaId)->subcategorias;
        }else{
            $this->subcategorias = null;
        }
    }
  
      public function updatedsubcategoriaId()
      {        
        $subcategoria = Subcategoria::find($this->subcategoriaId);
        logger('Subcategoria seleccionada: ');
        logger($subcategoria);
  
        $this->subcategoriaTags = $subcategoria->tags;
        $this->getAvailableTags();
  
        /*  $subcategoryTagsCollection = collect($this->subcategoriaTags->pluck('name','id')->all());
        $expertTagsCollection = collect($this->habilidades->pluck('name', 'id')->all());
  
        logger('Tags de esta subcategoria: ');      
        logger($subcategoryTagsCollection->sortBy('name')->all());
        logger('tags de este experto: ');
        logger($expertTagsCollection);
  
        $this->tagsDisponibles = $subcategoryTagsCollection->diffAssoc($expertTagsCollection)->all(); */
        
        logger('La diferencia de colecciones: ');
        logger($this->tagsDisponibles);
        $this->listOfTagsToAdd = [];
        
      }
  
    public function getAvailableTags() {
      if($this->subcategoriaTags != null) {
        $subcategoryTagsCollection = collect($this->subcategoriaTags->pluck('name','id')->all());
        if($this->habilidades != null) {
          $expertTagsCollection = collect($this->habilidades->pluck('name', 'id')->all());
          $this->tagsDisponibles = $subcategoryTagsCollection->diffAssoc($expertTagsCollection)->all();
        }else{
          $this->tagsDisponibles = $this->subcategoriaTags->pluck('name','id')->all();
        }
      }    
    }

    public function resets_()
    {
        $this->CategoriaId = 1;
        $this->subcategorias = null;
        $this->subcategoriaId = 1;
        $this->subcategoriaTags = null;
        $this->tagsDisponibles = null;
        $this->listOfTagsToAdd = [];
        $this->listOfTagsToRemove = [];
    }
}
