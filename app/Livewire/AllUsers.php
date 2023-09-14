<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;
use Livewire\WithPagination;
use Livewire\Attributes\Computed;
class AllUsers extends Component
{
    use Withpagination;
    public $q;
    public $pagination=10;
    #[Computed(persist:true,seconds:7200)]
    public function users(){
        if(!$this->q){
            return User::simplePaginate($this->pagination);
        }else{
            return User::where('name','like','%'.$this->q.'%')
                        ->orWhere('email','like','%'.$this->q.'%')
                        ->simplePaginate($this->pagination);
        }
    }
    public function render()
    {
        
        return view('livewire.all-users');
    }

    public function updatedQ(){
        $this->resetPage();
    }
}
