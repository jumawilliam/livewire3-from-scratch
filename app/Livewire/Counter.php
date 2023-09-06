<?php

namespace App\Livewire;

//use Livewire\Attributes\Title;
use Livewire\Component;

class Counter extends Component
{
    public $count = 0;

    public $limit = 5;

    //#[Title('My Awesome Title')]
    public function render()
    {
        return view('livewire.counter')
            ->layoutData([
                'metaKeys' => 'key1,key2,key3',
                'metaDescription' => 'Some description',
                'metaAuthor' => 'somebodys name',

            ]);

    }

    public function increment()
    {
        if ($this->count < $this->limit) {
            $this->count++;
        } else {
            session()->flash('status', 'count too high');
        }

    }

    public function decrement()
    {
        if ($this->count > 0) {
            $this->count--;
        } else {
            session()->flash('status', 'count too low');
        }

    }
}
