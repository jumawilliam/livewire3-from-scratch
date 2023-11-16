<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Reactive;
class ProductCount extends Component
{   #[Reactive]
    public $products;
    public function render()
    {
        return view('livewire.product-count',[
            'count'=>$this->products->count()
        ]);
    }
}
