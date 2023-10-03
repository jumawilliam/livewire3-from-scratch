<?php

namespace App\Livewire;

use Livewire\Component;

class MultiStep extends Component
{
    public $currentStep=1;
    public $total_steps=3;
    public $first_name;
    public $last_name;
    public $middle_name;
    public $phone;
    public $email;
    public $status;
    public $gender;

    public function render()
    {
        return view('livewire.multi-step');
    }

    public function incrementSteps(){
        $this->validateForm();
      if($this->currentStep<$this->total_steps){
        $this->currentStep ++;
      }
      
    }

    public function decrementSteps(){
        if($this->currentStep>1){
            $this->currentStep --;
        }
        
    }

    public function submit(){
        $validated=$this->validate([
            'status'=>'required',
            'gender'=>'required',
        ]);
        
        /*
        Register::create([
            'first_name'=>$this->first_name;
        ])
        */
        //dd('form submitted');
        $this->reset();
    }

    public function validateForm(){
        if($this->currentStep===1){
            $validated=$this->validate([
                'first_name'=>'required',
                'last_name'=>'required',
            ]);
        }elseif($this->currentStep===2){
            $validated=$this->validate([
                'email'=>'required|email|max:255',
                'phone'=>'required|min:10',
            ]);
        }
    }
}
