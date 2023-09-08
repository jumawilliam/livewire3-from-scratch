<div class="offset-3 col-6">
    <h1 class="h5">Dynamic Dependent Dropdown</h1>
    <div class="mb-3">
        <select wire:model.live="selectedcounty" class="form-select">
            <option value="">select county</option>
            @foreach($counties as $county)
            <option value="{{$county->id}}">{{$county->name}}</option>
            @endforeach
        </select>
    </div>
    @if(!is_null($selectedcounty))
    <div class="mb-3">
        <select class="form-select" wire:model="selectedsubcounty">
            <option value="">Select subcounty</option>
            @foreach($subcounties as $subcounty)
            <option value="{{$subcounty->id}}">{{$subcounty->name}}</option>
            @endforeach
        </select>
    </div>
    @endif
</div>
