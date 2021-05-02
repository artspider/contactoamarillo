<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ShowDescrpition extends Component
{
    public $description;

    public function render()
    {
        return <<<'blade'
            <div>
                {!! $this->description !!}
            </div>
        blade;
    }
}
