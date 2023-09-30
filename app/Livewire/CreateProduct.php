<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Rule;
use Livewire\Attributes\On;
use App\Models\Product;
class CreateProduct extends Component
{
    public $product;
    public $formtitle='Create Product';
    public $editform=false;
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
        Product::create($validated);
        $this->dispatch('refresh-products');
        session()->flash('status','product created');
        $this->reset();
    }

    #[On('reset-modal')]
    public function close(){
        $this->reset();
    }

    #[On('edit-mode')]
    public function edit($id){
        //dd($id);
        $this->editform=true;
        $this->formtitle='Edit Product';
        $this->product=Product::findOrfail($id);
        $this->title=$this->product->title;
        $this->description=$this->product->description;
        $this->price=$this->product->price;
    }

    public function update(){
        $validated=$this->validate();
        $p=Product::findOrFail($this->product->id);
        $p->update($validated);
        $this->dispatch('refresh-products');
        session()->flash('status','Product updated succesfully');

    }
}
