<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Collection;

use App\Models\Expert;
use App\Models\Order;

class ShowOrders extends Component
{
    public $orders;

    public function updateOrders()
    {
        $user = Auth::user();
        $expert = $user->usable;        
        $this->orders = $expert->orders()->get();
    }

    public function mount()
    {
        $this->updateOrders();
    }

    public function render()
    {
        return view('livewire.show-orders',[
            'orders' => $this->orders
        ])
        ->layout('components.layouts.master');
    }

    
}
