<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Customer;
class DynamicInput extends Component
{
    public $inputs;
    public function mount(){
        $this->fill([
            'inputs'=>collect([['name'=>'','email'=>'','phone'=>'']])
        ]);
    }
    public function render()
    {
        return view('livewire.dynamic-input');
    }

    public function remove($key){
         //dd($key);
         $this->inputs->pull($key);
    }

    public function add(){
        $this->inputs->push(['name'=>'','email'=>'','phone'=>'']);
    }

    public function save(){
        $validated=$this->validate(
            [
            'inputs.*.name'=>'required',
            'inputs.*.email'=>'required|email',
            'inputs.*.phone'=>'required|min:10|numeric',
            
            ],
            [
                'inputs.*.name.required'=>'The name field is required',
                'inputs.*.email.required'=>'The email field is required',
                'inputs.*.email.email'=>'please enter a valid email',
                'inputs.*.phone.required'=>'The phone field is required',
                'inputs.*.phone.min'=>'The phone field must be atleast 10 characters',
                'inputs.*.phone.numeric'=>'The phone field must be a number',
            ]
    );
     
     foreach($this->inputs as $input){
        Customer::create([
            'name'=>$input['name'],
            'email'=>$input['email'],
            'phone'=>$input['phone']
        ]);
     }
       
     $this->js("alert('customers saved')");

    }
}
