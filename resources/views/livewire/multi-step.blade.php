<div class="offset-3 col-6">
    <h1 class="d-flex justify-content-center">MultiStep Form</h1>
    <h6 class="d-flex justify-content-center"> step {{$currentStep}} out of {{$total_steps}}</h6>
    @if($currentStep===1)
    <h4 class="d-flex justify-content-center">Name</h4>
    <div class="mb-3">
        <label class="form-label">First Name</label>
        <input wire:model="first_name" type="text" class="form-control">
        @error('first_name')
        <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
    <div class="mb-3">
        <label class="form-label">Middle Name</label>
        <input wire:model="middle_name" type="text" class="form-control">
        @error('middle_name')
        <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
    <div class="mb-3">
        <label class="form-label">Last Name</label>
        <input wire:model="last_name" type="text" class="form-control">
        @error('last_name')
        <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
    @elseif($currentStep===2)
    <h4 class="d-flex justify-content-center">Contact Details</h4>
    <div class="mb-3">
        <label class="form-label">Email</label>
        <input wire:model="email" type="email" class="form-control">
        @error('email')
        <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
    <div class="mb-3">
        <label class="form-label">Phone</label>
        <input wire:model="phone" type="text" class="form-control">
        @error('phone')
        <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
    @elseif($currentStep===3)
    <h4 class="d-flex justify-content-center">Status/Gender</h4>
    <div class="mb-3">
        <label class="form-label">Marital Status</label>
        <select wire:model="status"  class="form-control">
            <option value="" selectected >select option</option>
            <option value="married" selectected >Married</option>
            <option value="single" selectected >Single</option>
        </select>
        @error('status')
        <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
    <div class="mb-3">
        <div class="form-check form-check-inline">
            <label class="form-label">Male</label>
            <input wire:model="gender" class="form-check-input" value="male" type="radio">
            
        </div>
        <div class="form-check form-check-inline">
            <label class="form-label">Female</label>
            <input wire:model="gender" class="form-check-input" value="female" type="radio">
            
        </div>
        @error('gender')
        <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
    @endif
    @if($currentStep>1)
    <button  wire:click="decrementSteps" class="btn btn-primary">Previous</button>
    @endif
    @if($currentStep<$total_steps)
    <button wire:click="incrementSteps" class="btn btn-primary">Next</button>
    @endif
    @if($currentStep===$total_steps)
    <button wire:click="submit" class="btn btn-success">Submit</button>
    @endif
</div>
