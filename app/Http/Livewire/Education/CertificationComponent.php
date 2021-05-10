<?php

namespace App\Http\Livewire\Education;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

use App\Models\Expert;
use App\Models\Certification;

class CertificationComponent extends Component
{
    public $isCertEdit;
    public $certificado;
    public $emisor;
    public $anio;
    public $url;
    public $certificaciones;
    public $certificacion_id;
    public $expert_id;
    
    protected $listeners = [
        'removeCertificacion' => 'deleteCertification',
    ];

    public function deleteCertification($id)
    {
        $certificacion = Certification::find($id);
        try{
            $certificacion->delete();
            $this->updateCertificaciones($this->expert_id);
            $this->emit('success','Se elimino tu registro');            
        }catch(Error $e){
            $this->emit('error','Ocurrio un error vuelve a intentarlo mas tarde');
        }
        
    }

    public function updateCertificaciones()
    {
        $expert = Expert::find($this->expert_id);
        $this->certificaciones = $expert->certifications;        
    }

    public function mount()
    {
        $this->isCertEdit = false;
        $user = Auth::user();
        $expert = $user->usable;
        $this->expert_id = $expert->id;
        $this->updateCertificaciones();
    }

    public function render()
    {
        return view('livewire.education.certification-component',[
            'certificaciones' => $this->certificaciones
        ]);
    }

    public function saveCertification()
    {
        $data = $this->validate([
            'certificado' => 'required|min:3',
            'emisor' => 'required|min:3',
            'anio' => 'required|size:4',
            'url' => 'required|regex: /^(https?:\/\/)?([\da-z\.-]+)\.([a-z\.]{2,6})([\/\w \.-]*)*\/?$/',
            ]);

        $certification = new Certification();
        $certification->certificado = $this->certificado;
        $certification->emisor = $this->emisor;
        $certification->anio_de_emision = $this->anio;
        $certification->url = $this->url;
        $certification->expert_id = $this->expert_id;
        $certification->save();

        $this->certificado = "";
        $this->emisor = "";
        $this->anio = "";
        $this->url = "";

        $this->updateCertificaciones();
        $this->emit('success', 'Se actualizaron tus datos');
    }

    public function toEditForm($id)
    {
        $this->isCertEdit = true;
        $certificacion = Certification::find($id);
        $this->certificado = $certificacion->certificado;
        $this->emisor = $certificacion->emisor;
        $this->anio = $certificacion->anio_de_emision;
        $this->url = $certificacion->url;
        $this->certificacion_id = $certificacion->id;
    }

    public function updateCertification()
    {
        $certificacion = Certification::find($this->certificacion_id);
        $certificacion->certificado = $this->certificado;
        $certificacion->emisor = $this->emisor;
        $certificacion->anio_de_emision = $this->anio;
        $certificacion->url = $this->url;
        $certificacion->save();
        $this->updateCertificaciones();
        $this->emit('success', 'Se actualizaron tus datos');
        $this->__resets();
        $this->isCertEdit = false;        
    }

    public function cancelEditCertification()
    {
        $this->__resets();
        $this->isCertEdit = false;        
    }

    public function __resets()
    {
        $this->certificado = null;
        $this->emisor = null;
        $this->anio = null;
        $this->url = null;
    }
}
