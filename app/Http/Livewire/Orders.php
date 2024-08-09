<?php

// app/Http/Livewire/Orders.php
namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Order;

class Orders extends Component
{
    public $searchTerm;

    public function render()
    {
        $orders = Order::when($this->searchTerm, function($query) {
            $query->where('client_name', 'like', '%'.$this->searchTerm.'%')
                  ->orWhere('phone_number', 'like', '%'.$this->searchTerm.'%');
        })->get();

        return view('livewire.orders', ['orders' => $orders]);
    }
}

