<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Product;
use Livewire\Attributes\On;
class AllProducts extends Component
{
    public $products;
    public function mount(){
        $this->products=Product::all();
    }
    public function render()
    {
        return view('livewire.all-products');
    }

    #[On('refresh-products')]
    public function refreshProducts(){
        $this->products=Product::all();
    }

    
}
