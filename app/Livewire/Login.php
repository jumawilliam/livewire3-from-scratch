<?php

namespace App\Livewire;

use Livewire\Component;

class Login extends Component
{   public $email;
    public $password;
    public $type="password";
    public function render()
    {
        return view('livewire.login');
    }

    public function togglePassword(){
        if($this->type==='password'){
            $this->type='text';
        }else{
            $this->type='password';
        }
    }
}
