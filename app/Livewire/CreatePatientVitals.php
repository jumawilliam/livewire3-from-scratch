<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\On;
class CreatePatientVitals extends Component
{
    public $pressure;
    public $weight;
    public $height;
    public $temperature;
    public function render()
    {
        return view('livewire.create-patient-vitals');
    }

    #[On('create-patient-vitals')]
    public function save(){
        $this->validate([
            'pressure'=>'required',
            'height'=>'required',
            'weight'=>'required',
            'temperature'=>'required',
        ]);
        //saving of the patient
        $this->reset();
        $this->js("alert('Patient saved')");
    }

    #[On('create-patient-vitals-close')]
    public function closeModal(){
        $this->reset();

        $this->js("alert('Patient vitals modal closed')");
    }
}
