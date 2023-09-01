<div class="container">
<div class="card offset-3 col-6">
<div class="card-header">
 <livewire:create-user/>
</div>
<div class="card-body">
 @if(session('status'))
 <div class="alert alert-info">
    {{session('status')}}
 </div>
 @endif
<h1 class="text-success">Your Count is:{{$count}}</h1>
<button wire:click="decrement" class="btn btn-primary">Decrement</button >
    <button wire:click="increment" class="btn btn-secondary">Increment</button>
</div>
</div>
