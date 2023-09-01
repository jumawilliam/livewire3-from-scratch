<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class CreateUser extends Component
{
    //public $users;

    public $name = 'Awesome title';
    /*
    public function mount()
    {
        $this->users = User::all();
    }
    */

    public function render()
    {

        return view('livewire.create-user',
            ['users' => User::all(), 'email' => 'juma@xx.com']);
    }
}
