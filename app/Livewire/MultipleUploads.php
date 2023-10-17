<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\Attributes\Rule;
class MultipleUploads extends Component
{
    use WithFileUploads;
    #[Rule(['files.*'=>'file|required|max:1024'])]
    public $files=[];
    public $id=1;
    public function render()
    {
        return view('livewire.multiple-uploads');
    }

    public function uploadFile(){
        $this->validate();

        foreach($this->files as $file){
            $file->store('files');
        }
        $this->reset('files');
        $this->id++;
        session()->flash('success','Files saved succesfully');
    }
}
