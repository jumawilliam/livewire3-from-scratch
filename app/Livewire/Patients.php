<?php

namespace App\Livewire;

use Livewire\Component;

class Patients extends Component
{
    public $title='Create Patient';
    public $title1='Create Patient Vitals';
    public $event='create-patient';
    public $event1='create-patient-vitals';
    public function render()
    {
        return view('livewire.patients');
    }
}
