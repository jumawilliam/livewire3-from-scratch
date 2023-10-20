<?php
use App\Models\user;
use function Livewire\Volt\{state};

state(['name']);
state(['email']);
state(['password']);

$save=function(){
    $validated=$this->validate([
        'name'=>'required|max:255',
        'email'=>'required|email|unique:users|max:255',
        'password'=>'required|min:4|max:255'
     ]);
     User::Create($validated);
     session()->flash('success','User has been created succefully');
}

?>

<div class="offset-3 col-6">
    <form wire:submit="save">
        @if(session('success'))
        <div class="alert alert-success">{{session('success')}}</div>
        @endif
        <div class="mb-3">
            <label  class="form-label">Name</label>
            <input wire:model="name" type="text" class="form-control" >
            @error('name')
            <span class="text-danger">{{$message}}</span>
            @enderror
          </div>
        <div class="mb-3">
          <label  class="form-label">Email address</label>
          <input wire:model="email" type="email" class="form-control" >
          @error('email')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="mb-3">
          <label  class="form-label">Password</label>
          <input wire:model="password" type="password" class="form-control" >
          @error('password')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</div>
