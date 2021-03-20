<?php

namespace App\Http\Livewire\Education;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

use App\Models\expert;
use App\Models\language;
use App\Models\expert_language;

class Lang extends Component
{
    public $idiomas;
    public $idiomaId;
    public $niveles;
    public $nivelId;
    public $isDisbledBtn = "disabled";
    public $expert_id;
    public $expertLanguages;

    protected $listeners = ['refreshLanguage' => 'gotoRefreshLanguage'];

    public function gotoRefreshLanguage($key)
    {
        logger('quiero eliminar');
        logger($key);
        $this->removeLanguage($key);
    }

    public function mount()
    {
         $this->loadIdiomas();
        $this->loadExpert();
    }

    public function render()
    {
        return view('livewire.education.lang',[
            'expertLanguages' => $this->expertLanguages
        ]);
    }

    public function addLanguage() {
        logger('Agregando lenguaje');
        $language = $this->idiomas[intval($this->idiomaId)];
        $level = trim($this->nivelId);
        $selectedLanguageAnLevel = Language::where('language', $language)->where('level',$level)->first();
        
        $expert = Expert::find($this->expert_id);
        try{
            $expert->languages()->attach($selectedLanguageAnLevel->id);
        }catch(\Exception $exception) {
            logger('una exception');
            session()->flash('error', 'Ya existe en tu perfil');
            $this->expertLanguages = $expert->languages;
        }
        $this->expertLanguages = $expert->languages;
        $this->__resets();
        session()->flash('success', 'Se actualizaron tus datos');
    }
    public function removeLanguage($key)
    {
        session()->forget('success');
        $expert = Expert::find($this->expert_id);
        $this->idiomaId = "20";
        $this->__resets();
        logger("borrar el lenguaje");
        logger($key['id']);
        try{
            $expert->languages()->detach($key['id']);
        }catch(\Exception $exception){
            session()->flash('error', 'Ocurrio un error. Vuelve a intentar');
            $this->expertLanguages = $expert->languages;
        }        
        $this->expertLanguages = $expert->languages;
        $this->__resets();
        session()->flash('delete_message', 'Se eliminaron tus datos');     
    }

    public function updatedidiomaId($key){
        logger('El idioma es ahora: ');
        logger($this->idiomaId);
        $this->ifSelectedIdiomaAndNivel();
    }

    public function updatednivelId($key)
    {
        logger('El nivel es ahora: ');
        logger($this->nivelId);
        $this->ifSelectedIdiomaAndNivel();        
    }

    public function ifSelectedIdiomaAndNivel()
    {
        if(empty($this->idiomaId) || empty($this->nivelId))
        {
            logger("deshabilitado");
            $this->isDisbledBtn = "disabled";
        }
        else{
            if(($this->idiomaId < 0) || ($this->nivelId <0) )
            {
                $this->isDisbledBtn = "disabled";
                logger("deshabilitado");
            }else{
                $this->isDisbledBtn = "false";  
                logger("habilitado");          
            }
        }
    }
   

    public function loadExpert()
    {
        $user = Auth::user();
        $expert = $user->usable;
        logger('Experto');
        logger($expert);
        $this->expert_id = $expert->id;
        $this->expertLanguages = $expert->languages;
    }    

    public function loadIdiomas() {
        $languages = Language::all();
        $languagesArray = [];
        foreach($languages as $language){
            if(!in_array($language['language'],$languagesArray)){
                array_push($languagesArray,$language['language']);
            }
        }
        $this->idiomas = $languagesArray;
        $nivel = array("Básico", "Intermedio", "Avanzado", "Nativo");
        $this->niveles = $nivel;
    }

    public function __resets()
    {
        $this->idiomaId = null;
        $this->nivelId = null;
    }
}
