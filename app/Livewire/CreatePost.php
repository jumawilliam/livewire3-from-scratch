<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Attributes\Rule;
use Livewire\Component;

class CreatePost extends Component
{
    #[Rule('required|min:6')]
    public $title;

    #[Rule('required|min:15')]
    public $description;

    public function render()
    {
        return view('livewire.create-post');
    }

    public function save()
    {
        $this->validate();

        $post = new Post;
        $post->title = $this->title;
        $post->description = $this->description;
        $post->save();

        session()->flash('success', 'Post created succesfully');
        $this->reset();
    }
}