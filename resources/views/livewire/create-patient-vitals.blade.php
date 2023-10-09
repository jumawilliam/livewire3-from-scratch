<div>
    <div class="mb-3">
      <label  class="form-label">Pressure</label>
      <input wire:model="pressure" type="text" class="form-control" >
      @error('pressure')
        <span class="text-danger">{{$message}}</span>
      @enderror
    </div>
    <div class="mb-3">
        <label  class="form-label">Weight</label>
        <input wire:model="weight" type="text" class="form-control" >
        @error('weight')
          <span class="text-danger">{{$message}}</span>
        @enderror
      </div>
      <div class="mb-3">
        <label  class="form-label">Height</label>
        <input wire:model="height" type="number" class="form-control" >
        @error('height')
          <span class="text-danger">{{$message}}</span>
        @enderror
      </div>
      <div class="mb-3">
        <label  class="form-label">Temperature</label>
        <input wire:model="temperature" type="number" class="form-control" >
        @error('temperature')
          <span class="text-danger">{{$message}}</span>
        @enderror
      </div>
</div>

