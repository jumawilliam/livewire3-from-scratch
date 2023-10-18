<?php

namespace App\Livewire;

use Livewire\Component;
//use Livewire\Attributes\Lazy;
//#[Lazy]
class NavBar extends Component
{

    public $mode=false;
    public $type='light';
    public function render()
    {
        //sleep(5);
        return view('livewire.nav-bar');
    }

    function UpdatedMode(){
        $this->mode !=$this->mode;
       if($this->mode){
         $this->type='Dark';
       }else{
        $this->type='Light';
       }
       $this->dispatch('change-theme');

    }
}
