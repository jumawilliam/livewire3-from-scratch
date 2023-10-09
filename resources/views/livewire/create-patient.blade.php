<div>
    <div class="mb-3">
      <label  class="form-label">Name</label>
      <input wire:model="name" type="text" class="form-control" >
      @error('name')
        <span class="text-danger">{{$message}}</span>
      @enderror
    </div>
    <div class="mb-3">
        <label  class="form-label">Email</label>
        <input wire:model="email" type="email" class="form-control" >
        @error('email')
          <span class="text-danger">{{$message}}</span>
        @enderror
      </div>
      <div class="mb-3">
        <label  class="form-label">phone</label>
        <input wire:model="phone" type="number" class="form-control" >
        @error('phone')
          <span class="text-danger">{{$message}}</span>
        @enderror
      </div>
</div>
