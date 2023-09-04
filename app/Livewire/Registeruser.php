<?php

namespace App\Livewire;
use Livewire\Attributes\Rule;
use Livewire\Component;

class Registeruser extends Component
{
    #[Rule('required')]
    public $name;

    #[Rule('required|unique:users|email')]
    public $email;

    #[Rule('required|min:9')]
    public $password;

    public function render()
    {
        return view('livewire.registeruser');
    }

    public function save(){
        $this->validate();
        dd(123);
    }
}
