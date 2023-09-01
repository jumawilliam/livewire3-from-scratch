<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;
class Createuser extends Component
{
    //public $users;
    public $name='Awesome Name';
    /*
    public function mount(){
        $this->users=User::all();
    }
    */
    public function render()
    {
        return view('livewire.createuser',[
            'email'=>'juma@j.com','users'=>User::all()
        ]);
    }
}
