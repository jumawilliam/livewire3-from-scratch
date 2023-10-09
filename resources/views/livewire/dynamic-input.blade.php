<div class="card">
    <div class="card-header">
        Dynamic input
    </div>
    <div class="card-body">
        @foreach($inputs as $key=>$value)
       <div class="row">
        <div class="col">
            <input wire:model="inputs.{{$key}}.name" type="text" class="form-control" placeholder="name">
            @error('inputs.'.$key.'.name')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="col">
            <input wire:model="inputs.{{$key}}.email" type="email" class="form-control" placeholder="email">
            @error('inputs.'.$key.'.email')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="col">
            <input wire:model="inputs.{{$key}}.phone" type="number" class="form-control" placeholder="phone">
            @error('inputs.'.$key.'.phone')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="col">
            <button wire:click="remove({{$key}})" class="btn btn-danger btn-sm">Remove</button>
        </div>
        </div> 
        @endforeach 
    </div>
    <div class="card-footer">
        <button wire:click="add" class="btn btn-primary btn-sm">Add</button>
        <button wire:click="save" class="btn btn-success btn-sm">Save</button>
    </div>
    
</div>
