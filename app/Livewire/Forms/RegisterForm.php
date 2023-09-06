<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Rule;
use Livewire\Form;

class RegisterForm extends Form
{
    #[Rule('required', message: 'your name is required')]
    public $name;

    #[Rule('required|email')]
    public $email;

    #[Rule('required|min:9')]
    public $password;
}
