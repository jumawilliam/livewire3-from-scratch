<?php

namespace App\Livewire;

use Livewire\Component;

class NavBar extends Component
{
    public function render()
    {
        sleep(5);
        return view('livewire.nav-bar');
    }
}
