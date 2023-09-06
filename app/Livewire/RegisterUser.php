<?php

namespace App\Livewire;

use App\Livewire\Forms\RegisterForm;
//use Livewire\Attributes\Rule;
use App\Models\User;
use Livewire\Component;

class RegisterUser extends Component
{
    public RegisterForm $form;

    public function render()
    {
        return view('livewire.register-user');
    }

    public function save()
    {
        $this->form->validate();
        User::create([
            'name' => $this->form->name,
            'email' => $this->form->email,
            'password' => bcrypt($this->form->password),
        ]);

    }
}
