<?php

namespace App\Livewire;

use Livewire\Component;

class UserDetails extends Component
{
    public $name;
    public $email;
    public $password;
    public $phone;
    public function render()
    {
        return view('livewire.user-details');
    }
    function save(){
        $this->validate([
            'name'=>'required',
            'email'=>'required|email',
            'phone'=>'required',
            'password'=>'required|min:8',
        ]);
        dd('saving');
    }
}
