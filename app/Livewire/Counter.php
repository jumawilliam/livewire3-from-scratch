<?php

namespace App\Livewire;
//use Livewire\Attributes\Title;
//use Livewire\Attributes\Layout;
use Livewire\Component;

class Counter extends Component
{
    public $count=0;
    public $limit=5;
    //#[Title('My Counter page')]
    //#[Layout('components.layouts.app')]
    public function render()
    {
        return view('livewire.counter')->layoutData([
          'metaKeys'=>'key1, key2,key3',
          'MetaDescription'=>'Some description',
          'metaAuthor'=>'Mr james somebody',
          'title'=>'My very  title'
        ]);
    }

    public function increment(){
          if($this->count<$this->limit){
            $this->count++;
          }else{
            session()->flash('status','The count is too high');
          }
            
    }
    public function decrement(){
            if($this->count>0){
                $this->count--;
            }else{
                session()->flash('status','The count is too low');  
            }
            
    }
}
