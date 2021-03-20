<?php

namespace App\View\Components;

use Illuminate\View\Component;

class buttoncomponent extends Component
{
    public $type;    
    public $alpine;
    /* public $option; */
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($type = "primary", $alpine)
    {
       
        if($type == "secondary"){
            $this->type = "2";
            /* $this->option= "option = 2"; */
            $this->alpine = $alpine;            
        }else if($type == "primary"){
            $this->type = "1";
            /* $this->option= "option = 1"; */
            $this->alpine = $alpine;
        }else{
            $this->type = $type;
            /* $this->option= "option = 1 "; */
            $this->alpine = $alpine;
        }
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.buttoncomponent');
    }
}
