<?php

namespace App\Livewire;

use Livewire\Component;

class Transition extends Component
{
    public $showAlert=false;
    public function render()
    {
        return view('livewire.transition');
    }

    public function toggleAlert(){
        $this->showAlert=($this->showAlert==true)?false:true;
    }
}
