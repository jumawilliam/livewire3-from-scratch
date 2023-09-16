<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Rule;
class CreateProduct extends Component
{
    #[Rule('required')]
    public $title;

    #[Rule('required')]
    public $description;

    #[Rule('required')]
    public $price;
    public function render()
    {
        return view('livewire.create-product');
    }

    public function save(){
        $validated=$this->validate();
        //Product::create($validated);
        session()->flash('status','product created');
        $this->reset();
    }

    public function close(){
        $this->reset();
    }
}
