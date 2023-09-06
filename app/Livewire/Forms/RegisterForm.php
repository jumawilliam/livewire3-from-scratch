<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Rule;
use Livewire\Form;

class RegisterForm extends Form
{
    #[Rule('required', message: 'Please enter your name')]
    public $name;

    #[Rule('required|email')]
    public $email;

    #[Rule('required|min:8')]
    public $password;
}
