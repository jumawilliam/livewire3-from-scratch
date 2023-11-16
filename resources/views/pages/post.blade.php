<?php
//use App\Models\Post;
use function Livewire\Volt\{state};
state(['title']);
state(['content']);

$save=function(){
    $validated=$this->validate([
        'title'=>'required|min:10',
        'content'=>'required|min:30'
   ]);

   //Post::create($validated);
}

?>
<x-layouts.app>
@volt
<div>
  <form wire:submit="save">
    <div class="mb-3">
        <label class="form-label">Title</label>
        <input type="text" wire:model="title" class="form-control">
        @error('title')
            <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
    <div class="mb-3">
        <label class="form-label">Content</label>
        <input id="id22" type="hidden"  name="content" value="{{$content}}">
        <trix-editor input="id22" class="trix-content"></trix-editor>
        @error('content')
            <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
    <button type="submit" class="btn btn-primary">submit</button>
  </form>
</div>
<script>
    const trixEditor=document.getElementById('id22');
    addEventListener("trix-blur",(event)=>{
        @this.set('content',trixEditor.getAttribute('value'))
    })
</script>
@endvolt
</x-layouts.app>
