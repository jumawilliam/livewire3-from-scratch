<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
class DragDrop extends Component
{
    use WithFileUploads;
    public $files=[];
    public function render()
    {
        return view('livewire.drag-drop');
    }

    public function remove($index){
        unset($this->files[$index]);
    }

    public function uploadFiles(){
        $this->validate([
            'files.*'=>'file|required|max:1024|mimes:jpg,png,jpeg'
        ],
        [
            'files.*.mimes'=>'The upload must be jps,jpeg or png',
            'files.*.max'=>'The upload file size must not exceed 1024 kb'
        ]

        );
        foreach($this->files as $file){
            $file->store('files');
        }
       $this->reset('files');
       $this->js("alert('files uploaded succesfully!')");
       return $this->redirect('/drag-drop',navigate:true);
    }

}
