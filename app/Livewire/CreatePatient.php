<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\On;
class CreatePatient extends Component
{
    public $name;
    public $email;
    public $phone;
    public function render()
    {
        return view('livewire.create-patient');
    }

    #[On('create-patient')]
    public function saveRecord(){
        $this->validate([
            'name'=>'required',
            'email'=>'required',
            'phone'=>'required',
        ]);
        //saving of the patient
        $this->reset();
        $this->js("alert('Patient saved')");
    }

    #[On('create-patient-close')]
    public function close(){
        $this->reset();
        $this->js("alert('create Patient modal  closed')");
    }
}
