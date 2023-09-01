<div>
    <h1>{{$name}}</h1>
    <h1>{{$email}}</h1>
    {{-- The whole world belongs to you. --}}
    @foreach($users as $user)
    <div wire:key="{{$user->id}}">
        <p>{{$user->name}}</p>
    </div>
    @endforeach
    
    <input type="text" wire:model.live="name">
</div>
