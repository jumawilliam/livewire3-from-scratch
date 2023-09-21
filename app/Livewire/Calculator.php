<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Str;
class Calculator extends Component
{
    public $expression=0;
    public function render()
    {
        return view('livewire.calculator');
    }

    public function resetCalc(){
        $this->reset();
    }

    public function digit($digit){
        if($this->expression===0){
             $this->expression=$digit;
        }else{
            $this->expression=$this->expression.$digit;
        }
    }

    public function sign($sign){
        if(Str::endswith($this->expression,['/','+','-','*','.'])){
            $this->expression=Str::substrReplace($this->expression,$sign,-1);
        }else{
            $this->expression=$this->expression.$sign;

        }
    }

    public function backspace(){
        if(Str::length($this->expression>1)){
            $this->expression=Str::substrReplace($this->expression,'',-1);
        }else{
            $this->reset('expression');
        }
    }

    public function execute(){
        if(Str::endswith($this->expression,['/','+','-','*','.'])){
            session()->flash('status','Operation invalid');
        }elseif(Str::contains($this->expression,'/0')){
            session()->flash('status','division by zero is undefined');
        }else{
            $this->expression=eval("return $this->expression;");
        }
       
    }

}
