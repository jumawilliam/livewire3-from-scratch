<div class="card offset-3 col-6">
<div class="card-body">
    <p>{{$name}}</p>
    <p>{{$email}}</p>
    <input type="text" wire:model.live="name">
    @foreach ($users as $user)
    <div wire:key="{{$user->id}}">
        <p>{{$user->name}}</p>
    </div>  
    @endforeach
</div>
   
</div>
