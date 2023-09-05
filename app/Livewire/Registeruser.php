<?php

namespace App\Livewire;
//use Livewire\Attributes\Rule;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;

class Registeruser extends Component
{
    //#[Rule('required', message: 'your name is required')]
    public $name;

    //#[Rule('required|unique:users|email')]
    public $email;

    //#[Rule('required|min:9')]
    public $password;

    public function render()
    {
        return view('livewire.registeruser');
    }
    
    /*
    public function rules(){
        return[
            'name'=>'required',
            'email'=>'required|unique:users|email',
            'password'=>'required|min:7'
        ];
    }
    */
    public function save(){
       // $this->validate();
        /*
        $validated=$this->validate([
            'name'=>'required',
            'email'=>'required|unique:users|email',
            'password'=>'required|min:7',
        ]);
        */
        $validated=Validator::make(
            //data that we are validating
            [
                'name'=>$this->name,
                'email'=>$this->email,
                'password'=>$this->password,

            ],

            [
                'name'=>'required',
                'email'=>'required|unique:users|email',
                'password'=>'required|min:7',
            ],

            ['required'=>'The :attribute field is required']
        )->validate();
        dd(123);
    }

}
