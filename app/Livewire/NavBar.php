<?php

namespace App\Livewire;

use Livewire\Component;
//use Livewire\Attributes\Lazy;
//#[Lazy]
class NavBar extends Component
{
  
  
    public function render()
    {   
        //sleep(5);
        return view('livewire.nav-bar');
    }
}
