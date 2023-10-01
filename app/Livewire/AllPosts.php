<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Post;
use Livewire\WithPagination;
class AllPosts extends Component
{
    use WithPagination;
    public $posts_per_page=2;
    public function render()
    {
        $posts=Post::paginate($this->posts_per_page);
        return view('livewire.all-posts',[
            'posts'=>$posts
        ]);
    }

    public function loadMore(){
        $this->posts_per_page +=6;
    }
}
