<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\On;
class SweetAlert extends Component
{
    public function render()
    {
        return view('livewire.sweet-alert');
    }

    function save(){
       //save data

       $this->dispatch('swal',[
         'title'=>'Success!',
         'text'=>'Data saved succesfully!',
         'icon'=>'success',
       ]);
    }

    #[On('goOn-Delete')]
    function delete(){
        //code for deletion

        $this->dispatch('deleted');
    }
}
