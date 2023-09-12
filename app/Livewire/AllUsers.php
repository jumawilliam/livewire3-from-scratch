<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;
use Livewire\WithPagination;
class AllUsers extends Component
{
    use Withpagination;
    public $q;
    public $pagination=10;
    public function render()
    {
        if(!$this->q){
            $users=User::simplePaginate($this->pagination);
        }else{
            $users=User::where('name','like','%'.$this->q.'%')
                        ->orWhere('email','like','%'.$this->q.'%')
                        ->simplePaginate($this->pagination);
        }
        return view('livewire.all-users',[
            'users'=>$users,
        ]);
    }

    public function updatedQ(){
        $this->resetPage();
    }
}
