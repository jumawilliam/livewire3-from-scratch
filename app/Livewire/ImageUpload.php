<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
class ImageUpload extends Component
{
    use WithFileUploads;
    public $image;
    public $id=1;
    public function render()
    {
        return view('livewire.image-upload');
    }
    function save(){
        $this->validate([
            'image'=>'required|mimes:jpeg,png,jpg,gif|max:2048'
        ]);
        $this->image->store('photos');
        session()->flash('success','File Saved');
        $this->resetImage();
    }
    function resetImage(){
        $this->reset('image');
        $this->id++;
        session()->flash('success','Image Reset');
    }
}
