<?php

namespace App\Livewire;
use Livewire\Attributes\Rule;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;
use App\Livewire\Forms\RegisterForm;
class Registeruser extends Component
{
    public RegisterForm $form;

    public function render()
    {
        return view('livewire.registeruser');
    }
    
  
    public function save(){
        $this->form->validate();
        dd(123);
    }

}
